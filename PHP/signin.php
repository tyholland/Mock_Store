<?php
session_start();
include('dbconnect.php');

$user = $_REQUEST['user'];
$pwd = $_REQUEST['pwd'];

$query2 = "select *
					from Login2 where Login2.user = '{$user}'";
					
$result2 = mysql_query($query2,$link) or die("help im dying, on my insert");
$row2 = mysql_fetch_row($result2);
if(isset($result2))
{
if ($user != $row2[1] || $pwd != $row2[2])
{
include('login.php');
?>
<script type = "text/javascript">
Alert();
</script>
<?
}

else if ($user == $row2[1] && $pwd == $row2[2])
{
$_SESSION['resId2'] = $row2[0];
header("location:index.php");
}
}
?>