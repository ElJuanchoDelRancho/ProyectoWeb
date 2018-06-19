<?php

	class CartController extends BaseController {
		
		public function __construct() {	}

		public function AddItem() {
			if (isset($_POST['producto'])) {
				$carrito = array();
				if (isset($_COOKIE['carrito'])) {
					$carrito = unserialize($_COOKIE['carrito']);
				}
				$data = json_decode($_POST['producto']);
				$lastPos = count($carrito);
				$carrito[$lastPos]['id'] = $data[0];
				$carrito[$lastPos]['nombre'] = $data[1];
				$carrito[$lastPos]['descripcion'] = $data[2];
				$carrito[$lastPos]['cantidad'] = $data[3];
				$carrito[$lastPos]['subtotal'] = $data[4];
				$carrito[$lastPos]['imagen'] = $data[5];
				setcookie('carrito', serialize($carrito), time() + (86400 * 3));
			}
		}

		public function DeleteItem() {
			if (isset($_POST['borrar'])) {
				$carrito = array();
				if (isset($_COOKIE['carrito'])) {
					$carrito = unserialize($_COOKIE['carrito']);
				}
				$posicion = $_POST['borrar'];
				unset($carrito[$posicion]);
				setcookie('carrito', serialize($carrito), time() + (86400 * 3));
			}
		}

		public function Empty() {
			setcookie("carrito", "", time()-3600);
			unset($_COOKIE['carrito']);
		}

		public function GetItems() {
			if (isset($_COOKIE['carrito'])) {
				$carrito = unserialize($_COOKIE['carrito']);
				return $carrito;
			} else {
				return array();
			}
		}

		public function GetCount() {
			if (isset($_COOKIE['carrito'])) {
				$carrito = unserialize($_COOKIE['carrito']);
				echo count($carrito);
			} else {
				echo 0;
			}
		}

	}

?>
