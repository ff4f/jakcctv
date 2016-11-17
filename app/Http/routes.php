<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/about', function() {
    return view('about');
});

Route::get('/', function() {
    return view('about');
});

Route::get('/cctv', function () {
    // call API
    $apiclient = new \GuzzleHttp\Client();
    $response = $apiclient->request('GET', 'http://api.jakarta.go.id/v1/cctvbalitower/', [
        'headers' => [
            'Content-Type' => 'application/json',
            'Authorization' => 'yjjwfulC7NbcAFqKxEAWF7bBE56JbuBa5JK1C7W5x3cgi5EuL0uNIy+Cl0LTQPLk'
        ],
        //'proxy' => 'http://vicovwebc:8081'
    ]);

    $retobj = $response->getBody();
    $retjson = json_decode($retobj);

    if($retjson->status == 'success') {
        return view('welcome', [
           'cctvdata' => $retjson->data
        ]);
    }
    else {
        return 'Not connected to API server';
    }
});
