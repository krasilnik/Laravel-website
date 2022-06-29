<?php

namespace App\Models;


use Illuminate\Support\Facades\DB;
use App\Models\Article;
class DataBase {
  public static function get_article_by_id($id) {
        $article = DB::select("select * from articles where article_id = '$id'");
        return $article[0];
        }
}

