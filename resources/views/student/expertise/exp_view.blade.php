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

 @php
	$lects = DB::select('select * from users where role = "lecturer"');
@endphp
   
      <!--tab-->
      <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Lecturer List</h6>

          <div class="table-wrapper">
            <div id="datatable1_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="datatable1_length"><label>
                <select name="datatable1_length" aria-controls="datatable1" class="select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                    <option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option>
                </select>
                <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 48px;">
                <span class="selection">
                    <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-datatable1_length-ki-container">
                      <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> items/page</label></div>  <div id="datatable1_filter" class="dataTables_filter"><label><input type="search" class="" placeholder="Search..." aria-controls="datatable1"></label></div><table id="datatable1" class="table display responsive nowrap dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="datatable1_info" style="width: 1546px;">
              <thead>
                <tr role="row">
                    <th class="wd-15p sorting_asc" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" style="width: 208px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Lecturer Name</th>
                   </tr>
              </thead>
              <tbody>
              @foreach ($lects as $p)
                  <tr role="row" class="odd">
                  <td tabindex="0" class="sorting_1"><a href="{{route('student.expertise.profile',['lect' => $p->id])}}">{{ $p->name }}</a></td>
                @endforeach
            </tbody>
            </table><div class="dataTables_paginate paging_simple_numbers" id="datatable1_paginate"><a class="paginate_button previous disabled" aria-controls="datatable1" data-dt-idx="0" tabindex="0" id="datatable1_previous">Previous</a><span><a class="paginate_button current" aria-controls="datatable1" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="datatable1" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="datatable1" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="datatable1" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="datatable1" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="datatable1" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="datatable1" data-dt-idx="7" tabindex="0" id="datatable1_next">Next</a></div></div>
          </div><!-- table-wrapper -->
        </div>

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