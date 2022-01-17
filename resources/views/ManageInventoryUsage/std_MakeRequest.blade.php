@extends('student.stud_master')
@section('student')
<script src="https://cdn.tailwindcss.com"></script>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">PSM MS</a>
        <span class="breadcrumb-item active">Inventory</span>
      </nav>

      <div class="sl-pagebody">
        <!-- CONTENT -->

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <div class="bg-white px-16 py-14 rounded-md">
                    <h1 class="text-xl mb-4 font-bold h1-Black">Inventory</h1>
                    <p>Name: {{ Auth::user()->name }}</p>
                    
                    <p>Supervisor: {{ $sv_name }}</p>
                    <p>Project Title: </p>

                    <!-- component -->
                     <form action="make_Request" method="POST">
                         @csrf

                        <div class="container flex items-center justify-center">
                            <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                                <thead class="text-white">
                                    <tr class="bg-teal-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                                        <th class="p-3 text-left">Item Name</th>
                                        <th class="p-3 text-left">Item Description</th>
                                        <th class="p-3 text-left" width="110px">Quantity</th>
                                        <th></th>
                                    </tr>
                                </thead> 

                                <tbody class="flex-1 sm:flex-none">
                                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                                        <td class="border-grey-light border hover:bg-gray-100 p-3">
                                            <input type="text" name="name" placeholder="Enter Item Name">
                                        </td>
                                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">
                                            <input type="text" name="description" placeholder="Enter Item Description">
                                        </td>
                                        <td class="border-grey-light border hover:bg-gray-100 p-3 text-red-400 hover:text-red-600 hover:font-medium cursor-pointer">
                                            
                                          <input type="number" name="quantity" placeholder="0">
                                        </td>
                                        
                                      </tr>
                                    <tr>
                                     
                                          <td>
                                            <input type="hidden"  name="stdname" value=" {{ Auth::user()->name }}">
                                          <td>
                                            <td>
                                              <button type="submit" class="inline-flex bg-indigo-600 text-white rounded-full h-6 px-3 justify-center items-center">Request</button>
                                            </td> 
                                          <td>
                                            <input type="hidden"  name="stud_id" value=" {{ Auth::user()->id }}">
                                          </td>
                                         
                                          <td>
                                            <input type="hidden"  name="lect_id" value=" {{ $l_id }}">
                                          </td>
                                          
                                          </td> 
                                            <input type="hidden"  name="lectname" value=" {{ $sv_name }}">
                                          </td>
                                       
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                     </form>
                            
                      

<style>
  html,
  body {
    height: 100%;
  }

  @media (min-width: 640px) {
    table {
      display: inline-table !important;
    }

    thead tr:not(:first-child) {
      display: none;
    }
  }

  td:not(:last-child) {
    border-bottom: 0;
  }

  th:not(:last-child) {
    border-bottom: 2px solid rgba(0, 0, 0, .1);
  }
</style>

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