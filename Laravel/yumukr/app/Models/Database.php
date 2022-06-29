<?php

namespace App\Models;

use App\Models\Article;

class Database {
    public static function get_article_by_id(int $id) {
       $article = array(
           100 => new Article(100, 'Матсоні', 'Грузинський must try: хачапурі по-мегрельськи — 132 грн;
                                               хачапурі по-аджарськи — 119 грн;
                                               хінкалі класичні — 86 грн/4 шт;
                                               шашлик зі свинини — 98 грн/100 г
                                               Вах-вах: хачапурі-човник з курячим філе в горіховому соусі — 119 грн', '/img/matsoni.svg', 'вул. Велика Васильківська, 114;', '(050) 108 28 38'));
       return $article[$id];
    }
}
