@extends('student.stud_master')
@section('student')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">PSM MS</a>
        <span class="breadcrumb-item active">Inventory</span>
      </nav>

      <div class="sl-pagebody">
        <!-- CONTENT -->

<!-- component -->
<div class="sl-pagebody">
    <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
        <div class="bg-slate-800 bg-opacity-50 flex justify-center items-center absolute top-0 right-0 bottom-0 left-0">
            <div class="bg-white px-16 py-14 rounded-md">
                <h1 class="text-xl mb-4 font-bold h1-Black">Inventory</h1>
                <div class="text-center">
                    <button class="background-indigo-500 px-4 py-2 rounded-md text-md text-Black">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{route('std_Make_Request')}}">
                            {{ ('New Request') }}  
                        </a>
                    </button>
                    <button class="bg-red-500 px-7 py-2 ml-2 rounded-md text-md text-Black font-semibold">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{route('std_Status_Request')}}">
                            {{ ('Request Status') }}  
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- END CONTENT -->
      </div><!-- sl-pagebody -->
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

      </div><!-- sl-pagebody -->
      
    </div>
    @endsection