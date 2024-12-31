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
            width: 45%;
        }

        .left-section h2, .right-section h2 {
            color: maroon;
            border-bottom: 2px solid maroon;
            padding-bottom: 10px;
        }

        .good-to-know h2 {
            color: #800000;
            margin: 20px;
            padding: 10px;
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
<!-- body -->

<body>
    <!-- loader  -->
    {{-- <div class="loader_bg">
        <div class="loader"><img src="{{ asset('dist/assets/images/index/loading.gif') }}" alt="#" /></div>
    </div> --}}
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
            <div class="cont">
                <!-- Left Section: Booking Details -->
                <div class="left-section">
                    <h2>Your Booking Details</h2>
                    <div class="details">
                        <p><strong>Check-in:</strong> <span class="highlight">Sat, Dec 21, 2024</span></p>
                        <p><strong>Check-out:</strong> <span class="highlight">Thu, Dec 26, 2024</span></p>
                        <p><strong>Total length of stay:</strong> 5 nights</p>
                        <p><strong>Guests:</strong> 2 adults</p>
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
        
                <!-- Right Section: Form and Information -->
                <div class="right-section">
                    <h2>Enter Your Details</h2>
                    <form>
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" placeholder="Enter your first name" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" placeholder="Enter your last name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" placeholder="Enter your phone number" required>
                        </div>
                        <button type="submit">Confirm Booking</button>
                    </form>
                    <div class="good-to-know">
                        <h2>Good to Know</h2>
                        <p>&#10003; <strong>No credit card needed</strong></p>
                        <p>&#10003; Stay flexible: Cancel for free before <strong>Dec 21, 2024</strong></p>
                        <p>&#10003; <strong>No payment today</strong>. Pay when you stay.</p>
                        <p>&#10003; Earn a <strong>free private airport taxi</strong></p>
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
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> Scholar’s Inn Universiti Teknologi Malaysia, 81310 UTM Skudai, Johor.</li>
                            <li><i class="fa fa-mobile" aria-hidden="true"></i> +607-553 5197 ,+607-553 6695</li>
                            <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#">scholarsinn@utm.my</a></li>
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
                            <li><a href="https://www.facebook.com/ScholarsInn.UTM.JB/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
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
    <script src="{{ asset('dist/assets/vendors/js/vendor.bundle.base.js') }}"></script><!-- endinject -->
            <!-- Plugin js for this page -->
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <!-- endinject -->
            <script>
                $(document).ready(function() {
                    $('#TypeRoom').on('change', function() {
                        const roomType = $(this).val(); // Selected room type
                        const checkIn = $('#CheckIn').val(); // Check-In date
                        const checkOut = $('#CheckOut').val(); // Check-Out date

                        if (validateDates(checkIn, checkOut)) {
                            filterRoomNumbers(roomType, checkIn, checkOut);
                        } else {
                            alert('Please ensure Check-In and Check-Out dates are valid.');
                        }
                    });

                    // Attach dynamic event for multiple room types
                    $('[id^=TypeRoom]').on('change', function() {
                        const roomType = $(this).val(); // Selected room type
                        const bookingId = $(this).attr('id').replace('TypeRoom', ''); // Extract booking ID
                        updateFilterRoomNumbers(roomType, bookingId);
                    });

                    // Populate room numbers on page load
                    $('[id^=TypeRoom]').each(function() {
                        const roomType = $(this).val(); // Selected room type
                        const bookingId = $(this).attr('id').replace('TypeRoom', ''); // Extract booking ID
                        updateFilterRoomNumbers(roomType, bookingId);
                    });

                    // Function to validate dates
                    function validateDates(checkIn, checkOut) {
                        if (!checkIn || !checkOut) return false; // Both dates must be selected

                        const checkInDate = new Date(checkIn);
                        const checkOutDate = new Date(checkOut);

                        return checkInDate < checkOutDate; // Check-In must be before Check-Out
                    }

                    // Function to filter room numbers for a specific booking ID
                    function updateFilterRoomNumbers(roomType, bookingId) {
                        $.ajax({
                            url: "{{ route('getRoomsByType') }}", // Route to the controller
                            type: 'POST',
                            data: {
                                _token: "{{ csrf_token() }}", // CSRF token
                                typeRoom: roomType // Selected room type
                            },
                            success: function(response) {
                                console.log('Response:', response); // Debug response

                                const roomNoSelect = $(`#roomNoSelect${bookingId}`);
                                roomNoSelect.empty(); // Clear existing options

                                if (response.rooms && response.rooms.length > 0) {
                                    response.rooms.forEach(room => {
                                        roomNoSelect.append(
                                            `<option value="${room.RoomNo}">${room.RoomNo}</option>`
                                        );
                                    });
                                } else {
                                    roomNoSelect.append('<option>No rooms available for this type</option>');
                                }
                            },
                            error: function(error) {
                                console.error('Error fetching room numbers:', error);
                            }
                        });
                    }

                    // Function to filter room numbers for the main dropdown
                    function filterRoomNumbers(roomType, checkIn, checkOut) {
                        $.ajax({
                            url: "{{ route('getRoomsByType') }}", // Route to the controller
                            type: 'POST',
                            data: {
                                _token: "{{ csrf_token() }}", // CSRF token
                                typeRoom: roomType, // Selected room type
                                checkIn: checkIn, // Check-In date
                                checkOut: checkOut // Check-Out date
                            },
                            success: function(response) {
                                console.log('Response:', response); // Debug response

                                const roomNoSelect = $('#roomNoSelect');
                                roomNoSelect.empty(); // Clear existing options
                                roomNoSelect.append(
                                    '<option selected>Choose Room No</option>'); // Default option

                                if (response.rooms && response.rooms.length > 0) {
                                    response.rooms.forEach(room => {
                                        roomNoSelect.append(
                                            `<option value="${room.RoomNo}">${room.RoomNo}</option>`
                                        );
                                    });
                                } else {
                                    roomNoSelect.append('<option>No rooms available for this type</option>');
                                }
                            },
                            error: function(error) {
                                console.error('Error fetching room numbers:', error);
                            }
                        });
                    }
                });
            </script>
            <script src="{{ asset('dist/assets/js/off-canvas.js') }}"></script>
            <script src="{{ asset('dist/assets/js/misc.js') }}"></script>
            <script src="{{ asset('dist/assets/js/settings.js') }}"></script>
            <script src="{{ asset('dist/assets/js/todolist.js') }}"></script>
            <script src="{{ asset('dist/assets/js/jquery.cookie.js') }}"></script>
</body>

</html>
