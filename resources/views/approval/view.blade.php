@extends('approval.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Student Proposal Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Student Name : {{ $approvals->stud_name }}</h5>
        <p class="card-text">Proposal: {{ $approvals->proposal }}</p>
  </div>
       
    </hr>
  
  </div>
</div>