<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo4</title>
  </head>
  <body>
      <?php
       echo (isset($_GET['language']) ? htmlentities($_GET['language']) : "Le language est introuvable") . ' '; 
       echo (isset($_GET['server']) ? htmlentities($_GET['server']) : "Le prénom est introuvable");
      ?>
  </body>
</html>