<!DOCTYPE html>
<html lang="en">
<?php 
	if(!isset($_SESSION['login_id']))
	    header('location:login.php');
    include 'db_connect.php';


	include 'header.php' 
?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper"></div>
  <?php include 'topbar.php' ?>
  <?php include 'sidebar.php' 
   
  ?>

  <!-- Content Wrapper. Contains page content -->
  </div>
  <div>
  <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                <i class="icon fas fa-users"></i>
                  <h4 class="font-weight-normal mb-3">
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">
                  <?php // Perform query
                        if ($result = mysqli_query($conn, "SELECT * FROM users")) {
                         echo "Working Staff : " . mysqli_num_rows($result);
                         // Free result set
                         mysqli_free_result($result);
                        }
                  ?>
                  </h2>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                <i class="icon fas fa-users"></i>
                  <h4 class="font-weight-normal mb-3">
                    <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">
                  <?php // Perform query
                        if ($result = mysqli_query($conn, "SELECT * FROM project_list")) {
                         echo "Total Clients : " . mysqli_num_rows($result);
                         // Free result set
                         mysqli_free_result($result);
                        }
                  ?>
                  </h2>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                <i class="icon fas fa-users"></i>                                   
                  <h4 class="font-weight-normal mb-3">
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">
                  <?php // Perform query
                        if ($result = mysqli_query($conn, "SELECT status FROM project_list WHERE status='5'")) {
                         echo "Suceessfull clients : " . mysqli_num_rows($result);
                         // Free result set
                         mysqli_free_result($result);
                        }
                          mysqli_close($conn);
                  ?>
                </h2>
                </div>
              </div>
            </div>
          </div>
  </div>
  
<?php include 'dash.php'; ?>
    </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>
