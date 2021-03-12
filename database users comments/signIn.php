<?php 

include "dbconect.php" ;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signIn.css">
    <title>simpleChat</title>
</head>
<body>
    <header><h1>simpleChat</h1></header>

    <form action="signIn.php" method="post" >
        <div class="inputs">

    <label for="email"></label>
    <input type="email" name="email" placeholder="E-mail">
    <label for=""></label>
    <input type="password" name="password" placeholder="Password" >
    
        </div>

        <div class="buttons">

    <button class="buttCancel" id="buttSub">Cancel</button>
    <label for=""></label>
    <button class="buttSign" id="buttSub">Sign in</button>

        </div>

        <div>
        <a href="signUp.php">Register</a>
        </div>

        </form>

        <footer>
        
        </footer>
</body>
</html>