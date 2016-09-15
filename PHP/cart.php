<?php
session_start();
include('dbconnect.php');
if(isset($_SESSION['resId2']))
{

	include('function.php');
	
	include('head1.php');
	$query = "select * from Product";
	$result = mysql_query($query, $link) or die("fourth kill");

	$i = 0;
	echo "<table border='1' cellpadding='10'>
			  <tr>
			  <th></th>
			  <th>Qty.</th>
			  <th>Product</th>
			  <th>Price</th>
			  </tr>";
	while($row = mysql_fetch_row($result))
		{
			echo "<tr>";
			echo "<form method='get' action='delete.php'>";
			echo "<td> <input type='checkbox' name='del2[$i]' value='$row[0]'></td>";
			echo "<td> <input type='text' name='num[$i]' size='1' maxlength='3' value='$row[3]'></td>";
			echo "<td> <input type='hidden' name='product[$i]' value='$row[1]'>$row[1]</td>";
			echo "<td> <input type='hidden' name='price[$i]' value='$row[2]'>$$row[4]</td>";
			echo "<input type='hidden' name='sum[$i]' value='$row[4]'>";
			echo "</tr>";
			++$i;
		}
		
		echo "</table>";
	?>
		<p>
		<table>
		<tr>
		<td><input type="button" onclick="window.location.href='index.php'" value="Continue Shopping"></td>
		<td><input type="submit" name="del" value="Update"></td>
		</tr>
		<tr>
		<td><input type="submit" name="del" value="Check Out"></td>
		<td><input type="submit" name="del" value="Delete"></td>
		</tr>
		</table>
		</p>
		</form>
	<?
	include('end.php');
}
else
{
header("location:index.php");
}
?>