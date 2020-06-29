<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function index() {
        $data['active_menu'] = 'contact';
        $data['title'] = 'Intra Corp | Contact Us';

        $data['phone'] = DB::table('contact')->where('name', 'phone')->value('url');
        $data['whatsapp'] = DB::table('contact')->where('name', 'whatsapp')->value('url');
        $data['instagram'] = DB::table('contact')->where('name', 'instagram')->value('url');
        $data['email'] = DB::table('contact')->where('name', 'email')->value('url');

        $data['office'] = DB::table('profile')->value('office');
        $data['workshop'] = DB::table('profile')->value('workshop');

        return view('user/contact', $data);
    }
}
