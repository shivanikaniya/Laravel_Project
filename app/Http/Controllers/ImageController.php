<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;
use App\Models\Product;

class ImageController extends Controller
{
    function index()
    {
        $products = Product::with('image')->whereNotNull('id')->get();
        $images=Images::all();
        return view('images.index',['images'=>$images,'products'=>$products]);
    }
    function image_store(Request $request)
    {
        $data=$request->validate([
           'image'=>'required',
           'alt'=>'required',
           'product_id'=>'numeric',

        ]);
        Images::create($data);
        return redirect('images');
    }
    function image_show()
    {
        $records=Images::all();
        return view('images.list',['images'=>$records]);
    }
    function image_delete($id)
    {
        $data=Images::find($id);
        $data->delete();
        return redirect('images');
    }
    public function image_edit($id)
    {
        $data=Images::find($id);
        $product_data=Product::get('id');
        return view('images.update',['data'=>$data,'products'=>$product_data]);
    }
    
    public function image_updateStore(Request $request)
    {
        $data=Images::find($request->id);
        $request->validate([
        'image'  => 'required',
        'alt'=>'required',
    ]);
    $data->image=$request->image;
    $data->alt=$request->alt;
    $data->save();    
    return redirect('images');
    }
}
