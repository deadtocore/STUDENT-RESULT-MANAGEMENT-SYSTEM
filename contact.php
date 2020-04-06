<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Economica|Fredoka+One|Roboto+Mono|Muli|Fugaz+One|Hepta+Slab|Barlow+Condensed|Playfair&display=swap" rel="stylesheet">
    <style>
        *{
            margin:0;
            padding:0;
        }
        body{
            padding:0px;
            margin:0px;
            height: auto;
            
        }
        .header {
            height: 100px;
            background: black;
            padding: 0 20px;
            color: #fff;
        }
       .header h2 {
            line-height: 100px;
           text-align: center;
            float: left;
            text-transform: uppercase;
            font-family:'Muli',sans-serif;
           letter-spacing:1px;
           font-family:'Muli',sans-serif;
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
/*            line-height: 100px;*/
        }
        a.act{
            color:orange;
        }
        .show-menu-btn,
        .hide-menu-btn {
            transition: 0.4s;
            font-size: 30px;
            cursor: pointer;
            display: none;
        }
        .show-menu-btn {
            float: right;
        }
        .show-menu-btn i {
            line-height: 100px;
        }
        .menu a:hover,
        .show-menu-btn:hover,
        .hide-menu-btn:hover {
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
            .show-menu-btn,
            .hide-menu-btn {
                display: block;
            }
            .menu {
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #333;
                right: -100%;
                top: 0;
                text-align: center;
                padding: 80px 0;
                line-height: normal;
                transition: 0.7s;
            }
            .menu a {
                display: block;
                padding: 20px;
            }
            .hide-menu-btn {
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
        html{
            scroll-behavior: smooth;
        }
    
        .q1{
            position:fixed;
            color:black;
            left:5%;
/*            line-height: 15%;*/
            top:2.5%;
            font:30px 'Roboto Mono', monospace;
            background-color: lawngreen;
            border-radius: 50%;
            padding: 15px;
        }
         .container{
            position:relative;
/*            margin:0px;*/
/*            margin-top:100px;*/
            width:100%;
            height:0;
            
            padding:0px 0px 40% 0px;
            background-image:url('contact.jpg');
             background-size: cover;
/*             z-index:-1;*/
/*
            border:10px solid orange;
            border-radius:10px;
*/
        }
       
        
        .img_txt
        {
            position:absolute;
            top:30%;
            transform: translateY(-50%);
            left:5%;
            font-size:4vw;
            font-family: 'Fredoka One', cursive;
            background-color: rgba(255,255,255,.7);
            padding:10px 20px 10px 15px;
            border-radius: 10px;
            border-left: 15px solid #b20ee3;
            text-shadow:3px 3px 15px #d99414;
            transition: 5s;
        }
        .img_txt1
        {
            position:absolute;
            top:48%;

            left:5%;
            font-size:2vw;
            font-family: sans-serif;
/*            background-color: rgba(255,255,255,.7);*/
/*            padding:10px 20px 10px 15px;*/
            border-radius: 10px;
            border-left: 15px solid #11d154;
            color: white;
            width:48%;
            line-height: 40px;
            padding-left: 10px;
/*            text-shadow:3px 3px 15px #1eed1e;*/
/*            transition: 5s;*/
        }
        .clickme{
            padding:8px 30px;
            background-color:rgba(14, 234, 124,1);
            color:white;
            outline: none;
            font:1.5vw Barlow Condensed, sans-serif;
            border-radius:20px;
            font-weight: bolder;
            position: relative;
            left:8%;
            top:250px;
            border: 0px;
            border-left:10px solid orange;
            letter-spacing: 2px;
            
            
        }
        .clickme:hover{
            
            background-color:rgba(14, 234, 124,0.6);
            cursor: pointer;
            
            
            
        }
        .end
        {
/*            border:10px solid green;*/
            height:480px;
            padding: 100px 100px;
            width:100%;
            position:relative;
            margin:0 auto;
            box-sizing: border-box;
            background-color: black;
/*            z-index:-1;*/
}
        .end1{
/*            border:5px solid red;*/
            height:180px;
            width:30%;
            color:rgba(255,255,255,0.9);
            line-height:22px;
/*            z-index:-1;*/
        }
        .end2{
/*            border:5px solid yellow;*/
            height:200px;
            width:20%;
/*            display:inline;*/
            position: absolute;
            left:45%;
/*            transform: translateX(-50%);*/
            top:100px;
            color:rgba(255,255,255,0.8);
        }
        .end2 ul{
            list-style-type: none;
            position:absolute;
            left:0%;
            
            
        }
        .end2 ul li a{
    text-decoration: none;
            color:rgba(255,255,255,.7);
            margin-bottom: 20px;
            display:block;
            font: 16px sans-serif;
        }
        .end2 ul li a:hover{
            color: rgba(255,255,255,0.4);
/*            font-weight: bold;*/
        }
        .end3{
/*            border:5px solid pink;*/
            height:150px;
            width:25%;
/*            display:inline;*/
            position: absolute;
            left:81%;
            transform: translateX(-50%);
            top:100px;
/*            line-height: 150px;*/
        }
        .btn{
            display:inline-block;
            width:60px;
            height:60px;
            background:rgba(255,255,255,.2);
            margin:0px;
            border-radius:50%;
            box-shadow: 0px 5px 15px -5px #00000070; 
            overflow:hidden;
            position:relative;
            top:30%;
            left:10%;
            color:orange;
            text-align: center;
        }
    .btn i
        {
            font-size:24px;
            line-height: 60px;
            transition:0.2s linear;
        }
        .btn:hover i{
            transform:scale(1.3);
            color:blue;
            
        }
        .btn::before{
            content:"";
            position:absolute;
            width:120%;
            height:120%;
            background-color: white;
            transform:rotate(45deg);
            left:-110%;
            top:90%;
        }
        .btn:hover::before{
            animation:aaa .7s 1;
            top:-10%;
            left:-10%;
        }
        @keyframes aaa{
            0%{
             left:-110%;
            top:90%;   
            }
            50%{
               left:10%;
                top:-30%;
            }
            100%{
              top:-10%;
            left:-10%;  
            }
        }
        .box{
            width:100%;
            height:100%;
            box-sizing: border-box;
            overflow:hidden;
            padding:150px 10%;
            position:relative;
            z-index:-1;
        }
        .head_1{
            position: absolute;
            top:70px;
            left:50%;
            transform: translateX(-50%);
            font:25px 'Playfair Display', serif;
            color:orange;
            
        }
        .head_2{
            position: absolute;
            top:105px;
            left:50%;
            transform: translateX(-50%);
            font:2.5vw 'Hepta Slab', sans-serif;
            color:black;
            
        }
        .form1{
            padding-left: 10%;
            width:65%;
            position:relative;
            left:50%;
            transform: translateX(-50%);
            height:100%;
            overflow: hidden;
        }
        input{
            height:50px;
            border-radius: 5px;
            border:1px ridge;
/*            margin-right:20px;*/
            text-indent: 8px;
            margin-top: 30px;
            outline: none;
        }
        .txt
        {
            width:40%;
            margin-right: 5%;
        }
        input[type='email']
        {
          width:86%;  
        }
        .txt1{
            border-radius: 5px;
            width: 82%;
            height: 250px;
            resize: vertical;
            overflow: hidden;
            margin-top: 30px; 
            padding: 6px 12px;
            outline: none;
            text-indent: -5px;
        }
        .txt1::placeholder{
            font-size:14px;
            font-family: arial;
            text-indent: -5px;
        }
        .send{
            padding:16px 7%;
            background-color:#F4AD2D;
            color:white;
            outline: none;
            font:1.5vw Barlow Condensed, sans-serif;
            border-radius:40px;
            font-weight: bolder;
            border: 0px;
            border-left:10px solid orange;
            letter-spacing: 2px;
            
            
        }
        .send:hover{
            
            background-color:rgba(14, 234, 124,0.6);
            cursor: pointer;
        }
        
        input:valid~#msg{
            display: block;
            
        }
        
        </style>
</head>

<body>
  
   
   
    <div class="header">
        <h2>Melbourne University</h2>

        <input type="checkbox" id="chk" style="display: none">
        <label for="chk" class="show-menu-btn">
            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
        </label>
        <ul class="menu">
            <a href="index.php">Home</a>
            <a href="about.php" >About</a>
            <a href="" class="act">ContactUs</a>
            <a href="login.php">Login</a>
            <a href="signup.php">SignUp</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fa fa-times" aria-hidden="true"></i>
            </label>
        </ul>

    </div>
   <div class="container">
    <span class="img_txt">Contact</span>
       <a href="#endd"><button class="clickme">Click Me</button></a>
        </div>
        
        
        
         <div class="box">
       <span class="head_1">Contact</span>
       <span class="head_2">Get In Touch</span>
       <div class="form1">
       <form>
           <input type="text" class="txt" name="firstname" placeholder="First Name">
           <input type="text" class="txt" name="lastname" placeholder="Last Name">
           <input type="email" name="email" placeholder="E-Mail Address">
           <textarea name="message" class="txt1" placeholder="Write your message."></textarea>
           <br>
           <br>
           
       </form>
       <input type="submit" value="Send Message" class="send">
       <span id="msg" style="display: none">Submitted</span>
       </div>
    </div>
       
        
        
        
        
        
        
        
        
        <div class="end" id="endd">
       <div class="end1">
        <span style="font-weight: bold;font-size: 20px;font-family: monospace;">Contact Info</span><br><br>
        <img src="icon2.png" height="25px" width="25px" alt=""><span style="position: relative;top:-7px;left:10px;color:gray;font:18px sans-serif;letter-spacing: 1px;">34 Urban Deck, Mumbai</span><br>
         
         <img style="margin-top: 10px;" src="icon.ico" height="25px" width="25px" alt=""><span style="position: relative;top:-7px;left:10px;color:gray;font:18px sans-serif;letter-spacing: 1px;">9760694337</span><br>
         
         <img style="margin-top: 10px;" src="icon1.png" height="25px" width="25px" alt=""><span style="position: relative;top:-7px;left:10px;color:gray;font:18px sans-serif;letter-spacing: 1px;">Aman.singh_cs17@gla.ac.in</span><br>
         <br>
         
       </div>
       <div class="end2">
          <span style="font-weight: bold;font-size: 20px;color:rgba(255,255,255,0.9);font-family: monospace;">Quick&nbsp;Links</span><br><br>
          <ul>
              <li><a href="">About Us</a></li>
              <li><a href="">Terms of Service</a></li>
              <li><a href="">Privacy</a></li>
              <li><a href="">Contact Us</a></li>
          </ul>
       </div>   
       <div class="end3">
         <a class=btn href="https://www.facebook.com/">
           <i class="fa fa-facebook" aria-hidden="true"></i>
       </a>
    <a  class=btn href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a class=btn href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>  
       </div>
       <br><br><br><br>
        
       <hr style="border: 1px solid rgba(255,255,255,0.2);">    
       <p style="color:white;text-align: center;margin-top: 50px;">

Copyright © 2019 All rights reserved. 

</p>
    </div>
    </body>
</html>
