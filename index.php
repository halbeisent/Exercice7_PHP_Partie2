<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
    <title>Exercice 7 Partie 2 PHP</title>
  </head>
  <body>
  <?php
  // On met la valeur false à la variable $maVariable est à false
  $maVariable = false;
  echo 'Le contenu de $maVariable est: ' . $maVariable;
  // On vérifie que la condition est vraie
  if (!$maVariable)
  {
    echo 'C\'est pas bon!!!';
  }
  // Sinon on affiche ce message
  else
  {
    echo 'C\'est OK!!';
  }
  ?>
  </body>
</html>
