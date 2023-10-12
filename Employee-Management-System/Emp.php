<?php
 
class Database{
	
	private $connection;
 
	function __construct()
	{
		$this->connect_db();
	}
 
	public function connect_db(){
		$this->connection = mysqli_connect('localhost', 'root', '', 'demo');
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}
 
	public function create($name,$email,$password,$age,$salary,$dob,$gender,$image){
		$sql = "INSERT INTO `crud` (name,email,password,age,salary,dob,gender,image) VALUES ('$name','$email','$password', '$age','$salary','$dob','$gender','$image')";
		$res = mysqli_query($this->connection, $sql);
		if($res){
	 		return true;
		}else{
			return false;
		}
	}
 
	public function createbio($name,$tel,$bio){
		$sql = "INSERT INTO `bio` (name,tel,bio) VALUES ('$name','$tel','$bio')";
		$res = mysqli_query($this->connection, $sql);
		if($res){
	 		return true;
		}else{
			return false;
		}
	}
	public function createbioad($name,$email,$position,$bio){
		$sql = "INSERT INTO `bioad` (name,email,position,bio) VALUES ('$name','$email','$position','$bio')";
		$res = mysqli_query($this->connection, $sql);
		if($res){
	 		return true;
		}else{
			return false;
		}
	}
	public function createleave($name,$email,$reason,$sdate,$ldate,$status){
		$sql = "INSERT INTO `empleave` (name,email,reason,sdate,ldate,status) VALUES ('$name','$email','$reason','$sdate','$ldate','Pending')";
		$res = mysqli_query($this->connection, $sql);
		if($res){
	 		return true;
		}else{
			return false;
		}
	}
	public function read($id=null){
		$sql = "SELECT * FROM `crud`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;

	}
	public function readbio($id=null){
		$sql = "SELECT * FROM `bio`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;

	}
	
	public function readbioad($id=null){
		$sql = "SELECT * FROM `bioad`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;

	}
	public function readleave($id=null){
		$sql = "SELECT * FROM `empleave`";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;

	}
	public function count($id=null){
		$sql = "SELECT * FROM `empleave` WHERE status='Accepted'";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;

	}
	public function countcancel($id=null){
		$sql = "SELECT * FROM `empleave` WHERE status='Denied'";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;

	}
	public function lastreport($id=null){
		$sql = "SELECT status FROM `empleave` ORDER BY id DESC LIMIT 1";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;

	}
	public function totpending($id=null){
		$sql = "SELECT * FROM `empleave` WHERE status='Pending'";
		if($id){ $sql .= " WHERE id=$id";}
 		$res = mysqli_query($this->connection, $sql);
 		return $res;

	}
	public function update($name,$email,$password,$age,$salary,$dob,$gender,$image, $id){
		$sql = "UPDATE `crud` SET name='$name', email='$email', password='$password',age='$age',salary='$salary',dob='$dob', gender='$gender',image='$image' WHERE id=$id";
		$res = mysqli_query($this->connection, $sql);
		if($res){
			return true;
		}else{
			return false;
		}
	}
	public function updateleave($id){
		$sql = "UPDATE `empleave` SET status='Accepted' WHERE id=$id and status='pending'";
		$res = mysqli_query($this->connection, $sql);
		if($res){
			return true;
		}else{
			return false;
		}
	}
	public function cancelleave($id){
		$sql = "UPDATE `empleave` SET status='Denied' WHERE id=$id and status='pending'";
		$res = mysqli_query($this->connection, $sql);
		if($res){
			return true;
		}else{
			return false;
		}
	}
	
	public function updatebioad($name,$email,$position,$bio, $id){
		$sql = "UPDATE `bioad` SET name='$name', email='$email', position='$position',bio='$bio' WHERE id=$id";
		$res = mysqli_query($this->connection, $sql);
		if($res){
			return true;
		}else{
			return false;
		}
	}
	public function updatebio($name,$tel,$bio, $id){
		$sql = "UPDATE `bio` SET name='$name', tel='$tel',bio='$bio' WHERE id=$id";
		$res = mysqli_query($this->connection, $sql);
		if($res){
			return true;
		}else{
			return false;
		}
	}
	public function delete($id){
		$sql = "DELETE FROM `crud` WHERE id=$id";
 		$res = mysqli_query($this->connection, $sql);
 		if($res){
 			return true;
 		}else{
 			return false;
 		}
	}
	 
	public function deleteleave($id){
		$sql = "DELETE FROM `empleave` WHERE id=$id";
 		$res = mysqli_query($this->connection, $sql);
 		if($res){
 			return true;
 		}else{
 			return false;
 		}
	}
	public function sanitize($var){
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}
 
}
 
$database = new Database();
 
?>