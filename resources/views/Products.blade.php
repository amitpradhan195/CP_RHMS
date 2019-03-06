<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/motorbikelogo-96x96.png" type="image/x-icon">
  <meta name="description" content="Website Generator Description">
  <title>Products</title>
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
  <link rel="stylesheet" href="{{url('assets/gallery/style.css') }}" />
  <link rel="stylesheet" href="{{url('assets/css/mbr-additional.css') }}" type="text/css" />
  <link rel="stylesheet" type="text/css" href="{{url('assets/fontawesome/css/all.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{url('style.css') }}" />
</head>
<body>
  <link rel="stylesheet" href="style.less" class="cid-rgarQyhyTr" id="menu1-18" data-rv-view="843">
  <section class="menu cid-rgarQyhyTr" once="menu" id="menu1-18">
    
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

<section class="mbr-section form3 cid-rggij9RQ25" id="form3-1c">
    <div class="container" id="categoriesContainer">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">All types of MotorCycles</h2>
                <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5">Search for your choice<br></h3>
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
                <form class="mbr-form" action="" method="post" data-form-title="Search Form">
                    <div class="mbr-subscribe input-group">
                        <!-- <div class="btn-group">
             <a class="btn btn-text-warning-outline display-4 pt-1 text-warning dropdown-toggle" data-toggle="dropdown">All</a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="mbr-text pl-5 text-warning mbr-fonts-style display-7" href="#">ALL</a>
                                </li>
                                <li>
                                    <a class="mbr-text pl-5 text-warning mbr-fonts-style display-7" href="">Sports</a>
                                </li>
                                <li>
                                    <a class="mbr-text pl-5 text-warning mbr-fonts-style display-7" href="#">Dirt</a>
                                </li>
                                <li>
                                    <a class="mbr-text pl-5 text-warning mbr-fonts-style display-7" href="#">Cruiser</a>
                                </li>
                            </ul>
                        </div> -->
                            <div class="col-md-4">
                              <select class="form-control">
                                <option class="mbr-text pl-5 text-warning mbr-fonts-style display-4" value="all">All</option>
                                <option class="mbr-text pl-5 text-warning mbr-fonts-style display-4" value="dirt">Dirt</option>
                                <option class="mbr-text pl-5 text-warning mbr-fonts-style display-4" value="sport">Sport</option>
                                <option class="mbr-text pl-5 text-warning mbr-fonts-style display-4" value="cruiser">Cruiser</option>
                              </select>
                            </div>
                        <input class="form-control col-lg-4" id="txt" type="text" name="searchBy" placeholder="Search">
                        <span class="input-group-btn"><button href="" type="submit" class="btn btn-primary display-4">Search</button></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="mt-4" style="background-color: white;">
    <div class="container">
        <div class="d-flex flex-wrap">

            @foreach ($itemDetails as $data) 
                <div class="card p-2 m-2  border" style="width: 260px;">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img src="/{{ $data->img }}" style="height: 200px; width: 100%;"  alt="streetBikeImg" title="">
                        </div>
                        <div class="card-box">
                            <h6 class="card-title" style="font-family: ">
                            <label class=" text-warning display-4"> Model Name:  
                            </label>
                            {{ $data->modelName }}
                            </h6>

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

                            <!-- Show More From Here -->

                            <a data-toggle="collapse" data-parent="#accordion" href="#{{$data->itemId}}">View More</a>

                            <div id="{{ $data->itemId}}" class="panel-collapse collapse in">
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
                            
                        </div>
                        <div class="mbr-section-btn text-center">
                            <a href="" class="btn btn-primary display-4">
                                NRs. {{$data->price}}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
</div>
</section>

<section class="services1 cid-rggNzMJlwj" id="services1-1h">

    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="row justify-content-center">
            <!--Titles-->
            <div class="title pb-5 col-12">
                <h2 class="align-left pb-3 mbr-fonts-style display-1">
                    Our Shop
                </h2>
                
            </div>
            <!--Card-1-->
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/200ns-287x176.jpg" alt="bikeImg" title="">
                    </div>
                    <div class="card-box pb-md-5">
                        <h4 class="card-title mbr-fonts-style display-5">200 NS-Bajaj</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium dolores doloribus
                            eligendi eum illo placeat quis repellendus sequi tempore!
                        </p>
                        <!--Btn-->
                        <div class="mbr-section-btn align-left"><a href="" class="btn btn-warning-outline display-4">
                                Rs 325000</a></div>
                    </div>
                </div>
            </div>
            <!--Card-2-->
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/suzukidt-700x524.jpg" alt="bikeImg" title="">
                    </div>
                    <div class="card-box pb-md-5">
                        <h4 class="card-title mbr-fonts-style display-5">Gixxer DT-Suzuki</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium dolores doloribus
                            eligendi eum illo placeat quis repellendus sequi tempore!
                        </p>
                        <!--Btn-->
                        <div class="mbr-section-btn align-left"><a href="" class="btn btn-warning-outline display-4">
                                Rs 270000</a></div>
                    </div>
                </div>
            </div>
            <!--Card-3-->
            <div class="card col-12 col-md-6 col-lg-4 last-child">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="assets/images/yamahafz-305x165.jpg" alt="bikeImg" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-5">
                            FZ V2-Yamaha</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium dolores doloribus
                            eligendi eum illo placeat quis repellendus sequi tempore!
                        </p>
                        <!--Btn-->
                        <div class="mbr-section-btn align-left"><a href="" class="btn btn-warning-outline display-4">
                                Rs 285000</a></div>
                    </div>
                </div>
            </div>
            <!--Card-4-->
            
        </div>
    </div>
</section>

<section class="cid-rggRyHaXRV" id="footer1-1i">
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
  <script src="{{url ('assets/formoid/formoid.min.js') }}"></script>
  
  
</body>
</html>