<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LogoController extends Controller
{
    public function index() {
        if(!Session::get('login')) {
            return redirect('/auth/login');
        } else {
            $id_admin = Session::get('id');
            $roles_id = Session::get('roles');

            $admin = DB::table('user')->where('id', $id_admin)->get();
            $data['logo'] = DB::table('website_logo')->orderBy('id','asc')->get();
            $data['active'] = 'logo';

            foreach ($admin as $admindata) {
                $data['firstname'] = $admindata->firstname;
                $data['lastname'] = $admindata->lastname;
                $data['username'] = $admindata->username;
            }

            $data['title'] = 'Intra Corp | Website Logo';
            return view('admin/logo', $data);
        }
    }

    public function update(Request $request) {
        $logo_id = $request->input('edit_logo');
        $new_photo = $request->input('photo');
        $directory = 'assets/images/logo';

        $method = $request->method();

        if($method == "POST") {
            if($new_photo != "") {
                $file->move($directory, $new_photo->getClientOriginalName());

                $sql = DB::table('website_logo')->where('id', $logo_id)->update([
                            'logo' => $directory."/".$new_photo->getClientOriginalName(),
                        ]);

                if ($sql) {
                    return redirect('/a/website-logo')->with(['success' => 'Successfully updated logo']);
                } else {
                    return redirect('/a/website-logo')->with(['error' => 'Cannot update logo']);
                }
            } else {
                return redirect('/a/website-logo')->with(['error' => 'Cannot update logo']);
            }
        } else {
            return redirect('/a/website-logo')->with(['error' => 'Cannot update logo']);
        }
    }
}
