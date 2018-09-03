<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 9</title>
  </head>
  <body>
    <p>
      <?php
        $hautDeFrance = array(

          02 => 'Aisne',
          59 => 'Nord',
          60 => 'Oise',
          62 => 'Pas-de-Calais',
          80 => 'Somme',
        );
        foreach ($hautDeFrance as $value) {
          echo $value . '<br />';
        }
       ?>
    </p>
  </body>
</html>
