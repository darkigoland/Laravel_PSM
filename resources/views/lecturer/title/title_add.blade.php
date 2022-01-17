@extends('lecturer.lect_master')
@section('lecturer')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">PSM MS</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">


<div class="tab-pane" id="research" role="tabpanel">
                        <div class="p-15">

                        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add Proposal Title</h6>

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Project Title <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title" placeholder="Enter project title">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Objective <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="objective" placeholder="Enter objective">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Project Scope <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="scope" placeholder="Enter scope">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Project Background <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="background" placeholder="Enter background">
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Project Tool <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="pro_status" placeholder="Enter tool">
                </div>
              </div><!-- col-8 -->
            </div><!-- row -->
							</div>
						</div>
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
