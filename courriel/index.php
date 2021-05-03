<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet - Courriel</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/courriel/">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin">
   <meta name="keywords" content="Communication, Courriel, ik.me, Posteo, ProtonMail, Tutanota">
   <meta name="description" content="Bienvenue sur la page des services de courriel, proposée par Protège-moi sur Internet !">

   <?php
      require_once '../require/lien.php';
   ?>
  
  </head>
  <body>

    <!-- Navigation -->
    <?php
      require_once '../require/nav.php';
    ?>

    <!--Séparateur-->
    <div class="py-4"></div>

    <!-- Alert -->
    <?php
      require_once '../require/alert.php';
    ?>

    <!--Séparateur-->
    <div class="py-4"></div>

    <!-- Fil d'ariane -->
  <div class="container">
    <div class="row">
        <div class="col-md">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="https://protege-moi-sur-internet.com/">Accueil</a></li>
              <li class="breadcrumb-item" aria-current="page">Courriel</li>
            </ol>
          </nav>
        </div>
    </div>
  </div>

  <!--Séparateur-->
  <div class="py-4"></div>

    <!--Catégorie-->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/ikme.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">ik.me</h5>
                <p class="card-text">Un service de courrier complet !</p>
                <a href="https://protege-moi-sur-internet.com/courriel/ikme.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/posteo.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Posteo</h5>
                <p class="card-text">Un service de courrier vert !</p>
                <a href="https://protege-moi-sur-internet.com/courriel/posteo.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/protonmail.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">ProtonMail</h5>
                <p class="card-text">Un service de courrier anonyme !</p>
                <a href="https://protege-moi-sur-internet.com/courriel/protonmail.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <img src="https://protege-moi-sur-internet.com/images/tutanota.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Tutanota</h5>
                <p class="card-text">Un service de courrier sécurisé !</p>
                <a href="https://protege-moi-sur-internet.com/courriel/tutanota.php" role="button" class="btn">En savoir plus</a>
              </div>
            </div>
          </div>
        </div>
      </div>


    <!-- Séparateur -->
    <div class="py-2"></div>

    <!-- Footer -->
    <?php
      require_once '../require/footer.php';
    ?>

  </body>
</html>