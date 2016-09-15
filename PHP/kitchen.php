<?php
session_start();
include('dbconnect.php');
include('head1.php');
?>
<p id="text" align="left">
Kitchen Appliances
</p>

<div id="item" align="left">
<img src="add/kitchen.jpg" width="200px" height="200px" />
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
<b>Name:</b> Nutid Refrigerator/Freezer<br><br>
<b>Brief Description:</b><br>
This refrigerator/freezer combination has 3 adjustable shelves of tempered glass with spill 
guard included. It has adaptable spacing according to whatever your storage needs are.
</div>
<div id="item3" align="left">
<b>Price:</b> $999.99<br>
<input type="submit" name="freeze" value="Add to Cart">
</div>

<div id="item4" align="left">
<img src="add/kitchen2.jpg" width="200px" height="200px" />
</div>

<div id="item5" align="left">
<b>Name:</b> Eldig Glass Cooktop<br><br>
<b>Brief Description:</b><br>
This cooktop has 1 radiant element with simmer function, for use when melting chocolate 
or simmering sauce. There is a built-in restheat indicator light for increased safety.
</div>
<div id="item10" align="left">
<b>Price:</b> $429.99<br>
<input type="submit" name="cooktop" value="Add to Cart">
</div>

<div id="item7" align="left">
<img src="add/kitchen3.jpg" width="200px" height="200px" />
</div>

<div id="item8" align="left">
<b>Name:</b> Renlig Dishwasher<br><br>
<b>Brief Description:</b><br>
This dishwasher gives you an extra option of drying dishes without heat available. Saves 
on energy and is practical when drying plates and mugs in heat-sensitive materials.
</div>
<div id="item10" align="left">
<b>Price:</b> $349.99<br>
<input type="submit" name="dish" value="Add to Cart"></form>
</div>

<br><br>
<br><br>
<br><br>

<?
include('end.php');
?>