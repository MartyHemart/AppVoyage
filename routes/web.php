<?php

// Affiche les voyage sur l'index
route::get('/', 'VoyageController@index')->name('index');
// affiche le voyage selectionner avec sont id
route::get('show/{voyage_id}', 'VoyageController@show')->name('show');

// Route pour le CRUD
Route::resource('Voyages','VoyageController');
// Route pour la page "a propos"
Route::get('a_propos', 'StaticPageController@about')->name('a_propos');

// Gestion de l'administration
Route::prefix('admin')->group(function(){

  // Afficher tous les voyages
  Route::resource('voyages','AdminVoyageController', ['as'=>'admin']);
  route::get('/', 'AdminVoyageController@index')->name('index');
  // Modification d'un voyage
  route::get('admin.edit/{voyage_id}', 'AdminVoyageController@edit')->name('edit');

  // Création d'un voyage
  Route::get('create_voyage', function () {
      return view('admin.create_voyage');
  })->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
