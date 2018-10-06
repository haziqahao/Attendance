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
        <style>
            html, body {
                background-color: #F6F6F5;
                color: #636b6f;
                font-family: Roboto, bold;
                font-weight: 100;
                height: 100%;
                margin: 0;
                max-width: 100%;
                overflow-x: hidden;
            }

             /* The sidebar menu */
            .sidenav {
                height: 100%; /* Full-height: remove this if you want "auto" height */
                width: 200px; /* Set the width of the sidebar */
                position: fixed; /* Fixed Sidebar (stay in place on scroll) */
                z-index: 1; /* Stay on top */
                top: 0; /* Stay at the top */
                left: 0;
                background-color: #FF5A74; /* Pink red */
                overflow-x: hidden; /* Disable horizontal scroll */
                padding-top: 40px;
            }

            .PB {
                padding: 10px 10px 10px 60px;
                color: #FFFFFF;
                font-family: Roboto;
                font-weight: bold;
                font-size: 14px;
                position: relative;
                top:-110px;
             
            }

            /* The navigation menu links */
            .sidenav a {
                padding: 20px 20px 20px 40px;
                text-decoration: none;
                font-size: 13px;
                font-family: Roboto;
                color: #FFFFFF;
                display: block;
                position: relative;
                top: -80px;
            }

            /* When you mouse over the navigation links, change their color */
            .sidenav a:hover {
                color: #FF5A74;
                font-weight: bold;
                background-color: #F6F6F5;

            }

            .sidenav a.current {      /* THIS ONE UNTUK HIGHLIGHT CURRENT PAGE ++++++++++++++++++++++++++++++++++++++++*/
                color: #FF5A74;
                font-weight: bold;
                background-color: #F6F6F5;

            } 

            /* Style page content */
            .main {
                margin-left: 160px; /* Same as the width of the sidebar */
                padding: 0px 10px;
            }

            /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }

            .header-box {
                margin-left: 200px;
                position: relative;
                padding-top: 5px;
                width: 100%;
                height:80px;
                background-color: #FFFFFF;
                box-shadow: 2px 2px 2px #A09E9E;
            }

            .dashboardtext {
                position: relative;
                top: -15px;
                padding-left: 20px;
                color:#81C8CE;
                font-family: Roboto;
                font-weight:bold;
            }

           

            .username {
                position: relative;
                left: 15px;
                top: 5px;
                color: #000000;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 12px;
            }

            .user-status {
                position: relative;
                left: 15px;
                top: -5px;
                color: #18BBD5;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 9px;
            }

            .dashboardtext {
                position: relative;
                top: -15px;
                padding-left: 20px;
                color: #D6D4D4;
                font-family: Roboto;
                font-weight:bold;
            }

            .classattendancesheettext {
                position: absolute;
                top: 42px;
                left: 133px;
                color: #81C8CE;
                font-family: Roboto;
                font-weight:bold;
            }

            .box-class-s {
                position: relative;
                left: 450px;
                top: 73px;
                background-color: #9CDFD6;
                width: 246px;
                height: 193px;
                
            }

            .A-heading {
                text-align: center;
                position: relative;
                top: 35px;
                color: #000000;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 18px;  
            }


            .box-Aa {
                background-color: #43D0BE;
                width: 246px;
                height: 10px;
                
            }

            .A-btext {
               
                left: 100px;
                top: 25px;
                color: #FFFFFF;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 12px;  
            }
            
            img{
                position: relative;
                top: -34px;
                left: 15px;
            }

            #image-1 {
                position: relative;
                top: 75px;
                left: 66px;
             
            }
            
            #image-2 {
                position: relative;
                top: 50px;
                left: 85px;
             
            }
            
            .dropdown{
               left: 30px;
            }

            #img-sort {
                position: absolute;
                top: 43px;
                left: 1030px;
            }

            .box-lecture-s {
                position: relative;
                left: 720px;
                top: -120px;
                background-color: #FFFFFF;
                width: 246px;
                height: 193px;
                
            }

            .box-class-s:hover {
                color: #FF5A74;
                font-weight: bold;
                background-color: #FFFFFF;

            }

            .B-heading {
                text-align: center;
                position: relative;
                top: 45px;
                color: #000000;
                font-family: Roboto;
                font-weight: bold; 
                font-size: 18px;  
            }

           .box-organize {
                position: relative;
                left: 90px;
            }

            .logout-box {
                position: relative;
                left: 900px;
                top: 10px;
                background-color: #F6F6F5;
                width: 150px;
                height: 40px;
                
            }

            .dropdown-content {
                display: none;
                position: absolute;
                left: 900px;
                top: 65px;
                background-color: #F6F6F5;
                min-width: 150px;
                overflow: auto;
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                font-size: 12px;
                text-decoration: none;
                display: block;
            }
            
            .dropdown a:hover {background-color: #FF5A74;}

            .show {display: block;}

            /* Table*/
            table {
                font-family: 'roboto';
                border-collapse: collapse;
                width: 80%;
                align-items: center;
                margin: -50px 0 0 240px;
                font-size: 14px;
            }
            

            td, th {
                text-align: center;
                padding: 10px;
                width: 30px;
            }
            

            tr:nth-child(even) {
                background-color: #ECECEC;
            }

            tr:nth-child(odd) {
                background-color: #fff;
            }
            
            .cal{
              position: absolute;  
              left: 1343px;
              top: 450px;
            }

            .cal-1{
              position: absolute;  
              left: 1361px;
              top: 465px;
            }
        

        </style>
    </head>
    <body>
       
        <!-- Side Navigation -->
        <?php
        include('sidenav.php');
        ?>

        <!-- Top header -->
        <div class="header-box">
            <div class="logout-box">
                <p class="username">Siti Nur Afifah Sait</p>
                <p class="user-status">Group Coordinator</p>
            </div>
                <p class="dashboardtext">Schedule &nbsp; &#9658;</p>
                <p class="classattendancesheettext">Session</p>

            <div class="dropdown">
                    <img id="img-sort" class="dropbtn" src="img/sort.png" onclick="myFunction()" style="width: 9px; height: 9px;">
                <div id="myDropdown" class="dropdown-content">
                    <a href="gcprof">Profile</a>
                    <a href="gcwelcome">Logout</a>
                </div>
            </div>
        </div> <!-- End header -->

        <!-- Page Content -->
        <div class="box-organize">
            <div class="box-class-s">
                
                    <div id="image-1">
                        <a href="schedule.php"><img src="img/class.png" style="width:80px; height:80px;"></a>
                    </div>
                        <p class="A-heading">Schedule</p>
            </div>
           
        <div class="box-lecture-s">
        <div class="box-Aa"></div>
            <a href="gcsession"><img id="image-2" src="img/lecture.png" style="width:80px; height:80px;"></a>
                <p class="B-heading">Session</p>
        </div>
        </div> <!-- End Content -->

            <div class="cal"><a href="gceditsession"><img src="img/tri.png"  width="40px"></a></div>
            <div class="cal-1"><a href="gceditsession"><img src="img/pencil.png"  width="15px"></a></div>
        <!-- Table -->
        <table>
            <tr>
                <th>#</th>
                <th>GROUP</th>
                <th>DATE</th>
                <th>TIME</th>
                <th>ROOM</th>
                <th>ACTION</th>
            </tr>
            <tr>
                <td>1</td>
                <td>DiICT(INS)0216/02</td>
                <td>04/09/2018</td>
                <td>8.00AM - 10.00AM</td>
                <td>9.04</td>
                <td></td>
                
            </tr>
            <tr>
                <td>2</td>
                <td>DiICT(NWS)0216/02</td>
                <td>04/09/2018</td>
                <td>1.00PM - 2.30PM</td>
                <td>6.04</td>
                <td></td>
            </tr>
        </table>

        
        <script>
                    /* When the user clicks on the button, 
                    toggle between hiding and showing the dropdown content */
                    function myFunction() {
                        document.getElementById("myDropdown").classList.toggle("show");
                    }

                    // Close the dropdown if the user clicks outside of it
                    window.onclick = function(event) {
                        if (!event.target.matches('.dropbtn')) {

                            var dropdowns = document.getElementsByClassName("dropdown-content");
                            var i;
                                for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                                if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                        }
                    }
                }
        </script>



    </body>
</html>
