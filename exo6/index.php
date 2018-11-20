<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo6</title>
  </head>
  <body>
      <?php
       echo (isset($_GET['building']) ? htmlentities($_GET['building']) : "Le bâtiment est introuvable") . ' '; 
       echo (isset($_GET['room']) ? htmlentities($_GET['room']) : "La chambre est introuvable");
      ?>
  </body>
</html>