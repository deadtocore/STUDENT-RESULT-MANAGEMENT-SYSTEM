<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Big+Shoulders+Display|Roboto+Slab|Source
+Sans+Pro|Noto+Sans+KR&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       <style>
        *{
            padding:0px;
            margin:0px;
            
        }
           html{
               scroll-behavior: smooth;
           }
           body{
               overflow-x: hidden;
           }
        .header {
            height: 100px;
            background: black;
            padding: 0 20px;
            color: #fff;
/*            opacity: 50%;*/
        }
        .header h2 {
            line-height: 100px;
            float: left;
            text-transform: uppercase;
            font-family: 'Muli',sans-serif;
            letter-spacing: 1px;
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
                z-index: 364287368734267842876823;
            }
        }
        a.active{
            color:#fdc632;
        }
        .banner{
            background-image: url('image1.jpg');
            width:100%;
            height:700px;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }
        .txt1{
            position:absolute;
            top:50%;
            transform: translateY(-50%);
            left:8%;
            background-color:#002347;
            padding:25px 30px;
            color:#FDC632;
            font:30px 'Big Shoulders Display', cursive;
            letter-spacing: 1px;
            border-left: 18px solid #0cd64a;
            border-radius: 10px;
            opacity: 0.7;
            animation: txt1 1.8s linear;
        }
        @keyframes txt1{
            0%{
                left:-10%;
            }
            50%{
                left:12%;
            }
            100%{
                left:8%;
            }
        }
        .clickme{
            padding:12px 25px;
/*            background-color:rgb(227, 64, 25);*/
            background: transparent;
            color:black;
            outline: none;
            font:20px 'Roboto Condensed',sans-serif;
            border-radius:8px;
            font-weight: 800;
            position: absolute;
            left:11%;
            top:420px;
            border: 2px solid white;
            
            letter-spacing: 1px;
            
            
        }
        .clickme:hover{
            
            background-color:rgb(96, 94, 94);
/*            color: white;*/
            cursor: pointer;
            
            
            
        }
           .get_started{
/*               border: 5px solid yellow;*/
               height:auto;
               max-width: 100%;
               padding: 100px 20px 100px 100px;
            position:relative;
            margin:0 auto;
            box-sizing: border-box;
            background-color: black;
              
           }
           
        .photo8{
            position: relative;
            height:540px;
            width:45%;
        }
        .photo8_txt{
            position:absolute;
            right:12%;
            top:13%;
            color:white;
            font-size: 3vw;
            font-family: 'Economica', sans-serif;
            background-color: rgb(103, 98, 98);
            padding:10px 20px 10px 15px;
            border-radius: 10px;
            border-left: 15px solid #39b539;
            
            
        }
           
        .para1
        {
           position:absolute;
            left:56%;
            color:rgba(255,255,255,0.5); 
            top:200px;
/*            text-align: justify;*/
            width:450px;
            font-size:22px;
            line-height: 45px;
            font-family: "Muli",sans-serif;
            display: block;
            padding-right: 20px;
            
        }
           .visit{
               position: relative;
/*               border: 5px solid green;*/
               max-width: 100%;
               height:450px;
               background-image: url(image3.jpg);
               background-repeat: no-repeat;
               background-size: 100% 450px;
               
           }
           .visit1{
               position: absolute;
/*               border: 3px solid black;*/
               left:50%;
               top:50%;
               transform: translate(-50%,-50%);
               width: 50%;
               height:auto;
               background-color: rgba(62, 62, 62,0.7);
               padding:40px;
               box-sizing: border-box;
               border-radius: 10px;
               border-top: 15px solid rgb(209,18,18);
           }
           .visit_txt{
           letter-spacing: 2px;
               text-align: center;
               font-size: 20px;
               color: white;
               line-height: 25px;
           }
           .images{
/*               border: 5px solid black;*/
               padding:60px;
               height: auto;
               max-width:100%;
               box-sizing: border-box;
               overflow-y: auto;
               
           }
           div.gallery {
  margin: 20px;
  border: 1px solid #ccc;
  float: left;
  width: 250px;
}

div.gallery:hover {
  border: 2px solid #777;
}

div.gallery img {
  width: 100%;
  height:220px;
}

div.desc {
  padding: 25px;
  text-align: center;
    background-color: rgba(0,0,0,0.2);
    font:18px "Source Sans Pro",serif;
    margin-top: -4px;
    
    
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
            left:-0%;
            
            
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
           .myid{
               position: relative;
               top:-7px;
               left:10px;
               color:gray;
               font:18px sans-serif;
               letter-spacing: 1px;
           }
           @media screen and (max-width:800px){
               
               .txt1{
            position:absolute;
            top:33%;
/*            transform: translateY(-50%);*/
            left:8%;
            background-color:#002347;
            padding:25px 30px;
            color:#FDC632;
            font:30px 'Big Shoulders Display', cursive;
            letter-spacing: 1px;
            border-left: 18px solid #0cd64a;
            border-radius: 10px;
            opacity: 0.7;
            animation: txt1 1.8s linear;
                   transition: top 1s;
        }
        @keyframes txt1{
            0%{
                left:-10%;
            }
            50%{
                left:12%;
            }
            100%{
                left:8%;
            }
        }
               .banner{
            
            width:100%;
            height:550px;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
        }
        .clickme{
            padding:12px 25px;
/*            background-color:rgb(227, 64, 25);*/
            background: transparent;
            color:black;
            outline: none;
            font:20px 'Roboto Condensed',sans-serif;
            border-radius:8px;
            font-weight: 800;
            position: absolute;
            left:11%;
            top:45%;
            border: 2px solid white;
            
            letter-spacing: 1px;
            transition: top 1s;
            
            
        }
        .clickme:hover{
            
            background-color:rgb(96, 94, 94);
/*            color: white;*/
            cursor: pointer;
            
            
            
        }
               .get_started{
/*               border: 5px solid yellow;*/
               height:auto;
               max-width: 100%;
               padding: 100px 100px;
            position:relative;
            margin:0 auto;
            box-sizing: border-box;
            background-color: black;
              
           }
           
        
               .get_started{
                   
                   position: relative;
                   height:90vh;
                   padding:20px;
/*                   transition: height 2s;*/
                   
               }
               .photo8{
                   display: none;
               }
               .photo8_txt{
            position:absolute;
            left:10%;
            top:13%;
                   width: 35%;
            color:white;
            font-size: 25px;
            font-family: 'Economica', sans-serif;
            background-color: rgb(103, 98, 98);
            padding:10px 20px 10px 15px;
            border-radius: 10px;
            border-left: 15px solid #39b539;
            
            
        }
               
        .para1
        {
           position:absolute;
            left:10%;
            top:30%;
            
            text-align: justify;
            width:80%;
            font-size:18px;
            line-height: 40px;
            color:rgba(255,255,255,0.5); 
            font-family: "Muli",sans-serif;
            display: block;
            
        }
               .visit{
               position: relative;
/*               border: 5px solid green;*/
               max-width: 100%;
               height:450px;
               background-image: url(image3.jpg);
               background-repeat: no-repeat;
               background-size: 100% 450px;
               
           }
           .visit1{
               position: absolute;
/*               border: 3px solid black;*/
               left:50%;
               top:50%;
               transform: translate(-50%,-50%);
               width: 80%;
               height:75%;
               background-color: rgba(62, 62, 62,0.7);
               padding:40px;
               box-sizing: border-box;
               border-radius: 10px;
               border-top: 15px solid rgb(209,18,18);
               transition: width 1s;
               transition: height 1s;
           }
           .visit_txt{
           letter-spacing: 2px;
               text-align: center;
               font-size: 20px;
               color: white;
               line-height: 25px;
           }
               
               .end3{
/*            border:5px solid pink;*/
            height:300px;
            width:10%;
/*            display:block;*/
            position: absolute;
            left:81%;
            transform: translateX(-50%);
            top:10px;
                   transition: height 2s;
/*            line-height: 150px;*/
        }
               
           }
           @media screen and (max-width:670px){
               .visit1{
               position: absolute;
/*               border: 3px solid black;*/
               left:50%;
               top:50%;
               transform: translate(-50%,-50%);
               width: 80%;
               height:98%;
               background-color: rgba(62, 62, 62,0.7);
               padding:40px;
               box-sizing: border-box;
               border-radius: 10px;
               border-top: 15px solid rgb(209,18,18);
                   transition: width 1s;
               transition: height 1s;
           }
               
               .end1{
                   width: 300px;
                   
               }
               .end2{
                   display: none;
                   
               }
               .get_started{
                   
                   position: relative;
                   height:90vh;
                   padding:20px;
                   
               }
           }
           @media screen and (max-width:730px){
               .photo8{
                   display: none;
               }
               .get_started{
                   height:90vh;
               }
               
           }
    </style>
</head>

<body>
   <div class="header">
        <h2>Melbourne university</h2>

        <input type="checkbox" id="chk" style="display: none">
        <label for="chk" class="show-menu-btn">
            <i class="fa fa-ellipsis-h"></i>
        </label>
        <ul class="menu">
            <a href="index.php" class="active">Home</a>
            <a href="about.php">About</a>
            <a href="">Contact Us</a>
            <a href="login.php">Login</a>
            <a href="signup.php">Signup</a>
            <label for="chk" class="hide-menu-btn">
                <i class="fa fa-times"></i>
            </label>
        </ul>

    </div>
    <div class="banner">
      <span class='txt1'>Student Result Portal</span>
      
      <a href="#get"><button class="clickme">Get Started <i class="fa fa-arrow-down" aria-hidden="true"></i></button></a>

    </div>
    <div class="get_started" id="get">

        <img src="photo8.jpg" class="photo8">
    
       
        <span class="photo8_txt">Melbourne University</span>
        <span class="para1">Established in 1853, the University of Melbourne is a public-spirited institution that makes distinctive contributions to society in research, learning and teaching and engagement.<br>It’s consistently ranked among the leading universities in the world, with international rankings of world universities placing it as number 1 in Australia and number 32 in the world (Times Higher Education World University Rankings 2017-2018).


</span>
   </div>
    
    <div class="visit">
        <div class="visit1">
            <h1 style="color: white;text-align: center;font-size: 45px;font-family: 'Roboto Slab',serif;letter-spacing: 3px;">Visit the Melbourne University</h1><!--<h1 style="color: white;text-align: center;font-size: 45px;">University of Melbourne</h1>-->
            <br>
            <br>
            <span class="visit_txt">Only a short walk from Melbourne's city centre, the University of Melbourne welcomes visitors and invites you to explore our unique cultural, architectural and landscape features and facilities.</span>
        </div>
    </div>
    
    <div class="images">
    <div class="gallery">
  <a target="_blank" href="image4.jpg">
    <img src="image4.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Parkville</div>
</div>

<div class="gallery">
  <a target="_blank" href="image5.jpg">
    <img src="image5.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Southbank</div>
</div>

<div class="gallery">
  <a target="_blank" href="image6.jpg">
    <img src="image6.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Burnley</div>
</div>

<div class="gallery">
  <a target="_blank" href="image7.jpg">
    <img src="image7.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Creswick</div>
</div>
    <div class="gallery">
  <a target="_blank" href="image8.jpg">
    <img src="image8.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Dookie</div>
</div>
    <div class="gallery">
  <a target="_blank" href="image9.jpeg">
    <img src="image9.jpeg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Werribee</div>
</div>
    <div class="gallery">
  <a target="_blank" href="image10.jpg">
    <img src="image10.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Shepparton</div>
</div>
    </div>
    <div class="end" id="endd">
       <div class="end1">
        <span style="font-weight: bold;font-size: 20px;font-family: monospace;">Contact Info</span><br><br>
        <img src="icon2.png" height="25px" width="25px" alt=""><span style="position: relative;top:-7px;left:10px;color:gray;font:18px sans-serif;letter-spacing: 1px;">34 Urban Deck, Mumbai</span><br>
         
         <img style="margin-top: 10px;" src="icon.ico" height="25px" width="25px" alt=""><span style="position: relative;top:-7px;left:10px;color:gray;font:18px sans-serif;letter-spacing: 1px;">9760694337</span><br>
         
         <img style="margin-top: 10px;" src="icon1.png" height="25px" width="25px" alt=""><span class="myid">Aman.singh_cs17@gla.ac.in</span><br>
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














