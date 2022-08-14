<?php
    require_once("front-end.php");
?> 

<html>

    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="img/batsli_square.png">
        <title> /home </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            visibility: hidden;
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

        .index-title {
            color: white; 
            font-size: 10em;
        }

        .index-subtitle {
            color: white; 
            font-size: 180%;
        }

        @media only screen and (max-device-width: 480px) {
            .index-title {
                font-size: 5em;
            } 

            .index-subtitle {
                font-size: 100%;
            }

            .index-img {
                width: 50px;
            }

            .navbar-div {
                visibility: hidden;
            }
        }

    </style>

    
    <?php drawNavbar(); ?>
    <div style="width: 100%; height: 85%">

        <center>
            <div style="padding-top: 100px;">
                <a class="index-title lowkey-title boldfont"> bats</a> <br>
                <a class="index-subtitle lowkey-title boldfont"> Developer</a> <br>

                <table class="index-table">
                    <tr>
                        <td>
                            <a href="https://github.com/batscs"> <img class="index-img" src="img/index_github.png"> </a>
                        </td>

                        <td>
                            <a href="https://discord.com/users/170264645397905408"> <img class="index-img" src="img/index_discord.png"> </a>
                        </td>

                        <td>
                            <a href="work"> <img class="index-img" src="img/index_info.png"> </a>
                        </td>
                        
                    </tr>
                </table>
            </div>
        </center>

        
    </div>

</html>