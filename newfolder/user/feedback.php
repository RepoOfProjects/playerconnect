<?php
include 'connectplayer\connectplayer\header.html';
  ?>
<?php
include "connect.php";
// error_reporting(0);
if(isset($_POST['submit'])){
$rating = $_POST['rating'];
$Expriance = $_POST['userExp'];
 $sql = "insert into feedback(rating,Expriance) values('$rating','$Expriance');";
 $result = mysqli_query($con,$sql);
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1{
              text-align: center;
              font-size:48px;  
        }
      
        div.feedback{
                width: 630px;
                height: 430px;
                margin: 140px 500px;
                background-color:rgba(0,0,0, 0.3); ;
                border-radius: 25px;
        }
        #Feedback{
                display: flex;
                /* justify-content: center; */
                /* align-items: center; */
                background-color: #B400DF;
                border: none;
                color: white;
                padding: 3px 6px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 28px;
                margin: 4px 2px;
                border-radius: 50px;
                 
        }
        label{
                font-size:36px
        }
        .inputbox{
                border-radius: 25px;
                border: 2px solid #73AD21;
                padding: 16px; 
                width: 300px;
                height: 16px;  

        }
       
          
      </style>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">  
</head>
<body>

<div class="feedback">
  <h1> Give Feedback  </h1>
<form action='' method='post'>
        <h1>Feedback</h1>    
        <label>How was your experience?</label><br>
  <label class="container" for="bad">Bad
  <input type="radio" name="rateing" value="bad">
  <span class="checkmark"></span>
  </label><br>
  <label class="container" for="good">Good
  <input type="radio" name="rateing" value="good">
  <span class="checkmark"></span>
  </label><br>  
  <label class="container" for="best">Best
  <input type="radio" name="rateing" value="best">
  <span class="checkmark"></span>
  </label><br>    
<label>How was your experience on web site? </label>
<input  class='inputbox' type="text" name="userExp"><br>
      <input id="Feedback" id='submit' type="submit" name="Feedback" value="submit">
      </form>

  </div>
</body>
<?php 
  include 'connectplayer\connectplayer\footer.html';
  ?>
</html>

