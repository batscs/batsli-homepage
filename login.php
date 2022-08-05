<?php
    require_once("front-end.php");
    require_once("../mysql.php"); // notice, a mysql connection is required here
?> 

<html>

    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="img/batsli_square.png">
        <title> /home/login </title>
    </head>

    

    <div style="width: 100%; height: 100%">
        <?php drawNavbar(); ?>

        <center>
            <div style="padding-top: 50px">
                <?php echo customText("login", "pageHeader"); ?>
            </div>
        </center>

        <center>
            <div style="padding-top: 50px; height: 500px">
                <form method="post">

                        <input type="text" class="input mainfont" name="username" placeholder="Username" required><br>

                        <input type="password" class="input mainfont" name="pw" placeholder="Password" required><br>

                        <button type="submit" class="mainfont button" id="login" name="log"> Login </button>

                        <div style="font-size: 20px; margin-top: 20px;" class="mainfont">
                            <a class="mainfont"> </a> <a href="register" style="text-decoration: none"> Where can I sign up? </a> <br><br>

                </form>

                <a style="color: darkred; font-weight: bold"> 
                    <?php
                        if (isset($_POST["log"])) {
                            $stmt = $mysql->prepare("SELECT * FROM accounts WHERE username = :user"); //Username überprüfen ob existiert
                            $stmt->bindParam(":user", $_POST["username"]);
                            $stmt->execute();
                            $count = $stmt->rowCount();
                            if ($count == 1) { // Username ist frei
                                $row = $stmt->fetch();
                                if (password_verify($_POST["pw"], $row["password"])) {

                                    if (isset($_POST["rememberme"]) || true) { // || true macht einfach dass immer pw gespeichert wird, weil scheiß drauf todo wieder neu implementieren
                                        
                                        $stmt = $mysql->prepare("UPDATE accounts SET rememberToken = :tkn WHERE username = :user");
                                        $token = bin2hex(random_bytes(36));
                                        $stmt->bindParam(":tkn", $token);
                                        $stmt->bindParam(":user", $row["username"]);
                                        $stmt->execute();

                                        setcookie("session", $token, time() + 3600*24*360, "/");

                                    }

                                    session_start();
                                    //$_SESSION["username"] = $row["username"];
                                    $_SESSION["userid"] = $row["userid"];

                                    //require_once("dashboard/methods.php");
                                    //addlog("SYSTEM", $_SESSION["userid"], "USER LOGIN", $_SERVER['REMOTE_ADDR']);

                                    header("Location: ../dashboard/index.php");
                                } else {
                                    echo "Error: Wrong password.";
                                }
                            } else {
                                echo "Error: Username not found.";
                            }
                        }

                    ?>
                </a>
            </div>
        </center>

        <?php echo drawFooter(); ?>
    </div>

</html>