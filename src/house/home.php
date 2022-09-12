<?php
session_start();

if(isset($_SESSION["username"])) {

    echo "<p>Login success, Hello " . $_SESSION["username"] . "</p>";

    echo "<br> <br> <a href='../out/logout.php'>Logout </a>";
} 
else {
    header("location:../index.php");
}


?>