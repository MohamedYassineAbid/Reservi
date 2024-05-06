<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="./styles/eventsStyles.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <script>
        window.onload = function () {
            var blogBoxes = document.querySelectorAll('.blog-box');

            var maxHeight = 0;
            blogBoxes.forEach(function (box) {
                maxHeight = Math.max(maxHeight, box.offsetHeight);
            });
            blogBoxes.forEach(function (box) {
                box.style.height = maxHeight + 'px';
            });
        };
        function RSVP(buttonId) {
            var button = document.getElementById(buttonId);
            button.classList.toggle('tick');
            if (button.classList.contains('tick')) {
                button.textContent = 'RSVP';

            } else {
                button.textContent = 'RSVP';
            }
        }
    </script>
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
    <section id="blog">
        
        <div class="blog-container">
            <?php
            $conn = mysqli_connect("localhost", "root", "", "reservidb");

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
            }

            $sql = "SELECT * FROM events";
            $result = mysqli_query($conn, $sql);
            $counter = 1;

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='blog-box'>";
                    echo "<div class='blog-img'>";
                    echo "<img src='" . $row['poster'] . "' height='200px' alt='Event Image'>";
                    echo "</div>";
                    echo "<div class='blog-text'>";
                    echo "<span>" . $row['DateEV'] . " / " . $row['location'] . "</span>";
                    echo "<a href='#' class='blog-title'>" . $row['Name'] . "</a>";
                    echo "<p>" . $row['description'] . "</p>";
                    echo "<a href='" . $row['link'] . "'>" . "Read More!" . "</a>";
                    if (isset($_SESSION['first'])) {
                        $button_id = 'rsvp-button' . $counter;
                        echo " <div class='rsvp'><p id='$button_id' onclick='RSVP(\"$button_id\")' class='rsvp-button'>RSVP</p></div>";
                        $counter++;

                    }
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "No events found.";
            }

            // Close database connection
            mysqli_close($conn);
            ?>
        </div>
    </section>
</body>

</html>
