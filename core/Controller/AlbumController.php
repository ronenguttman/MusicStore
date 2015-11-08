<?php

/*
 * The version in comment
 * OR the version down (active)
 */

//require_once basedir( __FILE__ ) . "/../Model/AlbumModel.php";
//
//
//class AlbumController extends Controller {
//
//    public function __construct() {
//        $this->model = new AlbumModel();
//    }
//}

require_once dirname( __FILE__ ) . '/../Model/AlbumModel.php';
require_once dirname( __FILE__ ) . '/Controller.php';

class AlbumController extends Controller {
    public $model;

    public function __construct() {
        $this->model = new AlbumModel();
    }

    public function getAllAlbums() {
        $albums = $this->model->getAllAlbums();

        if ( $albums !== NULL )
            return $albums;
        else
            return false;
    }

    public function searchAlbums( $term ) {
        if ( strlen( $term ) < 3 )
            return false;

        $albums = $this->model->searchAlbums( $term );

        if ( $albums !== false )
            return $albums;

        return false;
    }

    public function deleteAlbum( $id ) {
        $delete = $this->model->deleteAlbum( $id );

        if ( $delete )
            return array( "success" => true );

        return array( "error" => 1, "msg" => "Failed to delete" );
    }
}