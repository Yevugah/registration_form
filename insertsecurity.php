<?php

include 'conn.php';
$username =$_REQUEST['username'];
$password =$_REQUEST['pass'];
$cpassword = $_REQUEST['cpass'];
if($password!==$cpassword){
    echo"Password mismatch";

}else{

$sql = "INSERT INTO securitydata VALUES('$username','$password')";
if (mysqli_query($con, $sql)){
	echo "Your data is secured. Thank you!!!!!";
	
}else{
	echo "Data is not inserted".mysqli_query_error($sql);
}
}

?>