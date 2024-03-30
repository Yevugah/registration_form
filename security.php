<?php

include 'conn.php';
$telephone =$_REQUEST['telephone'];
$email =$_REQUEST['email'];
$location = $_REQUEST['location'];

$sql = "INSERT INTO registration1 VALUES('$telephone','$email','$location')";
if (mysqli_query($con, $sql)){
	echo "Thank you you have also get you contact data. Kindly provide your security information.. ";
}else{
	echo "Data is not inserted".mysqli_query_error($sql);
}

?>



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
		<h3 class="title"> Registration Form</h3>
	</header>

	<!-- container div -->
	<div class="container">

		<!-- upper button section to select
			the login or signup form -->
	
	


		<!-- Form section that contains the
			login and the signup form -->
		<div class="form-section">

		

			<!-- signup form -->
            <form action="insertsecurity.php" method="POST">
			<div class="signup-box">
                <h2 class="personal">Security Information</h2>
				<input type="text" class="name ele" placeholder="Enter your username" name="username" required>

				<input type="password" class="name ele" placeholder="Enter your password" name="pass" required>

                <input type="password" class="name ele" placeholder="Confirm password" name="cpass" required>


				
                <input type="submit" class="clkbtn" value="Save">
                </form>

				
			</div>
		</div>
	</div>
	<script src="form.js"></script>
</body>
</html>
