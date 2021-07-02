<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet - Searx</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/moteurderecherche/searx.php">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin">
   <meta name="keywords" content="Navigation, Moteur de recherche, Searx, Adam Tauber">
   <meta name="description" content="Bienvenue sur la page de présentation de Searx, proposée par Protège-moi sur Internet !">

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
                  <li class="breadcrumb-item"><a href="https://protege-moi-sur-internet.com/moteurderecherche/">Moteur de recherche</a></li>
                  <li class="breadcrumb-item" aria-current="page">Searx</li>
                </ol>
            </nav>
        </div>
    </div>
  </div>

  <!--Séparateur-->
  <div class="py-4"></div>

    <!--Présentation-->
    <div class="container">
        <div class="row">
            <div class="col-md">
                <!-- Logo -->
                <div class="text-center">
                    <figure>
                        <img src="https://protege-moi-sur-internet.com/images/searx.png" class="img-thumbnail" alt="Logo de Searx">
                        <figcaption>Logo du site de Searx</figcaption>
                    </figure>
                </div>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Titre -->
                <h1 class="font-weight-bold text-center">Présentation de Searx</h1>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Présentation -->
                <p class="lead text-center">Searx est un métamoteur de recherche créé par Adam Tauber.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Inspiré du projet Seeks, il agrège les résultats issus de plusieurs moteurs de recherche, tout en ne stockant pas d'informations sur ses utilisateurs.</p>
                
                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Open source, il peut être utilisé sur n'importe quelle instance publique, mais il peut aussi être auto-hébergé, comme pour La Quadrature du Net.</p>
                
                <!-- Séparateur -->
                <div class="py-4"></div>
                 
                <!-- Titre -->
                <h2 class="font-weight-bold text-center">Bonne utilisation !</h2>

                 <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- site -->
                <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Groupe de liens">
                  <div class="btn-group mr-2" role="group" aria-label="Site de Searx">
                    <a href="https://searx.me/" target="_blank" role="button" class="btn">Site officiel <i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group mr-2" role="group" aria-label="Documentation de Searx">
                    <a href="https://searx.github.io/searx/" target="_blank" role="button" class="btn">Documentation <i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group" role="group" aria-label="Service des CHATONS">
                    <a href="https://wiki.chatons.org/doku.php/services/meta-moteurs_de_recherche" target="_blank" role="button" class="btn">CHATONS <i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                </div>

                <!-- Séparateur -->
                <div class="py-2"></div>
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