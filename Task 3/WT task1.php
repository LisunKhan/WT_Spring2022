<html>
 
<body>

<h2>Registration From</h2>
<hr>

<form action="process.php" method="POST">
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
<input type="number" name="age">
</td>
</tr>
<tr>
<td>Designation:</td>
<td>
<input type="radio" name="Gender">Junior Programmer
<input type="radio" name="Gender">Senior Programmer
<input type="radio" name="Gender">Project Lead
</td>
</tr>
<tr>
<td>Prefered language:</td>
<td>
<input type="checkbox" name="cb1">Java
<input type="checkbox" name="cb2">PHP
<input type="checkbox" name="cb3">C++
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
<input type="password" id="pwd" name="pass">
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
<input type="submit" value="Submit" name="submit">
<input type="reset" value="Reset" name="rst">
</td>
</tr>

</form>
</body>
</html>

