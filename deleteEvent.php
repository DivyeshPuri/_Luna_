<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device width, initial-scale=1, shrink-to-fit=no">
    <title>Luna</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="dispRegistrationscss.css">
</head>
<body>
<div class="container-fluid" id="wrapper">
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
            <a href="#" class="logout-button"><em class="fa fa-lock"></em> Signout</a>
        </nav>
        <main class="col-10 ml-auto">
            <header class="page-header row">
                <div class="col-md-6 col-lg-8">
                    <h1 class="display-4">Remove Events</h1>
                </div>
            </header>
            <div class="col-12">
                <form action="deleteEventDB.php" method="post">
                    <div class="form-group">
                        <label for="addEvent">Delete Event</label>
                        <select class="form-control" id="delSubEvent" name="delete_subevents">
                            <?php
                            require_once ("config.php");
                            $query = "SELECT event_name FROM events";
                            $response = @mysqli_query($dbc, $query);
                            if ($response) {
                                while ($row = mysqli_fetch_array($response)) {
                                    echo '<option>' . $row['event_name'] . '</option>';
                                }
                            } else {
                                echo "Error: " . mysqli_error($dbc);
                            }
                            ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit">Delete</button>
                </form>
            </div>
        </main>
    </div>
</div>
</body>
</html>