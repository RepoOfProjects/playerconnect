<?php
include 'connectplayer\connectplayer\header.html';
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams listed</title>
    <link rel="stylesheet" href="style.css">

    <style>
        h1{
         text-align:center;
        }

      table, th, td {
                       border: 1px solid;
                       font-size:26px;
                      }
                    
      div.listeams{
               width: 1450px;
                height: 900px;
                margin: 40px 10px 90px 30px;
                background-color:rgba(0,0,0, 0.8); ;
                border-radius: 25px;
                font-size:26px;          
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

<div class="listeams">
<h1> view teams </h1>
<br>
<table class="table">
  <tr>
    <th> team name</th>
    <th> game name </th>
    <th> ground name</th>
    <th> players  </th>
    <th>description</th>
    <th>update / delete </th>
</tr>
<tbody>
<?php
include "connect.php";
$sql = "select * from teams";
// $result = mysqli_connect($con,$sql);
$result = $con->query($sql);
if(!$result){
  die("invalid query: ". $con->error);
}
while($row = $result->fetch_assoc()){
echo "
<tr>
      <td>" . $row["teamName"] ."</td>
      <td>" . $row["game"] ."</td>
      <td>" . $row["groundname"] ."</td>
      <td>" . $row["playerINteam"] ."</td>
      <td>" . $row["description"] ."</td>
      <td><a href='updateteam.php?id=$row[teamId]&name=$row[teamName]&game=$row[game]&groundname=$row[groundname]&playerTeam=$row[playerINteam]&des=$row[description]' id='update'>update</a>
      <a href='deleteteam.php?rn=$row[teamId]'id='del'>Delete</a></a>
      
    </td>
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