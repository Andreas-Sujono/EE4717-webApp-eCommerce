<?php
    session_start();

    if(!isset($_SESSION['custId'])){
        header('Location: ../pages/index.php?showModal=login-modal');
    }

?>