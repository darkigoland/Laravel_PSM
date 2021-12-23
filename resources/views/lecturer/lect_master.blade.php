<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>PSM Management System</title>

    <!-- vendor css -->
    <link href="{{asset('dashboard/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('dashboard/css/starlight.css')}}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('lecturer.body.sidebar')
    <!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('lecturer.body.header')
    <!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->


    <!-- ########## START: MAIN PANEL ########## -->
    
@yield('lecturer')
    <!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{asset('dashboard/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('dashboard/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('dashboard/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('dashboard/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('dashboard/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('dashboard/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/d3/d3.js')}}"></script>
    <script src="{{asset('dashboard/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('dashboard/lib/chart.js/Chart.js')}}"></script>
    <script src="{{asset('dashboard/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('dashboard/lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('dashboard/lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('dashboard/lib/flot-spline/jquery.flot.spline.js')}}"></script>

    <script src="{{asset('dashboard/js/starlight.js')}}"></script>
    <script src="{{asset('dashboard/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('dashboard/js/dashboard.js')}}"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
  </body>
</html>
