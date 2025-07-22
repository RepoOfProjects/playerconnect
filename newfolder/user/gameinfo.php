<?php
include 'connectplayer\connectplayer\header.html';
  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Buttons</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
           font-size:14px
        }

        .container {
           
                margin: 90px 30px;
                background-color:rgba(0,0,0, 0.3);
                border-radius: 25px;
                padding: 10px;
                padding-top: 10px;
        }

        .sports-buttons {
            display:list-item;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
        }

        .sports-button {
            display: block;
            width: 100%;
            height: 120px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            color: white;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            line-height: 120px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin: 5px 0px;
            background-color:rgba(0,0,0, 0.3);
        }

        .cricket {
            background-color: #30475e;

        }
        .football {
            background-color: #30475e;

        }

        .basketball {
            background-color: #30475e;
        }

        .hockey {
            background-color: #30475e;
        }

        .lawntennis {
            background-color: #30475e;
        }

        .sports-button:hover {
            background-color: rgba(84, 141, 247, 0.7);
        }
    </style>
</head>
<body>
    <div class="container">
        <ul class="sports-buttons">
            <li>
                <a href="info/cricket.php" class="sports-button cricket">
                    Cricket
                </a>
            </li>
            <li>
                <a href="info/football.php" class="sports-button football">
                    Football
                </a>
            </li>
            <li>
                <a href="info/Basketball.php" class="sports-button basketball">
                    Basketball
                </a>
            </li>
            <li>
            <li>
                <a href="info/Hockey.php" class="sports-button hockey">
                    Hockey
                </a>
            <li>
                <a href="info/lawntennis.php" class="sports-button lawntennis">
                    Lawn Tennis
                </a>
            </li>
        </ul>
    </div>
</body>
</html>
<?php 
  include 'connectplayer\connectplayer\footer.html';
  ?>