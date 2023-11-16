<?php 
session_start(); 
//include_once('config/config.php');
?>

<?php
$page_name = 'Prijava';
include ('template/header.php');   

    if(!(isset($_SESSION['logiran'])))
    {
        include ('login.php');
    }

    include('template/footer.php');
    ?>
 