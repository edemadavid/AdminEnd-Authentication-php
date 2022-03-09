
<?php
  if(!isset($_SESSION)) { 
    session_start(); 
  }
?>
<?php
if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {

?>


  <?php 

    include '../config/db_connect.php';

    // write query for all forms
    // $sql = 'SELECT * FROM board ORDER BY created_at';

    // $result = mysqli_query($conn, $sql);

    // $board = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // mysqli_free_result($result);

    // $sql2 = 'SELECT * FROM management ORDER BY created_at';

    // $result2 = mysqli_query($conn, $sql2);

    // $team = mysqli_fetch_all($result2, MYSQLI_ASSOC);

    // mysqli_free_result($result2);

  ?>


  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="adminPublic/css/bootstrap.css">
      <link rel="stylesheet" href="adminPublic/css/bootstrap-icons/bootstrap-icons.css">

      <!-- Custom CSS -->
      <link rel="stylesheet" href="adminPublic/css/style.css">

      <!-- admin/adminPublic/css/style.css -->

      <title>Admin Dashboard</title>
    </head>
    <body class="toggle-sidebar">
      <!-- ======= Header ======= -->
      <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
          <a href="index.html" class="logo d-flex align-items-center">
    
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
          <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
          </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
              <a class="nav-link nav-icon search-bar-toggle " href="#">
                <i class="bi bi-search"></i>
              </a>
            </li><!-- End Search Icon-->
            
            <li class="nav-item dropdown pe-3">

              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

                <span class="d-none d-md-block"><?=$_SESSION['user_full_name']?></span>
              </a> <!-- End Profile Iamge Icon -->
              
            </li>

          </ul>
        </nav><!-- End Icons Navigation -->

      </header><!-- End Header -->

      <!-- ======= Sidebar ======= -->
      <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          </li><!-- End Dashboard Nav -->

          <li class="nav-item">
            <a class="nav-link" href="category.php">
              <i class="bi bi-menu-button-wide"></i>
              <span>Category</span>
            </a>
          </li><!-- End Category Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#board-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="board-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="inputBoard.php">
                  <i class="bi bi-circle"></i><span>Add Blog Post</span>
                </a>
              </li>
              <li>
                <a href="viewBoard.php">
                  <i class="bi bi-circle"></i><span>Edit Blog post</span>
                </a>
              </li>
            </ul>
          </li><!-- End Board of Directors Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#team-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-menu-button-wide"></i><span>Comments</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="team-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="inputTeam.php">
                  <i class="bi bi-circle"></i><span>delete comments</span>
                </a>
              </li>
            </ul>
          </li><!-- End Board of Directors Nav -->
 
          <li class="nav-item">
            <a class="nav-link collapsed" href="adminPublic/auth/logout.php">

              <!-- adminPublic/auth/logout.php -->
              <i class="bi bi-card-list"></i>
              <span>Logout</span>
            </a>
          </li><!-- End Register Page Nav -->



        </ul>

      </aside><!-- End Sidebar-->

      
      <main id="main" class="main">


        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </nav>
        </div> <!-- End Page Title -->


      </main>


      <footer id="footer" class="footer">
          <div class="copyright">
            &copy; Copyright <strong><span>Edema David Ovie</span></strong>. All Rights Reserved
          </div>

          <div class="copyright">
            Designed by <a href="https://Walexbiznig.com/">Walex Biz Nig</a>
          </div>
      </footer><!-- End Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <script src="adminPublic/js/bootstrap.js"></script>
      <script src="adminPublic/js/main.js"></script>



    </body>
  </html>


<?php 
} else {
    header("Location:../login.php");
  }
?>