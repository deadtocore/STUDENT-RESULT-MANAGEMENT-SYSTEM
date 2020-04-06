<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display|Muli|Open+Sans|Flamenco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
       
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            
        }
        body{
            font-size: 20px;
            overflow-x: hidden;
            color: white;
            font-family: 'Flamenco',cursive;
        }
        header{
            background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("img45.jpg");
            height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            
        }
        .clearfix:after{
            content: ".";
            visibility: hidden;
            display: block;
            height: 0px;
            clear: both;
        }
        .row{
            max-width: 1186px;
            margin: 0 auto;
        }
        .logo{
            height: 100px;
            width:auto;
            float: left;
            margin-top: 20px;
        }
        .main-nav{
            float: right;
            margin-top: 60px;
        }
        .main-nav li{
            display: inline-block;
            list-style-type: none;
            margin-left: 40px;
            text-transform:uppercase;
            cursor: pointer;
            padding: 5px 0px;
            color:#fff;
            text-decoration: none;
            font-size: 90%;
            font-weight: 100px;
        }
        
        .fa-times{
/*            float:right;*/
            color:red;
            font-size:50px;
            position: absolute;
            top:-7%;
            left:99%;
        }
        .del{
            color:red;
            font-size:50px;
            position: absolute;
            top:-9%;
            left:99%;
        }
         .blur   {
    filter: blur(2px);
    
}
        .main-nav li:hover{
            border-bottom: 3px solid #bf55ec;
        }
        .main-content-header{
            width:1180px;
            position: absolute;
            top:55%;
            left:50%;
            transform: translate(-50%,-50%);
/*            border: 1px solid red;*/
        }
        h1{
            color:#fff;
            font-size:240%;
            word-spacing: 5px;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 20px;
            font-weight: lighter;
            
        }
        .btn{
            display: inline-block;
            padding: 10px 30px;
            font-weight: lighter;
            text-decoration: none;
            text-transform: uppercase;
            border-radius: 200px;
            transition: background-color 0.2s,border 0.2s,color 0.2s; 
        }
        .btn-full{
            background-color: transparent;
            color:#bf55ec;
            margin-right: 15px;
            border:1px solid #bf55ec;
            
        }
        .btn-full:hover{
            background-color: #fff;
            
        }
        .btn-nav{
            background-color: transparent;
            color: #fff;
            border: 1px solid #fff;
        }
        .btn-nav:hover{
            background-color: #bf55ec;
        }
        .colorchange{
            animation: colorchange 1s infinite;
        }
        @keyframes colorchange{
            0%{
              color: red;  
            }
            25%{
                color: #bf55ec;
            }
            50%{
                color: white;
            }
            100%{
                color: #bf55ec;
            }
        }
        .mobile-icon{
            display: none;
        }
        @media only screen and (max-width:1180px){
            .main-content-header{
                margin-top:100px;
                width:100%;
                padding:0px 2px;
            }
            .main-nav{
                display: none;
            }
        .mobile-icon{
            display: inline-block;
            color: white;
            float: right;
            font-size: 160%;
            margin-top: 40px;
            margin-right: 40px;
        }
            .main-nav{
                float: left;
            }
            .main-nav li{
/*                float: left;*/
                display: block;
                margin-top:10px;
            }
        }
        }
        @media only screen and (max-width:998px){
            h1{
                font-size: 200%;
            }
        }
        @media only screen and (max-width:768px){
            h1{
                font-size: 180%;
            }
            .main-nav{
                display: none;
            }
        .mobile-icon{
            display: inline-block;
            color: white;
            float: right;
            font-size: 160%;
            margin-top: 40px;
            margin-right: 40px;
        }
            .main-nav{
                float: left;
            }
            .main-nav li{
/*                float: left;*/
                display: block;
                margin-top:10px;
            }
        }
        .change_pass{
/*            border:2px solid red;*/
            position:absolute;
            top:55%;
            left:84%;
            transform: translate(-50%,-50%);
            height:auto;
            width:30%;            border-radius: 10px;
            background-color:rgba(15,149,30,0.5);
            display:none;
            
        }
        .change_pass h2{
            text-align: center;
            padding: 10px 0px;
            border-bottom: 3px solid black;
            color:white;
            
        }
        .space{
            padding:30px 50px;
/*            border:2px solid red;*/
            height: auto;
        }
        .form1{
            margin-bottom:30px;
            position: relative;
        }
        .form1 input{
            padding:10px 0 10px 35px;
            width:90%;
        outline:none;
            border-radius: 8px;
            border:none;
            
        }
        .form1 i{
            position: absolute;
            top:8px;
            left:10px;
            color:black;
            font-size:80%;
        }
        .btn12{
            padding:15px;
            border-radius: 10px;
            color:white;
            background-color:#12254a;
            outline:none;
            border:none;
            margin-left:80px;
            cursor: pointer;
        }
        .add_student{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            width:70%;
            border:10px ridge pink;
            display:none;
            background-color: rgba(255,255,255,1);
        
        }
        .add_teacher{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            width:70%;
            border:10px ridge #da3fef;
            display:none;
            background-color: rgba(255,255,255,1);
            display:none;
        
        }
        .delete_student
        {
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            width:70%;
            border:10px ridge #f2eb31;
            display:none;
            background-color: rgba(255,255,255,1);
        }
        .delete_teacher
        {
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            width:70%;
            border:10px ridge #f5354b;
            display:none;
            background-color: rgba(255,255,255,1);
        }
            
        .inputs{
/*            border:7px solid #fdc632;*/
            max-width:100%;
            padding:15px 20px;
            
            
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
        @keyframes change{
            from {
                position:absolute;
                left:120%;
            }
                
            to{
                position:absolute;
                left:84%;
            }
                
            
            
        }
        .heading{
            background-color:rgb(29, 29, 75);
            max-width:100%;
            height:75px;
        }
        .heading h1{
            color:#fdc632;
            text-align: center;
            font:30px 'Muli',sans-serif;
            line-height: 75px;
            letter-spacing:1px;
        } .heading h1 i{
            color:white;
        font-size: 25px;
/*            font-weight:300;*/
        }
/*
        .add_student{
            width:70%;
            height:91vh;
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            border:15px ridge pink;
            padding:20px;
                box-sizing: border-box; 
            background-color: #9d6b6b;
            display:none;
        }
        .add_student h4{
            text-transform: uppercase;
            color:white;
            font:20px 'Open Sans',sans-serif;
        }
        .add_student h3{
            text-transform: uppercase;
            color:white;
            font:20px 'Open Sans',sans-serif;
            margin-top:10px;
        }
        .add_student h5{
            text-transform: uppercase;
            color:white;
            font:20px 'Open Sans',sans-serif;
            margin-top:10px;
        }
        table {
  border-collapse: collapse;
  border-spacing: 10px;
  width: 100%;
  border: 1px solid #ddd;
            margin-top:25px;
}

th, td {
  text-align: left;
  padding: 12px;
    border:1px solid ;
    font:20px 'Open Sans',sans-serif;
    
}
        
        th{
            text-align: center;
        }
*/
/*
        @media screen and (max-width:600px)
        {
            .add_student{
                height:93vh;
                margin-top:20px;
            }
            .add_student h4{
                font:18px 'Open Sans',sans-serif;
            }
            .add_student h3{
                font:18px 'Open Sans',sans-serif;
            }
            .add_student h5{
                font:18px 'Open Sans',sans-serif;
            }
            
        }
*/

/*tr:nth-child(even){background-color: #f2f2f2}*/
    </style>
</head>

<body>
    <header id="header">
        <nav>
            <div class="row clearfix">
                <img src="thplogo.png" alt="" class="logo">
                <ul class="main-nav animated slideInDown" id="check-class">
                    <li onclick="showcase()">Change Password</li>
                    <li onclick=add()>Add Student</li>
                    <li onclick=delete1()>Delete Student</li>
                    <li onclick=addteacher()>Add Teacher</li>
                    <li onclick=delete2()>Delete Teacher</li>
                    <li onclick="logout()">Logout</li>
                </ul>
                <a href="#" class="mobile-icon" onclick="slideshow()"><i class="fa fa-bars" aria-hidden="true"></i></a>
            </div>
        </nav>
        <div class="main-content-header">
        <h1>Welcome To <span class="colorchange">Admin Portal</span>. <br>
           <span class="colorchange"> Cultivating</span> a Success Mindset</h1>
        <a href="" class="btn btn-full">Click to Visit</a>
        <a href="" class="btn btn-nav">Click to Visit</a>    
        </div>
    </header>  
    <div class="change_pass" id="change_pass">
        <h2>Update Password</h2>
        <div class="space">
        <form action="admin.php" method="post">
          <div class="form1">
           <i class="fa fa-key" aria-hidden="true"></i>
            <input type="text" id="user" name="user" placeholder="Username">
            </div>
           <div class="form1">
           <i class="fa fa-key" aria-hidden="true"></i>
            <input type="password" id="old" name="old" placeholder="Old Password">
            </div>
            
            <div class="form1">
            <i class="fa fa-key" aria-hidden="true"></i>
            <input type="password" id="new" name="new" placeholder="New Password">
            </div>
            <input type="submit" value="Save Password" name="Save" class="btn12">
            
        <?php
            if(isset($_POST['Save'])){

$con=mysqli_connect('localhost','root','','mini_pro'); 
$user = $_POST['user'];
        $old = $_POST['old'];
        $new = $_POST['new'];
       $fetch="";
                $set="";
        $q ="SELECT `password` FROM `student` WHERE 
`username`='$user'";
          $result =mysqli_query($con,$q); 
                while($row = mysqli_fetch_assoc($result)) {
        $fetch=$row["password"];
    }
        if(!$fetch)
        {
        echo '<p class="output" style="color:red;font-size:18px;">The username you entered does not exist</p>';
        }
        else if($old!=$fetch)
        {
        echo '<p class="output" style="color:red;font-size:18px;">you entered incorrect password</p>';
        }
        else{
        $sql="UPDATE `student` SET `password`='$new' where `username`='$user'";
            $set=mysqli_query($con,$sql);
        
        if($set)
        {
        echo '<p class="output" style="color:red;font-size:18px;">Congratulations</p>';
        }
       else
        {
       echo '<p class="output" style="color:red;font-size:18px;">pwd don\'t match</p>';
       }
            }
            }
            
            ?>

        </form>
        </div>
    </div> 
    <div class="add_student" id="add_student">
    <i class="fa fa-times" aria-hidden="true" onclick=display();></i>
    <div class="heading">
       <h1><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Add Student</h1>
   </div>
    <div class="inputs">
    <form action="admin.php" method="post">
     <div class="subcontainer">
       <label for="user"><i class="fa fa-user" aria-hidden="true"></i></label> 
       <input type="text" id="user" name="user" class="field" placeholder="Enter Username" required>
       </div><br>
      <div class="subcontainer">
       <label for="name"><i class="fa fa-user" aria-hidden="true"></i></label> 
       <input type="text" id="name" name="name" class="field" placeholder="Name" required>
       </div><br>
       
       
       <div class="subcontainer">
       <label for="email"><i class="fa fa-male" aria-hidden="true"></i></label> 
       <input type="email" id="email" name="email" class="field" placeholder="Email" required>
       </div><br>
       <div class="subcontainer">
       <label for="password"><i class="fa fa-female" aria-hidden="true"></i></label> 
       <input type="password" id="password" name="password" class="field" placeholder="Password" required>
       </div><br>
       <div class="subcontainer">
       <label for="mobile"><i class="fa fa-mobile" aria-hidden="true"></i></label> 
       <input type="tel" id="mobile" name="mobile" class="field" placeholder="Mobile No">
       </div><br>
       
      
       <input type="submit" value="ADD" name="add" class="butn">
       <?php
            if(isset($_POST['add'])){

$con=mysqli_connect('localhost','root','','mini_pro'); 
$user=$_POST['user'];
//                $_SESSION['named1']=$_POST['name']
$name = $_POST['name'];
//$email = $_POST['email'];
$email= $_POST['email'];
$password= $_POST['password'];
$mobile=$_POST['mobile'];
$q="select * from `student` where `username`='$user'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>=1)
{
echo '<span class="output" style="color:red;font-size:25px;">Already Registered</span>';
}
else
{
$qy="insert into `student`(`username`,`email`,`password`,`mobile`,`name`) values('$user','$email','$password','$mobile','$name')";
$run=mysqli_query($con,$qy);
if($run=="TRUE")
{
echo '<span class="output" style="color:green;font-size:25px;">Added Successfully</span>';
}
else
{
echo" not";
}
}
       }


?>
        </form>
        </div>
    </div>
    <div class="delete_student" id="delete_student">
    <i class="fa fa-times del" aria-hidden="true"  onclick=display1();></i>
    <div class="heading">
       <h1><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Delete Student</h1>
   </div>
    <div class="inputs">
    <form action="admin.php" method="post">
     <div class="subcontainer">
       <label for="user"><i class="fa fa-user" aria-hidden="true"></i></label> 
       <input type="text" id="user" name="user" class="field" placeholder="Enter Username" required>
       </div><br>
      <div class="subcontainer">
       <label for="name"><i class="fa fa-user" aria-hidden="true"></i></label> 
       <input type="text" id="name" name="name" class="field" placeholder="Name" required>
       </div><br>
       <input type="submit" value="Delete" name="delete1" class="butn">
       <?php
            if(isset($_POST['delete1'])){

$con=mysqli_connect('localhost','root','','mini_pro'); 
$user=$_POST['user'];
//                $_SESSION['named1']=$_POST['name']
$name = $_POST['name'];
$q="select * from `student` where `username`='$user'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num<1)
{
echo '<span class="output" style="color:red;font-size:25px;">Student doesn\'t exist</span>';
}
else
{
$qy="delete from `student` where `username`='$user'";
$run=mysqli_query($con,$qy);
if($run=="TRUE")
{
echo '<span class="output" style="color:green;font-size:25px;">Deleted Successfully</span>';
}
else
{
echo" not";
}
}
       }


?>
        </form></div></div>
        <div class="add_teacher" id="add_teacher">
    <i class="fa fa-times" aria-hidden="true" onclick=display2();></i>
    <div class="heading">
       <h1><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Add Teacher</h1>
   </div>
    <div class="inputs">
    <form action="admin.php" method="post">
     <div class="subcontainer">
       <label for="user"><i class="fa fa-user" aria-hidden="true"></i></label> 
       <input type="text" id="user" name="user" class="field" placeholder="Enter Username" required>
       </div><br>
      <div class="subcontainer">
       <label for="name"><i class="fa fa-user" aria-hidden="true"></i></label> 
       <input type="text" id="name" name="name" class="field" placeholder="Name" required>
       </div><br>
       
       
       <div class="subcontainer">
       <label for="email"><i class="fa fa-male" aria-hidden="true"></i></label> 
       <input type="email" id="email" name="email" class="field" placeholder="Email" required>
       </div><br>
       <div class="subcontainer">
       <label for="password"><i class="fa fa-female" aria-hidden="true"></i></label> 
       <input type="password" id="password" name="password" class="field" placeholder="Password" required>
       </div><br>
       <div class="subcontainer">
       <label for="mobile"><i class="fa fa-mobile" aria-hidden="true"></i></label> 
       <input type="tel" id="mobile" name="mobile" class="field" placeholder="Mobile No">
       </div><br>
       
      
       <input type="submit" value="ADD" name="add1" class="butn">
       <?php
            if(isset($_POST['add1'])){

$con=mysqli_connect('localhost','root','','mini_pro'); 
$user=$_POST['user'];
//                $_SESSION['named1']=$_POST['name']
$name = $_POST['name'];
//$email = $_POST['email'];
$email= $_POST['email'];
$password= $_POST['password'];
$mobile=$_POST['mobile'];
$q="select * from `teacher` where `username`='$user'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num>=1)
{
echo '<span class="output" style="color:red;font-size:25px;">Already Registered</span>';
}
else
{
$qy="insert into `teacher`(`username`,`email`,`password`,`mobile`,`name`) values('$user','$email','$password','$mobile','$name')";
$run=mysqli_query($con,$qy);
if($run=="TRUE")
{
echo '<span class="output" style="color:green;font-size:25px;">Added Successfully</span>';
}
else
{
echo" not";
}
}
       }


?>
        </form>
        </div>
    </div>
    <div class="delete_teacher" id="delete_teacher">
    <i class="fa fa-times del" aria-hidden="true"  onclick=display3();></i>
    <div class="heading">
       <h1><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Delete Teacher</h1>
   </div>
    <div class="inputs">
    <form action="admin.php" method="post">
     <div class="subcontainer">
       <label for="user"><i class="fa fa-user" aria-hidden="true"></i></label> 
       <input type="text" id="user" name="user" class="field" placeholder="Enter Username" required>
       </div><br>
      <div class="subcontainer">
       <label for="name"><i class="fa fa-user" aria-hidden="true"></i></label> 
       <input type="text" id="name" name="name" class="field" placeholder="Name" required>
       </div><br>
       <input type="submit" value="Delete" name="delete2" class="butn">
       <?php
            if(isset($_POST['delete2'])){

$con=mysqli_connect('localhost','root','','mini_pro'); 
$user=$_POST['user'];
//                $_SESSION['named1']=$_POST['name']
$name = $_POST['name'];
$q="select * from `teacher` where `username`='$user'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num<1)
{
echo '<span class="output" style="color:red;font-size:25px;">Student doesn\'t exist</span>';
}
else
{
$qy="delete from `teacher` where `username`='$user'";
$run=mysqli_query($con,$qy);
if($run=="TRUE")
{
echo '<span class="output" style="color:green;font-size:25px;">Deleted Successfully</span>';
}
else
{
echo" not";
}
}
       }


?>
        </form></div></div>
    <script>
        function slideshow(){
            var x=document.getElementById("check-class");
            if(x.style.display==="none"){
                x.style.display="block";
                
                
            }else{
                x.style.display="none";
            }
        }
        function showcase()
        {
            var port=document.getElementById('change_pass');
//            var port1=document.getElementById('container');
            var port2=document.getElementById('add_student');
            var port3=document.getElementById('delete_student');
            var port1=document.getElementById('add_teacher');
            var port4=document.getElementById('delete_teacher');
            if(port.style.display=="none")
                {
                    port.style.display="block";
                    port.style.animation="change 1s ease ";
                port1.style.display="none";
                    port2.style.display="none";
                    port3.style.display="none";
                    port4.style.display="none";
                    document.getElementById('header').setAttribute('class', 'blur');
                
                    
                }
            else{
                port.style.display="none";
        }
        }
//        function showed()
//        {
//            var port=document.getElementById('container');
//            var port1=document.getElementById('change_pass');
//            if(port.style.display=="none")
//                {
//                    port.style.display="block";
//                    port1.style.display="none";
//                
//                    
//                }
//            else{
//                port.style.display="none";
//        }
//        }
//        function page_change()
//        {
//             location.href = "main.php";
//        }
        function add()
        {
            var port=document.getElementById('add_student');
            var port2=document.getElementById('delete_student');
            var port1=document.getElementById('change_pass');
            var port3=document.getElementById('add_teacher');
            var port4=document.getElementById('delete_teacher');
            if(port.style.display=="none")
                {
                    port.style.display="block";
                    port1.style.display="none";
                    port2.style.display="none";
                    port3.style.display="none";
                    port4.style.display="none";
                    document.getElementById('header').setAttribute('class', 'blur');
                document.getElementById('add_student').setAttribute('class','add_student animated zoomIn');
                    
                }
            else{
                port.style.display="none";
        }
        }
        function addteacher()
        {
            var port=document.getElementById('add_teacher');
            var port3=document.getElementById('add_student');
            var port2=document.getElementById('delete_student');
            var port1=document.getElementById('change_pass');
            var port4=document.getElementById('delete_teacher');
            if(port.style.display=="none")
                {
                    port.style.display="block";
                    port1.style.display="none";
                    port2.style.display="none";
                    port3.style.display="none";
                    port4.style.display="none";
                    document.getElementById('header').setAttribute('class', 'blur');
                document.getElementById('add_teacher').setAttribute('class','add_teacher animated zoomIn');
                    
                }
            else{
                port.style.display="none";
        }
        }
        function delete1()
        {
            var port=document.getElementById('delete_student');
            var port1=document.getElementById('change_pass');
            var port2=document.getElementById('add_student');
            var port3=document.getElementById('delete_teacher');
             var port4=document.getElementById('add_teacher');
            if(port.style.display=="none")
                {
                    port.style.display="block";
                    port1.style.display="none";
                    port2.style.display="none";
                    port3.style.display="none";
                    port4.style.display="none";
                    document.getElementById('delete_student').setAttribute('class','delete_student animated zoomIn');
                    document.getElementById('header').setAttribute('class', 'blur');
                
                    
                }
            else{
                port.style.display="none";
        }
        }
        function delete2()
        {
            var port=document.getElementById('delete_teacher');
            var port3=document.getElementById('delete_student');
            var port1=document.getElementById('change_pass');
            var port2=document.getElementById('add_student');
            var port4=document.getElementById('add_teacher');
            if(port.style.display=="none")
                {
                    port.style.display="block";
                    port1.style.display="none";
                    port2.style.display="none";
                    port3.style.display="none";
                    port4.style.display="none";
                    document.getElementById('delete_teacher').setAttribute('class','delete_teacher animated zoomIn');
                    document.getElementById('header').setAttribute('class', 'blur');
                
                    
                }
            else{
                port.style.display="none";
        }
        }
        function display()
        {
            var port4=document.getElementById('add_student');
            port4.style.display="none";
            document.getElementById('header').removeAttribute('class', 'blur');
        }
        function display1()
        {
            var port4=document.getElementById('delete_student');
            port4.style.display="none";
            document.getElementById('header').removeAttribute('class', 'blur');
        }
        function display2()
        {
            var port4=document.getElementById('add_teacher');
            port4.style.display="none";
            document.getElementById('header').removeAttribute('class', 'blur');
        }
         function display3()
        {
            var port4=document.getElementById('delete_teacher');
            port4.style.display="none";
            document.getElementById('header').removeAttribute('class', 'blur');
        }
        function logout()
        {
            location.href="index.php";
        }
    </script>
</body>
</html>
