<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   	<meta name="robots" content="noindex,nofollow"/>
    <meta name="description" content="Materiaal en links bij de cursus Nederlands voor Oekraïners."/>
    <title>Nederlands voor Oekraïners</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <?php 
      
      $body = str_replace("<!DOCTYPE html>", "", file_get_contents("body.php"));
      echo $body;
      
      ?>
    </div>
  </body>
</html>