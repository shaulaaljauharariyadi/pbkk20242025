<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Function_;

Route::get('/', function () {
    return view('home', ['homes' => [
        [
            'id' => 1,
            'slug' => 'artikel-1',
            'title' => 'artikel 1',
            'author' => 'ayam goreng',
            'body' => '>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ante ex, iaculis in bibendum nec, molestie vel odio. Duis pretium neque quis massa auctor, ac convallis mauris porttitor. Quisque felis velit, tempor vel ipsum non, elementum lobortis justo. Maecenas ac gravida dolor. Maecenas consequat eros sit amet nulla blandit semper. Mauris tristique at augue vel tempor. Vivamus hendrerit nunc lorem, 
          vitae placerat est consequat et. Donec at dapibus metus, et pharetra purus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ante ex, iaculis in bibendum nec, molestie vel odio. Duis pretium neque quis massa auctor, ac convallis mauris porttitor. Quisque felis velit, tempor vel ipsum non, elementum lobortis justo. Maecenas ac gravida dolor. Maecenas consequat eros sit amet nulla blandit semper. 
          Mauris tristique at augue vel tempor. Vivamus hendrerit nunc lorem, vitae placerat est consequat et. Donec at dapibus metus, et pharetra purus.'
        ],

        [
            'id' => 2,
            'slug' => 'artikel-2',
            'title' => 'artikel 2',
            'author' => 'ayam goreng',
            'body' => '>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ante ex, iaculis in bibendum nec, molestie vel odio. Duis pretium neque quis massa auctor, ac convallis mauris porttitor. Quisque felis velit, tempor vel ipsum non, elementum lobortis justo. Maecenas ac gravida dolor. Maecenas consequat eros sit amet nulla blandit semper. Mauris tristique at augue vel tempor. Vivamus hendrerit nunc lorem, 
          vitae placerat est consequat et. Donec at dapibus metus, et pharetra purus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ante ex, iaculis in bibendum nec, molestie vel odio. Duis pretium neque quis massa auctor, ac convallis mauris porttitor. Quisque felis velit, tempor vel ipsum non, elementum lobortis justo. Maecenas ac gravida dolor. Maecenas consequat eros sit amet nulla blandit semper. 
          Mauris tristique at augue vel tempor. Vivamus hendrerit nunc lorem, vitae placerat est consequat et. Donec at dapibus metus, et pharetra purus.'
        ]
    ]]);


});

Route::get('/{slug}', Function($slug) {
    
}); 

Route::get('/about', function(){
    return view('about', ['sekolah' => 'ayam ikan 21']);
});
