<?php

require_once dirname( __FILE__ ) .  '/../RESTControllers/ImageRESTController.php';

$image = new imageRESTController();

$app->post('/album/', function() use ($app, $image) {
	
});




