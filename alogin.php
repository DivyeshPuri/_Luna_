<?php
    require 'config.php';
    $username = "root";
    $password = "";
    $database = "db_trial";
    $server = "127.0.0.1";

   

    print "Server found" . "<BR>";

    $database = "db_trial";
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found) {
        $SQL = "SELECT * FROM trial_data";
        $result = mysqli_query($db_handle, $SQL);

        while ( $db_field = mysqli_fetch_assoc($result) ) {
        print $db_field['ID'] . " " . $db_field['Name'] . " " . $db_field['Surname'] . " " . $db_field['Email'];
        }
    }
    else {
        print "Database not found";
    }
    mysqli_close( $db_handle );
?>
