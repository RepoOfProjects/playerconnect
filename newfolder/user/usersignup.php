<?php
include 'connectplayer\connectplayer\header.html';
  ?>
 <?php
include "connect.php";
// error_reporting(0);
if(isset($_POST['submit'])){
$useremail = $_POST['useremail'];
$userpass = $_POST['password'];
 $sql = "insert into users(email,password) values('$useremail','$userpass');";
 $result = mysqli_query($con,$sql);
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css">
    <link rel="stylesheet" href="style.css">
    <style>
        h1{
              text-align: center;  
        }
        div.userSignUP{
                width: 330px;
                height: 180px;
                margin: 40px 600px;
                background-color:rgba(0,0,0, 0.3); ;
                border-radius: 25px;
        }
        #signupsubmit{
                display: flex;
                /* justify-content: center; */
                /* align-items: center; */
                background-color: #B400DF;
                border: none;
                color: rgb(33, 30, 30);
                padding: 3px 6px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 12px;
                margin: 4px 2px;
                border-radius: 50px;  
        }
        .inputbox{
                border-radius: 25px;
                border: 2px solid #73AD21;
                padding: 10px; 
                width: 150px;
                height: 8px;  

        }
        </style>
</head>
<body class="singUp">

  <div class="userSignUP">
  <h1>user sign up form</h1>
<form name="f1" action="usersignup.php"  onsubmit="return validation()" method="POST">
<table>
    <tr>
    <td> <label> email:</label></td>
   <td>
  <input class='inputbox' type="email" name="useremail">
  </td>
   </tr>
  <tr>
    <td><label>Password:</label></td>
    <td><input class='inputbox' type="password" name="password">
  </td>
</tr>
  <tr>
    <td><label>Confirm Password:</label>
  </td>
   <td>
  <input class='inputbox'type="password" name="cpassword">
  </td>
</tr>
</table>

<input  id="signupsubmit" type="submit" value="submit" name="submit">

</form> 
</div> 
          <?php 
  include 'connectplayer\connectplayer\footer.html';
  ?>
</body>
</html>