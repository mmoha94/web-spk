<html>
<head>
 <style>
    td{
        width:300px;
        padding:10px;
        background-color:#aaf;
    }
 
 </style>
</head>
<body>
<table >
<tr>
  <td> ID </td>
  <td> NAME </td>
</tr>
<?php
$studs = array( array('id'=>100 , 'name'=>'ali'),
                array('id'=>101 , 'name'=>'sara'),
                array('id'=>104 , 'name'=>'mina'));

foreach($studs as $row) { ?>
<tr>
  <td> <?= $row['id']; ?> </td>
  <td> <?= $row['name']; ?> </td>
</tr>
<?php } ?>
</table>
</body>
</html>
