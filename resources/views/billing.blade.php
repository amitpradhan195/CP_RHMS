<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.9.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/motorbikelogo-96x96.png" type="image/x-icon">
  <meta name="description" content="Web Site Creator Description">
  <title>Billing</title>
  <link rel="stylesheet" href="{{url('assets/web/assets/icons2/mobirise2.css') }}" />
  <link rel="stylesheet" href="{{url('assets/web/assets/icons/mobirise-icons.css') }}" />
  <link rel="stylesheet" href="{{url('assets/web/assets/icons-bold/mobirise-icons-bold.css') }}">
  <link rel="stylesheet" href="{{url('assets/tether/tether.min.css') }}" />
  <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap-grid.min.css') }}" />
  <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap-reboot.min.css') }}" />
  <link rel="stylesheet" href="{{url('assets/socicon/css/styles.css') }}" />
  <link rel="stylesheet" href="{{url('assets/datatables/data-tables.bootstrap4.min.css') }}">
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
                    <a class="nav-link link text-warning display-4" href="products"><span class="mbri-contact-form mbr-iconfont mbr-iconfont-btn"></span>Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="bookings" aria-expanded="false"><span class="mbri-cart-full mbr-iconfont mbr-iconfont-btn"></span>Bookings</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link text-warning display-4" href="billing" aria-expanded="false"><span class="mbri-shopping-basket mbr-iconfont mbr-iconfont-btn"></span>Orders</a>
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



<section class="section-table cid-rhn6BvzEIr" id="table1-2a">

  <div class="container container-table" media="print">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Billing</h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
            Recondition House Management System</h3>
      <div class="table-wrapper" style="margin-top: -100px;">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search</label>
                  <input class="form-control input-sm">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch table-hover" cellspacing="0">
            <thead>
              <tr class="table-heads text-center">
              <th class="head-item mbr-fonts-style display-7">S. No</th>
              <th class="head-item mbr-fonts-style display-7">Item Name</th>
              <th class="head-item mbr-fonts-style display-7">Price</th>
              <th class="head-item mbr-fonts-style display-7">Image</th>
              <th class="head-item mbr-fonts-style display-7">Confirmed Date</th>
              <th class="head-item mbr-fonts-style display-7">Print</th>
            </tr>
            </thead>

            <tbody style="font-size: 16px;">
              @if(isset($billingDetails))
              @if($billingDetails->count()>0)
                    @foreach($billingDetails as $data) 
              <tr class="text-center" style="font-family: palatino;">
              <td class="counterCell"></td>
              <td class="body-item mbr-fonts-style">
                {{$data->modelName}} &nbsp &nbsp
                            <a class="viewInfo" style="font-family: 'Arial'; font-size: 12px;" data-toggle="collapse" data-parent="#accordion" href="#{{$data->itemId}}">View more</a>

                            <div id="{{ $data->itemId}}" class="panel-collapse collapse in">
                                <hr>
                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning"> Brand:  
                                </label>
                                {{ $data->brand }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning"> Item Type:  
                                </label>
                                {{ $data->itemType }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning"> Model Year:  
                                </label>
                                {{ $data->modelYear }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning"> CC:  
                                </label>
                                {{ $data->cc }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning"> Cylinder:  
                                </label>
                                {{ $data->cylinder }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning"> No of Gears:  
                                </label>
                                {{ $data->noOfGears }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning"> Mileage:  
                                </label>
                                {{ $data->mileage }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning"> Front Brake:  
                                </label>
                                {{ $data->frontBrake }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning"> Rear Brake:  
                                </label>
                                {{ $data->rearBrake }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning"> Fuel Type:  
                                </label>
                                {{ $data->fuelType }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning"> ABS:  
                                </label>
                                {{ $data->ABS }}
                                </h6>

                                <h6 class="card-title mbr-fonts-style">
                                <label class=" text-warning"> Description:  
                                </label>
                                {{ $data->description }}
                                </h6>
                            </div>
              </td>
              <td class="body-item mbr-fonts-style">{{ $data->price }}</td>
              <td class="body-item mbr-fonts-style">
                <img src="/{{$data->img}}" style="height: 120px; width: 200px;">
              </td>
              <td class="body-item mbr-fonts-style">{{date('Y-m-d h:ia', strtotime($data->billDateTime))}}</td>
              <td class="body-item mbr-fonts-style" style="font-size: 30px;">
                <!-- <a class="mbri-print printIcon" data-target="#modalReceipt" data-toggle="modal"></a> -->
                <button class="mbri-print printIcon mt-4 btn-primary-outline genBill" value="{{$data->bookId}}"></button>
              </td>
            </tr>
            <!-- onclick="window.print();return false;" -->
            @endforeach
            @else
                        <tr style="font-family: palatino;">
                            <td> No items has been ordered.</td>
                        </tr>
              @endif
            @endif
            <style type="text/css">
              .printIcon:hover
              {
                font-size: 36px;
              }
            </style>


           <!--  <tr>    
              <td class="body-item mbr-fonts-style display-7">Item 2</td>
              <td class="body-item mbr-fonts-style display-7">35</td>
              <td class="body-item mbr-fonts-style display-7">4</td>
              <td class="body-item mbr-fonts-style display-7">140</td>
            </tr>

            <tr>
              <td class="body-item mbr-fonts-style display-7">Item 3</td>
              <td class="body-item mbr-fonts-style display-7">66</td>
              <td class="body-item mbr-fonts-style display-7">1</td>
              <td class="body-item mbr-fonts-style display-7">66</td>
            </tr> -->

            <!-- <tr>  
              <td class="body-item mbr-fonts-style display-7">Item 4</td>
              <td class="body-item mbr-fonts-style display-7">70</td>
              <td class="body-item mbr-fonts-style display-7">7</td>
              <td class="body-item mbr-fonts-style display-7">490</td>
            </tr> -->
          </tbody>
        </table>
      </div>
      <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>



<section class="cid-rhn6Cg8hEE" id="footer1-2b">

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
  <script src="{{ url('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{ url('assets/datatables/jquery.data-tables.min.js') }}"></script>
  <script src="{{ url('assets/datatables/data-tables.bootstrap4.min.js') }}"></script>
  <script src="{{ url('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{ url('assets/dropdown/js/script.min.js') }}"></script>
  <script src="{{ url('assets/theme/js/script.js') }}"></script>
  
<!--    <div class="modal fade " id="modalLogin">
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
</div> -->

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


<script src="{{ asset('js/app.js') }}"></script>
      <script>
         $(document).ready(function(){
          // $("#formEditProf").hide();
            $('.genBill').click(function(e){
              e.preventDefault();
              var id = jQuery(this).val();

              var resp=$.ajax({
                  url: "{{ URL('/generateBill') }}",
                  method: 'GET',
                  datatype : 'json',
                  data: {
                     id : id
                  },
                  success: function(response){
                    var data=JSON.parse(response);
                    $("#modalReceipt").modal("show");
                    $('#fullName').text((data[0].firstName +'  '+ data[0].lastName ).toUpperCase());
                    $('#billId').text(data[0].billId);
                    $('#contact').text(data[0].contactNo);
                    $('#address').text(data[0].address);
                    $("#image").attr("src", data[0].img);
                    $('#modelName').text(data[0].modelName);
                    $('#orderDate').text(data[0].billDateTime);
                    $('#price').text(data[0].price);
                    $('#tot').text(data[0].price);
                    console.log(data);
                    }     
                });
               });

            // $("#addrows").click(function () {
            //      $("#mytable").each(function () {
            //          $(this).closest('table').find('tr:last').prev().after('<tr><td><input type="text"></td><td><input type="text"></td><td><input type="text"></td></tr>');
            //      });
            // });
            });
      </script>

      <style type="text/css">
        input {
            border: transparent;
        }
      </style>

<div class="modal fade" id="modalReceipt">
  <div class="modal-dialog modal-dialog-center modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <img src="assets/images/motorbikelogo-96x96.png" alt="bikeLogo" title="" style="height: 2rem;"> &nbsp &nbsp
        <h4 class="text-center text-danger" id="titleSignup"> Recondition House Management System </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" id="scrollSignup">
      <div class="row">
        <div class="span4">
                <img id="image" src="" class="img-rounded logo ml-5" height="150" style="border: 2px solid black;">
          <address class="ml-5">
              <strong>RHMS, Inc.</strong><br>
              P.O Box 3171<br>
              Sanagaun, Siddhipur<br>
              Lalitpur <br>
          </address>
        </div>
        <div class="align-right mt-2" style="margin-left: 200px;">
          <table class="invoice-head">
            <tbody>
              <tr>
                <td class="pull-right"><strong>Customer Name:</strong></td>
                <td id="fullName" class="align-left"></td>
              </tr>
              <tr>
                <td class="pull-right"><strong>Invoice no:</strong></td>
                <td id="billId" class="align-left"></td>
              </tr>
              <tr>
                <td class="pull-right"><strong>Date:</strong></td>
                <td class="align-left">{{(Carbon\Carbon::today()->format('Y-m-d'))}}</td>
              </tr>
              <tr>
                <td class="pull-right"><strong>Contact no:</strong></td>
                <td id="contact" class="align-left"></td>
              </tr>
              <tr>
                <td class="pull-right"><strong>Address:</strong></td>
                <td id="address" class="align-left"></td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
      </div>
      <div class="row">
        <div class="span8 ml-5">
          <h2>Invoice</h2>
          <!-- <button id="addrows"> Add Others</button> -->
        </div>
      </div>
      <div class="row col-md-12 align-center">
        <div class="span8 well invoice-body col-md-12 align-center">
          <table class="table">
          <thead class="bg-dark mbr-white">
            <tr>
              <th>Description</th>
              <th>Order Date</th>
              <th>Amount</th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <td id="modelName"></td>
            <td id="orderDate"></td>
            <td id="price"></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><strong>Total</strong></td>
              <td><strong id="tot"></strong></td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
        <div class="align-right col-md-12">
          <button id="btnPrint" type="button" class="btn btn-primary"><span class="mbri-print" style="font-size: 20px;"></span><div> &nbsp&nbspPrint</div></button>
      </div>
      <div class="text-center">
        <!-- <div class="span8 well invoice-thank text-center"> -->
          <h5>Thank You!</h5>
        <!-- </div> -->
      </div>
      <div class="row ml-4">
          <div class="span3" align="left">
              <strong>Phone:</strong> <a href="tel:9845464232">9845464232</a>
          </div>&nbsp &nbsp &nbsp &nbsp
          <div class="span3 ml-5" align="center">
              <strong>Email:</strong> <a href="mailto:amitpradhan195@gmail.com">amitpradhan195@gmail.com</a>
          </div>&nbsp &nbsp &nbsp &nbsp
          <div class="span3 ml-5 align-right">
              <strong>Website:</strong> <a href="/userDash">http://rhms.com</a>
          </div>
      </div>
    </div>
    </div>
  </div>
</div>

<style type="text/css">
  @media screen {
  #printSection {
      display: none;
  }
}

@media print {
  body * {
    visibility:hidden;
  }
  #printSection, #printSection * {
    visibility:visible;
  }
  #printSection {
    position:absolute;
    left:0;
    top:0;
  }
}
</style>

<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
  document.getElementById("btnPrint").onclick = function () {
    printElement(document.getElementById("modalReceipt"));
}

function printElement(elem) {
    var domClone = elem.cloneNode(true);
    
    var $printSection = document.getElementById("printSection");
    
    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }
    
    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print();
}
</script>
  
</body>
</html>