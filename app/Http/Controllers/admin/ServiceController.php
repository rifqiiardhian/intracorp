<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    public function index() {
        if(!Session::get('login')) {
            return redirect('/auth/login');
        } else {
            $id_admin = Session::get('id');
            $roles_id = Session::get('roles');

            $admin = DB::table('user')->where('id', $id_admin)->get();
            $data['services'] = DB::table('services')->orderBy('id', 'desc')->paginate(4);
            $data['active'] = 'service';

            foreach ($admin as $admindata) {
                $data['firstname'] = $admindata->firstname;
                $data['lastname'] = $admindata->lastname;
                $data['username'] = $admindata->username;
            }

            $data['title'] = 'Intra Corp | Services';
            return view('admin/service', $data);
        }
    }

    public function add() {
        if(!Session::get('login')) {
            return redirect('/auth/login');
        } else {
            $id_admin = Session::get('id');
            $roles_id = Session::get('roles');

            $admin = DB::table('user')->where('id', $id_admin)->get();
            $data['active'] = 'service';

            foreach ($admin as $admindata) {
                $data['firstname'] = $admindata->firstname;
                $data['lastname'] = $admindata->lastname;
                $data['username'] = $admindata->username;
            }

            $data['title'] = 'Intra Corp | Services';
            return view('admin/service_add', $data);
        }
    }

    public function save(Request $request) {
        $servicename = $request->input('name');
        $servicedescription = $request->input('description');

        $method = $request->method();

        if( $method == 'POST') {
            $sql = DB::table('services')->insert([
                        'name' => $servicename,
                        'description' => $servicedescription,
                    ]);

            if ($sql) {
                return redirect('/a/service')->with(['success' => 'Successfully added services !']);
            } else {
                return redirect('/a/service/add')->with(['error' => 'Cannot add services !']);
            }
        } else {
            return redirect('/a/service/add')->with(['error' => 'Cannot add services !']);
        }
    }

    public function edit(Request $request) {
        if(!Session::get('login')) {
            return redirect('/auth/login');
        } else {
            $id_admin = Session::get('id');
            $roles_id = Session::get('roles');
            $services_id = $request->get('serviceId');

            $services = DB::table('services')->where('id', $services_id)->get();
            $admin = DB::table('user')->where('id', $id_admin)->get();
            $data['active'] = 'service';

            foreach ($admin as $admindata) {
                $data['firstname'] = $admindata->firstname;
                $data['lastname'] = $admindata->lastname;
                $data['username'] = $admindata->username;
            }

            $data['servicesid'] = $request->get('serviceId');

            foreach($services as $dataservices) {
                $data['servicename'] = $dataservices->name;
                $data['servicedescription'] = $dataservices->description;
            }

            $data['title'] = 'Intra Corp | Services';
            return view('admin/service_edit', $data);
        }
    }

    public function update(Request $request) {
        $serviceid = $request->input('id');
        $servicename = $request->input('name');
        $servicedescription = $request->input('description');

        $method = $request->method();

        if( $method == 'POST') {
            $sql = DB::table('services')->where('id', $serviceid)->update([
                'name' => $servicename,
                'description' => $servicedescription,
            ]);

            if ($sql) {
                return redirect('/a/service/edit?serviceId=' .$serviceid)->with(['success' => 'Successfully updated services !']);
            } else {
                return redirect('/a/service/edit?serviceId=' .$serviceid)->with(['error' => 'Cannot updated services !']);
            }
        } else {
            return redirect('/a/service/edit?serviceId=' .$serviceid)->with(['error' => 'Cannot updated services !']);
        }
    }

    public function delete(Request $request) {
        $serviceid = $request->input('delete_services');

        $method = $request->method();

        if( $method == 'POST') {
            $sql = DB::table('services')->where('id', $serviceid)->delete();

            if ($sql) {
                return redirect('/a/service')->with(['success' => 'Successfully deleted services !']);
            } else {
                return redirect('/a/service')->with(['error' => 'Cannot deleted services !']);
            }
        } else {
            return redirect('/a/service')->with(['error' => 'Cannot deleted services !']);
        }
    }
}
