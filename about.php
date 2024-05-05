<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/aboutStyles.css">
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
        <?php if (isset($username)): ?>
            <ul class="login">
                <li><a class="navButtons" href="#"><?php echo "$username" ?></a></li>
                <li><a class="navButtons" href="logout.php">Logout</a></li>
            </ul>
        <?php else: ?>
            <ul class="login">
                <li><a class="navButtons" href="login.php">Login</a></li>
                <li><a class="navButtons" href="registration.php">SignUp</a></li>
            </ul>
        <?php endif; ?>
    </nav>
    <div class="main">
        <div class="aboutTitle">
            About
        </div>
        <div class="aboutMain">
            Welcome to <b>Reservi</b>, where RSVPing for real-world events is made easy. Created by Omar Bouattour and
            Mohamed Yassine Abid, our platform simplifies event registration, from conferences to social gatherings.
            Join us and make attending events effortless!
        </div>
    </div>
</body>

</html>