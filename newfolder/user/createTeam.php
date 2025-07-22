<?php
include 'connectplayer\connectplayer\header.html';
  ?>

<?php
// include 'connect.php';
// error_reporting(0);

if(isset($_POST['team_submit'])){
        $teamName = $_POST['teamName'];
        $gameName = $_POST['game'];
        $groundName = $_POST['groundName'];
        $players = $_POST['playersinteam'];
        $description = $_POST['description'];
        $con = mysqli_connect('localhost','','','pc');
        if(!$con)
        die( "not connected to database".mysqli_connect_error());
        else{
                echo "<script>console.log('connected to database');</script>";
                $sql = "insert into teams(teamName,game,groundname,playerINteam,description) 
                values('$teamName' ,'$gameName' ,'$groundName' ,'$players' ,'$description');";
                $result = mysqli_query($con,$sql);
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<style>
        h1{
              text-align: center;
              font-size:48px;  
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
<div class="main">

<div class="backbox">
<h1>Create Team</h1>
<form action="createTeam.php" method="POST"    >
<table>     
       <tr>
       <td>
        <label> Team Name:</label></td>
        <td>
        <input class="inputbox" type="text" name="teamName"><br></td></tr> 
   <tr><td> 
        <label> Game:</label></td>
        <td>
        <input class="inputbox" type="text" name="game"><br></td></tr> 
   <tr><td> 
        <label> GroundName: </label></td>
        <td>
        <input class="inputbox" type="text" name="groundName"><br></td></tr> 
   <tr><td>
        <label>Select Team Members: </label></td>
        <td>
        <input class="inputbox" type="text" name="playersinteam"><br></td></tr> 
   <tr><td>
        <label> Description: </label></td>
        <td>
        <input class="inputbox" type="text" name="description"><br></td></tr> 
        </table>
        <input id="CreateTeam" type="submit" value="Create Team" name="team_submit"><br>
        </form>
    </div>
</div>

<?php 
  include 'connectplayer\connectplayer\footer.html';
  ?>
</body>
</html>