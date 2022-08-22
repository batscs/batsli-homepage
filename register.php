<?php
    require_once("front-end.php");
    require_once("../mysql.php"); // notice, a mysql connection is required here
    require_once("functions.php");
?> 

<html>

    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="img/batsli_square.png">
        <title> /home/register </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    

    <div style="width: 100%; height: 100%">
        <?php drawNavbar(); ?>

        <center>
            <div style="padding-top: 30px">
                <?php echo customText("Register", "pageHeader"); ?>
            </div>
        </center>

        <center>
            <div style="padding-top: 0px; padding-bottom: 50px">
                <form method="post">

                    <div>
                        <p id="multiform-title" class="multiform-title"> Basic Information</p>
                    </div>

                    <div id="multiform-page-1"> 
                        <p class="input-label"> Username </p>
                        <input id="multi_username" type="text" class="input mainfont" name="username" required><br>
                        <p id="multi_username_output" class="input-output-error"> 4 - 16 chars, A-Z, a-z, 0-9 </p>

                        <p class="input-label"> E-Mail Address </p>
                        <input id="multi_email" type="text" class="input mainfont" name="email" required><br>
                        <p id="multi_email_output" class="input-output-error"> format: email@domain.tld </p>

                        <button class="mainfont button" id="reg" name="reg" style="visibility: hidden"> Register </button>
                    </div>

                        
                    <div id="multiform-page-2"> 
                        <p class="input-label"> Pasword </p>
                        <input id="multi_password" type="password" class="input mainfont" name="pw" required><br>
                        <p id="multi_password_output" class="input-output-error"> Requires 8 or more characters </p>

                        <p class="input-label"> Password Confirmation </p>
                        <input id="multi_password_confirmation" type="password" class="input mainfont" name="pw2" required><br>
                        <p id="multi_password_confirmation_output" class="input-output-error"> Repeat your Password again for verification </p>

                        <button type="submit" class="mainfont button" id="reg" name="reg"> Register </button>
                    </div>

                    <div class="multiform-navigation-container">
                        <a onclick="changePage(-1)" class="multiform-navigation-button"> <div style="display: inline-block; padding-right: 15px"> ᐊ </div> Back </a>
                        <a onclick="changePage(1)" class="multiform-navigation-button"> Next <div style="display: inline-block; padding-left: 15px"> ᐅ </div> </a>
                    </div>


                    <div style="font-size: 20px; margin-top: 20px;" class="mainfont">
                        <a> Nah, forget it. </a> <a href="login" class="subtle-link-text"> Take me back! </a> <br><br>
                    </div>

                </form>

                <script defer>

                    var current_page = 1;
                    var max_page = 2;
                    var min_page = 1;

                    var title = [];
                    title[1] = "General Information";
                    title[2] = "Account Credentials";

                    var requirements = [];

                    // this is an example requirement
                    requirements[0] = [
                        {
                            "item_id": "multi_exampleID", 
                            "regex": "regex_example_for_input", 
                        }
                    ];

                    requirements[1] = [
                        {
                            "item_id": "multi_username", 
                            "regex": /^[A-Za-z]{1}[A-Za-z0-9]{3,17}$/
                        },
                        {
                            "item_id": "multi_email", 
                            "regex": /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                        }
                    ];

                    requirements[2] = [
                        {
                            "item_id": "multi_password", 
                            "regex": /^.{8,}$/
                        },
                        {
                            "item_id": "multi_password_confirmation", 
                            "regex": /^.{8,}$/
                        }
                    ];

                    function changePage(change) {

                        var requirements_test_pass = true; // wird auf false gesetzt falls irgendwas nicht ausgefüllt ist

                        for (let i = 0; i < requirements[current_page].length; i++) {

                            var item_id = requirements[current_page][i]["item_id"];
                            var item_regex = requirements[current_page][i]["regex"];

                            var item = document.getElementById(item_id);
                            var output = document.getElementById(item_id + "_output");
                            var item_value = item.value;


                            if (change == 0) {
                                
                            } else if (item_value.match(item_regex) == null) {
                                item.style.borderColor = "#ED0C00"; // red bad
                                output.style.visibility = "visible"; // not yet implemented

                                requirements_test_pass = false; // prevent switching to next/previous page
                            } else {
                                item.style.borderColor = "#059900"; // green correct
                                output.style.visibility = "hidden"; // not yet implemented
                            }
                        }

                        if (!requirements_test_pass && change > 0) { // change > 0, weil man soll zurückgehen können
                            return;
                        }

                        // adjust the current_page and make sure its not too large or too small
                        current_page += change;
                        if (current_page > max_page) current_page = max_page;
                        if (current_page < min_page) current_page = min_page;

                        // Alle multiform pages werden erstmal deaktiviert
                        for (let i = min_page; i <= max_page; i++) {
                            document.getElementById("multiform-page-" + i).style.display = "none";
                        }

                        // Die gewünschte multiform page wird aktiviert
                        document.getElementById("multiform-page-" + current_page).style.display = "block";

                        // Title vom Multiform wird aufs gewünschte geändert
                        document.getElementById("multiform-title").innerHTML = current_page + "/" + max_page + " - " + title[current_page];
                    }

                    changePage(0); // Load the website with the current page | 0 = no change on multiform, just reload

                </script>

                <a style="color: darkred; font-weight: bold"> 
                <?php
                    if(isset($_POST["reg"])) {

                        $stmt = $mysql->prepare("SELECT * FROM accounts WHERE username = :user"); //Username überprüfen ob existiert
                        $stmt->bindParam(":user", $_POST["username"]);
                        $stmt->execute();
                        $count = $stmt->rowCount();

                        if (!(preg_match("/^[A-Za-z]{1}[A-Za-z0-9]{3,16}$/", $_POST["username"]))) { 
                            echo "Username invalid. ";
                            return;
                        }

                        if (!(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))) {
                            echo "Email address is considered invalid. ";
                            return;
                        }

                        if ($count == 0) { // Username ist frei
                            if ($_POST["pw"] == $_POST["pw2"]) {
                                $stmt = $mysql->prepare("SELECT * FROM accounts WHERE email = :email");
                                $stmt->bindParam(":email", $_POST["email"]);
                                $stmt->execute();
                                $count = $stmt->rowCount();
                                if ($count == 0) {
                                    $stmt = $mysql->prepare("INSERT INTO accounts (userid, username, email, password) VALUES (:uid, :user, :email, :password)");
                                    $stmt->bindParam(":user", $_POST["username"]);
                                    $stmt->bindParam(":email", $_POST["email"]);
                                    $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
                                    $stmt->bindParam(":password", $hash);
                                    $uuid = "";
                                    $found = false;
                                    
                                    while($found == false) {
                                        
                                        $uuid = genUUID();
                                        
                                        $query = $mysql->prepare("SELECT * FROM accounts WHERE userid = :uuid");
                                        $query->bindParam(":uuid", $uuid);
                                        $query->execute();
                                        $countq = $query->rowCount();
                                        if ($countq == 0) {
                                            $found = true;
                                        }
                                        
                                    }
                                    
                                    $stmt->bindParam(":uid", $uuid);
                                    $stmt->execute();
                                    addlog("SYSTEM", $uuid, "REGISTERED");
                                    ?> <meta http-equiv = "refresh" content = "0; url = login.php" /> <?php
                                } else {
                                    echo "Error: Email already in use.";
                                }
                            } else {
                                echo "Error: Passwords don't match.";
                            }
                        } else {
                            echo "Error: Username already in use.";
                        }
                    }
                ?>
                </a>
            </div>
        </center>

        <?php echo drawFooter(); ?>
    </div>

</html>