<?php session_start(); error_reporting(0);?>
<?php

require_once('Emp.php');
   
if(isset($_POST['submit']) & !empty($_POST['name']) & !empty($_POST['email']) & !empty($_POST['reason']) & !empty($_POST['sdate']) & !empty($_POST['ldate'])){
    $name = $database->sanitize($_POST['name']);
    $email = $database->sanitize($_POST['email']);
    $reason= $database->sanitize($_POST['reason']);
    $sdate= $database->sanitize($_POST['sdate']);
    $ldate= $database->sanitize($_POST['ldate']);
    $status= $database->sanitize($_POST['status']);
    
    
    $res = $database->createleave($name, $email, $reason,$sdate,$ldate,$status);
    if($res){
     header("location:LeaveStatus.php");	
    }
    else{
        echo "failed to insert data";
    }
}

?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["name"]))
    {$_SESSION['name']= "name is required";} 
   if (empty($_POST["email"]))
     {$_SESSION['email']= "email is required";}
   if (empty($_POST["reason"]))
     {$_SESSION['reason'] = "reason is required";}
    if (empty($_POST["sdate"]))
     {$_SESSION['sdate']= "fill the info it's important";}
     if (empty($_POST["ldate"]))
     {$_SESSION['ldate']= "fill the info it's important";}
}
if($_POST['email']!="" && $_POST['password']!="" && $_POST['name']!="" && $_POST['salary']!="")
{
    header('location:LeaveStatus.php');
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
                        p{
                            color:red;
                        }
                    </style>
            </head>
            <body>
            
            <div>
                   
                    <nav class="navbar">
                    <a href="dashboard.php"><button class="btn1" >🏠dashboard</button></a>
                    <a href="LeaveStatus.php"><button class="btn5">Leave Status</button></a>
                
                    <a href="ApplyLeave.php"><button class="btn6">📨Apply Leave</button></a>
                        
                    <a href="viewemp.php"><button class="btn2">View Employees</button></a>
                    <a href="Login.php"><button class="btn3">📴Logout</button></a>
            <a href="profile.php"><button class="btn4">👤Profile</button></a>
                </nav>
                    </div>
            
            <div class='h2'>
                <h2 style="margin-top:25px;margin-left:8px">☳</h3>
            <h2 style="text-align:center;margin-top:-50px">Employee Management System</h2>
            
                    </div>
            </div>
<div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6 pt-5">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5 shadow">
                              
                                    <h4 class="text-center">Apply For Leave</h4>
                                <form method="post" action="">
                                <div class="form-group">
                                        <label >FullName :</label>
                                        <input type="text" class="form-control" name="name" >
                                        <p><?php echo $_SESSION['name'];?></p>  
                                            
                                    </div>
                                    <div class="form-group">
                                        <label >Email :</label>
                                        <input type="email" class="form-control" name="email" >  
                                        <p><?php echo $_SESSION['email'];?></p>    
                                            
                                    </div>

                                    <div class="form-group">
                                        <label >Reason :</label>
                                        <input type="text" class="form-control" name="reason" >  
                                        <p><?php echo $_SESSION['reason'];?></p>    
                                             
                                    </div>

                                    <div class="form-group">
                                        <label >Staring Date :</label>
                                        <input type="date" class="form-control" name="sdate" >
                                        <p><?php echo $_SESSION['sdate'];?></p>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label >Last Date :</label>
                                        <input type="date" class="form-control"  name="ldate" >
                                        <p><?php echo $_SESSION['ldate'];?></p> 
                                    </div>
                                    

                                    <div class="form-group">
                                        <input type="submit" value="Apply Now" class="btn btn-primary btn-lg w-100 " name="submit" >
                                    </div>
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
        <?php
     
     unset($_SESSION['name']);
     unset($_SESSION['reason']);
     unset($_SESSION['email']);
     unset($_SESSION['sdate']);
     unset($_SESSION['ldate'])
 ?>
 