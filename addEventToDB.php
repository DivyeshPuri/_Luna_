<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device width, initial-scale=1, shrink-to-fit=no">
    <title>Luna</title>
</head>
<body>
<?php
    require_once ("config.php");
    $add_event = mysqli_real_escape_string($dbc, $_REQUEST['Event']);
    $valid = true;
    if(isset($_POST['submit'])) {

        if(empty($add_event)) {
            $valid = false;
        }

        $query = "INSERT INTO events (event_name) VALUES ('$add_event')";

        if($valid) {
            if(mysqli_query($dbc, $query)) {
                echo 'Successfully added';
            } else {
                echo 'ERROR: ' . mysqli_error($dbc);
            }

            if(mysqli_query($dbc, 'select 1 from '. $add_event . ' LIMIT 1')) {
                echo 'Table exists';
            } else {
                $sql = "CREATE TABLE " .$add_event. " (id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, list VARCHAR(30) NOT NULL)";

                if (mysqli_query($dbc, $sql)) {
                    echo "Table created successfully";
                } else {
                    echo "Error creating table: " . mysqli_error($dbc);
                }
            }
        } else {
            echo 'Invalid Entry';
        }
    }
?>
</body>
</html>