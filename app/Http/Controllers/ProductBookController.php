<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductBookController extends Controller
{
    public function listProduct(){
        $listProduct = DB::table('product')->join('category', 'product.category_id', '=', 'category.id')
        ->select('product.id', 'product.name', 'product.category_id', 'category.ten_danhmuc', 'product.price', 'product.view')
        ->orderBy('view', 'desc')->get();
        if($key = request()->key){
            $listProduct = DB::table('product')->join('category', 'product.category_id', '=', 'category.id')
            ->where('product.name', 'like', '%'.$key.'%')
            ->select('product.id', 'product.name', 'product.category_id', 'category.ten_danhmuc', 'product.price', 'product.view')
            ->orderBy('view', 'desc')->get();
        }
        return view('product/listProduct')->with([
            'listProduct' => $listProduct
        ]);

    }

    public function addProduct(){
        $category = DB::table('category')->select('id', 'ten_danhmuc')->get();
        return view('product/addProduct')->with([
            'category' => $category
        ]);
    }

    public function addPostProduct(Request $request){
        //validate
        $data = [
            'name' => $request->name,
            'category_id' => $request->category,
            'price' => $request->price,
            'view' => $request->view,
            'create_at' => Carbon::now(),
            'update_at' => Carbon::now()
        ];
        DB::table('product')->insert($data);

        return redirect()->route('product.listProduct');
    }

    public function deleteProduct($productId){
        DB::table('product')->where('id', $productId)->delete();
        return redirect()->route('product.listProduct');
    }

    public function updateProduct($productId){
        $category = DB::table('category')->select('id', 'ten_danhmuc')->get();
        $pro = DB::table('product')->where('id', $productId)->first();
        
        return view('product/updateproduct')->with([
            'product' => $pro,
            'category' => $category
        ]);
    }

    public function updatePostProduct(Request $request){
        $data = [
            'name' => $request->name,
            'category_id' => $request->category,
            'price' => $request->price,
            'view' => $request->view,
            'update_at' => Carbon::now()
        ];
        DB::table('product')->where('id', $request->idProduct)->update($data);
        return redirect()->route('product.listProduct');
    }
}
