<?php
session_start();
include('dbconnect.php');
include('head1.php');
?>
<p id="text" align="left">
Computers
</p>

<div id="item" align="left">
<img src="add/comp2.jpg" width="200px" height="200px" />
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
<b>Name:</b> iMac<br><br>
<b>Brief Description:</b><br>
21.5-inch screen, 3.06GHz Intel Core 2 Duo, 1920 x 1080 resolution, 4GB memory, 500GB 
hard drive, 8x double-layer SuperDrive, NVIDIA GeForce 9400M graphics
</div>
<div id="item3" align="left">
<b>Price:</b> $1,199.99<br>
<input type="submit" name="imac" value="Add to Cart">
</div>

<div id="item4" align="left">
<img src="add/comp.jpg" width="200px" height="200px" />
</div>



<div id="item5" align="left">
<b>Name:</b> Dell Vostro 1520 Laptop<br><br>
<b>Brief Description:</b><br>
Intel Core 2 Duo T6670 w/VT, 2GB Shared Dual Channel DDR2 SDRAM at 800MHz, 
160GB2 5400RPM SATA Hard Drive, Intel Integrated Graphics Media Accelerator 4500MHD
</div>
<div id="item10" align="left">
<b>Price:</b> $549.99<br>
<input type="submit" name="dell" value="Add to Cart">
</div>

<div id="item7" align="left">
<img src="add/comp3.jpg" width="200px" height="200px" />
</div>

<div id="item8" align="left">
<b>Name:</b> MacBook<br><br>
<b>Brief Description:</b><br>
2.26GHz Intel Core 2 Duo, 2GB DDR3 memory, 250GB hard drive1, 8x double-layer SuperDrive, 
NVIDIA GeForce 9400M graphics, Built-in 7-hour battery2
</div>
<div id="item11" align="left">
<b>Price:</b> $999.99<br>
<input type="submit" name="macbook" value="Add to Cart"></form>
</div>

<br><br>
<br><br>
<br><br>

<?
include('end.php');
?>