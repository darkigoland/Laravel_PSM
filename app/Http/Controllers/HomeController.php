<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Auth

class HomeController extends Controller
{
    public function index(){
        $role=Auth::user()->role;

        if($role=='student'){
            return view('student.stud_master');
        }
        if($role=='technician'){
            return view('technician');
        }
        else{
            return view('lecturer.lect_master');
        }
    }//end role


    public function Logout(){
        Auth::logout();
        return Redirect()->route('login');
    }
}
