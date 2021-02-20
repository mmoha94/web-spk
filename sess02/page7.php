<html>
<head>
  <style>
     .box{
         width:150px;
         height:220px;
         background-color:#ddd;
         padding:10px;
         float:left;
         margin:10px;
     }
     .box img {
         width:150px;
         height:150px;
     }
  </style>
</head>
<body>
<?php for($i=1 ; $i<=10; $i++){ ?>
<div class="box">
 <img src="a.jpg">
 <h1> Image </h1>
</div>
<?php } ?>
</body>
</html>