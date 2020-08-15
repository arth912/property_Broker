<html>
<head>
  <title>wait for sign in</title>
  <link rel="stylesheet" types="text/css" href="css/stylesignin.css">
</head>
<body>
<?php
$email= $_POST['mail'];
$password=$_POST['pass'];

$email=stripcslashes($email);
$password=stripcslashes($password);

$dbconnect=mysqli_connect('localhost','root','','houseprice');

$result=mysqli_query($dbconnect,"SELECT * FROM `signup` WHERE `email`='$email'and `password`=$password")
          or die("failed to query database".mysql_error());
$row=mysqli_fetch_assoc($result);
if($row['email']==$email && $row['password']==$password)
{
  echo "login successfully";
}
else{
  echo "failed to login.";
}
?>
</body>
</html>
