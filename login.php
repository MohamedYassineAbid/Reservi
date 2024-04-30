<!DOCTYPE html>
<html>

<head>
	<title>Reservi Login</title>
	<link rel="stylesheet"
		href="./styles/style.css">
    <script lang="javascript">
        function solve()
        {
            
        }
    </script>
</head>

<body>
	<div class="main">
		<h1>Reservi.</h1>
		<form action="">
			<label for="first">
				Username:
			</label>
			<input type="text"
				id="first"
				name="first"
				placeholder="Enter your Username" required>

			
            <label for="psw">Password</label>
            <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter your Password" required>
          

			<div class="wrap">
				<button type="submit"
						onclick="solve()">
					Submit
				</button>
			</div>
		</form>
		<p>Not registered? 
			<a href="#"
			style="text-decoration: none;">
				Create an account
			</a>
		</p>
	</div>
</body>

</html>
