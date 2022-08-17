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
            width: 100%;
            
            
        }

        .index-img {
            width: 70px;
        }

        .index-title {
            color: white; 
            font-size: 10em;
        }

        .index-subtitle {
            color: white; 
            font-size: 180%;
        }

        .index-flex-links {
            margin-top: 120px;

            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;

            width: 100%;
            max-width: 300px;
        }

        @media only screen and (max-device-width: 480px) {
            .index-title {
                font-size: 30vw;
            } 

            .index-subtitle {
                font-size: 5vw;
           }

            .index-img {
                width: 60px;
            }

            .index-flex-links {
                flex-direction: column;    
                margin-top: 70px;            

            }

            .index-flex-links a {
                margin-bottom: 30px;
            }

            
        }

    </style>

    
    <div style="width: 100%; height: 85%">

        <center>
            <div style="padding-top: 100px;">
                <a class="index-title lowkey-title boldfont"> bats</a> <br>
                <a class="index-subtitle lowkey-title boldfont"> Developer</a> <br>

                <div class="index-flex-links">
                    <a href="/work"> <img class="index-img" src="img/index_info.png"> </a>
                    <a href="https://github.com/batscs"> <img class="index-img" src="img/index_github.png"> </a>
                    <a href="https://discord.com/users/170264645397905408"> <img class="index-img" src="img/index_discord.png"> </a>
                </div>

            </div>
        </center>

        
    </div>

</html>