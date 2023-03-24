<?php

$Id = $_GET['ID'];
include 'Config.php';
mysqli_query($con, " DELETE FROM `products` WHERE Id = $Id");
header("location:index.php");

?>