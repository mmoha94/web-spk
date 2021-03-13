<?php
$nam  = $_POST['nam'];
$fam  = $_POST['fam'];

$fname = $_FILES['pic']['name'];
$fsize = $_FILES['pic']['size'];
$ftype = $_FILES['pic']['type'];
$tname = $_FILES['pic']['tmp_name'];

$arr = explode('.' , $fname );
$ext = end($arr);

if ( ($ext=='jpg' || $ext=='png')  &&   $fsize <= 100*1024  )
{
   move_uploaded_file($tname , "uploads/$fname");
} else echo "invalid file";

?>
<html>
<body>
<?php echo "FNAME : $fname <br> TNAME:$tname <br> FSIZE:$fsize"; ?>
<br>
<img src="uploads/<?=$fname?>" />
</body>
</html>