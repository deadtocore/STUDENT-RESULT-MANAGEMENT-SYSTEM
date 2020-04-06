<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display|Muli&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <style>
        *{
            padding:0px;
            margin:0px;
            
        }
         body
         {height: 100vh;
             background-image: url('image2.jpg');
             background-repeat: no-repeat;
             background-size: cover;
             
         }
         .header {
            height: 100px;
            background: black;
            padding: 0 20px;
            color: #fff;
        }
       .header h2 {
            line-height: 100px;
            float: left;
            text-transform: uppercase;
           font-family: 'Muli',sans-serif;
           
        }
        .menu {
            float: right;
            line-height: 100px;
        }
        .menu a {
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            padding: 0 10px;
            transition: 0.4s;
        }
           a.act{
            color:orange;
        }
        .show-menu-butn,
        .hide-menu-butn {
            transition: 0.4s;
            font-size: 30px;
            cursor: pointer;
            display: none;
        }
        .show-menu-butn {
            float: right;
        }
        .show-menu-butn i {
            line-height: 100px;
        }
        .menu a:hover,
        .show-menu-butn:hover,
        .hide-menu-butn:hover {
            color: orange;
        }
        #chk {
            position: absolute;
            visibility: hidden;
            z-index: -111;
        }
        .content {
            padding: 0 20px;
        }
        .content img {
            width: 100%;
            max-width: 700px;
            margin: 20px;
        }
        .content p {
            text-align: justify;
        }
        @media screen and (max-width:800px) {
            .show-menu-butn,
            .hide-menu-butn {
                display: block;
            }
            .menu {
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #333;
                right: -100%;
                top:0;
                text-align: center;
                padding: 80px 0;
                line-height: normal;
                transition: 0.7s;
            }
            .menu a {
                display: block;
                padding: 20px;
            }
            .hide-menu-butn {
                position: absolute;
                top: 40px;
                right: 40px;
            }
            #chk:checked~.menu {
            	position: absolute;
                right: 0;
                z-index:1;
            }
        }
        
          .bg-text {
/*
 background-color: rgb(0,0,0);  
 background-color: rgba(0,0,0, 0.4);
*/
              
  color: white;
  font-weight: bold;
  position: fixed;
  top: 65%;
  left:50%;
  transform: translate(-50%, -50%);
  z-index: 3;
  width: 60%;
  padding: 20px;
  text-align: center;
  font-size:50px;
font-family: 'Big Shoulders Display', cursive;
            letter-spacing: 2px;
            
}
        
           .box1{
/*            text-align: center;*/
            position:absolute;
            left:50%;
            top:50%;
            transform:translate(-50%,-70%);
            background:rgba(0,0,0,.8);
            width:400px;
            padding: 40px;
            padding-left: 50px;
            box-sizing:border-box;
            border-radius:10px;
            box-shadow:0 15px 15px rgba(0,0,0,.5);
            height:auto;
        }
        .role{
            text-align:center;
            margin-left:1px;
            padding:0px;
            color:white;
            font-size: 40px;
            font-family: 'Big Shoulders Display', cursive;
        }
        
/*
        .box input[type="submit"]{
            margin-top:10px;
            background:transparent;
            border:none;
            outline:none;
            color:white;
            background-color:deepskyblue;
            padding:10px 20px;
            border-radius:5px;
            cursor:pointer;
        }
*/
        form label{
            position: relative;
            top:20px;
            left:-40%;
            font-size:30px;
            cursor: pointer;
            
            
        }
        form label a{
            text-decoration: none;
            color:#e8a50d;
        
        }
        form label i{
            
            color:hotpink;
        }
        form label a:hover{
            color:white;
/*            color:#e8a50d;*/
        }
         
        .box{
            position:absolute;
            left:50%;
            top:50%;
/*            right:-100%;*/
            transform:translate(-50%,-50%);
            background:rgba(0,0,0,.8);
            width:400px;
            padding: 40px;
            box-sizing:border-box;
            border-radius:10px;
            box-shadow:0 15px 15px rgba(0,0,0,.5);
        
            
        }
         select{
             border: none;
             margin-left: -10px;
         }
        h2{
            text-align:center;
            margin:0 0 30px;
            padding:0px;
            color:white;
        }
        .box .inputBox
        {
            position:relative;
        }
        .box .inputBox input{
            width:100%;
            padding:10px 0;
            font-size:16px;
            color:white;
            margin-bottom:10px;
            border:none;
            outline:none;
         background:transparent;
            border-bottom:1px solid white;
            
        }
        .box .inputBox label{
            position:absolute;
            top:0;
            left:0;
            padding:10px 0;
            font-size:16px;
            color:white;
            pointer-events:none;
            transition:.5s;
            
        }
        .box .inputBox input:focus~label,.box .inputBox input:valid~label{
            top:-20px;
            left:0px;
            color:deepskyblue;
            font-size:12px;
            
        }
        .box input[type="submit"]{
            position:relative;
            top:25px;
            background:transparent;
            border:none;
            outline:none;
            color:white;
            background-color:deepskyblue;
            padding:10px 20px;
            border-radius:5px;
            cursor:pointer;
        
        }
         .field{
             position: relative;
             top:10px;
             width:100%;
             padding:5px;
             background:transparent;
             color:white;
         }
         option{
             color:black;
         }



    </style>

</head>

<body>
   <div class="header">
        <h2>Melbourne University</h2>

        <input type="checkbox" id="chk" style="display: none">
        <label for="chk" class="show-menu-butn">
            <i class="fa fa-ellipsis-h"></i>
        </label>
        <ul class="menu">
            <a href="index.php" >Home</a>
            <a href="about.php">About</a>
            <a href="contact.html">ContactUs</a>
            <a href="login.php" class="act">Login</a>
            <a href="signup.php">Signup</a>
            <label for="chk" class="hide-menu-butn">
                <i class="fa fa-times"></i>
            </label>
        </ul>

    </div>


    <div class="box" id="mybox";>
            <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="inputBox">
                <input type="text" name="user" required>
                <label>username</label>

                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" required>
                            <label>password</label>
                        </div>
                        <div class="inputbox">
                            <select name="role" id="role" class="field" >
          <option value="role" selected style="display: none;">Select User</option>
           <option value="admin">Admin</option>
           <option value="teacher">Teacher</option>
           <option value="student">Student</option>
           
       </select>
                        </div>
                        <input type="submit"
                        value="Login" name="login">
                        <?php
        
if(isset($_POST['login'])){
    
$con=mysqli_connect('localhost','root','','mini_pro'); 
$_SESSION['name']=$_POST['user'];
 $name1=$_POST['user'];   
$pass=$_POST['password'];
$role=$_POST['role'];
$q="select * from `$role` where `username`='$name1' && `password`='$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>=1 && $role=='student')
{
echo '<span class="output" style="color:white;font-size:25px;position:relative;top:27px;left:10px;">Login Successfully</span>';
    echo "<script> window.location.assign('main.php'); </script>";
}
  else if($num>=1 && $role=='teacher')
{
echo '<span class="output" style="color:white;font-size:25px;position:relative;top:27px;left:10px;">Login Successfully</span>';
    echo "<script> window.location.assign('teacher.php'); </script>";
}
    else if($num>=1 && $role=='admin')
{
echo '<span class="output" style="color:white;font-size:25px;position:relative;top:27px;left:10px;">Login Successfully</span>';
    echo "<script> window.location.assign('admin.php'); </script>";
}
else
{
echo '<span class="output" style="color:white;font-size:25px;position:relative;top:27px;left:10px;">Invalid Credentials</div>';
}
}
?>
                        
            </form>
    </div>
</body>
</html>
