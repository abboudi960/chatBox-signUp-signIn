<?php 


$server_name = "localhost";
$db_user = "root"; 
$db_pass = "";
$db = "commentaire";


$conn = mysqli_connect($server_name,$db_user,$db_pass,$db);

if (!$conn) {
    
    die("can't connect with database" . !$conn);
}
// }else {
//     echo "you are connected with database succesfuly" ;
// }




?>