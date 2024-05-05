<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/contactStyles.css">
</head>
<?php
    session_start();
    if(isset($_SESSION['first'])){
        $username = $_SESSION['first'];
    }
    ?>


<body>
<nav>
        <ul>
            <li><a class="logo" href="home.php"><img class="logo" src="./img/reservi_logo.png" alt=""></a></li>
            <li><a class="navButtons" href="home.php">Home</a></li>
            <li><a class="navButtons" href="events.php">Events</a></li>
            <li><a class="navButtons" href="contact.php">Contact</a></li>
            <li><a class="navButtons" href="about.php">About</a></li>
        </ul>
        <?php if(isset($username)) : ?>
        <ul class="login">
            <li><a class="navButtons" href="#"><?php echo"$username" ?></a></li>
            <li><a class="navButtons" href="logout.php">Logout</a></li></ul>
        <?php else : ?>
            <ul class="login">
            <li><a class="navButtons" href="login.php">Login</a></li>
            <li><a class="navButtons" href="registration.php">SignUp</a></li></ul>
        <?php endif; ?>
    </nav>
    <div class="main">
        <div class="contactTitle">
                Contact
        </div>
        <div class="contactMain">
            <b>Tel.</b> +216 22333444<br>
            Reservi@gmail.com<br>
            <b>LinkedIn.</b> Reservi Foundation<br>
            <b>Location.</b> Rte manzel chaker Sfax

        </div>
    </div>
</body>
</html>