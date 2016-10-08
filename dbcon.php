<?php
$connection = mysql_connect("localhost","root","");
if(!connection){
    die("Error occured ".mysql_error());
}
mysql_select_db("login",$connection);
$sql="INSERT INTO users (username,password,address,telephone,bloodgroup) VALUES ('$_POST[username]','$_POST[password]','$_POST[address]','$_POST[telephone]','$_POST[bloodgroup]')";
if(!mysql_query($sql,$connection)){
    die("Error occured ".mysql_error());
}
echo "one data added";
mysql_close($connection);
?>