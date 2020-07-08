<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8">
          <title>Add Review</title>   
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


        <!-- You can add your own stylesheet here to override any styles that comes before it
        <link rel="stylesheet" media="screen, print" href="css/your_styles.css">-->
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
     <!--     @section('student_breadcrumbs')
            <ol class="breadcrumb page-breadcrumb" style="padding-top: 27px!important;">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Options</a></li>
                <li class="breadcrumb-item">Add Student</li>                
            </ol>
        @endsection-->

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
            </div>
        @endif
        
        @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <ul>
                        @foreach($errors->all() as $error)
                           - {{$error}} 
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        

        <div class="col-xl-6" style="margin-top: 5%!important;">
            <!-- <div id="panel-1" class="panel" style="margin-right: 2%; margin-top: 4%!important;"> -->
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>ADD <span class="fw-300"><i>Review</i></span></h2>
                </div>

                <div class="panel-container show">
                    <div class="panel-content">

                        <form id="review-form" method="POST" data-type="json" action="/saveReview"enctype="multipart/form-data">
                           {{ csrf_field() }}

                            <div class="row">                 
                                <div class="form-group col-3">
                                    <section >
                                    <label class="form-label" for="make">Make</label>
                                    <select name="make" id="make" class="form-control">
                                        <option>Select Car Make</option>
                                        @foreach($data as $id)
                                            <option value="{{$id->make}}">
                                            {{ $id->make}}
                                               </option>
                                        @endforeach
                                        
                                    </select>
                                  <!--   <div class="input-group flex-nowrap">
                                        <input id="student_number" name="student_number" type="text" class="form-control"aria-label="student_number" aria-describedby="addon-wrapping-right"required>

                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-id-card fs-xl"></i></span>
                                        </div>
                                    </div> -->
                                    </section>
                                </div>

                                <div class="form-group col-4">
                                    <section >
                                        <label class="form-label" for="review">Review</label>
                                        <div class="input-group flex-nowrap">
                                            <input id="review" name="review" type="text" class="form-control"aria-label="review" aria-describedby="addon-wrapping-right" data-toggle="tooltip" data-placement="top"   data-original-title="Please Enter Car Make's Review">

                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-car-mechanic fs-xl"></i></span>
                                            </div>
                                        </div>
                                    </section>
                                </div>  
                                <div class="form-group col-4">                                    
                                </div>
                            </div>                                                    
							<div class="card-footer text-muted">                                     
                                <div style="text-align: right;">
                                    <button id="add_car_submit" type="submit" class="btn btn-primary "><i class="fal fa-notes-medical fs-xl"></i> Add Review</button>
                                </div>
                            </div>

                        </form>
					</div>
                </div>

            </div>
         </div>
        <!-- <div style="text-align: center;">
            <button type="button" class="btn btn-secondary " onclick="window.location='{{ route("all_cars") }}'">View All Cars</button>
        </div>  -->

</main>
 <footer class="page-footer" role="contentinfo"style="background-color: transparent!important;">
                        <div class="d-flex  flex-1 ">
                            <div class="hidden-md-down fw-700" style="margin-left: 46%;margin-top: 31%;">2020 ©Nkirote</div>
                        </div>                      
                    </footer>
</body>

</html>