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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                                        <a class="nav-link" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#our_room">Our Rooms</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#gallery">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#blog">Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contact Us</a>
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
                                                <a class="dropdown-item" href="{{ route('HistoryForm') }}">Booking History</a>
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
                                            <a class="nav-link" href="{{ route('login') }}">Sign In</a>
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

        {{-- <div class="booking-box">
            <form>
                <!-- Check-in Date -->
                <div class="form-control " style="border-style: none;">
                    <label for="checkin">Check-in</label>
                    <input type="date" id="checkin" name="checkin">
                </div>
                <!-- Check-out Date -->
                <div class="form-control " style="border-style: none;" >
                    <label for="checkout">Check-out</label>
                    <input type="date" id="checkout" name="checkout">
                </div>
                <!-- Guests -->
                <div class="form-control" style="border-style: none;">
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
                <div class="form-control" style="border-style: none;">
                    <label for="rooms">Rooms</label>
                    <select id="rooms" name="rooms">
                        <option value="Single">Single</option>
                        <option value="Single">Single</option>
                        <option value="Scholars">Scholars</option>
                        <option value="Suite">Suite</option>
                    </select>
                </div>
                <!-- Submit Button -->
                <button type="button" class="booking-btn">Check Availability</button>
            </form>
        </div> --}}

    </section>
    <!-- end banner -->
    <!-- about -->
    <div class="about" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>About Us</h2>
                        <p class="about-text">
                            The Scholar’s Inn started in 1989 as a Guest House with 7 units of 2 bedroom which were scateredly located 
                            in a residential college to accommodate UTM visitors. 
                            Over the years, we expanded, offering renovated single rooms and moving to our current building in 2004. 
                            Today, we provide comfortable lodging for scholars, guest, parents, and visitors.
                            <span class="more-text" style="display: none;">
                                Scholar’s Inn is managed by UTM students as part of a leadership program. 
                                We ensure quality service while enhancing students’ leadership, skills and 
                                forges a sense of community by providing opportunities for students to participate in campus and community life. 
                                Our goal is to make your stay comfortable and pleasant. Let us know how we can improve your experience.
                            </span>
                        </p>
                        <a class="read_more" href="Javascript:void(0)"> Read More</a>
                    </div>
                    <style>
                        .titlepage p {
                            color: #555;
                            font-size: 16px;
                            text-align: justify;
                            margin-bottom: 15px;
                        }
                    </style>
                </div>
                <script>
                    document.querySelector('.read_more').addEventListener('click', function() {
                        const hiddenContent = document.querySelector('.hidden-content');
                        if (hiddenContent.style.display === 'none') {
                            hiddenContent.style.display = 'inline';
                            this.textContent = 'Read Less';
                        } else {
                            hiddenContent.style.display = 'none';
                            this.textContent = 'Read More';
                        }
                    });
                </script>
                <div class="col-md-7">
                    <div class="about_img">
                        <figure><img src="{{ asset('dist/assets/images/index/tasik.jpg') }}" alt="#" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- our_room -->
    <div class="our_room" id="our_room">
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
                        @if ($room->ImagePath)
                            <!-- Get the first image from the ImagePath array -->
                            @php
                                $imagePaths = json_decode($room->ImagePath, true); // Decode the JSON array
                                $firstImage = $imagePaths[0] ?? null; // Get the first image if available
                            @endphp

                            @if ($firstImage)
                                <img src="{{ asset('storage/' . $firstImage) }}" alt="Room Image"
                                    class="card-image">
                            @endif
                        @endif
                        <div class="card-details">
                            <h3>{{ $room->TypeRoom }}</h3>
                            <p>
                                <a href="#" class="link-primary" data-bs-toggle="modal"
                                    data-bs-target="#roomModal-{{ $room->_id }}">
                                    Room Details
                                </a>
                            </p>
                            <div class="price-book">
                                <span class="price">RM {{ $room->Rate }}</span>
                                <button class="book-now" data-bs-toggle="modal"
                                data-bs-target="#roomDetailsModal-{{ $room->_id }}">Book Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="roomDetailsModal-{{ $room->_id }}" tabindex="-1" aria-labelledby="roomDetailsLabel-{{ $room->_id }}" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                           <div class="modal-content blur-bg">
                              <div class="modal-header">
                                    <h5 class="modal-title" id="roomDetailsLabel-{{ $room->_id }}">{{ $room['title'] }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                    <!-- Left Column: Room Carousel -->
                                    <div class="col-md-6">
                                        <div id="carouselRoom{{ $room->_id }}" class="carousel slide" data-bs-ride="carousel">
                                            <!-- Slideshow Images -->
                                            <div class="carousel-inner">
                                                @foreach(json_decode($room->ImagePath) as $index => $imagePath)
                                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                        <img src="{{ asset('storage/' . $imagePath) }}" class="d-block w-100 rounded" 
                                                             alt="Room Image {{ $index + 1 }}" 
                                                             style="width:100%; height: 350px; object-fit: cover;">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <!-- Carousel Controls -->
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselRoom{{ $room->_id }}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselRoom{{ $room->_id }}" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                            
                                    </div>
                            
                                    <!-- Right Column: Room Details -->
                                    <div class="col-md-6">
                                        <!-- Room Facilities -->
                                       
                                        <!-- Booking Card -->
                                        <div class="booking-card">
                                            <!-- Price Section -->
                                            <div class="price-section">
                                                <h3>RM {{ $room->Rate }} <span>/ Per Night</span></h3>
                                            </div>
                                            
                                            <!-- Check-in & Check-out -->
                                            <div class="check-section">
                                                <div class="check-in-out">
                                                    <label for="checkin_{{ $room->_id }}">CHECK-IN</label>
                                                    <input type="date" name="checkin" id="checkin_{{ $room->_id }}" onchange="checkAvailability('{{ $room->_id }}', '{{ $room->TypeRoom }}')">
                                                </div>
                                                <div class="check-in-out">
                                                    <label for="checkout_{{ $room->_id }}">CHECK-OUT</label>
                                                    <input type="date" name="checkout" id="checkout_{{ $room->_id }}" onchange="checkAvailability('{{ $room->_id }}', '{{ $room->TypeRoom }}')">
                                                </div>
                                            </div>
                            
                                            <!-- Guests Section -->
                                            <div class="guest-section" data-room-id="{{ $room->_id }}">
                                                <label>Adult(s)</label>
                                                <div class="guest-controls">
                                                    <button class="guest-btn" onclick="changeGuests(this, -1)"><i class="fas fa-minus"></i></button>
                                                    <span class="guest-number" id="guestCount_{{ $room->_id }}">1</span>
                                                    <button class="guest-btn" onclick="changeGuests(this, 1)"><i class="fas fa-plus"></i></button>
                                                </div>
                                                <input type="hidden" id="guestCountInput_{{ $room->_id }}" name="guests[{{ $room->_id }}]" value="1">
                                                <input type="hidden" id="typeRoom_{{ $room->_id }}" value="{{ $room->TypeRoom }}">
                                            </div>
                            
                                            <!-- Reserve Button -->
                                            <button class="reserve-btn" onclick="reserveRoom('{{ $room->_id }}', '{{ $room->TypeRoom }}')">Reserve</button>

                                            <div class="info-msg">You won't be charged yet. Payment is due upon arrival.</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Room Description -->
                                <p class="room-description mt-3">{{ $room['description'] }}</p>
                            </div>
                           </div>
                        </div>
                    </div>

                    <!-- Modal -->
                     <!-- Room Details Modal -->
            <div class="modal fade" id="roomModal-{{ $room->_id }}" tabindex="-1" aria-labelledby="roomLabel-{{ $room->_id }}" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content blur-bg">
                        <div class="modal-header">
                            <h5 class="modal-title" id="roomLabel-{{ $room->_id }}">{{ $room['title'] }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="carouselRoom{{ $room->_id }}" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach(json_decode($room->ImagePath) as $index => $imagePath)
                                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                    <img src="{{ asset('storage/' . $imagePath) }}" class="d-block w-100 rounded" 
                                                         alt="Room Image {{ $index + 1 }}" 
                                                         style="width:100%; height: 350px; object-fit: cover;">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselRoom{{ $room->_id }}" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselRoom{{ $room->_id }}" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>                                    
                                </div>
                                <div class="col-md-6">
                                    <h6 class="section-title">Room Facilities</h6>
                                    <ul class="facility-list">
                                        @foreach(json_decode($room->Facilities) as $facility)
                                            <li>{{ $facility }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
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
    <div class="gallery" id="gallery">
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
                        <figure><img src="{{ asset('dist/assets/images/index/gallery1.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('dist/assets/images/index/gallery2.jpg') }}"
                                alt="#" />
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
                        <figure><img src="{{ asset('dist/assets/images/index/gallery4.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('dist/assets/images/index/gallery5.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('dist/assets/images/index/gallery6.jpg') }}"
                                alt="#" />
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
                        <figure><img src="{{ asset('dist/assets/images/index/gallery8.jpg') }}"
                                alt="#" />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end gallery -->
    <!-- blog -->
    <div class="blog" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Information</h2>
                        {{-- <p>Lorem Ipsum available, but the majority have suffered </p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="{{ asset('dist/assets/images/index/gallery2.jpg') }}" alt="#" />
                            </figure>
                        </div>
                        <div class="blog_room">
                            <h3>Outdoor Seating Area</h3>
                            {{-- <span>The standard chunk</span> --}} <span></span>
                            <p>Enjoy the outdoors in our cozy seating area, surrounded by a peaceful and scenic environment. 
                                Perfect for casual meetups, Scholar's Inn provides an inviting space to unwind.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_box">
                        <div class="blog_img">
                            <figure><img src="{{ asset('dist/assets/images/index/gallery6.jpg') }}" alt="#" />
                            </figure>
                        </div>
                        <div class="blog_room">
                            <h3>Lobby Area</h3>
                            {{-- <span>The standard chunk</span> --}} <span></span>
                            <p>Step into elegance with our modern and welcoming lobby. 
                                Designed for comfort and style, the Scholar's Inn lobby provides a warm first impression, 
                                complete with cozy seating and ambient lighting.</p>
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
                            <h3>Bedroom</h3>
                            {{-- <span>The standard chunk</span> --}} <span></span>
                            <p>Experience a restful stay in our well-appointed standard bedroom. 
                                Featuring plush bedding, modern decor, and thoughtful amenities, 
                                Scholar's Inn ensures a cozy and memorable visit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->
    <!--  contact -->
    <div class="contact" id="contact">
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
                    <form id="request" class="main_form" method="POST" >
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Name" type="text" name="Name" required>
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="email" name="Email" required>
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone Number" type="text"
                                    name="PhoneNumber" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" name="Message" required></textarea>
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
                        <ul class="contact-info">
                            <li>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                Office Hour: Monday – Sunday : 7.00AM – 8.00PM <br>
                                After Office Hour: Staff on standby duty (on Call)
                            </li>
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                Scholar’s Inn, Universiti Teknologi Malaysia, 81310 UTM Skudai, Johor.
                            </li>
                            <li>
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                +607-553 5197, +607-553 6695
                            </li>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:scholarsinn@utm.my">scholarsinn@utm.my</a>
                            </li>
                        </ul>
                        <style>
                            .contact-info {
                                list-style: none;
                                /* Hilangkan bullet list */
                                padding: 0;
                                margin: 0;
                            }

                            .gallery_img img {
                                width: 100%; /* Make the images responsive and fill their container */
                                height: 200px; /* Set a fixed height for uniformity */
                                object-fit: cover; /* Ensures the image covers the set dimensions while maintaining aspect ratio */
                                /* border-radius: 10px; Optional: Add rounded corners */
                                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle shadow */
                            }

                            .blog_img img { 
                                width: 100%; /* Make the images responsive and fill their container */
                                height: 200px; /* Set a fixed height for uniformity */
                                object-fit: cover; /* Ensures the image covers the set dimensions while maintaining aspect ratio */
                                /* border-radius: 10px; Optional: Add rounded corners */
                                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle shadow */
                            }

                            .contact-info li {
                                display: flex;
                                /* Gunakan Flexbox untuk sejajarkan ikon dan teks */
                                align-items: baseline;
                                /* Pastikan ikon sejajar secara vertikal */
                                margin-bottom: 10px;
                                /* Jarak antara setiap elemen */
                                color: white;
                                /* Ubah teks menjadi warna putih */
                                font-size: 16px;
                                /* Laraskan saiz teks */
                            }

                            .contact-info li i {
                                margin-right: 10px;
                                /* Ruang antara ikon dan teks */
                                font-size: 20px;
                                /* Saiz ikon */
                                color: #ffffff;
                                /* Warna ikon */
                            }

                            .contact-info a {
                                color: #ffffff;
                                /* Warna pautan */
                                text-decoration: none;
                                /* Hilangkan garisan bawah pada pautan */
                            }

                            .contact-info a:hover {
                                text-decoration: underline;
                                /* Tambah garisan bawah semasa hover */
                            }
                        </style>
                    </div>
                    <div class="col-md-4">
                        <h3>Menu Link</h3>
                        <ul class="link_menu">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#about"> About</a></li>
                            <li><a href="#our_room">Our Room</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#blog">Information</a></li>
                            <li><a href="#contact">Contact Us</a></li>
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
    <script>
         document.addEventListener('DOMContentLoaded', function () {
        const readMoreLink = document.querySelector('.read_more');
        const moreText = document.querySelector('.more-text');

        readMoreLink.addEventListener('click', function () {
            if (moreText.style.display === 'none') {
                moreText.style.display = 'inline';
                readMoreLink.textContent = 'Read Less';
            } else {
                moreText.style.display = 'none';
                readMoreLink.textContent = 'Read More';
            }
        });
    });

        let guestCount = 1;
    
        function changeGuests(button, change) {
    const roomId = button.closest('.guest-section').getAttribute('data-room-id');
    
    // Access the span element where the guest count is displayed
    let guestCountElement = document.getElementById('guestCount_' + roomId);
    
    // Get the current guest count and adjust it based on the button click
    let currentCount = parseInt(guestCountElement.innerText);
    currentCount = Math.max(1, currentCount + change);  // Ensure minimum guest count is 1
    
    // Update the displayed guest count
    guestCountElement.innerText = currentCount;

    // Optionally, update the hidden input field or data attribute for form submission
    let guestCountInput = document.getElementById('guestCountInput_' + roomId);
    if (guestCountInput) {
        guestCountInput.value = currentCount;
    }
}

// Function to handle the check-in or check-out date change
function checkAvailability(roomId, TypeRoom)  {
    console.log('Room ID:', roomId);
    console.log('TypeRoom:', TypeRoom);
    const typeRoom = document.getElementById('typeRoom_' + roomId).value;
    const checkinDate = document.getElementById('checkin_' + roomId);
    const checkoutDate = document.getElementById('checkout_' + roomId);

    if (!checkinDate || !checkoutDate) {
        console.error('Check-in or Check-out date elements not found');
        return;
    }

    if (!checkinDate.value || !checkoutDate.value) {
        alert('Please select both Check-in and Check-out dates.');
        return;
    }

    console.log('Check-in Date:', checkinDate.value);
    console.log('Check-out Date:', checkoutDate.value);

    fetch('/check-availability', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            room_id: roomId,
            type_room: TypeRoom,
            checkin: checkinDate.value,
            checkout: checkoutDate.value,
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.isAvailable) {
            alert('The room is available for booking.');
        } else {
            alert('The room is not available for the selected dates.');
            // Optionally, reset the date inputs
            checkinDate.value = '';
            checkoutDate.value = '';
        }
    })
    .catch(error => {
        console.error('Error checking availability:', error);
    });
}

// Event listener to trigger checkAvailability on date change
document.querySelectorAll('.checkin-date, .checkout-date').forEach((input) => {
    input.addEventListener('change', (event) => {
        const roomId = event.target.closest('.guest-section').getAttribute('data-room-id');
        if (roomId) {
            checkAvailability(roomId);
        } else {
            console.error('Room ID not found for the selected date input.');
        }
    });
});


// Reserve Room function
function reserveRoom(roomId, typeRoom)  {
     const checkinDate = document.getElementById('checkin_' + roomId).value;
    const checkoutDate = document.getElementById('checkout_' + roomId).value;
    let guestCountElement = document.getElementById('guestCount_' + roomId);
    let guestCount = parseInt(guestCountElement.innerText); // Get the number of guests

    const isLoggedIn = @json($isLoggedIn);
    if (!isLoggedIn) {
        Swal.fire({
            icon: 'warning',
            title: 'Login Required',
            text: 'You need to log in to reserve a room.',
            confirmButtonText: 'Login',
            showCancelButton: true,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('login') }}"; // Redirect to login page
            }
        });
        return;
    }

    // Check if both dates are selected
    if (!checkinDate || !checkoutDate) {
        alert('Please select both check-in and check-out dates.');
        return;
    }

    // Proceed with the reservation logic
    console.log(`Reserving room with ID: ${roomId}`);
    console.log(`Type of Room: ${typeRoom}`);
    console.log(`Check-in: ${checkinDate}`);
    console.log(`Check-out: ${checkoutDate}`);
    console.log(`Guests: ${guestCount}`);

    fetch('/check-availability', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            room_id: roomId,
            type_room: typeRoom,// Use the correct casing here
            checkin: checkinDate,
            checkout: checkoutDate,
            guests: guestCount
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.isAvailable) {
            const redirectUrl = `/booking?room_id=${roomId}&type_room=${typeRoom}&checkin=${checkinDate}&checkout=${checkoutDate}&guests=${guestCount}`;
            window.location.href = redirectUrl;
        } else {
            alert('The room is not available for the selected dates.');
        }
    })
    .catch(error => {
        console.error('Error during reservation:', error);
        alert('An error occurred while reserving the room. Please try again.');
    });

    
}





    </script>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('dist/assets/js/jsIndex/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/jsIndex/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/jsIndex/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dist/assets/js/jsIndex/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('dist/assets/js/jsIndex/custom.js') }}"></script>
</body>

</html>
