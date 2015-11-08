<?php
require_once basedir( __FILE__ ) . "/../Model/SearchModel.php";


class SearchController extends Controller {

	public function __construct() {
		$this->model = new SearchModel();
	}
}