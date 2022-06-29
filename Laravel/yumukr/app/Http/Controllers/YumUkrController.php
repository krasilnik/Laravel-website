<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\DataBase;


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
       return view('rastaurant', ['atricle' => array(
            Database::get_article_by_id(100))]);
            }

       
}
