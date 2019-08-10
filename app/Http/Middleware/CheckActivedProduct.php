<?php

namespace App\Http\Middleware;

use App\Product;
use Closure;

class checkActivedProduct
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $product = Product::find($request->id);
        if(isset($product) && $product->active == 1)
            return $next($request);
        else{
            return redirect('not-found');
        }
    }
}
