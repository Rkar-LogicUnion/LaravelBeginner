<?php

use Illuminate\Support\Facades\DB;

Route::get('/insert', function () {
    DB::insert(
        'insert into posts (title, body) values (?, ?)', 
        ['PHP Laravel', 'Laravel is the best PHP Framework']
    );

    return 'Insert Successful';
});

Route::get('/show',function(){
    $posts=DB::select('select * from posts');
    return $posts;
});

Route::get('/update',function(){
    $result=DB::update('update posts set title=? where id=?', ['Update title',1]);
    return $result;
});

Route::get('/delete',function(){
    $result=DB::delete('delete from posts where id = ?', [1]);
    return $result;
});