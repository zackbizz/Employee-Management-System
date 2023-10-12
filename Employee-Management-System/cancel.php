<?php
 require_once('Emp.php');
 $id = $_GET['id'];
 
$res = $database->readleave($id);
$r = mysqli_fetch_assoc($res);
 $r=$database->cancelleave($id);
 if($res){
	header("location:manageleave.php");
}else{
	echo "failed to update data";
}
?>