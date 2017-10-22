<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="carousel.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<div>
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
                <!--<div>
                <div style="text-align: center;"><label><b>name</b></label>
                    <input type="text" placeholder="enter name" name="name" required></div><br>

                <div style="text-align: center;"><label><b>Address</b></label>
                    <input type="text" placeholder="enter address" name="address" required></div><br>

                <div style="text-align: center;"><label><b>Mobile no</b></label>
                    <input type="tel" placeholder="enter moblie no" name="mobile_no" required></div><br>

                <div style="text-align: center;"><label><b>Email </b></label>
                    <input type="email" placeholder="enter email id" name="email" required></div><br>

                <div style="text-align: center;"><label><b>password</b></label>
                    <input type="password" placeholder="password" name="password" required></div><br>

                <div style="text-align: center;"><label><b>college</b></label>
                    <input type="text" placeholder="college_name" name="college" required></div><br>

                <div style="text-align: center;"><label><b>date</b></label>
                    <input type="date" placeholder="date" name="date" required></div><br>
                <div style="text-align: center;"><label><b>Image</b></label>
                    <input type = "file" placeholder="Image" name="Image" required></div><br>
                </div>
                <div style="text-align: center;"><div class="sub" ><div style="text-align: center;">
                            <input type="submit" name="submit" value="submit"/></div>
                    </div></div>
                <div style="text-align: center;"><div class="sub"  >
                        <a href="index.php" style="text-align: center;">
                                <button type="submit" class="cancelbtn">Cancel</button>
                        </a>
                </div>-->
                <div class="form-group">
                    <label for="username">FULL NAME</label>
                    <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="Full Name" style="border: 0px; background-color: transparent;border-bottom: 1px solid;color: white;font-size: 14px">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="password">PASSWORD</label>
                    <input type="text" class="form-control" id="email" name="Email" value="" required="" title="Enter your Email here" placeholder="Email@address.com" style="border: 0px; background-color: transparent;border-bottom: 1px solid;color: white;font-size: 14px">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="email">E-MAIL</label>
                    <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password" placeholder="Password" style="border: 0px; background-color: transparent;border-bottom: 1px solid;color: white;font-size: 14px">
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label for="college">COLLEGE</label>
                    <input type="text" class="form-control" id="college" name="College" value="" required="" title="Enter your College here" placeholder="College" style="border: 0px; background-color: transparent;border-bottom: 1px solid;color: white;font-size: 14px">
                    <span class="help-block"></span>
                </div>
                <button type="submit" class="btn btn-success btn-block" style="background-color: #90A4AE;border-radius: 30px;width: 30%">Login</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    $name="";
    $email="";
    $password="";
    $college="";
    if(isset($_POST['submit']))
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $college=$_POST["college"];
    }
    // Create connection
    $conn = mysqli_connect("localhost","root","","eventmanage");
    $sql = "INSERT INTO registration(name,email,password,college) VALUES ('$name','$email','$password','$college')";
    $run = mysqli_query($conn,$sql);

    if ($run != TRUE) {
        echo "Error: ";
    }

?>
