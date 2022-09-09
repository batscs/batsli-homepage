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

    

    <div style="min-height: 85%">
        <?php drawNavbar(); ?>

        <center>

            <div style="max-width: 800px; padding-top: 30px;">

                <section style="display: none" id="contact" class="aboutSection">
                    <p class="aboutTitle"> Contact Me!</p>
                        <form class="contactForm">
                            <p class="contactFormTitle-Name contactFormTitle"> Name </p> <p class="contactFormTitle-Email contactFormTitle"> Email </p> <br> <br>
                            <input class="contactFormName"> <input class="contactFormEmail"> <br>
                            <p class="contactFormTitle"> Subject </p> <br> 
                            <input class="contactFormSubject "> <br>
                            <p class="contactFormTitle"> Message </p> <br>
                            <textarea class="contactFormMessage"></textarea> <br>
                            <button class="button"> Send! </button>
                        </form>
                </section>

                <?php echo customText("About Me", "pageHeader"); ?>

                <div class="aboutWho">

                    <?php
                        $desc = "Nulla ea proident ea mollit do adipisicing incididunt proident deserunt. In ullamco minim minim eu officia irure eiusmod proident anim do qui minim incididunt esse.";
                        drawAboutWhoCard("General", $desc, "aboutWhoCard-long");
                        drawAboutWhoCard("Experience", $desc);
                        drawAboutWhoCard("eSports", $desc);
                    ?>

                </div>

                
                <?php echo customText("Connect with me", "pageHeader"); ?>
                <div style="" class="aboutLinkContainer">

                    <?php drawAboutLink("E-Mail", "email.png", "mailto://direct@bats.li"); ?>

                    <?php drawAboutLink("GitHub", "github.png", "https://github.com/batscs"); ?>

                    <?php drawAboutLink("Steam", "steam.png", "https://steamcommunity.com/id/batscs"); ?>

                    <?php drawAboutLink("Discord", "discord.png", "https://discord.com/users/170264645397905408"); ?>

                    <?php drawAboutLink("Faceit", "faceit.png", "https://www.faceit.com/en/players/bats"); ?>
                    
                    <?php drawAboutLink("Valorant", "valorant.png", "https://tracker.gg/valorant/profile/riot/bats%23csgo/overview"); ?>
                    
                    <?php // drawAboutLink("Valorant Immortal", "immortal.png", "https://steamcommunity.com/profiles/batscs"); ?>


                    <?php // drawAboutLink("Instagram", "instagram.png", "https://steamcommunity.com/profiles/batscs"); ?>

                    <?php // drawAboutLink("Twitter", "twitter.png", "https://steamcommunity.com/profiles/batscs"); ?>

                    <?php // drawAboutLink("YouTube", "youtube.png", "https://steamcommunity.com/profiles/batscs"); ?>

                    </div>
                </div>

                <!--
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
                -->


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