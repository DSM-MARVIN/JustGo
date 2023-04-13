<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <title>Book with partner logo - justGO</title>
        
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- Icons CSS -->
        <link type="text/css" rel="stylesheet" href="icons/css/all.min.css" />
        <!-- Plugins CSS -->
        <!-- <link rel="stylesheet" href="css/compiled-jquery.css"> -->
    </head>
    
    <body class="bg-light">
        <div class="header-area">
        	<div class="container-sm bg-white px-4 pt-4">
                <div class="row">
                    <div class="col align-self-center">
                        <img src="images/logo.svg" class="img-fluid" />
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
        	<div class="container-sm bg-white rounded-5 p-4 rounded-bottom-0">
                <img src="images/banner-book.svg" class="img-fluid d-block m-auto mb-3" />
                <h3 class="text-center mb-5">Book your trip</h3>
            </div>
            <div class="container-sm book-trip rounded-5 p-4">
                <form class="mb-4 mt-2">
                	<ul class="fa-ul ms-4 mb-2">
                        <li>
                            <span class="fa-li"><i class="fa-solid fa-van-shuttle"></i></span><strong class="text-uppercase">Intercape</strong>
                        </li>
                    </ul>
                	<div class="card border-0 bg-white rounded-3 mb-3">
                    	<div class="card-header bg-transparent">
                        	<div class="row">
                                <div class="col-8 align-self-center">
                                	<ul class="fa-ul ms-3 float-end mb-0">
                                        <li><span class="fa-li"><i class="fa-regular fa-clock"></i></span><strong>DURATION</strong> {{$response['depature_time']}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <strong><span class="text-red">{{$response['depature_date']}}</span> <span class="text-black">DEPART</span></strong>  DURBAN BEACH<br>
                                    <small class="text-uppercase">{{$response['departure_place']}}</small>
                                </li>
                                <li class="mt-3">
                                    <strong><span class="text-red">{{$response['depature_date']}}</span> <span class="text-black">ARRIVE</span></strong>  JOHANNESBURG<br>
                                    <small class="text-uppercase">{{$response['arrival_place']}}</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <small><strong class="text-orange text-uppercase">Special Price</strong></small>
                    <p class="mb-0"><strong>{{$response['total_passengers']}} x Passengers Departing</strong></p>
                    <p><strong class="fs-1">R<span class="price" id="price">{{$response['price']}}</span></strong></p>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input1" name="check1" type="checkbox" value="" id="funeral_cover">
                            <label class="form-check-label w-100" for="funeral_cover">
                            	<small>Include insurance in my booking</small><strong class="float-end">R9.00  <i class="fas fa-question-circle text-orange" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="This travel insurance covers the passenger for R10,000 in case of accidental death, for a continuous period of 30 days from the 1st minute on the 1st day of travel. The premium is payable as a one-off and in advance before the traveller embarks on his/her travel."></i></strong>
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input1" name="check2" type="checkbox" value="" id="sms_confirmation">
                            <label class="form-check-label w-100" for="sms_confirmation">
                            	<small>Send me SMS confiration</small><strong class="float-end">R5.00 <i class="fas fa-question-circle opacity-0"></i></strong>
                            </label>
                        </div>
                    </div>
                    <div class="d-grid">
                    	<a href="/passenger/details" type="search" class="btn btn-success btn-lg rounded-5 py-3">Book This Trip</a>
                    </div>
                    <div class="text-center mt-3">
                    	<button type="button" class="btn btn-secondary btn-lg rounded-circle  fs-1 px-3" style="line-height: 34px;"><i class="fas fa-times"></i></button>
                    </div>
                </form>
            </div>
    	</div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
       / Bootstrap core JavaScript 
        <!-- <link rel="stylesheet" href="{{asset('/css/style.css')}}"> -->
        <!-- <script type="text/javascript" src="{{asset('/public/js/jquery.min.js')}}"></script> -->
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script> 
        <script type="text/javascript" src="/js/popper.min.js"></script>
        <script type="text/javascript" src="/js/jquery.matchHeight-min.js"></script>
        <script type="text/javascript" src="/js/complied-jquery.js"></script> 
        <!-- Plugins JavaScript -->
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

        <script>
            const check1 = document.querySelector('.price');
            $(document).ready(function(){
            $('input[name="check1"]').click(function(){
            if($(this).prop("checked") == true){

                console.log("Checkbox is checked.");
                var data = document.getElementById('price').innerHTML;
                var price = Number(data ) + 9;
                check1.innerHTML = price.toFixed(2);

            }
            else if($(this).prop("checked") == false){

                var data = document.getElementById('price').innerHTML;
                var price = Number(data ) - 9;
                check1.innerHTML = price.toFixed(2) ;

            }
        });
    });

    $(document).ready(function(){
            $('input[name="check2"]').click(function(){
            if($(this).prop("checked") == true){

                console.log("Checkbox is checked.");
                var data = document.getElementById('price').innerHTML;         
                var price = Number(data ) + 5;
                check1.innerHTML = price.toFixed(2) ;

            }
            else if($(this).prop("checked") == false){

                console.log("Checkbox is unchecked.");
                var data = document.getElementById('price').innerHTML;       
                var price = Number(data ) - 5;
                check1.innerHTML = price.toFixed(2) ;

            }
        });
    });

        </script>
    </body>
</html>