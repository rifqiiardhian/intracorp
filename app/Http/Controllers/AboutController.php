<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function index() {
        $data['active_menu'] = 'about';
        $data['title'] = 'Intra Corp | About Us';

        $profile = DB::table('profile')->get();

        foreach ($profile as $dataprofile) {
            $data['companyname'] = $dataprofile->name;
            $data['about'] = $dataprofile->about;
            $data['vision'] = $dataprofile->vision;
            $data['mission'] = $dataprofile->mission;
            $data['goals'] = $dataprofile->goals;
        }

        $data['phone'] = DB::table('contact')->where('name', 'phone')->value('url');
        $data['whatsapp'] = DB::table('contact')->where('name', 'whatsapp')->value('url');
        $data['instagram'] = DB::table('contact')->where('name', 'instagram')->value('url');
        $data['email'] = DB::table('contact')->where('name', 'email')->value('url');

        $data['office'] = DB::table('profile')->value('office');
        $data['workshop'] = DB::table('profile')->value('workshop');

        return view('user/about', $data);
    }
}
