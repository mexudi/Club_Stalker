<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ManagerController extends Controller
{
    //
    public function index_clubs(){
        $clubs = Club::all();
        return view('./Manager/clubs',['clubs'=>$clubs]);
    }

    public function loggin()
    {
        return view('./Manager/clubs');
    }
    public function register()
    {
        return view('./Manager/auth/register');
    }
}
