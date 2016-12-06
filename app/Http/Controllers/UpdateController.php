<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\User;

class UpdateController extends Controller
{
     public function editCategory($id) {
        $row = DB::table('category')->where('category_id', $id)->first();
        return response()->json(['result' => $row]);
    }
}
