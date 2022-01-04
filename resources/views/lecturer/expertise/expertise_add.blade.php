@extends('lecturer.lect_master')
@section('lecturer')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">PSM MS</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">

 <!-- CONTENT -->
 <div class="card pd-20 pd-sm-40 form-layout form-layout-4"><!--start border-->
 <h2>Expertise Information</h2>
 <div class="col-sm-6 col-md-1 mg-t-0 mg-md-t-0">
              <a href="{{route('lecturer.expertise.add')}}" style="float: right" class="btn btn-rounded btn-info mg-r-5"> Add Expertise</a>
</div>
<!--tab-->
<div class="pd-10 bg-gray-300 mg-t-20"><!--tab header-->
            <ul class="nav nav-pills flex-column flex-md-row customtab2" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#teaching" role="tab" aria-expanded="true">Teaching</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#research" role="tab" aria-expanded="false">Research</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#intellect" role="tab" aria-expanded="false">Intellectual Property</a></li>
            </ul>
          </div><!--end tab header-->

          <div class="box-body">
					<!-- Nav tabs -->
					
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="teaching" role="tabpanel">
							<div class="p-15">
								
                            @include('lecturer.expertise.add.teaching_add')

                        </div>
						</div>

						<div class="tab-pane" id="research" role="tabpanel">
                        <div class="p-15">

                        @include('lecturer.expertise.add.research_add')
							</div>
						</div>

						<div class="tab-pane" id="intellect" role="tabpanel">
							<div class="p-15">

                            @include('lecturer.expertise.add.intellect_add')
						</div>
					</div>
				</div>


<!--end tab-->



          </div><!--End border col-6 -->
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