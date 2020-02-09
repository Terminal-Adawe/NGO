<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Article;

class ReadArticleController extends Controller
{
    //
    public function read(Request $request){
    	$data['article'] = DB::table('articles')->find($request->id);
    	$data['articles'] = Article::orderBy('created_at','desc')->take(3)->get();
    	$data['properties'] = DB::table('application_properties')->first();
    	return view('blog-single')->with('data',$data);
    }
}
