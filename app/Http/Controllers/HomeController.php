<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\LibTrait;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    use LibTrait;
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category =  $this->getCategory();
        return view('home',compact('category'));
    }
    public function menu($category)
    {
        $menuMakanan = $this->getMenuByCategory($category);
        return view('menu-makanan',compact('menuMakanan'));
    }
}