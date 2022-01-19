@extends('lecturer.lect_master')
@section('lecturer')

<link href="{{ URL::asset('css/button.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/table.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/tab.css') }}" rel="stylesheet">
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
</script>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">PSM MS</a>
        <span class="breadcrumb-item active">TITLE LIST</span>
    </nav>

    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">



  <table>

<a href={{"/titlelists/addForm"}}>Add</a>

  <tr>
    <th>No</th>
    <th>Title</th>
    <th>Setting</th>

  </tr>
@foreach ($titlelects as $titlelect)
<tr>
    <td>{{$titlelect['titleID']}}</td>
    <td>{{$titlelect['titleName']}}</td>
    <td><a href={{"/titlelists/delete/".$titlelect['titleID']}}>Delete</a>
        <a href={{"/titles".$titlelect['titleID']}}>View</a></td>



</tr>
@endforeach


</table>
</div>

          <!--footer-->
          <footer class="sl-footer">
            <div class="footer-left">
              <div class="mg-b-2">Copyright &copy; 2021. PSM MS. All Rights Reserved.</div>
              <div>Made by AisBatuCampur.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
              <span class="tx-uppercase mg-r-10">Share:</span>
              <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
              <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
            </div>
          </footer>
          <!--end footer-->
