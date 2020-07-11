<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?PHP
$name=$_REQUEST["t1"];
$phone=$_REQUEST["t2"];
$city=$_REQUEST["t3"];
$address=$_REQUEST["t4"];
$zip=$_REQUEST["t5"];
if(isset($_REQUEST["cakes"]))
 $cinfo=$_REQUEST["cakes"];
else
 $cinfo="-";
 if(isset($_REQUEST["cupcakes"]))
 $ccinfo=$_REQUEST["cupcakes"];
else
 $ccinfo="-";
 if(isset($_REQUEST["donuts"]))
 $dinfo=$_REQUEST["donuts"];
else
 $dinfo="-";
$descr=$_REQUEST["des"];
$CONNECTION=mysqli_connect("localhost","root","","project");
if(!$CONNECTION)
{
die("Couldn't connect to server");
}
echo "Connected Successfully";
$sql_query="insert into my_shop(cname, cphone, ccity, cadd, czip, ccake, ccup, cdon, cdes)values('$name','$phone','$city','$address','$zip','$cinfo','$ccinfo','$dinfo','$descr')";

if(!mysqli_query($CONNECTION,$sql_query))
{
echo "record not inserted";
}
else
{
echo "record inserted successfully";
}
mysqli_close($CONNECTION);
?>
</body>
</html>
