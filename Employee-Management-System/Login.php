<?php

require_once('Emp.php');
$res = $database->read();
?>
<?php session_start(); error_reporting(0);?>

<html>
    <head>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css">
<style>
    .loginpage{
        background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('./image/Login.jpg');
        background-position: center;
    background-size: cover;
    position: absolute;
    height: 100%;
    width: 100%;
    }
.form_box{
    width:500px;
    height:440px;
    position: relative;
    margin-top:150px;
    margin-left:480px;
background: rgba(0,0,0,0.3);
padding: 10px;
overflow: hidden;
}
.button-box{
    width:340px;
    height: 50px;
    margin: 35px auto;
    position: relative;
    box-shadow: 0 0 20px 9px #ff61241f;
    border-radius: 30px;
} 
.toggle-btn{
    padding: 10px 15px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none; 
    position: relative;
    color:white;
    font-weight:bold;
 
}
#btn6{
    top:0;
    left:0;
    position: absolute; 
    width:175px;
    height: 100%;
    background: #F3C693;
    border-radius: 30px;
    transition: .5s;
}
.input-group-login{
    top:120px;
    position: absoulte;
    width: 400px;
    transition: .5s;

}
.input-group-register{
    top:120px;
    position: absoulte;
    width:400px;
    transition: .5s; 
}
.input-field{
    width:100%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #999;
    outline :none;
    background:transparent;
}
.submit-btn{
    width:85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin-left: 55px;
    background: #F3C693;
    border: 0;
    outline: none;
    border-radius: 30px;
    margin-top:18px;
}
 
 #login_e{
     left:50px;
 }
 #login_e input{
     color:white;
     font-size: 15;
 }
 #register{
     color: white;
    font-size: 15;
 
 }
 #register input{
     color:white;
     font-size: 15;
 }
 #h3{
     text-align:center;
     color:white;
 }
  p{
      color:red;
  }

</style>
    </head>
    <body>
        
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["email"]))
     {$_SESSION['email']= "email is required";}
   if (empty($_POST["password"]))
     {$_SESSION['password'] = "password is required";}

}
if($_POST['email']!="" && $_POST['password']!="")
{
    while($r = mysqli_fetch_assoc($res)){
        if($r['email']==$_POST['email']){
            if($r['password']==$_POST['password']){
    header('location:dashboard.php');
            }
        }
    }
}

?>

     
  
   <div class="loginpage"id="login">
   
       <div class="form_box"id="box">
       <h3 id='h3'>Hello Employee</h3>
           <div class="button-box">
               <div id="btn6"></div>
               
        <button type="button btn-primary" onclick="login()"class="toggle-btn">Log-in As Employee</button>
        <button type="button btn-success" onclick="r()"class="toggle-btn"id="o">Log-in As Admin</button>
           </div>
           <form method="post" id="login_e"class="input-group-login">
           <input type="email"class="input-field"placeholder="Email"name="email" style="color:white">
           <p id='a'><?php echo $_SESSION['email'];?></p>
           <input type="password"class="input-field"placeholder="Enter Password"name="password">
           <p id='b'><?php echo $_SESSION['password'];?></p>        
           <button type="submit"class="submit-btn"name="submit"id="button2">Login</button>
</form>
            
           <form action="validate.php" id="register"class="input-group-register" style="display:none"method='post'>
           
               <input type="text"class="input-field"placeholder="Email"name="email">
               <p id='c'><?php echo $_SESSION['email'];?></p>
                <input type="password"class="input-field"placeholder="Enter Password"name="password">
                 <p id='d'><?php echo $_SESSION['password'];?></p>         
          <button type="submit"class="submit-btn"name='submit'>Login</button>
            </form>
</div>       
   </div>
   
</div>

<script>
    let x=document.getElementById('login_e');
    let y=document.getElementById('register');
    let z=document.getElementById("btn6");
    let s=document.getElementById("s");
    let b=document.getElementById("box");
let l=document.getElementById('login');
let h3=document.getElementById('h3');
    function r(){
        x.style.left="-400px";
        y.style.left='-50px';
        z.style.left='183px';
        z.style.width='155px';
        y.style.display='block';
        x.style.display='none';
        h3.innerHTML='Hello Admin';
     
  
    }
    function login(){
         x.style.left='70px';
         y.style.left='450px';
         z.style.left='0px';
         z.style.width='175px';
        x.style.display='block';
        y.style.display='none';
     h3.innerHTML='Hello Employee';
    }

</script>


  
    </body>
</html>
<?php 
    unset($_SESSION['email']);
    unset($_SESSION['password']);

?>

