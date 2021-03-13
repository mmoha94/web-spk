<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table width="600" border="1">
  <tr> 
    <td> id </td> 
    <td> name </td>
    <td> average </td>
  </tr>
<?php
$fp = fopen('list.txt' , 'r');
$line = fgets($fp);
while( !feof($fp) ) {
 $row =  explode(',' , $line );   
?>
  <tr> 
    <td><?=$row[0]?> </td> 
    <td><?=$row[1]?></td>
    <td><?=$row[2]?></td>
  </tr>
<?php
$line = fgets($fp);
} ?>
</table>    
</body>
</html>
