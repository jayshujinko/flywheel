<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Flywheel Advisory</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="
    At Flywheel Advisory, we are passionate about providing financial crime risk management solutions to our clients, not only to ensure compliance with regulatory requirements but to also safeguard the very core of their enterprise.">
    <meta name="author" content="">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content="Flywheel Advisory"/> <!-- title shown in the actual shared post -->
    <meta name="thumbnail" content="{{ URL::to('/') }}/img/meta-image.jpg"/>
	<meta property="og:description" content="At Flywheel Advisory, we are passionate about providing financial crime risk management solutions to our clients, not only to ensure compliance with regulatory requirements but to also safeguard the very core of their enterprise." /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="{{ URL::to('/') }}/img/meta-image.jpg" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />


    <meta name="twitter:title" content="Flywheel Advisory">
    <meta name="twitter:description" content="
    At Flywheel Advisory, we are passionate about providing financial crime risk management solutions to our clients, not only to ensure compliance with regulatory requirements but to also safeguard the very core of their enterprise.
    ">
    <meta name="twitter:image" content="{{ URL::to('/') }}/img/meta-image.jpg>
    <meta name="twitter:card" content="summary_large_image">

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
  
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/addition.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}"> -->
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

    <link rel="icon" href="img/favicon.png">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap">
      
      </div>
      
      @inject('menus', 'App\Menu')
      @inject('articles', 'App\Article')
      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-2">
              <h1 class="my-0 site-logo"><a href="{{ URL::to('/') }}"><div ><img id="header_logo" src="" /></a></div></h1>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">


                  @foreach($menus::where('status',1)->get() as $menu)
                    @if($articles::where('status',1)->where('page_id',$menu->id)->count() > 0)
                      <li class="has-children">
                        <a href="#" class="nav-link">{{ucfirst($menu->title)}}</a>
                        
                          <ul class="dropdown arrow-top">
                            @foreach($articles::where('page_id',$menu->id)->where('status',1)->get() as $article)
                              <li><a 
                                 href="{{route('pages',[$menu->menu_link,$article->link])}}" 
                                 class="nav-link" style="font-size:14px">{{ucfirst($article->title)}}</a></li>
                             
                            @endforeach
                          </ul>
                        
                      </li>

                    @else
                      <li>
                        <a href="{{route('pages',[$menu->menu_link,''])}}" class="nav-link">{{ucfirst($menu->title)}}</a>
                      </li>
                    @endif
                  @endforeach
                    

                    <!-- <li>
                      <a href="#" class="nav-link">Contact Us</a>
                    </li> -->

                    
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>