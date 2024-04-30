<!DOCTYPE html>
<html>

<head>

	<title>Reservi Login</title>
	<link rel="stylesheet" href="./styles/style.css">
</head>
<?php
// Establish database connection
$con = mysqli_connect("localhost", "root", "", "login");
$error_msg = '';
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
    // Retrieve username and password from POST data
    $myusername = isset($_POST['first']) ? $_POST['first'] : '';
    $mypassword = isset($_POST['psw']) ? $_POST['psw'] : 'no passs';
  /*  echo "Username: $myusername<br>";
    echo "Password: $mypassword<br>";*/
    $sql = "SELECT * FROM accounts WHERE username = '$myusername' AND Passw = '$mypassword'";
    $result = mysqli_query($con, $sql);


    // Check if there is a matching user
    $count = mysqli_num_rows($result);
/*
    // Print out the SQL query for debugging purposes
    echo "SQL Query: $sql<br>";

    // Check if there is a matching user
    echo "Number of matching rows: $count<br>";
*/
    if ($count == 1) {
        // User is authenticated
        header("Location: home.html");
    } else {
        // Invalid username or password
        $error_msg  = "<b>Your Login Name or Password is invalid</b>";
        /*echo "<br>Debugging Info: Provided username: $myusername, Provided password: $mypassword";*/
    }

// Close database connection
mysqli_close($con);
?>

<body>
	<div class="main">

		<img src="./img/reservi_logo.png" alt="">
		<form action="login.php" method="POST">
			<label for="first">
				Username:
			</label>
			<input type="text" id="first" name="first" placeholder="Enter your Username" required>

			<label for="psw">Password</label>
			<input type="password" id="psw" name="psw"
				title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
				placeholder="Enter your Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"required>
			<div class="wrap">
				<button type="submit">
					Submit
				</button>
			</div>
			<div id="error_msg" name="error_msg">
               <?php echo "$error_msg" ;?>
            </div>
		</form>
		<p>Not registered?
			<a href="registration.html" style="text-decoration: none;">
				Create an account
			</a>
		</p>
	</div>
</body>

</html>