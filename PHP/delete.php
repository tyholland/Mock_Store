<?php
session_start();
include('dbconnect.php');
if(isset($_SESSION['resId2']))
{

	$del = $_REQUEST['del2'];
	$name = $_REQUEST['del'];
	$num = $_REQUEST['num'];
	$price = $_REQUEST['price'];
	$sum = $_REQUEST['sum'];
	
	if ($name == 'Delete')
	{
		$size = count($num);
		$i = 0;
		while ($i < $size)
		{
			$qty = $num[$i];
			$id = $del[$i];
			$query = "delete from Product where id = '{$id}' ";	
			$result = mysql_query($query, $link) or die("fourth kill");
			++$i;
		}
		header("location:cart.php");
	}
	
	else if ($name == 'Check Out')
	{
		
		$query = "select * from Product";
		$result = mysql_query($query, $link) or die("fourth kill");
		$i=0;
		include('head1.php');
		while($row = mysql_fetch_row($result))
		{
			echo "<form method='get' action='email.php'>
						<div id='item' align='left'>
						<table>
						<tr>
						<td><input type='hidden' name='prod[$i]' value='$row[1]'>$row[1]</td>
						</tr>
						</table>
						</div>";
			echo "<div id='item12' align='right'>
						<table>
						<tr>
						<td><input type='hidden' name='sum[$i]' value='$row[4]'>$$row[4]</td>
						</tr>
						</table>
						</div>";
			++$i;
		}
		echo "<div id='item' align='left'>
						<hr width='510px' align='left'>
						<table>
						<tr>
						<td>Shipping</td>
						</tr>
						<tr>
						<td>Total</td>
						</tr>
						</table>
						</div>";
		$total = array_sum($sum);
		$total += 1.00;
		echo "<div id='item13' align='right'>
						<table>
						<tr>
						<td>$1.00</td>
						</tr>
						<tr>
						<td>$$total</td>
						</tr>
						</table>
						</div>";
		?>
		<div id="item" align="left">
		<p>
		<table>
		<tr>
		<td><input type="submit" name="done" value="Submit Order"></form></td>
		<td><form action="cart.php"><input type="submit" name="back" value="Back"></form></td>
		</tr>
		</table>
		</p>
		</div>
		<?
		include('end.php');
	}
	
	else if($name == 'Update')
	{
		$size = count($num);
		$i = 0;
		while ($i < $size)
		{
			$qty = $num[$i];
			$id = $del[$i];
			$amount = $price[$i] * $qty;
			$query = "update Product set qty = '$qty', amount = '$amount' where id = '{$id}' ";	
			$result = mysql_query($query, $link) or die("fourth kill");
			++$i;
		}
		header("location:cart.php");
	}
}
?>