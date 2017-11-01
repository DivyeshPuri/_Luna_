<html>
<head>
<title>A BASIC HTML FORM</title>
<?php
    if (isset($_POST['Submit1'])) {
        $user = $_POST['username'];
    }
    print($user);
?>
</head>
<body>
<FORM NAME ="form1" METHOD ="POST" ACTION = "page1.php">

<INPUT TYPE = "TEXT" Value="" Name="username">
<INPUT TYPE = "Submit" Name = "Submit1" Value = "Login">

</FORM>

</body>
</html>
