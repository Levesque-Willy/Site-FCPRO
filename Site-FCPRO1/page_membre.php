<!DOCTYPE html>
<html lang="fr">

<head>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="Galerie.css">
  <meta charset="utf-8">
  <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</head>

<body>

<?php
$DataBase = mysqli_connect ( "mysql-fcpro.alwaysdata.net" , "fcpro_ndlp" , "fcprondlp" ) ;


// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)

session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['MotDePasse'])) {

  // On teste pour voir si nos variables ont bien été enregistrées
  echo '<html>';
  echo '<head>';
  echo '<title>Page de notre section membre</title>';
  echo '</head>';

  echo '<body>';
  echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['MotDePasse'];
  echo '<br />';

  echo '<a href="./logout.php">Déconnection</a>';
}
else {
  echo 'Les variables ne sont pas déclarées.';
}
?>


  <header>
    <div class="header">
      <div class="logo">
        <p>FC-<span>PRO</span></p>
      </div>
    </div>
    <ul>
      <li><a href="#home">Accueil</a></li>
      <li><a href="https://ndlpavranches.fr/nous-contacter/">Contact</a></li>
      <li><a href="https://ndlpavranches.fr/wp-content/uploads/2021/11/Reglement-interieur-2021-2022.pdf">Réglement
          intérieur</a></li>
      <li><a href="https://ndlpavranches.fr/edito/">Edito</a></li>
      <li><a href="https://www.ecoledirecte.com/login?cameFrom=%2FAccueil">EcoleDirecte</a></li>
      <li class="menu">
        <a href="javascript:void(0)" class="nav">Nos Formations</a>
        <div class="menu-content">
          <a href="#">Personnel OGEC</a>
          <a href="#">Personnel Enseignant</a>
        </div>
      </li>
      <button onclick="document.getElementById('id01').style.display='block'"
        style="width:auto;">Administrateur</button>

      <div id="id01" class="modal">

        <form class="modal-content animate" action="/logout.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
              title="Close Modal">&times;</span>
            <img src="avatar-femme.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label for="uname"><b>Identifiant</b></label>
            <form action = "test.php" method="post">
            <input type="text" placeholder="Entrer Identifiant" name="uname" required>

            <label for="psw"><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer Mot de passe" name="psw" required>

            <button type="submit">Login</button>
            </form>
            <label>
              <input type="checkbox" checked="checked" name="remember">Se souvenir de moi
            </label>

            <!-- <a href="Inscription.html">
                  <button type="button">Inscription</button>
                </a> -->
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'"
              class="cancelbtn">Annuler</button>
            <span class="psw"><a href="#">Mot de passe oublié ?</a></span>
          </div>
        </form>
      </div>
    </ul>
  </header>
  <main>
    <article class="diapo">
      <span id="votre_id1" class="target">
      </span>
      <span id="votre_id2" class="target">
      </span>
      <span id="votre_id3" class="target">
      </span>
      <span id="votre_id4" class="target">
      </span>
      <div class="cadre_diapo">
        <div class="interieur_diapo">
          <div class=description>
            <span>
              Formation dans le BTP
            </span>
            <img src="test/btp.jpg" alt>
          </div>
          <div class=description>
            <span>
              Formation de cultivateur de champignons
            </span>
            <img src="test/champignon.webp" alt>
          </div>
          <div class=description>
            <span>
              Formation en tant que guetteur dans les banlieues
            </span>
            <img src="test/guetteur.jpg" alt>
          </div>
          <div class=description>
            <span>
              Formation de dresseur de chat
            </span>
            <img src="test/chat.jpg" alt>
          </div>
        </div>
        <ul class="navigation_diapo">
          <li>
            <a href="#votre_id1">
              <img src="#" alt>
            </a>
          </li>
          <li>
            <a href="#votre_id2">
              <img src="#" alt>
            </a>
          </li>
          <li>
            <a href="#votre_id3">
              <img src="#" alt>
            </a>
          </li>
          <li>
            <a href="#votre_id4">
              <img src="#" alt>
            </a>
          </li>
        </ul>
      </div>
      </article>

      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </main>
  <footer>
    <article class="collège">
      <h3>Coordonnées collège</h3>
      <ul>
        <li>4 Place Croix des Perrières,50300 Avranches</li>
        <li>Téléphone : 02 33 58 43 41</li>
        <li>Télécopie : 02 33 48 28 83</li>
        <li><a
            href="https://accounts.google.com/signin/v2/identifier?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">Envoyez
            nous un email</a></li>
      </ul>
    </article>
    <article class="lycée">
      <h3>Coordonnés Lycée</h3>
      <ul>
        <li>9 Rue Berenger,50300 Avranches</li>
        <li>Téléphone : 02 33 58 02 22</li>
        <li>Télécopie : 09 72 12 47 96</li>
        <li><a
            href="https://accounts.google.com/signin/v2/identifier?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">Envoyer
            nous un mail</a></li>
      </ul>
    </article>
  </footer>
</body>

</html>
