<html>
<body>
<h1>Student </h1>
<hr>
<form action="add-stud2.php" method="post">
Name :
<input type="text" name="nam" placeholder="enter name">   <br>
Family : 
<input type="text" name="fam" >  <br>
Password:
<input type="password" name="pass"> <br>
Email:
<input type="email" name="email"> <br>
Birth Date:
<input type="date"    name="bdate"> <br>
Gender : <br>
<input type="radio" name="gen" value="1" checked > Male <br>
<input type="radio" name="gen" value="2"> Female <br>
Habbits:<br>
<input type="checkbox" name="sport" checked> Sport <br>
<input type="checkbox" name="music" checked> Music <br>
<input type="checkbox" name="news" > news <br>
Picture:
<input type="file" name="pic"> <br>
Address:<br>
<textarea name="addr" rows="5" cols="50">Birjand,</textarea> <br>
Field: 
<select name="field">
  <option value="1">Computer</option>
  <option value="2" selected>IT</option>
  <option value="3">Graphics</option>
</select> <br><br>








<input type="hidden" name="id" value="1">
<input type="reset" value=" Clear " >
<input type="submit" value=" Add Student " >
</form>
</body>
</html>
