<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
    <link href="adminpagecss.css" rel="stylesheet">
    <script>
      $( function() {
        $( "#accordion" ).accordion();
      } );
    </script>
    <link rel="stylesheet" href="adminpagecss.css">
</head>
<body>
<div id="wrapper" class="container-fluid">
    <div class="row">
        <nav class="sidebar col-2 bg-faded sidebar-style-1">
            <h1 class="navbar-brand">
                <a href="#"><strong>Kreiva</strong></a>
            </h1>
            <ul class="nav nav-pills flex-column sidebar-nav">
                <li class="nav-item">
                    <a href="userpage.php" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="trial_events2.php" class="nav-link">Events</a>
                </li>
                <li class="nav-item">
                    <a href="chooseevent.php" class="nav-link">Register</a>
                </li>
            </ul>
            <a href="user_logout.php" class="logout-button">
                <em class="fa fa-lock"></em>
                Signout
            </a>
        </nav>
        <main class="col-10 ml-auto">
            <header class="page-header row">
                <div class="col-md-6 col-lg-8">
                    <h1 class="display-4">Choose Events</h1>
                </div>
            </header>
            <form method="post" action="chooseevent.php">

                <?php

                error_reporting(0);
                session_start();
                $con=mysqli_connect("localhost","root","","eventmanage");
                $email=$_SESSION['login_user'];
                echo '<h3>Welcome '. $email .'</h3>';
                $dbName = 'trial';
                $conn =mysqli_connect("localhost","root","","trial");

                $res = "SHOW TABLES FROM $dbName";
                $result=mysqli_query($conn,$res);

                $topic1 ="";
                $topic2 ="";
                $topic3 ="";
                $topic4 ="";
                //$submit=0;
                if ($result)
                {
                    ?>
                    <div id="accordion">
                        <?php
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            $currTable = $row['Tables_in_'.$dbName];
                            ?>
                            <h3>
                                &nbsp;&nbsp;
                                <?php echo ucwords($currTable) ;?>
                            </h3>
                            <div>
                                <?php
                                $res2 = "SELECT * FROM $currTable";
                                $run=mysqli_query($conn,$res2);
                                ?>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input checked type='radio' name='mydisc' class="form-check-input" value="<?php echo $currTable ;?>"><?php echo ucwords($currTable) ;?><br>
                                    </label>
                                </div>
                                <?php
                                $count  = 0;
                                while ($user = mysqli_fetch_assoc($run))
                                {
                                    ?>
                                    <label for="checkbox-1">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value= "<?php echo  $user['list']; ?>" name="artlist[<?php echo $count;?>]"> <?php echo ucwords($user['list']);?><br>
                                    </label>
                                        <?php
                                    $count += 1;
                                }
                                ?>
                                <br>
                                <input class="btn btn-dark" type="submit" name="submit" value="Submit">
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                    <?php
                    echo '</ul>';

                }
                $email="";
                $topic1 ="";
                $topic2 ="";
                $topic3 ="";
                $topic4 ="";
                $dbName = 'trial';
                $conn =mysqli_connect("localhost","root","","trial");
                $con=mysqli_connect("localhost","root","","eventmanage");
                $res = "SHOW TABLES FROM $dbName";
                $result=mysqli_query($conn,$res);
                //echo $_SESSION['login_user'];
                if(isset($_POST["submit"]))
                {
                    if(isset($_POST["artlist"]))
                    {
                        //$email=$_SESSION['user_name'];
                        $email= $_SESSION['login_user'];
                        $event = $_POST["mydisc"];
                        $topic1 = $_POST['artlist'][0];
                        $topic2 = $_POST['artlist'][1];
                        $topic3 = $_POST['artlist'][2];
                        $topic4 = $_POST['artlist'][3];
                        if (!$con)
                        {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql= "INSERT INTO " .$event. " (email, event1, event2, event3, event4) VALUES ('$email', '$topic1','$topic2','$topic3','$topic4')";
                        if(mysqli_query($con,$sql))
                        {
                            echo 'Data added successfully';
                        }
                        else
                        {
                            echo "Error: " . $sql . "<br>" . mysqli_error($con);
                        }

                    }
                }
                ?>
            </form>
        </main>
    </div>
</div>
</body>
</html>
