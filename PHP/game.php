<?php
session_start();
include('dbconnect.php');
include('head1.php');
?>
<p id="text" align="left">
Game Consoles
</p>

<div id="item" align="left">
<img src="add/wii.jpg" width="200px" height="200px" />
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
<b>Name:</b> Wii<br><br>
<b>Brief Description:</b><br>
The Wii console has 512 megabytes of internal flash memory, two USB 2.0 ports and built-in 
wired and wireless broadband Internet capability. Includes one wii remote and one wii nunchuk.
</div>
<div id="item3" align="left">
<b>Price:</b> $199.99<br>
<input type="submit" name="wii" value="Add to Cart">
</div>

<div id="item4" align="left">
<img src="add/ps3.jpg" width="200px" height="200px" />
</div>

<div id="item5" align="left">
<b>Name:</b> Playstation 3<br><br>
<b>Brief Description:</b><br>
You get a free PlayStation Network membership, built-in Wi-Fi and 120GB of hard disk drive 
storage for games, music, videos and photos.
</div>
<div id="item6" align="left">
<b>Price:</b> $299.99<br>
<input type="submit" name="ps3" value="Add to Cart">
</div>

<div id="item7" align="left">
<img src="add/xbox360.jpg" width="200px" height="200px" />
</div>

<div id="item8" align="left">
<b>Name:</b>Xbox 360<br><br>
<b>Brief Description:</b><br>
The perfect blend of powerful technology, sophisticated design and realized possibilities for the 
future of games and entertainment has arrived. 
</div>
<div id="item9" align="left">
<b>Price:</b> $249.99<br>
<input type="submit" name="xbox360" value="Add to Cart"></form>
</div>

<br><br>
<br><br>
<br><br>

<?
include('end.php');
?>