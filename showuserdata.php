<?php
	session_start();
	error_reporting(0);	
?>
<html>
<head>
<title> User Data Display </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="dispRegistrationscss.css">
</head>
<body>

<div id="wrapper" class="container-fluid">
    <div class="row">
        <nav class="sidebar col-2 bg-faded sidebar-style-1">
            <h1 class="navbar-brand">
                <a href="#"><strong>Kreiva</strong></a>
            </h1>
            <ul class="nav nav-pills flex-column sidebar-nav">
                <li class="nav-item">
                    <a href="adminpage.php" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="dispRegistrations.php" class="nav-link">Registrations</a>
                </li>
                <li class="nav-items">
                    <a href="addEvent.php" class="nav-link"><em class="fa fa-plus"></em> Add Events</a>
                </li>
                <li class="nav-items">
                    <a href="addSubEvents.php" class="nav-link"><em class="fa fa-plus"></em> Add Sub Events</a>
                </li>
                <li class="nav-items">
                    <a href="deleteEvent.php" class="nav-link"><em class="fa fa-trash-o"></em> Remove Events</a>
                </li>
                <li class="nav-item">
                    <a href="showuserdata.php" class="nav-link">Show Records</a>
                </li>
            </ul>
            <a href="admin_logout.php" class="logout-button">
                <em class="fa fa-lock"></em>
                Signout
            </a>
        </nav>
    </div>
    <main class="col-10 ml-auto">
        <header class="page-header row">
            <div class="col-md-6 col-lg-8">
                <h1 class="display-4">Add/Remove Events</h1>
            </div>
            <div class="col-4">
                <?Php
                session_start();
                $conn=mysqli_connect('localhost','root','','eventmanage');
                $user1=$_SESSION['login_user'];
                $pass=$_SESSION['password'];
                $sql="SELECT * FROM adminlogin WHERE email='".$user1."' AND password='".$pass."'";

                $run=mysqli_query($conn,$sql);
                $user= mysqli_fetch_array($run,MYSQLI_ASSOC);
                $admin_img=$user['image'];

                $admin_image= $_SESSION['$admin_img'];
                ?> <img src ="eventimage/<?php echo $admin_img ?>" class="rounded-circle" width="80px" height="80px">
            </div>
        </header>
        <div class="col-12">
            <?php
            $dbName = 'eventmanage';
            $conn =mysqli_connect("localhost","root","","eventmanage");
            //$con=mysqli_connect("localhost","root","","eventmanage");
            $res = "SHOW TABLES FROM $dbName";
            $result=mysqli_query($conn,$res);
            $i=0;
            //$submit=0;
            if ($result)
            {
            $data = array();

            while ($row = mysqli_fetch_assoc($result))
            {
            $currTable = $row['Tables_in_'.$dbName];

            $data[$i] = $currTable;
            //echo $currTable;
            $i = $i + 1;
            //echo $i;
            if($currTable!="register" && $currTable!="adminlogin" && $currTable != "events")
            {
            ?><h3><?php	echo $currTable ?></h3><?php

            // $conn=mysqli_connect('localhost','root','','eventmanage');
            $sql="SELECT register.name,register.email,register.college,register.mobile_no,".$currTable.".event1,".$currTable.".event2,".$currTable.".event3,".$currTable.".event4 FROM register INNER JOIN ".$currTable." ON register.email=".$currTable.".email; ";
            // var_dump($sql);
            $run=mysqli_query($conn,$sql);
            //var_dump($run);
            ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th> Name </th>
                            <th> Email </th>
                            <th> College </th>
                            <th> Mobile No </th>
                            <th> Event1 </th>
                            <th> Event2 </th>
                            <th> Event3 </th>
                            <th> Event4 </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($user= mysqli_fetch_array($run,MYSQLI_ASSOC))

                    {
                        echo "<tr>";
                        //echo  "<td>".$user['id']."</td>";
                        echo  "<td>".$user['name']."</td>";
                        echo  "<td>".$user['email']."</td>";
                        echo  "<td>".$user['college']."</td>";
                        echo  "<td>".$user['mobile_no']."</td>";
                        echo  "<td>".$user['event1']."</td>";
                        echo  "<td>".$user['event2']."</td>";
                        echo  "<td>".$user['event3']."</td>";
                        echo  "<td>".$user['event4']."</td>";
                        echo "</tr>";
                    }


                    ?>
                    </tbody>
                </table>
    <?php
    }
    //echo "reached";
    //var_dump($data) ;
    //echo $data['i'];
    //var_dump($data);
    if ($data['i']!= 'register'){
    //$club_array = array()
    $_SESSION['data'] = $data;
    }
    }
    ?>
   <a class="btn btn-primary" href="Excel.php"> Export To Excel </a>
   <?php
    //var_dump($_SESSION['data'][0]); 
    //echo ($_SESSION['data']);
    //var_dump($_SESSION);
    }
    ?>
            </div>
        </div>
    </main>
</div>

</body>
</html>

