<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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