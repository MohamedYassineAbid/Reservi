<?php
session_start();
if (!isset($_SESSION['first'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit(); // Stop script execution after redirect
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservidb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['event'], $_POST['des'], $_POST['loc'], $_POST['dat'])) {
    $event = $_POST['event'];
    $des = $_POST['des'];
    $loc = $_POST['loc'];
    $dat = $_POST['dat'];
    $link = $_POST['link'];
    $file_name = $_FILES['poster']['name'];
    $file_tmp = $_FILES['poster']['tmp_name'];
    $file_size = $_FILES['poster']['size'];
    $file_type = $_FILES['poster']['type'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allowed_extensions = array("jpg", "jpeg", "png");
    if(in_array($file_ext, $allowed_extensions)) {
        $upload_dir = 'poster_images/';
        $upload_dir = 'poster_images/';
        $file_path = 'poster_images/' . $file_name;
        $absolute_path = $_SERVER['DOCUMENT_ROOT'] . '/project/ReserviFinal/' . $file_path;
            if(move_uploaded_file($file_tmp, $file_path)) {
            $sql = "INSERT INTO `events`(`name`,`dateEV` ,`location`, `description`, `poster`,`link`) VALUES ('$event','$dat','$loc','$des','$file_path','$link')";
            if (mysqli_query($conn, $sql)) {
                header("Location: sucess.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "Invalid file format. Please upload a JPG, JPEG, or PNG file.";
    }
} else {
    echo "Please fill in all the required fields .";
}

// Close connection
mysqli_close($conn);
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Creation</title>
    <link rel="stylesheet" href="./styles/createEvent.css">
</head>

<body>
    <div class="main">

        <img src="./img/reservi_logo.png" alt="">
        <form action="createEvent.php" enctype="multipart/form-data" method="POST">
            <label for="event">
                Event Name
            </label>
            <input type="text" id="event" name="event" placeholder="Enter your Event Name" required>

            <label for="des">Event Description</label>
            <input type="text" id="des" name="des" placeholder="Enter your Event Description" required>

            <label for="loc">Event Location</label>
            <input type="text" id="loc" name="loc" placeholder="Enter The Event Location" required>

            <label for="dat">Event Date</label>
            <input type="date" id="dat" name="dat" required>
            
            <label for="link">Event Link</label>
            <input type="text" id="link" name="link" placeholder="Enter The Event Link" required>
            <label for="poster">Event Image Poster</label>
            <input type="file" id="poster" name="poster" accept=".jpg, .jpeg, .png" required>
            <div class="wrap">
                <button type="submit">
                    Submit
                </button>
            </div>
            <p><a href="home.php"><B><I><H3>HOME</H3></I></B></a></p>

            <!--<div id="error_ms" name="error_ms">
            <?php echo "$error_ms"; ?>
            </div>-->
        </form>
    </div>
</body>

</html>