<?php session_start();
        $_SESSION['nom']        = '';
        $_SESSION['prenom']     = '';
        $_SESSION['id_user']    = '';
        $_SESSION['droit']      = '';
        $_SESSION['mail']       = '';

        session_destroy();
        header("location: ../index.php?message=1");
    
?>