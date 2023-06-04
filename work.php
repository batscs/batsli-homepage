<?php
    require_once("front-end.php");
?> 

<html>

    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="img/batsli_square.png">
        <title> /home/work </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    

    <div style="width: 100%;">
        <?php drawNavbar(); ?>

        <center>
            <div style="padding-top: 30px">
                <?php echo customText("I build & design stuff!", "pageHeader"); ?>
            </div>

            <?php
                $filter = "favorites";
                if (isset($_GET["f"])) {
                    $filter = $_GET["f"];
                }
            ?>

            <script>
                function projectPageSetFilter(filter) {
                    window.open("work?f=" + filter,"_self")
                }
            </script>

            <div class="project-filter">
                <ul class="filter-container">
                    <div onclick="projectPageSetFilter('favorites');" class="<?php if ($filter == 'favorites') { echo 'filter-highlight'; }?> filter-btn filter-start"><li>★</li></div>
                    <!-- <div onclick="projectPageSetFilter('all');" class="<?php if ($filter == 'all') { echo 'filter-highlight'; }?> filter-btn filter-middle"><li>All</li></div> -->
                    <div onclick="projectPageSetFilter('webdev');" class="<?php if ($filter == 'webdev') { echo 'filter-highlight'; }?> filter-btn filter-middle"><li>Webdesign</li></div>
                    <div onclick="projectPageSetFilter('software');" class="<?php if ($filter == 'software') { echo 'filter-highlight'; }?> filter-btn filter-middle"><li>Software</li></div>
                    <div onclick="projectPageSetFilter('other');" class="<?php if ($filter == 'other') { echo 'filter-highlight'; }?> filter-btn filter-end"><li>Other</li></div>
                </ul>
            </div>

            <div class="flex-container" style="max-width: 1200px; margin-top: 10px; margin-bottom: 70px;">

                <?php drawCard("JFX Maze Gen", ["java"], ["favorites", "software"], $filter, "March 2023",  "A JavaFX Visual Demonstration for different maze generation algorithms and how they build the maze", "https://github.com/batscs/JFX-Maze-Generation/releases/", "https://github.com/batscs/JFX-Maze-Generation", "jfx-maze-gen.png")?>

                <?php drawCard("Homepage", ["html", "css", "php"], ["webdev"], $filter, "Jul 2022 - Aug 2022",  "The website you are currently visiting with the purpose to have a landing page for my website and show off my work", "https://bats.li/home", "https://github.com/batscs/batsli-homepage", "bats-home.png")?>
                <?php drawCard("MRG-Tests", ["php", "javascript", "mysql"], ["favorites", "webdev"], $filter, "Feb 2022 - Jun 2022",  "A school project made for verifying if a student has a valid test result by the teacher by scanning a QR-Code", "https://mrg.bats.li", "https://github.com/batscs/MRG-Tests", "mrg_tests.png")?>
                <?php drawCard("py_bounty", ["python"], ["favorites", "software"], $filter, "Jan 2022",  "A Python made gambling simulation capable of playing roulette and blackjack with virtual money as a demonstration", "https://github.com/batscs/py_bounty", "https://github.com/batscs/py_bounty/releases", "py_bounty.png")?>
                
                <?php drawCard("Halbgeist", ["html", "css", "php"], ["webdev"], $filter,  "Jul 2021 - Aug 2021",  "Concept website for a cloud server providing service, specialized for gaming servers such as Minecraft, Terraria, etc.", "https://halbgeist.bats.li", "https://github.com/batscs/halbgeist-hosting", "halbgeist.png")?>
                <?php drawCard("Nichio Website", ["html", "css", "php", "mysql"], ["webdev"], $filter,  "Nov 2021",  "Nichio.de - A solution for the Nichio Keybinder to backup, store and sync user information on a webserver", "https://nichio.de", "https://github.com/batscs/Nichio-Keybinder-for-GTA-SAMP", "nichio_web.png")?>
                <?php drawCard("BNCE", ["php"], ["other"], $filter,  "Jul 2021 - Nov 2021",  "Bats' Needlessly Complicated Encryption (BNCE) securely encrypts your input and hides it behind a series of words", "https://bats.li/bnce", "https://github.com/batscs/Bats-Needlessly-Complicated-Encryption", "bnce_new.png")?>
                <?php drawCard("Dashboard", ["html", "css", "php", "mysql"], ["webdev"], $filter,  "Feb 2021 - Apr 2021", "A simple website for storing End-To-End Encrypted Information", "https://bats.li/home/login", "https://github.com/batscs/batsli-encrypted-storage-website", "bats-dashboard.png")?>

                <?php drawCard("Easy Math", ["java"], ["software"], $filter,  "Nov 2020",  "A Java program aimed for kids for them to solve basic mathmatical tasks and get results on how well they did", "https://steambats.itch.io/easy-math", "https://github.com/batscs/Easy-Math", "easy-math.png")?>
                <?php drawCard("Easy Terminal", ["java"], ["software"], $filter,  "Oct 2020",  "Simplify your worktime by having Easy-Terminal automate predefined actions for you and let you do a lot of stuff", "https://steambats.itch.io/easy-terminal", "https://github.com/batscs/Easy-Terminal", "easy-terminal.png")?>
                
                <?php drawCard("maxohno.de", ["html", "css", "php"], ["webdev"], $filter,  "Oct 2020 - Nov 2020",  "Website for the Typing Hell Java game with a leaderboard integration to compare your stats with others", "https://maxohno.de/typing/leaderboard.php", "https://github.com/batscs/maxohno.de", "maxohno-de.png")?>
                <?php drawCard("Typing Hell", ["java", "mysql"], ["software"], $filter,  "Oct 2020 - Nov 2020",  "Type Racer Game inspired by Tetris made in Java with online cloud syncing and more!", "https://steambats.itch.io/Typing-Hell", "https://github.com/batscs/Typing-Hell", "typing-hell.png")?>

                <?php drawCard("Nichio KB", ["autohotkey"], ["software"], $filter,  "Sep 2019 - Oct 2021",  "Nichio Keybinder - A custom made AHK (AutoHotKey) Keybinder for the GTA: SAMP Project \"LiveYourDream-Roleplay\"", "https://nichio.de", "https://github.com/batscs/Nichio-Keybinder-for-GTA-SAMP", "nichio_kb.png")?>

                <?php drawCard("Fireman", ["java"], ["software"], $filter,  "Sep 2017 - Oct 2017",  "My first Java Game, don't expect too much, or anything at all, has 3 levels and very basic controls + ingame shop", "https://github.com/batscs/Fireman", "https://github.com/batscs/Fireman", "fireman.png")?>

                <?php drawCard("Minecraft Plugins", ["java"], ["software"], $filter,  "Nov 2016",  "My first public projects made in Java, those are plugins for the popular video game Minecraft built on top of Spigot", "https://www.spigotmc.org/resources/systematic.31866/", "-1", "spigotplugins.png")?>

            </div> 
        </center>

        <?php echo drawFooter(); ?>

    </div>

</html>