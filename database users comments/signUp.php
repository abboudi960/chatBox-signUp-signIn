<?php 

include "dbconect.php" ;

$username = $_POST['name'] ;
$userpass = $_POST['password'] ;
$useremail = $_POST['email'] ;



session_start();

$_SESSION["user_name"] = $username;

$query = "INSERT INTO `users`(`User_name`, `User_pass`, `User_email`) VALUES ('$username','$userpass','$useremail')";

mysqli_query($conn,$query) ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signUp.css">
    <title>simpleChat</title>
</head>
<body>

    <header><h1>simpleChat</h1></header>

    <form action="signUp.php" method="post" >
        <div class="inputs">

    <label for="name"></label>
    <input type="text" name="name" placeholder="Name">
    <label for="email"></label>
    <input type="email" name="email" placeholder="E-mail">
    <label for=""></label>
    <input type="password" name="password" placeholder="Password" >
    <label for=""></label>
    <input type="password" name="Cpassword" placeholder="Confirm your Password">

        </div>

        <div class="buttons">

    <button class="button" id="buttSub">Cancel</button>
    <label for=""></label>
    <input class="submit" id="buttSub" type="submit" name="signUp" value="Register">

        </div>

        </form>


        <footer>
        
        </footer>

</body>
</html>