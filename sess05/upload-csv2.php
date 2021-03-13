<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<table width="600" border="1">
  <tr> 
    <td> id </td> 
    <td> name </td>
    <td> average </td>
  </tr>
<?php
$fname = $_FILES['txt']['tmp_name'];
$fp = fopen($fname  , 'r');
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
