@extends('lecturer.lect_master')
@section('lecturer')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">PSM MS</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">

 <!-- CONTENT -->
 <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
   
      <!--tab-->
      <div class="pd-10 bg-gray-300 mg-t-20">
					<!-- Nav tabs -->
					<ul class="nav nav-pills flex-column flex-md-row" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab" aria-selected="true"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Profile</span></a> </li>
						<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#expertise" role="tab" aria-selected="false"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Expertise</span></a> </li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content tabcontent-border">
						<div class="tab-pane active" id="profile" role="tabpanel">
							<div class="p-15">
              <h6 class="card-body-title">Lecturer Profile</h6>
              <div class="mg-b-20 mg-sm-b-30">
                <img class="card-img-top img-fluid" src="{{(!empty($user->image))? url('dashboard/img/profile_img/'.$user->image):url('dashboard/img/img12.jpg')}}" alt="{{ $user->name }}" style="width: 15%; height: 15%;">
              </div>
              <div class="row mg-t-20">
              <h5 class="card-body-title col-sm-4">Fullname: </h6>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <p class="form-control">{{ $user->name }} </p>
                </div>
              </div><!-- row -->
              <div class="row mg-t-20">
              <h5 class="card-body-title col-sm-4">Staff ID: </h6>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <p class="form-control">{{ $user->userID }} </p>
                </div>
              </div><!-- row -->
              <div class="row mg-t-20">
              <h5 class="card-body-title col-sm-4">Email: </h6>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <p class="form-control">{{ $user->email }} </p>
                </div>
              </div><!-- row -->
              <div class="row mg-t-20">
              <h5 class="card-body-title col-sm-4">Phone No: </h6>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <p class="form-control">{{ $user->phone }} </p>
                </div>
              </div><!-- row -->
            </div>
						</div>
						<div class="tab-pane" id="expertise" role="tabpanel">
							<div class="p-15">
								<h4>Fusce porta eros a nisl varius, non molestie metus mollis. Pellentesque tincidunt ante sit amet ornare lacinia.</h4>
								<h3>Donec vitae laoreet neque, id convallis ante.</h3>
								<p>Duis cursus eros lorem, pretium ornare purus tincidunt eleifend. Etiam quis justo vitae erat faucibus pharetra. Morbi in ullamcorper diam. Morbi lacinia, sem vitae dignissim cursus, massa nibh semper magna, nec pellentesque lorem nisl quis ex.</p>
							</div>
						</div>
					</div>
				</div>

      <!--end tab-->

       

            
             
              <div class="form-layout-footer mg-t-30">
                <button class="btn btn-info mg-r-5"><a href="{{route('profile.edit')}}">Edit Profile</button>
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