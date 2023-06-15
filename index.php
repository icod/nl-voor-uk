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

<?php

$url = 'https://gist.githubusercontent.com/icod/5da1fd545388edf9089edb973ae6f8f5/raw/4c3e9b54dac8fca9aa8a191bc45066900aa0dbb3/Nederlands-voor-Oekra%25C3%25AFners.md';
$cache_file = $_SERVER['DOCUMENT_ROOT'] . '/cache/cache.php';

if (file_exists($cache_file) && (filemtime($cache_file) > (time() - 60 * 5 ))) {
   // Cache file is less than five minutes old.
   // Don't bother refreshing, just use the file as-is.
   $file = file_get_contents($cache_file);
} else {
   // Our cache is out-of-date, so load the data from our remote server,
   // and also save it over our cache for next time.	 
   $file = file_get_contents($url);
	 
	 
   file_put_contents($cache_file, $file);
}

echo $file;
	
?>

</body>