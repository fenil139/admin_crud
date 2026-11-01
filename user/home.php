<?php
include '../include/connect.php';

session_start();
if(!$_SESSION['admin_id']){
	header("location:index.php");
}

$users = $_SESSION['user_id'];

$rs = $obj->query("select * from user where user_id='$users'");

$row = $rs->fetch_object();
?>

.<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
	<title>home</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-light navbar-light">
		<div class="contaier-fluid">
			<a class="navbar-brand" style="color: darkblue ;">Logo</a>
		</div>
	</nav>
	<div class="container-fluid mt-3">
		welcom to our your side.....<?php echo $row->name; ?>
	</div>
</body>
</html>