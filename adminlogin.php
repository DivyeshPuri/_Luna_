<?php
 // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: adminpage.php");
}
?>
<!DOCTYPE html>
<html>
<head>
     <title>Admin Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>

<section id="cover">
		<div id="cover-caption">
			<div class="container">
				<div class="col-md-10 col-md-offset-1">
					<h1 class="display-3">Welcome to Krieva</h1>
					<p>Admin Login</p>
				<form action="" style="max-width: 400px; margin: auto;" method="post">
					<div class="form-group">
						<input type="text" class="form-control form-control-lg" placeholder="Username" name="username" required>
						<input type="password" class="form-control form-control-lg" placeholder="Password" name="password" required>
					</div>
					<button type="submit" class="btn btn-success btn-lg" name="submit" value="login">Login</button>
				</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
<?php
    $username="";
    $password="";
    session_start(); // Starting Session
    $error=''; // Variable To Store Error Message
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Username or Password is invalid";
        }
    else {
    // Define $username and $password
            $username=$_POST['username'];
            $password=$_POST['password'];
            $conn=mysqli_connect("localhost","root","","eventmanage");
            $sql="SELECT * FROM adminlogin WHERE email='".$username."' AND password='".$password."'";
            $run=mysqli_query($conn,$sql);
            if($run!=true) {
                echo "Error";
            }
            $rows=$run->fetch_row();
            printf("%d",$rows);
            if ($rows > 0) {
                $_SESSION['login_user']=$username; // Initializing Session
                header("location: adminpage.php"); // Redirecting To Other Page
            } else {
            //$error = "Username or Password is invalid";
            ?>
                <script>
                    alert('username or password not match');
                    window.open('adminlogin.php','_self');
                </script>
            <?php
            }
                mysqli_close($conn); // Closing Connection
        }
    }
?>
