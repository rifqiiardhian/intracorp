<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index() {
        if(!Session::get('login')) {
            return redirect('/auth/login');
        } else {
            $id_admin = Session::get('id');
            $roles_id = Session::get('roles');

            $admin = DB::table('user')->where('id', $id_admin)->get();
            $data['active'] = 'contact';

            $data['phone'] = DB::table('contact')->where('name', 'phone')->value('url');
            $data['whatsapp'] = DB::table('contact')->where('name', 'whatsapp')->value('url');
            $data['instagram'] = DB::table('contact')->where('name', 'instagram')->value('url');
            $data['email'] = DB::table('contact')->where('name', 'email')->value('url');

            foreach ($admin as $admindata) {
                $data['firstname'] = $admindata->firstname;
                $data['lastname'] = $admindata->lastname;
                $data['username'] = $admindata->username;
            }

            $data['title'] = 'Intra Corp | Contacts Link URL';
            return view('admin/contact', $data);
        }
    }

    public function updatephone(Request $request) {
        $phoneurl = $request->input('phone');

        $method = $request->method();

        if( $method == 'POST') {
            $sql = DB::table('contact')->where('name', 'phone')->update([
                        'url' => $phoneurl,
                    ]);
            if ($sql) {
                return redirect('/a/contact')->with(['success' => 'Successfully updated contacts !']);
            } else {
                return redirect('/a/contact')->with(['error' => 'Cannot update contact !']);
            }
        } else {
            return redirect('/a/contact')->with(['error' => 'Cannot update contact !']);
        }
    }

    public function updatewhatsapp(Request $request) {
        $whatsappurl = $request->input('whatsapp');

        $method = $request->method();

        if( $method == 'POST') {
            $sql = DB::table('contact')->where('name', 'whatsapp')->update([
                        'url' => $whatsappurl,
                    ]);
            if ($sql) {
                return redirect('/a/contact')->with(['success' => 'Successfully updated contacts !']);
            } else {
                return redirect('/a/contact')->with(['error' => 'Cannot update contact !']);
            }
        } else {
            return redirect('/a/contact')->with(['error' => 'Cannot update contact !']);
        }
    }

    public function updateinstagram(Request $request) {
        $instagramurl = $request->input('instagram');

        $method = $request->method();

        if( $method == 'POST') {
            $sql = DB::table('contact')->where('name', 'instagram')->update([
                        'url' => $instagramurl,
                    ]);
            if ($sql) {
                return redirect('/a/contact')->with(['success' => 'Successfully updated contacts !']);
            } else {
                return redirect('/a/contact')->with(['error' => 'Cannot update contact !']);
            }
        } else {
            return redirect('/a/contact')->with(['error' => 'Cannot update contact !']);
        }
    }

    public function updatemail(Request $request) {
        $mailurl = $request->input('emailurl');

        $method = $request->method();

        if( $method == 'POST') {
            $sql = DB::table('contact')->where('name', 'email')->update([
                        'url' => $mailurl,
                    ]);
            if ($sql) {
                return redirect('/a/contact')->with(['success' => 'Successfully updated contacts !']);
            } else {
                return redirect('/a/contact')->with(['error' => 'Cannot update contact !']);
            }
        } else {
            return redirect('/a/contact')->with(['error' => 'Cannot update contact !']);
        }
    }
}
