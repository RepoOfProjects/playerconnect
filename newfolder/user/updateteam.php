 <?php
include 'connectplayer\connectplayer\header.html';
  ?>
<?php
include "connect.php";
// error_reporting(0);
$id = $_GET['id'];
$name = $_GET['name'];
$game = $_GET['game'];
$groundname = $_GET['groundname'];
$playerteam = $_GET['playerTeam'];
$des = $_GET['des'];
?>
<html>
<head> 
    <title>update team</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h1{
              text-align: center;
              font-size:48px;  
        }
        body{
                background-image: url("images/ground.jpeg");
                background-repeat: no-repeat;
                background-size: cover;
                color: white;
        }
        div.backbox{
                width: 630px;
                height: 360px;
                margin: 140px 500px;
                background-color:rgba(0,0,0, 0.3); ;
                border-radius: 25px;

        }
        #CreateTeam{
                display: flex;
                /* justify-content: center; */
                /* align-items: center; */
                background-color: #B400DF;
                border: none;
                color: white;
                padding: 3px 6px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 28px;
                margin: 4px 2px;
                border-radius: 50px;
                 
        }
        #CreateTeam:hover{
                background-color:aquamarine; 
        }
        label{
                font-size:36px
        }
        .inputbox{
                border-radius: 25px;
                border: 2px solid #73AD21;
                padding: 15px; 
                width: 300px;
                height: 8px;  

        }

        </style>
</head>
<body>
<div class="backbox">
<h1>Create Team</h1>
<form action="createTeam.php" method="POST"    >
<table>     
       <tr>
       <td>
        <label> Team Name:</label></td>
        <td>
        <input class="inputbox" type="text" name="teamName" value="<?php echo "$name" ?>"><br></td></tr> 
   <tr><td> 
        <label> game:</label></td>
        <td>
        <input class="inputbox" type="text" name="game" value="<?php echo "$game" ?>"><br></td></tr> 
   <tr><td> 
        <label> groundName: </label></td>
        <td>
        <input class="inputbox" type="text" name="groundName" value="<?php echo "$groundname" ?>"><br></td></tr> 
   <tr><td>
        <label>select team members: </label></td>
        <td>
        <input class="inputbox" type="text" name="playersinteam" value="<?php echo "$playerteam" ?>"><br></td></tr> 
   <tr><td>
        <label> description: </label></td>
        <td>
        <input class="inputbox" type="text" name="description" value="<?php echo "$des" ?>"><br></td></tr> 
        </table>
        <input id="CreateTeam" type="submit" value="Create Team" name="team_submit" ><br>
        </form>
    </div>
</body>
</html>
<?php 
  if($_GET['team_submit'])
  {
  $id = $_GET['id'];
   $teamName = $_POST['teamName'];
   $gameName = $_POST['game'];
   $groundName = $_POST['groundName'];
   $players = $_POST['playersTeam'];
   $description = $_POST['des'];
  $query ="update teams set teamName='$teamName', game='$gameName', groundname='$groundName', playerINteam='$players',description='$description' where teamId = '$id' ";
  
  $data = mysqli_query($con,$query);
  if($data){
    echo "<script> alert ('record updated')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/pc/updateteam.php">
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