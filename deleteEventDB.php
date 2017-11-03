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
$whichDB = mysqli_real_escape_string($dbc, $_REQUEST['delete_subevents']);
$valid = true;
if(isset($_POST['submit'])) {

    $query = "DROP TABLE " . $whichDB;
    $query2 = "DELETE FROM events WHERE event_name=" .  "'$whichDB'";
    if($valid) {
        if(mysqli_query($dbc, $query) and mysqli_query($dbc, $query2)) {
            header('Location: deleteEvent.php');
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