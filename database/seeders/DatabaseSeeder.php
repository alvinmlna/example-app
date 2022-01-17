<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Alvin maulana',
            'email' => 'alvin@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Danang sudrajat',
            'email' => 'Danang@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'SQL Server',
            'slug' => 'sql-server'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => 'Voluptatem vero assumenda magnam deleniti, quia ut dolor saepe, 
            tempora ex eligendi sequi culpa, ipsum a perferendis mollitia excepturi. 
            repellendus veniam! Recusandae, dignissimos incidunt sint a, temporibus cumque, nisi voluptatum laboriosam 
            libero voluptas ipsam quibusdam perferendis modi magni adipisci at iusto! Hic alias dignissimos doloribus 
            delectus reprehenderit voluptas saepe cumque? Veniam sunt libero ut sapiente animi aliquam a, qui earum est magnam, ',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => 'Voluptatem vero assumenda magnam deleniti, quia ut dolor saepe, 
            tempora ex eligendi sequi culpa, ipsum a perferendis mollitia excepturi. 
            repellendus veniam! Recusandae, dignissimos incidunt sint a, temporibus cumque, nisi voluptatum laboriosam 
            libero voluptas ipsam quibusdam perferendis modi magni adipisci at iusto! Hic alias dignissimos doloribus 
            delectus reprehenderit voluptas saepe cumque? Veniam sunt libero ut sapiente animi aliquam a, qui earum est magnam, ',
            'category_id' => 1,
            'user_id' => 1
        ]);
        
        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'body' => 'Voluptatem vero assumenda magnam deleniti, quia ut dolor saepe, 
            tempora ex eligendi sequi culpa, ipsum a perferendis mollitia excepturi. 
            repellendus veniam! Recusandae, dignissimos incidunt sint a, temporibus cumque, nisi voluptatum laboriosam 
            libero voluptas ipsam quibusdam perferendis modi magni adipisci at iusto! Hic alias dignissimos doloribus 
            delectus reprehenderit voluptas saepe cumque? Veniam sunt libero ut sapiente animi aliquam a, qui earum est magnam, ',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
