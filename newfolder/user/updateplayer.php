<?php
include 'connectplayer\connectplayer\header.html';
  ?>
<?php
include "connect.php";
// error_reporting(0);
$id = $_GET['id'];
$name = $_GET['name'];
$Age = $_GET['age'];
$dob = $_GET['dob'];
$phoneNumber = $_GET['phonenumber'];
$w = $_GET['w'];
$h = $_GET['h'];
$bg = $_GET['bg'];
$st = $_GET['state'];
$des = $_GET['des'];
$city = $_GET['city'];
$favsport = $_GET['favsport'];
?>
<html >
<head> 
<link rel="stylesheet" href="style.css">
    <title>update player</title>
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
    <h1>update profile</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <table>
    <tr>
       <td>
    <label for="" >ID: </lable></td>
        <td>
    <input class='inputbox' type="text" name="playerId" id="playerid" value="<?php echo "$id" ?>" readonly> </td></tr>       
       <tr>
       <td>
    <label for="" >Name: </lable></td>
        <td>
    <input class='inputbox' type="text" name="playername" id="playername" value="<?php echo "$name" ?>"></td></tr>
   
    <tr>
       <td> <label for="" >age : </lable></td>
        <td>
    <input class='inputbox' type="text" name="age" id="age" value="<?php echo "$Age" ?>"></td></tr>
    
    <tr>
       <td><label for="" >date of birth: </lable></td>
        <td>
    <input class='inputbox' type="date" name="dob" id="dob" value="<?php echo "$dob" ?>"></td></tr>
    <tr>
       <td><label for="" >phone number: </lable></td>
        <td>
    <input class='inputbox' type="number" name="number" id="number" value="<?php echo "$phoneNumber" ?>"></td></tr>
    
    <tr>
       <td><label for="" >weight: </lable></td>
        <td>
    <input class='inputbox' type="number" name="weight" id="weight" value="<?php echo "$w" ?>"></td></tr>
    <tr>
       <td><label for="" >height: </lable></td>
        <td>
    <input class='inputbox' type="number" name="height" id="hight" value="<?php echo "$h" ?>"></td></tr>
    
    <tr>
       <td><label for="" >blood group: </lable></td>
        <td>
    <input class='inputbox' type="text" name="bg" id="bg" value="<?php echo "$bg" ?>"></td></tr>
    
    <tr>
       <td><label for="" >state : </lable></td>
        <td>
    <input class='inputbox' type="text" name="state" id="state" value="<?php echo "$st" ?>"></td></tr>
    
    <tr>
       <td><label for="" >destrict: </lable></td>
        <td>
    <input class='inputbox' type="text" name="dis" id="dis" value="<?php echo "$des" ?>"></td></tr>
    
    <tr>
       <td><label for="" >city: </lable></td>
        <td>
    <input class='inputbox' type="text" name="city" id="city" value="<?php echo "$city" ?>"></td></tr>
    
    <tr>
       <td><lable>favorate sports:</lable></td>
        <td>
     <input class='inputbox' type="text" name="fav_sport" value="<?php echo "$favsport" ?>"> </td></tr>   

</table>
<input id='createprofile' type="submit"  name="update_profile" style='align:center'>
</form>
</div>
</body>
</html>
<?php 
  if($_GET['update_profile'])
  {
  $id = $_GET['id'];
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
 
  $query =" update players set playername='$name', age='$age', DOB='$dob', phonenumber='$phonenumber', W='$weight', height='$height', bloodgroup='$bg', STA='$state', destrict='$des', city='$city', favoratesport='$fs' where playerId = '$id' ";
  
  $data = mysqli_query($con,$query);
  if($data){
    echo "<script> alert ('record updated')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/pc/viewplayerprofile.php">
     <?php
  }
  else{
    echo "<script> alert ('fail to update')</script>";
  }
} 

  ?> 
  <?php 
  include 'connectplayer\connectplayer\footer.html';
  ?>