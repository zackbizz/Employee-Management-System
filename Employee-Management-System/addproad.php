<?php
 require_once('Emp.php');
    
 if(isset($_POST['submit']) & !empty($_POST['name']) & !empty($_POST['email']) & !empty($_POST['position']) & !empty($_POST['bio'])){
	 $name = $database->sanitize($_POST['name']);
     $email = $database->sanitize($_POST['email']);
	 $position = $database->sanitize($_POST['position']);
     $bio = $database->sanitize($_POST['bio']);
     
	 $res = $database->createbioad($name,$email ,$position, $bio);
	 if($res){
      header("location:profilead.php");	
	 }
     else{
	 	echo "failed to insert data";
	 }
}
?>
<html>
    <head>
        
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css">
    <style>


            
body{
    background-color:#f0f0f5;
}
            .navbar{
background-color:white;
width:200px;
height:100%;
margin-top:-10px;
margin-left:-5px;

            }
            .h2{
            margin-top:-725px;
            margin-left:195px;
            background-color:white;
            padding:8px;
            }
            .class1{
                padding:6px;
                margin-top:-60px;
                width:200px;
                border:0px;
            }
            .btn1:hover {
                background-color:#f0f0f5;
                border:1px;
            }
            .btn1.selected{
                background-color:#f0f0f5;
            }
            .btn1{
                margin-top:95px;
                width:200px;
                padding:7px;
                background-color:white;
                border:0px;
            }
            .btn2{
                margin-top:-120px;
                width:200px;
                padding:7px;
                background-color:white;
                border:0px;
            }
            .btn3{
                margin-top:-70px;
                width:200px;
                padding:7px;
                background-color:white;
                border:0px;
            }
            .btn4{
                margin-top:10px;
                width:200px;
                padding:6px;
                background-color:white;
                border:0px;
            }
            .btn2:hover {
                background-color:#f0f0f5;
                border:1px;
            }
            .btn2.selected{
                background-color:#f0f0f5;
            }
            .btn3:hover {
                background-color:#f0f0f5;
                border:1px;
            }
            .btn3.selected{
                background-color:#f0f0f5;
            }
            .btn4:hover {
                background-color:#f0f0f5;
                border:1px;
            }
            .btn4.selected{
                background-color:#f0f0f5;
            }
            .btn5{
                margin-top:-65px;
                width:200px;
                padding:6px;
                background-color:white;
                border:0px;
            }
            .btn5:hover {
                background-color:#f0f0f5;
                border:1px;
            }
            .btn5.selected{
                background-color:#f0f0f5;
            }
            .btn6{
                margin-top:-100px;
                width:200px;
                padding:6px;
                background-color:white;
                border:0px;
            }
            .btn6:hover {
                background-color:#f0f0f5;
                border:1px;
            }
            .btn6.selected{
                background-color:#f0f0f5;
            }
        </style>
</head>
<body>

<div>
       
        <nav class="navbar">
        <a href="dashboardadmin.php"><button class="btn1" >🏠dashboard</button></a>
        <a href="AddEmployee.php"><button class="btn5">👨‍💼Add Employee</button></a>
    
        <a href="manageemp.php"><button class="btn6">Manage Employee</button></a>
            
        <a href="manageleave.php"><button class="btn2">Manage Employee Leave</button></a>
        <a href="Login.php"><button class="btn3">📴Logout</button></a>
<a href="profilead.php"><button class="btn4">👤Profile</button></a>
    </nav>
        </div>

<div class='h2'>
    <p style="margin-top:25px;margin-left:8px">☳</p>
<h2 style="text-align:center;margin-top:-50px">Employee Management System</h2>

        </div>
</div>
<div style="margin-left:200px;margin-top:20px">
    <form method="post">
        <div class="form-group m-3">
    
            <label >Name :</label>
            <input type="text" class="form-control"  name="name" >
            
        </div>
        <div class="form-group m-3">
    
    <label>Email :</label>
    <input type="email" class="form-control"  name="email" >
    
</div>
        <div class="form-group m-3">
    
            <label >Position :</label>
            <input type="text" class="form-control"  name="position" >
            
        </div>

<div class="form-group m-3">

                                        <label >Bio :</label>
                                        <input type="text" class="form-control"  name="bio" >
                                        
                                    </div>
                                    <div class="form-group m-3">
                                        <input type="submit" value="Save Changes" class="btn btn-primary btn-lg w-100 " name="submit" >
                                    </div>
                                </form>
        </div>
</body>
    </html>