<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public array $array_prime = [
        ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => 'one.jpg'],
        ['id' => 2, 'title' => 'продукт 2', 'price' => 1500, 'path' => 'two.jpg'],
        ['id' => 3, 'title' => 'продукт 3', 'price' => 2500, 'path' => 'three.jpg'],
        ['id' => 4, 'title' => 'продукт 4', 'price' => 3500, 'path' => 'four.jpg'],
        ['id' => 5, 'title' => 'продукт 5', 'price' => 500, 'path' => 'one.jpg'],
        ['id' => 6, 'title' => 'продукт 6', 'price' => 1500, 'path' => 'two.jpg'],
        ['id' => 7, 'title' => 'продукт 7', 'price' => 2500, 'path' => 'three.jpg'],
        ['id' => 8, 'title' => 'продукт 8', 'price' => 3500, 'path' => 'four.jpg'],
    ];

    public function showIndex() {
        return view('home');
    }
    public function showArray() {
        $array = $this->array_prime;

        return view('array', compact('array'));
    }

    public function mixing() {
        $array = $this->array_prime;
        shuffle($array);
        return view('array', compact('array'));
    }
    public function sorting() {
        $array = $this->array_prime;
        usort($array, fn($a, $b) => $a['price'] <=> $b['price']);
        return view('array', compact('array'));
    }
    public function filtr() {
        $array = $this->array_prime;
        $newArr = [];
        foreach($array as $arr) {
            if($arr['price'] >= 1000) {
                $newArr[] = $arr;
            }
        }
        return view('array', ['array' => $newArr]);
    }
}
