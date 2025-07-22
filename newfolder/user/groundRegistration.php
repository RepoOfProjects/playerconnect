<?php
//  include 'connect.php';
include 'connectplayer\connectplayer\header.html';
  ?>

<?php
session_start();

error_reporting(0);

if(isset($_POST['submit'])){
    $email = $_GET['email'];
    $groundName = $_POST['groundName'];
    $gl = $_POST['groundaddress'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $description = $_POST['description'];
    $costPerHour = (int)$_POST['cost'];
    $ownerName = $_POST['ownerName'];
    $ownerMobile = (int)$_POST['ownerMobile'];
    $ownerAccountNumber = $_POST['ownerAccountNumber'];
    $img = $_POST['img'];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder ="groundphotos/".$filename;
    move_uploaded_file($tempname,$folder);
  
    
    $connect = mysqli_connect('localhost:3306','','','pc');
    if(!$connect)
     die( "not connected to database".mysqli_connect_error());
    else{
     echo "<script> console.log('connected to database');</script>";
     $sql = "insert into grounds(email,groundname,groundlocation,district,state,description,costPerhour,ownername,ownermobile,owneraccountnumber,groundphotos) 
     values('$email','$groundName','$gl','$district','$state','$description','$costPerHour','$ownerName','$ownerMobile','$ownerAccountNumber','$folder');";
     $result = mysqli_query($connect,$sql);
     if($result){
        echo "<script> alert ('record updated')</script>";
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
    <link rel="stylesheet" href="style.css">
    <title>Ground Registration</title>
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
<body class="groundRegistartion">
    <div class="groundRgs">

    <form action="groundRegistration.php" method="POST" enctype="multipart/form-data">
    <h1>Ground Registration</h1>
    <table>
    <tr>
    <td> <lable> email:</label></td>
     <td><input class='inputbox' type="text" name="email"  ></td>
     </tr>
    <tr><td>
    <lable> Ground name:</label>
    </td><td>
    <input class='inputbox' type="text" name="groundName"></td>
    </tr>
    <tr><td><lable> Ground address: </label></td>
   <td>
    <input class='inputbox' type="text" name="groundaddress"></td>
    </tr>
    <tr><td><lable>District:</label></td>
   <td>
    <input class='inputbox' type="text" name="district"></td>
    </tr>
    <tr><td>
        <lable> State:</label></td>
   <td>
    <input class='inputbox' type="text" name="state">
    </td></tr>
    <tr><td><lable> Discription:</label></td>
   <td>
    <input class='inputbox' type="text" name="description">
    </td></tr>
    <tr><td> 
    <lable>Cost : </label></td>
   <td>
    <input class='inputbox' type="integer" name="cost">
    </td> </tr>
    <tr><td> <lable>Ground Owner name: </label></td>
   <td>
    <input class='inputbox' type="text" name="ownerName">
    </td></tr>
    <tr><td><lable> Mobile Number: </label></td>
   <td>
    <input class='inputbox' type="integer" name="ownerMobile">
    </td></tr>
    <tr><td><lable> Ground photos : </label></td>
   <td>
   <input  type="file" name="uploadfile">
    </td></tr>
</table>
    <input id='groundReg' type="submit" value="Submit" name="submit">
</form>
</div>
</body>
</html>
<?php 
  include 'connectplayer\connectplayer\footer.html';
  ?>