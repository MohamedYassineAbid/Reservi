<!DOCTYPE html>
<html>

<head>

	<title>Reservi Login</title>
	<link rel="stylesheet" href="./styles/logstyle.css">
</head>
<?php
		session_start();
// Establish database connection
$con = mysqli_connect("localhost", "root", "", "reservidb");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
    $myusername = isset($_POST['first']) ? $_POST['first'] : '';
    $mypassword = isset($_POST['psw']) ? $_POST['psw'] : '';
  
    $sql = "SELECT * FROM accounts WHERE username = '$myusername' AND Passw = '$mypassword'";
    $result = mysqli_query($con, $sql);


    $count = mysqli_num_rows($result);

$test=false;
$error_ms = '';
    if ($count == 1) {
		$_SESSION['first'] = $myusername;
        header("Location: home1.php");
    } else {
		$test=true;
        $error_ms  = "<b>Your Login Name or Password is invalid</b>";
       
    }

mysqli_close($con);
?>

<body >
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
			<!--<div id="error_ms" name="error_ms">
               <?php  echo "$error_ms" ;?>
            </div>-->
		</form>
		<p>Not registered?
			<a href="registration.php" style="text-decoration: none;">
				Create an account
			</a>
		</p>
	</div>
</body>

</html>