@extends('student.stud_master')
@section('student')

<link href="{{ URL::asset('css/button.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/table.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/tab.css') }}" rel="stylesheet">
<body onload="document.getElementById('defaultOpen').click();">
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
  
}
document.getElementById("defaultOpen").click();
</script>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">PSM MS</a>
        <span class="breadcrumb-item active">LECTERUR LIST</span>
    </nav>

    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
      

  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')"id="defaultOpen">LECTURER LIST</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">PROPOSAL STATUS</button>
</div>
 @php
	$lects = DB::select('select * from users where role = "lecturer"');
  $status = DB::table('proposal')->where('student', '=', $user->id) ->get();
@endphp
<div id="London" class="tabcontent">
  <table>
 

  <tr>
    <th>Lecterur Name</th>
    <th>Setting</th>
    
  </tr>
@foreach ($lects as $p)
<tr>
<td><a href="{{route('svhunting.view',['lect' => $p->id])}}">{{ $p->name }}</a></td>
<td><a href="{{route('svhunting.form',['lect' => $p->id])}}"><button class="button button1">REQUEST</button></a></td>

</tr>
@endforeach


</table>
</div>
<div id="Paris" class="tabcontent">
<table>
 

 <tr>
   <th>Lecterur Name</th>
   <th>Status</th>
   <th>Current Proposal</th>
   <th>ACTION</th>
   
 </tr>
@foreach ($status as $d)
<tr>
<td><a href="">{{ $d->lecterur }}</a></td>
<td><a>{{ $d->status }}</a></td>
<td><a href={{ asset($d->file) }}>{{ $d->file }}</a></td>
<td>
<a href="{{route('svhunting.update',['lect' => $d->lecterur])}}"><button class="button button1">Edit</button></a><br>
<a href="{{route('svhunting.delete',['lect' => $d->lecterur])}}"><button class="button button1">Delete</button></a></td>

</tr>
@endforeach


</table>
</div>
    </div>
</div>
@endsection