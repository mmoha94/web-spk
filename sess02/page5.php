<html>
<body>
<?php 
// while
// do while
// for
for($i=1 ; $i<=100 ; $i++) { ?>
<h1> Hello <?= $i ?></h1>
<?php } ?>
<hr>
<?php 
$i=1;
do{ ?>
<h1> Hello <?= $i ?></h1>

<?php
$i++;
}while($i<=100) ; ?>

<?php 
$i=1;
while($i<=100) {
?>
<h1> Hello <?= $i ?></h1>
<?php 
$i++;
} ?>
</body>
</html>