<?php
 require_once('Emp.php');
 $id = $_GET['id'];
 $res = $database->read($id);
 $r = mysqli_fetch_assoc($res);
 if(isset($_POST) & !empty($_POST)){
	 $name = $database->sanitize($_POST['name']);
	 $email = $database->sanitize($_POST['email']);
	 $password= $database->sanitize($_POST['password']);
     $dob= $database->sanitize($_POST['dob']);
     $salary= $database->sanitize($_POST['salary']);
	 $gender = $_POST['gender'];
	 $age = $_POST['age'];
     $image=$_POST['image'];
	$res = $database->update($name, $email, $password, $age, $salary,$dob,$gender, $image,$id);
	if($res){
	 	header("location:manageemp.php");
	}else{
	 	echo "failed to update data";
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
    font-style: oblique;
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
                border:0px
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
        <a href="../Login.php"><button class="btn3">📴Logout</button></a>
<a href="profilead.php"><button class="btn4">👤Profile</button></a>
    </nav>
        </div>

<div class='h2'>
    <p style="margin-top:25px;margin-left:8px">☳</p>
<h2 style="text-align:center;margin-top:-50px">Employee Management System</h2>

        </div>
</div>
  <div style="margin-left:220px">
  <div class="login-form-bg h-100">
        <div class="container  h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0"style="margin-top:70px">
                            <div class="card-body pt-4 shadow ">                       
                                    <h4 class="text-center">Edit Employee</h4>
                            
                                <form method="post">
                            
                                <div class="form-group">
                                    <label >Full Name :</label>
                                    <input type="text" class="form-control"name="name" value="<?php echo $r['name'] ?>">
                                  
                                </div>


                                <div class="form-group">
                                    <label >Email :</label>
                                    <input type="email" class="form-control"name="email"  value="<?php echo $r['email'] ?>">
                                    
                                                                   </div>
                                                                   <div class="form-group">
                                    <label >Password :</label>
                                    <input type="password" class="form-control"name="password"  value="<?php echo $r['password'] ?>">
                                         
                                                                   </div>

                                
                                
                                <div class="form-group">
                                    <label >Age :</label>
                                    <input type="number" class="form-control"name='age'  value="<?php echo $r['age'] ?>">  
                                               
                                </div>

                                <div class="form-group">
                                    <label >Salary :</label>
                                    <input type="number" class="form-control"name='salary'  value="<?php echo $r['salary'] ?>">  
                                    <p></p>
                                </div>

                                <div class="form-group">
                                    <label >Date-of-Birth :</label>
                                    <input type="date" class="form-control" name="dob"  value="<?php echo $r['dob'] ?>">  
                                   
                                </div>

                                <div class="form-group form-check form-check-inline">
                                    <label class="form-check-label" >Gender :</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender"value="Male"<?php if($r['gender'] == 'Male'){ echo "checked";} ?>>
                                    <label class="form-check-label" >Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="Female"<?php if($r['gender'] == 'Female'){ echo "checked";} ?>>
                                    <label class="form-check-label" >Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="Other"<?php if($r['gender'] == 'Other'){ echo "checked";} ?>>
                                    <label class="form-check-label" >Other</label>
                                </div>

                                <div class="form-group">
                                    <label >Profile Photo :</label>
                                    <input type="file" class="form-control" name="image"  placeholder="Enter Product image"value="<?php echo $r['image'] ?>">
                                   
                                </div>
                                <br>

                                <button type="submit" class="btn btn-primary btn-block"name='submit'>Update</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function preventBack(){
        window.history.forward();
    }
    setTimeout("preventBack()",0);
    window.onunload=function(){null;}
</script>
</body>
    </html>
