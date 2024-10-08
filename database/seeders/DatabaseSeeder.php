<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // User::factory(10)->create();

       // User::factory()->create([
       //     'name' => 'Test User',
       //     'email' => 'test@example.com',
       // ]);


       // Post::create([
       // 'title'=>'artikel 1',
      //'author_id'=>'1',
      //  'slug'=>'artikel-1',
      //  'body'=>'The foreignId method creates an UNSIGNED BIGINT equivalent column, while the constrained method will use conventions to determine the table and column being referenced. If your table name does not match Laravels 
     // conventions, you may manually provide it to the constrained method. In addition, the name that should be 
     //   assigned to the generated index may be specified as well'
     //  ]);
     $this->call([UserSeeder::class]);

     Post::factory(100)->recycle([
        User::all()
     ])->create();


    }
}
