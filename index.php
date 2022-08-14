<?php
    require_once("front-end.php");
?> 

<html>

    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="img/batsli_square.png">
        <title> /home </title>
    </head>

    <style>

        ::selection {
            background-color: #0078D7;
            color: white;
        }

        body {
            background-image: url("img/index_temp.png");
            background-repeat: no-repeat;
            background-size: cover;
            aspect-ratio: 960/300;
            width: 100%;
            
        }

        .index-img {
            width: 80px;
        }

        .index-table {
            padding-top: 150px;
        }

        .index-table td {
            padding: 20px;
        }

        .navbar-div {
            background-color: transparent;
        }

        .navbar-td-spacer {
            background-color: #E0E0E0;
        }

        .navbar-td-darkmode {
            visibility: hidden;
        }

        .navbar-td a:hover {
            color: white;
            transition: 0;
        }
    </style>

    
    <?php drawNavbar(); ?>
    <div style="width: 100%; height: 85%">

        <center>
            <div style="padding-top: 100px;">
                <a class="lowkey-title boldfont" style="color: white; font-size: 1000%;"> bats</a> <br>
                <a class="lowkey-title boldfont" style="color: white; font-size: 180%;"> Developer :D</a> <br>

                <table class="index-table">
                    <tr>
                        <td>
                            <a href="https://github.com/batscs"> <img class="index-img" src="img/github_white.png"> </a>
                        </td>

                        <td>
                            <a href="https://discord.com/users/170264645397905408"> <img class="index-img" src="img/discord_white.png"> </a>
                        </td>
                        
                    </tr>
                </table>
            </div>
        </center>

        
    </div>

</html>