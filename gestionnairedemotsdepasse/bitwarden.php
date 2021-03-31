<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet - Bitwarden</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/gestionnairedemotsdepasse/bitwarden.php">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin">
   <meta name="keywords" content="Productivité, Gestionnaire de mots de passe, Bitwarden, 8bit Solutions LLC">
   <meta name="description" content="Bienvenue sur la page de présentation de Bitwarden, proposée par Protège-moi sur Internet !">

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
                  <li class="breadcrumb-item"><a href="https://protege-moi-sur-internet.com/gestionnairedemotsdepasse/">Gestionnaire de mots de passe</a></li>
                  <li class="breadcrumb-item" aria-current="page">Bitwarden</li>
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
                        <img src="https://protege-moi-sur-internet.com/images/bitwarden.jpg" class="img-thumbnail" alt="Logo de Bitwarden">
                        <figcaption>Logo du site de Bitwarden</figcaption>
                    </figure>
                </div>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Titre -->
                <h1 class="font-weight-bold text-center">Présentation de Bitwarden</h1>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Présentation -->
                <p class="lead text-center">Bitwarden est un gestionnaire de mots de passe de la société américaine 8bit Solutions LLC.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Gratuit et open source, tous les identifiants et les documents que vous stockez dans votre coffre-fort sont chiffrés et sont synchronisés sur tous vos appareils.</p>
                
                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Vous disposez d'un générateur de mots de passe, d'un outil de partage de textes et de fichiers éphémère et d'encore plus, si vous passez en utilisateur premium.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Enfin, il a été audité par Cure53 et si vous ne souhaitez pas utiliser leur nuage, vous pouvez l'héberger sur votre serveur.</p>
                
                <!-- Séparateur -->
                <div class="py-4"></div>
                 
                <!-- Titre -->
                <h2 class="font-weight-bold text-center">Bonne utilisation !</h2>

                 <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- site -->
                <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Groupe de liens">
                  <div class="btn-group mr-2" role="group" aria-label="Site de Bitwarden">
                    <a href="https://bitwarden.com/" target="_blank" role="button" class="btn">Site officiel <i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group mr-2" role="group" aria-label="Documentation de Bitwarden">
                    <a href="https://bitwarden.com/help/" target="_blank" role="button" class="btn">Documentation <i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group" role="group" aria-label="Analyse de εxodus">
                    <a href="https://reports.exodus-privacy.eu.org/fr/reports/com.x8bit.bitwarden/latest/" target="_blank" role="button" class="btn">εxodus <i class="fa fa-external-link" aria-hidden="true"></i></a>
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