@extends('student.stud_master')
@section('student')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">PSM MS</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">

 <!-- CONTENT -->
 <div class="card pd-20 pd-sm-40 form-layout form-layout-4">

      <!--tab-->
      @php
			$user = DB::table('title')->where('titleId',Auth::user()->id)->first();
		  @endphp
      <div class="pd-10 bg-gray-300 mg-t-20">

              <h6 class="card-body-title">Title</h6>
              <div class="mg-b-20 mg-sm-b-30">

              </div>
              <div class="row mg-t-20">
              <h5 class="card-body-title col-sm-4">Project Title: </h6>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <p class="form-control">{{$title->titleObj]}} </p>
                </div>
              </div><!-- row -->
              <div class="row mg-t-20">
              <h5 class="card-body-title col-sm-4">Objective : </h6>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <p class="form-control">{{ $title->titleObj }} </p>
                </div>
              </div><!-- row -->
              <div class="row mg-t-20">
              <h5 class="card-body-title col-sm-4">Project Scope: </h6>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <p class="form-control">{{ $title->titleScope }} </p>
                </div>
              </div><!-- row -->
              <div class="row mg-t-20">
              <h5 class="card-body-title col-sm-4">Project Background: </h6>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <p class="form-control">{{ $title->titleBackground }} </p>
                </div>
              </div><!-- row -->
              <div class="row mg-t-20">
                <h5 class="card-body-title col-sm-4">Project Tool: </h6>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <p class="form-control">{{ $title->titleTool }} </p>
                  </div>
                </div><!-- row -->

            </div>
            <div class="form-layout-footer mg-t-30">
                <button class="btn btn-info mg-r-5"><a href="{{route('lecturer.title.view')}}">Book Title</button>
              </div><!-- form-layout-footer -->
            </div><!-- card -->
          </div><!-- col-6 -->

          <!-- END CONTENT -->


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



      </div><!-- sl-pagebody -->


      </div><!-- sl-pagebody -->

    </div>
    @endsection
