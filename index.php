<?php session_start();

include('includes/config.php');
include('includes/connect_db.php');

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
if(isset($_POST['InputEmail'])){
    $mail = $_POST['InputEmail'];
    $mdp  = $_POST['InputPassword'];
    // $message ="identifiant = ".$mail." et mot de passe = ".$mdp;
    /*
    `id_user``nom_user`, `prenom_user`, `mail_user`, `mdp`
    */
    $sql = "SELECT users_tbl.id_user, nom_user, prenom_user, id_admin, admin_tbl.id_droit, nom_droit FROM users_tbl 
    LEFT JOIN admin_tbl ON admin_tbl.id_user = users_tbl.id_user 
    LEFT JOIN droits_tbl ON droits_tbl.id_droit =  admin_tbl.id_droit 
    WHERE mail_user = '".$mail."' AND mdp = '".$mdp."'";
    // echo '<!-- '.$sql.' -->';
    $req    = $bdd->prepare($sql);
    $req->execute();
    
    $result = $req->fetch(PDO::FETCH_OBJ);
    if(isset($result->nom_user)){
        $_SESSION['nom']        = $result->nom_user;
        $_SESSION['prenom']     = $result->prenom_user;
        $_SESSION['id_user']    = $result->id_user;
        $_SESSION['droit']      = $result->nom_droit;
        $_SESSION['mail']       = $mail;
        
        $message = 2;
    }else{
        $message = 3;
    }
    
}
if(isset($_GET['message'])){
    $message = $_GET['message'];
}
if(isset($message)){
    switch($message){
        case 1:
        $message = 'Vous êtes déconnecté.';
        break;
        case 2:
        $message = $_SESSION['prenom'].' '.$_SESSION['nom'].', vous êtes bien connecté.';
        break;
        case 3: 
        $message = 'Problème de connexion, recommencez !';
        break;
    }
}
    include('includes/header.php');
    include('includes/titre.php');
    include('includes/menu.php');

    include('includes/index'.$page.'.php');
    include('includes/footer.php');
?>