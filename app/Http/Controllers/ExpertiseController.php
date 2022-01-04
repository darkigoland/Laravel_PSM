<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Expertise;
use App\Models\ExpertiseCategory;

class ExpertiseController extends Controller
{
    public function LectTeachingView(){
        $data['allData'] = Expertise::select('exp_cat_id')->groupBy('exp_cat_id')->get();
        return view('lecturer.expertise.teaching_view',$data);
    }

    public function LectTeachingAdd(){
        $data['exp_categories'] = Expertise::all();
        return view('lecturer.expertise.teaching_add',$data);
    }



}
