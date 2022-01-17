<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Logbook;

class LogbookController extends Controller
{
    public function savelogbook(Request $request) {
        
        $newlogbook = new logbook;
        $newlogbook->name = $request->logbook;
        $newlogbook->is_complete = 0;
        $newlogbook->save();

        return view('LogBookForm');
    }
}
