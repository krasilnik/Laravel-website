<?php

namespace App\Models;

class Article {
    public $id;
    public $title;
    public $text;
    public $image;
    public $address;
    public $phone;

    public function __construct(int $id, string $title, string $text, string $image, string $address, string $phone) {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->image = $image;
        $this->address = $address;
        $this->phone = $phone;
    }
}
