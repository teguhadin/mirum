<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\User;

class ListCategoryController extends Controller
{
     public function listCategory() {
        $row = DB::table('category')->get();
        return response()->json(['result' => $row]);
    }
}
