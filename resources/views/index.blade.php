<!DOCTYPE html>
<html lang="{{ $locale }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $meta['description'] }}">
    <meta name="keywords" content="{{ $meta['keywords'] }}">
    <meta name="og:title" property="og:title" content="{{ $meta['title'] }}">
    <meta name="og:description" property="og:description" content="{{ $meta['description'] }}">
    <meta name="og:image" property="og:image" content="{{ $meta['image'] }}">
    @csrf
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pinyon+Script" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles-merged.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}">
    <link rel="icon" href="/storage/data/images/empon-favicon.png" sizes="16x16" type="image/png">

  </head>
  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/" title="uiCookies:FineOak">FineOak</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="{{ $menu['wellcome']['href'] }}" data-nav-section="welcome">{{ $menu['wellcome']['title'] }}</a></li>
            <li><a href="{{ $menu['ingredients']['href'] }}" data-nav-section="ingredients">{{ $menu['ingredients']['title'] }}</a></li>
            {{-- <li><a href="#" data-nav-section="menu">Menu</a></li> --}}
            {{-- <li><a href="#" data-nav-section="reservation">Reservation</a></li> --}}
            <li><a href="{{ $menu['marketplace']['href'] }}" data-nav-section="marketplace">{{ $menu['marketplace']['title'] }}</a></li>
            <li><a href="{{ $menu['contact']['href'] }}" data-nav-section="contact">{{ $menu['contact']['title'] }}</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="flexslider" data-section="welcome">
      <ul class="slides">
        @foreach ($slides as $slide)
          <li style="background-image: url({{ $slide->image}})" class="overlay" data-stellar-background-ratio="0.5">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                    <h3 class="primary-heading">{{ $slide->title_primary }}</h3>
                    <h1 class="secondary-heading">{{ $slide->title_secondary }}</h1>
                    {{-- <p class="sub-heading">A free bootstrap website template by <a href="https://uicookies.com">uicookies.com</a></p> --}}
                    <p class="sub-heading">{{ $slide->title_sub }}</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
        @endforeach
      </ul>
    </section>

    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-5 text-center probootstrap-animate">
            <div class="probootstrap-heading dark">
              <h1 class="primary-heading">{{ $description->title }}</h1>
              <h3 class="secondary-heading">{{ $description->title_sub }}</h3>
              <span class="seperator">* * *</span>
            </div>
            <p>{{ $description->content }}</p>
            {{-- <p><a href="#" class="probootstrap-custom-link">About Us</a></p> --}}
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">
            <p><img src="{{ $description->image }}" alt="{{ $description->image }}" class="img-responsive"></p>
          </div>
        </div>
        <!-- END row -->
      </div>
    </section>
    
    @include('sections.ingredients')
    {{-- @include('section.menu') --}}
    {{-- @include('section.reservation') --}}
    @include('sections.marketplace')
    @include('sections.contact')

    
    <section class="probootstrap-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <ul class="probootstrap-footer-social left">
              <li><a target="blank" href="https://twitter.com/empon_empon"><i class="icon-twitter"></i></a></li>
              <li><a target="blank" href="https://facebook.com/empon_empon"><i class="icon-facebook"></i></a></li>
              <li><a target="blank" href="https://instagram.com/empon_empon"><i class="icon-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <p class="copyright-text">&copy; 2020 <a href="https://farindra.com/">farindra</a>. All Rights Reserved. Images by <a href="https://instagram.com/intan">Intan</a></p>
          </div>
        </div>
      </div>
    </section>

    @include('sections.whatsapp')
   
    <script src="{{ asset( 'js/scripts.min.js') }}"></script>
    <script src="{{ asset( 'js/custom.min.js') }}"></script>
    <script src="{{ asset( 'js/whatsapp.js') }}"></script>
    </script>

  </body>
</html>