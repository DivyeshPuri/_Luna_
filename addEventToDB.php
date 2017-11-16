<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device width, initial-scale=1, shrink-to-fit=no">
    <title>Luna</title>
</head>
<body>
<?php
  $valid = true;
  if(isset($_POST['submit'])) {
      $add_event = $_POST["Event"];
      $add_desc = $_POST["Describe"];
      echo $add_event;
      $image = $_FILES["image"]["name"];
      $imagetype = $_FILES["image"]["type"];
      $filetype = explode("/", "$imagetype");
      if (isset($_FILES['image'])) {
          // $errors     = array();
          $maxsize = 20971526787;
          $acceptable = array(
              'image/jpeg',
              'image/jpg',
              'image/gif',
              'image/png');
          if (($_FILES['image']['size'] >= $maxsize) || ($_FILES["image"]["size"] == 0)) {
              ?>
              <script>
                  alert('file size out of limit');
                  window.open('addEvent.php', '_self');
              </script>
              <?php
          } else {

              $dbc = mysqli_connect("localhost", "root", "", "eventmanage");
              $conn = mysqli_connect("localhost", "root", "", "trial");
              $uploaddir = "C:\xampp\htdocs\trial\Images";
              $uploadfile = $uploaddir . basename($_FILES['image']['name']);
              move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
              $query = "INSERT INTO events (event_name,image, details) VALUES ('$add_event','$image','$add_desc')";

              if ($valid) {
                  if (mysqli_query($dbc, $query)) {
                      // echo 'Successfully added';
                  } else {
                      echo 'ERROR: ' . mysqli_error($dbc);
                  }
                  if (mysqli_query($conn, 'select 1 from ' . $add_event . ' LIMIT 1')) {
                      //header("Location: addEvent.php");
                      echo 'Table exists';
                  } else {
                      $sql = "CREATE TABLE " . $add_event . " (id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, list VARCHAR(30) NOT NULL, description VARCHAR(3000) NOT NULL)";
                      $squery = "CREATE TABLE " . $add_event . " (id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,email VARCHAR(30), event1 VARCHAR(30),event2 VARCHAR(30), event3 VARCHAR(30) ,event4 VARCHAR(30)NOT NULL)";
                      $run = mysqli_query($dbc, $squery);
                      if (mysqli_query($conn, $sql)) {
                          $file = strtolower($add_event) . ".php";
                          $title = strtolower($add_event);
                          $fh = fopen($file, 'a'); // or die("error");
                          $stringData = '
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
	<header>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<a href="#" class="navbar-brand">Krieva</a>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a href="#" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Settings</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Profile</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Help</a>
					</li>
				</ul>
			</div>
		</nav>	
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-10" style="top: 60px;">
				<main>
				    <?php
				    require_once("config.php");
				    $query = \'SELECT event_name, details FROM events\';
                    $response = @mysqli_query($dbc, $query);
                    if($response) {
                        while ($row = mysqli_fetch_array($response)) {
                            if($row[\'event_name\']==\'' . $add_event;
                          fwrite($fh, $stringData);
                          fwrite($fh, '\')
                                echo \'<section><h2 id = "Starter">\'.$row[\'details\'].\'</h2></section>\';
                        }
                    }
                    require_once ("temp.php");
                    $query = \'SELECT list, description FROM ' . $title);
                          fwrite($fh, '\';
                    $response = @mysqli_query($dbc, $query);
                    if($response) {
                        while ($row = mysqli_fetch_array($response)) {
                            echo \' <section> <h3 style="display: none" id = "\' .$row[\'list\'] .\'">\' .$row[\'description\'] .\'</h3></section>\';
                        }
                    }
                    ?>
				</main>
			</div>
			<nav class=\'sidebar col-2\'>');
                          fwrite($fh, '<ul class="nav nav-pills flex-column">
                    <?php
                    require_once(\'config.php\');
                    $query = \'SELECT list FROM ' . $title);
                          fwrite($fh, ' \' ;
                    $response = @mysqli_query($dbc, $query);
                    if($response) {
                        while ($row = mysqli_fetch_array($response)) {
                            echo \'<li class="nav-item"><a href="#" class="nav-link" onclick="reply_click(this.textContent)">\' . $row[\'list\'] . \'</a></li>\';
                        }
                    }
                    ?>
				</ul>
			</nav>
		</div>
	</div>
	<script type="text/javascript">
	localStorage.setItem("pre", "Starter");
      function reply_click(clicked_id)
      {
          var prev = document.getElementById(localStorage.getItem("pre"));
          var dis = document.getElementById(clicked_id);
          dis.style.display = "block";
          prev.style.display = "none";
          localStorage.setItem("pre", clicked_id);
      }
    </script>
</body>
</html>');
                          fclose($fh);
                          header("Location: addEvent.php");
                      } else {
                          echo "Error creating table: " . mysqli_error($dbc);
                      }
                  }
              } else {
                  echo 'Invalid Entry';
              }
          }
      }
  }
?>
</body>
</html>
