<?php
include('config.php');
?>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form method="POST" action="insert.php">
		username:<input type="text" name="username" placeholder="enter your username" required><br>
		E-mail:<input type="E-mail" name="email" placeholder="enter e E-mail" required><br>
		Select gender-
		male<input type="radio" name="gender" value="m">
		female<input type="radio" name="gender" value="f">
		Other<input type="radio" name="gender" value="o">
		<br>
		<label for="phone">Enter your phone number:</label>
<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><br>
		city:-
		<select name="city" id="city">
			<option value="mumbai">mumbai</option>
			<option value="Delhi">Delhi</option>
			<option value="jaipur">jaipur</option>
			<option value="mussoorie">mussoorie</option>
			<option value="nainital">nainital</option>
			<option value="lucknow">lucknow</option>
			<option value="hyderabad">hyderabad</option>
			<option value="pune">pune</option>
			<option value="bangalore">bangalore</option>
			<option value="chennai">chennai</option>
		</select><br>
		<input type="submit" name="sub">
	</form>
</body>
</html>
<?php
if(isset($_POST['sub'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$city=$_POST['city'];
	$contact=$_POST['phone'];
	$sql="INSERT INTO `user` (`username`, `email`, 'contact' , `gender`, `city`) VALUES ('$username', '$email', '$contact' , '$gender', '$city')";
mysqli_query($conn,$sql);
}
else{
	echo "first press submit button";
}
?>