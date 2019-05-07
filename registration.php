<?php 

session.start();

$con = mysqli_connect('localhost','root', '123456 ' );

mysqli_select_db($con,'userRegistration');

$name = $_POST ['user'];
$pass = $_POST ['password'];

$s = "select * from usertable where name ='$name' ";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($results);

if ($num ==1){



}else{

$reg = " insert into usertable(name,password) values ('$name','$pass')";
mysqli_query($con,$reg);
echo  "Registration SUccesful";


?>