<?php
require_once basedir( __FILE__ ) . "/../Model/UserModel.php";
require_once basedir( __FILE__ ) . "/../lib/Validation.class.php";


class UserController extends Controller {
	protected $validator = new Validation();

	public function __construct() {
		$this->model = new UserModel();
	}
	
	public function isUserExists( $id ) {
		if ( is_numeric( $id ) )
			return $this->model->isUserExists( $id );
			
		return false;
	}
	
	public function isEmailExists( $email ) {
		if ( REGEX $email )
			return $this->model->isEmailExists( $email );
			
		return false;
	}

	public function registerUser( $details ) {
		if ( $details['email'] ) {}
		// Validations
		else {}
		// If Validation failed! return false;

		return $this->model->registerUser( $details );
	}	
}