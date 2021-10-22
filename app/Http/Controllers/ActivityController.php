<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {    
        return view('welcome');
    }

    public function estudioMenu()
    {
        return view('estudioMenu');
    }

    public function juegosMenu()
    {
        return view('juegoMenu');
    }
    
    public function estudio($id)
    {
        $info = Information::findOrFail($id);
      
        return view('estudio', compact('info'));
    }

    public function tutorial($id)
    {
        $info = Activity::findOrFail($id);
      
        return view('tutorial', compact('info'));
    }

}
