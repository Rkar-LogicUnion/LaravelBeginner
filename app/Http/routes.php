<?php

Route::get('/',function(){
    return "Hello Home Page";
});
Route::get('/blog',function(){
    return "Hello Blog Page";
});
Route::get('/contact',function(){
    return "Hello Contact Page";
});
Route::get('/post/{id}/{name}',function($id,$name){
    return "Your post id is ".$id." Name is ".$name;
});
Route::get('/admin/dashboard/post/edit',["as"=>"admin.post",function(){
    $url=route('admin.post');
    return "Your url is ".$url;
}]);