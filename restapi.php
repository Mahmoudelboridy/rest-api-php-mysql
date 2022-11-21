<?php
$con=mysqli_connect('localhost','root','','lr');
$sql="SELECT * FROM `users`";
$result=mysqli_query($con,$sql);
$users=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo "<pre>";
print_r($users);
echo "</pre>";
?>