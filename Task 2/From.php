<?php
include"Control/result.php"
?>

<html>
 
<body>

<h2>Registration From</h2>
<hr>

<form action="" method="post">
<table>
<tr>
<td>
First Name:
</td>
<td>
<input type="text" name="fname">
</td>
</tr>
<tr>
<td>
Last Name:
</td>
<td>
<input type="text" name="lname">
</td>
</tr>
<tr>
<td>
Age:
</td>
<td>
<input type="number" name="num">
</td>
</tr>
<tr>
<td>Designation:</td>
<td>
<input type="radio" name="Gender" value="r1">Junior Programmer
<input type="radio" name="Gender" value="r2">Senior Programmer
<input type="radio" name="Gender" value="r3">Project Lead
</td>
</tr>
<tr>
<td>Prefered language:</td>
<td>
<input type="checkbox" name="box1" value="box1">Java
<input type="checkbox" name="box2" value="box2">PHP
<input type="checkbox" name="box3" value="box3">C++
</td>
</tr>
<tr>
<td>
E-mail
</td>
<td>
<input type="text" name="Ename">
</td>
</tr>
<tr>
<td>Password:</td>
<td>
<input type="password" id="pwd" name="pwd">
</td>
</tr>
<tr>
<td>Please choose a file</td>
<td>
<input type="file" id="myfile" name="myfile">
</td>
</tr>
<tr>
<td>
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>

</form>
</body>
</html>

