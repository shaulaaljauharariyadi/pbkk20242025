<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;



Route::get('/', function () {
    return view('home', ['homes' => post::all()]);


});


Route::get('/{post}', Function(Post $post) {
   
}); 

Route::get('/about', function(){
    return view('about', ['sekolah' => 'ayam ikan 21']);
});
