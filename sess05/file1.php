<?php
$fp = fopen('studs.txt','w');
fwrite($fp , "Hello\r\n");
fwrite($fp , "How Are You\r\n");
fwrite($fp , "Thanks\r\n");
fclose($fp);
?>