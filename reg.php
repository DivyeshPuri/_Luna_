<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="carousel.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<body background="bg.jpg" style="background-size: cover">

<div class="row">
    <div class="col-md-3" style="margin-left: 26%;padding-right: 2px;border-radius: 4px">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom: 0px">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="min.jpeg" alt="First slide" style="border-radius: 4px">
                    <!--<div class="container">
                        <div class="carousel-caption d-none d-md-block text-left">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis </p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>-->
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="min2.png" alt="Second slide" style="border-radius: 4px">
                    <!--<div class="container">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in,</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>-->
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="min3.jpeg" alt="Third slide" style="border-radius: 4px">
                    <!--<div class="container">
                        <div class="carousel-caption d-none d-md-block text-right">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in,</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>-->
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-md-3" style="background-color: #212E3F;border-radius: 4px; box-shadow: 10px white">
        <h2 class="featurette-heading" style="margin-top: 10%;color: #BFC4CB">Sign Up</h2>
        <form  method="post" action ="register.php" enctype="multipart/form-data" style="font-size: 12px;margin-top: 10%; font-size: 10px;color: #BFC4CB">
            <?php
            $nameErr = $emailErr = $passwordErr = $collegeErr = $mobile_noErr = "";
            ?>
            <div class="form-group">
                <label for="name">FULL NAME</label>
                <input type="text" class="form-control" id="name" name="name" value="" required="" title="Please enter you username" placeholder="Full Name" style="border: 0px; background-color: transparent;border-bottom: 1px solid;color: white;font-size: 14px">
                <span class="error"><?php echo $nameErr;?></span>
            </div>
            <div class="form-group">
                <label for="email">E-MAIL</label>
                <input type="text" class="form-control" id="email" name="email" value="" required="" title="Enter your Email here" placeholder="Email@address.com" style="border: 0px; background-color: transparent;border-bottom: 1px solid;color: white;font-size: 14px">
                <span class="error"><?php echo $emailErr;?></span>
            </div>
            <div class="form-group">
                <label for="password">PASSWORD</label>
                <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password" placeholder="Password" style="border: 0px; background-color: transparent;border-bottom: 1px solid;color: white;font-size: 14px">
                <span class="error"><?php echo $passwordErr;?></span>
            </div>
            <div class="form-group">
                <label for="mobile_no">MOBILE NUMBER</label>
                <input type="tel" class="form-control" name="mobile_no" value="" required="" title="Please enter your mobile number" placeholder="mobile_no" style="border: 0px; background-color: transparent;border-bottom: 1px solid;color: white;font-size: 14px">
                <span class="error"><?php echo $mobile_noErr;?></span>
            </div>
            <div class="form-group">
                <label for="college">COLLEGE</label>
                <input type="text" class="form-control" id="college" name="college" value="" required="" title="Enter your College here" placeholder="College" style="border: 0px; background-color: transparent;border-bottom: 1px solid;color: white;font-size: 14px">
                <span class="error"><?php echo $collegeErr;?></span>
            </div>
            <input type="submit" name="submit" value="Login" style="background-color: #90A4AE;border-radius: 30px;width: 30%">
        </form>
    </div>
</div>

<?php
$name = $email = $password = $college = "";
$nameErr = $emailErr = $passwordErr = $collegeErr = $mobile_noErr = "";
if(isset($_POST['submit'])) {
    if (empty($_POST["name"])) {
        $nameErr = "Name is Required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    $password = $_POST["password"];
    if (empty($_POST["email"])) {
        $emailErr = "E-mail is Required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    if (empty($_POST["mobile_no"])){
        $mobile_noErr = "mobile_no is Required";
    }
    else{
        $mobile_no = test_input($_POST["mobile_no"]);

    }

    if (empty($_POST["college"])) {
        $collegeErr = "College is Required";
    } else {
        $college = test_input($_POST["college"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $college)) {
            $collegeErr = "Only letters and white space allowed";
        }
    }
// Create connection
    $conn = mysqli_connect("localhost", "root", "", "eventmanage");
    $sql = "INSERT INTO register (name,email,password,college,mobile_no) VALUES ('$name','$email','$password','$college','$mobile_no')";
    $run = mysqli_query($conn, $sql);

    if ($run != TRUE) {
        echo "Error: ";
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    exit;
}
?>
</body>
</html>