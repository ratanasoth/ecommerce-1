@extends('layouts.front')
@section('content')
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.transitions.css')}}">
    <style>

.inline {
  display: inline-block;
  vertical-align: top;
}
ul {
  list-style: none;
}
a {
  -webkit-transition: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
}
body {
  font-size: 13px;
  color: #666666;
  background-color: #fff;
  overflow-x: hidden;
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
}
ul {
  margin: 0;
  padding: 0;
}
a {
  outline: none!important;
}
a:hover,
a:active,
a:focus {
  text-decoration: none;
}
img[src="assets/images/blank.gif"] {
  background: url("../images/ajax.gif") no-repeat scroll center center #ffffff;
}
@font-face {
  font-family: 'FjallaOneRegular';
  src: url('../fonts/fjalla/fjallaone-regular.eot');
  src: url('../fonts/fjalla/fjallaone-regular.eot') format('embedded-opentype'), url('../fonts/fjalla/fjallaone-regular.woff2') format('woff2'), url('../fonts/fjalla/fjallaone-regular.woff') format('woff'), url('../fonts/fjalla/fjallaone-regular.ttf') format('truetype'), url('../fonts/fjalla/fjallaone-regular.svg#FjallaOneRegular') format('svg');
}
@font-face {
  font-family: 'BebasNeueBold';
  src: url('../fonts/bebas/bebasneuebold.eot');
  src: url('../fonts/bebas/bebasneuebold.eot') format('embedded-opentype'), url('../fonts/bebas/bebasneuebold.woff2') format('woff2'), url('../fonts/bebas/bebasneuebold.woff') format('woff'), url('../fonts/bebas/bebasneuebold.ttf') format('truetype'), url('../fonts/bebas/bebasneuebold.svg#BebasNeueBold') format('svg');
}
@font-face {
  font-family: 'BebasNeueRegular';
  src: url('../fonts/bebas/bebasneueregular.eot');
  src: url('../fonts/bebas/bebasneueregular.eot') format('embedded-opentype'), url('../fonts/bebas/bebasneueregular.woff2') format('woff2'), url('../fonts/bebas/bebasneueregular.woff') format('woff'), url('../fonts/bebas/bebasneueregular.ttf') format('truetype'), url('../fonts/bebas/bebasneueregular.svg#BebasNeueRegular') format('svg');
}
@font-face {
  font-family: 'PacificoRegular';
  src: url('../fonts/pacifico/pacifico.eot');
  src: url('../fonts/pacifico/pacifico.eot') format('embedded-opentype'), url('../fonts/pacifico/pacifico.woff2') format('woff2'), url('../fonts/pacifico/pacifico.woff') format('woff'), url('../fonts/pacifico/pacifico.ttf') format('truetype'), url('../fonts/pacifico/pacifico.svg#PacificoRegular') format('svg');
}
@font-face {
  font-family: 'LatoBold';
  src: url('../fonts/lato/lato-bold.eot');
  src: url('../fonts/lato/lato-bold.eot') format('embedded-opentype'), url('../fonts/lato/lato-bold.woff2') format('woff2'), url('../fonts/lato/lato-bold.woff') format('woff'), url('../fonts/lato/lato-bold.ttf') format('truetype'), url('../fonts/lato/lato-bold.svg#LatoBold') format('svg');
}
.btn-upper {
  text-transform: uppercase;
}
.m-t-20 {
  margin-top: 20px;
}
.m-t-15 {
  margin-top: 15px;
}
.m-t-10 {
  margin-top: 10px;
}
.btn-uppercase {
  text-transform: uppercase;
}
.btn-default {
  background: #cbc9c9;
  color: #fff;
  font-weight: 700;
  /*line-height:30px;*/
  -webkit-transition: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -ms-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
}
.btn-primary {
  -webkit-transition: all linear 0.2s;
  -moz-transition: all linear 0.2s;
  -ms-transition: all linear 0.2s;
  -o-transition: all linear 0.2s;
  transition: all linear 0.2s;
  background: #a8a8a8;
  color: #fff;
  border: none;
  font-size: 13px;
  line-height: 22px;
}
.btn-black {
  -webkit-transition: all linear 0.2s;
  -moz-transition: all linear 0.2s;
  -ms-transition: all linear 0.2s;
  -o-transition: all linear 0.2s;
  transition: all linear 0.2s;
  background: #3a3a3a;
  color: #fff;
  border: none;
  font-size: 15px;
  line-height: 30px;
  font-weight: 500;
  padding: 3px 22px;
}
.btn-primary:hover,
.btn-black:hover,
.btn-black:focus,
.btn-primary:focus {
  color: #fff;
}
.center-block {
  float: none;
}
.inner {
  padding-top: 120px;
  padding-bottom: 120px;
}
.inner-md {
  padding-top: 100px;
  padding-bottom: 100px;
}
.inner-sm {
  padding-top: 80px;
  padding-bottom: 80px;
}
.inner-xs {
  padding-top: 40px;
  padding-bottom: 40px;
}
.inner-vs {
  padding-top: 30px;
  padding-bottom: 30px;
}
.inner-top {
  padding-top: 120px;
}
.inner-top-md {
  padding-top: 100px;
}
.inner-top-sm {
  padding-top: 80px;
}
.inner-top-xs {
  padding-top: 40px;
}
.inner-top-vs {
  padding-top: 30px;
}
.inner-bottom {
  padding-bottom: 120px;
}
.inner-bottom-md {
  padding-bottom: 100px;
}
.inner-bottom-sm {
  padding-bottom: 80px;
}
.inner-bottom-xs {
  padding-bottom: 40px;
}
.inner-bottom-vs {
  padding-bottom: 60px;
}
.inner-left {
  padding-left: 75px;
}
.inner-left-md {
  padding-left: 60px;
}
.inner-left-sm {
  padding-left: 45px;
}
.inner-left-xs {
  padding-left: 30px;
}
.inner-right {
  padding-right: 75px;
}
.inner-right-md {
  padding-right: 60px;
}
.inner-right-sm {
  padding-right: 45px;
}
.inner-right-xs {
  padding-right: 30px;
}
.inner-right-vs {
  padding-right: 10px;
}
.outer {
  margin-top: 120px;
  margin-bottom: 120px;
}
.outer-md {
  margin-top: 100px;
  margin-bottom: 100px;
}
.outer-sm {
  margin-top: 80px;
  margin-bottom: 80px;
}
.outer-xs {
  margin-top: 40px;
  margin-bottom: 40px;
}
.outer-top {
  margin-top: 120px;
}
.outer-top-md {
  margin-top: 100px;
}
.outer-top-sm {
  margin-top: 80px;
}
.outer-top-xs {
  margin-top: 30px;
}
.outer-top-vs {
  margin-top: 40px;
}
.outer-top-small {
  margin-top: 50px;
}
.outer-bottom {
  margin-bottom: 120px;
}
.outer-bottom-md {
  margin-bottom: 100px;
}
.outer-bottom-sm {
  margin-bottom: 80px;
}
.outer-bottom-vs {
  margin-bottom: 60px;
}
.outer-bottom-xs {
  margin-bottom: 40px;
}
.outer-bottom-small {
  margin-bottom: 50px;
}
.outer-top-bd {
  margin-top: 50px;
}
.inner-bottom-30 {
  padding-bottom: 30px;
}
.inner-bottom-20 {
  padding-bottom: 20px;
}
@media (max-width: 767px) {
  .inner {
    padding-top: 80px;
    padding-bottom: 80px;
  }
  .inner-md {
    padding-top: 65px;
    padding-bottom: 65px;
  }
  .inner-sm {
    padding-top: 50px;
    padding-bottom: 50px;
  }
  .inner-xs {
    padding-top: 40px;
    padding-bottom: 40px;
  }
  .inner-top {
    padding-top: 80px;
  }
  .inner-top-md {
    padding-top: 65px;
  }
  .inner-top-sm {
    padding-top: 50px;
  }
  .inner-top-xs {
    padding-top: 40px;
  }
  .inner-bottom {
    padding-bottom: 80px;
  }
  .inner-bottom-md {
    padding-bottom: 65px;
  }
  .inner-bottom-sm {
    padding-bottom: 50px;
  }
  .inner-bottom-xs {
    padding-bottom: 40px;
  }
}
.section-title {
  font-size: 20px;
  font-family: 'FjallaOneRegular';
  border-bottom: 1px solid #e3e3e3;
  padding-bottom: 10px;
  text-transform: uppercase;
}
.home-owl-carousel .owl-controls,
.blog-slider .owl-controls,
.brand-slider .owl-controls {
  margin-top: 0px;
}
/*carousel control button*/
.custom-carousel .owl-controls {
  position: absolute;
  right: 0;
  top: -25px;
  width: 100%;
  display: block;
}
.custom-carousel .owl-controls .owl-prev {
  position: absolute;
  width: 20px;
  height: 20px;
  top: -36px;
  right: 27px;
  -webkit-transition: all linear 0.2s;
  -moz-transition: all linear 0.2s;
  -ms-transition: all linear 0.2s;
  -o-transition: all linear 0.2s;
  transition: all linear 0.2s;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background: #dddddd;
}
.custom-carousel .owl-controls .owl-prev:before {
  color: #fff;
  content: "\f104";
  font-family: fontawesome;
  font-size: 13px;
  left: 8px;
  position: absolute;
  top: 0px;
}
.custom-carousel .owl-controls .owl-next {
  position: absolute;
  width: 20px;
  height: 20px;
  top: -36px;
  right: 0px;
  -webkit-transition: all linear 0.2s;
  -moz-transition: all linear 0.2s;
  -ms-transition: all linear 0.2s;
  -o-transition: all linear 0.2s;
  transition: all linear 0.2s;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background: #dddddd;
}
.custom-carousel .owl-controls .owl-next:before {
  content: "\f105";
  font-family: fontawesome;
  color: #fff;
  font-size: 13px;
  left: 8px;
  position: absolute;
  top: 0px;
}
.logo-slider .owl-controls .owl-prev,
.logo-slider .owl-controls .owl-next {
  top: -57px;
}
.featured-product {
  margin-bottom: 19px;
}
.logo-slider-inner {
  margin-top: 50px;
  margin-bottom: 60px;
}
.special-product .product:first-child {
  margin-bottom: 30px;
}
.special-product .product:last-child {
  margin-top: 30px;
}
.best-product .product:first-child {
  margin-bottom: 30px;
}
#owl-main .owl-controls .owl-buttons .icon {
  position: relative;
  top: 8px;
  color: #fff !important;
}
.config-options ul > li > a {
  display: block;
}
.read-more-bottom {
  margin-bottom: 10px;
}
.unicase-form-control {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  border-color: #eee;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  height: auto;
  padding: 10px 12px;
}
.unicase-form-control:focus {
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-color: #d8d8d8;
}
.animate-dropdown .open > .dropdown-menu,
.animate-dropdown .open > .dropdown-menu > .dropdown-submenu > .dropdown-menu {
  animation-name: slidenavAnimation;
  animation-duration: 200ms;
  animation-iteration-count: 1;
  animation-timing-function: ease-out;
  animation-fill-mode: forwards;
  -webkit-animation-name: slidenavAnimation;
  -webkit-animation-duration: 200ms;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-timing-function: ease-out;
  -webkit-animation-fill-mode: forwards;
  -moz-animation-name: slidenavAnimation;
  -moz-animation-duration: 200ms;
  -moz-animation-iteration-count: 1;
  -moz-animation-timing-function: ease-out;
  -moz-animation-fill-mode: forwards;
}
@keyframes slidenavAnimation {
  from {
    margin-top: -30px;
    opacity: 0;
  }
  to {
    margin-top: 0;
    opacity: 1;
  }
}
@-webkit-keyframes slidenavAnimation {
  from {
    margin-top: -30px;
    opacity: 0;
  }
  to {
    margin-top: 0;
    opacity: 1;
  }
}
.seller-product .products {
  margin-bottom: 35px;
}
.seller-product .products .product .product-info .name {
  font-size: 18px;
  margin-top: 5px !important;
}
a {
  color: #12cca7;
}
.show-theme-options:hover,
.show-theme-options:focus {
  background: #12cca7;
}
.btn-primary:hover,
.btn-black:hover,
.btn-primary:focus,
.btn-black:focus {
  background: #12cca7;
}
.top-bar .cnt-account ul > li a:hover,
.top-bar .cnt-account ul > li a:focus {
  color: #12cca7;
}
.top-bar .cnt-block ul li a .caret {
  color: #12cca7;
}
.top-bar .cnt-block ul li .dropdown-menu li a:hover,
.top-bar .cnt-block ul li .dropdown-menu li a:focus {
  color: #12cca7;
}
.main-header .top-search-holder .contact-row .icon {
  color: #12cca7;
}
.top-cart-row .dropdown-cart .lnk-cart .items-cart-inner .total-price-basket .total-price {
  color: #12cca7;
}
.top-cart-row .dropdown-cart .dropdown-menu .cart-item.product-summary .name a:hover,
.top-cart-row .dropdown-cart .dropdown-menu .cart-item.product-summary .name a:focus {
  color: #12cca7;
}
.top-cart-row .dropdown-cart .dropdown-menu .cart-item.product-summary .price {
  color: #12cca7;
}
.top-cart-row .dropdown-cart .dropdown-menu .cart-item.product-summary .action a:hover,
.top-cart-row .dropdown-cart .dropdown-menu .cart-item.product-summary .action a:focus {
  color: #12cca7;
}
.top-cart-row .dropdown-cart .dropdown-menu .cart-total .price {
  color: #12cca7;
}
.main-header .top-search-holder .search-area .categories-filter .dropdown-menu li a:hover,
.main-header .top-search-holder .search-area .categories-filter .dropdown-menu li a:focus {
  color: #12cca7;
}
.header-style-1 .header-nav {
  background: #12cca7;
}
.cnt-home .header-style-1 .header-nav .navbar .navbar-nav > li.active {
  background: #0b816a;
}
.cnt-home .header-style-1 .header-nav .navbar .navbar-nav > li > a:hover,
.cnt-home .header-style-1 .header-nav .navbar .navbar-nav > li > a:focus {
  background: #0b816a;
}
.cnt-home .header-style-1.header-style-2 .header-nav .navbar .navbar-nav > li.active,
.cnt-homepage .header-style-1.header-style-2 .header-nav .navbar .navbar-nav > li.active {
  background: #12cca7;
}
.cnt-home .header-style-1.header-style-3 .header-nav .navbar .navbar-nav > li.active {
  background: #12cca7;
}
.header-style-2 .header-nav .navbar-default .navbar-collapse .navbar-nav > li > a:hover,
.header-style-2 .header-nav .navbar-default .navbar-collapse .navbar-nav > li > a:focus {
  background: #12cca7 !important;
}
.header-style-2 .header-nav .navbar-default .navbar-collapse .navbar-nav > li.open {
  background: #12cca7;
}
.sidebar .side-menu nav .nav > li a:hover,
.sidebar .side-menu nav .nav > li a:focus {
  color: #12cca7;
}
.sidebar .side-menu nav .nav > li a:hover:after,
.sidebar .side-menu nav .nav > li a:focus:after {
  color: #12cca7;
}
.info-box .info-box-heading.green {
  color: #12cca7;
}
.scroll-tabs .nav-tab-line li a:hover,
.scroll-tabs .nav-tab-line li a:focus {
  color: #12cca7;
}
.product .product-info .name a:hover,
.product .product-info .name a:focus {
  color: #12cca7;
}
.product .product-info .product-price .price {
  color: #12cca7;
}
.product .cart .action ul li.lnk a:hover,
.product .cart .action ul li.lnk a:focus {
  color: #12cca7;
}
.product .cart .action ul li.add-cart-button .btn-primary:hover,
.product .cart .action ul li.add-cart-button .btn-primary:focus {
  background: #12cca7;
}
.product .cart .action ul li.add-cart-button .btn-primary.icon:hover,
.product .cart .action ul li.add-cart-button .btn-primary.icon:focus {
  background: #0b816a;
}
.tag.sale {
  background: #abd07e;
}
.copyright-bar .copyright a {
  color: #12cca7;
}
.blog-slider-container .blog-slider .blog-post-info .name a:hover,
.blog-slider-container .blog-slider .blog-post-info .name a:focus {
  color: #12cca7;
}
.footer .links-social .social-icons a:hover,
.footer .links-social .social-icons a:focus,
.footer .links-social .social-icons a.active {
  background: #12cca7;
}
.latest-tweet .re-twitter .comment a {
  color: #12cca7;
}
.latest-tweet .re-twitter .comment .icon .fa-stack-2x {
  color: #12cca7;
}
.footer .contact-information .media .icon .fa-stack-2x {
  color: #12cca7;
}
.footer .contact-information .media .media-body a:hover,
.footer .contact-information .media .media-body a:focus {
  color: #12cca7;
}
.footer .footer-bottom .module-body ul li a:hover,
.footer .footer-bottom .module-body ul li a:focus {
  color: #12cca7;
}
.product-tag .item.active,
.product-tag .item:hover,
.product-tag .item:focus {
  background: #12cca7;
}
.hot-deals .product-info .product-price .price {
  color: #12cca7;
}
.hot-deals .product-info .name a:hover,
.hot-deals .product-info .name a:focus {
  color: #12cca7;
}
.custom-carousel .owl-controls .owl-prev:hover,
.custom-carousel .owl-controls .owl-next:hover,
.custom-carousel .owl-controls .owl-prev:focus,
.custom-carousel .owl-controls .owl-next:focus {
  background: #0b816a;
}
.yamm .dropdown-menu .title:hover,
.yamm .dropdown-menu .title:focus {
  color: #12cca7;
}
.yamm .dropdown-menu li a:hover,
.yamm .dropdown-menu li a:focus {
  color: #12cca7;
}
.breadcrumb ul li.active {
  color: #0b816a;
}
.breadcrumb ul a:hover,
.breadcrumb ul a:focus {
  color: #0b816a;
}
.filters-container .nav-tabs.nav-tab-box li.active a .icon {
  color: #12cca7;
}
.filters-container .pagination-container ul li.active a {
  color: #12cca7;
}
.filters-container .pagination-container ul li.prev:hover,
.filters-container .pagination-container ul li.next:hover,
.filters-container .pagination-container ul li.prev:focus,
.filters-container .pagination-container ul li.next:focus {
  background: #12cca7;
}
.filters-container .pagination-container ul li a:hover,
.filters-container .pagination-container ul li a:focus {
  color: #12cca7;
}
.filters-container .lbl-cnt .dropdown.dropdown-med .dropdown-menu li a:hover,
.filters-container .lbl-cnt .dropdown.dropdown-med .dropdown-menu li a:focus {
  color: #12cca7;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .accordion .accordion-group .accordion-heading .accordion-toggle,
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .accordion .accordion-group .accordion-heading .accordion-toggle:hover,
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .accordion .accordion-group .accordion-heading .accordion-toggle:focus,
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .accordion .accordion-group .accordion-heading .accordion-toggle:after {
  color: #12cca7;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .price-range-holder .slider .slider-track .slider-handle {
  border: 5px solid #12cca7;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .list li a:hover,
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .list li a:focus {
  color: #12cca7;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .compare-report span {
  color: #12cca7;
}
.sidebar .sidebar-widget .advertisement .owl-controls .owl-pagination .owl-page.active span {
  background: #12cca7;
}
.sidebar .sidebar-widget .advertisement .owl-controls .owl-pagination .owl-page:hover span {
  background: #12cca7;
}
.single-product .gallery-holder .gallery-thumbs .owl-item .item:hover {
  border: 1px solid #12cca7;
}
.single-product .product-info .rating-reviews .reviews .lnk:hover,
.single-product .product-info .rating-reviews .reviews .lnk:focus {
  color: #12cca7;
}
.single-product .product-info .price-container .price-box .price {
  color: #12cca7;
}
.single-product .product-info .quantity-container .cart-quantity .arrows .arrow:hover,
.single-product .product-info .quantity-container .cart-quantity .arrows .arrow:focus {
  color: #12cca7;
}
.single-product .product-info .product-social-link .social-icons ul li a:hover,
.single-product .product-info .product-social-link .social-icons ul li a:focus {
  background: #12cca7;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell li a:hover,
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell li a:focus {
  background: #12cca7;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell li a:hover:after,
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell li a:focus:after {
  border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #12cca7;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell li.active a {
  background: #12cca7;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell li.active a:after {
  border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #12cca7;
}
.cart .action .add-cart-button .btn.btn-primary.icon:hover,
.cart .action .add-cart-button .btn.btn-primary.icon:focus {
  background: #12cca7;
}
.product-tabs .tab-content .tab-pane .product-reviews .reviews .review .review-title .date span {
  color: #12cca7;
}
.product-tabs .tab-content .tab-pane .product-reviews .reviews .review .author span {
  color: #12cca7;
}
#owl-main:hover .owl-prev:hover,
#owl-main:hover .owl-next:hover {
  background: #0b816a;
}
#owl-main .owl-controls .owl-pagination .owl-page:active span,
#owl-main .owl-controls .owl-pagination .owl-page:hover span {
  background: #12cca7;
}
.cart .action ul .lnk .add-to-cart:hover,
.cart .action ul .lnk .add-to-cart:focus {
  color: #12cca7 !important;
}
.cart .action .add-to-cart:hover,
.cart .action .add-to-cart:focus {
  color: #12cca7 !important;
}
.homepage-container .product .tag.hot {
  background: #12cca7;
}
.homepage-container .product .product-info .name a:hover,
.homepage-container .product .product-info .name a:focus {
  color: #12cca7;
}
.homepage-container .btn-primary:hover,
.homepage-container .btn-primary:focus {
  background: #12cca7;
  border: 2px solid #12cca7;
}
.category-product .cart .action ul li .add-to-cart:hover,
.category-product .cart .action ul li .add-to-cart:focus {
  background: #12cca7;
}
.furniture-container .product .btn-primary:hover,
.furniture-container .product .btn-primary:focus {
  background: #12cca7;
}
.header-style-3 .header-nav .navbar-default .navbar-collapse .navbar-nav > li > a:hover,
.header-style-3 .header-nav .navbar-default .navbar-collapse .navbar-nav > li > a:focus {
  background: #12cca7;
}
.header-style-3 .header-nav .navbar-default .navbar-collapse .navbar-nav > li.open {
  background: #12cca7;
}
#owl-single-product-thumbnails .owl-controls .owl-pagination .owl-page.active span {
  background: #12cca7 !important;
}
#owl-single-product-thumbnails .owl-controls .owl-pagination .owl-page span:hover,
#owl-single-product-thumbnails .owl-controls .owl-pagination .owl-page span:focus {
  background: #12cca7 !important;
}
.cnt-homepage .sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .price-range-holder .slider .slider-track .slider-handle.max-slider-handle {
  background: #12cca7;
}
.blog-page .blog-post h1 a:hover,
.blog-page .blog-post h1 a:focus {
  color: #12cca7;
}
.blog-page .sidebar .sidebar-module-container .sidebar-widget .nav-tabs > li.active > a,
.blog-page .sidebar .sidebar-module-container .sidebar-widget .nav-tabs > li.active > a:hover,
.blog-page .sidebar .sidebar-module-container .sidebar-widget .nav-tabs > li.active > a:focus {
  color: #0b816a;
}
.blog-page .blog-post .social-media a:hover,
.blog-page .blog-post .social-media a:focus {
  background-color: #12cca7;
}
.blog-page .sidebar .sidebar-module-container .search-area .search-button:after {
  color: #0b816a;
}
.blog-page .sidebar .sidebar-module-container .sidebar-widget .blog-post h4 a:hover,
.blog-page .sidebar .sidebar-module-container .sidebar-widget .blog-post h4 a:focus {
  color: #12cca7;
}
.blog-page .blog-post-author-details .author-social-network button .twitter-icon {
  background-color: #12cca7;
}
.blog-page .blog-review .review-action a,
.blog-page .blog-review .review-action a:hover,
.blog-page .blog-review .review-action a:focus {
  color: #12cca7;
}
.blog-page .blog-post-author-details .author-social-network .dropdown-menu > li > a:hover,
.blog-page .blog-post-author-details .author-social-network .dropdown-menu > li > a:focus {
  color: #12cca7;
}
.checkout-box .checkout-steps .panel .panel-heading .unicase-checkout-title > a:not(.collapsed) span {
  background-color: #12cca7;
}
.checkout-box .checkout-steps .checkout-step-01 .already-registered-login a:hover,
.checkout-box .checkout-steps .checkout-step-01 .already-registered-login a:focus {
  color: #12cca7;
}
.checkout-box .checkout-progress-sidebar .panel-body ul li a:hover,
.checkout-box .checkout-progress-sidebar .panel-body ul li a:focus {
  color: #12cca7;
}
.contact-page .contact-info .contact-i {
  background-color: #12cca7;
}
.shopping-cart .shopping-cart-table table tbody tr .cart-product-name-info h4 a:hover,
.shopping-cart .shopping-cart-table table tbody tr .cart-product-name-info h4 a:focus {
  color: #12cca7;
}
.shopping-cart .shopping-cart-table table tbody tr .cart-product-name-info .cart-product-info span span {
  color: #0b816a;
}
.shopping-cart .shopping-cart-table table tbody tr .cart-product-edit a:hover,
.shopping-cart .shopping-cart-table table tbody tr .cart-product-edit a:focus {
  color: #12cca7;
}
.shopping-cart .cart-shopping-total table thead tr th .cart-grand-total {
  color: #0b816a;
}
.shopping-cart-table table tbody tr td .quant-input .arrows .arrow:hover,
.shopping-cart-table table tbody tr td .quant-input .arrows .arrow:focus {
  color: #12cca7;
}
.logo-color {
  fill: #12cca7;
}
.cnt-homepage .single-product .product-info-block .form-control .dropdown-menu ul li a:hover,
.cnt-homepage .single-product .product-info-block .form-control .dropdown-menu ul li a:focus {
  color: #12cca7;
}
.cnt-homepage .single-product .product-info-block .txt.txt-qty {
  color: #12cca7;
}
.cnt-homepage .single-product .product-tabs .nav-tab-cell-detail {
  border-bottom: none;
}
.cnt-homepage .single-product .product-tabs .nav-tab-cell-detail li {
  margin-right: 10px;
  padding: 0;
}
.cnt-homepage .single-product .product-tabs .nav-tab-cell-detail li a:hover,
.cnt-homepage .single-product .product-tabs .nav-tab-cell-detail li a:focus {
  background: #12cca7;
  border: 2px solid #12cca7;
}
.cnt-homepage .single-product .product-tabs .nav-tab-cell-detail li.active a {
  background: #12cca7;
  border: 2px solid #12cca7;
}
.shopping-cart .estimate-ship-tax table tbody .unicase-form-control .dropdown-menu.open ul li a:hover,
.shopping-cart .estimate-ship-tax table tbody .unicase-form-control .dropdown-menu.open ul li a:focus {
  color: #12cca7;
}
.yamm .dropdown-menu {
  border-top-color: #12cca7;
}
.product-comparison .compare-table tr td .product-price .price {
  color: #12cca7;
}
.product-comparison .compare-table tr td .in-stock {
  color: #12cca7;
}
.body-content .my-wishlist-page .my-wishlist table tbody .product-name a:hover,
.body-content .my-wishlist-page .my-wishlist table tbody .product-name a:focus {
  color: #12cca7;
}
.product-comparison .compare-table tr td .product-price .price {
  color: #12cca7;
}
.product-comparison .compare-table tr td .in-stock {
  color: #12cca7;
}
.body-content .x-page .x-text h1 {
  color: #12cca7;
}
.body-content .x-page .x-text a {
  color: #12cca7;
}
.sign-in-page .register-form .forgot-password,
.sign-in-page .register-form .forgot-password:hover,
.sign-in-page .register-form .forgot-password:focus {
  color: #12cca7;
}
.body-content .my-wishlist-page .my-wishlist table tbody .price {
  color: #12cca7;
}
.terms-conditions-page .contact-form {
  color: #12cca7;
}
/*===================================================================================*/
/*  GREEN Color
/*===================================================================================*/
/*===================================================================================*/
/*  RED Color
/*===================================================================================*/
/*===================================================================================*/
/*  BLUE Color
/*===================================================================================*/
/*===================================================================================*/
/*  ORANGE Color
/*===================================================================================*/
/*===================================================================================*/
/*  DARK GREEN Color
/*===================================================================================*/
.top-bar {
  background: #f4f4f4;
  padding: 10px 0 9px;
  font-size: 12px;
}
.top-bar .cnt-account {
  float: left;
  padding: 6px 0px;
}
.top-bar .cnt-account ul {
  margin: 0px;
}
.top-bar .cnt-account ul > li {
  display: inline-block;
  line-height: 12px;
  padding: 3px 12px;
  border-left: 1px solid #e2e2e2;
}
.top-bar .cnt-account ul > li:last-child {
  border-right: 1px solid #e2e2e2;
}
.top-bar .cnt-account ul > li a {
  color: #888888;
  padding: 0px;
  font-weight: 400;
  -webkit-transition: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
}
.top-bar .cnt-account ul > li a .icon {
  display: block;
  float: left;
  padding-right: 6px;
  font-size: 11px;
}
.top-bar .cnt-account ul > li a:hover,
.top-bar .cnt-account ul > li a:focus {
  text-decoration: none;
}
.top-bar .cnt-block {
  float: right;
}
.top-bar .cnt-block .list-inline {
  margin: 0px;
}
.top-bar .cnt-block .list-inline > li {
  display: inline-block;
}
.top-bar .cnt-block .list-inline > li > a {
  padding: 6px 15px;
  border: 1px solid #d4d4d4;
  -webkit-transition: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
  color: #888;
  display: inline-block;
}
.top-bar .cnt-block .list-inline > li > a .value {
  color: #666;
  margin: 0px 7px;
}
.top-bar .cnt-block .list-inline > li > a:hover,
.top-bar .cnt-block .list-inline > li > a:focus {
  text-decoration: none;
  color: #888888;
}
.top-bar .cnt-block .list-inline > li .dropdown-menu {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 1px solid #e1e1e1;
  top: 125%;
  left: 5px;
}
.top-bar .cnt-block .list-inline > li .dropdown-menu li a:hover,
.top-bar .cnt-block .list-inline > li .dropdown-menu li a:focus {
  background: rgba(0, 0, 0, 0);
}
.main-header {
  padding: 50px 0px 60px 0px;
}
.main-header .logo-holder {
  margin-top: 10px;
}
.main-header .top-search-holder .contact-row {
  line-height: 20px;
  color: #9b9b9b;
}
.main-header .top-search-holder .contact-row .phone {
  margin: 0 23px 0 0;
  border-right: 1px solid #E2E2E2;
  padding-right: 35px;
}
.main-header .top-search-holder .contact-row .icon {
  font-size: 18px;
  line-height: 23px;
  margin: 0 8px 0 0;
  vertical-align: middle;
}
.main-header .top-search-holder .search-area {
  border: 1px solid #e2e2e2;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  margin: 8px 0 0;
}
.main-header .top-search-holder .search-area .search-field {
  border: medium none;
  -webkit-border-radius: 5px 0 0 5px;
  -moz-border-radius: 5px 0 0 5px;
  border-radius: 5px 0 0 5px;
  padding: 13px;
  width: 67%;
}
.main-header .top-search-holder .search-area .categories-filter {
  border-right: 1px solid #E0E0E0;
  text-transform: capitalize;
  display: inline-block;
  line-height: 44px;
  background: #f6f6f6;
}
.main-header .top-search-holder .search-area .categories-filter a {
  padding: 0 10px;
  color: #666;
  font-size: 13px;
}
.main-header .top-search-holder .search-area .categories-filter a .caret {
  margin-left: 15px;
  color: #a0a0a0;
}
.main-header .top-search-holder .search-area .categories-filter .dropdown-menu {
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 1px solid #e1e1e1;
  padding: 12px 17px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
.main-header .top-search-holder .search-area .categories-filter .dropdown-menu li {
  margin-bottom: 10px;
}
.main-header .top-search-holder .search-area .categories-filter .dropdown-menu li a {
  padding: 0px;
}
.main-header .top-search-holder .search-area .categories-filter .dropdown-menu li a:hover,
.main-header .top-search-holder .search-area .categories-filter .dropdown-menu li a:focus {
  background: rgba(0, 0, 0, 0);
}
.main-header .top-search-holder .search-area .categories-filter .dropdown-menu li.menu-header {
  font-family: 'FjallaOneRegular';
  line-height: 30px;
}
.main-header .top-search-holder .search-area .search-button {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  display: inline-block;
  float: right;
  margin: 0px;
  padding: 12px 19px 13px;
  text-align: center;
  background: #f6f6f6;
  border-left: 1px solid #E0E0E0;
}
.main-header .top-search-holder .search-area .search-button:after {
  color: #b2b2b2;
  content: "\f002";
  font-family: fontawesome;
  font-size: 13px;
  line-height: 9px;
  vertical-align: middle;
}
.cnt-home .header-style-1.header-style-2 .header-nav .navbar-default {
  background: #404040;
}
.top-cart-row {
  padding-top: 31px;
}
.top-cart-row .dropdown-cart {
  float: right;
}
.top-cart-row .dropdown-cart .lnk-cart {
  padding: 0px;
  border: 1px solid #e1e1e1;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  display: inline-block;
  color: #666666;
}
.top-cart-row .dropdown-cart .lnk-cart .items-cart-inner {
  position: relative;
}
.top-cart-row .dropdown-cart .lnk-cart .items-cart-inner .total-price-basket {
  padding: 13px 15px;
  font-family: 'FjallaOneRegular';
  text-transform: uppercase;
  float: left;
}
.top-cart-row .dropdown-cart .lnk-cart .items-cart-inner .basket {
  float: right;
  background: #efefef;
  padding: 12px;
  border-left: 1px solid #e1e1e1;
  padding: 13px 15px;
}
.top-cart-row .dropdown-cart .lnk-cart .items-cart-inner .basket-item-count {
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
  height: 21px;
  position: absolute;
  right: 33px;
  top: -13px;
  width: 21px;
  background: #f1c40f;
  color: #fff;
  font-size: 13px;
  text-align: center;
}
.top-cart-row .dropdown-cart .dropdown-menu {
  border: 1px solid #e1e1e1;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  float: right;
  left: auto;
  min-width: 0;
  padding: 24px 22px;
  right: 0;
  width: 230px;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.top-cart-row .dropdown-cart .dropdown-menu .cart-item.product-summary .name {
  font-size: 13px;
  font-family: 'FjallaOneRegular';
  margin-top: 0px;
}
.top-cart-row .dropdown-cart .dropdown-menu .cart-item.product-summary .name a {
  color: #666666;
}
.top-cart-row .dropdown-cart .dropdown-menu .cart-item.product-summary .price {
  font-weight: 700;
}
.top-cart-row .dropdown-cart .dropdown-menu .cart-item.product-summary .action {
  padding: 0;
  position: relative;
  font-size: 15px;
  right: 8px;
  top: 8px;
}
.top-cart-row .dropdown-cart .dropdown-menu .cart-item.product-summary .action a {
  color: #898989;
}
.top-cart-row .dropdown-cart .dropdown-menu .cart-total .text {
  font-size: 13px;
  font-family: 'FjallaOneRegular';
  color: #666666;
  margin-right: 10px;
}
.top-cart-row .dropdown-cart .dropdown-menu .cart-total .price {
  font-weight: 700;
}
.header-style-1 .header-nav .navbar-default {
  border: medium none;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  background: rgba(0, 0, 0, 0);
  margin: 0;
}
.header-style-1 .header-nav .navbar-default .navbar-collapse {
  padding: 0;
}
.header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li.active > a {
  color: #fff;
}
.header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li > a {
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
  color: #FFFFFF;
  font-family: 'FjallaOneRegular';
  font-size: 20px;
  line-height: 20px;
  padding: 21px 29px;
  text-transform: uppercase;
  -webkit-transitio: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
}
.header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li .menu-label {
  position: absolute;
  text-transform: uppercase;
  top: -14px;
  display: inline;
  padding: 1px 7px;
  color: #fff;
  font-size: 11px;
  font-family: 'Roboto';
  right: 23px;
}
.header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li .menu-label:after {
  border-width: 7.5px 8.5px 0 7.5px;
  right: 18px;
  top: 90%;
  border-style: solid;
  content: "";
  display: block;
  height: 0;
  position: absolute;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transitio: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  width: 0;
  z-index: 100;
}
.header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li .menu-label:before {
  right: 18px;
  top: 90%;
}
.header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li .menu-label.new-menu {
  background: #f1c40f;
}
.header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li .menu-label.new-menu:after {
  border-color: #f1c40f rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
}
.header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li .menu-label.new-menu:before {
  border-color: #f1c40f rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
}
.header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li .menu-label.hot-menu {
  background: #ff7878;
}
.header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li .menu-label.hot-menu:after {
  border-color: #ff7878 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
}
.header-style-1 .header-nav .navbar-default .navbar-collapse .navbar-nav > li .menu-label.hot-menu:before {
  border-color: #ff7878 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
}
.header-style-2 {
  /*margin-bottom:10px;*/
}
.header-style-2 .header-nav {
  background: rgba(0, 0, 0, 0) !important;
}
.header-style-2 .header-nav .navbar-default .nav-bg-class {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  margin: 0;
}
.header-style-2 .header-nav .navbar-default .nav-bg-class .navbar-collapse .navbar-nav > li > a {
  color: #555;
}
.header-style-2 .header-nav .navbar-default .nav-bg-class .navbar-collapse .navbar-nav > li > a:hover,
.header-style-2 .header-nav .navbar-default .nav-bg-class .navbar-collapse .navbar-nav > li > a:focus {
  color: #fff;
}
.header-style-2 .header-nav .navbar-default .nav-bg-class .navbar-collapse .navbar-nav > li.open > a {
  color: #fff;
}
.header-style-3 .header-nav {
  background: #202020 !important;
  border: medium none;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  margin: 0;
}
.header-style-3 .header-nav .navbar-default .navbar-collapse .navbar-nav > li > a {
  color: #fff;
}
.header-style-3 .header-nav .navbar-default .navbar-collapse .navbar-nav > li > a:hover,
.header-style-3 .header-nav .navbar-default .navbar-collapse .navbar-nav > li > a:focus {
  color: #fff;
}
.header-style-3 .header-nav .yamm .dropdown-menu {
  top: 62px;
}
.yamm .nav,
.yamm .collapse,
.yamm .dropup,
.yamm .dropdown {
  position: static;
}
.yamm .dropdown-menu {
  left: auto;
  top: 110% ;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  border: 1px solid #f1f1f1;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
.yamm .dropdown-menu .yamm-content {
  padding: 20px 15px;
}
.yamm .dropdown-menu .yamm-content .links li a {
  padding: 8px 0px;
}
.yamm .dropdown-menu h2 {
  font-size: 15px;
  line-height: 27px;
  color: #555;
  text-transform: uppercase;
  font-family: 'FjallaOneRegular';
  margin-top: 0px;
}
.yamm .dropdown-menu li {
  line-height: 26px;
  padding: 2px 0px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.yamm .dropdown-menu li a {
  color: #3D3D3D;
  line-height: 26px ;
  text-transform: none ;
  display: block;
  padding: 8px 16px;
}
.yamm .dropdown-menu li a:hover,
.yamm .dropdown-menu li a:focus {
  background: rgba(0, 0, 0, 0);
  margin-left: 5px;
}
.yamm .dropdown-menu .text {
  font-size: 13px;
  line-height: 20px;
  position: relative;
  bottom: 0px;
  top: 73px;
}
.yamm .dropdown.yamm-fw .dropdown-menu {
  left: 0;
  right: 0;
}
.cnt-home .header-style-1.header-style-2 .header-nav .navbar .navbar-nav > li.active > a,
.cnt-homepage .header-style-1.header-style-2 .header-nav .navbar .navbar-nav > li.active > a {
  color: #fff;
}
.cnt-home .header-style-1.header-style-2 .header-nav .navbar-default {
  background: #404040;
}
.cnt-home .header-style-1.header-style-2 .header-nav .navbar-default .nav-bg-class {
  border: none;
}
.cnt-home .header-style-1.header-style-2 .header-nav .navbar-default .nav-bg-class .navbar-collapse .navbar-nav > li > a {
  color: #fff;
}
.cnt-homepage .header-style-2 .header-nav .navbar-default {
  background: #fff;
}
.cnt-homepage .header-style-2 .header-nav .navbar-default .nav-bg-class {
  -moz-box-shadow: 0 0 0 3px #F6F6F6 inset;
  -webkit-box-shadow: 0 0 0 3px #F6F6F6 inset;
  box-shadow: 0 0 0 3px #F6F6F6 inset;
}
.header-nav .navbar-default .dropdown .dropdown-menu.pages .links > li {
  border-bottom: 1px solid #E0E0E0;
  padding: 5px 0;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.header-nav .navbar-default .dropdown .dropdown-menu.pages .links > li:last-child {
  border-bottom: none;
}
.header-nav .navbar-default .dropdown .dropdown-menu.pages .links > li > a {
  line-height: 26px;
  padding: 0px;
}
.header-nav .navbar-default .dropdown .dropdown-menu.pages .links > li > a:hover,
.header-nav .navbar-default .dropdown .dropdown-menu.pages .links > li > a:focus {
  margin-left: 0px;
}
.sidebar .side-menu .head {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  color: #FFFFFF;
  font-size: 18px;
  font-family: 'FjallaOneRegular';
  padding: 15px 17px;
  text-transform: uppercase;
  background: #333333;
}
.sidebar .side-menu .head .icon {
  margin-right: 20px;
}
.sidebar .side-menu nav .nav > li {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-color: -moz-use-text-color #ebebeb;
  border-image: none;
  border-left: 1px solid #ebebeb;
  border-right: 1px solid #ebebeb;
  border-style: none solid;
  border-width: 0 1px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  position: relative;
  width: 100%;
  border-bottom: 1px solid #e8e8e8;
  background: #f7f7f7;
}
.sidebar .side-menu nav .nav > li > a {
  padding: 13px 15px;
  color: #666666;
  text-transform: uppercase;
}
.sidebar .side-menu nav .nav > li > a:after {
  color: #bababa;
  content: "\f0a9";
  float: right;
  font-size: 12px;
  height: 20px;
  line-height: 18px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  width: 20px;
  font-family: FontAwesome;
}
.sidebar .side-menu nav .nav > li > a .icon {
  font-size: 20px;
  margin-right: 25px;
}
.sidebar .side-menu nav .nav > li > a:hover,
.sidebar .side-menu nav .nav > li > a:focus {
  background: #fff;
  border-left: 5px solid #abd07e;
}
.sidebar .side-menu nav .nav > li > a:hover .icon,
.sidebar .side-menu nav .nav > li > a:focus .icon {
  color: #666666;
}
.sidebar .side-menu nav .nav > li > .mega-menu {
  padding: 3px 0;
  top: 0 !important;
  left: 100%;
  margin: 0;
  min-width: 330%;
  /*338%;*/
  position: absolute;
  top: 0px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
.sidebar .side-menu nav .nav > li > .mega-menu .yamm-content {
  padding: 10px 20px;
}
.sidebar .side-menu nav .nav > li > .mega-menu .yamm-content ul > li {
  border-bottom: 1px solid #E0E0E0;
  padding: 5px 0;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.sidebar .side-menu nav .nav > li > .mega-menu .yamm-content ul > li:last-child {
  border-bottom: none;
}
.sidebar .side-menu nav .nav > li > .mega-menu .yamm-content ul > li > a {
  line-height: 26px;
  padding: 0px;
}
.sidebar .side-menu nav .nav > li > .mega-menu .yamm-content .dropdown-banner-holder {
  position: absolute;
  right: -36px;
  top: -8px;
}
.sidebar .side-menu2 nav .nav li a {
  padding: 14.3px 15px;
}
.sidebar .sidebar-module-container .sidebar-widget .widget-header {
  background: #eeeeee;
  padding: 10px 15px;
}
.sidebar .sidebar-module-container .sidebar-widget .widget-header .widget-title {
  font-size: 14px;
  font-family: 'FjallaOneRegular';
  margin: 0px;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .accordion .accordion-group .accordion-heading .accordion-toggle {
  clear: both;
  display: block;
  font-family: 'Roboto', sans-serif;
  font-size: 13px;
  font-weight: 300;
  line-height: 36px;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .accordion .accordion-group .accordion-heading .accordion-toggle:after {
  content: "\f147";
  float: right;
  font-family: fontawesome;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .accordion .accordion-group .accordion-heading .accordion-toggle.collapsed {
  color: #666666;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .accordion .accordion-group .accordion-heading .accordion-toggle.collapsed:after {
  color: #636363;
  content: "\f196";
  font-family: fontawesome;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .accordion .accordion-group .accordion-body .accordion-inner {
  margin: 14px 0 20px;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .accordion .accordion-group .accordion-body .accordion-inner ul {
  padding-left: 15px;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .accordion .accordion-group .accordion-body .accordion-inner ul li {
  line-height: 27px;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .accordion .accordion-group .accordion-body .accordion-inner ul li a {
  color: #666666;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .accordion .accordion-group .accordion-body .accordion-inner ul li a:before {
  content: "\f105";
  font-family: fontawesome;
  font-size: 14px;
  line-height: 15px;
  margin: 0 5px 0 0;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .accordion .accordion-group .accordion-body .accordion-inner ul li a:hover:before {
  margin: 0 8px 0 0;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .price-range-holder {
  padding: 0 0 20px;
  position: relative;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .price-range-holder .slider {
  display: inline-block;
  position: relative;
  vertical-align: middle;
  margin-top: 15px;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .price-range-holder .slider.slider-horizontal {
  height: 20px;
  width: 100% !important;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .price-range-holder .slider .slider-track {
  background-color: #f1f1f1;
  background-repeat: repeat-x;
  cursor: pointer;
  position: absolute;
  width: 94% !important;
  height: 6px;
  left: 0;
  margin-top: -5px;
  top: 50%;
  width: 100%;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .price-range-holder .slider .slider-track .slider-selection {
  bottom: 0;
  height: 100%;
  top: 0;
  background-repeat: repeat-x;
  box-sizing: border-box;
  position: absolute;
  background: #c3c3c3;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .price-range-holder .slider .slider-track .slider-handle {
  background-color: #FFFFFF;
  background-repeat: repeat-x;
  -webkit-border-radius: 400px;
  -moz-border-radius: 400px;
  border-radius: 400px;
  height: 20px;
  margin-left: -3px !important;
  opacity: 1;
  position: absolute;
  top: -3px;
  width: 20px;
  margin-top: -5px;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .price-range-holder .slider .tooltip {
  margin-top: -36px;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .price-range-holder .min-max {
  font-size: 15px;
  font-weight: 700;
  color: #fe5252;
  margin-top: 15px;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .list li {
  clear: both;
  display: block;
  font-family: 'Roboto', sans-serif;
  font-size: 13px;
  font-weight: 300;
  line-height: 36px;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .list li a {
  color: #666666;
  display: block;
}
.sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .compare-report {
  margin-top: 20px;
  margin-bottom: 30px;
}
.sidebar .sidebar-widget .advertisement .item {
  background-color: #e7e7e7;
  background-position: center 55%;
  background-size: cover;
  height: 430px;
}
.sidebar .sidebar-widget .advertisement .item .caption {
  color: #636363;
  left: 12%;
  letter-spacing: -3px;
  position: absolute;
  top: 11%;
  z-index: 100;
  display: table-cell;
}
.sidebar .sidebar-widget .advertisement .item .caption .big-text {
  font-size: 60px;
  line-height: 125px;
  text-transform: uppercase;
  font-family: 'FjallaOneRegular';
  color: #fff;
  text-shadow: 1px 1px 3px #cfcfcf;
}
.sidebar .sidebar-widget .advertisement .item .caption .big-text .big {
  font-size: 120px;
  color: #ff7878;
  display: block;
  text-shadow: 1px 1px 3px #cfcfcf;
}
.sidebar .sidebar-widget .advertisement .item .caption .excerpt {
  font-size: 24px;
  letter-spacing: -1px;
  text-transform: uppercase;
  color: #e6e6e6;
  text-shadow: 1px 1px 3px #cfcfcf;
}
.sidebar .sidebar-widget .advertisement .owl-controls {
  bottom: 20px;
  position: absolute;
  text-align: center;
  top: auto;
  width: 100%;
}
.sidebar .sidebar-widget .advertisement .owl-controls .owl-pagination {
  display: inline-block;
}
.sidebar .sidebar-widget .advertisement .owl-controls .owl-pagination .owl-page {
  display: inline-block;
}
.sidebar .sidebar-widget .advertisement .owl-controls .owl-pagination .owl-page span {
  display: block;
  width: 15px;
  height: 15px;
  background: #fff;
  border: none;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  margin: 0 5px;
  -webkit-transition: all 200ms ease-out;
  -moz-transition: all 200ms ease-out;
  -o-transition: all 200ms ease-out;
  transition: all 200ms ease-out;
}
.related-product .tag {
  font-size: 15px;
  font-weight: 700;
  height: 50px;
  line-height: 45px;
  left: 15px;
  text-align: center;
  top: 3.5%;
  width: 50px;
  position: absolute;
}
/*===================================================================================*/
/*  OWL CAROUSEL
/*===================================================================================*/
#owl-main {
  text-align: center;
  cursor: default;
  height: 368px;
}
#owl-main .owl-controls {
  display: inline-block;
  position: relative;
  margin-top: 40px;
}
/*.panel-group .panel .owl-controls {
  margin-top: 25px;
}
.panel-group.blank .panel .owl-controls {
  margin-top: 40px;
}*/
#owl-main .owl-pagination {
  position: relative;
  line-height: 30px;
}
#owl-main .owl-buttons {
  display: block;
}
#owl-main .owl-prev,
#owl-main .owl-next {
  display: inline-block;
  position: absolute;
  top: 0;
  bottom: 0;
  width: 30px;
  height: 50px;
  font-size: 21px;
  background-color: #f2f2f2;
  border: none;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  margin: auto;
  -webkit-transition: all 200ms ease-out;
  -moz-transition: all 200ms ease-out;
  -o-transition: all 200ms ease-out;
  transition: all 200ms ease-out;
  opacity: 0;
}
#owl-main .owl-prev {
  left: 20px;
  /* -35px;*/
}
#owl-main .owl-next {
  right: 20px;
}
#owl-main:hover .owl-prev {
  left: 0px;
  opacity: 0.5;
}
#owl-main:hover .owl-next {
  right: 0px;
  opacity: 0.5;
}
#owl-main:hover .owl-prev:hover,
#owl-main:hover .owl-next:hover {
  opacity: 1;
}
#owl-main .owl-outer-nav:after {
  content: "";
  position: absolute;
  top: 0;
  left: -15%;
  width: 130%;
  height: 100%;
  z-index: 0;
}
#owl-main .owl-outer-nav .owl-wrapper-outer,
#owl-main .owl-outer-nav .owl-pagination,
#owl-main .owl-outer-nav .owl-prev,
#owl-main .owl-outer-nav .owl-next {
  z-index: 1;
}
#owl-main .owl-outer-nav .owl-controls {
  position: static;
}
#owl-main .owl-outer-nav .owl-prev {
  left: -65px;
}
#owl-main .owl-outer-nav .owl-next {
  right: -65px;
}
#owl-main .owl-outer-nav:hover .owl-prev {
  left: -80px;
}
#owl-main .owl-outer-nav:hover .owl-next {
  right: -80px;
}
#owl-main .owl-ui-md .owl-pagination {
  line-height: 45px;
}
#owl-main .owl-ui-md .owl-prev,
#owl-main .owl-ui-md .owl-next {
  width: 45px;
  height: 45px;
  font-size: 45px;
}
#owl-main .owl-ui-md .owl-prev {
  left: -55px;
}
#owl-main .owl-ui-md .owl-next {
  right: -55px;
}
#owl-main .owl-ui-md:hover .owl-prev {
  left: -60px;
}
#owl-main .owl-ui-md:hover .owl-next {
  right: -60px;
}
#owl-main .owl-outer-nav.owl-ui-md:after {
  left: -18%;
  width: 136%;
}
#owl-main .owl-outer-nav.owl-ui-md .owl-prev {
  left: -85px;
}
#owl-main .owl-outer-nav.owl-ui-md .owl-next {
  right: -85px;
}
#owl-main .owl-outer-nav.owl-ui-md:hover .owl-prev {
  left: -100px;
}
#owl-main .owl-outer-nav.owl-ui-md:hover .owl-next {
  right: -100px;
}
#owl-main .owl-ui-lg .owl-pagination {
  line-height: 60px;
}
#owl-main .owl-ui-lg .owl-prev,
#owl-main .owl-ui-lg .owl-next {
  width: 60px;
  height: 60px;
  font-size: 42px;
}
#owl-main .owl-ui-lg .owl-prev {
  left: -75px;
}
#owl-main .owl-ui-lg .owl-next {
  right: -75px;
}
#owl-main .owl-ui-lg:hover .owl-prev {
  left: -80px;
}
#owl-main .owl-ui-lg:hover .owl-next {
  right: -80px;
}
#owl-main .owl-outer-nav.owl-ui-lg:after {
  left: -22%;
  width: 144%;
}
#owl-main .owl-outer-nav.owl-ui-lg .owl-prev {
  left: -105px;
}
.owl-outer-nav.owl-ui-lg .owl-next {
  right: -105px;
}
#owl-main .owl-outer-nav.owl-ui-lg:hover .owl-prev {
  left: -120px;
}
#owl-main .owl-outer-nav.owl-ui-lg:hover .owl-next {
  right: -120px;
}
#owl-main .owl-inner-nav .owl-controls {
  position: static;
}
#owl-main .owl-inner-nav .owl-prev {
  left: 45px;
}
#owl-main .owl-inner-nav .owl-next {
  right: 45px;
}
#owl-main .owl-inner-nav:hover .owl-prev {
  left: 30px;
}
#owl-main .owl-inner-nav:hover .owl-next {
  right: 30px;
}
#owl-main .owl-outer-nav .owl-prev,
#owl-main .owl-outer-nav .owl-next,
#owl-main .owl-inner-nav .owl-prev,
#owl-main .owl-inner-nav .owl-next {
  bottom: 70px;
}
#owl-main .owl-outer-nav.owl-ui-md .owl-prev,
#owl-main .owl-outer-nav.owl-ui-md .owl-next,
#owl-main .owl-inner-nav.owl-ui-md .owl-prev,
#owl-main .owl-inner-nav.owl-ui-md .owl-next {
  bottom: 85px;
}
#owl-main .owl-outer-nav.owl-ui-lg .owl-prev,
#owl-main .owl-outer-nav.owl-ui-lg .owl-next,
#owl-main .owl-inner-nav.owl-ui-lg .owl-prev,
#owl-main .owl-inner-nav.owl-ui-lg .owl-next {
  bottom: 100px;
}
#owl-main .owl-inner-pagination .owl-pagination,
#owl-main .owl-inner-pagination .owl-prev,
#owl-main .owl-inner-pagination .owl-next {
  margin-top: -40px;
  top: -60px;
}
#owl-main .owl-inner-pagination.owl-ui-md .owl-pagination,
#owl-main .owl-inner-pagination.owl-ui-md .owl-prev,
#owl-main .owl-inner-pagination.owl-ui-md .owl-next {
  margin-top: -50px;
  top: -65px;
}
#owl-main .owl-inner-pagination.owl-ui-lg .owl-pagination,
#owl-main .owl-inner-pagination.owl-ui-lg .owl-prev,
#owl-main .owl-inner-pagination.owl-ui-lg .owl-next {
  margin-top: -60px;
  top: -75px;
}
#owl-main .owl-inner-pagination.owl-outer-nav .owl-prev,
#owl-main .owl-inner-pagination.owl-outer-nav .owl-next,
#owl-main .owl-inner-pagination.owl-inner-nav .owl-prev,
#owl-main .owl-inner-pagination.owl-inner-nav .owl-next {
  margin: auto;
  top: 0;
  bottom: 43px;
}
#owl-main .owl-inner-pagination .owl-pagination {
  -webkit-transition: all 200ms ease-out;
  -moz-transition: all 200ms ease-out;
  -o-transition: all 200ms ease-out;
  transition: all 200ms ease-out;
  opacity: 0;
}
#owl-main .owl-inner-pagination:hover .owl-pagination {
  opacity: 1;
}
#owl-main .owl-inner-pagination.owl-inner-nav .owl-pagination,
.owl-inner-pagination.owl-outer-nav .owl-pagination {
  top: -45px;
}
.owl-inner-pagination.owl-inner-nav.owl-ui-md .owl-pagination,
.owl-inner-pagination.owl-outer-nav.owl-ui-md .owl-pagination {
  top: -50px;
}
.owl-inner-pagination.owl-inner-nav.owl-ui-lg .owl-pagination,
.owl-inner-pagination.owl-outer-nav.owl-ui-lg .owl-pagination {
  top: -60px;
}
.owl-inner-pagination.owl-inner-nav:hover .owl-pagination,
.owl-inner-pagination.owl-outer-nav:hover .owl-pagination {
  top: -60px;
}
.owl-inner-pagination.owl-inner-nav.owl-ui-md:hover .owl-pagination,
.owl-inner-pagination.owl-outer-nav.owl-ui-md:hover .owl-pagination {
  top: -65px;
}
.owl-inner-pagination.owl-inner-nav.owl-ui-lg:hover .owl-pagination,
.owl-inner-pagination.owl-outer-nav.owl-ui-lg:hover .owl-pagination {
  top: -75px;
}
#owl-main.height-md .item {
  height: 457px;
}
#owl-main.height-lg .item {
  height: 675px;
}
#owl-main .container {
  display: table;
  height: inherit;
}
#owl-main .caption {
  display: table-cell;
}
#owl-main .caption.vertical-center {
  vertical-align: middle;
  padding-bottom: 3vh;
}
#owl-main .caption.vertical-top {
  vertical-align: top;
  padding-top: 8vh;
}
#owl-main .caption.vertical-bottom {
  vertical-align: bottom;
  padding-bottom: 14vh;
}
#owl-main .caption.text-center {
  padding-left: 10%;
  padding-right: 10%;
}
#owl-main .caption.text-left {
  padding-right: 20%;
}
#owl-main .caption.text-right {
  padding-left: 20%;
}
#owl-main .owl-controls {
  display: block;
  position: static;
  margin-top: -47px;
}
#owl-main .owl-pagination {
  background: #FFF;
  line-height: inherit;
  position: relative;
  bottom: -40px;
  padding: 10px;
  display: inline-block;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  margin: auto;
  opacity: 0;
  -webkit-transition: all 200ms ease-out;
  -moz-transition: all 200ms ease-out;
  -o-transition: all 200ms ease-out;
  transition: all 200ms ease-out;
}
#owl-main:hover .owl-pagination {
  bottom: -25px;
  opacity: 1;
}
#owl-main .owl-prev,
#owl-main .owl-next {
  bottom: 0;
}
#owl-main .owl-controls .owl-page {
  display: inline-block;
}
#owl-main .owl-pagination .owl-page span {
  display: block;
  width: 15px;
  height: 15px;
  background: #d3d3d3;
  border: none;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  margin: 0 5px;
  -webkit-transition: all 200ms ease-out;
  -moz-transition: all 200ms ease-out;
  -o-transition: all 200ms ease-out;
  transition: all 200ms ease-out;
}
#owl-main .owl-item-gap .item {
  margin: 0 15px;
}
#owl-main .owl-item-gap-sm .item {
  margin: 0 10px;
}
#owl-main .owl-item.loading {
  min-height: inherit;
  background: none;
}
#owl-main .item {
  background-color: #FFFFFF;
  background-position: center 55%;
  background-size: cover;
  height: 368px;
}
#owl-main .item .caption {
  color: #636363;
  right: 0;
  position: absolute;
  top: 24%;
  z-index: 100;
  padding-right: 8%;
}
#owl-main .item .caption .big-text {
  font-size: 35px;
  line-height: 50px;
  text-transform: uppercase;
  font-family: 'FjallaOneRegular';
  padding: 5px 25px;
  background: #bbbbbb;
  color: #fff;
}
#owl-main .item .caption .big-text .highlight {
  color: #f1c40f;
}
#owl-main .item .caption .excerpt,
#owl-main .item .caption .small {
  font-size: 16px;
  /*line-height: 50px;*/
  margin-top: 10px;
  font-family: 'Roboto';
  font-weight: 500;
  padding-left: 23px;
  background: rgba(0, 0, 0, 0);
  color: #fff;
}
#owl-main .item .caption .excerpt span,
#owl-main .item .caption .small span {
  background: none repeat scroll 0 0 #bbbbbb;
  -moz-box-shadow: -1.4em 0 0 #bbbbbb, 1.4em 0 0 #bbbbbb;
  -webkit-box-shadow: -1.4em 0 0 #bbbbbb, 1.4em 0 0 #bbbbbb;
  box-shadow: -1.4em 0 0 #bbbbbb, 1.4em 0 0 #bbbbbb;
  line-height: 336%;
  padding: 0.6em 0;
  display: inline;
}
#owl-main .item .caption .button-holder {
  margin: 10px 0 0;
}
#owl-main .item .caption.bg-color {
  padding-right: 3%;
}
#owl-main .item .caption.bg-color .big-text {
  background: rgba(0, 0, 0, 0);
  padding: 0px;
  color: #000;
}
#owl-main .item .caption.bg-color .excerpt,
#owl-main .item .caption.bg-color .small {
  background: rgba(0, 0, 0, 0);
  padding: 0px;
  color: #000;
  margin-top: 0px;
}
#owl-main .item .caption.bg-color .excerpt span,
#owl-main .item .caption.bg-color .small span {
  background: rgba(0, 0, 0, 0);
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  display: block;
  line-height: 24px;
}
#owl-main .full-width-slider {
  margin-bottom: 30px;
}
#owl-main .full-width-slider .item {
  background-color: #FFFFFF;
  background-position: center 55%;
  background-size: cover;
  height: 449px;
}
#owl-main .full-width-slider .item .caption {
  position: absolute;
  top: 11%;
  z-index: 100;
}
#owl-main .full-width-slider .item .caption .big-text {
  font-size: 119px;
  line-height: 80px;
  font-family: 'PacificoRegular';
  color: #fff;
  background: rgba(0, 0, 0, 0);
  padding: 0px;
  text-transform: none;
}
#owl-main .full-width-slider .item .caption .excerpt {
  font-size: 60px;
  line-height: 80px;
  margin-top: 15px;
  font-family: 'LatoBold';
  text-transform: uppercase;
  color: #fff;
  background: rgba(0, 0, 0, 0);
  padding: 0px;
}
#owl-main .full-width-slider .item .caption .button-holder {
  margin: 31px 0 0;
}
.cnt-homepage .homepage-slider2 {
  height: 449px;
}
.cnt-homepage .homepage-slider2 #owl-main .item .caption {
  top: 24%;
  padding-right: 10%;
  right: 0px;
  left: 0px;
}
.cnt-homepage .homepage-slider2 #owl-main .owl-controls {
  margin-top: -89px;
  text-align: center !important;
}
.cnt-homepage .breadcrumb ul {
  text-align: left;
}
.cnt-homepage .cart .action .left {
  margin-left: 10px;
  padding: 2px 10px;
}
.cnt-homepage .sidebar .sidebar-module-container .sidebar-widget .sidebar-widget-body .price-range-holder .slider .slider-track .slider-handle {
  height: 15px;
  width: 15px;
  top: 0px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  border: 2px solid #e4e4e4;
}
.homepage-slider3 {
  height: 368px;
}
.homepage-slider3 #owl-main .item {
  height: 368px;
}
.homepage-slider3 #owl-main .item .caption {
  padding-left: 10%;
  padding-right: 44%;
}
.homepage-slider3 #owl-main .item .caption .small {
  font-size: 15px;
  line-height: 50px;
  text-transform: uppercase;
  font-family: 'FjallaOneRegular';
  text-shadow: 2px 2px #c3c3c3;
  color: #fff ;
  padding-left: 0px;
}
.homepage-slider3 #owl-main .item .caption .big-text {
  font-size: 45px;
  line-height: 50px;
  text-transform: uppercase;
  font-family: 'FjallaOneRegular';
  text-shadow: 2px 2px #c3c3c3;
  color: #000;
}
.homepage-slider3 #owl-main .item .caption .excerpt {
  font-size: 13px;
  line-height: 20px;
  color: #fff;
  text-transform: none;
}
.homepage-slider3 #owl-main .owl-controls {
  margin-top: -79px;
}
.home-page-slider4 {
  position: relative;
}
.home-page-slider4 .customNavigation {
  position: absolute;
  top: 50%;
  width: 100%;
  margin-top: -15px;
}
.home-page-slider4 .customNavigation .controls {
  position: relative;
}
.home-page-slider4 .owl-controls {
  bottom: 20px;
  position: absolute;
  text-align: center;
  top: auto;
  width: 100%;
}
.home-page-slider4 .owl-controls .owl-buttons {
  display: none !important;
}
.home-page-slider4 .owl-controls .owl-pagination .owl-page {
  display: inline-block;
}
.home-page-slider4 .owl-controls .owl-pagination .owl-page span {
  background: none repeat scroll 0 0 #e6e6e6;
  border: medium none;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  display: block;
  height: 12px;
  margin: 0 5px;
  -webkit-transition: all 200ms ease-out 0s;
  -moz-transition: all 200ms ease-out 0s;
  -o-transition: all 200ms ease-out 0s;
  transition: all 200ms ease-out 0s;
  width: 12px;
  -moz-box-shadow: 1px 3px rgba(0, 0, 0, 0.1) inset;
  -webkit-box-shadow: 1px 3px rgba(0, 0, 0, 0.1) inset;
  box-shadow: 1px 3px rgba(0, 0, 0, 0.1) inset;
}
.home-page-slider4 .owl-prev,
.home-page-slider4 .owl-next {
  position: absolute;
  -webkit-transition: all 200ms ease-out;
  -moz-transition: all 200ms ease-out;
  -o-transition: all 200ms ease-out;
  transition: all 200ms ease-out;
  opacity: 0;
}
.home-page-slider4 .owl-prev {
  left: 20px;
}
.home-page-slider4 .owl-next {
  right: 20px;
}
.home-page-slider4:hover .owl-prev {
  left: 0px;
  opacity: 1;
}
.home-page-slider4:hover .owl-next {
  right: 0px;
  opacity: 1;
}
.home-page-slider4:hover .owl-prev:hover,
.home-page-slider4:hover .owl-next:hover {
  opacity: 1;
}
.home-page-slider4 #owl-main .owl-pagination {
  background: rgba(0, 0, 0, 0);
  -webkit-border-radius: 3px;
  -moz-border-radiu: 3px;
  border-radius: 3px;
  display: inline-block;
  line-height: inherit;
  margin: auto;
  opacity: 1;
  padding: 10px;
  position: relative;
  -webkit-transition: all 200ms ease-out 0s;
  -moz-transition: all 200ms ease-out 0s;
  -o-transition: all 200ms ease-out 0s;
  transition: all 200ms ease-out 0s;
  bottom: none;
  bottom: 0px;
}
.cnt-homepage .homepage-container .btn-primary {
  padding: 2px 17px;
  -webkit-border-radius: 0px;
  -moz-border-radiu: 0px;
  border-radius: 0px;
}
.cnt-homepage .homepage-container #owl-main .owl-prev,
.cnt-homepage .homepage-container #owl-main .owl-next {
  top: 25%;
}
.info-boxes {
  margin-top: 30px;
}
.info-boxes .info-box {
  border: 5px solid #f2f2f0;
  padding: 12px 13px;
}
.info-boxes .info-box .icon {
  font-size: 35px;
}
.info-boxes .info-box .info-box-heading {
  font-size: 35px;
  line-height: 30px;
  text-transform: uppercase;
  font-family: 'BebasNeueBold';
  margin-top: 5px;
}
.info-boxes .info-box .info-box-heading.orange {
  color: #ffb847;
}
.info-boxes .info-box .info-box-heading.red {
  color: #ff7878;
}
.info-boxes .info-box .text {
  color: #666666;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 13px;
  margin: 0px;
}
.scroll-tabs {
  margin-bottom: 19px;
}
.scroll-tabs .more-info-tab {
  border-bottom: 1px solid #e3e3e3;
  padding-bottom: 10px;
}
.scroll-tabs .more-info-tab .new-product-title {
  margin-bottom: 0px;
  margin-top: 5px;
  font-size: 20px;
  font-family: 'FjallaOneRegular';
  text-transform: uppercase;
}
.scroll-tabs .nav-tab-line {
  border-bottom: none;
  margin-top: 7px;
  margin-right: 55px;
}
.scroll-tabs .nav-tab-line li.active a {
  border: none;
}
.scroll-tabs .nav-tab-line li a {
  text-transform: uppercase;
  font-weight: 500;
  color: #666666;
  font-size: 14px;
  border: medium none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  padding: 0 15px !important;
  position: relative;
}
.scroll-tabs .nav-tab-line li a:hover,
.scroll-tabs .nav-tab-line li a:focus {
  background: rgba(0, 0, 0, 0);
}
.scroll-tabs .nav-tab-line li a:hover:after {
  content: "\f0d7";
  font-family: FontAwesome;
  position: absolute;
  right: 50%;
  top: 100%;
  height: 100%;
  margin-right: -4px;
  margin-top: -4px;
  width: 10px;
  -webkit-transition: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
}
.product {
  position: relative;
}
.product .product-image .tag {
  position: absolute;
}
.product .product-info .name {
  font-size: 16px;
  font-family: 'FjallaOneRegular';
}
.product .product-info .name a {
  color: #555;
}
.product .product-info .star-rating .color {
  color: #ffb400;
}
.product .product-info .product-price .price {
  font-weight: 700;
  font-size: 16px;
  line-height: 30px;
  margin-right: 8px;
}
.product .product-info .product-price .price-before-discount {
  text-decoration: line-through;
  color: #d3d3d3;
  font-weight: 400;
  line-height: 30px;
  font-size: 14px;
}
.product .cart {
  margin-top: 5px;
  opacity: 0;
  -webkit-transition: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
  width: 100%;
  z-index: 666;
  left: 0px;
}
.product .cart .action ul li {
  float: left;
}
.product .cart .action ul li.add-cart-button .btn.btn-primary.icon {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  background: #575757 ;
}
.product .cart .action ul li.lnk {
  margin: 10px 0px;
}
.product .cart .action ul li.lnk a {
  padding: 0 10px;
  color: #dadada;
}
.product .cart .action ul li.lnk.wishlist {
  border-right: 1px solid #dadada;
}
.tag {
  font-size: 13px;
  font-weight: 700;
  line-height: 38px;
  width: 40px;
  height: 40px;
  text-transform: uppercase;
  top: 2.5%;
  z-index: 100;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  border-radius: 50px;
  color: #fff;
  right: 25px;
  /*11px;*/
  text-align: center;
}
.tag span {
  position: relative;
  z-index: 100;
}
.tag.new {
  background: #46aad7;
}
.tag.hot {
  background: #ff7878;
}
.product:hover .cart {
  opacity: 1;
}
.best-seller .product .product-info .name,
.special-offer .product .product-info .name {
  margin-top: 4px;
}
.cart {
  margin-top: 5px;
  opacity: 1;
  -webkit-transition: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
  width: 100%;
  z-index: 666;
  left: 0px;
}
.cart .action {
  float: left;
}
.cart .action .add-cart-button .btn.btn-primary.icon {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  background: #575757 ;
}
.cart .action.lnk {
  margin: 10px 0px;
}
.cart .action.lnk a {
  padding: 0 10px;
  color: #dadada;
}
.cart .action.lnk.wishlist {
  border-right: 1px solid #dadada;
}
.product-micro .product-image .image a .zoom-overlay:before {
  color: #FFFFFF;
  content: "\f00e";
  font-family: fontawesome;
  left: 45%;
  position: relative;
  right: 40%;
}
.product-micro .product-image .image a .zoom-overlay {
  height: 100%;
  left: 0;
  opacity: 0;
  position: absolute;
  top: 0;
  -webkit-transition: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
  width: 100%;
  z-index: 99;
}
.product-micro .product-image .image a .zoom-overlay:hover,
.product-micro .product-image .image a .zoom-overlay:focus {
  opacity: 1;
}
.cnt-home .product-micro .tag-micro {
  width: 30px;
  height: 30px;
  font-size: 11px;
  line-height: 29px;
  top: 5.5%;
}
.cnt-home .product-micro .product-info .name {
  font-size: 15px;
  margin-top: 0px !important;
}
.cnt-home .product-micro .product-info .product-price .price {
  font-size: 15px;
}
.cnt-home .product-micro .product-info .action .lnk.btn.btn-primary {
  font-size: 12px;
  line-height: 1.7;
}
.copyright-bar {
  background: #121212;
  padding: 20px 0px;
}
.copyright-bar .copyright {
  color: #5d5c5c;
  line-height: 28px;
}
.copyright-bar .payment-methods {
  text-align: right;
}
.copyright-bar .payment-methods ul li {
  display: inline-block;
  margin-right: 15px;
}
.copyright-bar .payment-methods ul li:last-child {
  margin-right: 0px;
}
.copyright-bar .no-padding {
  padding: 0px;
}
.wide-banner {
  overflow: hidden;
}
.wide-banner .image img {
  display: block;
  width: 100%;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
.wide-banner:hover img {
  -webkit-transform: rotate(-1deg) scale(1.1);
  -moz-transform: rotate(-1deg) scale(1.1);
  -ms-transform: rotate(-1deg) scale(1.1);
  -o-transform: rotate(-1deg) scale(1.1);
  opacity: 0.9;
}
.cnt-strip {
  position: relative;
}
.cnt-strip .strip {
  position: absolute;
  bottom: 15px;
  width: 100%;
  padding: 8px 30px 5px 30px;
}
.cnt-strip .strip h1 {
  font-size: 50px;
  color: #ff4c4c;
  margin: 0;
  text-transform: uppercase;
  font-family: 'BebasNeueBold';
}
.cnt-strip .strip h2 {
  font-size: 45px;
  color: #f39c12;
  margin: 0;
  text-transform: uppercase;
  font-family: 'BebasNeueBold';
}
.cnt-strip .strip h2 .shopping-needs {
  font-family: 'BebasNeueRegular';
  color: #434343;
}
.cnt-strip .strip h3 {
  font-size: 30px;
  color: #434343;
  margin: 0;
  text-transform: uppercase;
  font-family: 'BebasNeueRegular';
}
.cnt-strip .strip h4 {
  font-size: 20px;
  margin: 0;
  text-transform: uppercase;
  font-family: 'BebasNeueRegular';
}
.cnt-strip .strip.strip-text {
  width: 60%;
}
.cnt-strip .strip .red {
  color: #ff7878;
}
.cnt-strip .strip .black {
  color: #434343;
}
.cnt-strip .strip .green {
  color: #83c038;
}
.cnt-strip .strip .white {
  color: #fff;
}
.cnt-strip .strip .normal-shopping-needs {
  font-size: 35px;
  font-family: 'Roboto';
}
.cnt-strip .new-label {
  background: url("../images/label.png") no-repeat scroll right top;
  height: 72px;
  position: absolute;
  left: -1px;
  top: -1px;
  width: 72px;
  z-index: 999;
}
.cnt-strip .new-label .text {
  color: #fff;
  font-family: 'Roboto', sans-serif;
  font-size: 18px;
  font-weight: normal;
  line-height: 22px;
  left: -13px;
  position: absolute;
  text-align: center;
  top: 14px;
  -ms-transform: rotate(-43deg);
  /* IE 9 */
  -webkit-transform: rotate(-43deg);
  /* Chrome, Safari, Opera */
  transform: rotate(-43deg);
  width: 100%;
}
.wide-banners {
  margin-top: -10px;
}
.wide-banners.homepage-banner {
  margin-top: 30px;
}
.wide-banners.homepage-banner h4 {
  font-size: 30px;
  font-family: 'FjallaOneRegular';
}
.wide-banners.homepage-banner h3 {
  font-size: 35px;
  font-family: 'FjallaOneRegular';
}
.new-banner {
  margin-top: 30px;
}
.new-banner .cnt-strip .strip {
  width: auto;
  padding: 0px;
  right: 23px;
}
.new-banner .cnt-strip .strip h3 {
  background: #707070;
  padding: 13px 23px 13px 16px;
  line-height: 24px;
  font-size: 30px;
  font-family: 'FjallaOneRegular';
}
.new-banner .cnt-strip .strip h5 {
  font-size: 16px;
  line-height: 30px;
  font-weight: 700;
  padding-right: 21px;
  text-transform: uppercase;
}
.new-banner .cnt-strip .strip h5 span {
  background: none repeat scroll 0 0 #707070;
  -moz-box-shadow: -1.4em 0 0 #707070, 1.4em 0 0 #707070;
  -webkit-box-shadow: -1.4em 0 0 #707070, 1.4em 0 0 #707070;
  box-shadow: -1.4em 0 0 #707070, 1.4em 0 0 #707070;
  padding: 0.6em 0;
}
.new-banner.no-margin {
  margin-top: -10px;
}
.megamenu-banner {
  margin-top: 30px !important;
}
.megamenu-banner h3 {
  font-size: 30px;
  font-family: 'BebasNeueRegular';
}
.megamenu-banner h2 {
  font-size: 40px;
  font-family: 'BebasNeueBold';
}
.wide-banner-4 .cnt-strip .strip h1 {
  font-size: 50px;
  font-family: 'FjallaOneRegular';
}
.wide-banner-4 .cnt-strip .strip h2 {
  font-size: 40px;
  font-family: 'FjallaOneRegular';
}
.wide-banner-4 .cnt-strip .strip h3 {
  font-size: 30px;
  font-family: 'FjallaOneRegular';
}
.wide-banner-4 .cnt-strip .strip h4 {
  font-size: 20px;
  font-family: 'FjallaOneRegular';
}
.wide-banner-4 .cnt-strip .strip p {
  font-size: 23px;
  font-family: 'Roboto';
  margin-bottom: 0px;
}
.blog-slider-container .blog-slider .blog-post-info .name {
  font-size: 16px;
  font-family: 'FjallaOneRegular';
}
.blog-slider-container .blog-slider .blog-post-info .name a {
  color: #555;
}
.blog-slider-container .blog-slider .blog-post-info .info {
  color: #9c9c9c;
  font-size: 12px;
}
.blog-slider-container .blog-slider .blog-post-info .text {
  color: #434343;
  font-size: 13px;
}
.footer .links-social {
  border-top: 1px solid #e5e5e5;
  font-size: 12px;
  line-height: 18px;
  color: #666666;
  margin-bottom: 70px;
}
.footer .links-social .contact-info .footer-logo {
  margin-top: 10px;
}
.footer .links-social .contact-info .about-us {
  margin-bottom: 20px;
}
.footer .links-social .contact-info .social-icons a {
  color: #888888;
  font-size: 16px;
  -webkit-transition: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
  width: 2em;
  height: 2em;
  display: inline-block;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  text-align: center;
}
.footer .links-social .contact-info .social-icons a:hover,
.footer .links-social .contact-info .social-icons a:focus,
.footer .links-social .contact-info .social-icons a.active {
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  color: #fff;
}
.footer .links-social .contact-info .social-icons a .icon {
  line-height: 2em;
}
.footer .module-heading {
  font-size: 16px;
  text-transform: uppercase;
  font-family: 'FjallaOneRegular';
  color: #555555;
}
.footer .contact-timing .table tbody tr {
  border-bottom: 1px solid #e1e1e1;
}
.footer .contact-timing .table tbody tr td {
  border-top: none;
  font-size: 12px;
  line-height: 36px;
  padding: 0px !important;
}
.footer .contact-timing .contact-number {
  font-family: 'FjallaOneRegular';
}
.footer .contact-information .media .media-body a {
  color: #666666;
}
.footer .footer-bottom {
  background: #202020;
  padding-top: 50px;
}
.footer .footer-bottom .module-heading {
  font-size: 16px;
  text-transform: uppercase;
  font-family: 'FjallaOneRegular';
  color: #898989;
}
.footer .footer-bottom .module-body ul li {
  border-bottom: 1px solid #292929;
}
.footer .footer-bottom .module-body ul li a {
  font-size: 12px;
  line-height: 36px;
  color: #666666;
  position: relative;
  margin-left: 23px;
  display: block;
}
.footer .footer-bottom .module-body ul li a:before {
  content: "\f111";
  font-family: FontAwesome;
  position: absolute;
  margin-left: -22px;
  font-size: 6px;
}
.product-tag .item {
  background-color: #f5f5f5;
  color: #666666;
  display: inline-block;
  margin-bottom: 9px;
  margin-right: 8px;
  padding: 6px 12px;
}
.product-tag .item.active,
.product-tag .item:hover,
.product-tag .item:focus {
  color: #fff;
}
.newsletter .sidebar-widget-body input {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  border: 1px solid #e1e1e1;
  background: #fafafa;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.hot-deals .hot-deal-wrapper {
  position: relative;
}
.hot-deals .hot-deal-wrapper .sale-offer-tag {
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  border-radius: 50px;
  color: #FFFFFF;
  font-size: 13px;
  font-weight: 700;
  height: 50px;
  text-transform: uppercase;
  top: 4%;
  right: 10px;
  width: 50px;
  z-index: 100;
  background: #ff7878;
  position: absolute;
  text-align: center;
}
.hot-deals .hot-deal-wrapper .sale-offer-tag span {
  position: relative;
  z-index: 100;
  top: 4px;
}
.hot-deals .hot-deal-wrapper .timing-wrapper {
  bottom: 20px;
  position: absolute;
  left: 21px;
}
.hot-deals .hot-deal-wrapper .timing-wrapper .box-wrapper {
  display: table;
  text-align: center;
  margin-right: 10px;
  float: left;
}
.hot-deals .hot-deal-wrapper .timing-wrapper .box-wrapper .box {
  background-color: #a5a5a5;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  color: #FFFFFF;
  display: table-cell;
  height: 44px;
  vertical-align: middle;
  width: 47px;
  line-height: 15px;
}
.hot-deals .hot-deal-wrapper .timing-wrapper .box-wrapper .box .key {
  display: block;
  font-size: 17px;
  text-transform: uppercase;
  font-weight: 700;
}
.hot-deals .hot-deal-wrapper .timing-wrapper .box-wrapper .box .value {
  display: block;
  font-size: 11px;
  font-weight: 500;
}
.hot-deals .hot-deal-wrapper .timing-wrapper .box-wrapper:last-child {
  margin-right: 0px;
}
.hot-deals .product-info .name {
  font-size: 18px;
  font-family: 'FjallaOneRegular';
}
.hot-deals .product-info .name a {
  color: #555;
}
.hot-deals .product-info .product-price .price {
  font-weight: 700;
  font-size: 16px;
  line-height: 30px;
  margin-right: 8px;
}
.hot-deals .product-info .product-price .price-before-discount {
  text-decoration: line-through;
  color: #d3d3d3;
  font-weight: 400;
  line-height: 30px;
  font-size: 14px;
}
.hot-deals .cart {
  margin-top: 5px;
  -webkit-transition: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
  z-index: 666;
  left: 0px;
}
.hot-deals .cart .action {
  float: left;
}
.hot-deals .cart .action .add-cart-button a {
  background: none repeat scroll 0 0 #a8a8a8;
  border: medium none;
  color: #FFFFFF;
  display: block;
  overflow: hidden;
  position: relative;
  text-decoration: none;
  padding: 0px;
}
.hot-deals .cart .action .add-cart-button a .icon {
  background: none repeat scroll 0 0 #575757;
  color: #FFFFFF;
  height: 100%;
  left: 0;
  font-size: 13px;
  padding: 11px 0 0;
  position: absolute;
  text-align: center;
  top: 0;
  width: 35px;
}
.hot-deals .cart .action .add-cart-button a span {
  display: block;
  margin-left: 35px;
  overflow: hidden;
  padding: 8px 13px;
}
.hot-deals .cart .action .add-cart-button a:hover,
.hot-deals .cart .action .add-cart-button a:focus {
  background: #c6c6c6;
}
.breadcrumb {
  background: rgba(0, 0, 0, 0);
  padding: 0;
}
.breadcrumb ul {
  border-bottom: 1px solid #F2F2F2;
  margin: auto;
  padding: 20px 0 10px;
  text-align: right;
}
.breadcrumb ul li:after {
  color: #666666;
  content: "/";
  font-family: 'Roboto', sans-serif;
  font-size: 12px;
  line-height: 24px;
  margin-left: 9px;
  margin-right: -4px;
  padding: 0px;
}
.breadcrumb ul li:last-child:after {
  content: "";
}
.breadcrumb ul li a {
  color: #666666;
  font-family: 'Roboto', sans-serif;
  font-size: 12px;
  line-height: 24px;
  font-weight: 500;
}
.category-carousel {
  text-align: center;
  cursor: default;
}
.category-carousel .item {
  background-color: #FFFFFF;
  background-position: center 55%;
  background-size: cover;
  height: 255px;
  position: relative;
}
.category-carousel .item .caption {
  color: #636363;
  left: 12%;
  letter-spacing: -3px;
  position: absolute;
  top: 10%;
  z-index: 100;
  display: table-cell;
}
.category-carousel .item .caption .big-text {
  font-size: 150px;
  line-height: 145px;
  text-transform: uppercase;
  font-family: 'FjallaOneRegular';
  color: #fe5252;
}
.category-carousel .item .caption .excerpt {
  font-size: 40px;
  letter-spacing: -1px;
  text-transform: uppercase;
  color: #666666;
}
.category-carousel .item .owl-controls {
  display: inline-block;
  position: relative;
  margin-top: 40px;
}
.category-carousel .item .owl-controls .owl-prev,
.category-carousel .item .owl-controls .owl-next {
  display: inline-block;
  position: absolute;
  top: 0;
  bottom: 0;
  width: 30px;
  height: 30px;
  font-size: 21px;
  color: #FFF;
  background-color: #d3d3d3;
  border: none;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  margin: auto;
  -webkit-transition: all 200ms ease-out;
  -moz-transition: all 200ms ease-out;
  -o-transition: all 200ms ease-out;
  transition: all 200ms ease-out;
  opacity: 0;
}
.category-carousel .item .owl-controls .owl-prev {
  left: -35px;
}
.category-carousel .item .owl-controls .owl-next {
  right: -35px;
}
.category-carousel .item:hover .owl-prev {
  left: -40px;
  opacity: .25;
}
.category-carousel .item:hover .owl-next {
  right: -40px;
  opacity: .25;
}
.category-carousel .item:hover .owl-prev:hover,
.category-carousel .item:hover .owl-next:hover {
  opacity: 1;
}
.filters-container {
  padding: 12px 0px;
  margin-bottom: 5px;
}
.filters-container .nav-tabs.nav-tab-box {
  border: medium none;
  margin-top: 3px;
}
.filters-container .nav-tabs.nav-tab-box li {
  margin-right: 5px;
  padding: 0;
}
.filters-container .nav-tabs.nav-tab-box li a {
  background: none repeat scroll 0 0 #FFFFFF;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  color: #666666;
  font-family: 'Roboto', sans-serif;
  line-height: 18px;
  border: none !important;
  padding: 0px;
}
.filters-container .nav-tabs.nav-tab-box li a .icon {
  margin-right: 5px;
  color: #aaa;
}
.filters-container .lbl-cnt {
  color: #666666;
  font-family: 'Roboto', sans-serif;
  font-size: 12px;
  line-height: 24px;
}
.filters-container .lbl-cnt .lbl {
  color: #666666;
  display: inline-block;
  font-family: 'Roboto', sans-serif;
  font-size: 12px;
  line-height: 24px;
  margin-right: 10px;
}
.filters-container .lbl-cnt .dropdown.dropdown-med .btn {
  border: 1px solid #D6D6D6;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  padding: 4px 12px;
  background: #fff;
  font-size: 13px;
}
.filters-container .lbl-cnt .dropdown.dropdown-med .btn .caret {
  margin-left: 13px;
  margin-top: -2px;
}
.filters-container .lbl-cnt .dropdown.dropdown-med .dropdown-menu {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0;
  border-radius: 0;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 1px solid #e1e1e1;
}
.filters-container .lbl-cnt .dropdown.dropdown-med .dropdown-menu li a:hover,
.filters-container .lbl-cnt .dropdown.dropdown-med .dropdown-menu li a:focus {
  background: rgba(0, 0, 0, 0);
}
.filters-container .pagination-container {
  margin-top: 4px;
}
.filters-container .pagination-container ul {
  margin: 0px;
}
.filters-container .pagination-container ul li.prev,
.filters-container .pagination-container ul li.next {
  background: none repeat scroll 0 0 #dddddd;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
.filters-container .pagination-container ul li.prev a,
.filters-container .pagination-container ul li.next a,
.filters-container .pagination-container ul li.prev a:hover,
.filters-container .pagination-container ul li.next a:hover,
.filters-container .pagination-container ul li.prev a:focus,
.filters-container .pagination-container ul li.next a:focus {
  color: #fff;
}
.filters-container .pagination-container ul li a {
  color: #666666;
  display: inline-block;
  font-family: 'Roboto', sans-serif;
  font-size: 13px;
  line-height: 20px;
  padding: 0 3px;
}
.filters-container .pagination-container ul li.active a {
  text-decoration: underline;
}
.search-result-container .category-product {
  border-top: 1px solid #ececec;
  border-bottom: 1px solid #ececec;
}
.search-result-container .category-product .product {
  margin-bottom: 30px;
}
.search-result-container .category-product .product .product-image .tag {
  width: 60px;
  height: 60px;
  line-height: 55px;
  font-size: 17px;
  right: 14px;
}
.search-result-container .category-product .product .cart {
  opacity: 1;
}
.search-result-container .category-product .product .cart .lnk {
  margin: 8px 0px !important;
}
.search-result-container .category-product .product .cart .lnk a {
  background: #a8a8a8;
  padding: 8px 11px !important;
  margin-left: 10px;
  color: #fff !important;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.search-result-container .category-product .product .cart .lnk a:hover,
.search-result-container .category-product .product .cart .lnk a:focus {
  color: #fff !important;
}
.search-result-container .category-product-inner .product-list.product {
  border: 1px solid #f2f2f2;
  position: relative;
  margin-bottom: 30px;
}
.search-result-container .category-product-inner .product-list.product .product-info {
  padding: 24px 40px;
}
.search-result-container .category-product-inner .product-list.product .product-info .cart {
  margin-top: 30px;
}
.search-result-container .category-product-inner .product-list.product .tag {
  position: absolute;
  right: 12px;
  top: 18px;
  width: 60px;
  height: 60px;
  line-height: 60px;
  font-size: 17px;
  z-index: 999;
}
.product-list.product .product-info .name {
  font-size: 20px;
}
.product-list.product .product-info .description {
  line-height: 20px;
}
.single-product .gallery-holder #owl-single-product .single-product-gallery-item {
  border: 1px solid #e5e5e5;
}
.single-product .gallery-holder .gallery-thumbs {
  margin: 15px 0 0;
  position: relative;
  text-align: left;
}
.single-product .gallery-holder .gallery-thumbs .owl-item .item {
  margin-right: 10px;
  border: 1px solid #e5e5e5;
}
.single-product .product-info .name {
  font-size: 20px;
  line-height: 18px;
  font-family: 'FjallaOneRegular';
  color: #555;
  margin-top: 5px;
}
.single-product .product-info .rating-reviews .reviews .lnk {
  color: #aaaaaa;
}
.single-product .product-info .stock-container .stock-box .label {
  font-size: 16px;
  font-family: 'FjallaOneRegular';
  line-height: 18px;
  text-transform: uppercase;
  color: #666666;
  padding: 0px;
  font-weight: normal;
}
.single-product .product-info .stock-container .stock-box .value {
  font-size: 14px;
  color: #ff7878;
}
.single-product .product-info .description-container {
  line-height: 20px;
  color: #666666;
}
.single-product .product-info .price-container {
  border-bottom: 1px solid #F2F2F2;
  border-top: 1px solid #F2F2F2;
  margin-bottom: 0;
  padding: 20px 0;
}
.single-product .product-info .price-container .price-box .price {
  font-size: 36px;
  font-weight: 700;
  line-height: 50px;
}
.single-product .product-info .price-container .price-box .price-strike {
  color: #aaa;
  font-size: 16px;
  font-weight: 300;
  line-height: 50px;
  text-decoration: line-through;
}
.single-product .product-info .quantity-container {
  border-bottom: 1px solid #F2F2F2;
  margin-bottom: 0;
  padding: 20px 0;
}
.single-product .product-info .quantity-container .label {
  font-size: 16px;
  font-family: 'FjallaOneRegular';
  line-height: 40px;
  text-transform: uppercase;
  color: #666666;
  padding: 0px;
  font-weight: normal;
}
.single-product .product-info .quantity-container .cart-quantity .quant-input {
  display: inline-block;
  height: 35px;
  position: relative;
  width: 70px;
}
.single-product .product-info .quantity-container .cart-quantity .quant-input .arrows {
  position: absolute;
  right: 0;
  top: 0;
  z-index: 2;
  height: 100%;
}
.single-product .product-info .quantity-container .cart-quantity .quant-input .arrows .arrow {
  box-sizing: border-box;
  display: block;
  text-align: center;
  width: 40px;
  cursor: pointer;
}
.single-product .product-info .quantity-container .cart-quantity .quant-input .arrows .arrow .ir .icon {
  position: relative;
}
.single-product .product-info .quantity-container .cart-quantity .quant-input .arrows .arrow .ir .icon.fa-sort-asc {
  top: 5px;
}
.single-product .product-info .quantity-container .cart-quantity .quant-input .arrows .arrow .ir .icon.fa-sort-desc {
  top: -7px;
}
.single-product .product-info .quantity-container .cart-quantity .quant-input input {
  background: none repeat scroll 0 0 #fff;
  border: 1px solid #f2f2f2;
  box-sizing: border-box;
  font-size: 15px;
  height: 35px;
  left: 0;
  padding: 0 20px 0 18px;
  position: absolute;
  top: 0;
  width: 70px;
  z-index: 1;
}
.single-product .product-info .product-social-link .social-label {
  font-size: 15px;
  font-family: 'FjallaOneRegular';
  line-height: 20px;
  text-transform: uppercase;
}
.single-product .product-info .product-social-link .social-icons {
  display: inline-block;
}
.single-product .product-info .product-social-link .social-icons ul li a {
  color: #888888;
  font-size: 16px;
  -webkit-transition: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
  padding: 5px 6px;
}
.single-product .product-info .product-social-link .social-icons ul li a:hover,
.single-product .product-info .product-social-link .social-icons ul li a:focus {
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  border-radius: 50px;
  color: #fff;
}
.single-product .product-tabs {
  margin-top: 60px;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li {
  float: none !important;
  border-bottom: 1px solid #f2f2f2;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li > a {
  border: none;
  color: #555;
  display: block;
  padding: 12px 28px;
  font-size: 18px;
  font-family: 'FjallaOneRegular';
  line-height: 28px;
  text-transform: uppercase;
  position: relative;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li > a:hover,
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li > a:focus {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  color: #fff;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li > a:hover:before,
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li > a:focus:before {
  border-color: rgba(0, 0, 0, 0) #e0e0e0 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
  right: -10px;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li > a:hover:after,
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li > a:focus:after {
  border-style: solid;
  border-width: 7.5px 1px 7.5px 10px;
  content: "";
  height: 0;
  position: absolute;
  top: 20px;
  width: 0;
  right: -8px;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li.active > a {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  color: #fff;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li.active > a:before {
  border-color: rgba(0, 0, 0, 0) #e0e0e0 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
  right: -10px;
}
.single-product .product-tabs .nav.nav-tabs.nav-tab-cell > li.active > a:after {
  border-style: solid;
  border-width: 7.5px 1px 7.5px 10px;
  content: "";
  height: 0;
  position: absolute;
  top: 20px;
  width: 0;
  right: -8px;
}
.single-product .product-tabs .tab-content {
  border: 1px solid #f2f2f2;
}
.single-product .product-tabs .tab-content .tab-pane {
  padding: 24px;
}
.single-product .product-tabs .tab-content .tab-pane .text {
  line-height: 20px;
}
.single-product .upsell-product .product .product-info .name {
  margin-top: 20px;
  font-size: 16px;
}
.single-product #owl-single-product-thumbnails .owl-controls {
  position: absolute;
  text-align: center;
  top: auto;
  width: 100%;
  margin-top: 10px;
}
.single-product #owl-single-product-thumbnails .owl-controls .owl-pagination .owl-page {
  display: inline-block;
}
.single-product #owl-single-product-thumbnails .owl-controls .owl-pagination .owl-page span {
  background: none repeat scroll 0 0 #ddd;
  border: medium none;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  display: block;
  height: 12px;
  margin: 0 5px;
  -webkit-transition: all 200ms ease-out 0s;
  -moz-transition: all 200ms ease-out 0s;
  -o-transition: all 200ms ease-out 0s;
  transition: all 200ms ease-out 0s;
  width: 12px;
  cursor: pointer;
}
.single-product .sidebar .sidebar-module-container .sidebar-widget .section-title {
  margin-top: 0px;
}
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder {
  background-color: #FFFFFF;
  height: 100%;
  position: absolute;
  top: 0;
  width: 30px;
  z-index: 50;
}
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder.left {
  left: 0px;
}
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder.right {
  right: 0;
}
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder .prev-btn {
  left: 0;
}
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder .prev-btn:after {
  content: "\f104";
}
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder .next-btn {
  right: 0px;
}
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder .next-btn:after {
  content: "\f105";
}
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder .prev-btn,
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder .next-btn {
  background-color: #fff;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  display: inline-block;
  height: 100%;
  position: absolute;
  vertical-align: top;
  width: 90%;
  z-index: 100;
  border: 1px solid #e5e5e5;
  color: #dadada;
}
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder .prev-btn:after,
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder .next-btn:after {
  bottom: 0;
  font-family: fontawesome;
  font-size: 30px;
  height: 30px;
  left: 0;
  line-height: 30px;
  margin: auto;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
}
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder .prev-btn:hover,
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder .next-btn:hover,
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder .prev-btn:focus,
.cnt-homepage .single-product .single-product-gallery .gallery-thumbs .nav-holder .next-btn:focus {
  background: #dadada;
  color: #fff;
}
.cnt-homepage .single-product .single-product-gallery .owl-item .single-product-gallery-item > a > img {
  display: block;
  width: 100%;
}
.cnt-homepage .single-product .single-product-gallery .owl-item .single-product-gallery-thumbs.gallery-thumbs .owl-item {
  margin-left: 10px;
}
.cnt-homepage .single-product .product-info-block label,
.cnt-homepage .single-product .product-info-block .label {
  font-size: 13px;
  font-weight: normal;
  line-height: 30px;
  color: #434343 !important;
}
.cnt-homepage .single-product .product-info-block .label {
  padding: 0px;
}
.cnt-homepage .single-product .product-info-block .cart {
  width: auto;
  left: 0;
  margin-top: -8px;
  padding: 0px;
}
.cnt-homepage .single-product .product-info-block .cart .action .left {
  padding: 2px 8px;
  margin-left: 5px;
}
.cnt-homepage .single-product .product-info-block .form-control .selectpicker {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 1px solid #f1f1f1;
  background: #fff;
  color: #b0b0b0;
}
.cnt-homepage .single-product .product-info-block .form-control .dropdown-menu {
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  border: 1px solid #f1f1f1;
}
.cnt-homepage .single-product .product-info-block .form-control .dropdown-menu ul li a:hover,
.cnt-homepage .single-product .product-info-block .form-control .dropdown-menu ul li a:focus {
  background: rgba(0, 0, 0, 0);
}
.cnt-homepage .single-product .product-info-block .txt.txt-qty {
  font-size: 15px;
  line-height: 18px;
  border: 1px solid #f1f1f1;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  height: 30px;
  padding: 5px 10px;
  text-align: center;
  width: 60px;
}
.cnt-homepage .single-product .product-info-block .stock-container .stock-box .label {
  color: #434343;
  font-family: 'Roboto';
  font-size: 13px;
  font-weight: normal;
  line-height: 20px;
  padding: 0;
  text-transform: none;
}
.cnt-homepage .single-product .product-info-block .stock-container .stock-box .value {
  font-size: 13px;
}
.cnt-homepage .single-product .product-tabs .nav-tab-cell-detail li {
  margin-right: 10px;
  padding: 0;
}
.cnt-homepage .single-product .product-tabs .nav-tab-cell-detail li a {
  border: 2px solid #e1e1e1;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  color: #666666;
  font-family: 'FjallaOneRegular';
  font-size: 20px;
  line-height: 30px;
  padding-bottom: 4px;
  padding-top: 4px;
  text-transform: uppercase;
}
.cnt-homepage .single-product .product-tabs .nav-tab-cell-detail li a:hover,
.cnt-homepage .single-product .product-tabs .nav-tab-cell-detail li a:focus {
  color: #fff;
}
.cnt-homepage .single-product .product-tabs .nav-tab-cell-detail li.active a {
  color: #fff;
}
.cnt-homepage .single-product .product-tabs .tab-content {
  border: none;
}
.cnt-homepage .single-product .product-tabs .tab-content .tab-pane {
  padding: 0px;
}
.cnt-homepage .single-product .product-tabs .tab-content .tab-pane .product-tab .text {
  font-size: 13px;
  line-height: 22px;
}
.single-product .second-gallery-thumb.gallery-thumbs {
  padding: 0 40px;
}
.single-product .second-gallery-thumb.gallery-thumbs #owl-single-product2-thumbnails .owl-wrapper-outer {
  margin-left: 5px;
}
.product-tabs .tab-content .tab-pane .product-reviews .title {
  color: #666666;
  font-size: 16px;
  font-weight: 500;
  line-height: 20px;
  margin: 0 0 10px;
  text-transform: uppercase;
  font-family: 'FjallaOneRegular';
}
.product-tabs .tab-content .tab-pane .product-reviews .reviews .review {
  margin-bottom: 20px;
  font-family: 'Roboto', sans-serif;
  text-transform: none;
}
.product-tabs .tab-content .tab-pane .product-reviews .reviews .review .review-title {
  margin-bottom: 5px;
}
.product-tabs .tab-content .tab-pane .product-reviews .reviews .review .review-title .summary {
  color: #666666;
  font-size: 14px;
  font-weight: 300;
  line-height: 45px;
  margin-right: 10px;
  text-transform: uppercase;
}
.product-tabs .tab-content .tab-pane .product-reviews .reviews .review .review-title .date {
  font-size: 12px;
}
.product-tabs .tab-content .tab-pane .product-reviews .reviews .review .review-title .date span {
  margin-left: 5px;
}
.product-tabs .tab-content .tab-pane .product-reviews .reviews .review .text {
  line-height: 18px;
}
.product-tabs .tab-content .tab-pane .product-reviews .reviews .review .author span {
  margin-left: 5px;
}
.product-tabs .tab-content .tab-pane .product-add-review .title {
  color: #666666;
  font-size: 16px;
  font-weight: 500;
  line-height: 20px;
  margin: 0 0 20px;
  text-transform: uppercase;
  font-family: 'FjallaOneRegular';
}
.product-tabs .tab-content .tab-pane .product-add-review .review-table .table thead th {
  font-weight: normal;
  border-bottom-width: 1px;
  text-align: center;
  vertical-align: middle;
}
.product-tabs .tab-content .tab-pane .product-add-review .review-table .table tbody tr td {
  text-align: center;
  vertical-align: middle;
}
.product-tabs .tab-content .tab-pane .product-add-review .review-table .table tbody tr td input {
  float: none;
  margin: auto;
}
.product-tabs .tab-content .tab-pane .product-add-review .review-form label {
  font-weight: normal;
  font-size: 13px;
}
.product-tabs .tab-content .tab-pane .product-add-review .review-form label .astk {
  color: #FF0000;
  font-size: 12px;
}
.product-tabs .tab-content .tab-pane .product-add-review .review-form .txt {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.product-tabs .tab-content .tab-pane .product-tag .title {
  color: #666666;
  font-size: 16px;
  font-weight: 500;
  line-height: 20px;
  margin: 0 0 20px;
  text-transform: uppercase;
  font-family: 'FjallaOneRegular';
}
.product-tabs .tab-content .tab-pane .product-tag .form-group label {
  font-weight: 300;
  font-size: 14px;
  line-height: 24px;
  margin-right: 10px;
}
.product-tabs .tab-content .tab-pane .product-tag .form-group .txt {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.product-tabs .tab-content .tab-pane .product-tag .form-group .text {
  margin-left: 90px;
}
.furniture-container .product {
  position: relative;
}
.furniture-container .product .btn-primary {
  font-size: 15px;
  line-height: 30px;
  font-family: 'FjallaOneRegular';
  background: #cbc9c9;
  text-transform: uppercase;
  border: none;
  color: #fff;
}
.furniture-container .product .btn-primary:hover,
.furniture-container .product .btn-primary:focus {
  border: none;
}
.furniture-container .best-seller .product .product-info .name,
.furniture-container .special-offer .product .product-info .name {
  margin-top: 4px;
}
.furniture-container .cart {
  margin-top: 5px;
  opacity: 1;
  -webkit-transition: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -ms-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
  width: 100%;
  z-index: 666;
  left: 0px;
}
.furniture-container .cart .action {
  float: left;
}
.furniture-container .cart .action .add-cart-button .btn.btn-primary.icon {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  background: #575757 ;
}
.furniture-container .cart .action.lnk {
  margin: 10px 0px;
}
.furniture-container .cart .action.lnk a {
  padding: 0 10px;
  color: #dadada;
}
.furniture-container .cart .action.lnk.wishlist {
  border-right: 1px solid #dadada;
}
.homepage-container .product {
  position: relative;
}
.homepage-container .product .product-image .tag {
  font-size: 15px;
  font-weight: 700;
  width: 50px;
  height: 50px;
  text-transform: uppercase;
  top: 2.5%;
  z-index: 100;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  border-radius: 50px;
  color: #fff;
  right: 25px;
  /*11px;*/
  text-align: center;
  position: absolute;
}
.homepage-container .product .product-image .tag span {
  position: relative;
  z-index: 100;
  line-height: 48px;
}
.homepage-container .product .product-image .tag.new {
  background: #46aad7;
}
.homepage-container .product .product-image .tag.hot {
  background: #ff7878;
}
.homepage-container .product .product-info .name {
  font-size: 18px !important;
  font-family: 'FjallaOneRegular';
}
.homepage-container .product .product-info .name a {
  color: #555;
}
.homepage-container .product .product-info .star-rating .color {
  color: #ffb400;
}
.homepage-container .product .product-info .product-price .price {
  font-weight: 700;
  font-size: 16px;
  line-height: 30px;
  margin-right: 8px;
}
.homepage-container .product .product-info .product-price .price-before-discount {
  text-decoration: line-through;
  color: #d3d3d3;
  font-weight: 400;
  line-height: 30px;
  font-size: 14px;
}
.homepage-container .product .cart {
  margin-top: 5px;
  -webkit-transition: all 0.2s linear 0s;
  -moz-transition: all 0.2s linear 0s;
  -o-transition: all 0.2s linear 0s;
  transition: all 0.2s linear 0s;
  width: 100%;
  z-index: 666;
  left: 0px;
  opacity: 1;
}
.homepage-container .product .cart .action {
  float: left;
}
.homepage-container .product .cart .action .add-cart-button .btn.btn-primary.icon {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  background: #575757 ;
}
.homepage-container .product .cart .action.lnk {
  margin: 10px 0px;
}
.homepage-container .product .cart .action.lnk a {
  padding: 0 10px;
  color: #dadada;
}
.homepage-container .product .cart .action.lnk.wishlist {
  border-right: 1px solid #dadada;
}
.homepage-container .featured-product .products .product:first-child {
  margin-bottom: 30px;
}
.homepage-container .blog-slider-container .blog-slider .blog-post-info .name {
  font-size: 18px;
}
</style>
        <div class="header-margin"></div>
		    <div class="homepage-container">
			    <div class='row single-product outer-bottom-sm'>
				    <div class='col-md-7'>
					    <div class="row  wow fadeInUp">
						    <div class="col-xs-12 col-sm-12 col-md-12 gallery-holder">
                                <div class="product-item-holder size-big single-product-gallery small-gallery">
                                    <div id="owl-single-product">
                                        <div class="single-product-gallery-item" id="slide1">
                                            <a data-lightbox="image-1" data-title="Gallery" href="assets/images/fashion-products/d1.jpg">
                                                <img class="img-responsive" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->

                                        <div class="single-product-gallery-item" id="slide2">
                                            <a data-lightbox="image-1" data-title="Gallery" href="assets/images/fashion-products/d1.jpg">
                                                <img class="img-responsive" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->

                                        <div class="single-product-gallery-item" id="slide3">
                                            <a data-lightbox="image-1" data-title="Gallery" href="assets/images/fashion-products/d1.jpg">
                                                <img class="img-responsive" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->

                                        <div class="single-product-gallery-item" id="slide4">
                                            <a data-lightbox="image-1" data-title="Gallery" href="assets/images/fashion-products/d1.jpg">
                                                <img class="img-responsive" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->

                                        <div class="single-product-gallery-item" id="slide5">
                                            <a data-lightbox="image-1" data-title="Gallery" href="assets/images/fashion-products/d1.jpg">
                                                <img class="img-responsive" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->

                                        <div class="single-product-gallery-item" id="slide6">
                                            <a data-lightbox="image-1" data-title="Gallery" href="assets/images/fashion-products/d1.jpg">
                                                <img class="img-responsive" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                            </a>
                                        </div>
                                        <div class="single-product-gallery-item" id="slide7">
                                            <a data-lightbox="image-1" data-title="Gallery" href="assets/images/fashion-products/d1.jpg">
                                                <img class="img-responsive" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                            </a>
                                        </div>
                                        <div class="single-product-gallery-item" id="slide8">
                                            <a data-lightbox="image-1" data-title="Gallery" href="assets/images/fashion-products/d1.jpg">
                                                <img class="img-responsive" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                            </a>
                                        </div>
                                        <div class="single-product-gallery-item" id="slide9">
                                            <a data-lightbox="image-1" data-title="Gallery" href="assets/images/fashion-products/d1.jpg">
                                                <img class="img-responsive" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single-product-gallery-thumbs second-gallery-thumb gallery-thumbs">
                                        <div id="owl-single-product2-thumbnails">
                                    <div class="item">
                                        <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1">
                                            <img class="img-responsive" width="85" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                        </a>
                                    </div>
                                    <div class="item">

                                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                                            <img class="img-responsive" width="85" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}"/>
                                        </a>
                                    </div>
                                    <div class="item">

                                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                                            <img class="img-responsive" width="85" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                        </a>
                                    </div>
                                    <div class="item">

                                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide4">
                                            <img class="img-responsive" width="85" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                        </a>
                                    </div>
                                    <div class="item">

                                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide5">
                                            <img class="img-responsive" width="85" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                        </a>
                                    </div>
                                    <div class="item">

                                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide6">
                                            <img class="img-responsive" width="85" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                        </a>
                                    </div>
                                    <div class="item">

                                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide7">
                                            <img class="img-responsive" width="85" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                        </a>
                                    </div>
                                    <div class="item">

                                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide8">
                                            <img class="img-responsive" width="85" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                        </a>
                                    </div>
                                    <div class="item">

                                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide9">
                                            <img class="img-responsive" width="85" alt="" src="{{asset('front/images/detail_image.jpg')}}" data-echo="{{asset('front/images/detail_image.jpg')}}" />
                                        </a>
                                    </div>
                                </div><!-- /#owl-single-product-thumbnails -->
                                <div class="nav-holder left">
                                        <a class="prev-btn slider-prev" data-target="#owl-single-product2-thumbnails" href="#prev"></a>
                                </div><!-- /.nav-holder -->
                                <div class="nav-holder right">
                                    <a class="next-btn slider-next" data-target="#owl-single-product2-thumbnails" href="#next"></a>
                                </div><!-- /.nav-holder -->
						    </div><!-- /.gallery-thumbs -->

					    </div><!-- /.single-product-gallery -->
				    </div><!-- /.gallery-holder -->	       
                    <div class="col-md-12 col-sm-12">
                        <h3>Description</h3><hr>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, accusantium
                         a quae suscipit hic incidunt optio praesentium 
                         nesciunt eum ab? Laudantium id tempore consectetur 
                         aspernatur eveniet iusto corrupti soluta omnis
                    </div> 			
			    </div>
		    </div>
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail border-radius-none padding-none">
                    <h1 class="bold text-center"><span class="cool-green bold">$</span>24.63</h1>
                    <hr>
                    <div class="caption">
                        <h5 class="bold">
                            <span class="label label-success background-cool-green">
                            <i class="fa fa-check"></i></span>&nbsp; &nbsp;Name Product Label
                        </h5>
                        <p class="gray"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. just simple data Lorem ipsum dolor sit amet, consectetur adipisicing elit. just simple dataLorem ipsum dolor sit amet, consectetur adipisicing elit. just simple data</small></p><hr>
                            <div class="input-group">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                                <span class="glyphicon glyphicon-minus"></span>
                                </button>
                            </span>
                            <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="100">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </span>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <button class="btn btn-default btn-default-custom" style="width: 100%;">
                                    <p class="margin-button-none">Add To Cart</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thumbnail border-radius-none padding-none">
                    <h4 class="bold text-center"><span class="cool-green bold">Shop Name</span></h4>
                    <hr>
                    <img src="{{asset('front/images/pixel_m.jpg')}}">
                    <div class="caption">
                        <h6>
                            I sale product online 
                            with mastermalls.com 
                            you can make order but
                            can't cancel after order 
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection