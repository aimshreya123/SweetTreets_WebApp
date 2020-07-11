<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="cake.css">
</head>
<body class="con">
<div class="div1">
<img src="logo.png" />
<div class="div_nav"><a href="contact.php">ORDER</a><a href="career.php">CAREER</a><a href="about.php">ABOUT US</a><a href="main.php">HOME</a></div>
</div><br><br><br>
<div class="headingform"><h1><center> SWEET TREETS ORDER FORM </center></h1></div>
<div class="contactform">
<form method="post" name="form1" action="db.php">
<table border=0 align="center" class="tble">
<tr>
<td><h2>Customer Information</h2></td>
</tr>
<tr><td>NAME</td>
<td><input type="text" name="t1" placeholder="Enter your name" size="40" required class="box"/></td></tr>
<tr><td>PHONE NO.</td><td><input type="number" class="box" name="t2" placeholder="Enter your phone no." size="40" required/></td></tr>
<tr><td>CITY</td><td><input type="text" class="box" name="t3" placeholder="Enter your city" size="40" required/></td></tr>
<tr><td>ADDRESS</td><td><textarea name="t4" class="box" placeholder="Enter your Address" cols="31" required/></textarea></td></tr>
<tr><td>ZIP CODE</td><td><input type="number" class="box" name="t5" placeholder="Enter your Zip Code" size="40" required/></td></tr></table>
<table border=0 cellpadding="10" cellspacing="5" align="center" class="tble" >
<tr>
<td><h2>Cake Size</h2></td>
<td>&nbsp;</td>
</tr>
<tr><td>CAKE SHEET</td><td>SERVES</td><td><td>PRICE</td></tr>
<tr><td>Full Sheet 2-3 Layers</td><td>80-94 People</td><td><td>Rs.1000</td></tr>
<tr><td>Half Sheet 2-3 Layers</td><td>30-50 People</td><td><td>Rs.500</td></tr>
<tr><td>Quarter Sheet 2-3 Layers</td><td>15-20 People</td><td><td>Rs.250</td></tr></table>
<table border=0 cellpadding="10" cellspacing="5" align="center" class="tble">
<tr>
<td><h2>Cakes</h2></td>
</tr>
<tr><td><input type="radio" value="Pink Forest" name="cakes">Pink Forest</td><td><input type="radio" value="Rainbow Delight" name="cakes">Rainbow Delight</td><td><input type="radio" value="Choc 'N' Berries" name="cakes">Choc 'N' Berries</td></tr>
<tr><td><input type="radio" value="Caramelised Apple" name="cakes">Caramelised Apple</td><td><input type="radio" value="Pistachio Loaf" name="cakes">Pistachio Loaf</td><td><input type="radio" value="Fruity Berries" name="cakes">Fruity Berries</td></tr><tr><td><input type="radio" value="Blueberry Blast" name="cakes">Blueberry Blast</td><td><input type="radio" value="Peach Delight" name="cakes">Peach Delight</td><td><input type="radio" value="Chin Chin Chu Cheesecake" name="cakes">Chin Chin Chu Cheesecake</td></tr></table>
<table border=0 cellpadding="10" cellspacing="5" align="center" class="tble">
<tr>
<td><h2>Cupcakes</h2></td>
</tr>
<tr><td><input type="radio" value="Brown Sugar" name="cupcakes">Brown Sugar</td><td><input type="radio" value="Strawberry Crush" name="cupcakes">Strawberry Crush</td><td><input type="radio" value="Triple Berries" name="cupcakes">Triple Berries</td></tr><tr><td><input type="radio" value="Candy Choco Delight" name="cupcakes">Candy Choco Delight</td><td><input type="radio" value="Blueberry Madness" name="cupcakes">Blueberry Madness</td><td><input type="radio" value="Pink Berries" name="cupcakes">Pink Berries</td></tr><tr><td><input type="radio" value="Vanilla Choc Crunch" name="cupcakes">Vanilla Choc Crunch</td><td><input type="radio" value="Pink Flair" name="cupcakes">Pink Flair</td><td><input type="radio" value="Triple Candlestick Cupcakes" name="cupcakes">Triple Candlestick Cupcakes</td></tr></table>
<table border=0 cellpadding="10" cellspacing="5" align="center" class="tble">
<tr>
<td><h2>Donuts</h2></td>
</tr>
<tr><td><input type="radio" value="Salted Caramel" name="donuts">Salted Caramel</td><td><input type="radio" value="Choco Swirl" name="donuts">Choco Swirl</td><td><input type="radio" value="Krunch Kraze" name="donuts">Krunch Kraze</td></tr><tr><td><input type="radio" value="Rainbow Surprise" name="donuts">Rainbow Surprise</td><td><input type="radio" value="Double Trouble" name="donuts">Double Trouble</td><td><input type="radio" value="Black N White Bavarian" name="donuts">Black N White Bavarian</td></tr><tr><td><input type="radio" value="Divine Crush" name="donuts">Divine Crush</td><td><input type="radio" value="Brownie Crumble" name="donuts">Brownie Crumble</td><td><input type="radio" value="Midnight Beauty" name="donuts">Midnight Beauty</td></tr></table>
<table border=0 cellpadding="10" cellspacing="5" align="center">
<tr>
<td><h2> Decoration (Colour & Design)</h2></td>
</tr>
<tr><td><b>DESCRIBE</b></td><td><textarea cols="40" rows="5" class="box" name="des"></textarea></td></tr></table>
<br><br><br><br />
<input type="Submit" value="SUBMIT" class="btn"/>
</form>
</div>
</body>
</html>
