<?php
    require_once("front-end.php");
    require_once("functions.php");
    require_once("../mysql.php"); // notice, a mysql connection is required here

    session_start();
?> 

<html>

    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="img/batsli_square.png">
        <title> /home/upload </title>
    </head>

    

    <div style="width: 100%; height: 100%">
        <?php drawNavbar(); ?>

        <center>
            <div style="padding-top: 30px">
                <?php echo customText("upload", "pageHeader"); ?>
            </div>
        </center>

        <center>
            <div style="padding-top: 50px; height: 550px">

                <?php 
                    $saved_access_code = $_POST["access_code"] ?? "";
                    if ($saved_access_code == "") { // if session cookie not set, try post cookie
                        $saved_access_code = $_SESSION["saved_access_code"] ?? "";
                    }
                ?>

                <form action="upload.php" method="post" enctype="multipart/form-data">

                        <?php

                            if(isset($_POST["logout"])) {
                                $_SESSION["saved_access_code"] = "";
                                header("Refresh: 0");
                            }
                        
                            if(isset($_POST["submit"])) {

                                // verify if access code is correct, und wenn ja session cookie setzen damit auto login
                                $_SESSION["saved_access_code"] = $_POST["access_code"]; 
                                if ($_POST["access_code"] != "ezlife123") {// yes, im leaking this on github :) change this if you use it for more private and secure purposes
                                    echo "invalid access code! <br>";
                                } else {

                                    $target_dir = "../uploads/"; // directory bats.li/uploads
                                    $target_folder = generateRandomString(8) . "/"; // unique individual folder for each upload
                                    $target_name = basename($_FILES["fileToUpload"]["name"]); // file name from uploaded file
                                    $target_file = $target_dir . $target_folder . $target_name; // complete file directory

                                    $uploadOk = 1; // this is kept to allow future features such as file size limitations
                                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // ... or file type restrictions               

                                    // Create subfolder for the upload if it does not already exists
                                    if (!file_exists($target_dir . $target_folder)) {
                                        mkdir($target_dir . $target_folder, 0777, true);
                                    }
                                
                                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                        $url = "https://bats.li/uploads/" . $target_folder . $target_name;
                                        echo "<a style='font-size: 20px'> The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded. </a> <br>";
                                        echo "<a style='font-size: 20px' href='" . $url . "'> " . $url . "</a>";
                                        echo "<br><br>";
                                    } else {
                                        rmdir($target_dir . $target_folder); // if file upload failed, remove the created folder to prevent empty folder spamming
                                        echo "Sorry, there was an error uploading your file. <br>";
                                        
                                    }
                                }

                            }
                        ?>

                    <input type="password" class="input mainfont" name="access_code" id="access_code" placeholder="Access Code" oninput="accessUpload()" value="<?php echo $saved_access_code; ?>"> </input>

                    <div id="uploadDiv" style="width: 500px; height: 200px">
                    
                        <br>
                        <p class="mainfont" style="font-size: 28px"> Select image to upload: </p> 
                        <br>
                        <input type="file" class="mainfont button" name="fileToUpload" id="fileToUpload">
                        <br> <br> <br>
                        <input type="submit" value="Upload Image" class="mainfont button" name="submit">
                        <br> <br> <br>
                        <input type="submit" value="Logout" class="mainfont button" name="logout">
                    
                </div>

                </form>

                <script>

                    // thanks & credit to: https://stackoverflow.com/questions/1655769/fastest-md5-implementation-in-javascript
                    function md5(inputString) {
                        var hc="0123456789abcdef";
                        function rh(n) {var j,s="";for(j=0;j<=3;j++) s+=hc.charAt((n>>(j*8+4))&0x0F)+hc.charAt((n>>(j*8))&0x0F);return s;}
                        function ad(x,y) {var l=(x&0xFFFF)+(y&0xFFFF);var m=(x>>16)+(y>>16)+(l>>16);return (m<<16)|(l&0xFFFF);}
                        function rl(n,c)            {return (n<<c)|(n>>>(32-c));}
                        function cm(q,a,b,x,s,t)    {return ad(rl(ad(ad(a,q),ad(x,t)),s),b);}
                        function ff(a,b,c,d,x,s,t)  {return cm((b&c)|((~b)&d),a,b,x,s,t);}
                        function gg(a,b,c,d,x,s,t)  {return cm((b&d)|(c&(~d)),a,b,x,s,t);}
                        function hh(a,b,c,d,x,s,t)  {return cm(b^c^d,a,b,x,s,t);}
                        function ii(a,b,c,d,x,s,t)  {return cm(c^(b|(~d)),a,b,x,s,t);}
                        function sb(x) {
                            var i;var nblk=((x.length+8)>>6)+1;var blks=new Array(nblk*16);for(i=0;i<nblk*16;i++) blks[i]=0;
                            for(i=0;i<x.length;i++) blks[i>>2]|=x.charCodeAt(i)<<((i%4)*8);
                            blks[i>>2]|=0x80<<((i%4)*8);blks[nblk*16-2]=x.length*8;return blks;
                        }
                        var i,x=sb(inputString),a=1732584193,b=-271733879,c=-1732584194,d=271733878,olda,oldb,oldc,oldd;
                        for(i=0;i<x.length;i+=16) {olda=a;oldb=b;oldc=c;oldd=d;
                            a=ff(a,b,c,d,x[i+ 0], 7, -680876936);d=ff(d,a,b,c,x[i+ 1],12, -389564586);c=ff(c,d,a,b,x[i+ 2],17,  606105819);
                            b=ff(b,c,d,a,x[i+ 3],22,-1044525330);a=ff(a,b,c,d,x[i+ 4], 7, -176418897);d=ff(d,a,b,c,x[i+ 5],12, 1200080426);
                            c=ff(c,d,a,b,x[i+ 6],17,-1473231341);b=ff(b,c,d,a,x[i+ 7],22,  -45705983);a=ff(a,b,c,d,x[i+ 8], 7, 1770035416);
                            d=ff(d,a,b,c,x[i+ 9],12,-1958414417);c=ff(c,d,a,b,x[i+10],17,     -42063);b=ff(b,c,d,a,x[i+11],22,-1990404162);
                            a=ff(a,b,c,d,x[i+12], 7, 1804603682);d=ff(d,a,b,c,x[i+13],12,  -40341101);c=ff(c,d,a,b,x[i+14],17,-1502002290);
                            b=ff(b,c,d,a,x[i+15],22, 1236535329);a=gg(a,b,c,d,x[i+ 1], 5, -165796510);d=gg(d,a,b,c,x[i+ 6], 9,-1069501632);
                            c=gg(c,d,a,b,x[i+11],14,  643717713);b=gg(b,c,d,a,x[i+ 0],20, -373897302);a=gg(a,b,c,d,x[i+ 5], 5, -701558691);
                            d=gg(d,a,b,c,x[i+10], 9,   38016083);c=gg(c,d,a,b,x[i+15],14, -660478335);b=gg(b,c,d,a,x[i+ 4],20, -405537848);
                            a=gg(a,b,c,d,x[i+ 9], 5,  568446438);d=gg(d,a,b,c,x[i+14], 9,-1019803690);c=gg(c,d,a,b,x[i+ 3],14, -187363961);
                            b=gg(b,c,d,a,x[i+ 8],20, 1163531501);a=gg(a,b,c,d,x[i+13], 5,-1444681467);d=gg(d,a,b,c,x[i+ 2], 9,  -51403784);
                            c=gg(c,d,a,b,x[i+ 7],14, 1735328473);b=gg(b,c,d,a,x[i+12],20,-1926607734);a=hh(a,b,c,d,x[i+ 5], 4,    -378558);
                            d=hh(d,a,b,c,x[i+ 8],11,-2022574463);c=hh(c,d,a,b,x[i+11],16, 1839030562);b=hh(b,c,d,a,x[i+14],23,  -35309556);
                            a=hh(a,b,c,d,x[i+ 1], 4,-1530992060);d=hh(d,a,b,c,x[i+ 4],11, 1272893353);c=hh(c,d,a,b,x[i+ 7],16, -155497632);
                            b=hh(b,c,d,a,x[i+10],23,-1094730640);a=hh(a,b,c,d,x[i+13], 4,  681279174);d=hh(d,a,b,c,x[i+ 0],11, -358537222);
                            c=hh(c,d,a,b,x[i+ 3],16, -722521979);b=hh(b,c,d,a,x[i+ 6],23,   76029189);a=hh(a,b,c,d,x[i+ 9], 4, -640364487);
                            d=hh(d,a,b,c,x[i+12],11, -421815835);c=hh(c,d,a,b,x[i+15],16,  530742520);b=hh(b,c,d,a,x[i+ 2],23, -995338651);
                            a=ii(a,b,c,d,x[i+ 0], 6, -198630844);d=ii(d,a,b,c,x[i+ 7],10, 1126891415);c=ii(c,d,a,b,x[i+14],15,-1416354905);
                            b=ii(b,c,d,a,x[i+ 5],21,  -57434055);a=ii(a,b,c,d,x[i+12], 6, 1700485571);d=ii(d,a,b,c,x[i+ 3],10,-1894986606);
                            c=ii(c,d,a,b,x[i+10],15,   -1051523);b=ii(b,c,d,a,x[i+ 1],21,-2054922799);a=ii(a,b,c,d,x[i+ 8], 6, 1873313359);
                            d=ii(d,a,b,c,x[i+15],10,  -30611744);c=ii(c,d,a,b,x[i+ 6],15,-1560198380);b=ii(b,c,d,a,x[i+13],21, 1309151649);
                            a=ii(a,b,c,d,x[i+ 4], 6, -145523070);d=ii(d,a,b,c,x[i+11],10,-1120210379);c=ii(c,d,a,b,x[i+ 2],15,  718787259);
                            b=ii(b,c,d,a,x[i+ 9],21, -343485551);a=ad(a,olda);b=ad(b,oldb);c=ad(c,oldc);d=ad(d,oldd);
                        }
                        return rh(a)+rh(b)+rh(c)+rh(d);
                    }

                    var access_code_input = document.getElementById("access_code");
                    var upload_div = document.getElementById("uploadDiv");

                    function accessUpload() {

                        // validate if access code is correct, if not return and do nothing
                        if (md5(access_code_input.value) != "b57d2880a2de9ec5c5ef0c89ee2f911e") {
                            // show the div with the content for upload
                            //upload_div.style.backgroundColor = "red";
                            upload_div.style.display = "none";

                            // lock the input field so the access code can't be changed anymore, but how??
                            access_code_input.style.color = "black";
                        } else {
                            // show the div with the content for upload
                            //upload_div.style.backgroundColor = "green";
                            upload_div.style.display = "block";

                            // lock the input field so the access code can't be changed anymore, but how??
                            access_code_input.style.color = "gray";
                        }
                    }

                    // force trigger an input event in the access_code in order to have an auto-fill because
                    // of the page refresh from the php upload request
                    document.getElementById("access_code").dispatchEvent(new Event('input'));
                </script>

            </div>
        </center>

        <?php echo drawFooter(); ?>
    </div>

</html>