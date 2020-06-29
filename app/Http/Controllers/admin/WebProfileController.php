<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class WebProfileController extends Controller
{
    public function index() {
        if(!Session::get('login')) {
            return redirect('/auth/login');
        } else {
            $id_admin = Session::get('id');
            $roles_id = Session::get('roles');

            $admin = DB::table('user')->where('id', $id_admin)->get();
            $profile = DB::table('profile')->get();
            $data['active'] = 'web-profile';

            foreach ($admin as $admindata) {
                $data['firstname'] = $admindata->firstname;
                $data['lastname'] = $admindata->lastname;
                $data['username'] = $admindata->username;
            }

            foreach ($profile as $dataprofile) {
                $data['id_webprofile'] = $dataprofile->id;
                $data['companyname'] = $dataprofile->name;
                $data['about'] = $dataprofile->about;
                $data['vision'] = $dataprofile->vision;
                $data['mission'] = $dataprofile->mission;
                $data['goals'] = $dataprofile->goals;
                $data['office'] = $dataprofile->office;
                $data['workshop'] = $dataprofile->workshop;
            }

            $data['title'] = 'Intra Corp | Website Profile';
            return view('admin/webprofile', $data);
        }
    }

    public function update(Request $request) {
        $id = $request->input('id');
        $companyname = $request->input('companyname');
        $officeaddress = $request->input('officeaddress');
        $workshopaddress = $request->input('workshopaddress');
        $textabout = $request->input('textareaabout');
        $textvision = $request->input('textareavision');
        $textmission = $request->input('textareamission');
        $textgoals = $request->input('textareagoals');

        $method = $request->method();

        if( $method == 'POST') {
            $sql = DB::table('profile')->where('id', $id)->update([
                        'name' => $companyname,
                        'about' => $textabout,
                        'vision' => $textvision,
                        'mission' => $textmission,
                        'goals' => $textgoals,
                        'office' => $officeaddress,
                        'workshop' => $workshopaddress,
                    ]);
            if ($sql) {
                return redirect('/a/website-profile')->with(['success' => 'Successfully updated website profile !']);
            } else {
                return redirect('/a/website-profile')->with(['error' => 'Cannot update website profile !']);
            }
        } else {
            return redirect('/a/website-profile')->with(['error' => 'Cannot update website profile !']);
        }
    }
}
