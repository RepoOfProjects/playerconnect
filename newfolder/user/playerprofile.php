<?php
include 'connectplayer\connectplayer\header.html';
  ?>
<?php
include "connect.php";
error_reporting(0);

if(isset($_POST['submit'])){
  $name = $_POST['playername'];
  $age = (int)$_POST['age'];
  $dob= date('Y-m-d',strtotime($_POST['dob']));
  $phonenumber = (int) $_POST['number'];
  $weight = (int)$_POST['weight'];
  $height = (int)$_POST['height'];
  $bg = $_POST['bg'];
  $state = $_POST['state'];
  $district = $_POST['dis'];
  $city = $_POST['city'];
  $fs = $_POST['fav_sport'];
  $img = $_POST['img'];

  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder ="playerphotos/".$filename;
  move_uploaded_file($tempname,$folder);
  

  $query = " INSERT INTO players(playername,age,DOB,phonenumber,W,height,bloodgroup,STA,destrict,city,favoratesport,playerphoto)   
  values('$name','$age','$dob','$phonenumber','$weight','$height','$bg','$state','$district','$city','$fs','$folder');";
  $data = mysqli_query($con,$query);
  if($data){
      echo "<script> console.log('data inserted');</script>";
  }
  
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset .="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>player profile</title>
    <style>
           h1{
              text-align: center;  
        }
        body{
                background-image: url("images/ground.jpeg");
                background-repeat: no-repeat;
                background-size: cover;
                color: white;
                padding-bottom:10px;
        }
        div.playerprofile{
                width: 430px;
                height: 440px;
                margin: 40px 600px;
                background-color:rgba(0,0,0, 0.3); ;
                border-radius: 25px;
                font-size:18px;

        }
        #createprofile{
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #B400DF;
                border: none;
                color: rgb(33, 30, 30);
                padding: 3px 6px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                border-radius: 50px;  
        }
        #bookGround:hover{
            background-color: aquamarine;
        }
        .inputbox{
                border-radius: 25px;
                border: 2px solid #4D005F;
                padding: 12px; 
                width: 220px;
                height: 8px;  

        }
    form{
        text-align:center;
    }
      </style>
</head>
<body>
  <div class="playerprofile">
    <h1>create profile</h1>
    <form action="playerprofile.php" method="post" enctype="multipart/form-data">
    <table>     
       <tr>
       <td>
    <label for="" >Name: </lable></td>
        <td>
    <input class='inputbox' type="text" name="playername" id="playername"></td></tr>
   
    <tr>
       <td> <label for="" >Age : </lable></td>
        <td>
    <input class='inputbox' type="text" name="age" id="age"></td></tr>
    
    <tr>
       <td><label for="" >Date Of Birth: </lable></td>
        <td>
    <input class='inputbox' type="date" name="dob" id="dob" ></td></tr>
    <tr>
       <td><label for="" >Phone Number: </lable></td>
        <td>
    <input class='inputbox' type="number" name="number" id="number" ></td></tr>
    
    <tr>
       <td><label for="" >Weight: </lable></td>
        <td>
    <input class='inputbox' type="number" name="weight" id="weight" ></td></tr>
    <tr>
       <td><label for="" >Height: </lable></td>
        <td>
    <input class='inputbox' type="number" name="height" id="hight" ></td></tr>
    
    <tr>
       <td><label for="" >Blood Group: </lable></td>
        <td>
    <input class='inputbox' type="text" name="bg" id="bg" ></td></tr>
    
    <tr>
       <td><label for="" >State : </lable></td>
        <td>
    <input class='inputbox' type="text" name="state" id="state" ></td></tr>
    
    <tr>
       <td><label for="" >Destrict: </lable></td>
        <td>
    <input class='inputbox' type="text" name="dis" id="dis" ></td></tr>
    
    <tr>
       <td><label for="" >City: </lable></td>
        <td>
    <input class='inputbox' type="text" name="city" id="city" ></td></tr>
    
    <tr>
       <td><lable>Favorate Sports:</lable></td>
        <td>
     <input class='inputbox' type="text" name="fav_sport"> </td></tr>   

     <tr>
       <td><lable>Photo :</lable></td>
        <td>
     <input  type="file" name="uploadfile"></td></tr>

</table>
    

<input id='createprofile' type="submit"  name="submit" style='align:center'>
</form>
</div>
<?php 
  include 'connectplayer\connectplayer\footer.html';
  ?> 
</body>
</html>