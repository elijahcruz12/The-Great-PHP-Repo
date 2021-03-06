<?php
//The login page
//
//Lets check if we are logged in. If we are, we redirect to the index.php
if(!empty($_SESSION['loggedin']) && !empty($_SESSION['username'])){
header("Location: index.php");
}

?>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            /* Bordered form */
            form {
                border: 3px solid #f1f1f1;
            }
            
            /* Full-width inputs */
            input[type=text], input[type=password] {
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
    if(empty($_SESSION['loggedin'])){
        //Show the login form
        ?>
        
        <h1>Login</h1>
        
        <form action="login.php" method="post">
            <div class="container">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
        
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
        
                <button type="submit">Login</button>
            </div>
        </form>
        
        <?php
    }
    
    ?>
    </body>
</html>