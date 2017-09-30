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
    return view('welcome');
});
/*
GET
POST
PUT
DELETE
*/
Route::get('/HolaMundo', function () {
//eloquent
$user = \App\User::all();
//query builder
$user1 = \DB::table('users')->get();

    return response()->json($user);
});
/* crear */
Route::post('crear-algo', function () {
    
});
/* actualizar */
Route::put('actualizar-algo', function () {
    
});
/* eliminar */
Route::delete('eliminar-algo', function () {
    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
