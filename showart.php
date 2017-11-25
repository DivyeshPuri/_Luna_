<html>
<head>
<title> show data of user </title>
</head>
<body>



<?php

 
 $conn=mysqli_connect('localhost','root','','eventmanage');
 $sql="SELECT register.name, register.email, register.mobile_no, register.college
FROM register
INNER JOIN Art
ON register.email=Art.email";
 
 $run=mysqli_query($conn,$sql);
 
 ?>
 
<table bgcolor="#CACFD2" width="80%" border="2" align="center">
<tr>

<th> name </th>
<th> mobile no </th>
<th> email </th>
<th> college </th>
<th> event1 </th>
<th> event2 </th>
<th> event3 </th>
<th> event4 </th>
</tr> 
<?php
while($user= mysqli_fetch_array($run,MYSQLI_ASSOC)) 

{  
   echo "<tr>";
   //echo  "<td>".$user['id']."</td>";
   echo  "<td>".$user['name']."</td>";
   echo  "<td>".$user['mobile_no']."</td>";
   echo  "<td>".$user['email']."</td>";
   //echo  "<td>".$user['password']."</td>";
   echo  "<td>".$user['college']."</td>";
   echo  "<td>".$user['event1']."</td>";
   echo  "<td>".$user['event2']."</td>";
   echo  "<td>".$user['event3']."</td>";
   echo  "<td>".$user['event4']."</td>";
    echo "</tr>";  
}

?>
   
</table>

    <a href="UserReport_Export.php"> Export To Excel </a> 
</body>
</html>
