<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, 
						initial-scale=1.0">
	<title>Registation Page</title>
	<link rel="stylesheet"
		href="style.css">
</head>

<body>
	<header>
		<h1 class="heading">Pentecost Student and Associate(Pensa KsTU )</h1>
		<h3 class="title">Login & Registration Form</h3>
	</header>

	<!-- container div -->
	<div class="container">

		<!-- upper button section to select
			the login or signup form -->
		<div class="slider"></div>
		<div class="btn">
			<button class="login">Login</button>
			<button class="signup">Register</button>
		</div>

		<!-- Form section that contains the
			login and the signup form -->
		<div class="form-section">
           <form action="" method="">
			<!-- login form -->
			<div class="login-box">
				<input type="email"
					class="email ele"
					placeholder="youremail@email.com">
				<input type="password"
					class="password ele"
					placeholder="password">
				<button class="clkbtn">Login</button>
			</div>
			</form>

			<!-- signup form -->
            <form action="register2.php" method="POST">
			<div class="signup-box">
                <h2 class="personal">Personal Information</h2>
				<input type="text" class="name ele" placeholder="Enter your  First name" name="fname" required>

				<input type="text" class="name ele" placeholder="Enter your  Last name" name="lname" required>

                <input type="date" class="name ele" placeholder="Enter your  Date of birth" name="date" required>


				
                <input type="submit" class="clkbtn" value="Next">
                </form>

				
			</div>
		</div>
	</div>
	<script src="form.js"></script>
</body>
</html>
