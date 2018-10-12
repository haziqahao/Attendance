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
        include('sidenav.php');
        ?>

        <!-- Top header -->
        <?php
        include('header.php');
        ?>

        <!-- Page Content -->
        <div class="box-organize">
            <div class="box-class">
                <div class="boxa"></div>
                    <div id="image-1">
                        <a href="schedule.php"><img src="img/class.png" style="width:80px; height:80px;"></a>
                    </div>
                        <p class="A-heading">Schedule</p>
            </div>
           
        <div class="box-lecture">
            <a href="session.php"><img id="image-2" src="img/lecture.png" style="width:80px; height:80px;"></a>
                <p class="B-heading">Session</p>
        </div>
        </div>  <!-- End Content -->

            <div class="cal"><a href="gceditsession"><img src="img/tri.png"  width="40px"></a></div>
            <div class="cal-1"><a href="gceditsession"><img src="img/pencil.png"  width="15px"></a></div>
        
        <!-- Table -->
        <table class="table-organize">
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
