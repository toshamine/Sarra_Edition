



<?php
use Illuminate\Support\Facades\Mail;


Route::get('ProduitAjoute','ProduitController@aj');
Route::get('ProduitModif','ProduitController@modif');
Route::get('Adminindex','ProduitController@index');
Route::get('about','PageController@about');
Route::post('store','ProduitController@store');
Route::post('update','ProduitController@update');
Route::get('AjoutProduits','ProduitController@create');
Route::get('Affproduit','ProduitController@show');
Route::get('SuppProduit/{id}','ProduitController@delete');
Route::get('EditProduit/{id}','ProduitController@edit');
Route::post('update','ProduitController@update');
Route::get('AffProduit2/{id}','ProduitController@show2');
Route::get('UserInfo','ProduitController@User');
Route::post('UserMod','ProduitController@UserMod');
Route::get('auth/login','PageController@login');
Route::get('AffUsers','ProduitController@showus');
Route::get('AffUsers2/{id}','ProduitController@showus2');
Route::get('Vcart','PageController@scart');
Route::get('addcart/{id}','ProduitController@edit2');
Route::post('addcart','ProduitController@addcart');
Route::get('Vcart','ProduitController@affcart');
Route::get('SuppProduit2/{rowid}','ProduitController@cartremove');
Route::get('vider','ProduitController@cartvide');
Route::get('Affproduitclient','ProduitController@showclient');
Route::get('Suppuser/{id}','ProduitController@deleteuser');
Route::get('Magic', 'ProduitController@smagic');
Route::get('Action', 'ProduitController@saction');
Route::get('Adventure', 'ProduitController@sadven');
Route::get('Crime', 'ProduitController@scrime');






Route::group(['middleware' => 'web'], function () {
Route::auth();  
Route::get('auth/logout', 'Auth\AuthController@logout');
Route::get('/home', 'HomeController@index');
});
