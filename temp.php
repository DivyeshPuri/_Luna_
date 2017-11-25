<?PHP

define('DB_HOST1', 'localhost');
define('DB_USER1', 'root');
define('DB_PASS1', '');
define('DB_NAME1', 'trial');

$dbc = @mysqli_connect(DB_HOST1, DB_USER1, DB_PASS1, DB_NAME1)
OR die("Could't connect" . mysqli_connect_error());

?>
