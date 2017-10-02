@extends('layouts.front')
@section('content')
<div class="header-margin"></div>
<div class="container">
    <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
            <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span id="search_concept">All</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#contains">Phone</a></li>
                    <li><a href="#its_equal">Watch</a></li>
                    <li><a href="#greather_than">Ring</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn">
                    <button class="btn btn-default btn-default-custom" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
    </div>
    </div><br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="thumbnail border-radius-none padding-none container-fluid">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="{{asset('front/images/slide1.png')}}" class="img-responsive" alt="slide show">
                    </div>

                    <div class="item">
                      <img src="{{asset('front/images/slide2.png')}}" class="img-responsive" alt="slide show">
                    </div>

                    <div class="item">
                      <img src="{{asset('front/images/slide3.png')}}" class="img-responsive" alt="slide show">
                    </div>

                    <div class="item">
                      <img src="{{asset('front/images/slide4.png')}}" class="img-responsive" alt="slide show">
                    </div>
              </div>
            </div>
        </div><hr>
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Product</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail border-radius-none padding-none">
                    <img src="{{asset('front/images/miniverse_m.jpg')}}">
                    <div class="caption">
                        <h5 class="bold"><a href="{{url('/product/detail')}}" class="text-decoration-none"><span class="cool-green">Feature Label</span></a></h5>
                        <p class="gray">
                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. just simple data</small>
                        </p><hr>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <p class="margin-button-none"><i class="fa fa-shopping-cart cool-green"></i></p>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <p class="bold margin-button-none">
                                   <span class="bold cool-green"><small>$</small></span> 100.00 
                                </p>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail border-radius-none padding-none">
                    <img src="{{asset('front/images/flat_m.jpg')}}">
                    <div class="caption">
                         <h5 class="bold"><a href="{{url('/product/detail')}}" class="text-decoration-none"><span class="cool-green">Feature Label</span></a></h5>
                        <p class="gray"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. just simple data</small></p><hr>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <p class="margin-button-none"><i class="fa fa-shopping-cart cool-green"></i></p>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <p class="bold margin-button-none">
                                   <span class="bold cool-green"><small>$</small></span> 133.00 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail border-radius-none padding-none">
                    <img src="{{('front/images/pixel_m.jpg')}}">
                    <div class="caption">
                        <h5 class="bold"><a href="{{url('/product/detail')}}" class="text-decoration-none"><span class="cool-green">Feature Label</span></a></h5>
                        <p class="gray"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. just simple data</small></p><hr>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <p class="margin-button-none"><i class="fa fa-shopping-cart cool-green"></i></p>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <p class="bold margin-button-none">
                                   <span class="bold cool-green"><small>$</small></span> 231.00 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail border-radius-none padding-none">
                    <img src="{{asset('front/images/westeros_m.jpg')}}" alt="">
                    <div class="caption">
                         <h5 class="bold"><a href="{{url('/product/detail')}}" class="text-decoration-none"><span class="cool-green">Feature Label</span></a></h5>
                        <p class="gray"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. just simple data</small></p><hr>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <p class="margin-button-none"><i class="fa fa-shopping-cart cool-green"></i></i></p>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <p class="bold margin-button-none">
                                   <span class="bold cool-green"><small>$</small></span> 299.00 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
                <!-- Page Features -->
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail border-radius-none padding-none">
                    <img src="{{asset('front/images/miniverse_m.jpg')}}">
                    <div class="caption">
                         <h5 class="bold"><a href="{{url('/product/detail')}}" class="text-decoration-none"><span class="cool-green">Feature Label</span></a></h5>
                        <p class="gray"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. just simple data</small></p><hr>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <p class="margin-button-none"><i class="fa fa-shopping-cart cool-green"></i></i></p>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <p class="bold margin-button-none">
                                   <span class="bold cool-green"><small>$</small></span> 100.00 
                                </p>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail border-radius-none padding-none">
                    <img src="{{asset('front/images/flat_m.jpg')}}">
                    <div class="caption">
                         <h5 class="bold"><a href="{{url('/product/detail')}}" class="text-decoration-none"><span class="cool-green">Feature Label</span></a></h5>
                        <p class="gray"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. just simple data</small></p><hr>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <p class="margin-button-none"><i class="fa fa-shopping-cart cool-green"></i></i></p>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <p class="bold margin-button-none">
                                   <span class="bold cool-green"><small>$</small></span> 133.00 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail border-radius-none padding-none">
                    <img src="{{asset('front/images/pixel_m.jpg')}}">
                    <div class="caption">
                         <h5 class="bold"><a href="{{url('/product/detail')}}" class="text-decoration-none"><span class="cool-green">Feature Label</span></a></h5>
                        <p class="gray"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. just simple data</small></p><hr>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <p class="margin-button-none"><i class="fa fa-shopping-cart cool-green"></i></i></p>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <p class="bold margin-button-none">
                                   <span class="bold cool-green"><small>$</small></span> 231.00 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail border-radius-none padding-none">
                    <img src="{{asset('front/images/westeros_m.jpg')}}">
                    <div class="caption">
                         <h5 class="bold"><a href="{{url('/product/detail')}}" class="text-decoration-none"><span class="cool-green">Feature Label</span></a></h5>
                        <p class="gray"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. just simple data</small></p><hr>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <p class="margin-button-none"><i class="fa fa-shopping-cart cool-green"></i></i></p>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <p class="bold margin-button-none">
                                   <span class="bold cool-green"><small>$</small></span> 299.00 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail border-radius-none padding-none">
                    <img src="{{asset('front/images/miniverse_m.jpg')}}">
                    <div class="caption">
                         <h5 class="bold"><a href="{{url('/product/detail')}}" class="text-decoration-none"><span class="cool-green">Feature Label</span></a></h5>
                        <p class="gray"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. just simple data</small></p><hr>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <p class="margin-button-none"><i class="fa fa-shopping-cart cool-green"></i></i></p>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <p class="bold margin-button-none">
                                   <span class="bold cool-green"><small>$</small></span> 100.00 
                                </p>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail border-radius-none padding-none">
                    <img src="{{asset('front/images/flat_m.jpg')}}">
                    <div class="caption">
                         <h5 class="bold"><a href="{{url('/product/detail')}}" class="text-decoration-none"><span class="cool-green">Feature Label</span></a></h5>
                        <p class="gray"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. just simple data</small></p><hr>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <p class="margin-button-none"><i class="fa fa-shopping-cart cool-green"></i></i></p>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <p class="bold margin-button-none">
                                   <span class="bold cool-green"><small>$</small></span> 133.00 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail border-radius-none padding-none">
                    <img src="{{asset('front/images/pixel_m.jpg')}}">
                    <div class="caption">
                         <h5 class="bold"><a href="{{url('/product/detail')}}" class="text-decoration-none"><span class="cool-green">Feature Label</span></a></h5>
                        <p class="gray"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. just simple data</small></p><hr>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <p class="margin-button-none"><i class="fa fa-shopping-cart cool-green"></i></i></p>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <p class="bold margin-button-none">
                                   <span class="bold cool-green"><small>$</small></span> 231.00 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail border-radius-none padding-none">
                    <img src="{{asset('front/images/westeros_m.jpg')}}">
                    <div class="caption">
                        <h5 class="bold"><a href="{{url('/product/detail')}}" class="text-decoration-none"><span class="cool-green">Feature Label</span></a></h5>
                        <p class="gray"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. just simple data</small></p><hr>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <p class="margin-button-none"><i class="fa fa-shopping-cart cool-green"></i></i></p>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <p class="bold margin-button-none">
                                   <span class="bold cool-green"><small>$</small></span> 299.00 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-custom">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true"><span class="bold">&laquo;</span></span>
                  </a>
                </li>
                <li><a href="#"><span class="bold">1</span></a></li>
                <li><a href="#"><span class="bold">2</span></a></li>
                <li><a href="#"><span class="bold">3</span></a></li>
                <li><a href="#"><span class="bold">4</span></a></li>
                <li><a href="#"><span class="bold">5</span></a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true"><span class="bold">&raquo;</span></span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>
@endsection