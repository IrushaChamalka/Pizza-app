<?php 

$servername = "localhost";
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "pizza"; // Your database name

$conn = mysqli_connect($servername , $username , $password , $dbname);

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<?php include('templates/footer.php'); ?>

</html>