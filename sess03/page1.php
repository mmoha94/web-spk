<?php
$list[0]=14;
$list[1]=17.5;
$list[2]="ali";
// روش دوم
$list = array(14 , 17.5 , 'ali');
$list = [ 14 , 17.5 , 'ali'];
// associative انجمنی

$list2['sara'] = 14;
$list2['mina'] = 17.5;
$list2['amin'] = 16.25;

$list2 = array('sara' =>14 , 
               'mina' =>17.5 ,
               'amin' =>16.25  );
$list2 = ['sara' =>14 , 
          'mina' =>17.5 ,
          'amin' =>16.25  ];

for( $i=0 ; $i<3 ; $i++ )
  echo $list[$i].'<br>';

foreach($list2 as $k=>$v )
  echo "$k : $v <br>";  

$stud['id']=100;
$stud['name']='sara';
$stud['avgr']=18.5;

foreach($stud as $k=>$v )
  echo "$k : $v <br>";  



?>
