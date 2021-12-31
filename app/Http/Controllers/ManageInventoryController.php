<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ManageInventoryModel;
use Illuminate\Support\Facades\DB;

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

        // $query = DB::table('Inventory')->insert([
        //     'item_Name'=>$request->input('name'),
        //     'item_Description'=>$request->input('description'),
        //     'quantity'=>$request->input('quantity')
        // ]);

        $inventory = new ManageInventoryModel;

        $inventory->stud_Name=$request->stdname;

        $inventory->item_Name=$request->name;
        $inventory->item_Description=$request->description;
        $inventory->quantity=$request->quantity;
        $inventory->save();
        return redirect('std_Inventory_Home');

        
    }

   
}
