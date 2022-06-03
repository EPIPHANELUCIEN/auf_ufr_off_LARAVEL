<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>✨Tableau AUF</title>
  <link rel="stylesheet" href="{{asset('./style/uikit.min.css')}}">
  <link rel="stylesheet" href="{{asset('./css/tab.css')}}">
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




<div class="decor"> </div>
<marquee>
<center>
<h1 class="titre">BIENVENUE A LA BIBLIOTHEQUE DE L'AGENCE UNIVERSITAIRE DE LA FRANCOPHONIE</h1>
</center>
</marquee>
<div class="decor"> </div>


<section class="e">
 
  <marquee behavior="scroll" direction="right">
    <div classe="p">
      <img src="{{asset('./images/play/1(1).jpg')}}" alt="">
      <img src="../" alt="">
      <img src="" alt="">
    </div>
  </marquee>
  <marquee behavior="scroll" direction="up">
    <div classe="p">
      <img src="." alt="">
      <img src="" alt="">
      <img src="" alt="">
    </div>
  </marquee>
  <marquee behavior="scroll" direction="left">
    <div classe="p">
      <img src="{{asset('./images/play/1(1).jpg')}}" alt="">
      <img src="" alt="">
      <img src="" alt="">
    </div>
  </marquee>
</section>

<section class="bag"> 
  <div class="container mt-3">
    <center>
    <h2>Tableau des abonnés de AUF</h2>
    <h3>Ce tableau contient la liste des abonnés enregistreé de lAUF</h3>
  </center>


    <table>
      <tr class="tete">
        <th scope="col">Nub</th>
        <th scope="col">Nom</th>
        <!-- on ajoute scope="col">et ajoute le nom relier -->
        <th scope="col">Prenom</th>
        <th scope="col">Date_de_Naissance</th>
        <th scope="col">Numero_tel</th>
        <th scope="col">Date_de-debut_Abonnement</th>
        <th scope="col">Email</th>
      </tr>

      <tr>
      <td>1</td>
      <td>SANOU</td>
      <td>Ali</td>
      <td>04-03-20</td>
      <td>20 02 20 02</td>
      <td>04-06-21</td>
      <td>sanouali@yahoo.fr</td>
    </tr>
      <tr>
      <td>2</td>
      <td>SAWADOGO</td>
      <td>Valerie</td>
      <td>04-03-98</td>
      <td>70 82 20 22</td>
      <td>04-06-21</td>
      <td>swadogoval253@gmail.com</td>
    </tr>

  </div>


</table>
</section>
<div></div>
<div></div>
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

  <script src="{{asset('./js/uikit.min.js')}}"></script>
  <script src="{{asset('./js/uikit-icons.min.js')}}"></script>
  <script src="{{asset('./js/tab.js')}}"></script>
</body>

</html>