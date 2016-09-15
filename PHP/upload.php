<?php
session_start();
include('dbconnect.php');

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$user = $_REQUEST['user'];
$pwd1 = $_REQUEST['pwd1'];
$pwd2 = $_REQUEST['pwd2'];


$query2 = "select *
					from register2 where register2.user = '{$user}'";
					
$result2 = mysql_query($query2, $link) or die("first kill");
$row2 = mysql_fetch_row($result2);
if(isset($result2))
{
if ($fname != $row2[1] && $lname != $row2[2] && $user != $row2[3] && $pwd1 != $row2[4] && $pwd2 != $row2[5] && $email != $row2[6])
{
$query = "insert into register2";
$query .= "(id,fname,lname,user,pwd1,pwd2,email)";
$query .= " values('', '$fname', '$lname', '$user', '$pwd1', '$pwd2', '$email')";

$result = mysql_query($query,$link) or die("second kill");
$id = mysql_insert_id($link);

$query3 = "insert into Login2";
$query3 .= "(id,user,pwd)";
$query3 .= " values('$id', '$user', '$pwd1')";

$result3 = mysql_query($query3,$link) or die("third kill");

header("location:login.php");
}

else if ($fname == $row2[1] && $lname == $row2[2] && $user == $row2[3] && $pwd1 == $row2[4] && $pwd2 == $row2[5] && $email == $row2[6])
{
include('reg.php');
?>
<script type = "text/javascript">
Alert2();
</script>
<?
}
}
else
{
$query = "insert into register2";
$query .= "(id,fname,lname,user,pwd1,pwd2,email)";
$query .= " values('', '$fname', '$lname', '$user', '$pwd1', '$pwd2', '$email')";

$result = mysql_query($query,$link) or die("second kill");
$id = mysql_insert_id($link);

$query3 = "insert into Login2";
$query3 .= "(id,user,pwd)";
$query3 .= " values('$id', '$user', '$pwd1')";

$result3 = mysql_query($query3,$link) or die("third kill");

header("location:login.php");
}
?>