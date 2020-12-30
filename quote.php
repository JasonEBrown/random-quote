<?php
/**
* Add this line of code in your page:
* <?php include "quote.php"; ?>
*/
$quotes[] = "This is a quote";
$quotes[] = "This is another";
$quotes[] = "quote 3";
$quotes[] = "quote 4";
$quotes[] = "quote 5";
$quotes[] = "quote 6";
srand ((double) microtime() * 1000000); 
$randomquote = rand(0,count($quotes)-1);

echo "<p>" . $quotes[$randomquote] . "</p>";
?>
