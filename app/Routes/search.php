<?php

require_once dirname( __FILE__ ) .  '/../RESTControllers/SearchRESTController.php';

$search = new SearchRESTController();

$app->post('/album/', function() use ($app, $search) {
	
});




