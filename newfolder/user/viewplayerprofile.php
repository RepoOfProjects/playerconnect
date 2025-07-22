<?php
include 'connectplayer\connectplayer\header.html';
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>players listed</title>

    <style>
    h1{
              text-align: center;  
        }
        div.playerprofile{
                width: 1480px;
                height: 640px;
                margin: 40px 40px;
                background-color:rgba(0,0,0, 0.8); ;
                border-radius: 25px;
                font-size:18px;

        }
        table, th, td {
                       border: 1px solid;
                       font-size:26px;
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
    #del{
          padding-left: 100px;
  background-color: #fd5050;
  border: none;
  color: rgb(33, 30, 30);
  padding: 4px 8px;
  text-align: right;
  text-decoration: none;
  display: inline-flex;
  font-size: 16px;
  margin: 8px 1px;
  border-radius: 50px;
  align-items: flex-end;
        }
       #update{
          padding-left: 100px;
  background-color: #00BD93;
  border: none;
  color: rgb(33, 30, 30);
  padding: 4px 8px;
  text-align: right;
  text-decoration: none;
  display: inline-flex;
  font-size: 16px;
  margin: 8px 1px;
  border-radius: 50px;
  align-items: flex-end;
        }
    </style>
</head>
<body>

<div class="playerprofile">
<h1> view grounds </h1>
<br>
<table class="table">
  <tr>
  <th>    player img    </th>
    <th>    player name   </th>
    <th>    Date of Birth   </th>
    <th>   age   </th>
    <th>    phone number     </th>
    <th>    weight     </th>
    <th>    height     </th>
    <th>    bloodgroup     </th>
    <th>     state      </th>
    <th>     district    </th>
    <th>       city      </th>
    <th>     favourite sport     </th>
    <th>     update / delete     </th>
   

</tr>
<tbody>
<?php
include "connect.php";
$sql = "select * from players";
// $result = mysqli_connect($con,$sql);
$result = $con->query($sql);
if(!$result){
  die("invalid query: ". $con->error);
}
while($row = $result->fetch_assoc()){
echo "
<tr>
      <td> <img src='".$row['playerphoto']."' height ='50' width = '100'> </td>  
      <td>" . $row["playername"] ."</td>
      <td>" . $row["DOB"] ."</td>
      <td>" . $row["age"] ."</td>
      <td>" . $row["phonenumber"] ."</td>
      <td>" . $row["W"] ."</td>
      <td>" . $row["height"] ."</td>
      <td>" . $row["bloodgroup"] ."</td>
      <td>" . $row["STA"] ."</td>
      <td>" . $row["destrict"] ."</td>
      <td>" . $row["city"] ."</td>
      <td>" . $row["favoratesport"] ."</td>
      <td><a href='updateplayer.php?id=$row[playerId]&name=$row[playername]&age=$row[age]&dob=$row[DOB]&phonenumber=$row[phonenumber]&w=$row[W]&h=$row[height]&bg=$row[bloodgroup]&bg=$row[bloodgroup]&state=$row[STA]&des=$row[destrict]&city=$row[city]&favsport=$row[favoratesport]' id='update'>update</a>
      <a href='deleteplayer.php?rn=$row[playerId]' id='del'>Delete</a></a>
      

</tr>";
}
?>
</tbody>
</table>
</div>
</body>
</html>
<?php 
  include 'connectplayer\connectplayer\footer.html';
  ?> 