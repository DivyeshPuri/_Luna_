<!DOCTYPE html>
<html>
<head>
     <title>Delete</title>
</head>
<body>
      <form action="" method="post" style="text-align:center;953">
      <table style="width:50%;" align="center">
         <tr>
              <td align="right"> username</td>
              <td> <input type="text" name="email" placeholder="email"  required ></td>
         </tr></br>
       
              
          <tr>
               <td colspan="2" align="center"> <input type ="submit" name="submit" value ="delete"></td>
          </tr>
</table></form>



 <?php
   include("dbconn.php");
   $email="";
   
  
 
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {


// Define $username and $password
$email=$_POST['email'];
    //$sql="SELECT * FROM registration WHERE email='".$email."'";  
     $sql = "DELETE FROM register WHERE email='".$email."'";
      // $sql="SELECT *FROM registration";
       
      $run=mysqli_query($conn,$sql);
     


//}
   /* else {
//$error = "Username or Password is invalid";
      
         ?>
         <script>
         alert('username or password not match');
         window.open('login.php','_self');
         </script>
         <?php
      
}*/
//mysqli_close($conn); // Closing Connection
}
?>

 </body>
 </html>
