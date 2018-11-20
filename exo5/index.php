<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo5</title>
  </head>
  <body>
      <?php
       echo (isset($_GET['week']) ? htmlentities($_GET['week']) : "Le prénom est introuvable") . ' '; 
      ?>
  </body>
</html>