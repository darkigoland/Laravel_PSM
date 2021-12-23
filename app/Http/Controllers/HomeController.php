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

    public function ProfileStore(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->staffID = $request->staffID;

        if ($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('dashboard/img/profile_img/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('dashboard/img/profile_img'),$filename);
            $data['image'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('profile.view')->with($notification);
    }//End Method






}
