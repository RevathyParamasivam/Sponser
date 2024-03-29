<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GEMS - Sponser</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="boot\assests\img\favicon.png" rel="icon">
  <link href="boot\assets\img\apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="boot\assests\vendor\bootstrap\css\bootstrap.min.css" rel="stylesheet">
  
  <link href="boot\assests\vendor\bootstrap-icons\bootstrap-icons.css" rel="stylesheet">
  <link href="boot\assests\vendor\boxicons\css\boxicons.min.css" rel="stylesheet">
  <link href="boot\assests\vendor\quill\quill.snow.css" rel="stylesheet">
  <link href="boot\assests\vendor\quill\quill.bubble.css" rel="stylesheet">
  <link href="boot\assests\vendor\remixicon\remixicon.css" rel="stylesheet">
  
  <script type="text/javascript" src="boot\assests\js\apifunctions.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="boot\assests\css\style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  
  
  <script>
    var token=localStorage.getItem("token"); 
    var sponserId=localStorage.getItem("sponserId");
    var userId=localStorage.getItem("userId");
    console.log("Token in localStorage"+token);
    if(token==null)
    {
    window.location = 'Home';
    }
    getSponserDetails(sponserId);
  </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img  src="boot\assests\img\logo.png" alt="">
        <span class="d-none d-lg-block">Sponser</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
          <li class="dropdown-header">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#NewSponsershipModal">
                New Sponsership
              </button>
             
            </li>
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="boot\assests\img\profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2" id="header_name"></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><span id="dropdown_name"></span></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href=".\ProfileController" >
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" onclick="logout()">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href=".\DashboardController">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href=".\ProfileController">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href=".\MySponsership">
          <i class="bi bi-grid"></i>
          <span>My Sponsership</span>
        </a>
      </li><!-- End My Sponsership Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->
 