<?php
    session_start();
    include("config.php");
?>


<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $websitetitle ?></title>
        <meta charset="utf-8">
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
        <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
        
        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
        
        <style>
            
            h1, h2, h3, h4, h5, p{
                margin: 0px;
                margin-bottom: 10px;
            }
        
            body{
                padding: 0px;
                margin: 0px;
                padding-top: 100px;
                font-family: 'Dosis', sans-serif;
                background-color: #4a4a4a;
                
                
                background: url(images/footerimage.jpg) no-repeat fixed center; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            #appbar{
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                
                background: <?php echo $primarycolor ?>;
                background: linear-gradient(90deg, <?php echo $primarycolordarker ?> 0%, <?php echo $primarycolor ?> 100%);
                
                /*background-color: <?php echo $primarycolor ?>;*/
                color: white;
                
                padding: 10px;
            }
            
            .ablink{
                display: inline-block;
                padding: 20px;
                cursor: pointer;
            }
            
            .ablink:hover{
                background-color: <?php echo $primarycolordarker ?>;
            }
            
            #footer{
                text-align: center;
                padding: 50px;
                color: white;
                font-size: 14px;
            
            }
            
            
            .middle{
                background-color: #f9f9f9;
                padding: 20px;
            }
            
            .footeritem{
                
                display: inline-block;
                padding: 10px;
                cursor: pointer;
                
            }
            
            .footeritem:hover{
                text-decoration: underline;
                color: #;
            }
            
            a{
                text-decoration: none;
                color: inherit;
            }
            
            input, textarea{
                box-sizing: border-box;
                width: 100%;
                padding: 20px;
                border: 1px solid <?php echo $primarycolor ?>;
                border-radius: 5px;
                margin-bottom: 20px;
            }
            
            textarea{
                height: 300px;
            }
            
            .submitbutton{
                background-color: <?php echo $primarycolor ?>;
                cursor: pointer;
                color: white;
                font-weight: bold;
            }
            
            .submitbutton:hover{
                background-color: <?php echo $primarycolordarker ?>;
            }
            
            #mainbanner{
                background: url(images/mainbanner.jpg) no-repeat center center; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                
                padding: 50px;
                
                text-align: center;
                color: white;
                font-size: 40px;
            }
            
            .middlebox{
                margin: 0 auto;
                max-width: 512px;
            }
            
            .dashboardleftbutton{
                padding-top: 10px;
                padding-bottom: 10px;
                border-bottom: 1px solid white;
                cursor: pointer;
            }
            .dashboardleftbutton:hover{
                color: <?php echo $primarycolor ?>;
                font-weight: bold;
                background-color: white;
                padding-left: 10px;
            }
            
        </style>
        
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        
    </head>
    <body>
        <div id="appbar">
            <div style="display: inline-block;">
                <a href="<?php echo $baseurl ?>"><img src="images/weblogo.png" width="200px"></a>
            </div>
            <div style="display: inline-block; position: absolute; right: 20px; top: 20%;">
                <a href="<?php echo $baseurl ?>"><div class="ablink">Home</div></a>
                <?php 
                if(isset($_SESSION["email"])){
                    ?>
                    <a href="<?php echo $baseurl ?>?dashboard"><div class="ablink">Dashboard</div></a>
                    <a href="<?php echo $baseurl ?>?logout"><div class="ablink">Logout</div></a>
                    <?php
                }else{
                    ?>
                    <a href="<?php echo $baseurl ?>?login"><div class="ablink">Login</div></a>
                    <a href="<?php echo $baseurl ?>?register"><div class="ablink">Register</div></a>
                    <?php
                }
                ?>
                <div class="ablink"><i class="fa fa-search"></i></div>
            </div>
        </div>
        <div id="mainbanner">
            <h2>Buy and Sell Fresh Home Cooks</h2><h4>Only on Hubby Home Cooks Platform</h4>
        </div>
        <div class="middle">
            
            <?php
                if(isset($_GET["login"])){
                    ?>
                    <div class="middlebox">
                        <?php
                        if(isset($_POST["login"])){
                            
                            $email = mysqli_real_escape_string($connection, $_POST["email"]);
                            $password = mysqli_real_escape_string($connection, $_POST["password"]);
                            
                            $result = mysqli_query($connection, "SELECT * FROM $tableusers WHERE email = '$email' AND password = '$password'");
                            if(mysqli_num_rows($result) > 0){
                                $_SESSION["email"] = $email;
                                ?>
                                <p>Welcome!</p>
                                <script>
                                    setTimeout(function(){
                                        location.href = "<?php echo $baseurl ?>?dashboard"
                                    }, 1000)
                                </script>
                                <?php
                            }else{
                                ?>
                                <p>Incorrect email and/or password!</p>
                                <?php
                            }
                        }else{
                            ?>
                            <h2>Login</h2>
                            <form method="post" action="<?php echo $baseurl ?>?login">
                                <input name="email" type="email" placeholder="Email">
                                <input name="password" type="password" placeholder="Password">
                                <input name="login" type="submit" placeholder="Login" class="submitbutton"> 
                            </form>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                }else if(isset($_GET["register"])){
                    ?>
                    <div class="middlebox">
                        <?php
                        if(isset($_POST["register"])){
                            
                            $date = date("Y/m/d");
                            $time = date("h:i:sa");
                            $datereg = $date . " " . $time;
                            $email = mysqli_real_escape_string($connection, $_POST["email"]);
                            $password = mysqli_real_escape_string($connection, $_POST["password"]);
                            $name = mysqli_real_escape_string($connection, $_POST["name"]);
                            $phone = mysqli_real_escape_string($connection, $_POST["phone"]);
                            $address = mysqli_real_escape_string($connection, $_POST["address"]);
                            $userid = substr(str_shuffle(str_repeat("0123456789", 5)), 0, 10);
                            
                            if($email != "" && $password != "" && $name != "" && $phone != "" && $address != ""){
                                
                                if(mysqli_num_rows(mysqli_query($connection, "SELECT * FROM $tableusers WHERE email = '$email'")) > 0){
                                    ?>
                                    <p>This email address is already registered. Try to use another email.</p>
                                    <?php
                                }else{
                                    mysqli_query($connection, "INSERT INTO $tableusers (datereg, email, password, name, phone, address, userid) VALUES ('$datereg', '$email', '$password', '$name', '$phone', '$address', '$userid')");
                                    ?>
                                    <p>Thank you for registering!</p>
                                    <script>
                                        setTimeout(function(){
                                            location.href = "<?php echo $baseurl ?>?dashboard"
                                        }, 1000)
                                    </script>
                                    <?php
                                    $_SESSION["email"] = $email;
                                }
                            }else{
                                ?>
                                <p>You did not fill all the fields. Please try again.</p>
                                <?php
                            }

                        }else{
                            ?>
                            <h2>Register</h2>
                            <form method="post" action="<?php echo $baseurl ?>?register">
                                <input name="email" type="email" placeholder="Email">
                                <input name="password" type="password" placeholder="Password">
                                <input name="name" type="text" placeholder="Your name or nickname">
                                <input name="phone" type="number" placeholder="Phone number">
                                <input name="address" type="text" placeholder="Address">
                                <input name="register" type="submit" value="Register" class="submitbutton">
                            </form>
                            <?php
                        }
                    
                        ?>
                        
                    </div>
                    <?php
                }else if(isset($_GET["logout"])){
                    ?>
                    <p align="center">Good bye!</p>
                    <?php
                    session_destroy();
                }else if(isset($_GET["dashboard"])){
                    if(isset($_SESSION["email"])){
                        $email = $_SESSION["email"];
                        $name = "";
                        $phone = "";
                        $address = "";
                        
                        $sql = "SELECT * FROM $tableusers WHERE email = '$email'";
                        $result = mysqli_query($connection, $sql);
                        
                        while($row = mysqli_fetch_assoc($result)){
                            $name = $row["name"];
                            $phone = $row["phone"];
                            $address = $row["address"];
                        }
                        ?>

                        <div style="display: table; width: 100%;">
                            
                            <div style="display: table-cell; width: 200px;">
                                <div class="dashboardleftbutton" onclick="dbpage(1)"><i class="fa fa-plus" style="width: 20px;"></i> Add New Product</div>
                                <div class="dashboardleftbutton" onclick="dbpage(2)"><i class="fa fa-cutlery" style="width: 20px;"></i> Your Products</div>
                                <div class="dashboardleftbutton" onclick="dbpage(3)"><i class="fa fa-user" style="width: 20px;"></i> Profile</div>
                                <div class="dashboardleftbutton" onclick="dbpage(4)"><i class="fa fa-cogs" style="width: 20px;"></i> Settings</div>
                            </div>
                            <div style="display: table-cell; padding-left: 30px;">
                                <div class="dbp dbp1">
                                    <h3>Add New Product</h3>
                                    <form method="post" action="<?php echo $baseurl ?>?dashboard">
                                        <input placeholder="Title">
                                        <input placeholder="Price">
                                        <textarea placeholder="Description"></textarea>
                                        <input type="file" name="productimage">
                                        <input name="addnew" type="submit" value="Add" class="submitbutton">
                                    </form>
                                </div>
                                <div class="dbp dbp2">
                                    <h3>Your Products</h3>
                                    <p>Nothing uploaded...</p>
                                </div>
                                <div class="dbp dbp3">
                                    <h3>Profile</h3>
                                    <p>Coming soon...</p>
                                </div>
                                <div class="dbp dbp4">
                                    <h3>Settings</h3>
                                    <p>Coming soon...</p>
                                </div>
                                
                            </div>
                        </div>
                        
                        <script>
                            function dbpage(num){
                                $(".dbp").hide()
                                $(".dbp" + num).show()
                            }
                            
                            dbpage(1)
                        </script>
                        
                        
                        <?php
                        
                        if(isset($_POST["addnew"])){

                            $maxsize = 2097152;
                            if(($_FILES['productimage']['size'] >= $maxsize)){
                                ?>
                                <p>Uploaded image is too big. Try to upload different image.</p>
                                <?php
                            }else if($_FILES["productimage"]["size"] == 0){
                                ?>
                                <p>Uploaded image is file is invalid. Try to upload different image.</p>
                                <?php
                            }else{
                            	if($_FILES['productimage']['error'] > 0) { 
                            	    ?>
                            	    <p>Error during uploading new picture. Try again later.</p>
                            	    <?php
                            	}
                            	$extsAllowed = array( 'jpg', 'jpeg', 'png' );
                            	$uploadedfile = $_FILES["productimage"]["name"];
                            	$extension = pathinfo($uploadedfile, PATHINFO_EXTENSION);
                            	if (in_array($extension, $extsAllowed) ) { 
                            	    $newppic = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 10);
                                	$name = "upload/" . $newppic .".". $extension;
                                	$result = move_uploaded_file($_FILES['productimage']['tmp_name'], $name);

                                	//mysqli_query($connection, "INSERT INTO ciihuygambar (userid, image, ext) VALUES ('$userid', '$newppic', '$extension')");
                                	
                                	createThumbnail($name, "upload/" . $newppic ."-thumb." . $extension, 64);
                                	
                            	} else {
                            	    ?>
                            	    <p>Image file is not valid. Please try another image.</p>
                            	    <?php
                            	}
                            }

                            ?>
                            <?php
                        }
                        
                    }else{
                        ?>
                        <p align="center">You must login first to access this page.</p>
                        <?php
                    }
                }else{
                    ?>
                    <p align="center">Coming soon!</p>
                    <?php
                }
            ?>
            
        </div>
        <div id="footer">
            <div>
                <div class="footeritem"><a href="<?php echo $baseurl ?>">Home</a></div>
                <?php 
                if(isset($_SESSION["email"])){
                    ?>
                    <div class="footeritem"><a href="<?php echo $baseurl ?>?dashboard">Dashboard</a></div>
                    <div class="footeritem"><a href="<?php echo $baseurl ?>?logout">Logout</a></div>
                    <?php
                }else{
                    ?>
                    <div class="footeritem"><a href="<?php echo $baseurl ?>?login">Login</a></div>
                    <div class="footeritem"><a href="<?php echo $baseurl ?>?register">Register</a></div>
                    <?php
                }
                ?>
            </div>
            <div style="margin: 30px;">
                <p style="font-size: 10px;">Copyright 2020. All rights reserved.</p>
            </div>
        </div>
        
        <script>
            $(document).ready(function(){
                /*
                $('.homeslider').slick({
                    autoplay : true,
                    infinite: true,
                    speed: 600,
                    pauseOnFocus: false,
                    pauseOnHover: false,
                });
                */
            })
        </script>
    </body>
</html>