<!DOCTYPE html>
<html>

<head>

    <title>Reservi Registration</title>
    <link rel="stylesheet" href="./styles/logstyle.css">
    <script lang="javascript">
        function solve() {

        }
    </script>
</head>
<?php
$error_msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish database connection
    $con = mysqli_connect("localhost", "root", "", "reservidb");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // Retrieve username and password from POST data
    $myusername = isset($_POST['first']) ? $_POST['first'] : '';
    $mypassword = isset($_POST['psw']) ? $_POST['psw'] : '';
    $myemail = isset($_POST['email']) ? $_POST['email'] : '';
    $myphone = isset($_POST['phone']) ? $_POST['phone'] : '';

    // Check if username already exists
    $check_query = "SELECT * FROM `accounts` WHERE `username` = '$myusername'";
    $check_result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // Username already exists, set error message
        $error_msg = "<b>Username already exists. Please choose a different username.</b>";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO `accounts`(`username`, `Passw`,`email`,`Phone`) VALUES ('$myusername','$mypassword','$myemail','$myphone')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header("Location: login.php");
        }
        // Close database connection
        mysqli_close($con);
    }
}
?>

<body>
    <div class="main">
        <img src="./img/reservi_logo.png" alt="">
        <form action="registration.php" method="POST">
            <label for="first">
                Username:
            </label>
            <input type="text" id="first" name="first" placeholder="Enter your Username" required>

            <label for="psw">Password</label>
            <input type="password" id="psw" name="psw"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                placeholder="Enter your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
            <label for="email">
                Email:
            </label>
            <input type="email" id="email" name="email" placeholder="Enter your Email" required>
            <label for="phone">
                Phone Number:
            </label>
            <input type="text" id="phone" name="phone" placeholder="Enter your Phone number" min ="0" pattern="[0-9]{8}" required>
            <div class="wrap">
                <button type="submit">
                    Submit
                </button>
            </div>
            <div id="error_msg" name="error_msg">
                <?php echo "$error_msg"; ?>
            </div>
			<p><a href="home.php"><B><I><H3>HOME</H3></I></B></a></p>

        </form>
    </div>
</body>

</html>