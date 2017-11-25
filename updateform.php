<html>
<head>
<title> Update Info </title>
</head>
<body>
<?php
//include ("dbconn.php");

$sid=$_GET['sid'];


 
$conn=mysqli_connect("localhost","root","","eventmanage"); 
$sql="SELECT * FROM register WHERE id='$sid'";

$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($run);


  $name="";
  $mobile_no="";
  $email="";
  $password="";
  $college="";
  if(isset($_POST['update']))
  { 
 
  //$id=$_POST["id"];
  $name=$_POST["name"];
  $address=$_POST["address"];
  $mobile_no=$_POST["mobile_no"];
  $email=$_POST["email"];
  $password=$_POST["password"];
    $college=$_POST["college"];
  $date=$_POST["date"];
  
  $sq="update registration SET name='$name',address='$address',mobile_no='$mobile_no',password='$password',college='$college',date='$date' WHERE email='$email' AND password='$password'";
  
$run=mysqli_query($conn,$sq);
}
?>
 <center><h2>update form </h2></center>

<form  method="post" action ="updateform.php">

  <div>
  

    
    <center><label><b>name</b></label>
    <input type="text" value="<?php echo $data["name"]; ?>" name="name" required></center></br>
    
        <center><label><b>Address</b></label>
    <input type="text" value="<?php echo $data['address']; ?>" name="address" required></center></br>
    
        <center><label><b>Mobile no</b></label>
    <input type="tel" value="<?php echo $data['mobile_no']; ?>" name="mobile_no" required></center></br>
    
        <center><label><b>Email </b></label>
    <input type="email" value="<?php echo $data['email']; ?>" name="email" required></center></br>
    
        <center><label><b>password</b></label>
    <input type="password" value="<?php echo $data['password']; ?>" name="password" required></center></br>
    
       <center><label><b>college</b></label>
    <input type="text" value="<?php echo $data['college']; ?>" name="college" required></center></br>
    
       <center><label><b>date</b></label>
    <input type="date" value="<?php echo $data['date']; ?>" name="date" required></center></br>                               
  </div>
  
  
  <center><div class="sub" ><center>    
    <input type="submit" name="update" value="update"/></center>
    </div></center>
    
    <center><div class="sub"  ><a href="update.php"><center>    
    <button type="submit" class="cancelbtn">Cancel</button>
    
 </a> </div>
</form>
</center>
</body>
</html>
