<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\AboutUs;
use App\Staff;

class AboutController extends Controller
{
    //
    public function about(Request $request){
    	// $data['aboutus'] = \App\AboutUs::all();
    	$data['aboutus'] = DB::table('about_us')->first();
    	$data['properties'] = DB::table('application_properties')->first();
    	$data['staff'] = \App\Staff::all();
    	return view('about')->with('data',$data);
    }
}