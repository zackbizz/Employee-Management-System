<?php
require_once('Emp.php');
$res = $database->read();
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
            a{
                color:white;
                text-decoration:none;
            }
            a:hover{
                color:white;
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
<div class="row"style="margin-left:210px;margin-top:70px;margin-right:15px">
		<table class="table"style="background-color:white;width:">
        <div style="background-color:white">
            <h2 style="text-align:center">Manage Employees</h2>
        </div>
			<tr>
				<th>S.No.</th>
                <th>Emp.Id</th>
				<th>Name</th>
				<th>E-Mail</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Age in Years</th>
                <th>Salary in Rs</th>
                <th>Profile</th>
                <th>Action</th>
			</tr>
			<?php
            $no=1; 
			while($r = mysqli_fetch_assoc($res)){
                           
			?>
            
			<tr>
				<td><?php echo $no; ?></td>
                <td><?php echo $r['id']; ?></td>
				<td><?php echo $r['name']; ?></td>
				<td><?php echo $r['email']; ?></td>
				<td><?php echo $r['dob']; ?></td>
				<td><?php echo $r['gender']; ?></td>
                <td><?php echo $r['age']; ?></td>
                <td><?php echo $r['salary']; ?></td>
                <td><img src="<?php echo 'image/'.$r['image'];?>"style="height:50px;width: 100px"/>
                <td><a href="update.php?id=<?php echo $r['id']; ?>"><button class="btn btn-primary">Edit</button></a>  <button class="btn btn-danger"><a href="delete.php?id=<?php echo $r['id']; ?>">Delete</a></button></td>
			
			</tr>
			<?php 
        $no++;
        } ?>
		</table>
	</div>

        </div>
</body>
</html>