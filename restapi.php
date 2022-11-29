<?php
$con=mysqli_connect('127.0.0.1','root','','lr');
$sql="SELECT * FROM `users`";
$result=mysqli_query($con,$sql);
$users=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo "<pre>";
print_r($users);
echo "</pre>";
?>