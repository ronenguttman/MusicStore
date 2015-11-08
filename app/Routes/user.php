<?php

require_once dirname( __FILE__ ) .  '/../RESTControllers/UserRESTController.php';

$user = new UserRESTController();


$app->post('/user/', 'authenticate', function() use ( $user, $app ) {
	$user_details = $app->request->getBody();
	$answer = $user->registerUser( $user_details );
	
	if ( !$answer["success"] ) {
		$app->response()->status( $answer["status"] );
		$app->response()->header( 'X-Status-Reason', $answer["msg"] );
	}
	
	echo json_encode( $answer );
});

$app->put('/user/', 'authenticate', function() use ( $user, $app ) {
});

$app->delete('/user/', 'authenticate', function() use ( $user, $app ) {
});

$app->get('/user/', 'authenticate', function() use ( $user, $app ) {
});