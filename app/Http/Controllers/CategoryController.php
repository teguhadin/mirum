<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\User;

class CategoryController extends Controller {

    public function addCategory(Request $request) {
        $post = $request->all();
//        $name = $post['name'];
//        echo $name;
        $data = array(
            'name' => $post['name'],
            'slug' => $post['slug']
        );
        $result = DB::table('category')->insert($data);
        if ($result) {
            echo "<script>alert('Berhasil Menambah');window.location.replace('category');</script>";
        } else {
            echo "<script>alert('Gagal Menambahkan');window.location.replace('category');</script>";
        }
    }
    
    public function dataCategory() {
        $category = DB::table('category')->get();
        return view('category')->with([
                    "category" => $category
        ]);
    }

    public function updateCategory(Request $request){
        $post = $request->all();
        $data = array (
            'name' => $post['name'],
            'slug' => $post['slug']
        );
        $result = DB::table('category')->where('category_id', $post['id'])->update($data);
        if ($result) {
                echo "<script>alert('Berhasil Memeperbaharui');window.location.replace('category');</script>";
            } else {
                echo "<script>alert('Gagal Memeperbaharui');window.location.replace('category');</script>";
            }
    }
    
    public function deleteCategory($id) {
        $result = DB::table('category')->where('category_id', $id)->delete();
        if ($result) {
            return redirect('category');
        }
    }

    public function listCategory(){
        $dashboard = DB::table('category')->get();
        return view('dashboard')->with([
                    "dashboard" => $dashboard
        ]);
    }
}
    