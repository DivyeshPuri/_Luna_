<!DOCTYPE html>
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
                        <a href="adminpage.php" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="dispRegistrations.php" class="nav-link">Registrations</a>
                    </li>
                    <li class="nav-item">
                        <a href="trial_events.php" class="nav-link">Events</a>
                    </li>
                    <li class="nav-items">
                        <a href="addEvent.php" class="nav-link"><em class="fa fa-plus"></em> Add Events</a>
                    </li>
                    <li class="nav-items">
                        <a href="addSubEvents.php" class="nav-link"><em class="fa fa-plus"></em> Add Sub Events</a>
                    </li>
                    <li class="nav-items">
                        <a href="deleteEvent.php" class="nav-link"><em class="fa fa-trash-o"></em> Remove Events</a>
                    </li>
                </ul>
                <a href="adminlogin.php" class="logout-button">
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
    $sql="SELECT * FROM adminlogin";
    $run=mysqli_query($conn,$sql);
    $user= mysqli_fetch_array($run,MYSQLI_ASSOC);
    ?> <img src ="eventimage/<?php echo $user['image'];?>" class="rounded-circle" width="80px" height="80px">
                        </div>
                </header>
                <section class="row">
                    <div class="col-12">
                        <section class="row">
                            <div class="col-8">
                                <div class="jumbotron">
                                    <h1 class="mb-4">Hello, <?php echo $user['email']?></h1>
                                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                </div>
    <div class="cards">
<div class="card-header">Recents</div>
   <div class="card-body">
   <div class="table-responsive">
   <table class="table table-hover">
   <thead>
<tr>
    <th>Name</th>
    <th>College</th>
    <th>Phone</th>
</tr>
    </thead>
     <tbody>
                  <?php
                    require_once('config.php');
                   $query = "SELECT name, college, mobile_no FROM register ORDER BY id DESC LIMIT 4";
                   $response = @mysqli_query($dbc, $query);
                   if ($response) {
                 while ($row = mysqli_fetch_array($response)) {
                    echo '<tr><td>' . $row['name'] . '</td>' .
                     '<td>' . $row['college'] . '</td>' .
                       '<td>' . $row['mobile_no'] . '</td>' ;
                          echo '</tr>';
                           }
                       } else {
                        echo "Couldn't issue database query";
                         echo mysqli_error($dbc);
                        }
                         mysqli_close($dbc);
                         ?>
    </tbody>
          </table>
</div>
    </div>
</div>
</div>
<div class="col-4">
   <div class="table-responsive">

    <table class="table table-striped table-hover">

                                        <thead>
                                            <tr>
                                                <th>Events</th>
                                                <th>Registrations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dance</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Music</td>
                                                <td>150</td>
                                            </tr>
                                            <tr>
                                                <td>Drama</td>
                                                <td>300</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
