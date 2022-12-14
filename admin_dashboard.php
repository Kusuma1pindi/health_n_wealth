<?php
include "connect.php";
session_start();




date_default_timezone_set("Asia/Kolkata");
 $mon = date('F');

 $query1    = "select count(eid) as ou from enrollement_details where monthname(time)='$mon'";
 $run1      = mysqli_query($con, $query1);
 $out_count = mysqli_fetch_assoc($run1);

$query1    = "select count(eid) as in_count from payment_details where monthname(timestamp)='$mon'";
$run1      = mysqli_query($con, $query1);
$in_count = mysqli_fetch_assoc($run1);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- Fontfamily -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>


    <div class="main-wrapper">
        <?php include 'admin_menu.php'; ?>
        
        <div class="page-wrapper">

            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Welcome Admin !</h3>
                            
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <!-- Overview Section -->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-nine w-100">
                          
                                <div class="card-body">
                                    <div class="db-widgets d-flex justify-content-between align-items-center">
                                        
                                        <div class="db-icon">
                                            <i class="fas fa-book-open"></i>
                                        </div>

                                        <div class="db-info">
                                            <h3><?php echo $out_count['ou']; ?></h3>
                                            <h6>Users count</h6>
                                        </div>
                                    </div>
                                </div>
                        
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-ten w-100">
                            <div class="card-body"><a href="monthwise_payments_list.php">
                                    <div class="db-widgets d-flex justify-content-between align-items-center">
                                    
                                        <div class="db-icon">
                                            <i class="fas fa-clipboard-list"></i>
                                        </div>
                                        <div class="db-info">
                                            <h3><?php echo $in_count['in_count']; ?></h3>
                                            <h6>Payments count</h6>
                                        </div>
                                    </div></a>
                                
                            </div>
                        </div>
                    </div>

                   

                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 d-flex">
                        <div class="card flex-fill"><br>
                            <div>
                                <h4>&nbsp;&nbsp;USER ACTIVITY</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <a href="user_registration.php" class="btn btn-primary">NEW USER REGISTRATION</a><br><br>
                                    <a href="search-eop.php" class="btn btn-primary">Batch Wise User Details</a>
                                </div>
                            </div>
                            <!-- <div class="card-body">
                                <div >
                                    <a href="search-eop.php" class="btn btn-primary">EXISTING OUT PATIENT REGISTRATION</a>
                                 </div>
                          </div> -->
                            <!-- <div class="card-body">
                                <div>
                                    <a href="search-aop.php" class="btn btn-primary">OUT Patient Bill Activity Entry Details</a>
                                 </div>
                            </div>
                            <div class="card-body">
                                <div >
                                    <a href="searchfop.php" class="btn btn-primary">OUT PATIENT BILL</a>
                                 </div>
                            </div>--->
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card flex-fill"><br>
                            <div>
                                <h4>&nbsp;&nbsp;PATIENTS PAYMENT PAYMENTS LIST</h4>
                            </div>
                           
                            <div class="card-body">
                                <a href="monthwise_payments_list.php" class="btn btn-primary">PAYMENTS LIST</a><br><br>
                                
                                <a href="next_batch_slots.php" class="btn btn-primary">BATCH SLOTS</a>
                            </div>
                            <!-- <div class="card-body">
                           <a href="search-pf.php" class="btn btn-primary">PREGNANCY FORM</a>
                         </div>   -->
                            <!-- <div class="card-body">
                                <div>
                                    <a href="search-ip.php" class="btn btn-primary">IN Patient Bill Activity Entry Details</a>
                                 </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <a href="iosearch.php" class="btn btn-primary">IN Patient Bill Details</a>
                                 </div>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Wrapper -->
                <!-- Footer -->
				<!-- <footer>
					<p>Copyright © 2022 Health 'N' Wealth.</p>					
				</footer> -->
				<!-- /Footer -->
        </div>
</div>
        <!-- /Main Wrapper -->

        <!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap Core JS -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Custom JS -->
        <script src="assets/js/script.js"></script>

</body>

</html>