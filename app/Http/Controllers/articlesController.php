<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use DB;

class articlesController extends Controller
{
    //
    public function articles(Request $request){
    	$data['articles'] = articles::orderBy('created_at','desc')->get();
    	$data['properties'] = DB::table('application_properties')->first();
    	return view('articles')->with('data',$data);
    }
}
