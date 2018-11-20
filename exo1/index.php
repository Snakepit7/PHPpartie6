<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo1</title>
  </head>
  <body>
      <?php
       echo (isset($_GET['firstname']) ? htmlentities($_GET['firstname']) : "Le prénom est introuvable") . ' '; 
       echo (isset($_GET['lastname']) ? htmlentities($_GET['lastname']) : "Le prénom est introuvable");
      ?>
  </body>
</html>