<?php
$fp = fopen('studs.txt' ,'r');
$line = fgets($fp);
while( !feof($fp) ) {
   echo "$line<br>";
   $line = fgets($fp); 
}
fclose($fp);
?>