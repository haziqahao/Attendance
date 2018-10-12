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
        <?php
        include('header.php');
        ?>

        <!-- Page Content -->
        <?php
            $query = 'SELECT * FROM user WHERE username="'.$_SESSION['username'].'"';
            $run_query = mysqli_query($connection, $query);
        ?>
        
        <?php
            foreach($run_query as $user){
                echo"
                <div class='organize'>
                    <p class='status'>Status</p>
                    <p class='student'>".$user['role']."</p>   

                <div class='userbox'> 
                    <p class='userstudent'>&nbsp;&nbsp;Username&nbsp;&nbsp;</p>
                    <p>".$user['username']."</p>   
                </div>
                
                <div class='B'>
                    <div class='userbox'> 
                        <p class='userstudent'>&nbsp;&nbsp;Fullname&nbsp;&nbsp;</p>
                        <p>".$user['name']."</p>   
                    </div>
                </div>";
            }
        ?>

        <?php   
            if($_SESSION['role'] == "student"){
            echo"
                <div class='copy'>
                    <p class='status'>Student Id</p>
                    <p class='student'>".$user['code']."</p>
                </div>
            ";
            }
        ?>    

        <?php
            foreach($run_query as $user){
                echo"
                <div class='C'>
                    <div class='userbox'> 
                        <p class='userstudent'>&nbsp;&nbsp;Email&nbsp;&nbsp;</p>
                        <p>".$user['email']."</p>   
                    </div>
                </div>

                <div class='D'>
                        <div class='userbox'> 
                            <p class='userstudent'>&nbsp;&nbsp;Password&nbsp;&nbsp;</p>   
                        </div>
                    </div>

                    <div class='edit-btn'>
                        <p class='edit'>Edit Profile</p>
                    </div>
                </div>";
            }
        ?>
    </body>
</html>