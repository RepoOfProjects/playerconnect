<?php
include 'connectplayer\connectplayer\header.html';
  ?>
<?php
include "connect.php";
error_reporting(0);
$id = $_GET['id'];
$name = $_GET['name'];
$game = $_GET['gl'];
$des = $_GET['des'];
$state = $_GET['sta'];
$dis = $_GET['dis'];
$cost = $_GET['cost'];
?>
<html >
<head> 
    <title>update ground</title>
    <link rel="stylesheet" href="style.css">
    <style>
 h1{
              text-align: center;  
        }

        div.groundRgs{
                width: 580px;
                height: 480px;
                margin: 40px 500px;
                background-color:rgba(0,0,0, 0.3); ;
                border-radius: 25px;
                font-size:26px;
        }
        #groundReg{
                display: flex;
                background-color: #B400DF;
                border: none;
                color: rgb(33, 30, 30);
                padding: 8px 26px;
                text-align: right;
                text-decoration: none;
                display: inline-block;
                font-size: 18px;
                margin: 4px 2px;
                border-radius: 50px;  
        }
        #groundReg:hover{
            background-color:aquamarine ;
        }
        .inputbox{
                border-radius: 25px;
                border: 2px solid #4D005F;
                padding: 12px; 
                padding: 12px; 
                width: 350px;
                height: 12px;  

        }
   </style>
</head>
<body>
<div class="groundRgs">

    <form action="groundRegistration.php" method="POST" enctype="multipart/form-data">
    <h1>Ground Registration</h1>
    <table>
    <tr><td>
    <lable> Ground id:</label>
    </td><td>
    <input class='inputbox' type="text" name="groundName" value="<?php echo "$id" ?>"></td>
    </tr>
    <tr><td>
    <lable> Ground name:</label>
    </td><td>
    <input class='inputbox' type="text" name="groundName" value="<?php echo "$name" ?>"></td>
    </tr>
    <tr><td><lable> ground address: </label></td>
   <td>
    <input class='inputbox' type="text" name="groundaddress" value="<?php echo "$gl" ?>"></td>
    </tr>
    <tr><td><lable>District:</label></td>
   <td>
    <input class='inputbox' type="text" name="district" value="<?php echo "$des" ?>"></td>
    </tr>
    <tr><td>
        <lable> state:</label></td>
   <td>
    <input class='inputbox' type="text" name="state" value="<?php echo "$state" ?>">
    </td></tr>
    <tr><td><lable> Discription:</label></td>
   <td>
    <input class='inputbox' type="text" name="description" value="<?php echo "$dis" ?>">
    </td></tr>
    <tr><td> 
    <lable>Cost : </label></td>
   <td>
    <input class='inputbox' type="integer" name="cost" value="<?php echo "$cost" ?>">
    </td> </tr>
  
    <input id='groundReg' type="submit" value="Submit" name="submit" >
</form>
</div>

</body>
</html>
<?php 
  if($_GET['submit'])
  {
  $id = $_GET['id'];
  $email = $_GET['email'];
  $groundName = $_POST['groundName'];
  $gl = $_POST['groundaddress'];
  $district = $_POST['district'];
  $state = $_POST['state'];
  $description = $_POST['description'];
  $cost = (int)$_POST['cost'];

  $query ="update grounds set email ='$email', groundname='$groundName', groundlocation='$gl', disctrict='$district', state='$state', description='$discription', costPerhour='$cost' where groundID = '$id' ";
  
  $data = mysqli_query($con,$query);
  if($data){
    echo "<script> alert ('record updated')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/pc/userstable.php">
     <?php
  }
  else{
    echo "fail to update";
  }
} 

  ?> 
  <?php 
  include 'connectplayer\connectplayer\footer.html';
  ?>