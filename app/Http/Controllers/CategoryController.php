<?php

namespace App\Http\Controllers;

use http\Client\Response;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\storeCategoryRequest;
use Validator;
class CategoryController extends Controller
{
    //
    public function index(){
        $category=Category::paginate(5);
        return view('admin.category.list', compact("category"));
    }
    public function create(){
        return view('admin.category.add',compact("add"));
    }
    public function store(Request $request){
//        dd($request);
        Category::create([
            'name'=>$request->name,
            'parent_id'=>$request->parent_id,
        ]);
        return redirect()->route('admin.category.index');


    }
    public function show(){

    }

    public function edit($id){
        $category= Category::find($id);
        return response()->json($category, 200);
    }
    public function update(Request $request, $id){
        $validator = Validator::make($request->all(),
            [
                'name' => 'required|min:5|max:255'

            ],
            [
                'required' => ':Ten danh muc san pham khong duoc de trong',
                'min' => ':Ten danh muc san pham phai du tu 2-255 ky tu',
                'max' => ':Ten danh muc san pham phai du tu 2-255 ky tu',
            ]
            );
        if ($validator->fails()){
            return response()->json($validator->error(),200);
        }
        $category = Category::find($id);
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->update();
//        $category->updated(
//            [
//                'name'=>$request->name,
//                'parent_id'=>$request->parent_id
//            ]
//        );
        return Response()->json(['success' =>'Sửa thành công']);

    }

    public function destroy($id){
        Category::destroy($id);
    }
}
