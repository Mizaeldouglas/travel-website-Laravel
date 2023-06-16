<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{$titlePage ?? 'Home'}}</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/fontAwesome.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/hero-slider.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">


    <script src="{{url('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body>
<main>
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="{{route('home')}}"><div class="logo">
                                <img src="{{url('assets/img/seuLogo.png')}}" alt="Venue Logo" style="width: 150px;height: 90px;">
                            </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu" >
                                <li class='{{ Request::routeIs('home') ? " active" : "" }}'><a href="{{route('home')}}">Home</a></li>
                                <li class='{{ Request::routeIs('packages') ? " active" : "" }}'><a href="{{route('packages')}}">Packages</a></li>
                                <li class='{{ Request::routeIs('blog') ? " active" : "" }}'><a href="{{route('blog')}}">Blog</a></li>
                                <li>
                                    <a href="#">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="terms.html">Terms</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
    {{$slot}}
</main>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="about-veno">
                    <div class="logo">
                        <img src="{{url('assets/img/seuLogo.png')}}" alt="Venue Logo" style="width: 150px;height: 100px;">
                    </div>
                    <p>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellustea dictumst.</p>
                    <ul class="social-icons">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="useful-links">
                    <div class="footer-heading">
                        <h4>Useful Links</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><a href="{{route('home')}}"><i class="fa fa-stop"></i>Home</a></li>
                                <li><a href="{{route('home')}}"><i class="fa fa-stop"></i>About</a></li>
                                <li><a href="{{route('home')}}"><i class="fa fa-stop"></i>Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><a href="{{route('packages')}}"><i class="fa fa-stop"></i>Packages</a></li>
                                {{--                                <li><a href="testimonials.html"><i class="fa fa-stop"></i>Testimonials</a></li>--}}
                                <li><a href="{{route('blog')}}l"><i class="fa fa-stop"></i>Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-info">
                    <div class="footer-heading">
                        <h4>Contact Information</h4>
                    </div>
                    <p><i class="fa fa-map-marker"></i> 212 Barrington Court New York, ABC</p>
                    <ul>
                        <li><span>Phone:</span><a href="#">+1 333 4040 5566</a></li>
                        <li><span>Email:</span><a href="#">contact@company.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="sub-footer">
    <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="{{url('assets/js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>

<script src="{{url('assets/js/vendor/bootstrap.min.js')}}"></script>

<script src="{{url('assets/js/datepicker.js')}}"></script>
<script src="{{url('assets/js/plugins.js')}}"></script>
<script src="{{url('assets/js/main.js')}}"></script>
</body>
</html>
