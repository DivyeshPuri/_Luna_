<?php
// Includes Login Script

if(isset($_SESSION['login_user'])){
    header("location: welcome.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Back</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body style="background-color: #111124; font-family: Roboto">
    <div class="blog-header" style="text-align: center">
        <h1 style="color: #E3E3E3; font-size:100px;margin-left: -7%">Welcome</h1>
    </div>
        <div class="container-fluid">
            <div class="col-xs-5" style="border-right: 1px solid; margin-top: 10%;margin-left: 5%">
                <h1 style="text-align: center; color: #E3E3E3; font-size: 64px; margin-bottom: 10%;margin-top: 10%">_Lona_</h1>
            </div>
            <div class="col-xs-3" style="text-align: center;margin-top: 11%; margin-left: 12%; color: ##BDBDBD;">
                <!--<<form action="" method="post" style="text-align:center;">
                    table align="center">
                        <tr>
                            <td> <input type="text" name="email" placeholder="Email@address.com"  required ></td>
                        </tr><br>
                        <tr>
                            <td> <input type="password" name="password" placeholder="Password" required></td>
                        </tr><br>
                        <tr>

                        <tr>
                            <td align="center"> <input type ="submit" name="submit" value ="login"></td>
                        </tr>
                    </table>-->
                    <form action="" method="post" style="text-align:center;font-family: Consolas">
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="Email@address.com" style="border-color: #E3E3E3; background-color: #111124">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password" placeholder="Password" style="border-color: #E3E3E3; background-color: #111124">
                            <span class="help-block"></span>
                        </div>
                        <button type="submit" class="btn btn-success btn-block" style="background-color: #90A4AE">Login</button>
                        <br><h5 style="text-align: left">Forgot Password ?</h5>
                    </form>
                </form>
            </div>
        </div>
    </body>
</html>


<?php
include("dbconn.php");
$email="";
$password="";


session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else
    {
        // Define $username and $password
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="SELECT * FROM `registration` WHERE email='".$email."' AND password='".$password."'";


        $run=mysqli_query($conn,$sql);

        if($run != true)
        {
            echo "error";
        }
        //$rows = mysqli_num_rows($run);
        $rows=$run->fetch_row();
        printf("%d",$rows);
        if ($rows >0) {
            $_SESSION['login_user']=$email; // Initializing Session
            header("location: lona.html"); // Redirecting To Other Page
        } else {
            //$error = "Username or Password is invalid";
            {
                ?>
                <script>
                    alert('username or password not match');
                    window.open('login.php','_self');
                </script>
                <?php
            }
        }
        mysqli_close($conn); // Closing Connection
    }
}
?>
