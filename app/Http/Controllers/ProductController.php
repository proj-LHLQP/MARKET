<?php

namespace App\Http\Controllers;

use App\Address;
use App\CommentProduct;
use App\Product;
use App\ProductCategory;
use App\ProductImage;
use App\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{

    var $product;
    public function saveProducts(Request $request){
//        DB::beginTransaction();
//        try {

            if($request->status ==0){
                $product = Product::create([
                    'name' => $request->name,
                    'customer_id'=>$request->customer_id,
                    'seller_id'=>$request->customer_id,
                    'detail'=>$request->detail,
                    'price'=>$request->price,
                    'sale'=>$request->sale,
                    'new'=>$request->new,
                    'status'=>$request->status,
                ]);
            }
            else if($request->status ==1){
                $product = Product::create([
                    'name' => $request->name,
                    'customer_id'=>$request->customer_id,
                    'buyer_id'=>$request->customer_id,
                    'detail'=>$request->detail,
                    'price'=>$request->price,
                    'sale'=>$request->sale,
                    'new'=>$request->new,
                    'status'=>$request->status,
                ]);
            }
            $this->product = $product;
            $address = Address::create([
                'product_id' => $product->id,
                'province_id' => $request->province,
                'district_id' => $request->district,
                'ward_id' => $request->ward,
                'village_id' => $request->village,
            ]);
            View::insert([
                'product_id' => $product->id,
            ]);
            ProductCategory::insert(
                [
                    'product_id' => $product->id,
                    'category_id' =>$request->category,
                ]);
            ProductCategory::insert([
                    'product_id' => $product->id,
                    'category_id' =>$request->category_child,
                ]);
            $product_images = ProductImage::where('product_id',0)->get();
            foreach ($product_images as $product_image){
                $product_image->update(['product_id'=>$product->id]);
            }
            //send mail
            //dd($this->product->customer->email);
//            $product->customer;
//            $data =(array)  $this->product;
            $data =['customer_name'=>$product->customer->name,'product_name'=>$product->name];
            Mail::send('Email.mail-content',$data,function ($message){
                $message->to($this->product->customer->email)->subject('Đăng sản phẩm thành công');
            });

            DB::commit();
            return redirect()->route(HOME_PAGE);
//        } catch (Exception $e) {
//            DB::rollBack();
//
//            throw new Exception($e->getMessage());
//        }
    }

    function postImages(Request $request)
    {
        if ($request->ajax()) {
            if ($request->hasFile('file')) {
                $imageFiles = $request->file('file');
                // set destination path
                //$product_id = Product::max('id')+1;
                $product_id = '0';
                $folderDir = 'uploads/product_images';
                $destinationPath = base_path() . '/' . $folderDir;
                // this form uploads multiple files
                foreach ($request->file('file') as $fileKey => $fileObject) {
                    // make sure each file is valid
                    if ($fileObject->isValid()) {
                        // make destination file name
                        $destinationFileName = time() . $fileObject->getClientOriginalName();
                        // move the file from tmp to the destination path
                        $fileObject->move($folderDir, $destinationFileName);
                        // save the the destination filename
                        $prodcuctImage = new ProductImage();
                        $prodcuctImage->image_path = $folderDir .'/'. $destinationFileName;
                        $prodcuctImage->image_name = $fileObject->getClientOriginalName();
                        $prodcuctImage->product_id = $product_id;
                        $prodcuctImage->save();
                    }
                }
            }
        }
    }
    function deleteImages(Request $request)
    {
//        return $request;
        if ($request->ajax()) {
            ProductImage::where([['image_name',$request->id],['product_id',0]])->delete();
            return "success!!";
        }
    }

    public function postCommentProduct(Request $request){
        $comment = new CommentProduct($request->all());
        $comment->save();
        $customer = $comment->customer;
        return $comment;
    }
}
