<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display|Open+Sans|Flamenco&display=swap" rel="stylesheet">
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
                width:100%;
                padding:0px 2px;
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
        .container{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            width:70%;
            border:10px ridge #28ecf4;
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
            font:30px 'Source sans pro',sans-serif;
            line-height: 75px;
        } .heading h1 i{
            color:white;
        font-size: 25px;
/*            font-weight:300;*/
        }
        .result{
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
        .result h4{
            text-transform: uppercase;
            color:white;
            font:20px 'Open Sans',sans-serif;
        }
        .result h3{
            text-transform: uppercase;
            color:white;
            font:20px 'Open Sans',sans-serif;
            margin-top:10px;
        }
        .result h5{
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
        @media screen and (max-width:600px)
        {
            .result{
                height:93vh;
/*                margin-top:20px;*/
            }
            .result h4{
                font:18px 'Open Sans',sans-serif;
            }
            .result h3{
                font:18px 'Open Sans',sans-serif;
            }
            .result h5{
                font:18px 'Open Sans',sans-serif;
            }
            
        }

/*tr:nth-child(even){background-color: #f2f2f2}*/
    </style>
</head>

<body>
    <header id="header">
        <nav>
            <div class="row clearfix">
                <img src="thplogo.png" alt="" class="logo">
                <ul class="main-nav animated slideInDown" id="check-class">
                    <li onclick="result()">View Result</li>
                    <li onclick="showcase()">Change Password</li>
                    <li onclick="showed()">Update Profile</li>
                    <li onclick="logout()">Logout</li>
                </ul>
                <a href="#" class="mobile-icon" onclick="slideshow()"><i class="fa fa-bars" aria-hidden="true"></i></a>
            </div>
        </nav>
        <div class="main-content-header">
        <h1>Welcome To <span class="colorchange">Student Portal</span>. <br>
            Cultivating a Success Mindset</h1>
        <a href="" class="btn btn-full">Click to Visit</a>
        <a href="" class="btn btn-nav">Click to Visit</a>    
        </div>
    </header>  
    <div class="change_pass" id="change_pass">
        <h2>Update Password</h2>
        <div class="space">
        <form action="main.php" method="post">
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
    <div class="container" id="container">
    <div class="heading">
       <h1><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Update Profile</h1>
   </div>
    <div class="inputs">
    <form action="main.php" method="post">
     <div class="subcontainer">
       <label for="user"><i class="fa fa-user" aria-hidden="true"></i></label> 
       <input type="text" id="user" name="user" class="field" placeholder="Enter Your Username" required>
       </div><br>
      <div class="subcontainer">
       <label for="name"><i class="fa fa-user" aria-hidden="true"></i></label> 
       <input type="text" id="name" name="name" class="field" placeholder="Name" required>
       </div><br>
       
       
       <div class="subcontainer">
       <label for="father"><i class="fa fa-male" aria-hidden="true"></i></label> 
       <input type="text" id="father" name="father" class="field" placeholder="Father's Name" required>
       </div><br>
       <div class="subcontainer">
       <label for="mother"><i class="fa fa-female" aria-hidden="true"></i></label> 
       <input type="text" id="mother" name="mother" class="field" placeholder="Mother's Name" required>
       </div><br>
       <div class="subcontainer">
       <label for="mobile"><i class="fa fa-mobile" aria-hidden="true"></i></label> 
       <input type="tel" id="mobile" name="mobile" class="field" placeholder="Mobile No">
       </div><br>
       
      
       <input type="submit" value="Update" name="update" class="butn" name="register">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="button" value="Cancel" id="cancel" class="butn" onclick="page_change();">&nbsp;&nbsp;&nbsp;&nbsp;
       <?php
            if(isset($_POST['update'])){

$con=mysqli_connect('localhost','root','','mini_pro'); 
$user=$_POST['user'];
//                $_SESSION['named1']=$_POST['name']
$name = $_POST['name'];
//$email = $_POST['email'];
$father= $_POST['father'];
$mother= $_POST['mother'];
$mobile=$_POST['mobile'];
$q="select `username` from `student` where `username`='$user'";
$result =mysqli_query($con,$q); 
                while($row = mysqli_fetch_assoc($result)) {
        $fetch=$row["username"];
    }
        if(!$fetch)
        {
        echo '<p class="output" style="color:red;font-size:18px;">The username you entered does not exist</p>';
        }
        else if($user!=$fetch)
        {
        echo '<p class="output" style="color:red;font-size:18px;">you entered incorrect username</p>';
        }
        else{
        $sql="UPDATE `student` SET `mobile`='$mobile' where `username`='$user'";
        
            $set=mysqli_query($con,$sql);
        $sql1="update `student` set `name`='$name' where `username`='$user'";
        $set1=mysqli_query($con,$sql1);
            $sql2="update `student` set `father`='$father' where `username`='$user'";
        $set2=mysqli_query($con,$sql2);
            $sql3="update `student` set `mother`='$mother' where `username`='$user'";
        $set3=mysqli_query($con,$sql3);
        
            }

            }
            ?>
        </form>
        </div>
    </div>
    <div class="result" id="result">
      <i class="fa fa-times" aria-hidden="true" onclick=display();></i>
       <h4>Name : <?php
           $user=$_SESSION['name'];
           $con=mysqli_connect('localhost','root','','mini_pro');
           $q="select `name` from `student` where `username`='$user'";
$result =mysqli_query($con,$q); 
                while($row = mysqli_fetch_assoc($result)) {
        $fetch=$row["name"];
                    
    }
           
           echo $fetch;
               ?>
           </h4> 
           <h3>Father's Name : <?php
           $user=$_SESSION['name'];
           $con=mysqli_connect('localhost','root','','mini_pro');
           $q="select `father` from `student` where `username`='$user'";
$result =mysqli_query($con,$q); 
                while($row = mysqli_fetch_assoc($result)) {
        $fetch=$row["father"];
                    
    }
           
           echo $fetch;
               ?>
           </h3> 
           <h5>Mother's Name : <?php
           $user=$_SESSION['name'];
           $con=mysqli_connect('localhost','root','','mini_pro');
           $q="select `mother` from `student` where `username`='$user'";
$result =mysqli_query($con,$q); 
                while($row = mysqli_fetch_assoc($result)) {
        $fetch=$row["mother"];
                    
    }
           
           echo $fetch;
               ?>
           </h5> 
           <div style="overflow-x:auto;" class="tabled">
  <table>
    <tr>
      <th>Subjects</th>
      <th>Marks</th>
    </tr>
    <tr>
      <td>Maths</td>
      <td><?php
          $user=$_SESSION['name'];
           $con=mysqli_connect('localhost','root','','mini_pro');
           $q="select `maths` from `student` where `username`='$user'";
$result =mysqli_query($con,$q); 
                while($row = mysqli_fetch_assoc($result)) {
        $fetch=$row["maths"];
                    
    }
           
           echo $fetch;
          ?>
          </td>
      
    </tr>
    <tr>
      <td>English</td>
      <td><?php
          $user=$_SESSION['name'];
           $con=mysqli_connect('localhost','root','','mini_pro');
           $q="select `english` from `student` where `username`='$user'";
$result =mysqli_query($con,$q); 
                while($row = mysqli_fetch_assoc($result)) {
        $fetch=$row["english"];
                    
    }
           
           echo $fetch;
          ?></td>
      
    </tr>
    <tr>
      <td>DBMS</td>
      <td>
          <?php
          $user=$_SESSION['name'];
           $con=mysqli_connect('localhost','root','','mini_pro');
           $q="select `dbms` from `student` where `username`='$user'";
$result =mysqli_query($con,$q); 
                while($row = mysqli_fetch_assoc($result)) {
        $fetch=$row["dbms"];
                    
    }
           
           echo $fetch;
          ?>
      </td>
      
    </tr>
    <tr>
      <td>OS</td>
      <td>
          <?php
          $user=$_SESSION['name'];
           $con=mysqli_connect('localhost','root','','mini_pro');
           $q="select `os` from `student` where `username`='$user'";
$result =mysqli_query($con,$q); 
                while($row = mysqli_fetch_assoc($result)) {
        $fetch=$row["os"];
                    
    }
           
           echo $fetch;
          ?>
      </td>
      
    </tr>
    <tr>
      <td>Fullstack</td>
      <td><?php
          $user=$_SESSION['name'];
           $con=mysqli_connect('localhost','root','','mini_pro');
           $q="select `fullstack` from `student` where `username`='$user'";
$result =mysqli_query($con,$q); 
                while($row = mysqli_fetch_assoc($result)) {
        $fetch=$row["fullstack"];
                    
    }
           
           echo $fetch;
          ?></td>
      
    </tr>
    
    
    
  </table>
  <h5>Total : 
  <?php
          $user=$_SESSION['name'];
           $con=mysqli_connect('localhost','root','','mini_pro');
           $q="select `maths`,`english`,`dbms`,`os`,`fullstack` from `student` where `username`='$user'";
$result =mysqli_query($con,$q); 
                while($row = mysqli_fetch_assoc($result)) {
        $fetch1=$row["maths"];
         $fetch2=$row["english"];
                    $fetch3=$row["dbms"];
                    $fetch4=$row["os"];
                    $fetch5=$row["fullstack"];
                   $fetch=($fetch1+$fetch2+$fetch3+$fetch4+$fetch5); 
    }
           
           echo $fetch;
          ?>
  </h5>
  <h5>Percentage : 
  <?php
          $user=$_SESSION['name'];
           $con=mysqli_connect('localhost','root','','mini_pro');
           $q="select `maths`,`english`,`dbms`,`os`,`fullstack` from `student` where `username`='$user'";
$result =mysqli_query($con,$q); 
                while($row = mysqli_fetch_assoc($result)) {
        $fetch1=$row["maths"];
         $fetch2=$row["english"];
                    $fetch3=$row["dbms"];
                    $fetch4=$row["os"];
                    $fetch5=$row["fullstack"];
                   $fetch=(($fetch1+$fetch2+$fetch3+$fetch4+$fetch5)/500)*100; 
    }
           
           echo $fetch."%";
          ?>
  </h5>
</div>
    </div>
     
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
            var port1=document.getElementById('container');
            if(port.style.display=="none")
                {
                    port.style.display="block";
                    port.style.animation="change 1s ease 1";
                port1.style.display="none";
                    
                }
            else{
                port.style.display="none";
        }
        }
        function showed()
        {
            var port=document.getElementById('container');
            var port1=document.getElementById('change_pass');
            if(port.style.display=="none")
                {
                    port.style.display="block";
                    port1.style.display="none";
                    document.getElementById('container').setAttribute('class','container animated zoomIn');
                
                    
                }
            else{
                port.style.display="none";
        }
        }
        function page_change()
        {
             location.href = "main.php";
        }
        function result()
        {
            var port=document.getElementById('container');
            var port1=document.getElementById('change_pass');
            var port2=document.getElementById('result');
            if(port2.style.display=="none")
                {
                    port2.style.display="block";
                    port1.style.display="none";
                port.style.display="none";
                    document.getElementById('header').setAttribute('class', 'blur');
                    document.getElementById('result').setAttribute('class','result animated zoomIn');
                
                    
                }
            else{
                port2.style.display="none";
        }
        }
        function display()
        {
            var port4=document.getElementById('result');
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
