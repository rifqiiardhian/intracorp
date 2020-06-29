<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login() {
        $data['title'] = 'Intra Corp | Login';

        return view('auth/login', $data);
    }

    public function check(Request $request) {
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->username;
        $password = $request->password;
        $hash = md5($password);

        $check = DB::select("SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$hash'");

        if (!empty($check)) {
            foreach( $check as $data ) {
                $id = $data->id;
                $roles_id = $data->roles_id;
                $firstname = $data->firstname;
                $lastname = $data->lastname;
            }

            Session::put('id', $id);
            Session::put('roles', $roles_id);
            Session::put('login',TRUE);

            // if ($id_role == 1) {
            //     return redirect('a/category')->with(['success' => 'Selamat datang ' .$nama.' !']);
            // } elseif ($id_role == 2) {
            //     return redirect('/')->with(['success' => 'Selamat datang ' .$nama.' !']);
            // } elseif ($id_role == 3) {
            //     return redirect('a/home')->with(['success' => 'Selamat datang ' .$nama.' !']);
            // } elseif ($id_role == 4) {
            //     return redirect('a/riwayat-penjualan')->with(['success' => 'Selamat datang ' .$nama.' !']);
            // }

            return redirect('a/dashboard')->with(['success' => 'Welcome back, ' .$firstname. ' ' .$lastname. ' !']);

        } else {
            return redirect('/auth/login')->with(['error' => 'Username or Password Invalid !']);
        }
    }

    public function logout(){
        Session::put('login',FALSE);
        Session::flush();
        return redirect('/auth/login');
    }
}
