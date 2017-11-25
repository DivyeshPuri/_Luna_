
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
<body style="background-color: #C3C3E5; color: #443266">
	<header>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
			<a href="#" class="navbar-brand">Krieva</a>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a href="userpage.php" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="chooseevent.php" class="nav-link">Register</a>
					</li>
				</ul>
			</div>
		</nav>	
	</header>
	<div class="container-fluid">
	<div class="row" style="padding-top: 60px;">
            <div class="col-2"></div>
            <div class="col-7">
                <h1 class="text-center">Music</h1>
            </div>
        </div>
		<div class="row" style="padding-top: 20px;">
		    <div class="col-2"></div>
			<div class="col-7">
				<main>
				    <?php
				    require_once("config.php");
				    $query = 'SELECT event_name, details FROM events';
                    $response = @mysqli_query($dbc, $query);
                    if($response) {
                        while ($row = mysqli_fetch_array($response)) {
                            if($row['event_name']=='Music')
                                echo '<section><h2 id = "Starter">'.$row['details'].'</h2></section>';
                        }
                    }
                    require_once ("temp.php");
                    $query = 'SELECT list, description FROM music';
                    $response = @mysqli_query($dbc, $query);
                    if($response) {
                        while ($row = mysqli_fetch_array($response)) {
                            echo ' <section> <h3 style="display: none" id = "' .$row['list'] .'">' .$row['description'] .'</h3></section>';
                        }
                    }
                    ?>
				</main>
			</div>
			<nav class='sidebar col-2'><ul class="nav nav-pills flex-column">
                    <?php
                    require_once('config.php');
                    $query = 'SELECT list FROM music ' ;
                    $response = @mysqli_query($dbc, $query);
                    if($response) {
                        while ($row = mysqli_fetch_array($response)) {
                            echo '<li class="nav-item"><a href="#" class="nav-link" onclick="reply_click(this.textContent)">' . $row['list'] . '</a></li>';
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
</html>