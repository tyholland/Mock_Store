<?php
include('head1.php');
?>
<p id="text" align="left">
Sign In
</p>

<div id="block">
<p>
<form method="get" name="log" onsubmit="return Info2()" action="signin.php">
<table>
<tr>
<td><strong>username: </strong></td>
<td><input type="text" name="user" size = "11px"></td>
</tr>
<tr>
<td><strong>password: </strong></td>
<td><input type="password" name="pwd" size = "11px"></td>
</tr>
<tr>
<td>
<input type="submit" value="Login">
</form>
</td>
<td>
<form action="reg.php"><input type="submit" value="Register">
</form>
</td>
</tr>
</table>
</p>
</div>

<div id="space">
</div>
<?
include('end.php');
?>