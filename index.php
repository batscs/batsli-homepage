<?php
    require_once("front-end.php");
?> 

<html>

    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="img/batsli_square.png">
        <title> /home </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="bats.li" property="og:title" />
        <meta content="Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua." property="og:description" />
        <meta content="https://bats.li/home" property="og:url" />
        <meta content="https://bats.li/home/img/index_thumbnail.png" property="og:image" />
        <meta content="#515369" data-react-helmet="true" name="theme-color" />
        <meta name="twitter:card" content="summary_large_image">
    </head>

    <style>

        ::selection {
            background-color: #0078D7;
            color: white;
        }

        body {
            /*
            background-image: url("img/index_temp.png");
            background-repeat: no-repeat;
            background-size: cover;
            */
            background-color: #F0F2F5;
            
            width: 100%;
            
            
        }

        .index-img {
            width: 2vw;
            margin-right: 1.5vw;
        }

        .index-title {
            color: #515369; 
            font-size: 7vw;
        }

        .index-subtitle {
            color: #797B8C; 
            font-size: 1.35vw;
            text-decoration: none;
        }

        .index-description {
            color: #797B8C;
            overflow-wrap: break-word;
            width: 20vw;
            max-width: 62vw;

            font-size: 1.1vw;

            margin-top: 1vw;
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
            margin-top: 4vw;

            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: left;

            width: 100%;
            max-width: 340px;
        }

        #siteContainer {
            padding-top: 3vw;
        }

        #centeredSiteContainer {
            padding-top: 1vw;
            padding-bottom: 12vw;

            padding-left: 4vw;
            padding-right: 4vw;

            background-color: white;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            border-radius: 7px;

            width: 20vw;

            max-height: 29vw;

            text-align: left;

        }

        .index-call2action {
            background-color: #515369;
            color: white;
            padding: 15px;
            border-radius: 7px;
            text-decoration: none;
            text-align: center;
            font-size: 1.2vw;

            margin-top: 3vw;

            transition: 0.2s;

            font-weight: bold;
        }

        .index-call2action:hover {
            transition: 0.2s;
            background-color: #2F314F;
        }

        .index-secondaryAction {
            background-color: #333333;
            color: white;
            margin-top: 2vw;
        }

        .index-secondaryAction:hover {
            background-color: #202020;
        }

        @media only screen and (max-device-width: 480px) {

            .index-title {
                font-size: 17vw;
            } 

            .index-subtitle {
                font-size: 5vw;
           }

           .index-description {
                font-size: 4vw;
                width: 63vw;
                margin-top: 4vw;
           }

           .index-call2action {
                font-size: 4vw;
                margin-top: 8vw;
           }

           .subTitleIMG {
                padding-top: 3px;
                height: 24px;
                padding-left: 20px;
            }

            .index-img {
                width: 35px;
                margin-right: 20px;
                margin-left: 3px;
            }

            .index-flex-links {
                flex-direction: row;    
                justify-content: left;
                margin-top: 35px;            

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


                margin: 0 auto;
                margin-top: 30px;

                width: 65vw;

                height: 70vh;
                max-height: 500px;
                
                padding: 50px;
                
            }

            
        }

    </style>

    
    <div id="siteContainer" style=";">

        <center>
            <div id="centeredSiteContainer" style="">

                <a style="font-family: BostonBold" class="index-title lowkey-title boldfont"> bats</a> <br>

                <div style="display: flex; width: max-content; flex-direction: column"> 
                    
                    <a href="about" class="index-subtitle lowkey-title boldfont" style="cursor: pointer"> Full Stack Developer </a> 

                    <a class="index-description"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren. </a>

                    <a href="work" class="index-call2action"> Check out my work </a>
                    <a href="about" class="index-secondaryAction index-call2action"> Learn more about me </a>

                </div>

                <div class="index-flex-links">
                    <a href="mailto:direct@bats.li"> <img class="index-img" src="img/index_email.png"> </a>
                    <a href="https://github.com/batscs"> <img class="index-img" src="img/index_github.png"> </a>
                    <a href="https://discord.com/users/170264645397905408"> <img class="index-img" src="img/index_discord.png"> </a>
                </div>

            </div>
        </center>

        
    </div>

</html>