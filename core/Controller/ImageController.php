<?php
require_once basedir( __FILE__ ) . "/../Model/ImageModel.php";


class ImageController extends Controller {

    public function __construct() {
        $this->model = new ImageModel();
    }
}