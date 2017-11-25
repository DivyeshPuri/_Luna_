<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device width, initial-scale=1, shrink-to-fit=no">
    <title>Luna - Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="eventscss.css" rel="stylesheet">
</head>
<body>
<section class="cover">
    <div class="container-fluid">
        <div class="row cover-caption">
            <div class="col-md-4">
                <a href="userpage.php" role="button" class="btn btn-dark">Back</a>
            </div>
            <div class="col-md-4 text-center">
                <h1>Events</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card-deck card-row">
                    <?php
                    require_once('config.php');
                    $query = "SELECT * FROM events";
                    $response = @mysqli_query($dbc, $query);
                    $count = 1;
                    if ($response) {
                    while ($row = mysqli_fetch_array($response)) {
                    $file = strtolower($row['event_name']) . ".php";
                    if ($count%4==0) {
                    echo '</div>';
                    $count = 1;
                    ?><div class="card-deck card-row">
                        <div class="card" style="height:400px;">
                            <img src="Images/<?php echo $row['image'];?>" class="card-img" style="height: 100%;">
                            <?php echo ' <div class="card-img-overlay d-flex justify-content-center align-items-center dance" style="color: whitesmoke;">
                           <a href="'.$file.'">
                            <h3 class="card-title">'. $row['event_name'];
                            echo '</h3></a></div></div>';
                            }

                            else {
                            ?>
                            <div class="card" style="height:400px;">
                                <img src="Images/<?php echo $row['image'];?>" class="card-img" style="height: 100%;">
                                <?php   echo '  <div class="card-img-overlay d-flex justify-content-center align-items-center dance" style="color: black;">
                            <a href="'.$file.'">
                            <h3 class="card-title">' . $row['event_name'];

                                echo '</h3></a></div></div>';
                                }
                                $count += 1;
                                }
                                } else {
                                    echo "Couldn't issue database query";
                                    echo mysqli_error($dbc);
                                }
                                mysqli_close($dbc);
                                ?>
                            </div>
                        </div>
</section>
</body>
</html>
