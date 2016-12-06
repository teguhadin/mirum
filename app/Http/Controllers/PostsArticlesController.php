<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\User;
use Session;

class PostsArticlesController extends Controller {

    public function addPostsArticles(Request $request) {
        $post = $request->all();
//        echo $post['category'];
        $data = array(
            'category_id' => $post['category'],
            'title' => $post['title'],
            'slug' => $post['slug'],
            'short_description' => $post['short_description'],
            'content' => $post['content'],
            'thumbnail' => $post['image'],
            'image' => $post['image-large'],
            'post_date' => $post['post_date']
        );
        $result = DB::table('posts/articles')->insert($data);
        if ($result) {
            echo "<script>alert('Berhasil');window.location.replace('dashboard');</script>";
        } else {
            echo "<script>alert('Gagal');window.location.replace('dashboard');</script>";
        }
    }
    
    public function dataPostsArticles() {
        $dashboard = DB::table('posts/articles')
        ->join('category', 'posts/articles.category_id', '=', 'category.category_id')->
        get();
        return view('dashboard')->with([
                    "dashboard" => $dashboard
        ]);
    }

    public function updatePosts(Request $request){
        $post = $request->all();
        $data =  array(
            'category_id' => $post['category'],
            'title' => $post['title'],
            'slug' => $post['slug'],
            'short_description' => $post['short_description'],
            'content' => $post['content'],
            'thumbnail' => $post['image'],
            'image' => $post['image-large'],
            'post_date' => $post['post_date']
        );
        $result = DB::table('posts/articles')->where('id', $post['id'])->update($data);
        if ($result) {
                echo "<script>alert('Berhasil Memeperbaharui');window.location.replace('dashboard');</script>";
            } else {
                echo "<script>alert('Gagal Memeperbaharui');window.location.replace('dashboard');</script>";
            }
    }

    public function deletePostsArticles($id) {
        $result = DB::table('posts/articles')->where('id', $id)->delete();
        if ($result) {
            return redirect('dashboard');
        }
    }
}
