

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('./css/form.css')}}">
        <link rel="stylesheet" href="{{asset('./css/inscrip.css')}}">
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
      <section class="body2">
      <!-- date -->
      <div class="decor"> </div>
    
      <center>
      <h1 class="titre">BIENVENUE A LA BIBLIOTHEQUE DE L'AGENCE UNIVERSITAIRE DE LA FRANCOPHONIE</h1>
      </center>
     
    
    <div></div>
    
    
    
      <div class="decor"> </div>
      
      <section class="bag">
        
  
      <center>
        <h4 class="t">Vous trouverez ici le formulaire a remplir pour vous inscrire en tant que Administrateur</h4>
    </center> 

      

<section class="formula">
  <form class="modal-content formula1" action="trtm_amd.php" method="post">
    <div class="container">
      <h1>Inscription Administrateur</h1>
      <marquee behavior="" direction="">
      <p>Si vous êtes déjà inscrit cliquer sur le Button se connecter Merci.</p>
    </marquee>
      <hr>
      <label for="nom"><b>Nom</b></label>
      <input type="text" placeholder="Enter le nom" name="nom" required>
      <label for="prenom"><b>Prenom</b></label>
      <input type="text" placeholder="Enter prenom.s" name="prenom" required>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Enter mot de passe" name="psw" required>
      <label for="psw"><b>Confirmer Mot de passe</b></label>
      <input type="password" placeholder="Enter mot de passe" name="psw" required>

      <div class="clearfix lol1">
        <button type="submit" name="submit" class="signup lol">Envoyer</button>
        <button  class="lol k"><a href="./autentification_adm" >Se connecter</a></button>
      </div>
     
    </div>
  </form>
</div>
</section>

<div class="l">

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







