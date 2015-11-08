<?php
require_once dirname( __FILE__ ) . '/Model.php';

class AlbumModel extends Model {

	public function __construct() {
		parent::__construct();
	}

	/*
	 * Opening connection to DB, sending query: SELECT ALL FROM ALBUMS; Result in $results
	 *
	 * If success: Put into new and empty array $albums all the albums off $results (albums from DB) by fetch_assoc
	 * and return all albums in $albums
	 * Otherwise: Null
	 */

	public function getAllAlbums() {
		$results = $this->_db->query( "SELECT * FROM albums" );
		
		if ( $results ) {
			$albums = array();
			while ( $row = $results->fetch_assoc() )
				$albums[] = $row;

			return $albums;
		}
		
		return NULL;
	}
//
//	public function deleteAlbum( $id ) {
//		$success = $this->_db->query( "DELETE FROM albums WHERE album_id = $id" );
//
//		return $success;
//	}
//
//	public function insertNewAlbum( $details ) {
//		$success = $this->_db->query( "INSERT INTO albums (album_title, album_length, album_numsongs, album_gener, album_cover_photo) VALUES ('".$details['album_title']."','".$details['album_length']."','".$details['album_numsongs']."','".$details['album_gener']."','".$details['album_cover_photo'].")" );
//
//		if ( $success )
//			return $this->_db->insert_id;
//
//		return false;
//	}
}