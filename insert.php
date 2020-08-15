<?php

$email= $_POST['email'];
$password= $_POST['Password'];
$f_name= $_POST['first_Name'];
$s_name= $_POST['second_Name'];
$surname= $_POST['Surname'];
$mobile_no= $_POST['Mobile_No'];
$country= $_POST['Country'];
$state= $_POST['State'];
$address= $_POST['Address'];

$dbconnect=mysqli_connect('localhost','root','','houseprice');
$sql="INSERT INTO `signup`(`email`, `password`, `first name`, `second name`, `surname`, `mobile no`, `country`, `state`, `address`, `user id`) VALUES('$email','$password','$f_name','$s_name','$surname','$mobile_no','$country','$state','$address','')";
$run = mysqli_query( $dbconnect,$sql);
if($run==TRUE){
  echo "your account is successfully created ";
}
else{
  echo "error occure, Try again ";
}
?>
