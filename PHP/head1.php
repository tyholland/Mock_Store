<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>
BJ's Wholesale Club
</title>
<!--[if gt IE 6]>
  	<link rel = "stylesheet" type = "text/css" href = "style2.css" />
<![endif]-->
<link rel = "stylesheet" type = "text/css" href = "style.css" />
<script type = "text/javascript" src = "code.js">
</script>
</head>
<body>
<div align="center" id="space">
<div id="part1">

<p align="left" id="logo">
<embed src="add/mock2.swf" loop="false" width="320px" height="100px"/>
</p>

<?php
session_start();
include('dbconnect.php');
if(isset($_SESSION['resId2']))
{
?>
<div id="part2">
<p align="right">
<a href="index.php">Home</a> |
<a href="account.php">Account</a> | 
<a href="cart.php">Cart</a> | 
<a href="contact.php">Contact</a> | 
<a href="locate.php">Location</a> | 
<a href="../index.php">Ty's Profile</a> |
<a href="logout.php">Sign Out</a>
</p>
</div>
<?
}
else
{
?>
<div id="part2">
<p align="right">
<a href="index.php">Home</a> | 
<a href="login.php">Sign In</a> | 
<a href="contact.php">Contact</a> | 
<a href="locate.php">Location</a> | 
<a href="../index.php">Ty's Profile</a>
</p>
</div>
<?
}
?>

<div id="menu"> 
<ul id="items"> 
<li><a href="#">Electronics</a>
<ul>
<li><a href="comp.php">Computers</a></li> 
<li><a href="game.php">Game Consoles</a></li>
</ul> 
</li>
<li><a href="#">Home Appliance</a>
<ul>
<li><a href="furn.php">Furniture</a></li> 
<li><a href="kitchen.php">Kitchen Appliances</a></li> 
</ul> 
</li>
<li><a href="#">Office Supplies</a>
<ul> 
<li><a href="calc.php">Calculators</a></li> 
<li><a href="paper.php">Paper & Pads</a></li> 
</ul> 
</li>
<li><a href="#">Seasonal</a>
<ul> 
<li><a href="storage.php">Sheds & Storage</a></li>
</ul> 
</li>
<li><a href="#">Sports</a>
<ul>
<li><a href="camp.php">Camping</a></li> 
<li><a href="fitness.php">Exercise & Fitness</a></li>
</ul>
</li>
<li><a href="#">Toys</a>
<ul> 
<li><a href="build.php">Building Sets</a></li> 
<li><a href="animal.php">Stuffed Animals</a></li>
</ul> 
</li>
</div>