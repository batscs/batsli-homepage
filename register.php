<?php
    require_once("front-end.php");
    require_once("../mysql.php");
    require_once("functions.php");
?> 

<html>

    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="img/batsli_square.png">
    </head>

    

    <div style="width: 100%; height: 100%">
        <?php drawNavbar(); ?>

        <center>
            <div style="padding-top: 50px">
                <a class="boldfont" style="color: #A6B8C8; font-size: 500%;"> Bats' Dashboard</a>
            </div>
        </center>

        <center>
            <div style="padding-top: 50px">
                <form method="post">

                        <input type="text" class="input mainfont" name="username" placeholder="Username" required><br>

                        <input type="text" class="input mainfont" name="email" placeholder="E-mail" required><br>

                        <input type="password" class="input mainfont" name="pw" placeholder="Password" required><br>

                        <input type="password" class="input mainfont" name="pw2" placeholder="Password (Confirm)" required><br>

                        <button type="submit" class="mainfont button" id="reg" name="reg"> Register </button>

                        <div style="font-size: 20px; margin-top: 20px;" class="mainfont">
                            <a class="mainfont"> </a> <a href="login.php" style="text-decoration: none"> No no, forget it, take me back! </a> <br><br>

                </form>

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

        
    </div>

</html>