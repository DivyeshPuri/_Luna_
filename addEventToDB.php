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
                    $file = strtolower($add_event) . ".php";
                    $title = strtolower($add_event);
                    $fh = fopen($file, 'a'); // or die("error");
                    $stringData = "<!DOCTYPE html>
<html lang=\"en\">
<head>
	<meta charset=\"UTF-8\">
	<meta name=\"viewport\" content=\"width=device width, initial-scale=1, shrink-to-fit=no\">
	<title>Luna - Login</title>
	<link href=\"css/bootstrap.css\" rel=\"stylesheet\">
	<link href=\"font-awesome-4.7.0/css/font-awesome.css\" rel=\"stylesheet\">
	<link href=\"dramacss.css\" rel=\"stylesheet\">
</head>
<body>
	<header>
		<nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
			<a href=\"#\" class=\"navbar-brand\">Krieva</a>
			<div class=\"collapse navbar-collapse\">
				<ul class=\"navbar-nav mr-auto\">
					<li class=\"nav-item active\">
						<a href=\"#\" class=\"nav-link\">Home</a>
					</li>
					<li class=\"nav-item\">
						<a href=\"#\" class=\"nav-link\">Settings</a>
					</li>
					<li class=\"nav-item\">
						<a href=\"#\" class=\"nav-link\">Profile</a>
					</li>
					<li class=\"nav-item\">
						<a href=\"#\" class=\"nav-link\">Help</a>
					</li>
				</ul>
			</div>
		</nav>	
	</header>
	<div class=\"container-fluid\">
		<div class=\"row\">
			<div class=\"col-10\" style=\"top: 60px;\">
				<main>
					<section>
						<h1>Hello World</h1>
					</section>
				</main>
			</div>
			<nav class=\"sidebar col-2\">";
                    fwrite($fh, $stringData);
                    fwrite($fh, '<ul class="nav nav-pills flex-column">
                    <?php
                    require_once(\'config.php\');
                    $query = \'SELECT list FROM ' . $title );
                    fwrite($fh,' \' ;
                    $response = @mysqli_query($dbc, $query);
                    if($response) {
                        while ($row = mysqli_fetch_array($response)) {
                            echo \'<li class="nav-item"> <a href="#" class="nav-link">\' . $row[\'list\'] . \'</a></li>\';
                        }
                    }
                    ?>
				</ul>
			</nav>
		</div>
	</div>
</body>
</html>');
                    fclose($fh);
                    header('Location: addEvent.php');
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