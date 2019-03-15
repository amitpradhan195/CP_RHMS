<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.9.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/motorbikelogo-96x96.png" type="image/x-icon">
  <meta name="description" content="Website Builder Description">
  <title>Bookings</title>
  <link rel="stylesheet" href="{{url('assets/web/assets/icons2/mobirise2.css') }}" />
  <link rel="stylesheet" href="{{url('assets/web/assets/icons/mobirise-icons.css') }}" />
  <link rel="stylesheet" href="{{url('assets/web/assets/icons-bold/mobirise-icons-bold.css') }}">
  <link rel="stylesheet" href="{{url('assets/tether/tether.min.css') }}" />
  <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap-grid.min.css') }}" />
  <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap-reboot.min.css') }}" />
  <link rel="stylesheet" href="{{url('assets/socicon/css/styles.css') }}" />
  <link rel="stylesheet" href="{{url('assets/dropdown/css/style.css') }}" />
  <link rel="stylesheet" href="{{url('assets/theme/css/style.css') }}" />
  <link rel="stylesheet" href="{{url('assets/css/mbr-additional.css') }}" type="text/css" />
  <link rel="stylesheet" type="text/css" href="{{url('assets/fontawesome/css/all.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{url('style.css') }}" />
  
</head>
<body>
  <link rel="stylesheet" href="style.less" class="cid-rgarQyhyTr" id="menu1-14" data-rv-view="826">
  <section class="menu cid-rgarQyhyTr" once="menu" id="menu1-14">

   <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div >
                <span class="hamburger-icon"></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index">
                         <img src="assets/images/motorbikelogo-96x96.png" alt="bikeLogo" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-5" href="index">RHMS</a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="userDash"><span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="gallery"><span class="mbri-image-gallery mbr-iconfont mbr-iconfont-btn"></span>Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="bookings" aria-expanded="false"><span class="mbri-cart-full mbr-iconfont mbr-iconfont-btn"></span>Bookings</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link link text-warning display-4" href="products"><span class="mbri-contact-form mbr-iconfont mbr-iconfont-btn"></span>Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="aboutUs"><span class="mbri-italic mbr-iconfont mbr-iconfont-btn"></span>About Us</a>
                </li> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                </ul>

            <div class="btn-group">
             <span class="mbrib-user mbr-iconfont mbr-iconfont-btn display-5"></span>&nbsp
             <a class="display-4 pt-1 text-warning dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->username }}
             </a>
             <ul class="dropdown-menu">
                    <li>
                          <a class="mbr-text pl-5 text-warning mbr-fonts-style display-7" href="{{url('editProfile')}}">EditProfile
                          </a>
                    </li>
                    <li>
                          <a class="mbr-text pl-5 text-warning mbr-fonts-style display-7" href="{{ route('logout') }}" 
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                    </li>
             </ul>                 
            </div> 
        </div>
    </nav>
</section>

<script>
      var msg = '{{Session::get('bookingRemoved')}}';
      var exist = '{{Session::has('bookingRemoved')}}';
      if(exist)
      {
        alert(msg);
      }
    </script>

<section class="services5 cid-rgggJIKaMb" id="services5-17">

    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        
            <!--Titles-->
            <div class="title pb-5 col-20">
                <h2 class="align-left mbr-fonts-style m-0 display-1">Booked List
                </h2>
                <hr>
                <p> Your Booking is valid for only 48 hours. Please confirm your bookings by contacting us before it expires.</p>
            
            <table class="table table-hover">
                <thead class="text-center" style="background-color: #474646; color: white;">
                    <tr>
                        <th class="card-title mbr-fonts-style display-5">S. No</th>
                        <th class="card-title mbr-fonts-style display-5">Items</th>
                        <th class="card-title mbr-fonts-style display-5">Booking Date</th>
                        <th class="card-title mbr-fonts-style display-5">Expire Date</th>
                        <th class="card-title mbr-fonts-style display-5">Price</th>
                        <th class="card-title mbr-fonts-style display-5">Image</th>
                        <th class="card-title mbr-fonts-style display-5">Remove</th>
                    </tr>
                </thead>
                <style type="text/css">
                    table{
                        counter-reset: tableCount;
                    }

                    .counterCell:before{
                        content: counter(tableCount);
                        counter-increment: tableCount;
                    }

                    .viewInfo:hover{
                        text-decoration: underline;
                    }

                    .deleteIcon
                    {
                        font-size: 30px;
                        background-color: #EE4141;
                    }

                    .deleteIcon:hover
                    {
                        font-size: 35px;
                    }
                </style>

                <tbody class="text-center" style="font-size: 18px;">
                    @if($bookingDetails->count()>0)
                    @foreach($bookingDetails as $data) 
                        <tr style="font-family: palatino;">
                            <td class="counterCell"></td>
                            <td>
                                <!-- View More From Here -->
                                {{$data->modelName}} &nbsp &nbsp
                            <a class="viewInfo" style="font-family: 'Arial'; font-size: 12px;" data-toggle="collapse" data-parent="#accordion" href="#{{$data->itemId}}">View info</a>

                            <div id="{{ $data->itemId}}" class="panel-collapse collapse in">
                                <hr>
                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning display-4"> Brand:  
                                </label>
                                {{ $data->brand }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning display-4"> Item Type:  
                                </label>
                                {{ $data->itemType }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning display-4"> Model Year:  
                                </label>
                                {{ $data->modelYear }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning display-4"> CC:  
                                </label>
                                {{ $data->cc }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning display-4"> Cylinder:  
                                </label>
                                {{ $data->cylinder }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning display-4"> No of Gears:  
                                </label>
                                {{ $data->noOfGears }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning display-4"> Mileage:  
                                </label>
                                {{ $data->mileage }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning display-4"> Front Brake:  
                                </label>
                                {{ $data->frontBrake }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning display-4"> Rear Brake:  
                                </label>
                                {{ $data->rearBrake }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning display-4"> Fuel Type:  
                                </label>
                                {{ $data->fuelType }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning display-4"> ABS:  
                                </label>
                                {{ $data->ABS }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning display-4"> Description:  
                                </label>
                                {{ $data->description }}
                                </h6>
                            </div>
                            </td>
                            <td>{{date('Y-m-d h:ia', strtotime($data->bookingDate))}}</td>
                            <td>{{date('Y-m-d h:ia', strtotime($data->expireDate))}}</td>
                            <td>{{$data->price}}</td>
                            <td>
                                <img src="/{{$data->img}}" style="height: 120px; width: 200px;">
                            </td>

                            <td class="pt-4">
                                <form method="post" id="formRemove" action="{{url('/expiredBooking',$data->bookingId)}}">
                                    @csrf
                                    {{method_field('put')}}
                                    <button onclick="if (!confirm('Are you sure to remove this booking?')) { return false }" class="deleteIcon" type="submit">
                                        <span class="mbri-trash"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @else
                        <tr style="font-family: palatino;">
                            <td> No items has been booked.</td>
                        </tr>
                        @endif
                </tbody>
            </table>
        </div>
        </div>
    </div>
</section>


<section class="cid-rggLNCnHsb" id="footer1-1g">

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="index">
                        <img src="assets/images/motorbikelogo-96x96.png" alt="bikeLogo" title="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Address
                </h5>
                <p class="mbr-text">Sanagaun, Siddhipur<br>Lalitpur</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: support@RHMS.com
                    <br>Phone: +1 (0) 000 0000 001
                    <br>Fax: +1 (0) 000 0000 002
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text">
                    <a class="text-primary" href="#">Website builder</a>
                    <br><a class="text-primary" href="#">Download for Windows</a>
                    <br><a class="text-primary" href="#">Download for Mac</a>
                </p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2019 RHMS - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="{{ url('assets/web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('assets/popper/popper.min.js') }}"></script>
  <script src="{{ url('assets/tether/tether.min.js') }}"></script>
  <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('assets/dropdown/js/script.min.js') }}"></script>
  <script src="{{ url('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{ url('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{ url('assets/theme/js/script.js') }}"></script>
  
  <div class="modal fade " id="modalLogin">
  <div class="modal-dialog modal-dialog-center modal-sm">
    <div class="modal-content ">
     <div class="modal-header">
      <h3 class="text-info " id="titleLogin"> LOGIN </h3>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>
        <div class="modal-body">
          <form method="post">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-alt"></i> </span>
              </div>
              <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            </div>
            <br>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i> </span>
              </div>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
        </div>

        <button class="btn btn-primary btn-sm" name="btnLogin" type="submit">LOGIN</button>
        <a class="text-center text-primary mt-2" id="linkSignup" data-target="#modalSignup" data-toggle="modal">Create a new account</a>
        </form>
        <br>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    $("#linkSignup").click(function(){
        $("#modalLogin").modal("hide");
        $("#modalSignup").modal("show");
    });

     $("#linkLogin").click(function(){
      $("#modalSignup").modal("hide");
      $("#modalLogin").modal("show");
    });
  });
</script>

<div class="modal fade" id="modalSignup">
  <div class="modal-dialog modal-dialog-center modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="text-center text-danger" id="titleSignup"> SignUp </h1>
        <img src="addUser.png" alt="Logo" style="width:60px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" id="scrollSignup">
          <form method="post">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
              </div>
              <input type="text" id="inputFullname" name="fullname" class="form-control" placeholder="Full Name" required>
            </div>
            <br>
            <div class="form-group row">
              <label class="col-sm-2 font-weight-bold text-secondary">Gender: </label>
              <div class="col-sm-10">
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="optMale" value="Male">
                      <label class="form-check-label" for="optMale">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="optFemale" value="Female">
                      <label class="form-check-label" for="optFemale">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="optOthers" value="Others">
                      <label class="form-check-label" for="optOthers">Others</label>
                  </div>
              </div>
            </div>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i> </span>
              </div>
              <input type="text" id="inputAddress" name="postalAddress" class="form-control" placeholder="Postal Address" required>
            </div>
            <br>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-map-marked-alt"></i> </span>
              </div>
              <input type="text" id="inputPostalCode" name="postalCode" class="form-control" placeholder="Postal Code" required>
            </div>
            <br>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i> </span>
              </div>
              <input type="date" id="inputDob" name="dob" class="form-control"  required>
            </div>
            <br>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-envelope"></i></span>
              </div>
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required>
            </div>
            <br>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-alt"></i> </span>
              </div>
              <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Username" required>
            </div>
            <br>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i> </span>
              </div>
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            </div>
            <br>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i> </span>
              </div>
              <input type="password" id="inputRetype" name="retype" class="form-control" placeholder="Re-type Password" required>
            </div>
            <br>
            <button class="btn btn-primary btn-lg mx-3" name="btnSignup" type="submit">Sign Up</button>
            <a class="text-center text-primary mt-2" id="linkLogin" data-target="#modalLogin" data-toggle="modal">I already have an account</a>
          </form>
        </div>
    </div>
  </div>
</div>

</body>
</html>