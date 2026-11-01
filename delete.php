<?php
include 'include/connect.php';

session_start();
if(!$_SESSION['admin_id']){
	header("location:index.php");
}

$del_id = $_GET['d_id'];
$query = $obj->query("delete from user where user_id='$del_id'");

if($query){
	echo("<script>alert('data deleted...');windows.location.href='manage_user.php';</script>");
}
else {
	echo("<script>alert('data delete error..');windows.location.href='manage_user.php';</script>");
}
exit;

?>