<?php
include('configuration.php');
?>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact=$_POST['contact'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
     $sql = "INSERT INTO `users` (`username`, `email`,`contact` `gender`, `city`) VALUES ('$username', '$email', '$contact',$gender', '$city')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>forms</title>
</head>
<body>
	<form method="POST" action="index.php">
	USERNAME<input type="text" name="username"  required><br>
	EMAIL<input type="email" name="email" required><br>
	CONTACT<input type="number" name="contact" maxlength="4" required><br>
	GENDER  Male<input type="radio"  name="gender" value="male">
	Female<input type="radio"  name="gender" value="female" >
	other<input type="radio" name="gender" value="other">
	<br>
	SELECT CITY<select name="city">
		<option value="Mumbai">Mumbai</option>
		<option value="Delhi">Delhi</option>
		<option value="Jaipur">Jaipur</option>
		<option value="Mussoorie" >Mussoorie</option>
		<option value="Nanital">Nanital</option>
		<option value="Chennai">Chennai</option>
		<option value="Pune" >Pune</option>
		<option value="Bangalore">Bangalore</option>
		<option value="Hyderabad">Hyderabad</option>
		<option value="Lucknow">Lucknow</option>
	</select><br>
	
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>