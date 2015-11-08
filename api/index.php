<?php
require_once dirname( __FILE__ ) . '/../app/REST/Slim/Slim.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

$app->contentType('application/json');

$app->get('/', function(){
	echo json_encode( array( "error" => 1, "msg" => "No method selected" ) );
});

require_once dirname( __FILE__ ) . '/../code/Controllers/LoginController.php';

function authenticate() {
	$login = new LoginController();

	if ( !$login->checkSession() )
		$app->halt( 401 );
}

require_once dirname( __FILE__ ) . '/../app/Routes/user.php';
require_once dirname( __FILE__ ) . '/../app/Routes/album.php';
require_once dirname( __FILE__ ) . '/../app/Routes/login.php';
require_once dirname( __FILE__ ) . '/../app/Routes/search.php';

$app->run();