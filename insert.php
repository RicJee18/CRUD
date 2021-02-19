<?php

$conn = mysqli_connect("localhost","root", "");
$db = mysql_select_db($connect , "");

if(isset($_POST['insert'])){
    $name = $_POST['thisname'];
    $age  = $_POST['thisage'];
    $addr = $_POST['thisadd'];
}


?>