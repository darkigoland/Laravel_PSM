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
            return view('student.index');
        }
        if($role=='technician'){
            return view('technician.index');
        }
        else{
            return view('lecturer.index');
        }
    }//end role


    public function Logout(){
        Auth::logout();
        return Redirect()->route('login');
    }

    //Lecturer Profile
    public function LectProfileView(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('lecturer.profile.profile_view',compact('user'));
    }

    public function LectProfileEdit(){
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('lecturer.profile.profile_edit',compact('editData'));
    }

    public function LectProfileStore(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->userID = $request->userID;

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

    //End Lect Profile

 //Student Profile
 public function StudProfileView(){
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('student.profile.profile_view',compact('user'));
}

public function StudProfileEdit(){
    $id = Auth::user()->id;
    $editData = User::find($id);
    return view('student.profile.profile_edit',compact('editData'));
}

public function StudProfileStore(Request $request){
    $data = User::find(Auth::user()->id);
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->userID = $request->userID;

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

//End Stud Profile   





}
