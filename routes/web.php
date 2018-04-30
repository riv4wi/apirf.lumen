<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


// Rules to fix messages of type OPTIONS, that usually emit in systems like Angular or others.
$router->options('/{any:.*}', function () {
    return response(['status' => 'success'])
        ->header('Access-Control-Allow-Methods','OPTIONS, GET, POST, PUT, DELETE')
        ->header('Access-Control-Allow-Headers', 'Authorization, Content-Type, Origin');
});

$router->post('/auth/login', 'AuthController@postLogin');

$router->group(['prefix' => 'v1', 'middleware' => 'auth:api'], function () use ($router) {

    /* Manufacturers */
    $router->get('manufacturers',  ['uses' => 'ManufacturerController@index']);

    $router->get('manufacturers/{id}', ['uses' => 'ManufacturerController@show']);

    $router->post('manufacturers', ['uses' => 'ManufacturerController@store']);

    $router->delete('manufacturers/{id}', ['uses' => 'ManufacturerController@destroy']);

    $router->put('manufacturers/{id}', ['uses' => 'ManufacturerController@update']);

    $router->patch('manufacturers/{id}', ['uses' => 'ManufacturerController@update']);

    /* Vehicles */
    $router->get('manufacturers/{manufacturer_id}/vehicles',  ['uses' => 'VehicleController@index']);

    $router->get('manufacturers/{manufacturer_id}/vehicles/{id}', ['uses' => 'VehicleController@show']);

    $router->post('manufacturers/{manufacturer_id}/vehicles', ['uses' => 'VehicleController@store']);

    $router->delete('manufacturers/{manufacturer_id}/vehicles/{id}', ['uses' => 'VehicleController@destroy']);

    $router->put('manufacturers/{manufacturer_id}/vehicles/{id}', ['uses' => 'VehicleController@update']);

    $router->patch('manufacturers/{manufacturer_id}/vehicles/{id}', ['uses' => 'VehicleController@update']);
});