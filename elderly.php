<?php
$e1=$_POST['e1'];$e2=$_POST['e2'];
$e3=$_POST['e3'];$e4=$_POST['e4'];$e5=$_POST['e5'];$e6=$_POST['e6'];
$e7=$_POST['e7'];$e8=$_POST['e8'];
$e9=$_POST['e9'];$e10=$_POST['e10'];$e11=$_POST['e11'];
$e12=$_POST['e12'];$e13=$_POST['e14'];$e15=$_POST['e15'];
$e16=$_POST['e16'];$e17=$_POST['e17'];$e18=$_POST['e18'];
$e19=$_POST['e19'];$e20=$_POST['e20'];$e21=$_POST['e21'];
$e22=$_POST['e22'];
$e23=$_POST['e23'];$e24=$_POST['e24'];$e25=$_POST['e25'];
$e26=$_POST['e26'];$e27=$_POST['e27'];$e28=$_POST['e28'];
$e29=$_POST['e29'];$e30=$_POST['e30'];$e31=$_POST['e31'];
$e32=$_POST['e32'];$e33=$_POST['e33'];$e34=$_POST['e34'];
$e35=$_POST['e35'];$e36=$_POST['e36'];$e37=$_POST['e37'];
$e38=$_POST['e38'];$e39=$_POST['e39'];$e40=$_POST['e43'];$e44=$_POST['e44'];
$e45=$_POST['e45'];$e46=$_POST['e46'];$e47=$_POST['e47'];
$e48=$_POST['e48'];$e49=$_POST['e49'];$e50=$_POST['e50'];$e51=$_POST['e51'];
$e52=$_POST['e52'];$e53=$_POST['e53'];$e54=$_POST['e54'];
$e55=$_POST['e55'];
//$e56=$_POST['e56'];$e57=$_POST['e57'];//$e58=$_POST['e58'];
//$e59=$_POST['e59'];$e60=$_POST['e60'];//$e61=$_POST['61'];
//$sub=$_POST['submit'];$val;
$lev=$e1+$e2+$e3+$e4+$e5+$e6+$e7+$e8+$e9+$e10+$e11+$e12+$e13+$e15+$e16+$e17+$e18;
$lev2=$e19+$e20+$e21+$e22+$e23+$e24+$e25+$e26+$e27+$e28+$e29+$e30+$e31+$e32+$e33+$e34+$e35+$e36+$e37+$e38+$e39+$e40;
//$lev4=$e56+$e57+$e58+$e59+$e60;
$lev3=$e41+$e42+$e43+$e44+$e45+$e46+$e47+$e48+$e49+$e50+$e51+$e52+$e53+$e54+$e55;
$flev=$lev2+$lev+$lev3;//+$lev4;
echo $flev;
//if (isset($sub)){	echo "your depression level is", $flev;} 
//254
$tot=ceil (($flev)/220*100);
if ($tot<=25) 
{
	
	$tt=$tot;
	$n="this is normal.";
	$ma="";
	$ds="normal";



	# code...
}
elseif ($tot>=26 && 49>=$tot) 
{
	$tt=$tot;
	$ma="CONSULT A DOCTOR AS SOON AS POSSIBLE";
	$n="your level is moderate";
$ds="moderate";
	# code...
}
elseif ($tot>=50) 
{
	# code...
	$tt=$tot;
	$n="THIS IS A VERY HIGH LEVEL!!";
	$ma="CONSULT A DOCTOR IMMEDIATELY!!!!";
	$ds="high";
}

$who="elderly";
//echo "depression level is",ceil($tot) ;

$host="localhost";
$dbuser="root";
$pass="";
$dbname="depression";
 $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
 
    if(mysqli_connect_errno())
    {
	die("connection failed". mysqli_connect_error());
    }
 $sq="INSERT INTO depress (who, level, comment)
VALUES ('$who', '$tt', '$ds')";
mysqli_query($conn, $sq);  
?>
<html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">
	div  {text-align: center; font-family: arial; margin-left: 75px; 
		text-indent: 10%; background-color: lavender;
		max-width: 80%; }
	h1 {color:maroon;}
	h3 {color:black; max-width: 70%; }
	h2{color: red; font-size: 40px;}
	
	nav {background-color: transparent; height: 10%}
	a {display:inline-block; font-size: 150%;width:25%; color: white; height: 50px;}
a:link {text-decoration:none;}
a:visited {text-decoration:none;}
a:hover {text-decoration:underline;}
a:active {text-decoration:underline;}
a:link {background-color:gray;}
a:visited {background-color:gray;}
a:hover {background-color:#FF704D;}
a:active {background-color:#FF704D;}
body {background-color: teal;}
form {	}

button {
  background-color: white; 
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  position: right;


}
</style>

<nav><a href="start.html">HOME</a><a href="who.html">DEPRESSION_TEST</a><a href="about">ABOUT</a><a href="help.html">HELP</a>
</nav>
<pre>




<div>
	<h3>The depression level is <button><?php echo ($tt) ; ?></button>.
	</h3>
	<h1><?php echo $n; ?></h1>
	
	<marquee direction="up"><h2><?php echo $ma; ?></h2></marquee>




</div>
</body>
</html>
</html>