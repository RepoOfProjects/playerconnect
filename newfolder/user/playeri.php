<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
<td> 
    <img src='".$row['playerphoto']."' height ='50' width = '100'> </td>  
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

</table>
</body>
</html>