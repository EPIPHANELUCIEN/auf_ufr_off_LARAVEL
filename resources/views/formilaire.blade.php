<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/form.css')}}">
    <link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}">
<title>forulaire AUF</title>
</head>
<body>
    <section id="h">

    </section>
  
  
    <section class="header">
      <div >
          <a href="/">
          <img src="{{asset('./images/Logo_AUF.png')}}" alt="" class="logo">
        </a>
        </div>
  </section>
  <!-- fin header -->
  <!-- date -->
  
  <!-- date -->
  <div class="decor"> </div>

  <center>
  <h1 class="titre">BIENVENUE A LA BIBLIOTHEQUE DE L'AGENCE UNIVERSITAIRE DE LA FRANCOPHONIE</h1>
  </center>
 

<div></div>



  <div class="decor"> </div>
  
  <section class="bag">

 
  <center>
    <h1 class="t">Vous trouverez ici le formulaire a remplire pour vous inscrire</h1>
</center> 
        <marquee behavior="scroll" direction="right">
         
        <div class="pub">
            <img src="{{asset('./images/form/51372.jpg')}}" alt="">
       
            <img src="{{asset('./images/form/537201.jpg')}}" alt="">
      
            <img src="{{asset('./images/form/knCLgMx-wallpapers-1920x1080.jpg')}}" alt="">
        
            <img src="{{asset('./images/form/s8xfONO-1920x1080-wallpapers.jpg')}}" alt="">
            
        </div>
    </marquee>
  
</section>


    <div class="collapse" id="collapseExample">
        

        <div class="containera" >
          @csrf
            <h2>Veuillez remplir le formulaire ci-dessous</h2>
            <form action="{{route('ajouter.abonne')}}" method="post">
          
              <label for="fname">Entrez votre nom</label>
              <input type="text" id="" name="nom" placeholder="Nom ..">
          
              <label for="lname">Entrez votre Prénom.s</label>
              <input type="text" id="" name="prenom" placeholder="Prénom.s ..">

              <label for="lname">Entrez votre date de naissance </label>
              <input type="date" id="" name="date_de_naissance" placeholder="votre date de naissance ..">

              <label for="lname">Entrez la date de début abonnement</label>
              <input type="date" id="" name="date_de_debut_abonnement" placeholder="Date .."   id="you">


              <label for="lname">Entrez votre Numero de telephone</label>
              <input type="text" id="" name="telephone" placeholder="Numero ..">

              <label for="lname">Entrez votre email</label>
              <input type="text" id="" name="email" placeholder="email ..">
              <h3> NB: Tous les champs sont obligatoires </h3>
              <input type="submit" value="envoyer" name="submit" >
          
            </form>
          </div>


      </div>

    
</section>


<section>
    

</div class="for">
<center>
<p>
    <h2>Cliquez ici</h2>
    
    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample"  href="#you" role="button" aria-expanded="false" aria-controls="collapseExample">
      Le formulaire
      <a ></a>
    </a>
    <a class="btn btn-primary"  href="/tableau"   role="button"  aria-controls="collapseExample">
      Voir le Tablaau
      <a ></a>
    </a>
   
   <!-- </button> -->
  </p>
 </center>
  <div class="collapse" id="collapseExample">
    


  </div>



</section>
 
    
<!-- footer -->
    <section class="foot">
        <div >
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
</html>