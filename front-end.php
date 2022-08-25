<?php

    function drawNavbar() {
        ?>
            <div class="navbar-div" style="">
                <center> <table style="float: center">
                    <tr>
                        <td onclick="toggleDarkMode()" class="navbar-td-darkmode navbar-td"> <img id="dark-mode-img" src="img/dark_mode_on.png"> </td>
                        <td class="navbar-td"> <a class="boldfont" href="../home">Home</a> </td>
                        <td class="navbar-td"> <a class="boldfont" href="work">Work</a> </td>
                        <td class="navbar-td"> <a class="boldfont" href="about">About</a> </td>
                        <td class="navbar-td-spacer-before navbar-td"> <a class="boldfont" href="about#contact"> Contact </a> </td>
                        <td> <div class="desktop navbar-td-spacer"> </div> </td>
                        <td style="width: max-content" class="mobile navbar-td"> <a class="boldfont" href="#otherLinks"> ></a> </td>
                        <td class="navbar-td-spacer-after navbar-td"> <a class="boldfont" href="login">Login</a> </td>
                        <td id="otherLinks" class="navbar-td"> <a class="boldfont" href="upload">Upload</a> </td>
                        <div class="dark-mode"> </div>
                    </tr>
                </table> </center>
            </div>

            <script>

                // default Theme wird gesetzt beim ersten Besuch der Website
                if (localStorage.getItem("theme") == null) {
                    localStorage.setItem("theme", "light");
                }

                let savedTheme = localStorage.getItem("theme");
                var img = document.getElementById("dark-mode-img");

                img.src = "img/theme_" + savedTheme + ".png";

                if (savedTheme == "dark") {
                    document.body.classList.add("dark-mode");
                } else {
                    document.body.classList.remove("dark-mode")
                }

                function toggleDarkMode() {
                    document.body.classList.toggle("dark-mode");

                    if (document.body.classList.contains("dark-mode")) {
                        // dark mode on
                        var newTheme = "dark";
                        localStorage.setItem("theme", newTheme);
                        img.src = "img/theme_" + newTheme + ".png";
                    } else {
                        // dark mode off
                        var newTheme = "light";
                        localStorage.setItem("theme", newTheme);
                        img.src = "img/theme_" + newTheme + ".png";
                    }
                }

            </script>
        <?php
    }

    function drawFooter() {
        ?>
            <center class="footer-bg">
                <footer class="footer-container" style="">
                    <p style="font-size: 22px"> designed and built by <a class="boldfont"> bats </a> </p>
                    <p style="font-size: 20px"> contact@<a class="boldfont">bats.li</a> </p>
                </footer>
            </center>
        <?php
    }

    function customText($text, $type) {

        $output = "";

        if ($type == "pageHeader") {
            $output = "<div class='pageHeaderSlash pageHeader boldfont'>/</div>" . "<div class='pageHeaderPrefix pageHeader boldfont'>home</div>" . "<div class='pageHeaderSlash pageHeader boldfont'>/</div>" . "<div class='pageHeader boldfont'>" .  $text . "</div>";
            $output = "<div class='pageHeader boldfont'>" .  $text . "</div>";
        }

        return $output;
    }

    function drawAchievement($title, $logo_img, $logo_desc, $category_img, $category_desc, $prize, $date) {
        ?>
            <div class="achievement-card">
                <table style="font-size: 22px" cellspacing="0">
                    <tr>

                        <td style="padding-left: 20px; padding-bottom: 15px; padding-top: 15px">
                            <img title="<?php echo $category_desc; ?>" src="img/achievements/<?php echo $category_img;?>" width="50px"> </img>
                        </td>

                        <th style="padding-left: 20px; padding-bottom: 15px; padding-top: 15px">
                            <img title="<?php echo $logo_desc; ?>" src="img/achievements/<?php echo $logo_img;?>" width="50px"> </img>
                        </th>
                        
                        <td style="width: 500px">
                            <?php echo $title; ?>
                        </td>

                        <th style="font-weight: normal; padding: 20px">
                            <?php echo $date; ?>
                        </th>
                    <tr>
                </table>
            </div>
        <?php
    }

    function drawCard($card = "Example", $thisCategory, $selectedCategory, $date, $desc = "", $website = "https://steambats.itch.io/Typing-Hell", $github = "-1", $imgurl = "typing-hell.jpg") {

        
        if (!in_array($selectedCategory, $thisCategory)) {
            return;
        }

        ?>
            <div class="main"> 
                <a onclick="cardClick('<?php echo $website; ?>')" class="imgTXT"> ➜ </a>
                <div class="img" onclick="cardClick('<?php echo $website; ?>')" style="background-image: url('img/projects/<?php echo $imgurl;?>'); background-size: 100% 100%;"> </div>

                <div class="main-text" style=""> 
                    
                    <?php if ($github != "-1") {
                        ?>
                            <div class="img" onclick="cardClick('<?php echo $github; ?>')" style="display: inline-block; margin-top: 0px; margin-right: 5px; width: 16px; height: 16px; background-image: url('img/github.png'); background-size: 100% 100%;"> 

                            </div>
                        <?php
                        }
                    ?>
                    <a style="" class="boldfont cardTitle"> <?php echo $card ?> </a> 

                    <a style="" class="boldfont cardDate cardTitle"> <?php echo $date ?> </a> 
                    <br> <br>
                    <a style="" class="cardText"> <?php echo $desc ?> </a>
                </div>

            </div>
        <?php
    }
?>

<script>
    function cardClick(website) {
        open(website);
    }
</script>