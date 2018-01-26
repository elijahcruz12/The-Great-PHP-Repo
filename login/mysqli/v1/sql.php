<?php
//This grants connection to the database.
//You can also create your connection in a different way as well.

//Please note that the login and database used are because C9.io was used for working on this repo.

$servername = "localhost"; //Use localhost or IP
$username = "ecwebservices"; //Username to connect with
$password = ""; //Leave blank if no password
$database = "c9"; //Database that the login is stored.

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?> 