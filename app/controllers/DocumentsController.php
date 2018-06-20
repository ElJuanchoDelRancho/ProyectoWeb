<?php

    class DocumentsController extends BaseController {

        public function __construct() { }

        public function PDF() {

            $idFactura = $_GET['id'];

            $pdf = new PDFController();
            $filename = 'facturaPDF-'.date("Y-m-d-H-i-s").'.pdf';

            $facturas = new Facturas();
            $info = $facturas->getFacturas($idFactura);

            $idUsuario = $info['id_usuario'];
            $usuarios = new Usuarios();
            $usuarios->id = $idUsuario;
            $user = $usuarios->getUsuarios();

            $direccion = new Direcciones();
            $miDireccion = $direccion->getDireccionesIdUsuario($user['id']);

            $ventas = new Ventas();
            $misVentas = $ventas->getVentasFactura($idFactura);

            $cantProd = 0;
            foreach ($misVentas as $x) {
            	$cantProd += $x['cantidad'];
            }

            $pdf->AliasNbPages();
            $pdf->AddPage('L', 'A4', 0);
            $pdf->details(
                $user['nombres'],
                $user['apellidos'],
                $miDireccion['calle']." #".$miDireccion['num_int'].$miDireccion['num_ext'],
                $idFactura,
                $miDireccion['codigo_postal'],
                $info['fechaPedido'],
                $info['fechaEntrega'],
                $cantProd
            );

            $pdf->headerTable();
            
            $ventas = new Ventas();
            $misVentas = $ventas->getVentasFactura($idFactura);

            $cantProd = 0;
            foreach ($misVentas as $x) {
            	$productos = new Productos();
            	$data = $productos->getProductos($x['id_producto']);
            	$cantProd += $x['cantidad'];
                $pdf->setContentTable($data['nombre'],$data['precio'],$data['descripcion'],$x['cantidad'],$x["subtotal"]);
            }

            $pdf->setTotal($info['total']);
            
            $pdf->Output('./bills/'.$filename, 'F');

            // Redirigimos para descarga
            header("Location: download.php?filename=$filename&path=bills/$filename");
        }
        
        public function XML() {

            $idFactura = $_GET['id'];
            // Crear XML
            $xml = new DomDocument("1.0", "UTF-8");

            $facturas = new Facturas();
            $info = $facturas->getFacturas($idFactura);

            $idUsuario = $info['id_usuario'];
            $usuarios = new Usuarios();
            $usuarios->id = $idUsuario;
            $user = $usuarios->getUsuarios();

            $ventas = new Ventas();
            $misVentas = $ventas->getVentasFactura($idFactura);

            $direccion = new Direcciones();
            $miDireccion = $direccion->getDireccionesIdUsuario($user['id']);

            $bill = $xml->createElement("factura");
            $bill = $xml->appendChild($bill);

            $products = $xml->createElement("productos");
            $products = $bill->appendChild($products);

            $id = $xml->createElement("numerofactura", $info['id']);
            $id = $bill->appendChild($id);
            
            $username = $xml->createElement("nombre", $user['nombres']);
            $username = $bill->appendChild($username);

            $lastnames = $xml->createElement("apellidos", $user['apellidos']);
            $lastnames = $bill->appendChild($lastnames);

            $address = $xml->createElement("direccion", $miDireccion['calle']." ".$miDireccion['num_int'].$miDireccion['num_ext']);
            $address = $bill->appendChild($address);

            $CP = $xml->createElement("codigopostal", $miDireccion['codigo_postal']);
            $CP = $bill->appendChild($CP);

            $cantProd = 0;
            foreach ($misVentas as $x) {
            	$productos = new Productos();
            	$data = $productos->getProductos($x['id_producto']);

            	$product = $xml->createElement("producto");
                $product = $products->appendChild($product);

                $name = $xml->createElement("nombre", $data['nombre']);
                $name = $product->appendChild($name);

                $qty = $xml->createElement("cantidad", $x["cantidad"]);
                $qty = $product->appendChild($qty);

                $price = $xml->createElement("precio", $data['precio']);
                $price = $product->appendChild($price);

                $desc = $xml->createElement("descripcion", $data['descripcion']);
                $desc = $product->appendChild($desc);

                $sub = $xml->createElement("subtotal", '$ '.$x["subtotal"]);
                $sub = $product->appendChild($sub);

            	$cantProd += $x['cantidad'];
            }

            $fp = $xml->createElement("fechapedido", $info['fechaPedido']);
            $fp = $bill->appendChild($fp);

            $fe = $xml->createElement("fechaentrega", $info['fechaEntrega']);
            $fe = $bill->appendChild($fe);

            $tot = $xml->createElement("total", '$ '.$info['total']);
            $tot = $bill->appendChild($tot);

            // Nombre del archivo
            $filename = 'facturaXML-'.date("Y-m-d-H-i-s").'.xml';

            $xml->formatOutput = true;
            $el_xml = $xml->saveXML();
            $xml->save('./bills/'.$filename);

            // Redirigimos para descarga
            header("Location: download.php?filename=$filename&path=bills/$filename");
        }

    }

?>