<?php 

    include "dbconect.php" ;

        session_start();

        $submit = $_POST["submit"];

if(isset($submit)){
    $comment = $_POST["comment"];

   $quer = "INSERT INTO `comments`(`User_comment`) VALUES ('$comment') ";

   mysqli_query($conn,$quer) ;

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/chat.css">
    <title>simpleChat</title>
</head>
<body>

    <header><h1>simpleChat</h1></header>
    
    <img class ="userImg" src="images/user.png" alt="user">

    <div class = "userName">
        <?php  echo $_SESSION["user_name"]       ?>
    </div>

    <div class="selectDiv">
      
    <?php 
    
    $sql = "SELECT  , comments FROM User_comment";
    $result = mysqli_query($conn, $sql);

    ?>

    </div>

    <form action="" method=$_POST >
        <div class="inputs">

    <label for="comment"></label>
    <input type="text" name="comment" placeholder="Comment">

        </div>

        <div class="buttons">

    <button class="button" id="buttSub">Delete</button>
    <label for="submit"></label>
    <input class="submit" id="buttSub" type="submit" name="submit" value="Add a Comment">

        </div>

        </form>


        <footer>
        
        </footer>

</body>
</html>