<html>
<head>
    <title>Luna</title>
</head>
<body>
<?php

    if(isset($_POST['submit'])) {
        $data_missing = array();

        if(empty($_POST['name'])) {
            $data_missing[] = "Name";
        } else {
            $arr_name = trim($_POST['name']);
        }

        if(empty($_POST['college'])) {
            $data_missing[] = "College";
        } else {
            $col = trim($_POST['college']);
        }

        if(empty($_POST['email'])) {
            $data_missing[] = "Email";
        } else {
            $mail = trim($_POST['email']);
        }

        if(empty($_POST['events'])) {
            $data_missing[] = "Events";
        } else {
            $event = trim($_POST['events']);
        }

        if(empty($_POST['status'])) {
            $data_missing[] = "Status";
        } else {
            $payment = trim($_POST['status']);
        }

        if(empty($_POST['password'])) {
            $data_missing[] = "Password";
        } else {
            $pass = trim($_POST['Password']);
        }

        if(empty($data_missing)) {
            require_once("config.php");

            $query = "INSERT INTO registrations(name, college, email, events, status) VALUES (?, ?, ?, ?, ?)";

            $stmt = mysqli_prepare($dbc, $query);

            mysqli_stmt_bind_param($stmt, "sssss", $arr_name, $col, $mail, $event, $payment);
            mysqli_stmt_execute($stmt);

            $affected_rows = mysqli_stmt_affected_rows($stmt);

            if($affected_rows==1) {
                echo 'Record added';
            }

            else {
                echo "Error <br/>";
                mysqli_error($dbc);
            }
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }
    }
?>
</body>
</html>