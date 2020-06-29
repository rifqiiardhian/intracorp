<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index() {
        if(!Session::get('login')) {
            return redirect('/auth/login');
        } else {
            $id_admin = Session::get('id');
            $roles_id = Session::get('roles');

            $admin = DB::table('user')->where('id', $id_admin)->get();
            $data['active'] = 'none';

            foreach ($admin as $admindata) {
                $data['firstname'] = $admindata->firstname;
                $data['lastname'] = $admindata->lastname;
                $data['username'] = $admindata->username;
            }

            $data['title'] = 'Intra Corp | Edit Your Profile';
            return view('admin/profile', $data);
        }
    }

    public function update(Request $request) {
        $this->validate($request,[
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
        ]);

        $id = $request->input('id');
        $username = $request->input('username');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');

        $method = $request->method();

        if( $method == 'POST') {
            $sql = DB::table('user')->where('id', $id)->update([
                        'username' => $username,
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                    ]);

            if ($sql) {
                return redirect('/a/admin/profile')->with(['success' => 'Successfully updated profile !']);
            } else {
                return redirect('/a/admin/profile')->with(['error' => 'Cannot update profile !']);
            }
        } else {
            return redirect('/a/admin/profile')->with(['error' => 'Cannot update profile !']);
        }
    }

    public function password() {
        if(!Session::get('login')) {
            return redirect('/auth/login');
        } else {
            $id_admin = Session::get('id');
            $roles_id = Session::get('roles');

            $admin = DB::table('user')->where('id', $id_admin)->get();
            $data['active'] = 'none';

            foreach ($admin as $admindata) {
                $data['firstname'] = $admindata->firstname;
                $data['lastname'] = $admindata->lastname;
                $data['username'] = $admindata->username;
                Session::put('pass', $admindata->password);
            }

            $data['title'] = 'Intra Corp | Change Password';
            return view('admin/password', $data);
        }
    }

    public function update_password(Request $request) {
        $id = $request->input('id');
        $pass = $request->input('confirmpassword');
        $hash = md5($pass);

        $method = $request->method();

        if( $method == 'POST') {
            $sql = DB::table('user')->where('id', $id)->update([
                        'password' => $hash,
                    ]);

            if ($sql) {
                return redirect('/a/admin/password')->with(['success' => 'Successfully updated password !']);
            } else {
                return redirect('/a/admin/password')->with(['error' => 'Cannot update password !']);
            }
        } else {
            return redirect('/a/admin/password')->with(['error' => 'Cannot update password !']);
        }
    }
}
