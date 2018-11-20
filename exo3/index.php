<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo3</title>
  </head>
  <body>
      <?php
       echo (isset($_GET['startDate']) ? htmlentities($_GET['startDate']) : "La date de début est introuvable") . ' '; 
       echo (isset($_GET['endDate']) ? htmlentities($_GET['endDate']) : "La date de fin est introuvable");
      ?>
  </body>
</html>