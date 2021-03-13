<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head><?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<input type="text" name="calsi" placeholder="Enter a text">
<button onclick="window.location.href='admin.html'">submit</button><br>
<a href="logout.php">Logout</a>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
 </html>