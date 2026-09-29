<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex() {
        return view('home');
    }
    public function showArray() {
        $array = [
        ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => 'one.jpg'],
        ['id' => 2, 'title' => 'продукт 2', 'price' => 1500, 'path' => 'two.jpg'],
        ['id' => 2, 'title' => 'продукт 3', 'price' => 2500, 'path' => 'three.jpg'],
        ['id' => 2, 'title' => 'продукт 4', 'price' => 3500, 'path' => 'four.jpg'],
        ];
        return view('array', compact('array'));
    }
}
