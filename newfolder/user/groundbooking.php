
<?php
include 'connectplayer\connectplayer\header.html';
  ?>

<?php


include "connect.php";

if(isset($_POST['submit'])){

    $groundName = $_POST['groundname'];
    $time = $_POST['Time'];
    $date = date('Y-m-d',strtotime($_POST['date']));
    $price = (int)$_POST['price'];


$connect = mysqli_connect('localhost:3306','','','pc');
if(!$connect){
 die( "not connected to database".mysqli_connect_error());
}
else{

    $connect = mysqli_connect('localhost:3306','','','pc');
    if(!$connect)
     die( "not connected to database".mysqli_connect_error());
    else{
     echo "<script> console.log('connected to database');</script>";


        $sql = "INSERT INTO groundBooked(GBId,groundName,sTime,sdate,price) valuse($groundName,$time,$date,$price)";
        $result = mysqli_query($connect,$sql);
        if($result){
           echo "<script> alert ('record updated')</script>";
        }
       }
    
    
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ground Booking</title>
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
        div.groundBook{
                width: 330px;
                height: 150px;
                margin: 40px 600px;
                background-color:rgba(0,0,0, 0.3); ;
                border-radius: 25px;
                font-size:18px;

        }
      
        #bookGround{
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
                padding: 10px; 
                width: 150px;
                height: 8px;  

        }
    form{
        text-align:center;
    }
        </style>
</head>
<body>
<div class="groundBook" >
<h1>Ground Booking  </h1>
    <form>
    <table> 
    <tr>
    <td>
    <lable>Ground name: </label></td>
   <td>
    <input class='inputbox' type="text" name="Ground">  </td>
</tr>

<tr><td> 
    <label for="district">Time</label></td>
   <td>
    <select name="Time" id="time">
    <optgroup label="groundTime">
        <option value="1">8am-10am</option>
        <option value="2">10am-12pm</option>
        <option value="3">12pm-2pm</option>
        <option value="4">2pm-4pm</option>
        <option value="5">4pm-6pm</option>
        <option value="6">6pm-8pm</option>
        <option value="7">8pm-10pm</option>
        <option value="8">10pm-12pm</option>
    </optgroup>
</select></td></tr>
<tr>
    <td>
    <lable>date: </label></td>
   <td>
    <input class='date' type="date" name="date">  </td>
</tr>
<tr>
    <td>
    <lable>price: </label></td>
   <td>
    <input class='inputbox' type="text" name="price">  </td>
</tr>
</table>
</table>   
    <input   id='bookGround' type="submit" name="Ground_booking_sub" placeholder="procced to pay"></lable>  </td>
</tr>
</form>
    </div>


</body>
</html>
<?php 
  include 'connectplayer\connectplayer\footer.html';
  ?>