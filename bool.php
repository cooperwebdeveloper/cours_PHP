<?php 
$isUserLogged = true;

if($isUserLogged) {
  echo 'Bienvenue, utilisateur !'; // Ce code n'est exécuté que si $isUserLogged est vraie, donc si l'utilisateur est authentifié
} else {
  echo 'Bienvenue, inconnu !'; // Ce code n'est exécuté que si $isUserLogged est faux
}

