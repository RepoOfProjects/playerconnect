<?php
include 'connectplayer\connectplayer\header.html';
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ground List</title>
    <style>
       table, th, td {
                       border: 1px solid;
                       font-size:36px;
                      }
          div.groundlist{
            width: 1480px;
                height: 480px;
                margin: 40px 10px;
                background-color:rgba(0,0,0, 0.7); ;
                border-radius: 25px;
                font-size:26px;
        }
          h1{
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

<div class="groundlist">
<h1> view grounds </h1>
<br>
<table class="table">
  <tr>
    <th> ground name</th>
    <th> ground location</th>
    <th> district </th>
    <th>state</th>
    <th> description</th>
    <th> Time </th>
    <th>costPerhour</th>
    <th>Ground images</th>

<tbody>
<?php

include "connect.php";
$sql = "select * from grounds";
// $result = mysqli_connect($con,$sql);
$result = $con->query($sql);
if(!$result){
  die("invalid query: ". $con->error);
}
while($row = $result->fetch_assoc()){
echo "
<tr>
      <td id=''>" . $row["groundname"] ."</td>
      <td>" . $row["groundlocation"] ."</td>
      <td>" . $row["district"] ."</td>
      <td>" . $row["state"] ."</td>
      <td>" . $row["description"] ."</td>
      <td>" . $row["costPerhour"] ."</td>
      <td id='imgGround'> <img src='".$row['groundphotos']."' height ='50' width = '100'> </td>
      <td><a href='updateground.php?id=$row[groundID]&name=$row[groundname]&gl=$row[groundlocation]&dis=$row[district]&sta=$row[state]&des=$row[description]'&cost=$row[costPerhour]' id='update'>update</a>
      <a href='deleteground.php?rn=$row[groundID]'id='del'>Delete</a></a>
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