<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use DB;

class galleryController extends Controller
{
    //
    public function gallery(Request $request){
    	$data['images'] = Image::orderBy('created_at','desc')->get();
    	$data['properties'] = DB::table('application_properties')->first();
    	$data['aboutus'] = DB::table('about_us')->first();
    	return view('gallery')->with('data',$data);
    }
}
