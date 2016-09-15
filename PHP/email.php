<?php
session_start();
include('dbconnect.php');
if(isset($_SESSION['resId2']))
{

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$complete = $_REQUEST['done'];
$product = $_REQUEST['prod'];
$price = $_REQUEST['sum'];

if ($complete == 'Submit Order')
{
	$query2 = "select *
					from register2 where id = '{$_SESSION[resId2]}'";

	$result2 = mysql_query($query2,$link) or die("help im dying, on my insert");
	$row2 = mysql_fetch_row($result2);
	
	$mail_to = "$row2[6]";
	$mail_subject = "Receipt from BJ's Wholesale Club"; 
	$random_hash = md5(date('r', time())); 
	ob_start();
	?>
--newpart-<?php echo $random_hash; ?>a
Content-Type: text/html; charset="iso-8859-1"
Content-Transfer-Encoding: 7bit 

<? $size = count($product); ?>
		
<? for($i=0; $i < $size; $i++)
{
echo "$product[$i] ....................... $price[$i] \r";
} ?>

<? $total = array_sum($price); ?>
<? $total += 1.00; ?>

Shipping	$1.00
Total<? echo "		$$total"; ?>
<? echo "\r \r"; ?>
--newpart-<?php echo $random_hash; ?>a-- 

<?
	$source = ob_get_contents();
	ob_end_clean();
	$mail_body = "$source";
	$mail_header = "From: bjs@wholesale.com";

	mail($mail_to, $mail_subject, $mail_body, $mail_header);
	
	$query = "truncate Product";
	$result = mysql_query($query,$link) or die("help im dying, on my insert");
}

else if ($complete == 'Submit')
{
$query = "insert into Email";
$query .= "(id,fname,lname,email)";
$query .= " values('', '$fname', '$lname', '$email')";

$result = mysql_query($query,$link) or die("second kill");
$id = mysql_insert_id($link);

$query2 = "select *
					from Email where id = '{$id}'";

$result2 = mysql_query($query2,$link) or die("help im dying, on my insert");
$row2 = mysql_fetch_row($result2);

$mail_to = "holtyr62@alumni.pct.edu";
$mail_subject = "Message from BJ's Wholesale Club Customer"; 
$mail_body = "$message \n\n Sincerely, \n $fname $lname";
$mail_header = "From: $row2[3]";

mail($mail_to, $mail_subject, $mail_body, $mail_header);
}

header("location:index.php");
}
else 
{
header("location:index.php");
}
?>