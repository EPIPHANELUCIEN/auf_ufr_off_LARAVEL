<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/css.css')}}">
    <link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}">
  
  

 
    
  

    <title>auf</title>
</head>
<body>
<section class="header">
    <div ><a href="./">
        <img src="{{asset('./images/Logo_AUF.png')}}" alt="" class="logo">
      </a>
      </div>
</section>
<!-- fin header -->
<!-- date -->

<!-- date -->
<div class="decor"> </div>
<marquee>
<center>
<h1 class="titre">BIENVENUE A LA BIBLIOTHEQUE DE L'AGENCE UNIVERSITAIRE DE LA FRANCOPHONIE</h1>
</center>
</marquee>
<div class="decor"> </div>

<center>
  <h1>Que pouvons-nous faire pour vous ?</h1>
</center>

<section class="bag">
<center>
<section class="big">
    <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{asset('./images/acc/images.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
           
              <h3>Une attitude positive à l'égard des études.</h3>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="{{asset('./images/acc/images (5).jfif')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
             
              <h3>Une capacité à penser et à travailler de manière indépendante.</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('./images/acc/images (3).jfif')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
           
              <h3>Une capacité des etudiants à persévérer et à terminer les tâches</h3>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

</section>
</center>
</section>



</div class="for">
<center class="ford">
  <button>
    <!-- <a href="./formilaire.php" >Ajouter un abonnee</a> -->
 
	
    <a href="formilaire">+ Abonnee</a>
  </button>
        <button>
          <a href="autentification_adm">Se connecter</a>
        </button>
        
      </center>
    




 <!-- footer -->
 <section class="foot">
  <div >
      <!-- <img src="./images/Logo_AUF.png" alt="" class="lago"> -->
      <img src="{{asset('./images/Logo_AUF.png')}}" alt="" class="lago">
  </div>
      <ul class="m">
          <li><h2>Nous contacter</h2></li>
          <li>+226 25 31 61 88</li>
          <li>+226 25 31 61 90</li>
          <li>info@bf.auf.org</li>
      </ul>
</section>
<!-- footer -->  
    
</body>
<script src="{{asset('./js/bootstrap.bundle.min.js')}}"></script>
{{ URL::asset('./js/bootstrap.bundle.min.js'); }}



</html>