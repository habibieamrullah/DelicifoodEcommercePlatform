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
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <scriptsrc="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        
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
            
            p{
                font-size: 18px;
                margin-bottom: 15px;
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
            
            .textlink{
                color: <?php echo $primarycolor ?>;
            }
            .textlink:hover{
                text-decoration: underline;
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
            
            .chatbutton{
                display: inline-block;
                border-radius: 10px;
                padding: 20px;
                color: white;
                font-size: 20px;
                text-align: center;
                /*background-color: <?php echo $primarycolor ?>;*/
                border: 2px solid <?php echo $primarycolor ?>;
                cursor: pointer;
                font-weight: bold;
                color: <?php echo $primarycolor ?>;
            }
            
            .chatbutton:hover{
                background-color: <?php echo $primarycolordarker ?>;
                color: white;
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
                max-width: 800px;
            }
            
            
            
            .productthumbnail{
                background-color: white;
                padding: 10px;
                cursor: pointer;
                border: 1px solid white;
                text-align: left;
                margin: 10px;
                -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
                -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
                box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
            }
            
            .pricetag{
                padding: 10px; font-size: 20px; color: white; background-color: rgba(0,0,0,.5);
            }
            
            .productthumbnail:hover .pricetag{
                background-color: <?php echo $primarycolor ?>;
            }
            
            .productthumbnail:hover{
                border: 1px solid <?php echo $primarycolor ?>;
            }
            
            #appbarmenu{
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0,0,0,.8);
                display: none;
                min-width: 128px;
            }
            
            .ablink{
                display: block;
                padding: 20px;
                cursor: pointer;
                text-align: right;
            }
            
            .mobilevisible{
                display: block;
            }
            
            #mobilebutton{
                position: fixed;
                color: white;
                top: 0;
                right: 0;
                padding: 40px;
            }
            
            .thumbnailimage{
                width: 100%;
                height: 200px;
            }
            
            .shorttext{
            	width: 100%;
            	display: inline-block;
            	text-overflow: ellipsis;
            	white-space: nowrap;
            	overflow: hidden;
            }
            
            .singleproductholder{
                display: block;
            }
            
            .singleproductrow{
                display: block;
            }
            
            .dashboardcontentholder{
                display: block;
            }
            
            .dashboardcell{
                display: block; 
                margin-bottom: 20px;
            }
            
            .dashboardleftbutton{
                border-bottom: 1px solid white;
                cursor: pointer;
                display: inline-block;
                padding: 10px;
            }
            .dashboardleftbutton:hover{
                color: <?php echo $primarycolor ?>;
                font-weight: bold;
                background-color: white;
            }
            
            @media (min-width: 720px){
                
                .thumbnailimage{
                    width: 200px; height: 200px; 
                }
                
                .shorttext{
                    width: 200px;
                }
                
                .productthumbnail{
                    display: inline-block;
                    vertical-align: top;
                    width: 200px;
                }
                
                #appbarmenu{
                    display: inline-block; position: absolute; right: 20px; top: 20%;
                    background-color: inherit;
                }
                .ablink{
                    display: inline-block;
                    padding: 20px;
                    cursor: pointer;
                }
                .mobilevisible{
                    display: none;
                }
                
                .singleproductholder{
                    display: table;
                    width: 100%;
                }
                
                .singleproductrow{
                    display: table-cell;
                    vertical-align: top;
                }
                
                .sprleft{
                    width: 300px;
                }
                
                .sprright{
                    padding-left: 20px;
                }
                
                .dashboardcontentholder{
                    display: table; width: 100%;
                }
                
                .dashboardcell{
                    display: table-cell; 
                }
                
                .dbcleft{
                    width: 128px;
                }
                
                .dbcright{
                    padding-left: 30px;
                }
                
                .dashboardleftbutton{
                    display: block;
                }
            }
            
            
            
            .ablink:hover{
                background-color: <?php echo $primarycolordarker ?>;
            }
            
            .bigproductimage{
                margin-bottom: 10px; 
                margin-top: 10px;
                padding: 10px; 
                background-color: white;
                -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
                -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
                box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
            }
            
            #searchbox{
                margin-bottom: 10px; 
                margin-top: 10px;
                padding: 25px; background-color: white;
                -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
                -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
                box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
                
                font-size: 30px;
                color: <?php echo $primarycolor ?>;
                
                display: table;
                width: 100%;
                border-radius: 30px;
                box-sizing: border-box;
            }
            
            .sbitem{
                display: table-cell;
                vertical-align: middle;
            }
            
            
            label{
                font-weight: bold;
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
            <div id="mobilebutton" class="mobilevisible" onclick="toggleDrawer()"><i class="fa fa-bars"></i></div>
            <div id="appbarmenu">
                <div class="ablink mobilevisible" onclick="toggleDrawer()" style="padding: 40px;"><i class="fa fa-times"></i></div>
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
                <a href="<?php echo $baseurl ?>?about"><div class="ablink">About</div></a>
                <a href="<?php echo $baseurl ?>?search"><div class="ablink"><i class="fa fa-search"></i></div></a>
                
            </div>
        </div>
        <div id="mainbanner">
            <h2>Tasty Home Cooks</h2><h4>For Everyone</h4>
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
                                <label>Email</label>
                                <input name="email" type="email" placeholder="Email">
                                <label>Password</label>
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
                                <label>Email</label>
                                <input name="email" type="email" placeholder="Email">
                                <label>Password</label>
                                <input name="password" type="password" placeholder="Password">
                                <label>Name/Nickname</label>
                                <input name="name" type="text" placeholder="Your name or nickname">
                                <label>Phone Number</label>
                                <p>*Include your country code before your phone number like this: 6590611234</p>
                                <input name="phone" type="number" placeholder="Phone number">
                                <label>Address</label>
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
                    <script>
                        setTimeout(function(){
                            location.href = "<?php echo $baseurl ?>"
                        }, 1000)
                    </script>
                    <?php
                    session_destroy();
                }else if(isset($_GET["dashboard"])){
                    
                    ?>
                    <div class="middlebox">
                        <?php
                        
                        if(isset($_SESSION["email"])){
                            
                            include("thumbnailgenerator.php");
                            
                            $email = $_SESSION["email"];
                            $userid = "";
                            $name = "";
                            $phone = "";
                            $address = "";
                            
                            $sql = "SELECT * FROM $tableusers WHERE email = '$email'";
                            $result = mysqli_query($connection, $sql);
                            
                            while($row = mysqli_fetch_assoc($result)){
                                $name = $row["name"];
                                $phone = $row["phone"];
                                $address = $row["address"];
                                $userid = $row["userid"];
                            }
                            ?>
                            
                            
                            
                            <div class="dashboardcontentholder">
                                
                                <div class="dashboardcell dbcleft">
                                    <div class="dashboardleftbutton" onclick="dbpage(1)"><i class="fa fa-plus" style="width: 20px;"></i> New</div>
                                    <div class="dashboardleftbutton" onclick="dbpage(2)"><i class="fa fa-cutlery" style="width: 20px;"></i> Products</div>
                                    <div class="dashboardleftbutton" onclick="dbpage(3)"><i class="fa fa-user" style="width: 20px;"></i> Profile</div>
                                </div>
                                <div class="dashboardcell dbcright">
                                    <div class="dbp dbp1">
                                        <h3>Add New Product</h3>
                                        <form method="post" action="<?php echo $baseurl ?>?dashboard" enctype="multipart/form-data">
                                            <input name="title" placeholder="Title">
                                            <input name="price" type="number" placeholder="Price">
                                            <textarea name="description" placeholder="Description"></textarea>
                                            <p>Choose your product photo:</p>
                                            <input type="file" name="productimage" accept="image/*">
                                            <input name="addnew" type="submit" value="Sell" class="submitbutton">
                                        </form>
                                    </div>
                                    <div class="dbp dbp2">
                                        <h3>Your Products</h3>
                                        <?php
                                        $sql = "SELECT * FROM $tableproducts WHERE userid = '$userid' ORDER BY id DESC";
                                        $result = mysqli_query($connection, $sql);
                                        if(mysqli_num_rows($result) > 0){
                                            ?>
                                            <p>Click to edit one of your published products.</p>
                                            <?php
                                            while($productrow = mysqli_fetch_assoc($result)){
                                                
                                                ?>
                                                <a href="<?php echo $baseurl ?>?dashboard&edit=<?php echo $productrow["productid"] ?>">
                                                    <div class="productthumbnail">
                                                        <div class="thumbnailimage" style="margin-bottom: 10px; background: url(upload/<?php echo $productrow["productid"] ?>-thumb.<?php echo $productrow["ext"] ?>) no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;">
                                                            <div style="display: inline-block;">
                                                                <div class="pricetag"><i class="fa fa-tag"></i> $<?php echo $productrow["price"] ?></div>
                                                            </div>
                                                        </div>
                                                        
                                                        <h3 style="margin: 0px;"><?php echo $productrow["title"] ?></h3>
                                                        
                                                        <h5 style="margin: 0px;"><i class="fa fa-user"></i> <?php echo $name ?></h5>
                                                        <div class="shorttext">
                                                            <?php echo $productrow["description"] ?>
                                                        </div>
                                                    </div>
                                                </a>
                                                <?php
                                                
                                            }
                                        }else{
                                            ?>
                                            <p align="center">You don't have any product yet.</p>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    
                                    <div class="dbp dbp3">
                                        <h3>Profile</h3>
                                        <form action="<?php echo $baseurl ?>?dashboard" method="post">
                                            <label>Name/Nickname</label>
                                            <input name="name" type="text" placeholder="Your name or nickname" value="<?php echo $name ?>">
                                            <label>Phone Number</label>
                                            <p>*Include your country code before your phone number like this: 6590611234</p>
                                            <input name="phone" type="number" placeholder="Phone number" value="<?php echo $phone ?>">
                                            <label>Address</label>
                                            <input name="address" type="text" placeholder="Address" value="<?php echo $address ?>">
                                            <input name="updateprofile" type="submit" value="Update" class="submitbutton">
                                        </form>
                                    </div>
                                    <div class="dbp dbp4">
                                        <h3>Settings</h3>
                                        <p>Coming soon...</p>
                                    </div>
                                    
                                    <?php
                            
                                    if(isset($_POST["addnew"])){
                                        
                                        ?>
                                        <div class="dbp dbp0">
                                        <?php
                                        
                                        $productid = substr(str_shuffle(str_repeat("0123456789", 5)), 0, 10);
                                        $title = mysqli_real_escape_string($connection, $_POST["title"]);
                                        $price = mysqli_real_escape_string($connection, $_POST["price"]);
                                        $description = mysqli_real_escape_string($connection, $_POST["description"]);
                                    
                                        $maxsize = 2097152;
                                        if(($_FILES['productimage']['size'] >= $maxsize)){
                                            ?>
                                            <p>Uploaded image is too big. Try to upload different image.</p>
                                            <?php
                                        }else if($_FILES["productimage"]["size"] == 0){
                                            /*
                                            ?>
                                            <p>Uploaded image is file is invalid. Try to upload different image.</p>
                                            <?php
                                            */
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
                                        	    $newppic = $productid;
                                            	$name = "upload/" . $newppic .".". $extension;
                                            	$result = move_uploaded_file($_FILES['productimage']['tmp_name'], $name);
                                            	createThumbnail($name, "upload/" . $newppic ."-thumb." . $extension, 256);
                                            	
                                            	//success!
                                            	mysqli_query($connection, "INSERT INTO $tableproducts (userid, productid, title, price, description, ext) VALUES ('$userid', '$productid', '$title' ,'$price', '$description', '$extension')");
                                            	?>
                                            	<p>Great! New product has been added.</p>
                                            	<script>
                                                setTimeout(function(){
                                                    location.href = "<?php echo $baseurl ?>?dashboard"
                                                }, 1000)
                                            </script>
                                            	<?php
                                        	} else {
                                        	    ?>
                                        	    <p>Incomplete information. Please try again.</p>
                                        	    <?php
                                        	}
                                        }
                                    
                                        
            
                                        ?>
                                        </div>
                                        <?php
                                    }
                                    
                                    if(isset($_POST["updateprofile"])){
                                        ?>
                                        <div class="dbp dbp0">
                                        <?php
                                        $name = mysqli_real_escape_string($connection, $_POST["name"]);
                                        $phone = mysqli_real_escape_string($connection, $_POST["phone"]);
                                        $address = mysqli_real_escape_string($connection, $_POST["address"]);
                                        
                                        if($name != "" && $phone != "" && $address != ""){
                                            
                                            mysqli_query($connection, "UPDATE $tableusers SET name='$name', phone='$phone', address='$address' WHERE userid = '$userid'");
                                            
                                            ?>

                                            <p>Your profile has been updated.</p>
                                            <script>
                                                setTimeout(function(){
                                                    location.href = "<?php echo $baseurl ?>?dashboard"
                                                }, 1000)
                                            </script>

                                            <?php
                                        }else{
                                            ?>
                                            <p>Incomplete information!</p>
                                            <?php
                                        }
                                        ?>
                                        </div>
                                        <?php
                                    }
                                    
                                    if(isset($_GET["edit"])){
                                        ?>
                                        <div class="dbp dbp0">
                                        <?php
                                        
                                        $productid = mysqli_real_escape_string($connection, $_GET["edit"]);
                                        
                                        $sql = "SELECT * FROM $tableproducts WHERE productid = '$productid'";
                                        $row = mysqli_fetch_assoc(mysqli_query($connection, $sql));

                                        ?>
                                        <h3>Edit Product</h3>
                                        
                                        <?php 
                                        if(isset($_POST["updateproduct"])){
                                            $newtitle = mysqli_real_escape_string($connection, $_POST["title"]);
                                            $newprice = mysqli_real_escape_string($connection, $_POST["price"]);
                                            $newdescription = mysqli_real_escape_string($connection, $_POST["description"]);

                                            if($newtitle != "" && $newprice != "" && $newdescription != ""){
                                                
                                                if($userid == mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM $tableproducts WHERE productid='$productid' "))["userid"]){
                                                    mysqli_query($connection, "UPDATE $tableproducts SET title = '$newtitle', price = '$newprice', description = '$newdescription' WHERE productid = '$productid' AND userid = '$userid'");
                                                
                                                    $maxsize = 2097152;
                                                    if(($_FILES['productimage']['size'] >= $maxsize)){
                                                        ?>
                                                        <p>Uploaded image is too big. Try to upload different image.</p>
                                                        <?php
                                                    }else if($_FILES["productimage"]["size"] == 0){
                                                        /*
                                                        ?>
                                                        <p>Uploaded image is file is invalid. Try to upload different image.</p>
                                                        <?php
                                                        */
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
                                                    	    $newppic = $productid;
                                                        	$name = "upload/" . $newppic .".". $extension;
                                                        	$result = move_uploaded_file($_FILES['productimage']['tmp_name'], $name);
                                                        	createThumbnail($name, "upload/" . $newppic ."-thumb." . $extension, 256);
                                                        	
                                                        	?>
                                                        	<p>Great! New photo has been added.</p>
                                                        	<?php
                                                    	}
                                                    }
                                                    
                                                    ?>
                                                    <p>Product has been successfully updated.</p>
                                                    <script>
                                                        setTimeout(function(){
                                                            location.href = "<?php echo $baseurl ?>?dashboard"
                                                        }, 1000)
                                                    </script>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <p>You are not authorized!</p>
                                                    <?php
                                                }
                                                
                                                
                                            }else{
                                                ?>
                                                <p>Incomplete information!</p>
                                                <?php
                                            }
                                        }else{
                                            ?>
                                            
                                            <form method="post" action="<?php echo $baseurl ?>?dashboard&edit=<?php echo $productid ?>" enctype="multipart/form-data">
                                                <label>Title</label>
                                                <input name="title" placeholder="Title" value="<?php echo $row["title"] ?>">
                                                <label>Price</label>
                                                <input name="price" type="number" placeholder="Price" value="<?php echo $row["price"] ?>">
                                                <label>Description</label>
                                                <textarea name="description" placeholder="Description"><?php echo $row["description"] ?></textarea>
                                                <p>Current product photo (Click if you want to replace it):</p>
                                                <img src="upload/<?php echo $productid ?>.<?php echo $row["ext"] ?>" width="100%" style="cursor: pointer; border-radius: 10px;" onclick="$('#productimageupdate').click()">
                                                <input type="file" name="productimage" accept="image/*" id="productimageupdate" style="display: none;">
                                                <input  name="updateproduct" type="submit" value="Update" class="submitbutton">
                                            </form>
                                            
                                            <p><i class="fa fa-link"></i> Click <a class="textlink" href="<?php echo $baseurl ?>?product=<?php echo $productid ?>">here</a> to view this product.</p>
                                            <p style="color: red"><i class="fa fa-trash"></i> Or click <a class="textlink" href="<?php echo $baseurl ?>?dashboard&delete=<?php echo $productid ?>">here</a> to delete it.</p>
                                            <?php
                                            
                                        }
                                        ?>
                                        </div>
                                        <?php
                                    }
                                    
                                    if(isset($_GET["delete"])){
                                        ?>
                                        <div class="dbp dbp0">
                                        <?php
                                        $productid = mysqli_real_escape_string($connection, $_GET["delete"]);
                                        
                                        $ext = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM $tableproducts WHERE productid='$productid' "))["ext"];
                                        
                                        if($userid == mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM $tableproducts WHERE productid='$productid' "))["userid"]){

                                            if(file_exists("upload/" . $productid . "." . $ext))
                                                unlink("upload/" . $productid . "." . $ext);
                                            if(file_exists("upload/" . $productid . "-thumb" . "." . $ext))
                                                unlink("upload/" . $productid . "-thumb" . "." . $ext);
                                                
                                            mysqli_query($connection, "DELETE FROM $tableproducts WHERE productid = '$productid' AND userid = '$userid'");
                                            
                                            ?>
                                            <p>Product has been successfully deleted.</p>
                                            <script>
                                                setTimeout(function(){
                                                    location.href = "<?php echo $baseurl ?>?dashboard"
                                                }, 1000)
                                            </script>
                                            <?php
                                            
                                        }else{
                                            ?>
                                            <p>You are not authorized!</p>
                                            <?php
                                        }
                                        
                                        ?>
                                        </div>
                                        <?php
                                    }
                                    
                                    ?>
                                </div>
                            </div>
                            
                            
                            <script>
                                
    
                                function dbpage(num){
                                    $(".dbp").hide()
                                    $(".dbp" + num).show()
                                }
                                
                                dbpage(1)
    
                                
                                <?php
                                if(isset($_POST["addnew"]) || isset($_POST["updateprofile"]) || isset($_GET["edit"]) || isset($_GET["delete"])){
                                    ?>
                                    dbpage(0)
                                    <?php
                                }
                                ?>
                                
                            </script>
                            <?php
                            
                            
                        }else{
                            
                            ?>
                            <p align="center">You must login first to access this page.</p>
                            <?php
                        }
                        
                        ?>
                    </div>
                    <?php
                }else if(isset($_GET["product"])){
                    
                    $productid = mysqli_real_escape_string($connection, $_GET["product"]);
                    $sql = "SELECT * FROM $tableproducts WHERE productid = '$productid'";
                    $result = mysqli_query($connection, $sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_assoc($result);
                        $sellerid = $row["userid"];
                        $sellerinfo = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM $tableusers WHERE userid = '$sellerid'"));
                        
                        ?>
                        <div class="middlebox">
                            <div class="singleproductholder">
                                <div class="singleproductrow sprleft">
                                    <div class="bigproductimage">
                                        <img src="upload/<?php echo $row["productid"] ?>.<?php echo $row["ext"] ?>" width="100%">
                                    </div>
                                </div>
                                <div class="singleproductrow">
                                    <div class="sprright">
                                        <h1><?php echo $row["title"] ?> <span style="font-size: 14px;">Just for</span> <span style="color: <?php echo $primarycolor ?>"><i class="fa fa-tag"></i>$<?php echo $row["price"] ?></span></h1>
                                        <h4><span style="font-size: 12px;">Added by</span> <a class="textlink" href="<?php echo $baseurl ?>?user=<?php echo $sellerid ?>"><i class="fa fa-user"></i> <?php echo $sellerinfo["name"] ?></a> <span style="font-size: 12px;">from</span> <i class="fa fa-map-marker"></i> <?php echo $sellerinfo["address"] ?></h4>
                                        <p><?php echo $row["description"] ?></p>
                                        <a href="https://wa.me/<?php echo $sellerinfo["phone"] ?>?text=Hi, I came across this link <?php echo $baseurl . "?product=" . "$productid" ?> and I want to ask some questions..."><div class="chatbutton"><i class="fa fa-whatsapp"></i> Chat Now</div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        
                    }else{
                        ?>
                        <p align="center">There is nothing here, sir.</p>
                        <?php
                    }
                }else if(isset($_GET["user"])){
                    
                    $userid = mysqli_real_escape_string($connection, $_GET["user"]);
                    $sql = "SELECT * FROM $tableusers WHERE userid = '$userid'";
                    $result = mysqli_query($connection, $sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_assoc($result);
                        ?>
                        
                        <div class="middlebox">
                            
                            <h1>Products added by <?php echo $row["name"] ?></h1>
                            <p><i class="fa fa-map-marker"></i> <?php echo $row["address"] ?></p>
                            
                            <?php
                            $sql = "SELECT * FROM $tableproducts WHERE userid = '$userid' ORDER BY id DESC";
                            $result = mysqli_query($connection, $sql);
                            if(mysqli_num_rows($result) > 0){
                                while($productrow = mysqli_fetch_assoc($result)){
                                    
                                    ?>
                                    <a href="<?php echo $baseurl ?>?product=<?php echo $productrow["productid"] ?>">
                                        <div class="productthumbnail">
                                            <div class="thumbnailimage" style="margin-bottom: 10px; background: url(upload/<?php echo $productrow["productid"] ?>-thumb.<?php echo $productrow["ext"] ?>) no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;">
                                                <div style="display: inline-block;">
                                                    <div class="pricetag"><i class="fa fa-tag"></i> $<?php echo $productrow["price"] ?></div>
                                                </div>
                                            </div>
                                            
                                            
                                            <h3 style="margin: 0px;"><?php echo $productrow["title"] ?></h3>
                                            
                                            
                                            <h5 style="margin: 0px;"><i class="fa fa-user"></i> <?php echo $row["name"] ?></h5>
                                            <div class="shorttext">
                                                <?php echo $productrow["description"] ?>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                }
                            }else{
                                ?>
                                <p align="center">Coming soon!</p>
                                <?php
                            }
                            ?>
                            
                        </div>
                        
                        <?php
                    }else{
                        ?>
                        <p align="center">There is nothing here, sir.</p>
                        <?php
                    }
                    
                }else if(isset($_GET["about"])){
                    
                    ?>
                    <div class="middlebox">
                        <img src="images/woman.jpg" width="100%">
                        <h1>About</h1>
                        <p>Statistics from e-commerce platform JD show that from January to March, sales of baking staples such as cream, yeast, butter and flour rose by 321 percent year-on-year, and those for utensils, including egg beaters, spatulas, greaseproof paper and flour sifters, grew by 360 percent.</p>
                        <p>Baking is taking the internet by storm, as people look for ways to occupy themselves and reduce stress.</p>
                        <h3>Features</h3>
                        
                        <ul>
                            <li>Mobile Friendly</li>
                            <li>Look amazing on every screen with a mobile-friendly version of your website.</li>
                            <li>Drag and Drop</li>
                            <li>Change, customize or add anything to your site.</li>
                            <li>Host your own business.  Free with any of our plans! Just hit publish, and get your website and files online instantly.</li>
                            <li>Start selling from your online store! Use PayPal or other payment options to accept major credit cards. 100% commission free from us.</li>
                        </ul>
                        
                        
                        <p>Our direction will be highlight that the lockdown has caused many to loose jobs and the way business is conducted is changed forever.</p>
                    </div>
                    <?php
                    
                }else if(isset($_GET["search"])){
                    ?>
                    <div class="middlebox">
                        <form method="post" action="<?php echo $baseurl ?>?search">
                            
                            <div id="searchbox">
                                <div class="sbitem" style="width: 50px;">
                                    <i class="fa fa-search"></i>
                                </div>
                                <div class="sbitem">
                                    <input name="search" placeholder="What are you looking for?" style="outline: none; border: none; background-color: inherit; margin: 0px;">
                                </div>
                                <div class="sbitem" style="width: 100px;">
                                    <input type="submit" value="Find it!" style="background-color: <?php echo $primarycolor ?>; margin: 0px; color: white; border-radius: 20px; outline: none;">
                                </div>
                            </div>
                            
                            
                            <?php
                            if(isset($_POST["search"])){
                                
                                $query = mysqli_real_escape_string($connection, $_POST["search"]);
                                
                                $sql = "SELECT * FROM $tableproducts WHERE title LIKE '%$query%' OR description LIKE '%$query%' ORDER BY id DESC";
                                $result = mysqli_query($connection, $sql);
                                if($query != ""){
                                    if(mysqli_num_rows($result) > 0){
                                        ?>
                                        <h3 align="center" style="margin: 30px;">Search results:</h3>
                                        <?php
                                        while($row = mysqli_fetch_assoc($result)){
                                            $uid = $row["userid"];
                                            $sellername = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM $tableusers WHERE userid = '$uid'"))["name"];
                                            
                                            ?>
                                            <a href="<?php echo $baseurl ?>?product=<?php echo $row["productid"] ?>">
                                                <div class="productthumbnail">
                                                    <div class="thumbnailimage" style="margin-bottom: 10px; background: url(upload/<?php echo $row["productid"] ?>-thumb.<?php echo $row["ext"] ?>) no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;">
                                                        <div style="display: inline-block;">
                                                            <div class="pricetag"><i class="fa fa-tag"></i> $<?php echo $row["price"] ?></div>
                                                        </div>
                                                    </div>
    
                                                    <h3 style="margin: 0px;"><?php echo $row["title"] ?></h3>
    
                                                    <h5 style="margin: 0px;"><i class="fa fa-user"></i> <?php echo $sellername ?></h5>
                                                    <div class="shorttext">
                                                        <?php echo $row["description"] ?>
                                                    </div>
                                                </div>
                                            </a>
                                            <?php
                                        }
                                    }else{
                                        ?>
                                        <h3 align="center" style="margin: 30px;">Search results:</h3>
                                        <p align="center">Nothing found.</p>
                                        <?php
                                    }
                                }else{
                                    ?>
                                    <h3 align="center" style="margin: 30px;">Search results:</h3>
                                    <p align="center">Nothing found.</p>
                                    <?php
                                }
                            }
                            ?>
                            
                        </form>
                    </div>
                    <?php
                }else{
                    
                    ?>
                    <div style="text-align: center;">
                    <?php
                    
                    $sql = "SELECT * FROM $tableproducts ORDER BY id DESC";
                    $result = mysqli_query($connection, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $uid = $row["userid"];
                            
                            
                            $sellername = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM $tableusers WHERE userid = '$uid'"))["name"];
                            
                            ?>
                            <a href="<?php echo $baseurl ?>?product=<?php echo $row["productid"] ?>">
                                <div class="productthumbnail">
                                    <div class="thumbnailimage" style="margin-bottom: 10px; background: url(upload/<?php echo $row["productid"] ?>-thumb.<?php echo $row["ext"] ?>) no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;">
                                        <div style="display: inline-block;">
                                            <div class="pricetag"><i class="fa fa-tag"></i> $<?php echo $row["price"] ?></div>
                                        </div>
                                    </div>
                                    <h3 style="margin: 0px; display: block;"><?php echo $row["title"] ?></h3>
                                    <h5 style="margin: 0px;"><i class="fa fa-user"></i> <?php echo $sellername ?></h5>
                                    <div class="shorttext">
                                        <?php echo $row["description"] ?>
                                    </div>
                                </div>
                            </a>
                            <?php
                        }
                    }else{
                        ?>
                        <p align="center">Coming soon!</p>
                        <?php
                    }
                    ?>
                    </div>
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
                <div class="footeritem"><a href="<?php echo $baseurl ?>?about">About</a></div>
            </div>
            
            <div style="margin: 30px;">
                <p style="font-size: 10px;">Copyright 2020. All rights reserved.</p>
            </div>
        </div>
        
        <script>
        
            function toggleDrawer(){
                $("#appbarmenu").toggle()
            }
            
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