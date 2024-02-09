<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elitcar">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script defer src="js/main.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>ElitCar</title>
    <style>
    #réservation_absolute div>p{
        font-size:1.4em;
        font-weight:bold;
    }
    #réservation_absolute {
        height: 30%;
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        width: 20%;
        font-size: 1.4em;
    }
    #réservation_absolute button {
        /* width: 40%; */
        font-size: 1.3em;
    }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a target="_self" href="index.php"><img src="../img/Elitcar.png" alt="Logo" width="110px" height="27px" class="d-inline-block align-text-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-dark" target="_self" href="view/particuliar/create_particular.php">Crée un compte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" target="_self" href="view/login.php">Connexions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" target="_self" href="../controller/admin/logout.php">Déconnexions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" target="_self" href="view/particuliar/create_particular.php">Agences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" target="_self" href="view/particuliar/faq.php">FAQ?</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="position-relative">
    <div id="carouselExampleAutoplaying" class="carousel slide mx-auto my-4 w-75 " data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/voiture_caroussel4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/voiture_caroussel5.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/voiture_caroussel6

.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div id="réservation_absolute" class="text-center bg-light-subtle d-flex flex-column justify-content-between position-absolute translate-middle bottom-0 end-0 p-0">
        <div class="bg-secondary-subtle h-25 d-flex justify-content-center align-items-center">
            <p class="m-0">75 614 CFA</p>
        </div>
        <p>Pour 9 jours</p>
        <p>1400 km inclus</p>
        <div><button type="button" class="btn btn-warning text-light mb-3 w-50">Réserver</button></div>
    </div>
    <div class="w-75 mx-auto">
        <h3>Volkswagen Golf</h3>
        <div><p>2022<span> • </span>5 places</p></div>
        <div>
            <span>
            <img src="../img/etoile.svg" alt="">
            <img src="../img/etoile.svg" alt="">
            <img src="../img/etoile.svg" alt="">
            <img src="../img/etoile.svg" alt="">
            <img src="../img/etoile_moitié.svg" alt="">
            </span>
            4.74(21)
        </div>
    </div>
</section>

<section class="readCar_section w-75 mx-auto">
    <h2>Adresse de départ et de retour</h2>
    <div class="bloc_map border">
        <div class="loc-map">
            <div><i class="fa-solid fa-location-dot fa-xl"></i></div>
            <div class="texte-loc">
                <p>Gare de Douala - , Place</p>
                <p>Richard Bona, Douala, Cameroun</p>
            </div>
        </div>
        <div class="map">
            <img  src="../img/map.png" alt="">
        </div>
    </div>
  </section>
    <section class="readCar_section w-75 mx-auto">
        <h2>Propriétaire</h2>
        <div class="border">
            <div class="readCar_avis">
              <div class="elitcar2" >
                <img src="../img/ElitCar2.png" alt="">
              </div>
                <div class="readCar_avis_droit">
                    <div class="readCar_avis_haut">
                        <h3>EASYCAR</h3>
                        <img src="../img/pro.png" alt="image_pro">
                    </div>
                    <div class="readCar_avis_bas">
                    <span>
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile_moitié.svg" alt="">
                    </span>
                        4.74(21)
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="readCar_section w-75 mx-auto">
      <h2>Description du véhicule</h2>
      <div class="description-vehicule">
        <div class="border">
            <div class="bloc_point_jaune">
                <div class="testpipi">
                    <div>
                        <img class="point-jaune" src="../img/pointjaune.png" alt="point-jaune">
                    </div>
                    <p>Merci de respecter les règles sanitaires, ne laissez pas de déchets dans le véhicule</p>
                </div>

                <div  class="testpipi"> 
                    <div>
                      <img class="point-jaune" src="../img/pointjaune.png" alt="point-jaune">
                    </div>
                    <p>Merci de respecter les règles sanitaires, ne laissez pas de déchets dans le véhicule</p>
                </div>

                <div class="testpipi"> 
                    <div>
                      <img class="point-jaune" src="../img/pointjaune.png" alt="point-jaune">
                    </div>
                    <p>Merci de respecter les règles sanitaires, ne laissez pas de déchets dans le véhicule</p>
                </div>
            </div>
       
        <p class="vehicule">Véhicule NEUF, qui convient à vos déplacements courts en ville comme à de plus longs trajets. Les options vous assureront un grand confort.</p>

        <div class="testcaca">
        <img class="point-bleu" src="../img/pointbleu.png" alt="pont-bleu-texte">
          <p>Bluetooth</p>
       </div>

      <div class="testcaca">
        <img class="point-bleu" src="../img/pointbleu.png" alt="pont-bleu-texte">
        <p>GPS</p>  
      </div>

      <div class="testcaca">
        <img class="point-bleu" src="../img/pointbleu.png" alt="pont-bleu-texte">
         <p>Climatisation</p>  
      </div>

      <div class="testcaca">
      <img class="point-bleu" src="../img/pointbleu.png" alt="pont-bleu-texte">
      <p>Carplay,Android Auto</p>
      </div>

      <div class="testcaca">
      <img class="point-bleu" src="../img/pointbleu.png" alt="pont-bleu-texte">
      <p>Attache ISOFIX</p>
      </div>

      <div class="testcaca">
      <img class="point-bleu" src="../img/pointbleu.png" alt="pont-bleu-texte"> 
      <p>Caméra de recul</p>
      </div>
      
      <div class="point_noir">
        <span>•</span> <p>Ce véhicule est disponible à Douala</p>
      </div>

      <div class="point_noir">
        <span>•</span> <p>Le nettoyage est obligatoire, des pénalités seront appliquées en cas de non respect</p>
      </div>

      <div class="point_noir">
        <span>•</span> <p>Des sièges enfants payants sont disponibles (Merci de faire la demande 48H MINIMUM 
        avant le début de votre location.)</p>
      </div>

      <div>
        <p>Voici les tarifs pour les sièges enfants:</p>
        <p>1 jour: 10€</p>
      </div>


      <div class="prix">
        <p>Week-end (vendredi soir-lundi matin) ou 2 jours semaine: 15€</p>
        <p>3 jours: 20€</p>
        <p>1 semaine: 30€</p>
        <p>2 semaines ou + : 50€</p>
      </div>

      <div>
        <p>📧 Nous communiquons principalement par la messagerie Elitcar</p>
      </div>
    </section>

    

<section class="redCar_section w-75 mx-auto ">
    <h2>Caution</h2>
    <div class="border">
        <p> 196 739 CFA bloqués jusqu'au 10/03/24</p>
    </div>
</section>

    
    
    </div>
</div>

<section id="readCar_section" class="d-flex flex-column align-items-center">
    <div id="titre_section6" class="d-flex justify-content-between w-75">
        <h2>Les annonces de ce pro</h2>
        <a href="#">Voir plus d'annonces   <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    <div id="read_card" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 w-75 ">
      <div class="col ps-0">
        <div class="card">
          <img src="../img/card1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Volkswagen Polo</h5>
            <p>2022<span> • </span>5 places</p>
            <span>
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile_moitié.svg" alt="">
                        4.74(21)
            </span>
                        
                
            <div class="card-text">
            <p>75 650 CFA</p>
            <p>Pour 5 jours</p>
            </div>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="../img/card2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Volkswagen Polo</h5>

            <p>2022<span> • </span>5 places</p>
            <span>
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile_moitié.svg" alt="">
                        4.74(21)
            </span>
            
            <div class="card-text">
            <p>75 650 CFA</p>
            <p>Pour 5 jours</p>
            </div>

          
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="../img/card3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Volkswagen Polo</h5>

            <p>2022<span> • </span>5 places</p>
            <span>
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile_moitié.svg" alt="">
                        4.74(21)
            </span>
            
            <div class="card-text">
            <p>75 650 CFA</p>
            <p>Pour 5 jours</p>
            </div>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="../img/card4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Volkswagen Polo</h5>

            <p>2022<span> • </span>5 places</p>
            <span>
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile.svg" alt="">
                        <img src="../img/etoile_moitié.svg" alt="">
                        4.74(21)
            </span>
            
            <div class="card-text">
            <p>75 650 CFA</p>
            <p>Pour 5 jours</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>


