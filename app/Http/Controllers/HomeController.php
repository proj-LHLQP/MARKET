<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\View;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function queryProduct($categoryId){
        $data = Product::
            join('product_categories', 'products.id', '=', 'product_categories.product_id')
            ->join('categories', 'categories.id', '=', 'product_categories.category_id')
                ->where([['categories.id',$categoryId],['active',1]])->select('products.*')
            ->paginate(1);
        return $data;
    }

    public function getHomePage()
    {
        $categories = Category::where('parent_id',0)->get();
        $productHotDeal = Product::where([['active',1],['sale','<>','null']])->orderBy('sale','DESC')->limit(10)->get();
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
    public function getCategory(Request $request){


        $categories = Category::where('parent_id',0)->get();
        $category = Category::find($request->id);
        $parentCategory='';
        if($category->parent_id != 0){
            $parentCategory = Category::find($category->parent_id);
        }
        $subCategories = Category::where('parent_id',$request->id)->get();

        $products = $this->queryProduct($request->id);
//        dd($products);
        //$products = $category->productActived();
        return view('Pages.category')->with([
            'categories'=>$categories,
            'category'=>$category,
            'parentCategory'=>$parentCategory,
            'subCategories'=>$subCategories,
            'products'=>$products
        ]);
    }
    public function getProductDetail(Request $request){
        $id = $request->id;
        $sessionKey = 'product_' . $id;
        $sessionView = session()->get($sessionKey);
        $view = View::where('product_id',$id)->first();
        if (!$sessionView) {
            session()->put($sessionKey, 1);
            $view->increment('view');
        }

        $product = Product::find($id);

        $product->category1 = $product->category[1];
        $product->category2 = $product->category[0];

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
