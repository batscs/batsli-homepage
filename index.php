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
            text-decoration: none;
        }

        .subTitleIMG {
            padding-top: 7px;
            height: 30px;
            padding-left: 20px;
        }

        .index-href-button {
            cursor: pointer;
            font-weight: bold;

            padding: 10px;
            border: 4px solid white;
            border-radius: 8px;

            background-color: rgba(255,255,255, 1);
            font-weight: bold;
            color: black;

            text-decoration: none;
        }

        .index-href-button-container {
            padding-top: 60px;
        }

        .index-flex-links {
            margin-top: 120px;

            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;

            width: 100%;
            max-width: 340px;
        }

        #siteContainer {
            
        }

        #centeredSiteContainer {
            padding-top: 100px;
            
        }

        @media only screen and (max-device-width: 480px) {
            .index-title {
                font-size: 30vw;
            } 

            .index-subtitle {
                font-size: 5vw;
                padding-left: 5vw;
           }

           .subTitleIMG {
                padding-top: 3px;
                height: 24px;
                padding-left: 20px;
            }

            .index-img {
                width: 50px;
                padding: 10px;
            }

            .index-flex-links {
                flex-direction: column;    
                justify-content: center;
                margin-top: 70px;            

            }

            .index-flex-links a {
                margin-bottom: 40px;
            }

            .index-href-button-container {
                padding-top: 50px;
            }

            #siteContainer {
                margin: 0 auto;
            }

            #centeredSiteContainer {
                padding-top: 50px;
                width: max-content;
                margin: 0 auto;
                text-align: center;
                
            }

            
        }

    </style>

    
    <div id="siteContainer" style=";">

        <center>
            <div id="centeredSiteContainer" style="">

                <a style="font-family: BostonBold" class="index-title lowkey-title boldfont"> bats</a> <br>

                <div style="display: flex; width: max-content"> 
                    
                    <a href="about" class="index-subtitle lowkey-title boldfont" style="cursor: pointer"> Developer </a> 

                </div>

                <div class="index-flex-links">
                    <a href="work"> <img class="index-img" src="img/index_info.png"> </a>
                    <a href="https://github.com/batscs"> <img class="index-img" src="img/index_github.png"> </a>
                    <a href="https://discord.com/users/170264645397905408"> <img class="index-img" src="img/index_discord.png"> </a>
                </div>

            </div>
        </center>

        
    </div>

</html>