<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use PhpParser\Node\Expr\PostDec;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Farhan Alfauzi',
        //     'email' => '203040085@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'M. Rafliansyah',
        //     'email' => '203040105@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque repudiandae odit tempore itaque harum ut enim.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque repudiandae odit tempore itaque harum ut enim. Laudantium odio recusandae, quam eveniet alias maiores minima, ea, enim exercitationem magni vero. Blanditiis sit, maiores sunt iusto ea maxime iure magnam voluptatibus at! Eum ducimus alias sed doloremque recusandae ipsa atque deleniti beatae numquam quisquam explicabo cupiditate sit fuga, mollitia quasi, dignissimos aliquam voluptas voluptatum architecto at. Qui quos amet velit architecto pariatur est. Explicabo vero eveniet neque ad! At iure perferendis debitis quas impedit, consequatur cumque culpa soluta sed asperiores hic, repellat voluptatibus velit reprehenderit eaque recusandae eum animi corporis possimus voluptas!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque repudiandae odit tempore itaque harum ut enim.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque repudiandae odit tempore itaque harum ut enim. Laudantium odio recusandae, quam eveniet alias maiores minima, ea, enim exercitationem magni vero. Blanditiis sit, maiores sunt iusto ea maxime iure magnam voluptatibus at! Eum ducimus alias sed doloremque recusandae ipsa atque deleniti beatae numquam quisquam explicabo cupiditate sit fuga, mollitia quasi, dignissimos aliquam voluptas voluptatum architecto at. Qui quos amet velit architecto pariatur est. Explicabo vero eveniet neque ad! At iure perferendis debitis quas impedit, consequatur cumque culpa soluta sed asperiores hic, repellat voluptatibus velit reprehenderit eaque recusandae eum animi corporis possimus voluptas!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque repudiandae odit tempore itaque harum ut enim.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque repudiandae odit tempore itaque harum ut enim. Laudantium odio recusandae, quam eveniet alias maiores minima, ea, enim exercitationem magni vero. Blanditiis sit, maiores sunt iusto ea maxime iure magnam voluptatibus at! Eum ducimus alias sed doloremque recusandae ipsa atque deleniti beatae numquam quisquam explicabo cupiditate sit fuga, mollitia quasi, dignissimos aliquam voluptas voluptatum architecto at. Qui quos amet velit architecto pariatur est. Explicabo vero eveniet neque ad! At iure perferendis debitis quas impedit, consequatur cumque culpa soluta sed asperiores hic, repellat voluptatibus velit reprehenderit eaque recusandae eum animi corporis possimus voluptas!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque repudiandae odit tempore itaque harum ut enim.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque repudiandae odit tempore itaque harum ut enim. Laudantium odio recusandae, quam eveniet alias maiores minima, ea, enim exercitationem magni vero. Blanditiis sit, maiores sunt iusto ea maxime iure magnam voluptatibus at! Eum ducimus alias sed doloremque recusandae ipsa atque deleniti beatae numquam quisquam explicabo cupiditate sit fuga, mollitia quasi, dignissimos aliquam voluptas voluptatum architecto at. Qui quos amet velit architecto pariatur est. Explicabo vero eveniet neque ad! At iure perferendis debitis quas impedit, consequatur cumque culpa soluta sed asperiores hic, repellat voluptatibus velit reprehenderit eaque recusandae eum animi corporis possimus voluptas!',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
