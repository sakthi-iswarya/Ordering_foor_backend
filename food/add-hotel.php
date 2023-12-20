<?php
session_start();
error_reporting(0);
include'dbconnection.php';
//Checking session is valid or not
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['Submit']))
{

    $h_names=$_POST['h_names'];
    $us_name=$_POST['us_name'];
    $email_id=$_POST['email_id'];
    $date=$_POST['date'];

    $msg=mysqli_query($con,"insert into hotels_name(h_names,us_name,email_id,date) 
          values('$h_names','$us_name','$email_id','$date')");

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Hotel </title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
    <section id="container" >
        <header class="header black-bg"  style="background-color:black;">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <a href="dashboard.php" class="logo"><b>Add-Hotel Names </b></a>
            <div class="nav notify-row" id="top_menu"> </ul></div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </header>
        <aside>
            <div id="sidebar"  class="nav-collapse " style="background-color:#212121; color:white;">
                <ul class="sidebar-menu" id="nav-accordion">       
                  <h5 class="centered"><?php echo $_SESSION['login'];?></h5>       
                  <li class="mt"><a href="dashboard.php"><span>Dashboard</span></a></li>
                  <li class="mt"><a href="add-hotel.php"> <span>Add Hotels </span></a> </li>
                  <li class="mt"><a href="add-veg.php"> <span>Add Veg Items </span></a> </li>
                  <li class="mt"><a href="add-non.php"><span>Add Non-Veg Items </span></a> </li>
                  <li class="mt"><a href="food-avalible.php"> <span>Food Avalible</span></a> </li>
                  <li class="mt"><a href="food-report.php"> <span>Food Report</span></a> </li> 
                  <li class="mt"><a href="change-password.php"><span>Change Password</span></a></li>
                  <li class="sub-menu"><a href="manage-users.php" ><span>Manage Users</span></a></li>
                </ul>   
            </div>
        </aside>
        <section id="main-content">
            <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i>Add Hotel </h3>
                <div class="row"> 
                    <div class="col-md-12">
                        <div class="content-panel">
                            <form class="form-horizontal style-form" name="form1" method="post" enctype="multipart/form-data" action="" onSubmit="return valid();">
                            <p style="color:#F00"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
                            
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Hotel Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="h_names" value="" >
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">User Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="us_name" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Email Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email_id" value="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">Hotel Posting Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date" value="" >
                                </div>
                            </div>

                            <div style="margin-left:100px; padding-bottom:20px;" >
                                <input type="submit" name="Submit" value="Post Hotel Name" class="btn btn-theme" style="color:white;
                                background-color:black">
                            </div>
                        
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  

  </body>
</html>
<?php } ?>