<?php
namespace mylogin\out;

class logout{

    public function __construct()
    {
    session_start();
    session_destroy();
    header("location:../index.php");
    }
}
$log=new logout();