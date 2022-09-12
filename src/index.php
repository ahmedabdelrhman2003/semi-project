<?php

use mylogin\all\main;
use mylogin\data\connection;
use mylogin\house;
use mylogin\out\logout;
require("../vendor/autoload.php");

$conn=new connection();
$db=$conn->getdb();
$mainclass = new main($db);
//var_dump($mainclass);
if(isset($_SESSION["username"]))
{
    header("location:house/home.php");

}



?>
<form  method="POST">
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
           
       <div>
        <form >
            <h2>login form</h2>
            <h4>username</h4>
       <br> <input class="name" type="text" name="Name" placeholder="name"></br>
       <h4>password</h4>
       <br> <input class="name" type="password" name="password1" placeholder="password"></br>
       <br> <input class="login" type="submit" value="sign up" name="signup"></br>
        <input class="login" type="submit" value="login" name="login">
        
        </form>
       </div>
    </body>
    </html>
</form>
<?php

if(isset($_POST["signup"]))
{

    $mainclass->signup();
//$db->login();
}elseif(isset($_POST["login"])){
    $mainclass->login(); 

}
