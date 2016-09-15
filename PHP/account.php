<?php
session_start();
include('dbconnect.php');

if(isset($_SESSION['resId2']))
{

$query2 = "select *
					from register2 where register2.id = '{$_SESSION['resId2']}'";
					
$result2 = mysql_query($query2,$link) or die("help im dying, on my insert");
$row2 = mysql_fetch_row($result2);

include('head1.php');
?>
<p id="text" align="left">
Account
</p>

<div id="block4">
<p>
<form name="acc" method="get" action="update.php">
<table>
<tr>
<td>First Name:</td>
<? echo "<td><input type='text' name='fname' value='$row2[1]'></td>"; ?>
</tr>
<tr>
<td>Last Name:</td>
<? echo "<td><input type='text' name='lname' value='$row2[2]'></td>"; ?>
</tr>
<tr>
<td>Email:</td>
<? echo "<td><input type='text' name='email' value='$row2[6]'></td>"; ?>
</tr>
<tr>
<td>Username:</td>
<? echo "<td><input type='text' name='user' value='$row2[3]'></td>"; ?>
</tr>
<tr>
<td>Old Password:</td>
<? echo "<td><input type='password' name='pwd1' value='$row2[4]'></td>"; ?>
</tr>
<tr>
<td>New Password:</td>
<td><input type="password" name="pwd2" value=""></td>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type="password" name="pwd3" value=""></td>
</tr>
<tr>
<td><br><input type="submit" name="answer" onclick="return Confirm();" value="Confirm"></td>
<td><br><input type="submit" name="answer" onclick="return Update();" value="Update"></form></td>
</tr>
</table>
</p>
</div>


<div id="space2">
</div>
<?
include('end.php');
}
else
{
header("location:index.php");
}
?>