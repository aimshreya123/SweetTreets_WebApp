<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link rel="stylesheet" type="text/css" href="cake.css">
</head>
<body>
<div class="div1">
<img src="logo.png" />
<div class="div_nav"><a href="contact.php">CONTACT</a><a href="career.php">CAREER</a><a href="about.php">ABOUT US</a><a href="main.php">HOME</a></div>
</div><br><br><br>
<div class="div2">
<script language="javascript">
var i=0;
var path=new Array();
path[0]="1.jpg";
path[1]="8.jpg";
path[2]="31.jpg";
path[3]="4.jpg";
path[4]="5.jpg";
path[5]="7.jpg";
path[6]="2.jpg";
path[7]="61.jpg";
function swapImage(){
	document.slide.src=path[i];
	if(i<path.length-1)
	i++;
	else 
	i=0;
	setTimeout("swapImage()",3500);
}
window.onload=swapImage;
</script>
<img src="7.jpg" name="slide"/>
</div>
<div class="div3" align="center"><p>Sweet Treets Bakery is a local dessert bakery focused on</p><p> delighting our customers with artisanal, beautiful,</p><p> and high-quality cake and desserts.</p></div>
<div class="div4">

<table width="100%">
<tr>
<td align="center"><img src="cake.jpg" /><h3>CAKES</h3><hr  width="70%" color="#990066"/><p>Cake is a form of sweet dessert that is typically baked. Cake is often served as a celebratory dish on ceremonial occasions, such as weddings, anniversaries, and birthdays. There are countless cake recipes available with us.A finished cake is often enhanced by covering it with icing, or frosting, and toppings such as sprinkles.</p>
</td>
<td align="center">
<img src="cupcake.jpg" /><h3>CUP CAKES</h3><hr  width="70%" color="#990066"/>
<p>Cake is a form of sweet dessert that is typically baked. Cake is often served as a celebratory dish on ceremonial occasions, such as weddings, anniversaries, and birthdays. There are countless cake recipes available with us.A finished cake is often enhanced by covering it with icing, or frosting, and toppings such as sprinkles.</p>
</td>
<td align="center">
<img src="donuts.png" /><h3>DONUTS</h3><hr  width="70%" color="#990066"/>
<p>Cake is a form of sweet dessert that is typically baked. Cake is often served as a celebratory dish on ceremonial occasions, such as weddings, anniversaries, and birthdays. There are countless cake recipes available with us.A finished cake is often enhanced by covering it with icing, or frosting, and toppings such as sprinkles.</p>
</td>
</tr>
<tr>
<td align="center">
<form><a href="cakesmain.php"><input type="button" value="SEE MORE" class="button" /></a></form>
</td>
<td align="center">
<form><a href="cupcakesmain.php"><input type="button" value="SEE MORE" class="button" /></a></form>
</td>
<td align="center">
<form><a href="donutsmain.php"><input type="button" value="SEE MORE" class="button" /></a></form>
</td>
</table>
</div>
<div class="div5">
</div>
<div class="div6">"Desert makes everything better!"</div>
<div class="div_footer">
</div>
</body>
</html>

