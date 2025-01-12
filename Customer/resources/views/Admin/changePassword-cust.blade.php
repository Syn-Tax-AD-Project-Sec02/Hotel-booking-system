<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Scholars Inn</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('dist/assets/css/cssIndex/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('dist/assets/css/cssIndex/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('dist/assets/css/css/responsive.css')}}">
      <!-- fevicon -->
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
      <!-- Custom CSS -->
      <style>
         body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            color: #333;
         }

         a {
            text-decoration: none;
            color: inherit;
         }


         /* Sidebar */
         .sidebar {
            background-color: #fff;
            border-right: 1px solid #f0f0f0;
            box-shadow: 2px 0 8px rgba(0, 0, 0, 0.05);
            padding: 25px;
            height: 85vh;
            position: sticky;
            top: 0;
         }

         .sidebar ul {
            list-style: none;
            padding: 0;
         }
         .sidebar ul li {
            margin-bottom: 15px;
         }
         .sidebar ul li a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            border-radius: 8px;
            color: #555;
            transition: all 0.3s ease;
            font-weight: 500;
         }
         .sidebar ul li a:hover, .sidebar ul li.active a {
            background-color: #cc0000;
            color: #fff;
         }

         .sidebar ul li a:hover, .sidebar ul li.active a .signout {
            background-color: #fff;
            color: #cc0000;
         }

         /* Profile Content */
         .profile-content {
            padding: 40px;
            margin: 40px ;
            background-color: #fff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
         }
         .profile-title {
            color: #cc0000;
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 30px;
            text-transform: uppercase;
         }

         .form-label {
            font-weight: 600;
            padding: 0 35px 0 35px;
            
         }
         .form-control {
            border-radius: 8px;
            width: 80%;
            margin-left: 25px;
            padding: 12px;
            border: 2px solid #9f9696;
         }
         .form-control:focus {
            box-shadow: 0 0 6px rgba(204, 0, 0, 0.4);
            border-color: #000000;
         }
         .btn-submit {
            background-color: #cc0000;
            color: #fff;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
            border: none;
         }
         .btn-submit:hover {
            background-color: #a00000;
         }
         footer {
            text-align: center;
            padding: 5px;
            background-color: #f1f1f1;
            color: #777;
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
                             <a href="index.html"><img src="{{ asset('dist/assets/images/index/rsz_utm_logo.jpg')}}" alt="#" /></a>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                       </button>
                     
                    </nav>
                 </div>
              </div>
           </div>
        </div>
     </header>
      <div class="container-fluid">
         <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-3 sidebar">
               <ul>
                  <li ><a href="{{ route('updateDetails') }}"><i class="fas fa-user"></i> Your Account</a></li>
                  <li class="active"><a href="{{route('changePassForm')}}"><i class="fas fa-lock"></i> Change Password</a></li>
                  <li><a href="#"><i class="fas fa-history"></i> Booking History</a></li>
                  <li><a href="{{url('/')}}"><i class="fas fa-arrow-left"></i> Back to Homepage</a></li>
                  <li  style="margin-top:340px"><a href="#"><i class="fas fa-sign-out-alt signout"></i> Logout</a></li>
               </ul>
            </aside>
            <!-- Profile Content -->
            <section class="col-md-9">
               <div class="profile-content">
                  <div class="profile-title ">Change Password</div>
                  
                  <form  method="POST" action="{{route('updatePasswordCust')}}">
                    @csrf
                    
                     <div class="row mb-4"> 
                           <label for="currentPassword" class="form-label">Current Password</label>
                           <input type="password" id="currentPassword" name="currentPassword"  class="form-control">
                     </div>
                     <div class="row mb-4"> 
                        <label for="newPassword" class="form-label">New Password</label>
                        <input type="password" id="newPassword" name="newPassword"  class="form-control">
                  </div>
                     
                     <button type="submit" class="btn-submit">Save Changes</button>
                    </div>
                  </form>
               </div>
            </section>
         </div>
      </div>
      <!-- Footer -->
      <footer>
         Copyright &copy; 2024 Universiti Teknologi Malaysia
      </footer>
      <!-- Scripts -->
      <script src="{{ asset('dist/assets/js/jsIndex/jquery.min.js') }}"></script>
      <script src="{{ asset('dist/assets/js/jsIndex/bootstrap.bundle.min.js') }}"></script>
   </body>
</html>
