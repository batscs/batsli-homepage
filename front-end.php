<?php

    function drawNavbar() {
        ?>
            <div style="background-color: #161F28; width: 100%; height: 80px">
                <center> <table style="float: center">
                    <tr>
                        <td class="navbar-td"> <a class="boldfont" href="../home">home</a> </td>
                        <td class="navbar-td"> <a class="boldfont" href="work">work</a> </td>
                        <td class="navbar-td"> <a class="boldfont" href="about">about</a> </td>
                        <td class="navbar-td"> <a class="boldfont" href="login">login</a> </td>
                    </tr>
                </table> </center>
            </div>
        <?php
    }

    function drawFooter() {
        ?>
            <center style="background-color: #ECECF2">
                <footer style="float: bottom; width: 500px; height: 100px; padding-top: 50px">
                    <p style="color: #34342E; font-size: 22px"> designed and built by <a class="boldfont"> bats </a> </p>
                    <p style="color: #34342E; font-size: 20px"> contact<a class="boldfont">@bats.li</a> </p>
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
                    

                    <a style="" class="boldfont cardTitle"> <?php echo $card ?> </a> 
                    <?php if ($github != "-1") {
                        ?>
                            <div class="img" onclick="cardClick('<?php echo $github; ?>')" style="display: inline-block; margin-top: 0px; margin-left: 5px; width: 18px; height: 18px; background-image: url('img/github.png'); background-size: 100% 100%;"> 

                            </div>
                        <?php
                        }
                    ?>

                    <a style="float: right; color: black; font-size: 14px" class="boldfont cardTitle"> <?php echo $date ?> </a> 
                    <br> <br>
                    <a style="color: #7079A2" class="cardText"> <?php echo $desc ?> </a>
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