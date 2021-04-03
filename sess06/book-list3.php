<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body dir="rtl">
موضوع : 
 <select name="sid">
   <option value="0"> --- </option>
<?php 
include('config.php');
$res  = mysqli_query($link ,"select * from subs");
while($row  = mysqli_fetch_assoc($res)) {
?>   
   <option value="<?=$row['sid']?>"> <?=$row['sname']?> </option>
<?php } ?>
 </select>
 <hr>
 <table width="600" border="1" > 
  <tr>
   <th>شناسه</th>
   <th>نام</th>
   <th>مولف</th>
   <th>قیمت</th>
   <th>موضوع</th>
  </tr>
<?php 

$res  = mysqli_query($link ,"select * from books");
while($row  = mysqli_fetch_assoc($res)) {

?>
  <tr>
     <td><?= $row['bid']?></td>
     <td><?= $row['bname']?></td>
     <td><?= $row['author']?></td>
     <td><?= $row['price']?></td>
     <td><?= $row['sid']?></td>
  </tr>

<?php } ?>

 </table>    
</body>
</html>