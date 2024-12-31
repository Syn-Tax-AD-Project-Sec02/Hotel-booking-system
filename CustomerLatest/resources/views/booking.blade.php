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
      <style>
        /* General Reset */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('image.png') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }

        /* Header */
        /* .header {
            background-color: maroon;
            color: white;
            display: flex;
            align-items: center;
            padding: 10px 20px;
        } */

        .header img {
            height: 50px;
            margin-right: 15px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        /* Main container */
        .cont {
            display: flex;
            justify-content: space-around;
            margin: 20px;
        }

        /* Left section: Booking Details */
        .left-section, .right-section {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            width: 48%;
        }

        .left-section h5, .right-section h5 {
            color: maroon;
            border-bottom: 2px solid maroon;
            padding-bottom: 10px;
        }

        .good-to-know h5 {
            color: maroon;
            margin-top: 20px;
            border-bottom: 2px solid maroon;
            padding-bottom: 10px;
            /* padding: 10px; */
        }

        .details p, .good-to-know p {
            margin: 10px 0;
            line-height: 1.5;
        }

        .highlight {
            font-weight: bold;
            color: maroon;
        }

        .price-summary {
            margin: 20px 0;
            background-color: #f8f8f8;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .price-summary p {
            margin: 5px 0;
        }

        .price-summary .total {
            font-size: 20px;
            color: maroon;
            font-weight: bold;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: maroon;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: darkred;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="#home"><img
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
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-user"></i> {{ Auth::user()->name }}
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('profileForm') }}">Profile</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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

    <div class="back_re">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="title">
                    <h2>Reservation</h2>    
                 </div>
              </div>
           </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="cont">
        <!-- Left Section: Booking Details -->
        <div class="left-section">
            <h5>Enter Your Details</h5>
            <form action="{{ route('storeBooking') }}" method="POST">
                @csrf
                <input type="hidden" name="roomId" value="{{ $roomId }}">
                <input type="hidden" name="checkin" value="{{ $checkin }}">
                <input type="hidden" name="checkout" value="{{ $checkout }}">
                <input type="hidden" name="guests" value="{{ $guests }}">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" value="{{ $user->first_name }}" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" value="{{ $user->last_name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" value="{{ $user->email }}" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" value="{{ $user->phone }}" required>
                </div>
                <button type="submit">Confirm Booking</button>
            </form>
        </div>

        <!-- Right Section: Form and Information -->
        <div class="right-section">
            <h5>Your Booking Details</h5>
            <div class="details">
                <p><strong>Check-in:</strong> <span class="highlight">{{ $checkin }}</span></p>
                <p><strong>Check-out:</strong> <span class="highlight">{{ $checkout }}</span></p>
                <p><strong>Total length of stay:</strong> 
                    @php
                        $checkinDate = \Carbon\Carbon::parse($checkin);
                        $checkoutDate = \Carbon\Carbon::parse($checkout);
                        $duration = $checkinDate->lt($checkoutDate) 
                    ? $checkinDate->diffInDays($checkoutDate) 
                    : $checkoutDate->diffInDays($checkinDate);
                    echo $duration . ' nights';
                    @endphp
                </p>
                <p><strong>Guests:</strong> <span class="highlight">{{ $guests }} adults</span></p>
            </div>
            <div class="price-summary">
                <p>Original Price: <del>MYR 7,000</del></p>
                <p>Limited-time Deal: <span class="highlight">MYR 3,430</span></p>
                <p>Includes: <br>
                    - Taxes: MYR 274.40 <br>
                    - Property Service: MYR 215 <br>
                    - Refundable Deposit: MYR 200</p>
                <p class="total">Total Price: MYR 3,430</p>
            </div>
            
        </div>
    </div>
</body>
</html>
