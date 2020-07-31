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
|Voici où vous pouvez enregistrer des itinéraires Web pour votre application.
|Ces routes sont chargées par RouteServiceProvider au sein d'un groupe qui contient le groupe de middleware "Web".
|Maintenant, créez quelque chose de génial!
*/
Route::view('/registration', 'registration');
Route::view('/cart', 'cart');

Route::get('/', 'NavController@home');
Route::get('/about', 'NavController@about');
Route::get('/prevention', 'NavController@prevention');
Route::get('/products', 'NavController@products');
Route::get('/news', 'NavController@news');
Route::get('/pages', 'NavController@pages');
Route::get('/contact', 'NavController@contact');
Route::get('/mon-compte', 'NavController@mon_compte');

Route::get('/login', 'ConnexionController@formulaire');
Route::post('/login', 'ConnexionController@traitement');

Route::get('/registration', 'InscriptionController@formulaire');
Route::post('/registration', 'InscriptionController@traitement');

Route::get('/utilisateurs', 'UtilisateursController@liste');
// Route::get('/api', 'NavController@api');
