<?php
    session_start();
    //Deslogando usuario
    session_destroy();
    //voltando pra home
    header('Location:index.php');
?>