<?php

session_start();

if(session_destroy())
{
    header("location: ../../View/employee/login.php");
}

?>