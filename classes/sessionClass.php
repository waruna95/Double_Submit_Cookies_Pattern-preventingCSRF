<!--
IT15060822
W.M.W.G.Wijesundara
-->
<?php
    ob_start();
    session_start();
    if(!isset($_SESSION['USERNAME'])){
    header("location: ../index.php?er=Access Denied");
    }

    if(!array_key_exists('USERNAME',$_SESSION)){
    header("location: ../index.php?er=Access Denied");
    }

    if(!array_key_exists('USERNAME',$_SESSION)){
    header("location: ../index.php?er=Access Denied");
    }

    if($_SESSION['LOG'] != "in"){
    header("location: ../index.php?er=You are not authorized to access the content.");
    }
?>