<html>
<head>
<title> adminphoto page </title>
</head>
<body>
 <center><h2>image </h2></center>

<form  method="post" action ="adminphoto.php" enctype="multipart/form-data">

  <div>
           <center><label><b>image</b></label>
    <input type="file"  name="image" required></center></br>
  </div>
  
 
  
  
  <center><div class="sub" ><center>    
    <input type="submit" name="submit" value="submit"/></center>
    </div></center>
    
    </body>
    </html>
    <?php
    
    $image="";
    $tempname="";
    
     if(isset($_POST['submit']))
  { 
 $image=$_FILES["image"]["name"];
  $imagetype=$_FILES["image"]["type"];
  $filetype=explode( "/","$imagetype");
 
 
 
 if(isset($_FILES['image'])) 
 {
 
   $maxsize    = 2097152;
    $acceptable = array(
        
        'image/jpeg',
        'image/jpg',
        'image/gif',
        'image/png');
        
        
    if(($_FILES['image']['size'] >= $maxsize) || ($_FILES["image"]["size"] == 0)) {
        
                  ?>
         <script>
         alert('file size out of limit');
         window.open('adminphoto.php','_self');
         </script>
         <?php
    }
    
    else
{
// Create connection
$password=md5($password);
$conn=mysqli_connect("localhost","root","","eventmanage");
$uploaddir="/opt/lampp/htdocs/eventmanagement/adminphoto/";
//$uploaddir='includes/dataimage.php/';
$uploadfile = $uploaddir . basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
$sql="INSERT INTO adminimage(image) VALUES ('$image')";
$run=mysqli_query($conn,$sql);


if ($run != TRUE) {
    
    echo "Error: ";
    
    /* <center><label><b>id</b></label>
    <input type="text" placeholder="enter id" name="id" required></center></br>*/
    

}
}
}
}
?>
