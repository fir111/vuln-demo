<?php
echo $_POST['name'];
echo $_POST['password']

$is_active=0;
$super_user=0;

if (isset($_POST['is_active']){ $is_active = 1;}
if (isset($_POST['super_user']){ $super_user = 1;}

$con = mysqli_connect('localhost', 'user', 'password', 'demo');
if ($con->connect_error){ die("Connection failed".$con->connect_error); }

$sql = "insert into test(name, is_active, password, super_user) values ('".$_POST['name']."', '".$is_active"', '".$_POST['password']."', '".$super_user."')";

if ($con->query($sql) === TRUE){ echo "OK"; }
else { echo "Error"; }

$con->close();
?>