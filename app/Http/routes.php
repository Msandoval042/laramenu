<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'DatabaseController@welcome');
//Routes to DatabaseController, public function Items
Route::get('/{id}', 'DatabaseController@Items');
Route::get('catsubcats/{id}', 'DatabaseController@catsubcats');
Route::get('delete/{id}', 'DatabaseController@Delete');

Route::get('deleteItem/{id}', 'DatabaseController@DeleteItems');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => ['web']], function () {
    //
});