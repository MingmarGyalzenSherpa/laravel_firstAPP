<?php 

namespace App\Models;

    class Article {
        public static function getAllArticles(){
            return [
                [
                    'title' => 'News One',
                    'desc' => 'this is news one'
                ],
                [
                    'title' => 'News Two',
                    'desc' => 'this is news two'
                ]
            ];
        }
    }

?>