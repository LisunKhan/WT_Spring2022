<!DOCTYPE html>
<html>
 
<body>
<?php
    include "../Control/registration.php";
    ?>

<h2>Registration From</h2>
<hr>

<form action = "" method ="POST" enctype="multipart/form-data">
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
<input type="checkbox" name = "language1" value = "Java">Java
<input type="checkbox" name = "language2" value = "PHP">PHP
<input type="checkbox" name = "language3" value = "C++">C++
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

