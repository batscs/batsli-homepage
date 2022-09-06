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
            background-color: #232530;
            
            width: 100%;
            
            
        }

        .index-img {
            width: 2vw;
            margin-right: 1.5vw;
            transition: 0.1s;
        }

        .index-img:hover {
            transform: scale(1.1);
            transition: 0.1s;
        }

        .index-title {
            color: #FFFFFF; 
            font-size: 7vw;
        }

        .index-subtitle {
            color: #FFFFFF; 
            font-size: 1.35vw;
            text-decoration: none;
        }

        .index-description {
            color: #FFFFFF;
            overflow-wrap: break-word;
            width: 20vw;
            

            font-size: 1.1vw;

            margin-top: 1vw;
        }

        .index-flex-links {
            margin-top: 2.3vw;

            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: left;

            width: 100%;
            max-width: 100%;
            
        }

        #siteContainer {
            padding-top: 3vw;
        }

        #centeredSiteContainer {
            padding-top: 1vw;
            padding-bottom: 12vw;

            padding-left: 4vw;
            padding-right: 4vw;

            background-color: #313242;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 8px 12px;

            border-radius: 7px;

            width: 20vw;

            max-height: 27vw;

            text-align: left;

        }

        .index-call2action {
            background-color: #6D59A9;
            color: white;
            padding: 1vw;
            border-radius: 7px;
            text-decoration: none;
            text-align: center;
            font-size: 1.2vw;

            margin-top: 3vw;

            transition: 0.1s;

        }

        .index-call2action:hover {
            transition: 0.1s;
            filter: saturate(3);
            transform: scale(1.02);
        }

        .index-secondaryAction {
            background-color: #555572;
            color: white;
            margin-top: 2vw;
        }

        


        @media only screen and (max-device-width: 480px) {

            .index-title {
                font-size: 17vw;
            } 

            .index-subtitle {
                font-size: 5vw;
           }

           .index-description {
                font-size: 4.3vw;
                width: 100%;
                margin-top: 4vw;

           }

           .index-call2action {
                font-size: 5vw;
                margin-top: 8vw;
                padding: 4.5vw;

                font-weight: bold;
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

                width: 73vw;

                height: 70vh;
                max-height: 500px;
                
                padding: 30px;
                
            }
            
        }

    </style>

    
    <div id="siteContainer" style=";">

        <center>
            <div id="centeredSiteContainer" style="">

                <a style="font-family: BostonBold" class="index-title lowkey-title boldfont"> bats</a> <br>

                <div style="display: flex; width: 100%; flex-direction: column"> 
                    
                    <a href="about" class="index-subtitle lowkey-title boldfont" style="cursor: pointer"> Computer Science Student </a> 

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