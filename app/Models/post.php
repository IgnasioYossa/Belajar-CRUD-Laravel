<?php

namespace App\Models;


class post 
{
    private static $blog_post = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Ignasio",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab corrupti accusamus officia. Illo corporis itaque, libero doloribus atque voluptatem sunt. Incidunt natus amet saepe, recusandae nesciunt modi nulla doloremque, quis quas consequuntur earum repellendus maiores nobis ratione architecto. Nihil, nobis?"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Rudi Tabudi",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab corrupti accusamus officia. Illo corporis itaque, libero doloribus atque voluptatem sunt. Incidunt natus amet saepe, recusandae nesciunt modi nulla doloremque, quis quas consequuntur earum repellendus maiores nobis ratione architecto. Nihil, nobis?"
        ]
        ];
    public static function all()
    {
        return self::$blog_post;
    }
}
