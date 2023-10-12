<?php
require_once('Emp.php');
$res = $database->readleave();
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
<div class='container'style="margin-left:200px;margin-top:50px">
<div style="background-color:white">
            <h2 style="text-align:center">Leave Status</h2>
        </div>
    <table class='table table-hover'style="background-color:white">
        <thead >
            <tr style="background-color:black;color:white">
                <th scope='col'style="padding:15px">S1 no</th>
                <th scope='col'style="padding:15px">Name</th>
                <th scope='col'style="padding:15px">Email</th>
                <th scope='col'style="padding:15px">Starting Date</th>
                <th scope='col'style="padding:15px">Ending Date</th>
                <th scope='col'style="padding:15px">Reason</th>
                <th scope='col'style="padding:15px">Status</th>
                <th scope='col'style="padding:15px">Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $num=1;
            while($r = mysqli_fetch_assoc($res)){       
            ?>
          <tr>
          <td><?php echo $num;?></td>
          <td><?php echo $r['name'];?></td>
          <td><?php echo $r['email'];?></td>
          <td><?php echo $r['sdate'];?></td>
          <td><?php echo $r['ldate']?></td>
          <td><?php echo $r['reason'];?></td>
          <td><?php echo $r['status'];?></td>
          <td><button class="btn btn-danger"><a href="deleteleave.php?id=<?php echo $r['id']; ?>">Delete</a></button></td>
          </tr>
          <?php
$num++;}?>
</tbody>

</table>
    </div>
        </body>
</html>