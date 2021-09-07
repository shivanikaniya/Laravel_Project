<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
 
    public function index()
    {
        $categories = Category::with('product')->whereNotNull('parent_id')->get();
        $products=Product::all();
        return view('product')->with([
          'categories'  => $categories,'products'=>$products
        ]);
    }
    public function show(Product $product)
    {
        $records=Product::all();
        $categories=Category::all();
        return view('products.list',['products'=>$records,'categories'=>$categories]);
    }


    public function store(Request $request)
    {
        $validatedData=$this->validate($request,[
            'name'=>'required|max:255|string',
            'description'=>'required',
            'category_id'=>'numeric',
            'price'=>'required',
            'stock'=>'required',
        ]);
        Product::create($validatedData);
        return redirect('items');
    }
    function product_delete($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect('items');
    }
    public function product_edit(Product $product,$id)
    {
        $data=Product::findOrFail($id);
        $categories=Category::whereNotNull('parent_id')->get();
        return view('products.master',compact('data','categories'));
    }
    public function product_update(Request $req, Product $product)
    {
        $req->validate([
            'name'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'price'=>'required',
            'stock'=>'required',
  
        ]); 

        $data=Product::findOrFail($req->id);
        
        $data->name=$req->name;
        $data->description=$req->description;
        $data->category_id=$req->category_id;
        $data->price=$req->price;
        $data->stock=$req->stock;
        $data->save();

        return redirect('items')->with('success', 'Product has been updated successfully.');
    }
}