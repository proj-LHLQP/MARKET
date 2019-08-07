<?php

namespace App\Http\Controllers;

use App\Category;
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
        $categories = Category::where('parent_id',0)->get();
        return view('Pages.homepage')->with('categories',$categories);
    }
    public function getBlogsPage(){
        $categories = Category::where('parent_id',0)->get();
        return view('Pages.blogs')->with('categories',$categories);
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
    public function getCheckOut(){
        return view('Pages.checkout');
    }
    public  function getCartDetail(){
        return view('Pages.cart-detail');
    }
    public function getPostProduct(){
        $categories = Category::where('parent_id',0)->get();
        return view('Pages.post-product')->with('categories',$categories);
    }
}
