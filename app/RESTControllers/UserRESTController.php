<?php
// namespace core\Controller;

require_once dirname( __FILE__ ) . '/../../core/Controller/UserController.php';

class UserRESTController extends UserController {
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

	public function registerUser( $details ) {
		$details = @json_decode( $details );
		
		// If JSON format is not valid
		if ( $details == false )
			return array( "status" => 400, "msg" => "Bad Format" );
		
		// Return: false OR LAST_ID
		$result = parent::registerUser( $details );
		
		if ( !$result )
			return array( "status" => 400, "msg" => "general error" );
			
		return array( "success" => 1 );
	}
}