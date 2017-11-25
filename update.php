<!DOCTYPE html>
<html>
<head>
     <title> update </title>
</head>
<body>
      <form action="" method="post" style="text-align:center;953">
      <table style="width:50%;" align="center">
         <tr>
              <td align="right"> username</td>
              <td> <input type="text" name="email" placeholder="email"  required ></td>
         </tr></br>
         <tr>
               <td align ="right"> password</td>
               <td> <input type="password" name="password" placeholder="*******" required></td>
          </tr></br>
          <tr>
              
          <tr>
               <td colspan="2" align="center"> <input type ="submit" name="submit" value ="login"></td>
          </tr>
</table></form>

   <table bgcolor="#CACFD2" width="80%" border="2" align="center">
<tr>
<th> id </th>
<th> name </th>
<th> address </th>
<th> mobile no </th>
<th> email </th>
<th> college </th>
<th> date </th>
<th> edit </th>

</tr>

 <?php
   include("dbconn.php");
   $email="";
   $password="";
  
 
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {


// Define $username and $password
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);
    $sql="SELECT * FROM registration WHERE email='".$email."' AND password='".$password."'";  
      
      // $sql="SELECT *FROM registration";
       
      $run=mysqli_query($conn,$sql);
     
 
while($user= mysqli_fetch_array($run,MYSQLI_ASSOC))
{
   
   echo "<tr>";
   echo  "<td>".$user['id']."</td>";
   echo  "<td>".$user['name']."</td>";
   echo  "<td>".$user['address']."</td>";
   echo  "<td>".$user['mobile_no']."</td>";
   echo  "<td>".$user['email']."</td>";
   //echo  "<td>".$user['password']."</td>";
   echo  "<td>".$user['college']."</td>";
   echo  "<td>".$user['date']."</td>";
   echo  "<td>" ?><a href="updateform.php? sid=<?php echo $user  ['id'];?>"> edit </a><?php "</td>";
   echo "</tr>";
}

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
 
 </table>
 </body>
 </html>
