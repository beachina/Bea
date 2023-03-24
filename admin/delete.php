<?php

echo $Id = $_GET['ID'];
$con = mysqli_connect('localhost', 'root','','BeaClothingLine');
mysqli_query($con, "DELETE FROM `user` WHERE Id = $Id");
header("location:user.php");





?>