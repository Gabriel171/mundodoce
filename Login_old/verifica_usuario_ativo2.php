<?php
    session_start();
    if ( isset($_SESSION['nome']) )
    {
        header('location:OK2.php');
    
    } //else {
    //    header('location:login.php');
    //}
?>