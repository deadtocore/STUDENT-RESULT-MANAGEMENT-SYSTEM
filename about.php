<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Roboto|Source+Sans+Pro|Muli|Roboto+Slab&display=swap" rel="stylesheet">
    <style>
        *
        {
            padding:0;
            margin:0;
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
            font-family:'Muli',sans-serif;
           letter-spacing:1px;
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
            }
        }
        .about{
/*            border:5px solid red;*/
            max-width:100%;
            height:350px;
            background-color: #094183;
            
        }
        .abt_img
        {
            float:right;
            height:100%;
            width:60%;
        }
        .logo
        {
            height:200px;
            margin:20px 0px 0px 40px;
        }
        .abt_txt
        {
           color:white;
            font-family: 'Noto Serif', serif;
            font-weight: bold;
            margin-left:50px;
        
        }
        .nxt_abt
        {
/*            border:3px solid red;*/
            max-width:100%;
            height:500px;
            padding:100px 125px;
            box-sizing: border-box;
        }
    .text1
        {
            width:60%;
            height:400px;
/*            border:3px solid green;*/
            font-family: 'Roboto', sans-serif;
            font-size:18px;
            color:#094183;
            float:left;
        }
        .heading1{
            color:#094183;
            font-family:'Roboto', sans-serif;
        }
        .para1
        {
          letter-spacing: 2px;
            line-height:30px;
            font-size:20px;
            font-family:'Source Sans Pro',sans-serif;
            font-weight: bold;
/*            width:60%;*/
/*            float:left;*/
        }
        .std_img
        {
            float:right;
            width:35%;
            height:400px;
            background-image: url("image13.webp");
            background-size: 120% 400px;
/*            background-repeat: no-repeat;*/
            
        }
        .im1{
            height:100px;
            width:100px;
            opacity:0.5;
            position:absolute;
        left:28%;
            margin-top:50px;
            float:left;
        }
        .im2{
            height:100px;
            width:100px;
            opacity:0.5;
            position:absolute;
        left:45%;
            margin-top:50px;
            float:left;
        }
        .im3{
            height:100px;
            width:100px;
            opacity:0.5;
            position:absolute;
        left:65%;
            margin-top:50px;
            float:left;
        }
        .facts{
/*            border:3px solid green;*/
            max-width:100%;
            height:650px;
            position:relative;
            background-color: #f7f7f7;
            
        }
        .one
        {
            font-size:50px;
            font-family:'Noto Serif',serif;
            position:absolute;
            left:29%;
            top:350px;
            color:#094183;
            font-weight: bold;
        }
        .thirty_two
        {
             font-size:50px;
            font-family:'Noto Serif',serif;
            position:absolute;
            left:46%;
            top:350px;
            color:#094183;
        font-weight: bold;
            
        }
        .seven
        {
            font-size:50px;
            font-family:'Noto Serif',serif;
            position:absolute;
            left:67%;
            top:350px;
            color:#094183;
            font-weight: bold;
        }
        .india{
            font-size:20px;
            font-family:'Source Sans Pro',serif;
            position:absolute;
            left:29%;
            top:420px;
            color:#094183;
            font-weight: bold;
        }
        .world{
            font-size:20px;
            font-family:'Source Sans Pro',serif;
            position:absolute;
            left:46%;
            top:420px;
            color:#094183;
            font-weight: bold;
        }
        .ww{
           font-size:20px;
            font-family:'Source Sans Pro',serif;
            position:absolute;
            left:62%;
            top:420px;
            color:#094183;
            font-weight: bold; 
        }
        .model{
/*            border:3px solid red;*/
            height:500px;
            max-width:100%;
            padding-left: 150px;
            box-sizing: border-box;
            position:relative;
            
        }
        .mmodel{
            position: absolute;
            top:100px;
            font-size:35px;
            font-family:'Noto serif',serif;
            font-weight:bolder;
            color:#094183;
            
            
        }
        .mpara{
            color:#094183;
            position:absolute;
            top:180px;
            width:32%;
            font:20px 'Source Sans Pro',sans-serif;
            line-height:30px;
            letter-spacing: 1px;
            text-align: justify;
            font-weight: 500;
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
}
        .end1{
/*            border:5px solid red;*/
            height:180px;
            width:30%;
            color:rgba(255,255,255,0.9);
            line-height:22px;
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
            left:-17%;
            
            
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
        }
        .head_1{
            position: absolute;
            top:70px;
            left:50%;
            transform: translateX(-50%);
            font:25px 'Playfair Display', serif;
            color:orange;
            
        }
        .imk{
            float:right;
            width:55%;
            height:100%;
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
        @media screen and (max-width:620px)
        {
             .about{
/*            border:5px solid red;*/
            max-width:100%;
            height:350px;
            background-color: #094183;
            
        }
            .abt_img
        {
            float:right;
            height:100%;
            width:40%;
        }
        .logo
        {
            height:100px;
            margin:20px 0px 0px 40px;
        }
        .abt_txt
        {
           color:white;
            font-family: 'Noto Serif', serif;
            font-weight: bold;
            margin-left:50px;
        
        }
            .nxt_abt
        {
/*            border:3px solid red;*/
            max-width:100%;
            height:500px;
            padding:100px 125px;
            box-sizing: border-box;
        }
    .text1
        {
            width:100%;
            height:400px;
/*            border:3px solid green;*/
            font-family: 'Roboto', sans-serif;
            font-size:16px;
            color:#094183;
            float:left;
        }
        .heading1{
            color:#094183;
            font-family:'Roboto', sans-serif;
        }
        .para1
        {
          letter-spacing: 2px;
            line-height:30px;
            font-size:15px;
            font-family:'Source Sans Pro',sans-serif;
            font-weight: bold;
/*            width:60%;*/
/*            float:left;*/
        }
            .std_img
        {
            float:right;
            width:35%;
            height:400px;
            background-image: url("image13.webp");
            background-size: 120% 400px;
            display:none;
/*            background-repeat: no-repeat;*/
            
        }
            .im1{
                width:80px;
                height:80px;
            }
            .im2{
                width:80px;
                height:80px;
            }
            .im3{
                width:80px;
                height:80px;
            }
            .one{
                font-size:40px;
                
            }
            .seven{
               font-size:40px; 
            }
            .thirty_two{
                font-size:40px;
            }
            .india{
                font-size:16px;
            }
            .world{
                font-size:16px;
            }
            .ww{
                font-size:16px;
            }
            
        }
        @media screen and (max-width:820px)
        {
            .model{
/*            border:3px solid red;*/
            height:500px;
            max-width:100%;
            padding-left: 150px;
            box-sizing: border-box;
            position:relative;
            
        }
        .mmodel{
            position: absolute;
            top:100px;
            font-size:25px;
            font-family:'Noto serif',serif;
            font-weight:bolder;
            color:#094183;
            
            
        }
        .mpara{
            color:#094183;
            position:absolute;
            top:180px;
            width:50%;
            font:16px 'Source Sans Pro',sans-serif;
            line-height:30px;
            letter-spacing: 1px;
            text-align: justify;
            font-weight: 500;
        }
            .imk{
            float:right;
            width:55%;
            height:100%;
                display:none;
        }
             .end3{
/*            border:5px solid pink;*/
            height:350px;
            width:10%;
/*            display:block;*/
            position: absolute;
            left:81%;
            transform: translateX(-50%);
            top:10px;
                   transition:height 1s;
/*            line-height: 150px;*/
        }
           
               .end1{
/*            border:5px solid red;*/
            height:180px;
            width:300px;
            color:rgba(255,255,255,0.9);
            line-height:22px;
            }
                   .end2{
                       display:none;
                   }
        }
        @media screen and (max-width:1000px)
        {
            .end2{
                display:none;
            }
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
            <a href="about.php" class="act">About</a>
            <a href="contact.php">ContactUs</a>
            <a href="login.php">Login</a>
            <a href="signup.php">SignUp</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fa fa-times" aria-hidden="true"></i>
            </label>
        </ul>

    </div>
    <div class="about">
        <img src="image12.png" class="abt_img">
        <img src="logo1.svg" class="logo">
        <h1 class="abt_txt">About Us</h1>
    </div>
    <div class="nxt_abt">
       <div class="text1">
           <h1 class="heading1">India's leading university</h1><br><br>
           <span class="para1">Our distinctive Melbourne experience helps graduates become well-rounded, thoughtful and skilled professionals – making a positive impact across the globe.
           <br><br>
Our research helps solve social, economic and environmental challenges the world is facing today and into the future. We’re tightly connected with our communities, at home and around the globe – a connection that enriches our learning, teaching and research.</span>
       </div>
       <div class="std_img">
        </div>
    </div>
    <div class="facts">
       <h1 style="margin-top:80px;text-align: center;color:#094183;font-size:40px;font-family: 'Noto Serif',serif;">Facts and figures</h1><br>
       <p style="text-align: center;font-size:20px;color:#094183;margin-top:10px;font-family: 'Source Sans Pro',serif;
       ">Discover why we’re a world leader and India’s No. 1 university.</p>
        <img src="india2.png"  class="im1">
        <img src="world.png" class="im2">
        <img src="briefcase.png" class="im3">
        <br>
        <span class="one">#1</span>s
        <span class="thirty_two">#32</span>
        <span class="seven">#7</span>
        <span class="india">in India</span>
        <span class="world">in the world</span>
        <span class="ww">in graduate employability &nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;worldwide</span>
        
    </div>
    <div class="model">
       <img src="image14.jpg" class="imk">
       <h1 class="mmodel">Melbourne Model</h1>
        <p class="mpara">The Melbourne Model is a distinctive curriculum that gives students a wider understanding of the world beyond their degree. Equipped with a breadth and depth of knowledge, Melbourne graduates are flexible, adaptable and ready for any future.</p>
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
          <span style="font-weight: bold;font-size: 20px;color:rgba(255,255,255,0.9);font-family: monospace;position:absolute;right:210px;">Quick&nbsp;Links</span><br><br>
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
