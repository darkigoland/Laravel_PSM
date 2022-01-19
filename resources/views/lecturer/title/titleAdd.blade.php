@extends('lecturer.lect_master')
@section('lecturer')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">PSM MS</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">


<form method="post" action="/add" enctype="multipart/form-data">
@csrf
            <fieldset>
                <legend>Project Title</legend>
                <label for="titleName">Project Name:</label>
                <input type="text" id="name" name="titleName"><br>

                <label for="titleObj">Project Objective:</label>
                <input type="text" id="titleObj" name="titleObj"><br>

                <label for="titleScope">Project Scope:</label>
                <input type="text" id="titleScope" name="titleScope"><br>

                <label for="titleBackground">Project Background :</label>
                <input type="text" id="titleBackground" name="titleBackground"><br>

                <label for="titleSoftware">Project Software :</label>
                <input type="text" id="titleSoftware" name="titleSoftware"><br>

                <label for="titleTool">Project Tool :</label>
                <input type="text" id="titleTool" name="titleTool"><br>

                <input type="submit" value="Save">
            </fieldset>
        </form>
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

