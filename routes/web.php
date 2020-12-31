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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('', 'classmanagementcontroller@accueil');

Route::get('classList', 'classmanagementcontroller@salles');

Route::get('groupList', 'classmanagementcontroller@groupes');

Route::get('classOccupation',  'classmanagementcontroller@occupation');
