<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use DB;

class galleryController extends Controller
{
    //
    public function gallery(Request $request){
    	$data['images'] = Picture::orderBy('created_at','desc')->get();
    	$data['properties'] = DB::table('application_properties')->first();
    	return view('gallery')->with('data',$data);
    }
}
