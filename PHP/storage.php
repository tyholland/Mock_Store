<?php
session_start();
include('dbconnect.php');
include('head1.php');
?>
<p id="text" align="left">
Sheds & Storage
</p>

<div id="item" align="left">
<img src="add/store.jpg" width="200px" height="200px" />
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
<b>Name:</b> Outdoor SunShed<br><br>
<b>Brief Description:</b><br>
This garden building kit includes an L-shaped, full-wall workbench that gives you 
plenty of room to work and 2 functional windows with screens to provide ventilation.
</div>
<div id="item3" align="left">
<b>Price:</b> $3,699.99<br>
<input type="submit" name="outdoor" value="Add to Cart">
</div>

<div id="item4" align="left">
<img src="add/store2.jpg" width="200px" height="200px" />
</div>

<div id="item5" align="left">
<b>Name:</b> Lifetime Storage Shed<br><br>
<b>Brief Description:</b><br>
This sturdy storage shed is a steel-reinforced high-density plastic construction that 
resists dents, while the rigid steel trusses provide additional roof strength. 
</div>
<div id="item10" align="left">
<b>Price:</b> $2,199.99<br>
<input type="submit" name="storage" value="Add to Cart">
</div>

<div id="item7" align="left">
<img src="add/store3.jpg" width="200px" height="200px" />
</div>

<div id="item8" align="left">
<b>Name:</b> Lifetime Garden Shed<br><br>
<b>Brief Description:</b><br>
This large side-entry garden storage shed provides ample room to store outdoor items. 
This design features steel-reinforced, dent-resistant double-wall polyethylene panels.
</div>
<div id="item11" align="left">
<b>Price:</b> $1,799.99<br>
<input type="submit" name="garden" value="Add to Cart"></form>
</div>

<br><br>
<br><br>
<br><br>

<?
include('end.php');
?>