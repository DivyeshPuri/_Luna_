<?php
// Includes Login Script
if(isset($_SESSION['login_user'])){
    header("location: welcome.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title> adminlogin page</title>
</head>
<body>
<form action="" method="post" style="text-align:center;953">
    <table style="width:50%;b " align="center">
        <tr>
            <td align="right"> username</td>
            <td> <input type="text" name="username" placeholder="username"  required ></td>
        </tr><br>
        <tr>
            <td align ="right"> password</td>
            <td> <input type="password" name="password" placeholder="*******" required></td>
        </tr><br>
        <tr>
            <td align="right"> <input type="checkbox" name="keep" ></td>
            <td align ="left"> keep me logged in: </td>
        </tr>
        <br>
        <tr>
            <td colspan="2" align="center"> <input type ="submit" name="submit" value ="login"></td>
        </tr>
    </table>
</form>
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
        $sql="SELECT * FROM `adminlogin` WHERE username='".$username."' AND password='".$password."'";

        $run=mysqli_query($conn,$sql);

        if($run!=true) {
            echo "error";
        }

        //$rows = mysqli_num_rows($run);
        $rows=$run->fetch_row();
        printf("%d",$rows);
        if ($rows >0) {
            $_SESSION['login_user']=$username; // Initializing Session
            header("location: showdata.php"); // Redirecting To Other Page
        } else {
            //$error = "Username or Password is invalid";
            {
                ?>
                <script>
                    alert('username or password not match');
                    window.open('adminlogin.php','_self');
                </script>
                <?php
            }
        }
        mysqli_close($conn); // Closing Connection
    }
}


?>
