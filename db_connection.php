<?php
//Connection Varible to connect to database
//$server = "mysql://jhdjjtqo9w5bzq2t.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/vkac8ptr4kpcx1ro";
//$username = "vtai6x4446z2gup1";
//$password = "n4izema0m1f9cjgh";

$server = "jhdjjtqo9w5bzq2t.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "vtai6x4446z2gup1";
$password = "n4izema0m1f9cjgh";
$database = "vkac8ptr4kpcx1ro";


//Connnection String to database
$mysqli = new mysqli($server, $username, $password, $database);
?>
