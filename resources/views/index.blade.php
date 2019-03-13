<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/motorbikelogo-96x96.png" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  <title>Home</title>
  <link rel="stylesheet" href="{{url('assets/web/assets/icons2/mobirise2.css') }}" />
  <link rel="stylesheet" href="{{url('assets/web/assets/icons/mobirise-icons.css') }}" />
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
    <script>
      var msg = '{{Session::get('loginFirst')}}';
      var exist = '{{Session::has('loginFirst')}}';
      if(exist)
      {
        alert(msg);
      }
    </script>


  <link rel="stylesheet" href="style.less" class="cid-rgarQyhyTr" id="menu1-2g" data-rv-view="290"><section class="menu cid-rgarQyhyTr" once="menu" id="menu1-2g">

    

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
                    <a class="nav-link link text-warning display-4" href="bookings" aria-expanded="false"><span class="mbri-cart-full mbr-iconfont mbr-iconfont-btn"></span>Bookings</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link link text-warning display-4" href="products"><span class="mbri-contact-form mbr-iconfont mbr-iconfont-btn"></span>Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="aboutUs"><span class="mbri-italic mbr-iconfont mbr-iconfont-btn"></span>About Us</a>
                </li>

           </ul>

            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary-outline display-4" data-target="#modalLogin" href="{{ route('login') }}" data-toggle="modal"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>Log In</a>
            </div>

            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary-outline display-4" data-target="#modalSignup" href="{{ route('register') }}" data-toggle="modal"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>Sign Up</a>
            </div>
        </div>
    </nav>
</section>

<section class="carousel slide cid-rge8S2Bp73" data-interval="false" id="slider1-x">
    <div class="full-screen">
        <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider1-x" class=" active" data-slide-to="0"></li>
                <li data-app-prevent-settings="" data-target="#slider1-x" data-slide-to="1"></li>
                <li data-app-prevent-settings="" data-target="#slider1-x" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/pic4-2000x1184.jpg);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay"></div>
                            <img src="assets/images/pic4-2000x1184.jpg">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-center">
                                    <h2 class="mbr-fonts-style display-1">Meet the desire<br></h2>
                                    <p class="lead mbr-text mbr-fonts-style display-5">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.</p>
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn btn-success display-4" href="#">Read More</a> 
                                        <a class="btn  btn-white-outline display-4" href="#">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/pic1-2000x1600.jpg);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay"></div>
                            <img src="assets/images/pic1-2000x1600.jpg">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-left">
                                    <h2 class="mbr-fonts-style display-1">VIDEO SLIDE</h2>
                                    <p class="lead mbr-text mbr-fonts-style display-5">Slide with youtube video background and color overlay. Title and text are aligned to the left.</p>
                                    <div class="mbr-section-btn" buttons="0">
                                        <a class="btn btn-primary display-4" href="#">FOR WINDOWS</a> 
                                        <a class="btn  btn-white-outline display-4" href="#">FOR MAC</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/background6.jpg);">
                        <div class="container container-slide">
                            <div class="image_wrapper">
                                <div class="mbr-overlay"></div>
                                <img src="assets/images/background6.jpg">
                                <div class="carousel-caption justify-content-center">
                                    <div class="col-10 align-right">
                                        <h2 class="mbr-fonts-style display-1">IMAGE SLIDE</h2>
                                        <p class="lead mbr-text mbr-fonts-style display-5">Choose from the large selection of latest products.<br></p>
                                        <div class="mbr-section-btn" buttons="0">
                                            <a class="btn btn-info display-4" href="#">FOR WINDOWS</a> 
                                            <a class="btn  btn-white-outline display-4" href="#">FOR MAC</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-x">
                    <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                    <span class="sr-only">Previous</span></a>
                    <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-x">
                        <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                        <span class="sr-only">Next</span></a>
                    </div>
                </div>

</section>

<section class="services2 cid-rge5igjer4" id="services2-q">

    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 50%;">
                    <img src="assets/images/mbr-952x635.jpg" alt="bikeImg" title="">
                </div>
                <div class="align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">
                        Watch Special
                    </h2>
                    <div class="mbr-section-text">
                        <p class="mbr-text text1 pt-2 mbr-light mbr-fonts-style display-7">Information about the Motorcycle. Specification and reviews about the Motorcycle.</p>
                        <p class="mbr-text text2 pt-4 mbr-light mbr-fonts-style display-2">
                            Rs 180000&nbsp;<span class="cost">200000</span></p>
                    </div>
                    <!--Btn-->
                    <div class="mbr-section-btn pt-3 align-left">
                        <a href="#" class="btn btn-warning-outline display-4">
                            Buy Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="features3 cid-rgasiIgqZ8" id="features3-l">

    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/mbr-492x349.jpg" alt="bikeImg" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            No Coding
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Mobirise is an easy website builder - just drop site elements to your page, add content and style it to look the way you like.
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="#" class="btn btn-primary display-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/mbr-492x336.jpg" alt="bikeImg" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Mobile Friendly
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            All sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site.
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="#" class="btn btn-primary display-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/mbr-492x375.jpg" alt="bikeImg" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Unique Styles
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Mobirise offers many site blocks in several themes, and though these blocks are pre-made, they are flexible.
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="#" class="btn btn-primary display-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/mbr-492x328.jpg" alt="bikeImg" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            Unlimited Sites
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                           Mobirise gives you the freedom to develop as many websites as you like given the fact that it is a desktop app.
                        </p>
                    </div>
                    <div class="mbr-section-btn text-center">
                        <a href="#" class="btn btn-primary display-4">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="cid-rge6f2nVse" id="footer1-w">

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
                <p class="mbr-text">Sanagaun, Siddipur &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>Lalitpur</p>
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
  <script src="{{ url('assets/ytplayer/jquery.mb.ytplayer.min.js') }}"></script>
  <script src="{{ url('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{ url('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js') }}"></script>
  <script src="{{ url('assets/dropdown/js/script.min.js') }}"></script>
  <script src="{{ url('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{ url('assets/vimeoplayer/jquery.mb.vimeo_player.js') }}"></script>
  <script src="{{ url('assets/theme/js/script.js') }}"></script>
  <script src="{{ url('assets/slidervideo/script.js') }}"></script>



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