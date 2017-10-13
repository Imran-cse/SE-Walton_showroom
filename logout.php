<?php

session_start();
if($_SESSION['login'] == 'true'){
    session_destroy();
    header('Location:views/login.php');
}