<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device width, initial-scale=1, shrink-to-fit=no">
    <title>Luna - Login</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="dramacss.css" rel="stylesheet">
</head>
<body>
<?php
    require_once ("config.php");
    $whichDB = mysqli_real_escape_string($dbc, $_REQUEST['sub_events']);
    $valid = true;
    $add_events = mysqli_real_escape_string($dbc, $_REQUEST['addSub']);
    if(isset($_POST['submit'])) {

        if(empty($add_events)) {
            $valid = false;
        }

        $query = "INSERT INTO " . $whichDB . " (list) VALUES ('$add_events')";
        if($valid) {
            if(mysqli_query($dbc, $query)) {
                echo 'Successfully added';
            } else {
                echo 'Error: ' . mysqli_error($dbc);
            }
        } else {
            echo 'Invalid Entry';
        }
    }
?>
</body>
</html>