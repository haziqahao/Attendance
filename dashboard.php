<?php
include('function.php');
?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>
    	<!-- Side Navigation -->
       <?php
            include('sidenav.php')
        ?>

        <!-- Top header -->
        <?php 
            include('header.php');
        ?>

        <!-- Page Content -->
        <div class="box-profile">
            <p class="profile-heading">Profile</p>
            <p class="profile-subheading">Edit Your Profile</p>
            <div class="box-profileA">
                <a href="profile.php" style="text-decoration: none;"><p class="A-btext">View Profile</p></a>
            </div>
        </div>

        <div class="box-report">
            <p class="report-heading">Attendance</p>
            <p class="report-subheading">Monthly Reports</p>
            <div class="box-reportA">
                <a href="view_report.php"><p class="B-btext">View Attendance Report</p></a>
            </div>
        </div>

        <?php 
        //only visible to admin
        if($_SESSION['username'] === 'admin123') {?> 

        <div class="box-nominate">
            <p class="nominate-heading">Nominated GL & AGL</p>
            <p class="nominate-subheading">List of GL & AGL</p>
            <div class="box-nominateA">
            <a href="manage_gl.php" style="text-decoration: none;"><p class="C-ctext">Edit/View GL & AGL</p></a>
            </div>
        </div>            

        <?php } ?> 
    </body>
</html>