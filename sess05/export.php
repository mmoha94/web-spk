<?php
$studs = [
    ['id'=>100 , 'name'=>'reza' , 'avgr'=>19 ] ,
    ['id'=>101 , 'name'=>'sara' , 'avgr'=>19.75 ] ,
    ['id'=>102 , 'name'=>'mina' , 'avgr'=>19.50 ] ,
];

$fp = fopen('list.txt','w');
foreach( $studs as $row )
{
   $line = $row['id'].','.$row['name'].','.$row['avgr']."\r\n";
   fwrite($fp , $line);  
}
fclose($fp);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
   <a href="list.txt"> download file </a> 
</body>
</html>

