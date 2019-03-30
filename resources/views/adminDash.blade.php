<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/motorbikelogo-96x96.png" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  <title>adminDash</title>
  <link rel="stylesheet" href="{{url('assets/web/assets/icons2/mobirise2.css') }}">
  <link rel="stylesheet" href="{{url('assets/web/assets/icons/mobirise-icons.css') }}">
  <link rel="stylesheet" href="{{url('assets/web/assets/icons-bold/mobirise-icons-bold.css') }}">
  <link rel="stylesheet" href="{{url('assets/tether/tether.min.css') }}">
  <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{url('assets/socicon/css/styles.css') }}">
  <link rel="stylesheet" href="{{url('assets/dropdown/css/style.css') }}">
  <link rel="stylesheet" href="{{url('assets/theme/css/style.css') }}">
  <link rel="stylesheet" href="{{url('assets/css/mbr-additional.css') }}" type="text/css">
  
  
  
</head>
<body>

    <script>
      var msg = '{{Session::get('successRegister')}}';
      var exist = '{{Session::has('successRegister')}}';
      if(exist)
      {
        alert(msg);
      }

      var msg2 = '{{Session::get('logoutAnother')}}';
      var exist2 = '{{Session::has('logoutAnother')}}';
      if(exist2)
      {
        alert(msg2);
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
                    <a class="nav-link link text-warning display-4" href="userDash"><span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="/addItem"><span class="mbri-image-gallery mbr-iconfont mbr-iconfont-btn"></span>Add Item</a>
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




<section class="engine"><a href="https://mobirise.info/c">site builder</a></section>
<section class="header1 cid-riSCoe0y9K" id="header16-2h">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10 align-center">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-2"><span style="font-weight: normal;">Hello {{ Auth::user()->firstName }}</span></h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">We are glad to see you here. Hope you will enjoy the services.&nbsp;</p>
                <div class="mbr-section-btn">
                    <a class="btn btn-md btn-primary-outline display-4" href="/addItem">Add Items<br>
                    </a> 
                    <a class="btn btn-md btn-primary-outline display-4" href="/updateItem">Update Items<br>
                    </a>
                    <a class="btn btn-md btn-primary-outline display-4" href="#">Delete Items<br>
                    </a>
                    <a class="btn btn-md btn-primary-outline display-4" href="#">View Items<br>
                    </a>
                    <a class="btn btn-md btn-primary-outline display-4" href="#">View Bookings<br>
                    </a>
                    <a class="btn btn-md btn-primary-outline display-4" href="#">View Customers<br>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>



<!-- <section class="header12 cid-riSEXIrcit mbr-fullscreen mbr-parallax-background" id="header12-2i">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container  ">
            <div class="media-container">
                <div class="col-md-12 align-center">
                    <h1 class="mbr-section-title pb-3 mbr-white mbr-bold mbr-fonts-style display-1">Trades</h1>
                    <p class="mbr-text pb-3 mbr-white mbr-fonts-style display-5">
                        Good trade system makes good trades. View your choices and go for trade with&nbsp;</p>
                    

                    <div class="icons-media-container mbr-white">
                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                            <a href="https://mobirise.co/">
                                <span class="mbri-layers mbr-iconfont"></span>
                            </a>
                            </div>
                            <h5 class="mbr-fonts-style display-5"><p>
                                Booked</p></h5>
                        </div>

                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                                <a href="https://mobirise.co/">
                                    <span class="mbri-sun mbr-iconfont"></span>
                                </a>
                            </div>
                            <h5 class="mbr-fonts-style display-5">
                                Purchased</h5>
                        </div>

                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                                <a href="https://mobirise.co/">
                                    <span class="mbri-cash mbr-iconfont"></span>
                                </a>
                            </div>
                            <h5 class="mbr-fonts-style display-5">Sold</h5>
                        </div>

                        <div class="card col-12 col-md-6 col-lg-3">
                            <div class="icon-block">
                                <a href="https://mobirise.co/">
                                    <span class="mbri-mobirise mbr-iconfont"></span>
                                </a>
                            </div>
                            <h5 class="mbr-fonts-style display-5">Exchanged</h5>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section> -->



<section class="cid-riTHtUI3zp" id="footer1-2p">

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


  <script src="{{url('assets/web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{url('assets/popper/popper.min.js') }}"></script>
  <script src="{{url('assets/tether/tether.min.js') }}"></script>
  <script src="{{url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{url('assets/vimeoplayer/jquery.mb.vimeo_player.js') }}"></script>
  <script src="{{url('assets/parallax/jarallax.min.js') }}"></script>
  <script src="{{url('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{url('assets/dropdown/js/script.min.js') }}"></script>
  <script src="{{url('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{url('assets/theme/js/script.js') }}"></script>
  
</body>
</html>