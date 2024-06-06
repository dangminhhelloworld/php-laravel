<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users',function(){
    return view('users.user');
});

Route::get('user',function(){
    $data = ["xanh" ,"đỏ" ,"Tím"] ;

    $number = 11;



    return view('child',compact('data','number'));
});

Route::get('users/insert',function(){
    DB::table('users')->insert(
        ['name' =>'Minh' ,'email'=>'abc@gmail','password'=>bcrypt('admin')]
    );


});

Route:: get('post/read',[PostController::class,'read']);



