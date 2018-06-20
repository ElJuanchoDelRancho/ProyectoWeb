<?php

	class ProductsController extends BaseController
	{

		public function __construct() { }

		public function Select()
		{
			$session = new Login();
			$id = $_GET['id'];
			$productos = new Productos();
			$datos = $productos->getProductos($id);
			Views::setTitle('Productos');
			Views::setData('datos_p', $datos);
			Views::Render('product', 'product');
		}

		public function Category()
		{
			$session = new Login();
			$cat = ucwords($_GET['cat'], "-");
			$sexo = ucwords($_GET['s']);
			$x = new Productos();
			$datos = $x->getByCategory($cat, $sexo);
			Views::setTitle('Productos');
			Views::setData('datos_p', $datos);
			Views::Render('product', 'products');
		}

		public function Search()
		{
			
		}

		public function Confirmation()
		{
			$session = new Login();
			Views::setTitle("Fecha de envio");
			Views::Render('product', 'confirmation');
		}

		public function Cart()
		{
			$session = new Login();
			if (isset($_POST['compra']))
			{
				$cuentaController = new Cuentas();
				$usuario = $cuentaController->getCuentasByUsername($_SESSION['nombre_usuario']);
				
				date_default_timezone_set('America/Mexico_City');
				$fechaPedido = date("Y-m-d");
				$fechaA = $fechaPedido;
				$arr = explode("-", $fechaA);
				$jd = GregorianToJD($arr[1], $arr[2], $arr[0]);
				$dia = JDDayOfWeek($jd, 0);

				$x = 1;
				while($x < 4) {
					$fechaA = strtotime("+1 day", strtotime($fechaA));
					$fechaA = date("Y-m-d", $fechaA);
					$arr = explode("-", $fechaA);
					$jd = GregorianToJD($arr[1], $arr[2], $arr[0]);
					$dia = JDDayOfWeek($jd, 0);
					if($dia != 0 && $dia != 6) {
						$x++;
					}
				}

				$nuevaFactura = new Facturas();
				$idFactura = $nuevaFactura->createFacturas($usuario['id'], 0, $fechaPedido, $fechaA, 0);

				$controller = new CartController();
				$carrito = $controller->GetItems();

				$total = 0;
				$items = 0;
				foreach ($carrito as $x) {
					$nuevaVenta = new Ventas();
					$nuevaVenta->createVentas($x['id'], $x['cantidad'], $x['subtotal'], $idFactura);
					$total += $x['subtotal'];
					$items += $x['cantidad'];
				}

				$descuentos = new Descuentos();
				$listaDescuentos = $descuentos->readDescuentos();
				$descuento = 0;
				foreach ($listaDescuentos as $desc) {
					if ($items >= $desc['cantidad']) {
						$descuento = $desc['porcentaje'];
					}
				}
				$total -= $total * ($descuento / 100);
				$nuevaFactura->updateFacturas($idFactura, $usuario['id'], $total, $fechaPedido, $fechaA, 0);
				$_SESSION['id_factura'] = $idFactura;

				$controller->Empty();

				header("Location: ./?c=products&a=bill");
			}

			$sessionExists = $session->thereIsSession();
			$controller = new CartController();
			$carrito = $controller->GetItems();
			Views::setTitle('Carrito');
			Views::setData('carrito', $carrito);
			Views::setData('sesion', $sessionExists);
			Views::Render('product', 'cart');
		}

		public function Bill()
		{
			$session = new Login();
			$sessionExists = $session->thereIsSession();
			if ($sessionExists == false)
				return false;
			if (!isset($_SESSION["id_factura"]))
				return false;
			$idFactura = $_SESSION['id_factura'];
			Views::setTitle('Factura');
			Views::setData('idFactura', $idFactura);
			Views::setData('sesion', $sessionExists);
			Views::Render('product', 'bill');
		}

	}

?>