<?php
session_start();
include('dbconnect.php');
include('head1.php');
?>
<p id="text" align="left">
Exercise & Fitness
</p>

<div id="item" align="left">
<img src="add/fit.jpg" width="200px" height="200px" />
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
<b>Name:</b> Sole F63 Treadmill<br><br>
<b>Brief Description:</b><br>
The Sole F63 Treadmillintuitive features include speed and incline adjustments on the 
handrails, built-in cooling fans, and a convenient blue backlit LCD display
</div>
<div id="item3" align="left">
<b>Price:</b> $999.99<br>
<input type="submit" name="tread" value="Add to Cart">
</div>

<div id="item4" align="left">
<img src="add/fit2.jpg" width="200px" height="200px" />
</div>

<div id="item5" align="left">
<b>Name:</b> Bowflex 5/52 SelectTechs<br><br>
<b>Brief Description:</b><br>
These Bowflex SelectTechs dumbbells features a unique weight system that lets you adjust each 
dumbbell from 5-lbs to 52.5-lbs quickly, easily and safely.
</div>
<div id="item10" align="left">
<b>Price:</b> $399.99<br>
<input type="submit" name="bow" value="Add to Cart">
</div>

<div id="item7" align="left">
<img src="add/fit3.jpg" width="200px" height="200px" />
</div>

<div id="item8" align="left">
<b>Name:</b> Schwinn 220 Bike<br><br>
<b>Brief Description:</b><br>
This bike delivers a challenging workout in a relaxed position, with increased lower 
back support. It features BioFit comfort with an adjustable console and seat.
</div>
<div id="item10" align="left">
<b>Price:</b> $349.99<br>
<input type="submit" name="nike" value="Add to Cart"></form>
</div>

<br><br>
<br><br>
<br><br>

<?
include('end.php');
?>