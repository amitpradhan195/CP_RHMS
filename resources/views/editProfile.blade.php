<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="assets/images/motorbikelogo-96x96.png" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  <title>EditProfile</title>
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
  <link rel="stylesheet" type="text/css" href="{{url('assets/fontawesome/css/all.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{url('style.css') }}" />
  
  
  
</head>
<body>
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

<style type="text/css">
  .form-control
  {
    font-size: 12px;
  }
</style>



<section id="editProfBody">
	<div class="container" id="formEditProf">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-7" style="box-shadow:0px 0px 10px 3px #00bfff; margin-top:10%;" align="center">


          <form method="post" action="{!!url('/updateProfile', Auth::user()->id)!!}">
          	@csrf
          	{!!method_field('put')!!}
            <h1 class="text-center">Edit Profile</h1>
            <hr>
            <br>
            <div class="input-group">
              <label for="firstName" class="col-md-3 col-form-label text-md">{{ __('First Name') }}</label>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
              </div>
              <input type="text" id="inputFirstName" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" value="{!!(Auth::user()->firstName)!!}" name="firstName" placeholder="First Name" required>
              @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>
            

            <div class="input-group">
              <label for="lastName" class="col-md-3 col-form-label text-md">{{ __('Last Name') }}</label>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
              </div>
              <input type="text" id="inputLastName" name="lastName" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" value="{!!(Auth::user()->lastName)!!}" placeholder="Last Name" required>
              @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <label for="address" class="col-md-3 col-form-label text-md">{{ __('Address') }}</label>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
              </div>
              <input type="text" id="inputAddress" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{!!(Auth::user()->address)!!}" placeholder="Address" required>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="form-group row">
              <label class="col-sm-3 font-weight-bold text-md">Gender: </label>
              <div class="col-sm-6">
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="sex" id="optMale" value="Male" @if(Auth::user()->Gender == 'Male') checked="checked" @endif />
                      <label class="form-check-label" for="optMale">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="sex" id="optFemale" value="Female"  @if(Auth::user()->Gender == 'Female') checked="checked" @endif>
                      <label class="form-check-label" for="optFemale">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="sex" id="optOthers" value="Others"  @if(Auth::user()->Gender == 'Others') checked="checked" @endif>
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
              <label for="contactNo" class="col-md-3 col-form-label text-md">{{ __('Contact No.') }}</label>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-phone"></i> </span>
              </div>
              <input type="number" id="inputContactNo" min="0000000000" max="9999999999" name="contactNo" class="form-control{{ $errors->has('contactNo') ? ' is-invalid' : '' }}" value="{!!(Auth::user()->contactNo)!!}" placeholder="Contact No." required>
              @if ($errors->has('contactNo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contactNo') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <label for="dateOfBirth" class="col-md-3 col-form-label text-md">{{ __('Date Of Birth') }}</label>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i> </span>
              </div>
              <input type="date" id="inputDob" name="dateOfBirth" class="form-control{{ $errors->has('dateOfBirth') ? ' is-invalid' : '' }}" value="{!!(Auth::user()->dateOfBirth)!!}"  required>
              @if ($errors->has('dateOfBirth'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dateOfBirth') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <label for="email" class="col-md-3 col-form-label text-md">{{ __('Email-Id') }}</label>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-envelope"></i></span>
              </div>
              <input type="email" id="inputEmail" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{!!(Auth::user()->email)!!}" placeholder="Email" required>
              @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <label for="username" class="col-md-3 col-form-label text-md">{{ __('Username') }}</label>
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user-alt"></i> </span>
              </div>
              <input type="text" id="inputUsername" name="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" value="{!!(Auth::user()->username)!!}" placeholder="Username" required>
              @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <br>
            <button class="btn btn-danger btn-md mx-3" name="btnUpdate" type="submit">Update</button>
            <button class="btn btn-primary btn-md mx-3" name="btnCancel" type="button">Cancel</button>
          </form>

          <br>
</div>
</div>
</div>

<br>
<br>
<br>
</section>


<script>
      var msg = '{{Session::get('success')}}';
      var exist = '{{Session::has('success')}}';
      if(exist)
      {
        alert(msg);
      }
</script>

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

</body>
</html>