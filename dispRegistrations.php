<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device width, initial-scale=1, shrink-to-fit=no">
<title>Luna</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="dispRegistrationscss.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
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
            </ul>
            <a href="#" class="logout-button">
                <em class="fa fa-lock"></em>
                Signout
            </a>
        </nav>
        <main class="col-10 ml-auto">
            <header class="page-header row">
                <div class="col-md-6 col-lg-8">
                    <h1 class="display-4">Registrations</h1>
                </div>
            </header>
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>College</th>
                            <th>Email</th>
                            <th>Events</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        require_once('config.php');
                        $query = "SELECT name, college, email, events, status FROM registrations";
                        $response = @mysqli_query($dbc, $query);
                        if ($response) {
                            while ($row = mysqli_fetch_array($response)) {
                                echo '<tr><td>' . $row['name'] . '</td>' .
                                    '<td>' . $row['college'] . '</td>' .
                                    '<td>' . $row['email'] . '</td>' .
                                    '<td>' . $row['events'] . '</td>' .
                                    '<td>' . $row['status'] . '</td>';
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
        </main>
    </div>
</div>
</body>
</html>
