<?php
$obj = new mysqli("localhost","root","","stu_project");
if($obj->connect_errno !=0){
	echo $obj->connect_errno();
	
}
?>