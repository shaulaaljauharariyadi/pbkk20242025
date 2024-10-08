<?php

use App\Models\post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;



Route::get('/', function () {
    return view('home', ['homes' => post::all()]);


});


Route::get('/{post}', Function(Post $post) {
   
}); 

Route::get('/authors/{username}', function(User $user){
    return view('posts', ['title' =>count($user->posts) .' articles by '. $user->name, 'posts'=> 
    $user->posts]);
});

Route::get('/about', function(){
    return view('about', ['sekolah' => 'ayam ikan 21']);
});
