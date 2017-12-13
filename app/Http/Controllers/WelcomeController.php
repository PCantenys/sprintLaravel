<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Avatar;
use App\Category;

class WelcomeController extends Controller
{

  public function index(){
    $products = Product::paginate(2);
    return view('welcome', compact('products'));
  }

}
