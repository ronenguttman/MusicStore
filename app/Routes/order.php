<?php

require_once dirname( __FILE__ ) .  '/../RESTControllers/orderRESTController.php';

$order = new orderRESTController();

$app->post('/album/', function() use ($app, $order) {
	
});




