<?php

namespace App\Http\Controllers;

use App\Address;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public static function addMembers($input)
    {
        DB::beginTransaction();
        try {
            $members = Member::create(Member::$_formatrequestMembers($input));
            $members->memberPositions()->createMany(Member::_formatPositions($input['positions']));
            DB::commit();
            return true;
        }
        catch (\Exception $exception) {
            \Log::info($exception->getMessage());
            DB::rollBack();
            return false;
        }
    }
    public function addProduct($data){
        DB::beginTransaction();
        try {
            if($data->status ==0){
                $product = Product::create([
                    'name' => $data->name,
                    'seller_id'=>$data->user_id,
                    'detail'=>$data->detail,
                    'price'=>$data->price,
                    'sale'=>$data->sale,
                    'new'=>$data->new,
                    'status'=>$data->status,
                ]);
            }
            else if($data->status ==1){
                $product = Product::create([
                    'name' => $data->name,
                    'buyer_id'=>$data->user_id,
                    'detail'=>$data->detail,
                    'price'=>$data->price,
                    'sale'=>$data->sale,
                    'new'=>$data->new,
                    'status'=>$data->status,
                ]);
            }
            $address = Address::create([
                'product_id' => $product->id,
                'province_id' => $product->province,
                'district_id' => $data->district,
                'ward_id' => $data->ward,
                'village_id' => $data->village,
            ]);
            $product_images = ProductImage::where('product_id',0)->get();
            foreach ($product_images as $product_image){
                $product_image->update(['product_id'=>$product->id]);
            }

            DB::commit();
            return redirect()->route(HOME_PAGE);
            return view('home');
        } catch (Exception $e) {
            DB::rollBack();

            throw new Exception($e->getMessage());
        }
    }

    public function saveProducts(Request $request){
        //$this->addProduct($request);
        DB::beginTransaction();
        try {
            if($request->status ==0){
                $product = Product::create([
                    'name' => $request->name,
                    'seller_id'=>$request->user_id,
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
                    'buyer_id'=>$request->user_id,
                    'detail'=>$request->detail,
                    'price'=>$request->price,
                    'sale'=>$request->sale,
                    'new'=>$request->new,
                    'status'=>$request->status,
                ]);
            }
            $address = Address::create([
                'product_id' => $product->id,
                'province_id' => $product->province,
                'district_id' => $request->district,
                'ward_id' => $request->ward,
                'village_id' => $request->village,
            ]);
            $product_images = ProductImage::where('product_id',0)->get();
            foreach ($product_images as $product_image){
                $product_image->update(['product_id'=>$product->id]);
            }

            DB::commit();
            return redirect()->route(HOME_PAGE);
            return view('home');
        } catch (Exception $e) {
            DB::rollBack();

            throw new Exception($e->getMessage());
        }
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
                        $fileObject->move($destinationPath, $destinationFileName);
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
            $product_id = Product::max('id')+1;
            ProductImage::where([['image_name',$request->id],['product_id',$product_id]])->delete();
            return "success!!";
        }
    }
}
