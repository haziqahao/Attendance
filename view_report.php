<?php 
include('function.php');
?>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View Report</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Style -->
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

        <!-- Content -->
        <div class="box">
        	<p>This is your Attendance Report</p>
        </div>

        <!-- Detail -->
        <?php
            $users = 'SELECT * FROM user WHERE username="'.$_SESSION['username'].'"';
            $run_query = mysqli_query($connection, $users);
            
        ?>
        <div class="box-B">
            <div class="studentdetail">
                <?php
                    foreach($run_query as $user){
                        echo "<p class='username'>".$user['name']."</p>";
                        echo "<p>".$user['role']."</p>";
                    }

                echo"<table>
                    <tr>
                        <td>Email</td>";
                        echo "<td>".$user['email']."</td>";
                    echo"</tr>
                    <tr>
                        <td>Group Code</td>";
                        echo "<td>".$user['code']."</td>";
                    echo"</tr>
                </table>";
                
            echo"</div>
        </div>

        <!-- User Detail -->
        <div class='box-C'>";
        	echo"<h3>".$user['name']."</h3>";
        echo"</div>";
        ?>

        <!-- Table -->  
        <div class="box-A">
            <table>
                <thead>
                    <tr>
                        <th>DATE/TIME
                        </th>
                        <th>8:00am-10:00am</th>
                        <th>10:30am-12:00pm</th>
                        <th>01:00pm-02:30pm</th>
                        <th>02:30pm-04:30pm</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($results)){ ?>
                    <tr>
                        <td><?php echo $row ['date'] ?></td>
                    </tr>
                    <?php } ?>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>           
    </body>
</html>
