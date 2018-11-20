<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo2</title>
  </head>
  <body>
      <?php
       echo (isset($_GET['age']) ? htmlentities($_GET['age']) : "L'âge est introuvable"); 
      ?>
  </body>
</html>