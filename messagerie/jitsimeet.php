<!doctype html>
<html lang="fr">
  <head>

   <!-- Title -->
   <title>Protège-moi sur Internet - Jitsi Meet</title>
   <link rel="canonical" href="https://protege-moi-sur-internet.com/messagerie/jitsimeet.php">

   <!-- Meta -->
   <meta name="author" content="Yann Jaulin">
   <meta name="keywords" content="Communication, Messagerie, Jitsi Meet, 8x8">
   <meta name="description" content="Bienvenue sur la page de présentation de Jitsi Meet, proposée par Protège-moi sur Internet !">

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
                  <li class="breadcrumb-item"><a href="https://protege-moi-sur-internet.com/messagerie/">Messagerie</a></li>
                  <li class="breadcrumb-item" aria-current="page">Jitsi Meet</li>
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
                        <img src="https://protege-moi-sur-internet.com/images/jitsimeet.png" class="img-thumbnail" alt="Logo de Jitsi Meet">
                        <figcaption>Logo du site de Jitsi Meet</figcaption>
                    </figure>
                </div>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Titre -->
                <h1 class="font-weight-bold text-center">Présentation de Jitsi Meet</h1>

                <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- Présentation -->
                <p class="lead text-center">Jitsi Meet est un service de visioconférence de la société américaine 8x8.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Multi-plateforme et chiffrée, aucun compte n'est requis pour l'utiliser.</p>
                
                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Vous pouvez inviter des utilisateurs via un lien, partager votre bureau, échanger des messages et bien d'autres choses.</p>

                <!-- Séparateur -->
                <div class="py-2"></div>

                <!-- Présentation -->
                <p class="lead text-center">Ce service gratuit et open source est préconisé par l’État français dans le cadre de la modernisation globale de ses systèmes d’informations et vous pouvez l'héberger sur votre serveur.</p>
                
                <!-- Séparateur -->
                <div class="py-4"></div>
                 
                <!-- Titre -->
                <h2 class="font-weight-bold text-center">Bonne utilisation !</h2>

                 <!-- Séparateur -->
                <div class="py-4"></div>

                <!-- site -->
                <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Groupe de liens">
                  <div class="btn-group mr-2" role="group" aria-label="Site de Jitsi Meet">
                    <a href="https://jitsi.org/jitsi-meet/" target="_blank" role="button" class="btn">Site officiel <i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group mr-2" role="group" aria-label="Documentation de Jitsi Meet">
                    <a href="https://jitsi.github.io/handbook/docs/intro" target="_blank" role="button" class="btn">Documentation <i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group mr-2" role="group" aria-label="Analyse de εxodus">
                    <a href="https://reports.exodus-privacy.eu.org/fr/reports/org.jitsi.meet/latest/" target="_blank" role="button" class="btn">εxodus <i class="fa fa-external-link" aria-hidden="true"></i></a>
                  </div>
                  <div class="btn-group" role="group" aria-label="Service des CHATONS">
                    <a href="https://wiki.chatons.org/doku.php/services/visio-conference/jitsi" target="_blank" role="button" class="btn">CHATONS <i class="fa fa-external-link" aria-hidden="true"></i></a>
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