<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB; 

class ChangePasswordController extends Controller
{
    public function updatePassword(Request $request)
    {
        $post = $request->all();
        $hashed = Hash::make($post['old_password']);

        $row = DB::table('users')->where('id', $post['id'])->first();
        
        if (Hash::check($post['old_password'], $row->password)) {
    if ($post['password'] == $post['password_confirmation']){
        $new_hashed = Hash::make($post['password']);
        $data = array (
            'password' => $new_hashed
        );
        $result = DB::table('users')->where('id', $post['id'])->update($data);
        if ($result) {
                echo "<script>alert('Berhasil Memeperbaharui');window.location.replace('change_pasword');</script>";
            } else {
                echo "<script>alert('Gagal Memeperbaharui');window.location.replace('change_pasword');</script>";
            }
    }else{
         echo "<script>alert('Your new password is different with confirm password');window.location.replace('change_pasword');</script>";
    }
}else{
    echo "<script>alert('Password doesn't matched');window.location.replace('change_pasword');</script>";
}
    }
}
