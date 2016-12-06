<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\User;
use Session;

class FrontEndController extends Controller
{
    public function getPostsArticles() {
        $frontend = DB::table('posts/articles')->get();
        return view('frontend')->with([
                    "frontend" => $frontend
        ]);
    }
}