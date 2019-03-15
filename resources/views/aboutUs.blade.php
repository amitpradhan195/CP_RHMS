<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.9.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/motorbikelogo-96x96.png" type="image/x-icon">
  <meta name="description" content="Website Builder Description">
  <title>About Us</title>
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
  <link rel="stylesheet" href="style.less" class="cid-rgarQyhyTr" id="menu1-1j" data-rv-view="848">
  <section class="menu cid-rgarQyhyTr" once="menu" id="menu1-1j">


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
                         <img src="assets/images/motorbikelogo-96x96.png" alt="bikeLogo" title="" style="height: 3.6rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-5" href="index">RHMS</a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="index"><span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="gallery"><span class="mbri-image-gallery mbr-iconfont mbr-iconfont-btn"></span>Gallery</a>
                </li>
                
                <li class="nav-item"> 
                    <a class="nav-link link text-warning display-4" href="products"><span class="mbri-contact-form mbr-iconfont mbr-iconfont-btn"></span>Products</a>
                </li>
                @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="bookings" aria-expanded="false"><span class="mbri-cart-full mbr-iconfont mbr-iconfont-btn"></span>Bookings</a>
                </li>
                @endIf
                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="aboutUs"><span class="mbri-italic mbr-iconfont mbr-iconfont-btn"></span>About Us</a>
                </li>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
           </ul>

           <!-- if user is not logged in then view this -->
            @if(!Auth::check())
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary-outline display-4" data-target="#modalLogin" data-toggle="modal"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>Log In</a>
            </div>

            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary-outline display-4" data-target="#modalSignup" data-toggle="modal"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>Sign Up</a>
            </div>

            <!-- if user is logged in then view this -->
            @else
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
            @endif
        </div>
    </nav>
</section>

<section class="mbr-section content4 cid-rggT3GGYSd" id="content4-1l">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">RHMS Article with Solid Background
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
                    Shape your future web project with sharp design and refine coded functions.
                </h3>
                
            </div>
        </div>
    </div>
</section>


<section class="mbr-section article content14 cid-rggT8rjT83" id="content14-1p">
      
    <div class="container">
        <div class="media-container-row">
            <div class="row col-12 col-md-12">
                <div class="col-12 mbr-text mbr-fonts-style col-md-4 display-7">
                     <p class="p-3">Make your own website in a few clicks! Mobirise helps you cut down development time by providing you with a flexible website editor with a drag and drop interface. Mobirise Website Builder creates responsive, retina and mobile friendly websites in a few clicks.</p>
                </div>
                <div class="col-12 mbr-text mbr-fonts-style display-7 col-md-4">
                     <p class="p-3">Make your own website in a few clicks! Mobirise helps you cut down development time by providing you with a flexible website editor with a drag and drop interface. Mobirise Website Builder creates responsive, retina and mobile friendly websites in a few clicks.</p>
                </div>
                <div class="col-12 col-md-4 mbr-text mbr-fonts-style display-7">
                     <p class="p-3">Make your own website in a few clicks! Mobirise helps you cut down development time by providing you with a flexible website editor with a drag and drop interface. Mobirise Website Builder creates responsive, retina and mobile friendly websites in a few clicks.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mbr-section article content12 cid-rggT6HViIm" id="content12-1n">
    
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ul>
                    <li><strong>MOBILE FRIENDLY</strong> - o special actions required, all sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site, it will adapt automagically. <a href="#">Try it now!</a></li>
                    <li><strong>EASY AND SIMPLE</strong> - cut down the development time with drag-and-drop website builder. Drop the blocks into the page, edit content inline and publish - no technical skills required. <a href="#">Try it now!</a></li>
                    <li><strong>UNIQUE STYLES</strong> - choose from the large selection of latest pre-made blocks - full-screen intro, bootstrap carousel, content slider, responsive image gallery with lightbox, parallax scrolling, video backgrounds, hamburger menu, sticky header and more. <a href="#">Try it now!</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content8 cid-rggTbpyA46" id="content8-1t">

    <div class="container">
        <div class="media-container-row title">
            <div class="col-12 col-md-8">
                <div class="mbr-section-btn align-center">
                    <a class="btn btn-primary display-4" href="#">LEARN MORE</a>
                    <a class="btn btn-black-outline display-4" href="#">LIVE DEMO</a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="cid-rghdsuzTLs" id="footer1-1u">

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


  <script src="{{url ('assets/web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{url ('assets/popper/popper.min.js') }}"></script>
  <script src="{{url ('assets/tether/tether.min.js') }}"></script>
  <script src="{{url ('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{url ('assets/dropdown/js/script.min.js') }}"></script>
  <script src="{{url ('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{url ('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{url ('assets/theme/js/script.js') }}"></script>
  
  <div class="modal fade " id="modalLogin" role="dialog">
  <div class="modal-dialog modal-dialog-center modal-sm">
    <div class="modal-content ">
     <div class="modal-header">
      <h3 class="text-info " id="titleLogin"> LOGIN </h3>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>
        <div class="modal-body">
          <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-alt"></i> </span>
              </div>
              <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>
              @if ($errors->has('username'))
                                    <span class="invalid-feedback" id="errorUsername" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i> </span>
              </div>
              <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
        </div>
        <button class="btn btn-primary btn-sm" id="loginBtn" name="btnLogin" type="submit">LOGIN</button>
        <a class="text-center text-primary display-4" id="linkSignup" data-target="#modalSignup" data-toggle="modal">Create a new account</a>
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

<script type="text/javascript">
    $(document).ready(function(){
  $('#loginbtn').click(function(){
    $("#errorUsername").html("You Clicked on Click here Button");
      $('#modalLogin').modal("show");
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
          <form method="post" action="{{ route('register') }}"> @csrf
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
              </div>
              <input type="text" id="inputFirstName" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" value="{{ old('firstName') }}" name="firstName" placeholder="First Name" required autofocus>
              @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
              </div>
              <input type="text" id="inputLastName" name="lastName" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" value="{{ old('lastName') }}" placeholder="Last Name" required>
              @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
              </div>
              <input type="text" id="inputAddress" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="Address" required>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="form-group row">
              <label class="col-sm-2 font-weight-bold text-secondary">Gender: </label>
              <div class="col-sm-10">
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="sex" id="optMale" value="Male" checked>
                      <label class="form-check-label" for="optMale">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="sex" id="optFemale" value="Female">
                      <label class="form-check-label" for="optFemale">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="sex" id="optOthers" value="Others">
                      <label class="form-check-label" for="optOthers">Others</label>
                  </div>

                  @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
              </div>
            </div>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i> </span>
              </div>
              <input type="number" id="inputContactNo" min="9800000000" max="9899999999" name="contactNo" class="form-control{{ $errors->has('contactNo') ? ' is-invalid' : '' }}" value="{{ old('contactNo') }}" placeholder="Contact No." required>
              @if ($errors->has('contactNo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contactNo') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i> </span>
              </div>
              <input type="date" id="inputDob" name="dateOfBirth" class="form-control{{ $errors->has('dateOfBirth') ? ' is-invalid' : '' }}" value="{{ old('dateOfBirth') }}"  required>
              @if ($errors->has('dateOfBirth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dateOfBirth') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-envelope"></i></span>
              </div>
              <input type="email" id="inputEmail" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email" required>
              @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-alt"></i> </span>
              </div>
              <input type="text" id="inputUsername" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{{ old('username') }}" placeholder="Username" required>
              @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i> </span>
              </div>
              <input type="password" id="inputPassword" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required>
              @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i> </span>
              </div>
              <input type="password" id="inputRetype" name="password_confirmation" class="form-control" placeholder="Re-type Password" required>
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