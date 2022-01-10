<?php
  
namespace App\Http\Controllers;

use App\Models\Approval;
use Illuminate\Http\Request;
  
class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Approval::latest()->paginate(5);
    
        return view('approval.index',compact('approval'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Approval  $approval
     * @return \Illuminate\Http\Response
     */
    public function show(Approval $approval)
    {
        return view('approval.show',compact('approval'));
    } 
     
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Approval $approval)
    {
        $request->validate([
            'proposal_status' => 'Accepted',
        ]);
    
        $approval->update($request->all());
    
        return redirect()->route('approval.index')
                        ->with('success','Project is accecpted successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Approval  $approval
     * @return \Illuminate\Http\Response
     */
    public function destroy(Approval $approval)
    {
        $approval->delete();
    
        return redirect()->route('aproval.index')
                        ->with('success','Project is rejected successfully');
    }
}