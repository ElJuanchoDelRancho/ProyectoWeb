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
			$cat = ucwords($_GET['cat']);
			$x = new Productos();
			$datos = $x->getByCategory($cat);
			Views::setTitle('Productos');
			Views::setData('datos_p', $datos);
			Views::Render('product', 'products');
		}

	}

?>