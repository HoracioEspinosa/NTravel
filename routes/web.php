<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $tours =  DB::select('CALL getAllDestinationsorTours(10)');
    return view('index', ['tours' => $tours]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/tour-details', function() {
    $nombre = trim(strtolower($_POST["destino"]));
    $tours =  DB::select('CALL getAllDestinationsorTours(10)');
    $toursActual = DB::select('CALL getAllDestinationsName("'.$nombre.'")');
    $includes = DB::select('CALL getAllINCLUDES('.$toursActual[0]->idTours.')');
    return view('tour', ['tour' => $toursActual[0], 'tours' => $tours, 'includes' => $includes]);
});

Route::get('/tour-details', function() {
    if(!isset($_GET["tour"])){
        $nombre = trim(strtolower("cancun"));
    }else{
        $nombre = trim(strtolower($_GET["tour"]));
    }

    $tours =  DB::select('CALL getAllDestinationsorTours(10)');
    $toursActual = DB::select('CALL getAllDestinationsName("'.$nombre.'")');
    $includes = DB::select('CALL getAllINCLUDES('.$toursActual[0]->idTours.')');
    return view('tour', ['tour' => $toursActual[0], 'tours' => $tours, 'includes' => $includes]);
});

Route::get('/our-tours', function () {
    $tours =  DB::select('CALL getAllDestinationsorTours(0)');
    return view('our-tours', ['tours' => $tours]);
});