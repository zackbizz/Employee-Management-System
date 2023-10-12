<?php
require_once('Emp.php');
$res = $database->read();
$count=$database->count();
$countcancel=$database->countcancel();
$totpend=$database->totpending();
$totapplied=$database->readleave();
$last=$database->lastreport();
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
        <a href="dashboard.php"><button class="btn1" >🏠dashboard</button></a>
        <a href="LeaveStatus.php"><button class="btn5">Leave Status</button></a>
    
        <a href="ApplyLeave.php"><button class="btn6">📨Apply Leave</button></a>
            
        <a href="viewemp.php"><button class="btn2">View Employees</button></a>
        <a href="Login.php"><button class="btn3">📴Logout</button></a>
<a href="profile.php"><button class="btn4">👤Profile</button></a>
    </nav>
        </div>

<div class='h2'>
    <p style="margin-top:25px;margin-left:8px">☳</p>
<h2 style="text-align:center;margin-top:-50px">Employee Management System</h2>

        </div>
</div>
<div style="margin-left:220px">

    <div class="row mt-5">
        <div class="col-4">
            <div class="card shadow " style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center"> <b>Leave Status</b> </li>
                    <li class="list-group-item">Last Leave's Status : <?php $r = mysqli_fetch_assoc($last);
                   echo $r['status'];?> </li>

                </ul>
            </div>
        </div>
        <div class="col-4">
            <div class="card shadow " style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center"> <b>Applied leaves</b> </li>
                    <li class="list-group-item">Total Accepted : <?php echo  mysqli_num_rows($count);?> </li>
                    <li class="list-group-item">Total Canceled  : <?php echo  mysqli_num_rows($countcancel);?></li>
                    <li class="list-group-item">Total Pending  : <?php echo  mysqli_num_rows($totpend); ?> </li>
                    <li class="list-group-item">Total Applied  : <?php echo  mysqli_num_rows($totapplied);?> </li>
                </ul>
            </div>
        </div>
        <div class="col-4">
            <div class="card shadow " style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center"><b>Employees</b> </li>
                    <li class="list-group-item">Total Employees : <?php echo  mysqli_num_rows($res);?></li>
                    <li class="list-group-item text-center"><a href="viewemp.php"> <b>View All Employees</b></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <div class="row"style="margin-right:50px;margin-top:70px;margin-left:200px">
		<table class="table table-hover"style="background-color:white">
        <div style="background-color:white">
            <h2 style="text-align:center">Employee Leadership Board</h2>
        </div>
			<tr style="background-color:black;color:white">
				<th>S.No.</th>
                <th>Employee Id</th>
				<th>Employee's Name</th>
				<th>Employee's E-Mail</th>
				<th>Salary</th>
			    
			</tr>
			<?php
            $no=1; 
			while($r = mysqli_fetch_assoc($res)){
			?>
			<tr>
                <td><?php echo $no?></td>
				<td><?php echo $r['id']; ?></td>
				<td><?php echo $r['name']; ?></td>
				<td><?php echo $r['email']; ?></td>
				<td><?php echo $r['salary']; ?></td>
				
			</tr>
			<?php $no++;} ?>
		</table>
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