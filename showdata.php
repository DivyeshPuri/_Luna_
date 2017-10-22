<html>
<head>
    <title> show data of user </title>
</head>
<body>
<?php

$conn = mysqli_connect('localhost','root','','eventmanage');
$sql = "SELECT * FROM registration";

$run = mysqli_query($conn,$sql);
?>

<table bgcolor="#CACFD2" width="80%" border="2" align="center">
    <tr>
        <th> id </th>
        <th> name </th>
        <th> address </th>
        <th> mobile no </th>
        <th> email </th>
        <th> college </th>
        <th> date </th>
    </tr>
    <?php
    while($user = mysqli_fetch_array($run,MYSQLI_ASSOC))
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
    }

    ?>

</table>
</body>
</html>

<?php

//var_dump($run);
?>
