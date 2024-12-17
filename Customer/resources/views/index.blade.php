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
    <section class="banner_main">
        <header class="homepage">
            <h1>Welcome to UTM Scholar's Inn</h1>
            <p>Your comfort is our priority</p>
        </header>

        <div class="booking-box">
            <form>
                <!-- Check-in Date -->
                <div class="form-control ">
                    <label for="checkin">Check-in</label>
                    <input type="date" id="checkin" name="checkin">
                </div>
                <!-- Check-out Date -->
                <div class="form-control ">
                    <label for="checkout">Check-out</label>
                    <input type="date" id="checkout" name="checkout">
                </div>
                <!-- Guests -->
                <div class="form-control">
                    <label for="guests">Guests</label>
                    <select id="guests" name="guests">
                        <option value="1">1 Guest</option>
                        <option value="2">2 Guests</option>
                        <option value="3">3 Guests</option>
                        <option value="4">4 Guests</option>
                        <option value="5">5 Guests</option>
                    </select>
                </div>
                <!-- Number of Rooms -->
                <div class="form-control">
                    <label for="rooms">Rooms</label>
                    <select id="rooms" name="rooms">
                        <option value="1">1 Room</option>
                        <option value="2">2 Rooms</option>
                        <option value="3">3 Rooms</option>
                        <option value="4">4 Rooms</option>
                    </select>
                </div>
                <!-- Submit Button -->
                <button type="button" class="booking-btn">Check Availability</button>
            </form>
        </div>

    </section>
    <!-- end banner -->
    <!-- about -->
    <div class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>About Us</h2>
                        <p>The Scholar’s Inn began as a Guest House Unit with 7 units of 2 bedroom houses in 1989 which
                            were scateredly located in a residential college to accommodate UTM visitors. In 1992, to
                            fulfill the growing demand, we renovated 88 units of single rooms as part of our serviced
                            rooms. As part of UTM transformation, in 2004 we have moved to the current building and
                            continue our services as a non-profit public entity that provides on-campus lodging for
                            visiting scholars, guest speakers, parents of UTM students, and other visitors to the
                            campus. Gradually, we improve ourselves to give our guests a memorable stay. </p>
                        <a class="read_more" href="Javascript:void(0)"> Read More</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about_img">
                        <figure><img src="{{ asset('dist/assets/images/index/about.png') }}" alt="#" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- our_room -->
    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Rooms & Apartments</h2>
                        <p> </p>
                    </div>
                </div>
            </div>

            <div class="card-container">
                @foreach ($rooms as $room)
                    <!-- Card -->
                    <div class="card">
                        <img src="{{ asset('dist/assets/images/index/' . $room['image']) }}"
                            alt="{{ $room['title'] }}" class="card-image">
                        <div class="card-details">
                            <h3>{{ $room['title'] }}</h3>
                            <p>
                                <a href="#" class="link-primary" data-bs-toggle="modal"
                                    data-bs-target="#roomDetailsModal-{{ $loop->index }}">
                                    Room Details >
                                </a>
                            </p>
                            <div class="price-book">
                                <span class="price">RM {{ $room['price'] }}</span>
                                <button class="book-now">Book Now</button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="roomDetailsModal-{{ $loop->index }}" tabindex="-1"
                        aria-labelledby="roomDetailsLabel-{{ $loop->index }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content blur-bg">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="roomDetailsLabel-{{ $loop->index }}">
                                        {{ $room['title'] }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <!-- Room Image -->
                                        <div id="roomCarousel" class="carousel slide" data-bs-ride="carousel">
                                            <!-- Indicators -->
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#roomCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                        
                                            <!-- Slideshow Images -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="resources/views/images/Single room(Aircond)/image 1.jpg" class="d-block w-100" alt="Room 1">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="room2.jpg" class="d-block w-100" alt="Room 2">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="room3.jpg" class="d-block w-100" alt="Room 3">
                                                </div>
                                            </div>
                                        
                                            <!-- Controls -->
                                            <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousel" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#roomCarousel" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <!-- Room Details -->
                                        <div class="col-md-6">
                                            <h6>Room Highlights</h6>
                                            <div class="room-highlights">
                                                <ul>
                                                    <li>🛌 Bedroom with 1 Queen-sized Bed</li>
                                                    <li>📶 Free Wi-Fi</li>
                                                    <li>🚿 Bathroom with Water Heater</li>
                                                    <li>🧴 Complimentary Toiletries</li>
                                                    <li>📺 Flat Screen LCD TV</li>
                                                    <li>🧹 Iron & Ironing Board</li>
                                                    <li>🕌 Prayer Mat</li>
                                                    <li>❄️ Refrigerator</li>
                                                    <li>🛎️ Room Service</li>
                                                    <li>🧼 Towels</li>
                                                 </ul>
                                            </div>
                                            <button class="book-now-card">Book Now</button>
                                             <style>
                                                .book-now-card {
                                                    width: 765px; /* lebar butang */
                                                    height: 50px; /* Tinggi butang */
                                                    background-color: #8e0707; /* Warna background */
                                                    color: white; /* Warna teks */
                                                    border: none; /* Hilangkan border */
                                                    border-radius: 5px; /* Buat hujung bulat */
                                                    font-size: 16px; /* Saiz font */
                                                    cursor: pointer; /* Tukar kursor jadi tngn */
                                                }
                                                .book-now-card:hover {
                                                    background-color: #2ebc1e; /* Keluar warna hover */
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <p class="mt-3">
                                        {{ $room['description'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>

    {{-- @include('modal') --}}

    <!-- end our_room -->
    <!-- gallery -->
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('dist/assets/images/index/gallery1.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('dist/assets/images/index/gallery2.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('dist/assets/images/index/gallery3.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('dist/assets/images/index/gallery4.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('dist/assets/images/index/gallery5.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('dist/assets/images/index/gallery6.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('dist/assets/images/index/gallery7.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('dist/assets/images/index/gallery8.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end gallery -->
    <!-- blog -->
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Blog</h2>
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="{{ asset('dist/assets/images/index/blog1.jpg') }}" alt="#" />
                            </figure>
                        </div>
                        <div class="blog_room">
                            <h3>Bed Room</h3>
                            <span>The standard chunk </span>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you
                                are </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="{{ asset('dist/assets/images/index/blog2.jpg') }}" alt="#" />
                            </figure>
                        </div>
                        <div class="blog_room">
                            <h3>Bed Room</h3>
                            <span>The standard chunk </span>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you
                                are </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="{{ asset('dist/assets/images/index/blog3.jpg') }}" alt="#" />
                            </figure>
                        </div>
                        <div class="blog_room">
                            <h3>Bed Room</h3>
                            <span>The standard chunk </span>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generatorsIf you
                                are </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
    <!--  contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Name" type="type" name="Name">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="type" name="Email">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone Number" type="type"
                                    name="Phone Number">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=scholar_inns+utm+jb"
                                width="600" height="400" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
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
