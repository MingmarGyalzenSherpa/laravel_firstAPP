<?php 

namespace App\Models;

    class Article {
        public static function getAllArticles(){
            return [
                [
                    'id' => '1',
                    'title' => "Sandeep Pandey's love life",
                    'desc' => "On September 20, Sandeep Pandey was seen hanging out with Bijay on his million dollar yacht... Read More"
                ], 
                [
                    'id' => '2',
                    'title' => "Tragic incident in Kathmandu",
                    'desc' => "On a rainy night, a homeless girl named Krisa was all wet. The wind was blowing hard on that evening. With no 
                    roof, she quickly fell ill. "
                ]
            ];
        }

        public static function getSingleArticle($id){
           $articles = self::getAllArticles();
           foreach($articles as $article)
           {
                if($id === $article['id'])
                {
                    return $article;
                }
           }
        }

    }

?>