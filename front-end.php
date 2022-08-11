<?php

    function drawNavbar() {
        ?>
            <div class="navbar-div" style="">
                <center> <table style="float: center">
                    <tr>
                        <td onclick="toggleDarkMode()" class="navbar-td-darkmode navbar-td"> <img src="img/dark_mode_switch.png" style="width: 40px"> </td>
                        <td class="navbar-td"> <a class="boldfont" href="../home">home</a> </td>
                        <td class="navbar-td"> <a class="boldfont" href="work">work</a> </td>
                        <td class="navbar-td-spacer-before navbar-td"> <a class="boldfont" href="about">about</a> </td>
                        <td> <div class="navbar-td-spacer"> </div> </td>
                        <td class="navbar-td-spacer-after navbar-td"> <a class="boldfont" href="login">login</a> </td>
                        <td class="navbar-td"> <a class="boldfont" href="upload">upload</a> </td>
                        <div class="dark-mode"> </div>
                    </tr>
                </table> </center>
            </div>

            <script>

                // default Theme wird gesetzt beim ersten Besuch der Website
                if (localStorage.getItem("theme") == null) {
                    localStorage.setItem("theme", "dark");
                }
                

                let savedTheme = localStorage.getItem("theme");

                if (savedTheme == "dark") {
                    document.body.classList.add("dark-mode");
                } else {
                    document.body.classList.remove("dark-mode")
                }

                function toggleDarkMode() {
                    document.body.classList.toggle("dark-mode");

                    if (document.body.classList.contains("dark-mode")) {
                        // dark mode on
                        localStorage.setItem("theme", "dark");
                    } else {
                        // dark mode off
                        localStorage.setItem("theme", "light");
                    }
                }

            </script>
        <?php
    }

    function drawFooter() {
        ?>
            <center class="footer-bg">
                <footer style="float: bottom; width: 500px; height: 100px; padding-top: 50px">
                    <p style="font-size: 22px"> designed and built by <a class="boldfont"> bats </a> </p>
                    <p style="font-size: 20px"> contact<a class="boldfont">@bats.li</a> </p>
                </footer>
            </center>
        <?php
    }

    function customText($text, $type) {

        $output = "";

        if ($type == "pageHeader") {
            $output = "<div class='pageHeaderSlash pageHeader boldfont'>/</div>" . "<div class='pageHeaderPrefix pageHeader boldfont'>home</div>" . "<div class='pageHeaderSlash pageHeader boldfont'>/</div>" . "<div class='pageHeader boldfont'>" .  $text . "</div>";
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

    function drawCard($card = "Example", $thisCategory, $setCategory, $date, $desc = "", $website = "https://steambats.itch.io/Typing-Hell", $github = "-1", $imgurl = "typing-hell.jpg") {

        if ($thisCategory != $setCategory && $setCategory != "all") {
            return;
        }
        ?>
            <div class="main"> 
                <div class="img" onclick="cardClick('<?php echo $website; ?>')" style="width: 350px; height: 219px; background-image: url('img/projects/<?php echo $imgurl;?>'); background-size: 100% 100%;"> </div>

                <div class="main-text" style="display: inline-block; text-align: left; padding: 10px; padding-top: 15px; height: 130px"> 
                    
                    <?php if ($github != "-1") {
                        ?>
                            <div class="img" onclick="cardClick('<?php echo $github; ?>')" style="display: inline-block; margin-top: 0px; margin-right: 5px; width: 18px; height: 18px; background-image: url('img/github.png'); background-size: 100% 100%;"> 

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