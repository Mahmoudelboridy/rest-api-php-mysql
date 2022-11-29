<?php
session_start();
if(isset($_SESSION['username'])){

echo "welcome ".$_SESSION['username']; 
echo "<br>";
echo "u password ".$_SESSION['password']; 
echo "<br>";
echo "u email ".$_SESSION['email']; 
}
else{
    echo "login again to continue";
}
?>