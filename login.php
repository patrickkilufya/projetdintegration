<?php
$resultat=isset($_GET['controle'])? $_GET['controle'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Projet D'integration</title>
    <link rel="stylesheet" href="css/login-style.css">
    <link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300,200' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- For-Mobile-Apps-and-Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Dark Sign In Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //For-Mobile-Apps-and-Meta-Tags -->

</head>

<body>
<h1>AUTHENTIFICATION</h1>
<div class="container">
    <h2>Identifier Vous</h2>
    <?php

    switch ($resultat){
        case 3:
            echo "<div class='error'><h4 class='log'>Username or Password Incorrect</h4></div>";
            break;
        case 2:
            echo "<div class='success'><h3>Enregistrement Effectuer...</h3></div>";
            break;

    }
    ?>
    <form method="post" action="login_text.php">
        <input type="text" class="name" placeholder="Username" required="" name="username">
        <input type="password" class="password" placeholder="Password" required="" name="password">
        <ul>
            <li>
                <input type="checkbox" id="brand1" value="">
                <label for="brand1"><span></span>Remember me</label>
            </li>
        </ul>
        <a href="#">Forgot Password?</a><br>
        <div class="clear"></div>
        <input type="submit"  name="login2" value="SIGN IN">
    </form>
</div>
<div class="footer">
    <p> &copy; 2019 Reseau telecom. All Rights Reserved ISP</p>
</div>
</body>
</html>