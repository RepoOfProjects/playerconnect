<?php
      include 'connectplayer\connectplayer\header.html';
      error_reporting(0);  
      session_start();
      echo $_SESSION['emailuse']; 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">  
    <style>
         h1{
              text-align: center;  
        }
        div.box1{
                width: 400px;
                height: 360px;
                margin: 40px 200px;
                background-color:rgba(0,0,0, 0.8); ;
                border-radius: 25px;
                font-size: 26px;
                text-align:center;
        }
        div.box2{
                width: 500px;
                height: 100px;
                margin: 60px 600px;
                background-color:rgba(0,0,0, 0.8); ;
                border-radius: 25px;
                font-size: 26px;
                text-align:center;

        }
        #loginsubmit{
                display: flex;

                background-color: #B400DF;
                border: none;
                color: rgb(33, 30, 30);
                padding: 3px 6px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 18px;
                margin: 4px 2px;
                border-radius: 50px;  
        }
    </style>

  </head>
<body>


<div class="box1">
<h1>welcome to connect player </h1><br>
<p>
   Step into the world of sports with form connect player! Whether you're a player, a team creator, or just looking for exciting matches, you're in the right place. Join us and let's make every game a victory!
      </p>
</div>
<div class="box2">
<p>
  Contact Us <br>
  Email : connectplayer9@gmail.com<br>
  phone: +91 9784536122
</p>
</div>


</body>
</html>

<?php 
  include 'connectplayer\connectplayer\footer.html';
  ?>