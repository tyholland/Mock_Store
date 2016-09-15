<?php
session_start();
include('dbconnect.php');
include('head1.php');
?>
<p id="text" align="left">
Paper & Pads
</p>

<div id="item" align="left">
<img src="add/paper.jpg" width="200px" height="200px" />
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
<b>Name:</b> OfficeMax Pads<br><br>
<b>Brief Description:</b><br>
Recycled Perforated Pads. 16 lb. paper with 28 pt chipboard backing for writing support. 
Microperforations for a clean, easy tear. 50 sheets/pad. Sold in packs of 12.
</div>
<div id="item3" align="left">
<b>Price:</b> $11.49<br>
<input type="submit" name="pad" value="Add to Cart">
</div>

<div id="item4" align="left">
<img src="add/paper2.jpg" width="200px" height="200px" />
</div>

<div id="item5" align="left">
<b>Name:</b> HP White Paper<br><br>
<b>Brief Description:</b><br>
An extra-bright paper formulated to enhance the output of color inkjet printers
ColorLok technology for smear resistance, bolder blacks, and brighter colors
</div>
<div id="item10" align="left">
<b>Price:</b> $10.99<br>
<input type="submit" name="paper" value="Add to Cart">
</div>

<div id="item7" align="left">
<img src="add/paper3.jpg" width="200px" height="200px" />
</div>



<div id="item8" align="left">
<b>Name:</b> Five Star Paper<br><br>
<b>Brief Description:</b><br>
Built Strong to Last Long! Durable products that last through the school year.
11" x 8-1/2" sheets, 3-hole punched
</div>
<div id="item9" align="left">
<b>Price:</b> $6.49<br>
<input type="submit" name="star" value="Add to Cart"></form>
</div>

<br><br>
<br><br>
<br><br>

<?
include('end.php');
?>