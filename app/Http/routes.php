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

Route::get('/', function () {
    return view('welcome');
});


use App\User;
use app\Address;

Route::get('/insert', function () {
    $user = User::findOrFail(1);

    $address = new Address(['name'=>'1234 Housta av NY NY 11218']);

    $user->address()->save($address);
});


Route::get('/update', function() {

    $address = Address::whereUserId(1)->first();

    $address->name = "4353 Update Av, alaska ";

    $address->save();
});


Route::get('/read', function() {
    //
    $user = User::findOrFail(1);

    echo $user->address->name;
});


Route::get('/readAddress', function() {
    //
    $address = Address::find(1);

    echo $address->name;
});


Route::get('/deleteUser', function() {
    //
    $user = User::findOrFail(1);

    $user->address()->delete();

    return "Usurario eliminado"
});