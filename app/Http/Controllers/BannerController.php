<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;


class BannerController extends Controller
{
    function index()
    {
        $data=banner::all();
        return view('banners.banner',['banner'=>$data]);
    }
    function small_store(Request $request)
    {
        $data=$request->validate([
            'banner_name'=>'required',
            'banner_image'=>'required',
            'url'=>'required',

        ]);
        banner::create($data);
        return redirect('show');
    }
    function small_show()
    {
        $records=banner::all();
        return view('banners.list',['banner'=>$records]);
    }
    function small_delete($id)
    {
        $data=banner::find($id);
        $data->delete();
        return redirect('show');
    }
    function small_edit($id){
        $data=banner::find($id);
        $banner_data=banner::all();
       
        return view('banners.update',['data'=>$data,'banner'=>$banner_data]);

        
    }
    function small_updateStore(Request $request)
    {
        $data=banner::find($request->id);
        $request->validate([
            'banner_name'=>'required',
            'banner_image'=>'required',
            'url'=>'required',
        ]);
        $data->banner_name=$request->banner_name;
        $data->banner_image=$request->banner_image;
        $data->url=$request->url;
        $data->save();
        return redirect('show'); 
    }

}
