<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class PagesController extends Controller
{
    public function Home()
    {
      return view('Homepage',[
          'slots' => ['Attend SRS Class', 'Attend DBMS class', 'Networking lab', 'SPL team meeting']
      ]);
    }

    public function About()
    {
       return view('About');
    }

    public function Contacts()
    {
       return view('Contacts');
    }

    public function saveregister()
    {
       return view('auth.register');
    }

    public function save_register(Request $request)
    {

        $data = array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=$request->password;

        DB::table('users')->insert($data);
        return Redirect::to('/register');
    }



}
