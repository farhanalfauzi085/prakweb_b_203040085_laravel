<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
