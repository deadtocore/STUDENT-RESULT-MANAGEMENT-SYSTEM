<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Roboto|Source+Sans+Pro|Roboto+Slab&display=swap" rel="stylesheet">
    <style>
        *{
            padding:0;
            margin:0;
        }
        .heading{
            background-color:rgb(29, 29, 75);
            max-width:100%;
            height:75px;
        }
        .heading h1{
            color:#fdc632;
            text-align: center;
            font:30px 'Source sans pro',sans-serif;
            line-height: 75px;
        } .heading h1 i{
            color:white;
        font-size: 25px;
/*            font-weight:300;*/
        }
        .inputs{
            border:7px solid #fdc632;
            max-width:100%;
            padding:75px;
            
        }
        .subcontainer {
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
        label i{
  padding: 10px;
  background: rgba(0,0,0,0.5);
  color: black;
  min-width: 20px;
  text-align: center;
}
        .field {
  width: 100%;
  padding: 8px;
  outline: none;
}
        .field:focus {
  border: 2px solid rgba(0,0,0,0.5);
        }
        .butn{
            padding:15px 30px;
            background-color:dodgerblue;
            outline:none;
            cursor: pointer;
            border-radius:5px;
            border:none;
            color:white;
            font:20px 'Noto sans',sans-serif;
            letter-spacing: 1px;
/*            margin-left:100px; */
        }
        select{
            color:grey;
        }
        .jump{
            float:right;
            font-size:20px;
            position: relative;
            top:-40px;
            
        }
        
    </style>
</head>

<body>
   
   <div class="container">
   <div class="heading">
       <h1><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Register</h1>
   </div>
   <div class="inputs">
    <form action="signup.php" method="post">
      <div class="subcontainer">
       <label for="user"><i class="fa fa-user" aria-hidden="true"></i></label> 
       <input type="text" id="user" name="user" class="field" placeholder="UserName" required>
       </div><br>
       
       <div class="subcontainer">
       <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i></label> 
       <input type="email" id="email" name="email" class="field" placeholder="Email" required>
       </div><br>
       <div class="subcontainer">
       <label for="password"><i class="fa fa-lock" aria-hidden="true"></i></label> 
       <input type="password" id="password" name="password" class="field" placeholder="Password" required>
       </div><br>
       <div class="subcontainer">
       <label for="mobile"><i class="fa fa-mobile" aria-hidden="true"></i></label> 
       <input type="tel" id="mobile" name="mobile" class="field" placeholder="Mobile No">
       </div><br>
       <div class="subcontainer">
       <label for="gender"><i class="fa fa-venus-mars" aria-hidden="true"></i></label> 
       <select name="gender" id="gender" class="field" >
          <option value="gender" selected style="display: none;">Gender</option>
           <option value="male">Male</option>
           <option value="female">Female</option>
           <option value="other">Other</option>
       </select>
       </div><br>
       <div class="subcontainer">
       <label for="role"><i class="fa fa-user" aria-hidden="true"></i></label> 
       <select name="role" id="role" class="field" >
          <option value="role" selected style="display: none;">Select User</option>
<!--           <option value="male">Admin</option>-->
           <option value="teacher">teacher</option>
           <option value="student">student</option>
           
       </select>
       </div><br>
       <input type="submit" value="Register" class="butn" name="register">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="button" value="Cancel" class="butn" onclick="location.href='index.php'">&nbsp;&nbsp;&nbsp;&nbsp;
<?php
        
if(isset($_POST['register'])){
session_start();
$con=mysqli_connect('localhost','root','','mini_pro'); 
$name=$_POST['user'];
$pass=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$role=$_POST['role'];
    

$q="select * from `$role` where `username`='$name'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>=1)
{
echo '<span class="output" style="color:red;font-size:25px;">Already Registered</span>';
}
else
{
$qy="insert into `$role`(`username`,`email`,`password`,`mobile`,`gender`) values('$name','$email','$pass','$mobile','$gender')";
$run=mysqli_query($con,$qy);
if($run=="TRUE")
{
echo '<span class="output" style="color:green;font-size:25px;">Registered Successfully</div>';
}
else
{
echo" not";
}
}
       }


?>


       
       
       
   
    </form>
    <span class="jump"><a href="login.php">Click here</a> for login</span>
    </div>
    </div>
    
</body>
</html>
