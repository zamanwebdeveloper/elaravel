<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.add_slider');
    }
    public function save_slider(Request $request)
    {
        $image=$request->file('product_image');
        if($image)
        {
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
                $data['product_image']=$image_url;
                DB::table('tbl_products')->insert($data);
                Session::put('message','Product Added Successfully');
                return Redirect::to('/add-product');
            }
        }

        $data['product_image']='';
        DB::table('tbl_products')->insert($data);
        Session::put('message','Product Added Successfully Without Image!!');
        return Redirect::to('/add-product');
    }
}
