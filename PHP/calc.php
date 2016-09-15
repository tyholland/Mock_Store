<?php
session_start();
include('dbconnect.php');
include('head1.php');
?>
<p id="text" align="left">
Calculators
</p>

<div id="item" align="left">
<img src="add/calc.jpg" width="150px" height="200px" />
</div>

<?
if(isset($_SESSION['resId2']))
{
?>
<form method="post" action="cart.php">
<?
}
else
{
?>
<form onsubmit="return Alert3()">
<?
}
?>

<div id="item2" align="left">
<b>Name:</b> TI-84 Graphing Calc.<br><br>
<b>Brief Description:</b><br>
24KB RAM and 480KB flash ROM memory, 2.5x the speed of the TI-83 Plus, 
13 preloaded handheld software applications including Cabri Jr. interactive geometry software
</div>
<div id="item3" align="left">
<b>Price:</b> $117.99<br>
<input type="submit" name="graph" value="Add to Cart">
</div>

<div id="item4" align="left">
<img src="add/calc2.jpg" width="150px" height="200px" />
</div>

<div id="item5" align="left">
<b>Name:</b> BA II Financial Calc.<br><br>
<b>Brief Description:</b><br>
Efficient and versatile financial calculation at your fingertips, like uneven 
cash flow analysis and advanced statistics features. Great for accounting and investment
</div>
<div id="item10" align="left">
<b>Price:</b> $30.99<br>
<input type="submit" name="finance" value="Add to Cart">
</div>

<div id="item7" align="left">
<img src="add/calc3.jpg" width="150px" height="200px" />
</div>

<div id="item8" align="left">
<b>Name:</b> HP Scientific Calc.<br><br>
<b>Brief Description:</b><br>
With this scientific calculator, you have the choice of working between RPN or algebraic 
entry-system logic. The 2-line display with adjustable contrast makes it easy to read menus.
</div>
<div id="item11" align="left">
<b>Price:</b> $59.99<br>
<input type="submit" name="science" value="Add to Cart"></form>
</div>

<br><br>
<br><br>
<br><br>

<?
include('end.php');
?>