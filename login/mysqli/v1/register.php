<?php
//The login page

// Turns the POST into easier variables.
$username = $_POST['uname'];
$password = $_POST['psw'];
$email = $_POST['email'];

var_dump($username);
var_dump($password);

//For dev purposes the salt for the passwordcrypt is the email is the email.
?>
<html>
    <head>
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            /* Bordered form */
            form {
                border: 3px solid #f1f1f1;
            }
            
            /* Full-width inputs */
            input[type=text], input[type=password], input[type=email] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            
            /* Set a style for all buttons */
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            
            /* Add a hover effect for buttons */
            button:hover {
                opacity: 0.8;
            }
            
            /* Add padding to containers */
            .container {
                padding: 16px;
            }
        </style>
    </head>
    <body>
<?php
if(!empty($_POST['uname']) && !empty($_POST['password'])){
    //Using the post can make it easier for the if statment above.
    
    //Now lets encrypt the password.
    
?>
<?php
}
else{
?>

    <?php
    //Here we add the sql.php file
    include_once("sql.php");
    
    if(!empty($_SESSION['loggedin']) && !empty($_SESSION['username'])){
        //You are logged in.
    ?>
        <h1>Error</h1>
        <p>You are logged in.</p>
    <?php
    }
    elseif(!empty($username) && !empty($password)){
        //If we have actually posted the form already.
        $usercheck = mysqli_query($sql, "SELECT * FROM USERS LIMIT 1 WHERE username='".$username."'");
        if(mysqli_num_rows($usercheck) == 0){
            //We did not found a user
            
            //Pass the Email through md5
            $salt = "$2y$05$".md5($email)."$";
            //Now we crypt the password using the salt. This is done with blowfish.
            $cryptpass = crypt($password, $salt);
            //Now we can insert the details into the db
            mysqli_query("INSERT INTO users (username, password, email)
VALUES ('".$username."', '".$cryptpass."', '".$email."');");

            //Verify that the user was entered
            $finalcheck = mysqli_query($sql, "SELECT * FROM USERS LIMIT 1 WHERE username='".$username."'");
            if(mysqli_num_rows($usercheck) > 0){
                echo "Done.";
            }
        }
    }
    else{
        //Show the register form
        ?>
        
        <h1>Register</h1>
        
        <form action="register.php" method="post">
            <div class="container">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
        
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                
                <label><b>Email</b></label>
                <input type="email" placeholder="Enter an Email" name="email" required>
                
        
                <button type="submit">Login</button>
            </div>
        </form>
        
        <?php
    }
}
    ?>
    
    </body>
</html>