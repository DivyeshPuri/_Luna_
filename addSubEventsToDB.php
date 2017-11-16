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
    //require_once ("config.php");
    $conn=mysqli_connect("localhost","root","","trial");
    //$whichDB = mysqli_real_escape_string($dbc, $_REQUEST['sub_events']);
    $valid = true;
   // $add_events = mysqli_real_escape_string($dbc, $_REQUEST['addSub']);
   if(isset($_POST["submit"]))
   {
   $whichDB=$_POST["sub_events"];
   var_dump($whichDB);
    $add_events=$_POST["addSub"];
    $add_description = $_POST["Describe"];
     var_dump($add_events);
    

        if(empty($add_events)) {
            $valid = false;
        }

        $query = "INSERT INTO " . $whichDB . " (list, description) VALUES ('$add_events', '$add_description')";
        if($valid) {
            if(mysqli_query($conn, $query)) {
                 header("Location: addSubEvents.php");
            } else {
                echo 'Error: ' . mysqli_error($conn);
            }
        } else {
            echo 'Invalid Entry';
        }
    }
    
?>
</body>
</html>
