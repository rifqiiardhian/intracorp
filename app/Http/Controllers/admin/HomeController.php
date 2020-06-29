<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index() {
        if(!Session::get('login')) {
            return redirect('/auth/login');
        } else {
            $id_admin = Session::get('id');
            $roles_id = Session::get('roles');

            $admin = DB::table('user')->where('id', $id_admin)->get();
            $data['active'] = 'home';

            foreach ($admin as $admindata) {
                $data['firstname'] = $admindata->firstname;
                $data['lastname'] = $admindata->lastname;
                $data['username'] = $admindata->username;
            }
            $data['title'] = 'Intra Corp | Admin Dashboard';
            return view('admin/dashboard', $data);
        }
    }
}
