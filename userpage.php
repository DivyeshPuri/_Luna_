<!DOCTYPE html>
<?php
error_reporting(0);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device width, initial-scale=1, shrink-to-fit=no">
    <title>Luna - Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="adminpagecss.css" rel="stylesheet">
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
                    <h1 class="display-4">Dashboard</h1>
                </div>
                <div class="col-4">
                    <?Php
                    session_start();
                    $conn=mysqli_connect('localhost','root','','eventmanage');
                    $user1=$_SESSION['login_user'];
                    $pass=$_SESSION['password'];
                    $sql="SELECT * FROM register WHERE email='".$user1."' AND password='".md5($pass)."'";
                    $run=mysqli_query($conn,$sql);
                    $user= mysqli_fetch_array($run,MYSQLI_ASSOC);
                    ?>
                </div>
            </header>
            <section class="row">
                <div class="col-12">
                    <section class="row">
                        <div class="col-8">
                            <div class="jumbotron">
                                <h1 class="mb-4">Hello, <?php echo $user1 ?></h1>
                                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </main>
    </div>
</div>
</body>
</html>
