<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="assets/images/motorbikelogo-96x96.png" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  <title>addItem</title>
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
  <!-- <link rel="stylesheet" href="style.less" class="cid-rgarQyhyTr" id="menu1-2g" data-rv-view="290"> -->
  <section class="menu cid-rgarQyhyTr" once="menu" id="menu1-2g">

    

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
                    <a class="nav-link link text-warning display-4" href="adminDash"><span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="/addItem"><span class="mbri-shopping-basket mbr-iconfont mbr-iconfont-btn"></span>Add Item</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="updateItem"><span class="mobi-mbri mobi-mbri-gift mbr-iconfont mbr-iconfont-btn"></span>Edit Item</a>
                </li>

                 <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="updateItem"><span class="mobi-mbri mobi-mbri-cart-full mbr-iconfont mbr-iconfont-btn"></span>View Bookings</a>
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

<section id="editProfBody">
	<div class="container" id="formEditProf">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-7" style="box-shadow:0px 0px 10px 3px #00bfff; margin-top:8%; " align="center">

          <form method="post" action="{{ url('/addedItem')}}" enctype="multipart/form-data">
          	@csrf
          	{!!method_field('put')!!}
            <h1 class="text-center">Add Item</h1>
            <br>
            <h4 class="text-info" align="left">See below for the added items.</h4>
            <h5 class="text-primary" align="left">Fill up all the details.</h5>
            <hr>
            @if(Session::has('itemAdded'))
              <h4 class="pt-1 pb-1" style="color: white; background-color: #93D9D2;">{{Session::get('itemAdded')}}</h4>
            @endif

            @if(Session::has('itemNameExists'))
              <h4 class="pt-1 pb-1" style="color: #E0514F; background-color: #93D9D2;">{{Session::get('itemNameExists')}}</h4>
            @endif


            
            <br>

            
            <div class="input-group">
               <select class="form-control{{ $errors->has('ItemType') ? ' is-invalid' : '' }}" value="{{ old('itemType') }}" name="itemType" required>
                <option class="mbr-text pl-5 mbr-fonts-style display-4" value=""> Select Motorcycle Type</option>
                @foreach($search as $searched)
                <option class="mbr-text pl-5 mbr-fonts-style display-4" value="{{$searched->id}}">{{$searched->itemType}}</option>
                @endforeach
              </select>
              @if ($errors->has('ItemType'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ItemType') }}</strong>
                                    </span>
                                @endif

                <button type="button" data-target="#modalAddItemType" data-toggle="modal">Add Item Type</button>
            </div>
            <br>
            

            <div class="input-group">
              <input type="text" id="inputBrand" name="brand" value="{{ old('brand') }}" class="form-control{{ $errors->has('Brand') ? ' is-invalid' : '' }}" placeholder="Brand (@example: Suzuki)" required>
              @if ($errors->has('Brand'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Brand') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <input type="text" id="inputModelName" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="modelName" value="" placeholder="Model Name (@example: Gixxer)" required>

                                @if ($errors->has('ModelName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ModelName') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <input type="number" min="1" id="inputCC" min="0000000000" max="9999999999" name="cc" class="form-control{{ $errors->has('CC') ? ' is-invalid' : '' }}" placeholder="CC" required>
              @if ($errors->has('cc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cc') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <input type="number" min="1" id="inputDob" name="cylinder" class="form-control{{ $errors->has('cylinder') ? ' is-invalid' : '' }}" value="" placeholder="Cylinder" required>
              @if ($errors->has('cylinder'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cylinder') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <input type="number" min="1" id="inputNoOfGears" name="noOfGears" class="form-control{{ $errors->has('noOfGears') ? ' is-invalid' : '' }}" value="" placeholder="No Of Gears" required>
              @if ($errors->has('noOfGears'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('noOfGears') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <input type="number" min="1" id="inputMileage" name="mileage" class="form-control{{ $errors->has('mileage') ? ' is-invalid' : '' }}" value="" placeholder="Mileage" required/>
              <label class="form-check-label pt-3 text-warning" style="font-family:courier;" for="inputMileage">km/litre</label>
              @if ($errors->has('mileage'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mileage') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <select class="form-control" name="frontBrake" required>
                  <option class="mbr-text pl-5 mbr-fonts-style display-4" value=""> Select Front Brake Type</option>
                  <option class="mbr-text pl-5 mbr-fonts-style display-4" value="Drum">Drum</option>
                  <option class="mbr-text pl-5 mbr-fonts-style display-4" value="Disc">Disc</option>
                </select>
              @if ($errors->has('frontBrake'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('frontBrake') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <select class="form-control" name="rearBrake" required>
                <option class="mbr-text pl-5 mbr-fonts-style display-4" value=""> Select Rear Brake Type</option>
                <option class="mbr-text pl-5 mbr-fonts-style display-4" value="Drum">Drum</option>
                <option class="mbr-text pl-5 mbr-fonts-style display-4" value="Disc">Disc</option>
              </select>
              @if ($errors->has('rearBrake'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rearBrake') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <select class="form-control" name="ABS" required>
                <option class="mbr-text pl-5 mbr-fonts-style display-4" value=""> Select ABS available or not? </option>
                <option class="mbr-text pl-5 mbr-fonts-style display-4" value="Available">Available</option>
                <option class="mbr-text pl-5 mbr-fonts-style display-4" value="Not Available">Not Available</option>
              </select>
              @if ($errors->has('ABS'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ABS') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <select class="form-control{{ $errors->has('fuelType') ? ' is-invalid' : '' }}" name="fuelType" required>
                <option class="mbr-text pl-5 mbr-fonts-style display-4" value=""> Select Fuel Type</option>
                <option class="mbr-text pl-5 mbr-fonts-style display-4" value="Petrol">Petrol</option>
                <option class="mbr-text pl-5 mbr-fonts-style display-4" value="Diesel">Diesel</option>
                <option class="mbr-text pl-5 mbr-fonts-style display-4" value="Electric">Electric</option>
              </select>
              @if ($errors->has('fuelType'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fuelType') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <input type="number" min="1" id="inputPrice" name="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" value="" placeholder="Price in NRS." required>
              @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <input type="file" accept=".png, .jpg, .jpeg"  id="uploadImage" name="img" class="form-control{{ $errors->has('img') ? ' is-invalid' : '' }}" onchange="PreviewImage();"required>
              @if ($errors->has('img'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('img') }}</strong>
                                    </span>
                                @endif
            <img id="uploadPreview" style="width: 150px; height: 150px;" />
            <script type="text/javascript">

                function PreviewImage() {
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

                    oFReader.onload = function (oFREvent) {
                        document.getElementById("uploadPreview").src = oFREvent.target.result;
                    };
                };

            </script>
            </div>
            <br>

            <div class="input-group">
              <input type="number" id="inputModelYear" min="1950" max="2019" name="modelYear" class="form-control{{ $errors->has('modelYear') ? ' is-invalid' : '' }}" placeholder="Model Year (@example: 2015)" required>
              @if ($errors->has('modelYear'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('modelYear') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <div class="input-group">
              <textarea rows="6" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Enter description here..."></textarea>
              @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
            </div>
            <br>

            <br>
            <button class="btn btn-primary btn-lg mx-3" name="btnAdd" type="submit">Add</button>
            <button class="btn btn-warning btn-lg mx-3" name="btnCancel" type="submit">Cancel</button>
          </form>
          <br>
</div>
</div>
</div>

<br>

<div class="mx-3">
  <hr>
<h2 class="align-left mbr-fonts-style m-0 display-1">Added Items</h2>
<hr>
  <table class="table table-hover">
                <thead class="text-center" style="background-color: #474646; color: white;">
                    <tr>
                        <th class="card-title mbr-fonts-style display-5">S. No</th>
                        <th class="card-title mbr-fonts-style display-5">Items</th>
                        <th class="card-title mbr-fonts-style display-5">Brand</th>
                        <th class="card-title mbr-fonts-style display-5">Items Type</th>
                        <th class="card-title mbr-fonts-style display-5">Price</th>
                        <th class="card-title mbr-fonts-style display-5">Image</th>
                    </tr>
                </thead>
                <style type="text/css">
                    
                </style>

                <tbody class="text-center" style="font-size: 18px;">
                    @if($itemDetails->count()>0)
                    @foreach($itemDetails as $data) 
                        <tr style="font-family: palatino;">
                            <td class="counterCell"></td>
                            <td>
                                <!-- View More From Here -->
                                {{$data->modelName}} &nbsp &nbsp
                            <a class="viewInfo" style="font-family: 'Arial'; font-size: 12px;" data-toggle="collapse" data-parent="#accordion" href="#{{$data->itemId}}">View info</a>

                            <div id="{{ $data->itemId}}" class="panel-collapse collapse in">
                                <hr>
                                <!-- <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning display-4"> Brand:  
                                </label>
                                {{ $data->brand }}
                                </h6> -->

                                <!-- <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning display-4"> Item Type:  
                                </label>
                                {{ $data->itemType }}
                                </h6> -->

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
                            <td>{{$data->brand}}</td>
                            <td>{{$data->itemType}}</td>
                            <td>{{$data->price}}</td>
                            <td>
                                <img src="/{{$data->img}}" style="height: 120px; width: 200px;">
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

<script>
      var msg = '{{Session::get('fail')}}';
      var exist = '{{Session::has('fail')}}';
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


<div class="modal fade " id="modalAddItemType" role="dialog">
  <div class="modal-dialog modal-dialog-center modal-sm">
    <div class="modal-content ">
     <div class="modal-header">
      <h3 class="text-info " id="titleLogin"> Add Item Type </h3>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>
        <div class="modal-body">
          <form method="post" action="{{url('/addItemType')}}">
            @csrf
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-motorcycle"></i> </span>
              </div>
              <input type="text" class="form-control{{ $errors->has('itemType') ? ' is-invalid' : '' }}" name="itemType" value="{{ old('itemType') }}" placeholder="Item Type" required autofocus>
              @if ($errors->has('itemType'))
                                    <span class="invalid-feedback" id="errorUsername" role="alert">
                                        <strong>{{ $errors->first('itemType') }}</strong>
                                    </span>
                                @endif
            </div>
            
            <div class="modal-footer text-center">
        <button class="btn btn-primary-outline btn-sm" name="btnAdd" type="submit">Add</button>
        <br>
        
          <button type="button" class="btn btn-warning-outline btn-sm" data-dismiss="modal">Close</button>
        </div>
        </form>
        <br>
      </div>
    </div>
  </div>
</div>


</body>
</html>