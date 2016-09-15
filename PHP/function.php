<?php
$game1 = $_REQUEST['wii'];
$game2 = $_REQUEST['ps3'];
$game3 = $_REQUEST['xbox360'];
$game4 = $_REQUEST['imac'];
$game5 = $_REQUEST['dell'];
$game6 = $_REQUEST['macbook'];
$game7 = $_REQUEST['graph'];
$game8 = $_REQUEST['finance'];
$game9 = $_REQUEST['science'];
$game10 = $_REQUEST['pad'];
$game11 = $_REQUEST['paper'];
$game12 = $_REQUEST['star'];
$game13 = $_REQUEST['bear'];
$game14 = $_REQUEST['lion'];
$game15 = $_REQUEST['monkey'];
$game16 = $_REQUEST['miners'];
$game17 = $_REQUEST['christ'];
$game18 = $_REQUEST['wars'];
$game19 = $_REQUEST['bag'];
$game20 = $_REQUEST['tent'];
$game21 = $_REQUEST['stove'];
$game22 = $_REQUEST['tread'];
$game23 = $_REQUEST['bow'];
$game24 = $_REQUEST['bike'];
$game25 = $_REQUEST['sofa'];
$game26 = $_REQUEST['chair'];
$game27 = $_REQUEST['arm'];
$game28 = $_REQUEST['freeze'];
$game29 = $_REQUEST['cooktop'];
$game30 = $_REQUEST['dish'];
$game31 = $_REQUEST['outdoor'];
$game32 = $_REQUEST['storage'];
$game33 = $_REQUEST['garden'];
	
if(isset($game1) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Wii', '199.99', '1', '199.99')";			
	$result2 = mysql_query($query2, $link) or die("first kill");
}
	
else if(isset($game2) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Playstation 3', '299.99', '1', '299.99')";			
	$result2 = mysql_query($query2, $link) or die("second kill");
}
	
else if(isset($game3) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Xbox 360', '249.99', '1', '249.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game4) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'iMac', '1199.99', '1', '1199.99')";			
	$result2 = mysql_query($query2, $link) or die("first kill");
}
	
else if(isset($game5) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Dell Vostro 1520 Laptop', '549.99', '1', '549.99')";			
	$result2 = mysql_query($query2, $link) or die("second kill");
}
	
else if(isset($game6) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'MacBook', '999.99', '1', '999.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game7) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'TI-84 Graphing Calc.', '117.99', '1', '117.99')";			
	$result2 = mysql_query($query2, $link) or die("first kill");
}
	
else if(isset($game8) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'BA II Financial Calc.', '30.99', '1', '30.99')";			
	$result2 = mysql_query($query2, $link) or die("second kill");
}
	
else if(isset($game9) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'HP Scientific Calc.', '59.99', '1', '59.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game10) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'OfficeMax Pads', '11.49', '1', '11.49')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game11) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'HP White Paper', '10.99', '1', '10.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game12) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Five Star Paper', '6.49', '1', '6.49')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game13) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'FAO Schwarz Bear', '39.99', '1', '39.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game14) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Webkinz Lion', '12.99', '1', '12.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game15) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Animal Alley Monkey', '14.99', '1', '14.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game16) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'LEGO Power Miners', '69.99', '1', '69.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game17) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'LEGO Christmas', '3.49', '1', '3.49')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game18) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'LEGO Star Wars', '24.99', '1', '24.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game19) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Columbia Sleeping Bag', '39.99', '1', '39.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game20) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Coleman Evanston 6', '169.99', '1', '169.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game21) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Stansport Propane Stove', '79.99', '1', '79.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game22) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Sole F63 Treadmill', '999.99', '1', '999.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game23) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Bowfle 5/52 SelectTechs', '399.99', '1', '399.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game24) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Schwinn 220 Bike', '349.99', '1', '349.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game25) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Ektorp Sofa', '499.99', '1', '499.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game26) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Poang Chair', '89.99', '1', '89.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game27) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Hastveda Armchair', '49.99', '1', '49.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game28) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Nutid Refrigerator/Freezer', '999.99', '1', '999.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game29) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Eldig Glass Cooktop', '429.99', '1', '429.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game30) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Renlig Dishwasher', '349.99', '1', '349.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game31) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Outdoor SunShed', '3699.99', '1', '3699.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game32) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Lifetime Storage Shed', '2199.99', '1', '2199.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}

else if(isset($game33) )
{
	$query2 = "insert into Product (id, product, price, qty, amount) values ('', 'Lifetime Garden Shed', '1799.99', '1', '1799.99')";	
	$result2 = mysql_query($query2, $link) or die("third kill");
}
?>