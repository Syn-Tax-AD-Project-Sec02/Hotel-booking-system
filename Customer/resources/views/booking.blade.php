<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Scholars Inn</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('dist/assets/css/cssIndex/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('dist/assets/css/cssIndex/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('dist/assets/css/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="cssIndex/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('dist/assets/images/index/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img
                                            src="{{ asset('dist/assets/images/index/rsz_utm_logo.jpg') }}"
                                            alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="room.html">Our room</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="gallery.html">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.html">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact Us</a>
                                    </li>
                                    <!-- Conditional Rendering Based on Auth Status -->
                                    @if (Auth::check())
                                        <!-- User is logged in -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-user"></i> {{ Auth::user()->name }}
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('profileForm') }}">Profile</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @else
                                        <!-- User is not logged in -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">Registration</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    {{-- <section class="banner_main">
        <header class="homepage">
            <h1>Booking</h1>
        </header>
    </section> --}}
    <!-- end banner -->

    <div class="back_re">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="title">
                    <h2>Booking</h2>
                 </div>
              </div>
           </div>
        </div>
     </div>
    
    <!--  contact -->
    <div class="contact">
        <div class="container">
            

            <form action="{{ route('storeBooking') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="FormControlName"  class="form-label">Name</label>
                    <input type="text" class="form-control" name="Name" placeholder="Name" aria-label="Name">
                  </div>

                  <div class="mb-4">
                    <label for="FormControlName"  class="form-label">Room No</label>
                    <input type="text" class="form-control" name="RoomNo" placeholder="Room No" aria-label="Room No">
                  </div>

                  <div class="mb-4">
                    <label for="exampleFormControlInput1"  class="form-label">Type of Room</label>
                    <select class="form-select" style="height:43px; font-size: 12px;" name="TypeRoom" id="inputGroupSelect01">
                      <option selected>Choose...</option>
                      <option value="Single">Single</option>
                      <option value="Standard">Standard</option>
                      <option value="Deluxe">Deluxe</option>
                      <option value="Scholars">Scholars</option>
                      <option value="Suite">Suite</option>
                    </select>
                  </div>
                  <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="FormControlCheckIn" class="form-label">Check-In</label>
                        <input type="date" class="form-control" name="CheckIn" id="FormControlCheckIn" placeholder="Check-In" aria-label="CheckIn">
                    </div>
                    <div class="col-md-6">
                        <label for="FormControlCheckOut" class="form-label">Check-Out</label>
                        <input type="date" class="form-control" name="CheckOut" id="FormControlCheckOut" placeholder="Check-Out" aria-label="CheckOut">
                    </div>
                    </div>

                  <div class="mb-4">
                    <label for="FormControlName"  class="form-label">Phone</label>
                    <input type="text" class="form-control" name="Phone" placeholder="Phone" aria-label="Phone">
                  </div>

                  <button type="submit" class="btn btn-primary btn-rounded">Book Now</button>
            </form>
        </div>
    </div>
    <!-- end contact -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class=" col-md-4">
                        <h3>Contact US</h3>
                        <ul class="conta">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Scholar’s Inn
                                Universiti Teknologi Malaysia,
                                81310 UTM Skudai,
                                Johor.</li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i> +607-553 5197 ,+607-553 6695</li>
                            <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#">
                                    scholarsinn@utm.my</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>Menu Link</h3>
                        <ul class="link_menu">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="about.html"> about</a></li>
                            <li><a href="room.html">Our Room</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3>News letter</h3>
                        <form class="bottom_form">
                            <input class="enter" placeholder="Enter your email" type="text"
                                name="Enter your email">
                            <button class="sub_btn">subscribe</button>
                        </form>
                        <ul class="social_icon">
                            <li><a href="https://www.facebook.com/ScholarsInn.UTM.JB/"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">

                            <p>
                                Copyright ©2021 Universiti Teknologi Malaysia
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('dist/assets/js/jsIndex/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/jsIndex/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/jsIndex/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dist/assets/js/jsIndex/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/jsIndex/custom.js') }}"></script>
</body>

</html>
