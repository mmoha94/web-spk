<?php
$n=5;
$mon = '';
switch($n){
    case 1: $mon = 'Far';   
            break;
    case 2: $mon = 'Ord';     
            break;
    case 3: $mon = 'Khor';    
            break;
    default: $mon = 'None'   ;     
}
echo "Month:$mon";
?>