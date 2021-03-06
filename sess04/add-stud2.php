<?php
$nam    = $_POST['nam'];
$fam    = $_POST['fam'];
$pass   = $_POST['pass'];
$email  = $_POST['email'];
$gen    = $_POST['bdate'];
$gen    = $_POST['gen'];
$addr   = $_POST['addr'];
$field  = $_POST['field'];

$sport = 0 ;
$music = 0 ;
$news  = 0 ;
if( isset($_POST['sport']))   $sport = 1 ;
if( isset($_POST['music']))   $music = 1 ;
if( isset($_POST['news']))    $news  = 1 ;   





?>