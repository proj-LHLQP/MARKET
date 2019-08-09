<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
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
        $productHotDeal = Product::orderBy('sale','DESC')->limit(10)->get();
//        dd($productHotDeal);
        return view('Pages.homepage')->with([
            'categories'=>$categories,
            'productHotDeal'=>$productHotDeal
        ]);
    }
    public function getBlogsPage(){
        $categories = Category::where('parent_id',0)->get();
        return view('Pages.blogs')->with('categories',$categories);
    }
    public function getBlogDetail(){
        $categories = Category::where('parent_id',0)->get();
        return view('Pages.blog-detail')->with('categories',$categories);
    }
    public function getAboutPage(){
        $categories = Category::where('parent_id',0)->get();
        return view('Pages.about')->with('categories',$categories);
    }
    public function getContact(){
        $categories = Category::where('parent_id',0)->get();
        return view('Pages.contact')->with('categories',$categories);
    }
    public function getCategory(){
        $categories = Category::where('parent_id',0)->get();
        return view('Pages.category')->with('categories',$categories);
    }
    public function getProductDetail(Request $request){
        $id = $request->id;
        $product = Product::find($id);

        $product->category1 = $product->category[1]->name;
        $product->category2 = $product->category[0]->name;

        $temps =[];
        $temps[] = $product->address->village();
        $temps[] = $product->address->ward();
        $temps[] = $product->address->district();
        $temps[] = $product->address->province();
        $address ='';

        foreach ($temps as $temp){
            if($temp !== null){
                $address = $address.$temp.', ';
            }
        }
        $product->address = substr($address,0,strlen($address)-2);
        $categories = Category::where('parent_id',0)->get();
        return view('Pages.product-detail')->with([
            'categories'=>$categories,
            'product'=>$product
        ]);
    }
    public function getCheckOut(){
        $categories = Category::where('parent_id',0)->get();
        return view('Pages.checkout')->with('categories',$categories);
    }
    public  function getCartDetail(){
        $categories = Category::where('parent_id',0)->get();
        return view('Pages.cart-detail')->with('categories',$categories);
    }
    public function getPostProduct(){
        $categories = Category::where('parent_id',0)->get();
        return view('Pages.post-product')->with('categories',$categories);
    }
    public function getNotFound(){
        return view('404_notfound');
    }
    public  function getPostedProduct(Request $request){
        $id = $request->id;
        $categories = Category::where('parent_id',0)->get();
        $needBuy = Product::where([['user_id',$id],['status',1]])->get();
        $needSell = Product::where([['user_id',$id],['status',0]])->get();
       return view('Pages.posted-product')->with(['neddBuy'=>$needBuy,'needSell'=>$needSell,'categories'=>$categories]);
    }
}
