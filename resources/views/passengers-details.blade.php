<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <title>Passenger Details - justGO</title>
        
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">
        <!-- Icons CSS -->
        <link type="text/css" rel="stylesheet" href="/icons/css/all.min.css" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="/css/compiled-jquery.css">
        <style>
            .hidden{
                display: none;
            }

            .visibility-os{
            display: hidden;
}
        </style>
    </head>
    
    <body class="bg-light">
        <div class="header-area">
        	<div class="container-sm bg-white px-4 pt-4">
                <div class="row">
                    <div class="col align-self-center">
                        <img src="/images/logo.svg" class="img-fluid" />
                    </div>
                    <div class="col">
                        <a class="btn btn-link float-end text-black d-md-none" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        	<i data-feather="menu"></i>
                        </a>
                        <nav class="navbar navbar-expand-md float-end p-0 d-none d-md-block">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                	<a class="nav-link active" href="#">Book</a>
                                </li>
                                <li class="nav-item">
                                	<a class="nav-link" href="#">Help</a>
                                </li>
                                <li class="nav-item">
                                	<a class="nav-link" href="#">Legal</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-area">
        <div class="success hidden text-center img-fluid">
            <img src="/images/paper-plane-31528.png" alt="" srcset="" width="350px">
                    <h6 class="form-success-text text-success"><i class="fa fa-check-circle text-primary"></i> Reservation completed successfully</h6>
        </div>
        	<div class="content container-sm bg-white rounded-5 p-4">
                <img src="/images/banner-book.svg" class="img-fluid d-block m-auto mb-3" />
                <h3 class="text-center">Passenger Details</h3>
                <p class="text-center"><strong class="text-uppercase">Primary Booking Contact:</strong></p>
                <!-- <div class="success">
                    <p class="form-success-text text-success hidden"><i class="fa fa-check-circle text-primary"></i> Reservation completed successfully</p>
                </div> -->
                <p class="text-danger" id="alert"></p>
                <form action="" name="myForm" class="mb-4 form" enctype="multipart/form-data">
                	<small class="mb-1 d-block">* Mandatory</small>
                	<div class="mb-3">
                    	<div class="input-group">
                            <select class="form-select w-auto" style="flex: initial;">
                                <option value="" selected>+27</option>
                                <option value="">+1</option>
                                <option value="">+233</option>
                                <option value="">+234</option>
                                <option value="">+236</option>
                                <option value="">+243</option>
                                <option value="">+250</option>
                                <option value="">+254</option>
                                <option value="">+255</option>
                                <option value="">+256</option>
                                <option value="">+258</option>
                                <option value="">+260</option>
                                <option value="">+263</option>
                                <option value="">+264</option>
                                <option value="">+265</option>
                                <option value="">+266</option>
                                <option value="">+267</option>
                                <option value="">+268</option>
                                <option value="">+44</option>
                                <option value="">+49</option>
                                <option value="">+91</option>
                            </select>
                            <input type="input" class="form-control" name="phone" placeholder="Mobile Number *" pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <div class="input-group-text input-group-addon pe-0">
                            	<i data-feather="mail"></i>
                            </div>
                            <input type="email" class="form-control border-start-0" placeholder="Email Address *" id="email" name="email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="newsletter">
                            <label class="form-check-label" for="newsletter">
                            	<small>Subscribe to our Newsletter</small>
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="funeral_cover">
                            <label class="form-check-label" for="funeral_cover">
                            	<small>Call me, to receive more info on the justGO affordable funeral cover R10 000 for R40 for up to 6 family members</small>
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                    	<p class="text-center"><strong class="text-uppercase">Passenger 1 - Adult</strong></p>
                    </div>
                    <div class="row mb-3">
                        <div class="input-group">
                            <select class="form-select w-auto" style="flex: initial;">
                                <option value="" selected>Mr</option>
                                <option value="">Mrs</option>
                                <option value="">Ms</option>
                            </select>
                            <input type="text"  class="form-control" name="name" placeholder="First Name as per ID/Passport" pattern="^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$">
                        </div>
                    </div>
                    <div class="mb-3">
                    	<input type="text" class="form-control" name="surname" placeholder="Surname Name as per ID/Passport" pattern="^[\w'\-,.][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$">
                    </div>
                    <div class="mb-3">
                    	<div class="input-group">
                          	<input type="date" class="form-control border-end-0" name="date" placeholder="Date of Birth DD/MM/YYYY" pattern="^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$">
                           	<div class="input-group-text input-group-addon">
                              	<i data-feather="calendar"></i>
                          	</div>
                      	</div>
                    </div>
                    <div class="d-grid">
                    	<button type="submit" class="btn btn-success btn-lg rounded-5 py-3">Continue to Payment</button>
                    </div>
                </form>
            </div>
    	</div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
            <button type="submit" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body p-0">
            <div class="list-group list-group-flush">
                <a class="list-group-item" href="#">Bus</a>
                <a class="list-group-item" href="#">Flight</a>
                <a class="list-group-item" href="#">Best Deals</a>
                <a class="list-group-item" href="#">How to Pay</a>
                <a class="list-group-item" href="#">Groups</a>
                <a class="list-group-item" href="#">Corporate</a>
                <a class="list-group-item" href="#">Sell tickets</a>
                <a class="list-group-item" href="#">List your Bus</a>
            </div>
          </div>
        </div>
        <!-- Bootstrap core JavaScript --> 
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script> 
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/jquery.matchHeight-min.js"></script>
        <script type="text/javascript" src="js/complied-jquery.js"></script> 
        <!-- Plugins JavaScript -->
        <script src="https://unpkg.com/feather-icons"></script>
		<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>

$("form").on("submit", function (e) {
    
    var phone = document.forms["myForm"]["phone"].value;
    var email = document.forms["myForm"]["email"].value;
    var name = document.forms["myForm"]["name"].value;
    var surname = document.forms["myForm"]["surname"].value;
    var date = document.forms["myForm"]["date"].value;
    var alertErr = document.getElementById("alert")

    
    
    if (phone == "") {
        alertErr.innerHTML = "<i class='fas fa-exclamation-triangle'></i> Phone must be filled out";
        return false;
    } else if(email == ""){
        alertErr.innerHTML = "<i class='fas fa-exclamation-triangle'></i> Email must be filled out";
        return false;
    } else if(name == ""){
        alertErr.innerHTML = "<i class='fas fa-exclamation-triangle'></i> Name must be filled out";
        return false;
    } else if(surname == ""){
        alertErr.innerHTML = "<i class='fas fa-exclamation-triangle'></i> Surname must be filled out";
        return false;
    } else if(date == ""){
        alertErr.innerHTML = "<i class='fas fa-exclamation-triangle'></i> Date must be filled out";
        return false;
    } else{
    var dataString = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "/passenger/details",
      data: dataString,
    });

    $(".content").addClass("hidden");
    $(".success").removeClass("hidden");

    e.preventDefault();
  }

});





















// $("form").on("submit", function (e) {
//     var dataString = $(this).serialize();
    
//     $.ajax({
//       type: "POST",
//       url: "/passenger/details",
//       data: dataString,
//     });

//     $(".content").addClass("hidden");
//     $(".success").removeClass("hidden");

//     e.preventDefault();
// });
        </script>
    </body>
</html>