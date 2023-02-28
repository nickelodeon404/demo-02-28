<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/person', function () {
    return view('person', [
        'name' => 'Dominic Ama',
        'age' => '22',
        'address' => 'San Jose Bula Camarines Sur',
        'color' => 'blue',
        'siblings' => [
            [
            'name' => 'Takemichi', 
            'age' => 15,
            ],
            [
            'name' => 'Draken',
            'age' => 20
            ],
            [
            'name' =>  'Mitsuya',
            'age' => 25
            ],
            [
            'name' => 'Mikey',
            'age' => 16
            ],
            [
            'name' =>  'Hakkai',
            'age' => 19
            ],
            [
            'name' =>  'Chifuyu',
            'age' => 15
            ],
    ]]);
});