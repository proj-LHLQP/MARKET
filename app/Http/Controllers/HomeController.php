<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getHomePage()
    {
        return view('Pages.homepage');
    }
    public function getBlogsPage(){
        return view('Pages.blogs');
    }
    public function getBlogDetail(){
        return view('Pages.blog-detail');
    }
    public function getAboutPage(){
        return view('Pages.about');
    }
    public function getContact(){
        return view('Pages.contact');
    }
    public function getCategory(){
        return view('Pages.category');
    }
    public function getProductDetail(){
        return view('Pages.product-detail');
    }
    public function geCheckOut(){
        return view('Pages.checkout');
    }
    public  function geCartDetail(){
        return view('Pages.cart-detail');
    }
}
