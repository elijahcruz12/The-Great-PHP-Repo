<?php
/*  PHP MySQLi Login V1
*   Created by: Elijah Cruz
*   Last Updated: January 25th, 2018
*/

//This file is just to link AND verify that you are logged in.

//Here we add the sql.php file
include_once("sql.php");

//The login works via php sessions.
if($_SESSION['loggedin'] == 1 && !empty($_SESSION['username'])){
    
}
elseif($_SESSION['loggedin'] != 1 || empty($_SESSION['username'])){
    //If not logged in
?>
<h1>You are Not Logged in.</h1>
<p>You may <a href="login.php">Click Here</a> to login or <a href="register.php">Click Here</a> to register.</p>
<?php
}
?>