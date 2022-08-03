<?php
    require_once("front-end.php");
?> 

<html>

    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="img/batsli_square.png">
    </head>

    

    <div style="width: 100%; height: 100%">
        <?php drawNavbar(); ?>

        <center>
            <div style="padding-top: 50px; padding-bottom: 20px">
                <a class="boldfont" style="color: #A6B8C8; font-size: 500%;"> About Me</a>
            </div>

            <div style="width: 900px;">

                <div style="text-align: left" class="achievements-container">
                    <a class="boldfont" style="font-size: 200%; color: #202020"> Achievements Timeline</a>
                    <div class="achievements-list">
                        
                        <?php drawAchievement("Bachelor of Computer Science", "fh_wedel.png", "Fachhochschule Wedel", "monochrome_education.png", "Education", " - ", "IN PROGRESS"); ?>

                        <?php drawAchievement("Valorant Immortal", "valorant.png", "Margarethe-Rothe-Gymnasium", "monochrome_esports.png", "eSports", " - ", "July 2022"); ?>
                        <?php drawAchievement("High-School Diploma", "mrg.png", "Margarethe-Rothe-Gymnasium", "monochrome_education.png", "Education", " - ", "July 2022"); ?>
                        <?php drawAchievement("LuciferLeague Charity Cup 2 - 2nd Place", "csgo.png", "Counter-Strike: Global Offensive", "monochrome_esports.png", "eSports", "1000 €", "July 2021"); ?>
                        <?php drawAchievement("99Damage League Division 3", "csgo.png", "99Damage League", "monochrome_esports.png", "eSports", " - ", "August 2021"); ?>
                        <?php drawAchievement("Faceit Level 10 (~2500 Elo Peak)", "csgo.png", "Faceit", "monochrome_esports.png", "eSports", " - ", "May 2021"); ?>
                        <?php drawAchievement("HardwareLounge Cup 2021 - 1st Place", "csgo.png", "Counter-Strike: Global Offensive", "monochrome_esports.png", "eSports", "1000 €", "March 2021"); ?>
                        
                    </div>
                </div>
            </div>

            
        </center>

    </div>

</html>