<?php
    require_once("front-end.php");
?> 

<html>

    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="img/batsli_square.png">
        <title> /home/about </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    

    <div style="height: 100%">
        <?php drawNavbar(); ?>

        <center>

            <div style="max-width: 700px">

                <div style="padding-top: 30px; padding-bottom: 20px">
                    <?php echo customText("Who is this bats?", "pageHeader"); ?>
                </div>

                <section class="aboutSection">
                    <p class="aboutTitle"> About me </p>
                    <p class="aboutParagraph"> Quis ex pariatur tempor aliqua commodo dolor irure in cupidatat sit dolore aliqua. Aliquip nisi duis veniam laboris officia veniam fugiat. Ea aliqua eiusmod ad qui mollit minim sunt pariatur do voluptate. Quis id proident in eu adipisicing eu nisi. Do nulla officia exercitation aliqua. Quis aliqua ut amet velit pariatur labore et amet commodo. </p>
                </section>

                <section class="aboutSection">
                <p class="aboutTitle"> Education </p>
                <p class="aboutParagraph"> Ex ullamco do sunt consectetur aliqua sint amet cupidatat in officia eu ea quis commodo. Officia mollit consectetur deserunt nulla pariatur ut mollit ipsum irure adipisicing amet qui mollit adipisicing. Incididunt qui irure labore qui minim sint excepteur pariatur. Irure minim deserunt adipisicing deserunt sunt excepteur dolor. Dolor in nulla dolor ullamco laboris elit cupidatat sint mollit. Ea ea anim Lorem anim et cillum voluptate voluptate irure qui fugiat labore anim. </p> 
                </section>

                <section class="aboutSection">
                <p class="aboutTitle"> Experience </p>
                <p class="aboutParagraph"> Commodo qui eu irure irure. Tempor ea in ad occaecat minim in aliquip reprehenderit exercitation laborum. Nisi cillum eiusmod commodo et dolore. Proident ipsum velit officia fugiat ipsum eu laboris mollit exercitation laboris consequat. Proident consequat dolor deserunt Lorem irure sint adipisicing est. </p> 
                </section>

                <section class="aboutSection">
                <p class="aboutTitle"> eSports </p>
                <p class="aboutParagraph"> Tempor qui in anim eiusmod Lorem nostrud deserunt occaecat ullamco nostrud elit et culpa. Ex reprehenderit nisi esse magna commodo. Aute dolore ipsum esse sint deserunt qui eu consequat laboris duis tempor enim laboris. Enim culpa non officia officia est ut minim fugiat reprehenderit elit ipsum do veniam ipsum. Consectetur eiusmod sunt deserunt tempor. Duis nostrud ad tempor esse irure culpa est cupidatat eiusmod cupidatat proident minim. Laboris voluptate qui duis veniam non fugiat ea esse exercitation occaecat. </p>
                </section>

                <section class="aboutSection">
                <p class="aboutTitle"> Contact </p>
                <p class="aboutParagraph"> Dolore culpa officia nostrud Lorem fugiat non magna. Labore voluptate consequat sint consectetur. Labore deserunt aliquip commodo incididunt veniam incididunt anim et elit non consequat. Ea laborum sunt et sint elit in. Eiusmod non id sint nulla cillum enim. Magna anim magna eu adipisicing eu est sunt. Sunt laboris laborum dolore aliqua excepteur. </p>
                </section>

                <a style="font-size: 40px"> coming soon™ </a>

                <!-- <div style="width: 900px; padding-bottom: 100px">

                    
                    <div style="text-align: left" class="achievements-container">
                        <a class="boldfont small-title"> Timeline of Achievements</a>
                        <div class="achievements-list">
                            
                            <?php drawAchievement("Bachelor of Computer Science", "fh_wedel.png", "Fachhochschule Wedel", "monochrome_education.png", "Education", " - ", "IN PROGRESS"); ?>

                            <?php drawAchievement("Valorant Immortal", "valorant.png", "Immortal Rank", "monochrome_esports.png", "eSports", " - ", "August 2022"); ?>
                            <?php drawAchievement("High-School Diploma", "mrg.png", "Margarethe-Rothe-Gymnasium", "monochrome_education.png", "Education", " - ", "July 2022"); ?>
                            <?php drawAchievement("LuciferLeague Charity Cup 2 - 2nd Place", "csgo.png", "Counter-Strike: Global Offensive", "monochrome_esports.png", "eSports", "1000 €", "July 2021"); ?>
                            <?php drawAchievement("99Damage League Division 3", "csgo.png", "99Damage League", "monochrome_esports.png", "eSports", " - ", "August 2021"); ?>
                            <?php drawAchievement("Faceit Level 10 (~2500 Elo Peak)", "csgo.png", "Faceit", "monochrome_esports.png", "eSports", " - ", "May 2021"); ?>
                            <?php drawAchievement("HardwareLounge Cup 2021 - 1st Place", "csgo.png", "Counter-Strike: Global Offensive", "monochrome_esports.png", "eSports", "1000 €", "March 2021"); ?>
                            
                        </div>
                    </div>
                    
                </div> -->

            </div>
            
        </center>

        <?php echo drawFooter(); ?>

    </div>

</html>