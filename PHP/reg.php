<?
include('head1.php');
?>
<p id="text" align="left">
Registration
</p>

<div id="block2">
<p>
<form name="reg" method="get" onsubmit="return Info();" action="upload.php">
<table>
<tr>
<td>First Name:</td>
<td><input type="text" name="fname"></td>
</tr>
<tr>
<td>Last Name:</td>
<td><input type="text" name="lname"></td>
</tr>
<tr>
<td>Email:</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>Username:</td>
<td><input type="text" name="user"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pwd1"></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type="password" name="pwd2"></td>
</tr>
<tr>
<td><br><input type="submit" value="Submit"></td>
</tr>
</table>
</p>
</form>
</div>


<div id="space2">
</div>
<?
include('end.php');
?>