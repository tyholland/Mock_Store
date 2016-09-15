<?php
session_start();
include('dbconnect.php');
include('head1.php');
?>
<p id="text" align="left">
Furniture
</p>

<div id="item" align="left">
<img src="add/furn.jpg" width="200px" height="200px" />
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
<b>Name:</b> Ektorp Sofa<br><br>
<b>Brief Description:</b><br>
Seat cushions filled with waterfowl feathers and high resilient polyurethane foam mold 
to your body and regain their shape when you rise - equally comfortable day after day.
</div>
<div id="item3" align="left">
<b>Price:</b> $499.99<br>
<input type="submit" name="sofa" value="Add to Cart">
</div>

<div id="item4" align="left">
<img src="add/furn2.jpg" width="200px" height="200px" />
</div>

<div id="item5" align="left">
<b>Name:</b> Poang Chair<br><br>
<b>Brief Description:</b><br>
This chair has the ability to resilience of a layer glued, bentwood frame of birch provides 
excellent comfort for relaxation. High back provides great support for your neck.
</div>
<div id="item10" align="left">
<b>Price:</b> $89.99<br>
<input type="submit" name="chair" value="Add to Cart">
</div>

<div id="item7" align="left">
<img src="add/furn3.jpg" width="200px" height="200px" />
</div>

<div id="item8" align="left">
<b>Name:</b> Hastveda Armchair<br><br>
<b>Brief Description:</b><br>
This arm chair is Handwoven, and each piece of furniture is unique. It is stackable and it saves 
space when not in use. Plastic feet; protect the furniture if in contact with a moist surface.
</div>
<div id="item10" align="left">
<b>Price:</b> $49.99<br>
<input type="submit" name="arm" value="Add to Cart"></form>
</div>

<br><br>
<br><br>
<br><br>

<?
include('end.php');
?>