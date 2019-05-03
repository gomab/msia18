  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item 
                  <?php if($page ==1){ echo 'active'; } ?>   
                     px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php?page=1">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
                    <li class="nav-item 
                  <?php if($page ==2){ echo 'active'; } ?>   
                     px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php?page=2">About</a>
          </li>
                              <li class="nav-item 
                  <?php if($page ==3){ echo 'active'; } ?>   
                     px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php?page=3">Products</a>
          </li>
         <li class="nav-item 
                  <?php if($page ==4){ echo 'active'; } ?>   
                     px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php?page=4">Store</a>
          </li>
         <li class="nav-item px-lg-4">
             <?php if(!empty($_SESSION['nom'])){
                echo '<a class="nav-link text-uppercase text-expanded" href="includes/logout.php">Se déconnecter</a>';
}else{
                echo '<a class="nav-link text-uppercase text-expanded" href="#" data-toggle="modal" data-target="#connexion">Se connecter</a>';
}
?>
          </li>
            
            <!-- Modal -->
<div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" action="index.php">
           <div class="form-group">
            <label for="InputEmail">Indetifiant</label>
            <input type="email" class="form-control" id="InputEmail" name="InputEmail" aria-describedby="emailHelp" placeholder="Entrez votre email">
            <small id="emailHelp" class="form-text text-muted">Votre adresse mail est votre identifiant.</small>
          </div>
          <div class="form-group">
            <label for="InputPassword">Mot de passe</label>
            <input type="password" class="form-control" id="InputPassword" name="InputPassword" placeholder="Mot de passe"> 
          </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
        </ul>
      </div>
    </div>
  </nav>