<?php
require_once dirname( __FILE__ ) . '/../lib/DB.class.php';
require_once dirname( __FILE__ ) . '/Model.php';

class UserModel extends Model {
	public function registerUser( $details ) {
		$result = $this->_db("....................");
		if ( $result )
			return $this->_db->insert_id;
		
		return false;
	}
	
	public function isEmailExists( $email ) {
		// Check DB
	}
}