<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/motorbikelogo-96x96.png" type="image/x-icon">
  <meta name="description" content="Website Builder Description">
  <title>Gallery</title>
  <link rel="stylesheet" href="{{url('assets/web/assets/icons2/mobirise2.css') }}" />
  <link rel="stylesheet" href="{{url('assets/web/assets/icons/mobirise-icons.css') }}" />
  <link rel="stylesheet" href="{{url('assets/tether/tether.min.css') }}" />
  <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap-grid.min.css') }}" />
  <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap-reboot.min.css') }}" />
  <link rel="stylesheet" href="{{url('assets/socicon/css/styles.css') }}" />
  <link rel="stylesheet" href="{{url('assets/dropdown/css/style.css') }}" />
  <link rel="stylesheet" href="{{url('assets/theme/css/style.css') }}" />
  <link rel="stylesheet" href="{{url('assets/gallery/style.css') }}" />
  <link rel="stylesheet" href="{{url('assets/css/mbr-additional.css') }}" type="text/css" />
  <link rel="stylesheet" type="text/css" href="{{url('assets/fontawesome/css/all.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{url('style.css') }}" />
  
</head>
<body>
  <link rel="stylesheet" href="style.less" class="cid-rgarQyhyTr" id="menu1-10" data-rv-view="1037"><section class="menu cid-rgarQyhyTr" once="menu" id="menu1-10">

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

                <li class="nav-item">
                    <a class="link display-5" href="{{url('editProfile') }}" style="color: #d2cf09 "> {{ Auth::user()->username }} </a>
                </li>

            </ul>

            <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-primary-outline display-4" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="mbrib-logout mbr-iconfont mbr-iconfont-btn"></span>
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </div>
        </div>
    </nav>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-rggbHQxIrq" id="gallery2-12">
    <div class="container">
        <div><!-- Filter --><div class="mbr-gallery-filter container gallery-filter-active"><ul buttons="0"><li class="mbr-gallery-filter-all"><a class="btn btn-md btn-primary-outline active display-7" href="">All</a></li></ul></div><!-- Gallery --><div class="mbr-gallery-row"><div class="mbr-gallery-layout-default"><div><div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome"><div href="#lb-gallery2-12" data-slide-to="0" data-toggle="modal"><img src="assets/images/mbr-1920x1361-800x567.jpg" alt="bikeImg" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Responsive"><div href="#lb-gallery2-12" data-slide-to="1" data-toggle="modal"><img src="assets/images/mbr-1920x1280-800x533.jpg" alt="bikeImg" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Creative"><div href="#lb-gallery2-12" data-slide-to="2" data-toggle="modal"><img src="assets/images/mbr-1920x1311-800x546.jpg" alt="bikeImg" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome"><div href="#lb-gallery2-12" data-slide-to="3" data-toggle="modal"><img src="assets/images/mbr-1920x1280-800x533.jpg" alt="bikeImg" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome"><div href="#lb-gallery2-12" data-slide-to="4" data-toggle="modal"><img src="assets/images/mbr-492x328-492x328.jpg" alt="bikeImg" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Responsive"><div href="#lb-gallery2-12" data-slide-to="5" data-toggle="modal"><img src="assets/images/mbr-676x451-676x451.jpg" alt="bikeImg" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Animated"><div href="#lb-gallery2-12" data-slide-to="6" data-toggle="modal"><img src="assets/images/suzukidt-700x524-700x524.jpg" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome"><div href="#lb-gallery2-12" data-slide-to="7" data-toggle="modal"><img src="assets/images/yamahafz-305x165-305x165.jpg" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome"><div href="#lb-gallery2-12" data-slide-to="8" data-toggle="modal"><img src="assets/images/mbr-1-1920x1280-800x533.jpg" alt="" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome"><div href="#lb-gallery2-12" data-slide-to="9" data-toggle="modal"><img src="assets/images/mbr-1920x1281-800x534.jpg" alt="bikeImg" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome"><div href="#lb-gallery2-12" data-slide-to="10" data-toggle="modal"><img src="assets/images/mbr-1920x1101-800x459.jpg" alt="bikeImg" title=""><span class="icon-focus"></span></div></div><div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome"><div href="#lb-gallery2-12" data-slide-to="11" data-toggle="modal"><img src="assets/images/mbr-1920x1307-800x545.jpg" alt="bikeImg" title=""><span class="icon-focus"></span></div></div></div></div><div class="clearfix"></div></div></div><!-- Lightbox --><div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery2-12"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="carousel-inner"><div class="carousel-item"><img src="assets/images/mbr-1920x1361.jpg" alt="bikeImg" title=""></div><div class="carousel-item"><img src="assets/images/mbr-1920x1280.jpg" alt="bikeImg" title=""></div><div class="carousel-item"><img src="assets/images/mbr-1920x1311.jpg" alt="bikeImg" title=""></div><div class="carousel-item"><img src="assets/images/mbr-1920x1280.jpg" alt="bikeImg" title=""></div><div class="carousel-item"><img src="assets/images/mbr-492x328.jpg" alt="bikeImg" title=""></div><div class="carousel-item"><img src="assets/images/mbr-676x451.jpg" alt="bikeImg" title=""></div><div class="carousel-item"><img src="assets/images/suzukidt-700x524.jpg" alt="bikeImg" title=""></div><div class="carousel-item"><img src="assets/images/yamahafz-305x165.jpg" alt="bikeImg" title=""></div><div class="carousel-item"><img src="assets/images/mbr-1-1920x1280.jpg" alt="bikeImg" title=""></div><div class="carousel-item"><img src="assets/images/mbr-1920x1281.jpg" alt="bikeImg" title=""></div><div class="carousel-item active"><img src="assets/images/mbr-1920x1101.jpg" alt="bikeImg" title=""></div><div class="carousel-item"><img src="assets/images/mbr-1920x1307.jpg" alt="bikeImg" title=""></div></div><a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery2-12"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery2-12"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a><a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a></div></div></div></div></div>
    </div>
</section>

<section class="cid-rggoyw2RU4" id="footer1-1f">
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


  <script src="{{url('assets/web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{url('assets/popper/popper.min.js') }}"></script>
  <script src="{{url('assets/tether/tether.min.js') }}"></script>
  <script src="{{url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{url('assets/dropdown/js/script.min.js') }}"></script>
  <script src="{{url('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{url('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js') }}"></script>
  <script src="{{url('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{url('assets/vimeoplayer/jquery.mb.vimeo_player.js') }}"></script>
  <script src="{{url('assets/masonry/masonry.pkgd.min.js') }}"></script>
  <script src="{{url('assets/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{url('assets/theme/js/script.js') }}"></script>
  <script src="{{url('assets/slidervideo/script.js') }}"></script>
  <script src="{{url('assets/gallery/player.min.js') }}"></script>
  <script src="{{url('assets/gallery/script.js') }}"></script>
  

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