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
        $welcome = DB::table('posts/articles')->get();
        return view('welcome')->with([
                    "welcome" => $welcome
        ]);
    }

    public function detailPostsArticles($id) {
        $detail = DB::table('posts/articles')->where('slug', $id)->get();
        return view('detail')->with([
                    "detail" => $detail
        ]);
    }
}
