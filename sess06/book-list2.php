<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .box{
       width:200px;
       height:320px;
       border:1px solid #ddd;
       background-color:#f4f4f4;
       padding:10px; 
       float:right;
       margin:10px;
       text-align:right;
    }
    .box img {
        width :200px;
        height:200px;     
    }


    </style>
</head>
<body>
<?php 
include('config.php');
$res  = mysqli_query($link , "SELECT * FROM books");
while( $row = mysqli_fetch_assoc($res )) {
?>
   <div class="box">
      <img src="images/pic1.png" >
      <h2><?=$row['bname']?></h2>
   </div> 
<?php } ?>

</body>
</html>