<?php
$con=mysqli_connect("localhost", "root", "") or die("mysql connection is failure.");
mysqli_select_db($con,"project") or die("Database does not exists.");
?>