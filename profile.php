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
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
       
        <!-- Side Navigation -->
        <?php
            include('sidenav.php')
        ?>

        <!-- Top header -->
        <div class="header-box">
          <div class="logout-box">
            <p class="username">Lauren William</p>
            <p class="user-status">Student</p>
          </div>
          <p class="dashboardtext">Dashboard &nbsp; ▶</p>
          <p class="profiletext">Profile</p>
          <p class="text">Personal Details</p>
          <div class="dropdown">
                    <img id="img-sort" class="dropbtn" src="img/sort.png" onclick="myFunction()" style="width: 9px; height: 9px;">
                <div id="myDropdown" class="dropdown-content">
                    <a href="studentprof">Profile</a>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="organize">
                <p class="status">Status</p>
                <p class="student">Student</p>   

            <div class="userbox"> 
                <p class="userstudent">&nbsp;&nbsp;Username&nbsp;&nbsp;</p> 
                <input class="box" type="text" name="text">  
            </div>
            
            <div class="B">
                <div class="userbox"> 
                    <p class="userstudent">&nbsp;&nbsp;Fullname&nbsp;&nbsp;</p>   
                </div>
            </div>

            <div class="copy">
                <p class="status">GroupCode</p>
                <p class="student">DiICT(INS)0216/02</p>
            </div>

            <div class="copy1">
                <p class="status">ID</p>
                <p class="student">DiICT(INS)/06/16/0001</p>
            </div>

            <div class="C">
                <div class="userbox"> 
                    <p class="userstudent">&nbsp;&nbsp;Email&nbsp;&nbsp;</p>   
                </div>
            </div>

            <div class="D">
                <div class="userbox"> 
                    <p class="userstudent">&nbsp;&nbsp;Password&nbsp;&nbsp;</p>   
                </div>
            </div>

            <div class="save-btn">
                <p class="save">Save Changes</p>
            </div>
        </div>

            
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