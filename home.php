<?php
    session_start();
    if(isset($_SESSION['first'])){
        $username = $_SESSION['first'];
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/homeStyles1.css">
    <link rel="stylesheet" href="./styles/contactStyles.css">
    <link rel="stylesheet" href="./styles/aboutStyles.css">
</head>

<body>
    <nav>
        <ul>
            <li><a class="logo" href="home.php"><img class="logo" src="./img/reservi_logo.png" alt=""></a></li>
            <li><a class="navButtons" href="home.php">Home</a></li>
            <li><a class="navButtons" href="events.php">Events</a></li>
            <li><a class="navButtons" href="contact.php">Contact</a></li>
            <li><a class="navButtons" href="about.php">About</a></li>
        </ul>
        <?php 
         if(isset($username)) : ?>
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
            <table class="createEvent">
                <tr><td></td></tr>
                <tr><td><h2>Create your event</h2></td>        
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <button class="crebutton"><a href="createEvent.php" class="createButtonText">CREATE</a></button>
                </td></tr> 
            </table>
        </div>

</body>
</html>