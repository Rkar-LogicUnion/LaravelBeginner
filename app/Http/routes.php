<?php

Route::get('/students','StudentController@index')->name('students.index');
Route::get('/students/{id}','StudentController@show');
Route::get('/students/sort/{sort}','StudentController@sortBy');
Route::get('/students/data/create','StudentController@create');
Route::get('/students/data/update','StudentController@update');
Route::get('/students/data/delete','StudentController@delete');
Route::get('/students/forcedelete/{id}','StudentController@forcedelete');
Route::get('/students/trash/{id}','StudentController@trash');
Route::get('/students/trash/data/show','StudentController@trashData');
Route::get('/students/trash/data/restore/{id}','StudentController@trashRestore');
