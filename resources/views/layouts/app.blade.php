<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Search used cars for sale to get the best local deals in Chicago and Little Village. We have hundreds of used cars for sale to fit your budget."/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
    <style>
        .btn, 
        .nav-tabs > li.active > a, 
        .nav-tabs > li.active > a:focus, 
        .nav-tabs > li.active > a:hover, 
        .recent-tab .nav.nav-tabs li.active a, 
        .fun-facts-m .vc_column-inner, .featured-icon, 
        .owl-pagination .owl-page.active,
        #testimonial-slider .owl-pagination .owl-page.active, 
        .social-follow.footer-social a:hover, 
        .back-top a, 
        .team_more_info ul li a:hover, 
        .tag_list ul li a:hover, 
        .pagination ul li.current, 
        .pagination ul li:hover,
        .btn.outline:hover, 
        .btn.outline:focus, 
        .share_article ul li:hover, 
        .nav-tabs > li a:hover, 
        .nav-tabs > li a:focus, 
        .label-icon, 
        .navbar-default .navbar-toggle .icon-bar, 
        .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover, 
        .label_icon, 
        .navbar-nav > li > .dropdown-menu, 
        .add_compare .checkbox, 
        .search_other, 
        .vs, 
        .td_divider, 
        .search_other_inventory, 
        #other_info, 
        .main_bg, 
        .slider .slider-handle, .slider .slider-selection, .listing_detail_wrap .nav-tabs > li.active a, .listing_detail_wrap .nav-tabs > li:hover a, input[type="submit"], .owl-carousel .owl-dot.active {
          background: #fa2837 none repeat scroll 0 0;
          fill: #fa2837;
        }
        a, .btn-link, .car-title-m h6 a:hover, .featured-car-content > h6 a:hover, .get-intouch a:hover, .blog-content h5 a:hover, .blog-info-box li a:hover, .control-label span, .angle_arrow i, .contact_detail li a:hover, .team_more_info p a:hover, .error_text_m h2, .search_btn, .popular_post_title a:hover, .categories_list ul li a:hover, .categories_list ul li a:hover::after, .article_meta ul li a:hover, .articale_header h2 a:hover, .btn.outline, .share_article ul li, .contact-info a:hover, .social-follow a:hover, .radio input[type="radio"]:checked + label::before, .checkbox input[type="checkbox"]:checked + label::before, .product-listing-content h5 a:hover, .pricing_info .price, .text-primary, .footer_widget ul li a:hover, button:hover, .header_widgets a:hover, .navbar-default .navbar-nav > li.active a, .navbar-default .navbar-nav > li:focus a, .navbar-default .navbar-nav > li:hover a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover, .my_vehicles_list ul.vehicle_listing li a:hover, .dealer_contact_info a:hover, .widget_heading i, .dealers_listing .dealer_info h5 a:hover, .main_features ul li p, .listing_detail_head .price_info p, .listing_other_info button:hover, .compare_info table td i, .compare_info table th i, #accessories i, .price, .inventory_info_list ul li i, .services_info h4 a:hover, .about_info .icon_box, .header_style2 .navbar-nav > li > .dropdown-menu a:hover, .header_style2 .navbar-default .navbar-nav li:hover .dropdown-menu li a:hover, .header_style2 .dropdown-menu > .active > a, .header_style2 .dropdown-menu > .active > a:focus, .header_style2 .dropdown-menu > .active > a:hover, .header_style2 .dropdown-menu > li > a:focus, .header_style2 .dropdown-menu > li > a:hover, a:hover, a:focus, .btn-link:hover, .sidebar_widget ul li a:hover, .sidebar_widget ul#recentcomments li a{
            
        color:#fa2837;
            fill:#fa2837;	
            
            }
        
        
        .btn:hover, .btn:focus, 
        .search_other:hover, 
        #other_info:hover {
            background-color: #c60210;
            fill: #c60210;
        }
        
        .nav-tabs > li.active > a, 
        .nav-tabs > li.active > a:focus, 
        .nav-tabs > li.active > a:hover, 
        .social-follow.footer-social a:hover, 
        .page-header, 
        .tag_list ul li a:hover, 
        .btn.outline, 
        .share_article ul li, 
        blockquote, 
        .social-follow a:hover, 
        .radio label:before,  
        .navbar-default .navbar-toggle, 
        .owl-buttons div, 
        .about_info .icon_box {
            border-color: #fa2837;
        }
        
        .recent-tab .nav.nav-tabs li.active::after {
            border-color: #fa2837 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
        }
        .td_divider:after {
            border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0 ) rgba(0, 0, 0, 0 ) #fa2837 ;
        }
        
        .navbar-nav > li > .dropdown-menu li {
          border-bottom: 1px solid #fa2837;
        }
        
        .payment-price.form-control {
          border: 1px solid #fa2837 !important;
          color: #fa2837 !important;
        }
        
        @media (max-width:767px) {
        .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {
            color:#fa2837;	
        }
        }
        </style>
</head>
<body>
    <header>

        <div class="default-header">
      
          <div class="container">
      
            <div class="row">
      
              <div class="col-sm-3 col-md-2 abc">
      
                <div class="logo">
      
                  <a  href="/" title="CarForYou" rel="home" ><img src="https://img1.wsimg.com/isteam/ip/3370728f-fd8d-4ac6-a2ad-642ff72220e3/79504201_2167061860267645_9138594368888766464_.jpg/:/rs=w:150,h:150" alt="image"></a>
                </div>
      
              </div>
      
              <div class="col-sm-9 col-md-10">
      
                <div class="header_info">
      
                  
                    
                  
                          <div class="header_widgets">
      
                            
                            <div class="circle_icon d-flex justify-content-center align-items-center"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
      
                            
                            
                            <p class="uppercase_text">Call Us:</p>
      
                            
                            
                            <a href="tel:+61-1234-5678-9">+61-1234-5678-9</a>
      
                            
                          </div>
      
                  
                          <div class="social-follow">
      
                            <ul>
      
                              
                              <li><a href="https://www.facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
      
                              
                              
                            </ul>
      
                          </div>
      
                  
                </div>
      
              </div>
      
            </div>
      
          </div>
      
        </div>
      
        
      
        <!-- Navigation -->
      
        
      
        <nav id="navigation_bar" class="navbar navbar-default">
      
          <div class="container">
      
            <div class="navbar-header">
      
              <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">
      
              
              </span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      
            </div>
      
            <div class="collapse navbar-collapse" id="navigation">
      
              <div class="menu-main-menu-container"><ul id="menu-main-menu" class="nav navbar-nav"><li id="menu-item-1188" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1188"><a title="" href="/">Home</a>
      
      </li>
      
      <li id="menu-item-1204" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1204"><a title="" href="/contact">Contact Us</a></li>
      </ul></div>
              
                
      
                 
      
                
      
            </div>
      
            
      
          </div>
      
        </nav>
      
        
      
        <!-- Navigation end --> 
      
        
      
      </header>
      
      <!-- /Header -->
    @yield('content')

 <!--Footer -->
 <footer>
        
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-6 text-right">
                              <div class="footer_widget">
                                          <p>Connect with Us:</p>
                                          <ul>
                                            <li><a href="https://www.facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                          </ul>
                    </div>
                    </div>
                  <div class="col-md-6 col-md-pull-6">
            <p class="copy-right">
              Copyright © {{ date('Y') }} <a>Maro's auto sales</a> All Rights Reserved</p>
          </div>
                </div>
      </div>
    </div>
  </footer>
  <!-- /Footer--> 
</body>
</html>


{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}
