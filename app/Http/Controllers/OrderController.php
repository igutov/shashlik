<?php

namespace App\Http\Controllers;

use App\Food;
use App\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $order = new Orders;
        // $product->name = 'God of War';
        // $product->price = 40;

        // $product->save();

        // $category = Category::find([3, 4]);
        // $product->categories()->attach($category);

        // return 'Success';
    }
}
