<?php
require_once('Emp.php');
$res = $database->readbioad();
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
        <a href="Login.php"><button class="btn3">📴Logout</button></a>
<a href="profilead.php"><button class="btn4">👤Profile</button></a>
    </nav>
        </div>

<div class='h2'>
    <p style="margin-top:25px;margin-left:8px">☳</p>
<h2 style="text-align:center;margin-top:-50px">Employee Management System</h2>

        </div>
</div>
<div class="container">

    <div class="row ">
        <div class="col-4 ">
        </div>
        
        <div class="col-12 col-lg-6 col-md-6">
            <div class="card shadow" style="width: 20rem;height:600px;margin-top:5px;margin-bottom:10px">
            <input type="file" id="img" /><br>
        <img src="" id="tableBanner" />
        <!-- for result output -->
        <div id="res"></div>
                <div class="card-body">
                <h2 class="text-center mb-4"> </h2>
                    <p class="card-text">Bio: </p>
                    <?php 
  $r = mysqli_fetch_assoc($res);
                
 ?>
                    <p class="card-text"><strong><?php echo $r['bio']?></strong></p>
                    <p class="card-text">Name:<strong> <?php echo $name=$r['name'];?> </strong></p>
                    
                    

                    <p class="card-text">Email: <strong><?php echo $email=$r['email'];?></strong> </p>
                    
                 
                    <p class="card-text">Position: <strong><?php echo $position=$r['position'];?></strong> </p>
                    <a href="editbioad.php?id=<?php echo $r['id']; ?>"><button class="btn btn-primary">Edit Profile</button></a>
                    <a href="addproad.php"><button class="btn btn-primary">Add Profile</button></a>
      <?php 
              ?>
                  </div>
            </div>
        </div>
    </div>
</div>
<script>
            var bannerImage = document.getElementById('img');
var result = document.getElementById('res');
var img = document.getElementById('tableBanner');

bannerImage.addEventListener('change', function() {
  var file = this.files[0];
  // declare a maxSize (3Mb)
  var maxSize = 3000000;

  if (file.type.indexOf('image') < 0) {
    res.innerHTML = 'invalid type';
    return;
  }
  var fReader = new FileReader();
  fReader.onload = function() {
    img.onload = function() {
      // if localStorage fails, it should throw an exception
      try {
        // pass the ratio of the file size/maxSize to your toB64 func in case we're already out of scope
        localStorage.setItem("imgdata", getBase64Image(img, (file.size / maxSize), file.type));
      } catch (e) {
        var msg = e.message.toLowerCase();
        // We exceeded the localStorage quota
        if (msg.indexOf('storage') > -1 || msg.indexOf('quota') > -1) {
          // we're dealing with a jpeg image :  try to reduce the quality
          if (file.type.match(/jpe?g/)) {
            console.log('reducing jpeg quality');
            localStorage.setItem("imgdata", getBase64Image(img, (file.size / maxSize), file.type, 0.7));
          }
          // we're dealing with a png image :  try to reduce the size
          else {
            console.log('reducing png size');
            // maxSize is a total approximation I got from some tests with a random pixel generated img
            var maxPxSize = 750000,
              imgSize = (img.width * img.height);
            localStorage.setItem("imgdata", getBase64Image(img, (imgSize / maxPxSize), file.type));
          }
        }
      }
    }
    img.src = fReader.result;
  };

  fReader.readAsDataURL(file);
});

function getBase64Image(img, sizeRatio, type, quality) {
  // if we've got an svg, don't convert it, svg will certainly be lighter than any pixel image
  if (type.indexOf('svg+xml') > 0) return img.src;

  // if we've got a jpeg
  if (type.match(/jpe?g/)) {
    // and the sizeRatio is okay, don't convert it
    if (sizeRatio <= 1) return img.src;
  }
  // if we've got some other image type
  else type = 'image/png';

  if (!quality) quality = 1;
  var canvas = document.createElement("canvas");
  // if our image file is too large, then reduce its size
  canvas.width = (sizeRatio > 1) ? (img.width / sizeRatio) : img.width;
  canvas.height = (sizeRatio > 1) ? (img.height / sizeRatio) : img.height;

  var ctx = canvas.getContext("2d");
  ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
  // if we already tried to reduce its size but it's still failing, then reduce the jpeg quality
  var dataURL = canvas.toDataURL(type, quality);

  return dataURL;
}

function fetchimage() {
  var dataImage = localStorage.getItem('imgdata');
  img.src = dataImage;
}
img.style.width="315px";
img.style.height="270px";

// Call fetch to get image from localStorage.
fetchimage();

        </script>
        <script>
    function preventBack(){
        window.history.forward();
    }
    setTimeout("preventBack()",0);
    window.onunload=function(){null;}
</script>
</body>
</html>