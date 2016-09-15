<?php
session_start();
include('dbconnect.php');
include('head1.php');
?>
<p id="text" align="left">
Stuffed Animals
</p>

<div id="item" align="left">
<img src="add/animal.jpg" width="200px" height="200px" />
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
<b>Name:</b> FAO Schwarz Bear<br><br>
<b>Brief Description:</b><br>
The FAO Schwarz 2009 Collectible Pea Coat Bear comes dressed in a fleece pea coat 
with bear-embroidered buttons on a hood. It has the year embroidered on one paw.
</div>
<div id="item3" align="left">
<b>Price:</b> $39.99<br>
<input type="submit" name="bear" value="Add to Cart">
</div>

<div id="item4" align="left">
<img src="add/animal2.jpg" width="200px" height="200px" />
</div>

<div id="item5" align="left">
<b>Name:</b> Webkinz Lion<br><br>
<b>Brief Description:</b><br>
The Webkinz Stuffed Animal Caramel Lion is a velvety-soft plush pet that's made for 
hugs! Kids can learn to care for a pet, and have share time with their friends.
</div>
<div id="item10" align="left">
<b>Price:</b> $12.99<br>
<input type="submit" name="lion" value="Add to Cart">
</div>

<div id="item7" align="left">
<img src="add/animal3.jpg" width="200px" height="200px" />
</div>

<div id="item8" align="left">
<b>Name:</b> Animal Alley Monkey<br><br>
<b>Brief Description:</b><br>
This warm, cuddly and oh-so-huggable Animal Alley Brown Monkey is the perfect 
addition to your playroom's zoo. This primate is incredibly soft and snuggly.
</div>
<div id="item10" align="left">
<b>Price:</b> $14.99<br>
<input type="submit" name="monkey" value="Add to Cart"></form>
</div>

<br><br>
<br><br>
<br><br>

<?
include('end.php');
?>