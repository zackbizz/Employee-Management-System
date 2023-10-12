<?php
 require_once('Emp.php');
 $id = $_GET['id'];
 $res = $database->readbio($id);
 $r = mysqli_fetch_assoc($res);
 if(isset($_POST) & !empty($_POST)){
	 $name = $database->sanitize($_POST['name']);
	 $tel= $database->sanitize($_POST['tel']);
     $bio= $database->sanitize($_POST['bio']);
  
	$res = $database->updatebio($name, $tel,$bio,$id);
	if($res){
	 	header("location:profile.php");
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
                            margin-top:-90px;
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
            </div><div style="margin-left:230px;margin-top:30px">
<form method="post">
        <div class="form-group m-3">
    
            <label >Name :</label>
            <input type="text" class="form-control"  name="name" >
            
        </div>
        <div class="form-group m-3">
    
            <label >Tel :</label>
            <input type="text" class="form-control"  name="tel" >
            
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
        <script>
    function preventBack(){
        window.history.forward();
    }
    setTimeout("preventBack()",0);
    window.onunload=function(){null;}
</script>
</body>
</html>