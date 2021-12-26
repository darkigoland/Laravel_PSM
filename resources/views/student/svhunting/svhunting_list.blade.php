@extends('student.stud_master')
@section('student')

<link href="{{ URL::asset('css/button.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/table.css') }}" rel="stylesheet">

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">PSM MS</a>
        <span class="breadcrumb-item active">LECTERUR LIST</span>
    </nav>

    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
        <table>
  
  @php
	$lects = DB::select('select * from users where role = "lecturer"');
	@endphp

  <tr>
    <th>Lecterur Name</th>
    <th>Setting</th>
    
  </tr>
@foreach ($lects as $p)
<tr>
<td><a href="{{route('svhunting.view')}}">{{ $p->name }}</a></td>
<td><a href="http://www.google.com/"><button class="button button1">REQUEST</button></a></td>

</tr>
@endforeach

</table>
 
 
    </div>
</div>
@endsection