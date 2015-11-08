<?php

require_once dirname( __FILE__ ) .  '/../RESTControllers/AlbumRESTController.php';

$album = new AlbumRESTController();

// Get all the albums
$app->get( '/album', function() use ( $app, $album ) {
    $albums = $album->getAllAlbums();

    if ( $albums["error"] ) {
        $app->response()->status( 400 );
        $app->response()->header( 'X-Status-Reason', $albums["msg"] );
    }

    echo json_encode( $albums );
});


// Get specific album
$app->get('/album/:id', function( $id ){
});

// Get specific album
$app->get('/album/search/:term', function( $term ) use ( $album ) {
    $response = $album->searchAlbums( $term );
    $code = $response["code"];

    if ( $code != 200 ) {
        $app->response()->status( $code );
        $app->response()->header( 'X-Status-Reason', $response["error"] );
    }

    else
        echo json_encode( $response["result"] );
});


// Insert new album, get the RAW data
$app->post('/album/', function(){
    global $app;

    // This is the RAW Data (Payload) we need to handle
    $app->request->getBody();
});


$app->put('/album/:id', function( $id ){
    global $app;

    // This is the RAW Data (Payload) we need to handle
    $app->request->getBody();
});


$app->delete('/album/:id', function( $id ){
});