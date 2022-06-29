<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Database;

class YumUkrController extends Controller {

    public function showCity() {
        return view('city');
    }

    public function showLanding() {
        return view('landing');
    }

    public function showContacts() {
        return view('contact');
        
    }
    public function showRestaurant() {
        return view('restaurant',
            ['first_article' => Database::get_article_by_id(100)]);
    }

    public function showArray() {
        return view('array', ['array' => array()]);
        //return view('array', ['array' => array('hi', 'user,', 'nice', 'php', 'code!')]);
    }
       
}
