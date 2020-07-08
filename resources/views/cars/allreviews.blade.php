<!DOCTYPE html>
<html>
<head>

	 <meta charset="utf-8">
        <title>All Reviews</title>   
        <meta name="description" content="Page Title">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">

        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- base css -->   
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="{{ asset('css/vendors.bundle.css') }}" >
        <link id="appbundle" rel="stylesheet" media="screen, print" href="{{ asset('css/app.bundle.css') }}" >
        <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
        <link id="myskin" rel="stylesheet" media="screen, print" href="{{ asset('css/skins/skin-master.css') }}" >
        <!--I've added this for the css of datatables-->
        <link rel="stylesheet" media="screen, print" href="{{asset('css/datagrid/datatables/datatables.bundle.css')}}" >

        <link media="screen, print" href="{{ asset('css/fa-regular.css') }}" rel="stylesheet">
        <link media="screen, print" href="{{ asset('css/fa-solid.css') }}" rel="stylesheet">

        <!-- Place favicon.ico in the root directory -->
         <link rel="icon" href="{{ URL::asset('img/car.png') }}"sizes="180x180" />
        <link rel="icon" href="{{ URL::asset('img/car.png') }}" type="image/png"sizes="32x32"/>
        <link rel="mask-icon" href="{{ URL::asset('img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5" />

      
        <script src="{{asset('js/datagrid/datatables/jquery.min.js')}}" ></script>


	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
    <header class="page-header" role="banner" style="margin-left:-2%!important;">  
        <div class="ml-auto d-flex">
            <div class="hidden-md-down" style="margin-right: 9px;">
                <a href="{{ route("add_car") }}" class="header-icon">
                    <i class="fal fa-plus-square"></i> Add Car
                </a>
            </div>  
            <div class="hidden-md-down" style="margin-right: 9px;">
                <a href="{{ route("all_cars") }}" class="header-icon">
                    <i class="fal fa-list-alt"></i> All Cars
                </a>
            </div> 
            <div class="hidden-md-down" style="margin-right: 9px;">
                <a href="{{url("getMake") }}" class="header-icon">
                   <i class="fal fa-notes-medical"></i> Add Reviews
                </a>
            </div>
            <div class="hidden-md-down" style="margin-right: 9px;">
                <a href="{{ route("all_reviews") }}" class="header-icon">
                    <i class="fal fa-clipboard-list"></i> All Reviews
                </a>
            </div>
        </div>    
    </header>
<main id="js-page-content" role="main" class="page-content"> 
  <div class="col-xl-6" style="margin-left:10%;width:80%!important;">
    <div id="panel-1" class="panel">
      <div class="panel-hdr">
        <h2>ALL <span class="fw-300"><i>Cars</i></span></h2>
  
      </div>

      <div class="panel-container show">
        <div class="panel-content">
          <table class="table" id="all_reviews_table">
           <thead>
              <tr>
                <!--  <th scope="col">id</th> -->
                  <th scope="col" style="width: 6%!important;">Car Make</th>
                  <th scope="col">Car Review</th>                
              </tr>
            </thead>

            <tbody>
              @foreach($data as $item)
                <tr class="item{{$item->id}}">
                <!-- <td>{{$item->id}}</td> -->
                <td>{{$item->make}}</td>
                <td>{{$item->review}}</td>              
                </tr>
              @endforeach
              </tbody>
            </table> 
      </div>
    </div>
  </div>
</div>

<script >
    $(document).ready(function(){
         $('#all_reviews_table').DataTable(
                {
                   responsive: true
               });
    })</script>

</main>               
                      
<script src="{{ asset('js/vendors.bundle.js')}}"></script>
<script src="{{ asset('js/app.bundle.js')}}"></script>
<script src="{{asset('js/datagrid/datatables/datatables.bundle.js')}}" ></script>

</body>
</html>