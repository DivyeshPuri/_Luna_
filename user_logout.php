<?php
/**
 * Created by PhpStorm.
 * User: Avtans
 * Date: 17-11-2017
 * Time: 11:52
 */
session_start();//session is a way to store information (in variables) to be used across multiple pages.
session_destroy();
header("Location: login.php");
?>