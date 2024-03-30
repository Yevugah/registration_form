
<?php

include 'conn.php';
$fname =$_REQUEST['fname'];
$lname =$_REQUEST['lname'];
$DOB = $_REQUEST['date'];

$sql = "INSERT INTO contact VALUES('$fname','$lname','$DOB')";
if (mysqli_query($con, $sql)){
	echo "Data has been inserted successfully. Check you data base to confirm.....";
	
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
            <form action="security.php">
			<div class="signup-box">
                <h2 class="personal">Contact Information</h2>
				<input type="text" class="name ele" placeholder="Enter your telephone number" name="telephone" required>

				<input type="email" class="name ele" placeholder="Enter your  email" name="email" required>

                <input type="textarea" class="name ele" placeholder="Location" name="location" required>


				
                <input type="submit" class="clkbtn" value="Next">
                </form>

				
			</div>
		</div>
	</div>
	<script src="form.js"></script>
</body>
</html>
