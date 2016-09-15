<?php
session_start();
include('dbconnect.php');
include('head1.php');
?>
<p id="text" align="left">
Camping
</p>

<div id="item" align="left">
<img src="add/camp.jpg" width="200px" height="200px" />
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
<b>Name:</b> Columbia Sleeping Bag<br><br>
<b>Brief Description:</b><br>
This sleeping bag is a lightweight liner bag with a comfort rating of 55-degrees F for 
warmer conditions. It provides a soft and warm bag that resists dirt and moisture.  
</div>
<div id="item3" align="left">
<b>Price:</b> $39.99<br>
<input type="submit" name="bag" value="Add to Cart">
</div>

<div id="item4" align="left">
<img src="add/camp2.jpg" width="200px" height="200px" />
</div>

<div id="item5" align="left">
<b>Name:</b> Coleman Evanston 6<br><br>
<b>Brief Description:</b><br>
The tent is designed to withstand the elements and keep you dry and protected. The 
dome structure is simple to set up, and the front porch provides a great outdoor living space. 
</div>
<div id="item10" align="left">
<b>Price:</b> $169.99<br>
<input type="submit" name="tent" value="Add to Cart">
</div>

<div id="item7" align="left">
<img src="add/camp3.jpg" width="200px" height="200px" />
</div>

<div id="item8" align="left">
<b>Name:</b> Stansport Propane Stove<br><br>
<b>Brief Description:</b><br>
The Stansport high-output propane stove gives you versatile cooking options with 2 
high-output 12,000 BTU capacity burners with large burners for maximum heat distribution.
</div>
<div id="item10" align="left">
<b>Price:</b> $79.99<br>
<input type="submit" name="stove" value="Add to Cart"></form>
</div>

<br><br>
<br><br>
<br><br>

<?
include('end.php');
?>