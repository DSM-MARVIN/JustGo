<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <title>Results - justGO</title>
        
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
        <!-- <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css"> -->
        <!-- Icons CSS -->
        <link rel="stylesheet" href="{{asset('/icons/css/all.min.css')}}">
        <!-- <link type="text/css" rel="stylesheet" href="/icons/css/all.min.css" /> -->
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{asset('/css/compiled-jquery.css')}}">
        <!-- <link rel="stylesheet" href="/css/compiled-jquery.css"> -->
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
        	<div class="container-sm bg-white rounded-5 p-4">
                <img src="images/banner-book.svg" class="img-fluid d-block m-auto mb-3" />
                <h3 class="text-center">Select your trip</h3>
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                    	<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#departure_trip_pane" type="button" role="tab" aria-controls="departure_trip_pane" aria-selected="true">Departure Trip</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    	<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#return_trip_pane" type="button" role="tab" aria-controls="return_trip_pane" aria-selected="false">Return Trip</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="departure_trip_pane" role="tabpanel" aria-labelledby="departure_trip" tabindex="0">
                    	<div class="row mt-3 g-1">
                        	<div class="col-7 align-self-center">
                            	<ul class="fa-ul fa-ul list-inline ms-0 mb-0">
                                    <li class="list-inline-item ms-4"><a href="#" class="text-black-50"><span class="fa-li"><i class="fa-solid fa-van-shuttle"></i></span><small>{{$dataresults}} Results</small></a></li>
                                </ul>
                            </div>
                            <div class="col-5">
                            	<select class="form-select">
                                    <option value="">Sort By</option>
                                    <option value="cheapest">Cheapest</option>
                                    <option value="ealierst">Earliest Departure</option>
                                    <option value="latest">Latest Departure</option>
                                    <option value="leaststops">Least Stops</option>
                                    <option value="fastest">Fastest</option>
                                </select>
                            </div>
                        </div>


                        
                    	<ul class="results-list" id="accordionResult">
                        <!-- Start of API trip -->
                        @foreach($responseupdated as $res)

                        <li class="accordion-item mt-3">
                            	<strong class="text-uppercase">{{$res->provider}}</strong>
                                <div class="bg-grey">
                                    <div class="row g-0">
                                        <div class="col-3 bordered border-end border-light">
                                            <div class="p-2">
                                            	<img src="{{$res->carrier_logo}}" class="img-fluid m-auto d-block carrier-logo" />
                                            </div>
                                        </div>
                                        <div class="col-5 bordered border-end border-light">
                                        	<div class="p-2">
                                            	<ul class="fa-ul ms-3">
    												<li><span class="fa-li"><i class="fa-regular fa-clock"></i></span><strong>DURATION</strong> {{$res->journeyDuration}}</li>
                                                </ul>
                                                <span class="d-block mt-1">{{$res->availableSeats}} Seats Available</span>
                                                <div class="mt-1">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:80%;"></div>
                                                    </div>
                                                    <small class="text-uppercase text-nowrap mt-1">(21) Reviews</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-center">
                                        	<div class="p-1 d-table h-100 w-100">
                                                <div class="d-table-cell align-middle">
                                                    <strong class="text-uppercase text-orange">{{$res->classType}}</strong>
                                                    <h6 class="mb-0">R{{$res->price}}.00</h6>
                                                    <small class="text-uppercase">per person</small>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapse_{{$res->results_id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionResult">
                                        <div class="row g-0">
                                            <div class="col-8 bordered border-end border-top border-light">
                                            	<div class="p-2">
                                                	<ul class="fa-ul ms-3">
                                                        <li>
                                                            <span class="fa-li"><i class="fa-solid fa-van-shuttle"></i></span><strong>DEPART</strong> {{$res->departureLocation}} {{$res->depature_time}}<br>
                                                            <small class="text-uppercase">{{$res->departureLocationDescription}}</small>
                                                        </li>
                                                        <li>
                                                            <span class="fa-li"><i class="fa-solid fa-van-shuttle"></i></span><strong>ARRIVE</strong> {{$res->destinationLocation}} {{$res->arrival_time}}<br>
                                                            <small class="text-uppercase">{{$res->destinationLocationDescription}}</small>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="accordion-button text-center d-block collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$res->results_id}}" aria-expanded="true" aria-controls="collapse_{{$res->results_id}}">
                                        <i class="fas fa-caret-down"></i>
                                    </button>
                                </div>
                            </li>


                            @endforeach
                             <!-- End of API trip -->

                        	
                        </ul>
                        <div class="d-grid">
                            <a href="/tripsummary" type="button" class="btn btn-link btn-sm text-black-50 mb-3"><small>Trip Summary</small></a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="return_trip_pane" role="tabpanel" aria-labelledby="return_trip" tabindex="0">
                    	<div class="row mt-3 g-1">
                        	<div class="col-7 align-self-center">
                            	<ul class="fa-ul fa-ul list-inline ms-0 mb-0">
                                    <li class="list-inline-item ms-4"><a href="#" class="text-black-50"><span class="fa-li"><i class="fa-solid fa-van-shuttle"></i></span><small>{{$dataresults}} Results</small></a></li>
                                    <li class="list-inline-item ms-4"><a href="#" class="text-black-50"><span class="fa-li"><i class="fa-solid fa-van-shuttle"></i></span><small>15 Results</small></a></li>
                                </ul>
                            </div>
                            <div class="col-5">
                            	<select class="form-select">
                                    <option value="">Sort By</option>
                                    <option value="cheapest">Cheapest</option>
                                    <option value="ealierst">Earliest Departure</option>
                                    <option value="latest">Latest Departure</option>
                                    <option value="leaststops">Least Stops</option>
                                    <option value="fastest">Fastest</option>
                                </select>
                            </div>
                        </div>
                    	<ul class="results-list" id="accordionResult">
                        	                        <!-- Start of API trip -->

                                                    @foreach($responseupdated as $res)

 

<li class="accordion-item mt-3">
        <strong class="text-uppercase">{{$res->provider}}</strong>
        <div class="bg-grey">
            <div class="row g-0">
                <div class="col-3 bordered border-end border-light">
                    <div class="p-2">
                        <img src="{{$res->carrier_logo}}" class="img-fluid m-auto d-block carrier-logo" />
                    </div>
                </div>
                <div class="col-5 bordered border-end border-light">
                    <div class="p-2">
                        <ul class="fa-ul ms-3">
                            <li><span class="fa-li"><i class="fa-regular fa-clock"></i></span><strong>DURATION</strong> {{$res->journeyDuration}}</li>
                        </ul>
                        <span class="d-block mt-1">{{$res->availableSeats}} Seats Available</span>
                        <div class="mt-1">
                            <div class="rating-box">
                                <div class="rating" style="width:80%;"></div>
                            </div>
                            <small class="text-uppercase text-nowrap mt-1">(21) Reviews</small>
                        </div>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div class="p-1 d-table h-100 w-100">
                        <div class="d-table-cell align-middle">
                            <strong class="text-uppercase text-orange">{{$res->classType}}</strong>
                            <h6 class="mb-0">R{{$res->price}}.00</h6>
                            <small class="text-uppercase">per person</small>
                        </div>
                    </div>
                </div>
            </div>
            <div id="collapse_01" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionResult">
                <div class="row g-0">
                    <div class="col-8 bordered border-end border-top border-light">
                        <div class="p-2">
                            <ul class="fa-ul ms-3">
                                <li>
                                    <span class="fa-li"><i class="fa-solid fa-van-shuttle"></i></span><strong>DEPART</strong> {{$res->departureLocation}} {{$res->depature_time}}<br>
                                    <small class="text-uppercase">{{$res->departureLocationDescription}}</small>
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fa-solid fa-van-shuttle"></i></span><strong>ARRIVE</strong> {{$res->destinationLocation}} {{$res->arrival_time}}<br>
                                    <small class="text-uppercase">{{$res->destinationLocationDescription}}</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <button class="accordion-button text-center d-block collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_01" aria-expanded="true" aria-controls="collapse_01">
                <i class="fas fa-caret-down"></i>
            </button>
        </div>
    </li>


    @endforeach
     <!-- End of API trip -->

                                                  </ul>
                        <div class="d-grid">
                            <button type="button" class="btn btn-link btn-sm text-black-50 mb-3"><small>Load more results</small></button>
                        </div>
                    </div>
            	</div>
                <div class="d-gridx text-center">
                    <button type="search" class="btn btn-success btn-lg rounded-5 py-3 px-4">Back to Search</button>
                </div>
    		</div>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body p-0">
            <div class="list-group list-group-flush">
                <a class="list-group-item" href="#">Bus</a></li>
                <a class="list-group-item" href="#">Flight</a></li>
                <a class="list-group-item" href="#">Best Deals</a></li>
                <a class="list-group-item" href="#">How to Pay</a></li>
                <a class="list-group-item" href="#">Groups</a></li>
                <a class="list-group-item" href="#">Corporate</a></li>
                <a class="list-group-item" href="#">Sell tickets</a></li>
                <a class="list-group-item" href="#">List your Bus</a></li>
            </div>
          </div>
          
        </div>
        <!-- Bootstrap core JavaScript --> 
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script> 
        <script type="text/javascript" src="/js/popper.min.js"></script>
        <script type="text/javascript" src="/js/jquery.matchHeight-min.js"></script>
        <script type="text/javascript" src="/js/complied-jquery.js"></script> 
        <!-- Plugins JavaScript -->
        <script src="https://unpkg.com/feather-icons"></script>
		<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    </body>
</html>