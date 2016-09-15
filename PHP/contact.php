<?php
include('head1.php');
?>
<p id="text" align="left">
Contact
</p>

<p id="text2" align="left">
BJ's welcomes and appreciates your feedback. E-mail your questions or <br>
comments to us any time by filling out the form below. For even faster <br>
assistance, please enter your membership number in the space provided.
</p>

<p id="text2" align="left">
Please enter your contact information and your question or comment, and a <br>
BJ's Member Care representative will get back to you as soon as possible. <br>
For security reasons, please do not enter any credit card information below.
</p>

<p id="text2" align="left">
Our BJ's Member Care department is available Monday - Friday, 9 A.M. - 7 P.M. <br>
E.T. and Saturday - Sunday, 9 A.M. - 6 P.M. E.T. For any inquiries, <br>
call 800-CAL-LBJS (800-225-5257). 
</p>
<br>

<p align="left">
<form name="mail" method="get" onsubmit="return Email();" action="email.php">
<table id="text3">
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
<td>Questions:</td>
<td><textarea name="message" cols="40" rows="10"></textarea></td>
</tr>
<tr>
<td><br><input type="submit" name="done" value="Submit"></td>
</tr>
</table>
</form>
</p>

<?
include('end.php');
?>