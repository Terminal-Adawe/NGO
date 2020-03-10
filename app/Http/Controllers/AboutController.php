<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\AboutUs;

class AboutController extends Controller
{
    //
    public function about(Request $request){
    	$data['about'] = \App\AboutUs::all();
    	// $data['aboutus'] = DB::table('about_us')->first();
    	$data['properties'] = DB::table('application_properties')->first();
    	return view('about')->with('data',$data);
    }
}