<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Farhan Alfauzi",
        "email" => "203040085@mail.unpas.ac.id",
        "image" => "profil.png"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Farhan Alfauzi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit tempora ipsum vero dolor. At numquam reiciendis itaque dolores voluptatem praesentium doloribus illo vero laborum laboriosam porro illum blanditiis amet eaque cumque nisi, quibusdam nemo eligendi nihil delectus cum. Aliquid eum aspernatur nisi sapiente ipsam, nemo molestiae unde facilis sequi nihil ullam magnam vero soluta ea? Consequatur rerum nemo ullam. Nisi rerum sapiente reiciendis iste, iusto harum, animi sequi aliquid nihil alias optio reprehenderit cum amet adipisci! Doloribus adipisci dolorem harum?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Hamzah Hadi Permana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit tempora ipsum vero dolor. At numquam reiciendis itaque dolores voluptatem praesentium doloribus illo vero laborum laboriosam porro illum blanditiis amet eaque cumque nisi, quibusdam nemo eligendi nihil delectus cum. Aliquid eum aspernatur nisi sapiente ipsam, nemo molestiae unde facilis sequi nihil ullam magnam vero soluta ea? Consequatur rerum nemo ullam. Nisi rerum sapiente reiciendis iste, iusto harum, animi sequi aliquid nihil alias optio reprehenderit cum amet adipisci! Doloribus adipisci dolorem harum? quibusdam nemo eligendi nihil delectus cum. Aliquid eum aspernatur nisi sapiente ipsam, nemo molestiae unde facilis sequi nihil ullam magnam vero soluta ea? Consequatur rerum nemo ullam. Nisi rerum sapiente reiciendis iste, iusto harum."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Farhan Alfauzi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit tempora ipsum vero dolor. At numquam reiciendis itaque dolores voluptatem praesentium doloribus illo vero laborum laboriosam porro illum blanditiis amet eaque cumque nisi, quibusdam nemo eligendi nihil delectus cum. Aliquid eum aspernatur nisi sapiente ipsam, nemo molestiae unde facilis sequi nihil ullam magnam vero soluta ea? Consequatur rerum nemo ullam. Nisi rerum sapiente reiciendis iste, iusto harum, animi sequi aliquid nihil alias optio reprehenderit cum amet adipisci! Doloribus adipisci dolorem harum?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Hamzah Hadi Permana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit tempora ipsum vero dolor. At numquam reiciendis itaque dolores voluptatem praesentium doloribus illo vero laborum laboriosam porro illum blanditiis amet eaque cumque nisi, quibusdam nemo eligendi nihil delectus cum. Aliquid eum aspernatur nisi sapiente ipsam, nemo molestiae unde facilis sequi nihil ullam magnam vero soluta ea? Consequatur rerum nemo ullam. Nisi rerum sapiente reiciendis iste, iusto harum, animi sequi aliquid nihil alias optio reprehenderit cum amet adipisci! Doloribus adipisci dolorem harum? quibusdam nemo eligendi nihil delectus cum. Aliquid eum aspernatur nisi sapiente ipsam, nemo molestiae unde facilis sequi nihil ullam magnam vero soluta ea? Consequatur rerum nemo ullam. Nisi rerum sapiente reiciendis iste, iusto harum."
        ]
    ];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
