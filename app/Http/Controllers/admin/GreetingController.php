<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class GreetingController extends Controller
{
    public function index() {
        if(!Session::get('login')) {
            return redirect('/auth/login');
        } else {
            $id_admin = Session::get('id');
            $roles_id = Session::get('roles');

            $admin = DB::table('user')->where('id', $id_admin)->get();
            $greeting = DB::table('greeting')->get();
            $data['active'] = 'greeting';

            foreach ($admin as $admindata) {
                $data['firstname'] = $admindata->firstname;
                $data['lastname'] = $admindata->lastname;
                $data['username'] = $admindata->username;
            }

            foreach ($greeting as $datagreeting) {
                $data['idgreeting'] = $datagreeting->id;
                $data['textgreeting'] = $datagreeting->text;
            }

            $data['title'] = 'Intra Corp | Greetings';
            return view('admin/greeting', $data);
        }
    }
    
    public function update(Request $request) {
        $id = $request->input('id');
        $textgreeting = $request->input('textareagreeting');

        $method = $request->method();

        if( $method == 'POST') {
            $sql = DB::table('greeting')->where('id', $id)->update([
                        'text' => $textgreeting,
                    ]);
            if ($sql) {
                return redirect('/a/greeting')->with(['success' => 'Successfully updated greetings !']);
            } else {
                return redirect('/a/greeting')->with(['error' => 'Cannot update greetings !']);
            }
        } else {
            return redirect('/a/greeting')->with(['error' => 'Cannot update greetings !']);
        }
    }
}
