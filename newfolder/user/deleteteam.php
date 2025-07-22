<?php
include ("connect.php");
// error_reporting(0);

$rn =$_GET['rn'];
$query="DELETE FROM teams where teamId='$rn'";
$data=mysqli_query($con,$query);

if($data){
    echo " <script> alert ('record deleted')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/pc/viewteam.php">
     <?php
}
else{
    echo "record is not deleted";
}
?>