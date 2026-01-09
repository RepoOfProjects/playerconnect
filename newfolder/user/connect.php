<?php

$con = mysqli_connect('localhost:3306','','','pc');
if(!$con)
 die( "not connected to database".mysqli_connect_error());
else
 echo "<script> console.log('connected to databasae');</script>";
?>