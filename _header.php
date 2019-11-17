<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="blog.php">Mini-blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="blog.php">Acceuil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <!-- Si connecter -->
    <?php
      if(isset($_SESSION) && isset($_SESSION['id'])){ ?>
    <span class="navbar-text nav-link">
    <a href="profil.php">Mon profil</a>
    </span>
    <span class="navbar-text nav-link">
    <a href="destroy_session.php">Se déconnecter</a>
    </span>
    <!-- autre -->
    <?php } else { ?>
    <span class="navbar-text nav-link">
    <a href="sign_in.php">Se connecter</a>
    </span>
    <span class="navbar-text nav-link">
    <a href="sign_up.php">S'inscrire</a>
    </span>
    <?php }?>
    <!--end -->
  </div>
</nav>
</header>