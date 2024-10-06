<?php 

namespace App\Models;
use Illuminate\Support\Arr;

class post {
    public static function all() {
      return [
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
      ];
    }

    public static function find($slug): array {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(! $post) {
            abort(404);
        }

        return $post;
    }
  }