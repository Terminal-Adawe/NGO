<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use DB;

class articlesController extends Controller
{
    //
    public function articles(Request $request){
    	$data['articles'] = Article::orderBy('created_at','desc')->get();
    	$data['properties'] = DB::table('application_properties')->first();
    	$data['aboutus'] = DB::table('about_us')->first();
    	return view('articles')->with('data',$data);
    }
}
