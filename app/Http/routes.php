<?php

Route::get('/people','PeopleController@index');
Route::get('/city','CityController@index');
Route::get('/song','SongController@index');
Route::get('/video','VideoController@index');
Route::get('/movie','MovieController@index');