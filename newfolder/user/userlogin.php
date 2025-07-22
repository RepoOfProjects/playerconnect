<?php
include 'connectplayer\connectplayer\header.html';
  ?>
<?php
session_start();
error_reporting(0);
if(isset($_POST['login'])){
                            $email = $_POST['email'];  
                            $password = $_POST['userpass']; 

                            $con = mysqli_connect('localhost:3306','','','pc');
                            if(!$con)
                            die( "not connected to database".mysqli_connect_error());
                            else{
                                    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";  
                                    $result = mysqli_query($con, $sql);  
                                    $check = mysqli_num_rows($result);  
                                    echo $check;
                                    
                                    if($check == 1 ){ 
                                                    $_SESSION['emailuse'] = $email;
                                                    header('location:index.php'); 
                                                    echo "<h1><center> Login successful </center></h1>";  
                                    }  
                                    else{ 
                                            echo "<h1> Login failed. Invalid username or password.</h1>";  
                                    }
                                    }  
}         
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
              text-align: center;  
        }
        div.loginbox{
                width: 330px;
                height: 180px;
                margin: 40px 600px;
                background-color:rgba(0,0,0, 0.3); ;
                border-radius: 25px;
                font-size: 26px;

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
  
        .inputbox{
                border-radius: 25px;
                border: 2px solid #73AD21;
                padding: 12px; 
                width: 200px;
                height: 8px;  

        }
        </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="loginbox">
    <form action="userlogin.php" method="post">
      <table> 
        <h1>Login</h1>    
       <tr>
       <td><label> E-mail:</label></td>
        <td>
        <input  class='inputbox' type="text" name="email"></td>
        </tr>
         <td><label>password: </label></td>
        <td>
        <input  class='inputbox' type="password" name="userpass"></td>
        </tr>
</table>
      <input id='loginsubmit' type="submit" name="login" value="login">
      </form>
      </div>
</body>
</html>
<?php 
  include 'connectplayer\connectplayer\footer.html';
  ?>