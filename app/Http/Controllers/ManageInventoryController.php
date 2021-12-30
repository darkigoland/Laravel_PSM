<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ManageInventoryController extends Controller
{
    public function std_InventoryHome(){
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('ManageInventoryUsage.std_InventoryHome',compact('user'));
    }

    public function std_MakeRequest(){
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('ManageInventoryUsage.std_MakeRequest',compact('user'));
    }

    public function std_StatusRequest(){
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('ManageInventoryUsage.std_Status',compact('user'));
    }

    public function make_Request(Request $request){

        return $request->input(); 
    }
}
