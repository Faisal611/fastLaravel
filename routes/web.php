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
    return 'hello Laraval';
});

Route::get('/bitm', function(){
    return 'Hello Bitm';

});

Route::get('/', function (){
    return view('hoKme');

});

//Route ::get('/', 'StudentController@index');

Route ::get('/',[
    'uses' => 'StudentController@index',
    'as' => '/'
]);

Route::get('/about',[
    'uses' => 'StudentController@about',
    'as' => '/about'

]);
