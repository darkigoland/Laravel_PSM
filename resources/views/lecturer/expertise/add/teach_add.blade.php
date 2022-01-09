@extends('lecturer.lect_master')
@section('lecturer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">PSM MS</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">

 <!-- CONTENT -->

 <div class="card pd-20 pd-sm-40 form-layout form-layout-4"><!--start border-->
 <h2>Teaching Information</h2>

          <div class="box-body"><!-- Nav tabs -->
					
					<!-- Tab panes -->
							<div class="p-15">
              <form method="post" action="{{ route('lecturer.teaching.store') }}">
	 	@csrf
              <div class="form-layout">
               <div class="add_item">  
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Code: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="code[]" placeholder="Enter Code Subject">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Subject: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="subject[]" placeholder="Enter Subject Name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group" style="padding-top: 20px;">
                 <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span> 
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
           </div><!--end add-->
          </div><!--endd layout-->

            <div class="form-layout-footer">
            <input type="submit" class="btn btn-info mg-r-5" value="Submit">
            </div><!-- form-layout-footer -->
	 
        </form>


         </div><!---end p-15-->
				</div><!--end tab-->



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


    
  <div style="visibility: hidden;">
  <div class="whole_extra_item_add" id="whole_extra_item_add">
	  <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
		  <div class="form-row">
        
      <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Code: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="code[]" placeholder="Enter Code Subject">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Subject: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="subject[]" placeholder="Enter Subject Name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group" style="padding-top: 20px;">
                 <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span> 
                 <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span>
                </div>
              </div><!-- col-4 -->

		  </div>

	  </div><!--end delete-->

</div><!--end add-->
</div><!--end visibility-->

<script type="text/javascript">
	$(document).ready(function(){
		var counter = 0;
		$(document).on("click",".addeventmore",function(){
			var whole_extra_item_add = $('#whole_extra_item_add').html();
			$(this).closest(".add_item").append(whole_extra_item_add);
			counter++;
		});
		$(document).on("click",'.removeeventmore',function(event){
			$(this).closest(".delete_whole_extra_item_add").remove();
			counter -= 1
		});
	});
	</script>


    
    @endsection