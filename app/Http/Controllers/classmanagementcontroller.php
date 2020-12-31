<?php

namespace App\Http\Controllers;
use App\Models\gei3IT;

use Illuminate\Http\Request;

class classmanagementcontroller extends Controller
{
    public function accueil(){
        return view ('index');
    }

    public function salles(){
        return view('classList');
    }

    public function groupes(){
        return view('groupList');
    }

    public function occupation(){
       
        return view('classOccupation' );
    }
}
