<?php
$con=mysqli_connect('localhost','root','','lr');
$query="INSERT INTO `second`(name) SELECT (name) FROM `first`";
$result=mysqli_query($con,$query);

?>