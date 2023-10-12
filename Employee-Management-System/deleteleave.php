<?php
 require_once('Emp.php');
 $id = $_GET['id'];
 
 $res = $database->deleteleave($id);
 if($res){
 	header('location: LeaveStatus.php');
 }else{
 	echo "Failed to Delete Record";
 }