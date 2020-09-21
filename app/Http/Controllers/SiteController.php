<?php

namespace App\Http\Controllers;

use App\Food;
use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class SiteController extends Controller
{
    public function index()
    {
        // $category =  Category::where('name', 'Салаты')->first()->id;
        // return $category;
        $categories = Categories::all();

        foreach ($categories as $category) {
            $category = $category->food;
        }
        // return $categories;
        return view('tab', ['categories' => $categories]);
    }

    public function busket()
    {
        return view('busket');
    }

    public function catering()
    {
        return view('catering');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function akcii()
    {
        return view('akcii');
    }
}
