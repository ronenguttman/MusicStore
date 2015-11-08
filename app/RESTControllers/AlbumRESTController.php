<?php
// namespace core\Controller;

/*
 * TAKE NOTE:
 * In this case Omer linked this AlbumRESTController to the AlbumModel and the general controller
 * AND NOT to AlbumController (what might be a mistake!)
 *
 * require_once dirname( __FILE__ ) . '/../../core/Model/AlbumModel.php';
 * require_once dirname( __FILE__ ) . '/../../core/Controller/Controller.php';
 *
 * OR the following (active)
 */

require_once dirname( __FILE__ ) . '/../../core/Controller/AlbumController.php';

class AlbumRESTController extends AlbumController {
	public $model;

	protected function buildAnswer( $error, $answer, $code = 200 ) {
		$response = array(
			"code" => $code,
		);

		if ( $error )
			$response["error"] = $answer;
		else
			$response["result"] = $answer;

		return $response;
	}

	public function searchAlbums( $term ) {
		$result = parent::searchAlbums( $term );
		
		if ( is_array( $result ) )
			return $this->buildAnswer( 0, array("albums" => $result) );
		elseif ( $result == NULL )
			return $this->buildAnswer( 1, "empty results", 402 );
		else
			return $this->buildAnswer( 1, "invalid search", 400 );
	}

	public function insertNewAlbum( $details ) {
		$insert_id = parent::insertNewAlbum( $details );
		
		if ( $insert_id )
			return $this->buildAnswer( 0, 200, array( "success" => 1, "insert_id" => $insert_id ) );
		
		return $this->buildAnswer( 1, 400, array( "success" => 1, "insert_id" => $insert_id ) );
	}
}