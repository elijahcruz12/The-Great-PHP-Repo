<?php
//The login page
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
    //Here we add the sql.php file
    include_once("sql.php");
    
    if(!empty($_SESSION['loggedin']) && !empty($_SESSION['username'])){
        //You are logged in.
    ?>
        <h1>Error</h1>
        <p>You are logged in.</p>
    <?php
    }
    else{
        //Show the loggin form
        ?>
        
        <h1>Login</h1>
        
        <form action="action_page.php">
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