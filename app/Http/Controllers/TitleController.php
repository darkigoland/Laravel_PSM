<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\TitleModel;
use Illuminate\Support\Facades\DB;

class TitleController extends Controller
{

    public function LectTitleView(){
        $data['allData'] = TitleController::select('titleId')->groupBy('exp_cat_id')->get();
        return view('lecturer.title.title_view',$data);
    }

    public function StudTitleView(){
        $data['allData'] = TitleController::select('titleId')->groupBy('exp_cat_id')->get();
        return view('student.title.title_view',$data);
    }

    public function TitleAdd(){
        $data['title'] = TitleController::all();
        return view('lecturer.title.title_add',$data);
    }


}
