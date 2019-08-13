<?php

namespace App\Providers;

use App\Category;
use App\WishList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use function foo\func;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            '*',
            function ($view){
                if(Auth::guard('customer')->check()){
//                    $customer_id = Auth::guard('customer')->user()->id;
                    $wishlist_product = Auth::guard('customer')->user()->wishList;
                }
                else{
                    $wishlist_product = [];
                }
                $categories = Category::where('parent_id',0)->get();
                $view->with([
                    'categories'=>$categories,
                    'wishlist_product'=>$wishlist_product
                ]);
            }
        );
    }
}
