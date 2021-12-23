<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
            return view('lecturer.index');
        }
    }//end role


    public function Logout(){
        Auth::logout();
        return Redirect()->route('login');
    }

    public function ProfileView(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('lecturer.profile.profile_view',compact('user'));
    }

    public function ProfileEdit(){
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('lecturer.profile.profile_edit',compact('editData'));
    }

//SVHUNTING module
    public function SVhuntingList(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('student.svhunting.svhunting_list',compact('user'));
    }




}
