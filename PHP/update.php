<?php
session_start();
include('dbconnect.php');
if(isset($_SESSION['resId2']))
{

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$user = $_REQUEST['user'];
$pwd1 = $_REQUEST['pwd1'];
$pwd2 = $_REQUEST['pwd2'];
$pwd3 = $_REQUEST['pwd3'];
$answer = $_REQUEST['answer'];

if ($answer == 'Update')
{
	if ($pwd2 == '' && $pwd3=='')
	{
		$query = "update register2
						set fname = '$fname', lname = '$lname', user = '$user', pwd1 = '$pwd1', pwd2 = '$pwd1', email = '$email'
						where register2.id = '{$_SESSION['resId2']}' ";
					
		$result = mysql_query($query, $link) or die("first kill");
	
		$query2 = "update Login2
						set user = '$user', pwd = '$pwd1'
						where Login2.id = '{$_SESSION['resId2']}' ";
					
		$result2 = mysql_query($query2, $link) or die("first kill");	
	}
	else
	{
		$query = "update register2
							set fname = '$fname', lname = '$lname', user = '$user', pwd1 = '$pwd2', pwd2 = '$pwd3', email = '$email'
							where register2.id = '{$_SESSION['resId2']}' ";
						
		$result = mysql_query($query, $link) or die("first kill");

		$query2 = "update Login2
							set user = '$user', pwd = '$pwd2'
							where Login2.id = '{$_SESSION['resId2']}' ";
							
		$result2 = mysql_query($query2, $link) or die("first kill");
	}

	include('index.php');
	?>
	<script type = "text/javascript">
	alert ("Update is successful");
	</script>
	<?
}
else if($answer == 'Confirm')
{
	$query2 = "select *
						from register2 where register2.id = '{$_SESSION['resId2']}'";
					
	$result2 = mysql_query($query2, $link) or die("first kill");
	$row2 = mysql_fetch_row($result2);

	if ($fname == $row2[1] && $lname == $row2[2] && $user == $row2[3] && $pwd1 == $row2[4] && $email == $row2[6])
	{
	include('index.php');
	?>
	<script type = "text/javascript">
	alert ("Confirmation is successful");
	</script>
	<?
	}
}
}
else
{
	header('location:index.php');
}
?>