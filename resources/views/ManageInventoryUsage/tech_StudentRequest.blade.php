@extends('technician.tech_master')
@section('technician')


<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">PSM MS</a>
        <span class="breadcrumb-item active">Inventory</span>
      </nav>
      <script src="https://cdn.tailwindcss.com"></script>

      <div class="sl-pagebody">
        <!-- CONTENT -->

        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                <div class="bg-white px-16 py-14 rounded-md">
                    <h1 class="text-xl mb-4 font-bold h1-Black">Inventory</h1>
                   
                    <!-- component -->
                    

                        <div class="container flex items-center justify-center">
                            <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-5">
                                <thead class="text-white">

                                    <tr class="bg-teal-400 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">    
                                        <th class="p-3 text-left">Student Name</th>
                                        <th class="p-3 text-left">Item Name</th>
                                        <th class="p-3 text-left" width="110px">Status</th>
                                        <th class="p-3 text-left" width="110px">Quantity</th>
                                        <th class="p-3 text-left" width="110px">Action</th>
                                    </tr>
                                </thead> 

                                <tbody class="flex-1 sm:flex-none">
                                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                                    
                                    </tr>
                                    
                                        @foreach ($items as $item)
                                        <tr>  
                                        <td class="border-grey-light border hover:bg-gray-100 p-3">
                                            {{ $item->stud_Name }}
                                        </td>
                                        <td class="border-grey-light border hover:bg-gray-100 p-3">
                                            {{ $item->item_Name }}
                                        </td>
                                        <td class="border-grey-light border hover:bg-gray-100 p-3">
                                            {{ $item->status }}
                                        </td>
                                        <td class="border-grey-light border hover:bg-gray-100 p-3">
                                            {{ $item->quantity }}
                                        </td>
                                        
                                            <td>
                                                <input type="hidden"  name="id" value="{{ $item['id'] }}">
                                                
                                                <a href={{ "view/".$item['id'] }}>View</a>
                                            </td> 
                                       
                                    </tr>
                                        @endforeach
                                        
                                    
                                </tbody>
                            </table>
                        </div>

                    
                            
                      

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