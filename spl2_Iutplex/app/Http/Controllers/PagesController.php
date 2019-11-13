<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function addmovie()
    {
       return view('addMovie');
    }
}
