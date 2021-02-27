<?php
$studs[0]['id'] = 100;
$studs[0]['name'] = 'ali';

$studs[1]['id'] = 101;
$studs[1]['name'] = 'sara';

$studs[2]['id'] = 104;
$studs[2]['name'] = 'mina';

$studs[0] = array('id'=>100 , 'name'=>'ali');
$studs[1] = array('id'=>101 , 'name'=>'sara');
$studs[2] = array('id'=>104 , 'name'=>'mina');

$studs = array( array('id'=>100 , 'name'=>'ali'),
                array('id'=>101 , 'name'=>'sara'),
                array('id'=>104 , 'name'=>'mina'));

foreach($studs as $row)
{
   echo "<hr>ID:".$row['id'];
   echo "<br>NAME:".$row['name'];
}
?>