<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mastermalls</title>
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('front/font.css')}}" rel='stylesheet' type='text/css'>
</head>
<body class="cnt-homepage">
    <nav class="navbar navbar-inverse navbar-inversem navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('front/images/logo.png')}}" width="52">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="{{url('/page/about')}}"><i class="fa fa-info-circle"></i> About Us</a>
                    </li>
                    <li>
                        <a href="{{url('/page/contact')}}"><i class="fa fa-phone-square"></i> Contact Us</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                @if(Session::has('customer'))
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-user"></span> Hi, {{session('customer')->first_name}}<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-custom" role="menu">
                        <li>
                            <a href="{{url('/buyer/profile')}}">
                                <span class="item">
                                    <span class="item-left">
                                        My Profile
                                    </span>
                                </span>
                            </a> 
                            <a href="{{url('/buyer/logout')}}">
                                <span class="item">
                                    <span class="item-left">
                                        Logout
                                    </span>
                                </span>
                            </a> 
                        </li>
                    </ul>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-user"></span> Buyer<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-custom" role="menu">
                            <li>
                                <a href="{{url('/buyer/login')}}">
                                    <span class="item">
                                        <span class="item-left">
                                            Login
                                        </span>
                                    </span>
                                </a> 
                            </li>
                            <li>  
                                <a href="{{url('/buyer/register')}}">
                                    <span class="item">
                                        <span class="item-left">
                                            Register
                                        </span>
                                    </span>
                                </a> 
                            </li>
                        </ul>
                @endif
                @if(Session::has('shop_owner'))
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-shopping-bag"></i> Hi, {{session('shop_owner')->first_name}}<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-custom" role="menu">
                        <li>
                            <a href="{{url('/shop-owner/profile')}}">
                                <span class="item">
                                    <span class="item-left">
                                        My Profile
                                    </span>
                                </span>
                            </a> 
                            <a href="{{url('/shop-owner/shop')}}">
                                <span class="item">
                                    <span class="item-left">
                                        My Shop
                                    </span>
                                </span>
                            </a> 
                            <a href="{{url('/shop-owner/shop/logout')}}">
                                <span class="item">
                                    <span class="item-left">
                                        Logout
                                    </span>
                                </span>
                            </a> 
                        </li>
                    </ul>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-shopping-bag"></i> Shop Owner<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-custom" role="menu">
                            <li>
                                <a href="{{url('/shop-owner/login')}}">
                                    <span class="item">
                                        <span class="item-left">
                                            Login
                                        </span>
                                    </span>
                                </a> 
                            </li>
                            <li>  
                                <a href="{{url('/shop-owner/account/register')}}">
                                    <span class="item">
                                        <span class="item-left">
                                            Register
                                        </span>
                                    </span>
                                </a> 
                            </li>
                        </ul>
                    @endif
                </div>
        </div>
    </nav>
    <div class="container-fluit">
    <div class="pd-top"></div>
        <div class="container">
            <div class="col-md-3 col-sm-3">
                <div class="panel panel-default border-radius-none">
                    <div class="panel-heading">
                        <span class="orange bold">Manage Account</span>
                    </div>
                    <div class="panel-body">
                        <p><a href="{{url('/buyer/profile')}}">My Profile</a></p>
                        <hr>
                        <p><a href="{{url('/shop-owner/logout')}}">Sing Out</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9">
                @yield('content')
            </div>
        </div>
    </div>
    <footer id="footer">
    <div class="well well-custom border-radius-none background-black">
        <div class="row"> 
            <div class="col-md-3">
                <h4 class="bold">Contact Us</h4><hr>
                <p><i class="fa fa-map-marker"></i> &nbsp; &nbsp; &nbsp; Street 271 ,Solar 2004, Phnom Penh,  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Cambodia</p>
                <p><i class="fa fa-users"></i> &nbsp; &nbsp; &nbsp;<span class="cool-green bold">122,23</span> Seller </p>
                <p><i class="fa fa-phone"></i>  &nbsp; &nbsp; &nbsp;096 2555 209 / 015 885 689</p>
                <p><i class="fa fa-envelope-o"></i> &nbsp; &nbsp; &nbsp;Sorvichey@gmail.com</p>
                <p>
                    <i class="fa fa-facebook btn btn-default btn-default-custom border-radius-none"></i>
                    <i class="fa fa-twitter btn btn-default btn-default-custom border-radius-none"></i> 
                    <i class="fa fa-linkedin btn btn-default btn-default-custom border-radius-none"></i>
                </p>
            </div>  
            <div class="col-md-3">
                <h4 class="bold">Our Community</h4><hr>
                <p>How to Join us</p>
                <p>Buying and Selling</p>
                <p>Emerald Forum</p>
                <p>Emerald Blog</p>
                <p>Free Goods</p>
                <p>Job Oportunities</p>
            </div>
            <div class="col-md-3">
                <h4 class="bold">Member Links</h4><hr>
                <p>How to Join us</p>
                <p>Buying and Selling</p>
                <p>Emerald Forum</p>
                <p>Emerald Blog</p>
                <p>Free Goods</p>
                <p>Job Oportunities</p>
            </div>
            <div class="col-md-3">
                <h4 class="bold">Help and FAQs</h4><hr>
                <p>How to Join us</p>
                <p>Buying and Selling</p>
                <p>Emerald Forum</p>
                <p>Emerald Blog</p>
                <p>Free Goods</p>
                <p>Job Oportunities</p>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- /.container -->

<!-- jQuery -->
<script src="{{asset('front/js/jquery.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/echo.min.js')}}"></script>
<script src="{{asset('front/js/jquery.rateit.min.js')}}"></script>
<script src="{{asset('front/js/scripts.js')}}"></script>
</body>
</html>