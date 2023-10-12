<?php
 require_once('Emp.php');
 $id = $_GET['id'];
 
 $res = $database->delete($id);
 if($res){
 	header('location: manageemp.php');
 }else{
 	echo "Failed to Delete Record";
 }