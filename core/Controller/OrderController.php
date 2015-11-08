<?php
require_once basedir( __FILE__ ) . "/../Model/OrderModel.php";


class OrderController extends Controller {

	public function __construct() {
		$this->model = new OrderModel();
	}
}