<?php
@include 'config.php';
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="">
    <meta http-equiv="">
    <meta name="">
    <title>PassPort - Admin Page</title>
    
    <!--css file-->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header>
        <div>
            <?php include("include/navbar.php"); ?>
        </div>
    </header>

<div class="container">
    <div class="content">
        <h3>Hello, <span>Admin</span></h3>
        <h1>welcome<span></span> </h1>
        <p>this is the admin page</p>
        <a href="login_form.php" class="btn">login</a>
        <a href="register_form.php" class="btn">register</a>
        <a href="logout.php" class="btn">logout</a>


    </div>

</div>

</body>


</html>