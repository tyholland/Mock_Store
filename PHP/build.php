<?php
session_start();
include('dbconnect.php');
include('head1.php');
?>
<p id="text" align="left">
Building Sets
</p>

<div id="item" align="left">
<img src="add/build.jpg" width="200px" height="200px" />
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
<b>Name:</b> LEGO Power Miners<br><br>
<b>Brief Description:</b><br>
Defend the station from the rock monsters! The Power Miners built this massive underground 
station to gather crystals. Includes rock monster and three Power Miners mini-figures.
</div>
<div id="item3" align="left">
<b>Price:</b> $69.99<br>
<input type="submit" name="miners" value="Add to Cart">
</div>

<div id="item4" align="left">
<img src="add/build2.jpg" width="200px" height="200px" />
</div>

<div id="item5" align="left">
<b>Name:</b> LEGO Christmas<br><br>
<b>Brief Description:</b><br>
With an orange carrot nose, a bright red bow tie, and a broom in his hand, this buildable 
LEGO snowman is all ready for the holidaysand for you to hang him up on your tree!
</div>
<div id="item10" align="left">
<b>Price:</b> $3.49<br>
<input type="submit" name="christ" value="Add to Cart">
</div>

<div id="item7" align="left">
<img src="add/build3.jpg" width="200px" height="200px" />
</div>

<div id="item8" align="left">
<b>Name:</b> LEGO Star Wars<br><br>
<b>Brief Description:</b><br>
With their moving tracks and forward-firing laser cannons, the Separatist's tank droids 
fight in battle after battle in the Clone Wars. But clone troopers are ready to face them!
</div>
<div id="item10" align="left">
<b>Price:</b> $24.99<br>
<input type="submit" name="wars" value="Add to Cart"></form>
</div>

<br><br>
<br><br>
<br><br>

<?
include('end.php');
?>