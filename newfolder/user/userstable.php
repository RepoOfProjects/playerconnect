<?php
include 'connectplayer\connectplayer\header.html';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<h1> user list </h1>
<br>
<table class="table">
  <tr>
    <th>ID </th>
    <th>email </th>
    <th>password</th>
</tr>
<tbody>
<?php
include "connect.php";
$sql = "select * from users";
$result = $con->query($sql);
if(!$result){
  die("invalid query: ". $con->error);
}
while($row = $result->fetch_assoc()){
echo "
<tr>
      <td>" . $row["id"] ."</td>
      <td>" . $row["email"] ."</td>
      <td>" . $row["password"] ."</td>
      <td><a href='update.php?rn=$row[id]&fn=$row[email]&ps=$row[password]'>update</a>
      <a href='delete.php?rn=$row[id]'>Delete</a></a>
    </td>
</tr>";
}
?>
</tbody>
</table>
</body>
</html>
<?php   include 'connectplayer\connectplayer\footer.html'; ?> 