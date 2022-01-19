<?php

namespace App\Http\Controllers;
use App\Models\Approval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApprovalController extends Controller
{
  
    public function index()
    {
        $approvals = Approval::all();
      return view ('approval.index')->with('approval', $approvals);
    }
    
    public function view($stud_id)
    {
        $approvals = Approval::find($stud_id);
        return view('approval.index')->with('approval', $approvals);
    }

  
    public function approve(Request $request, $stud_id)
    {
        $approvals = Approval::find($stud_id);
        $approvals->update($request->all());
        $approvals =DB::table('students')
                   ->where ('proposal_status','pending')
                   ->update(['proposal_status'=>'Approved']);
        return redirect('approval')->with('flash_message', 'Proposal Updated!');  
    }

   
    public function reject($stud_id)
    {
        Approval::destroy($stud_id);
        return redirect('approval')->with('flash_message', 'Proposal deleted!');  
    }

}