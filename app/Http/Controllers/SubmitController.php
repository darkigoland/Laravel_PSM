<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class SubmitController extends Controller 
{
   public function submitForm()
   {
     return view('approval');
   }

   public function submitFile(Request $request)
   {
       $request->file->store('approval');
       return "File has been submitted succesfully!";
   }

}