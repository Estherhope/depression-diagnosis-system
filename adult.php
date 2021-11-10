<?php
$a1=$_POST['a1'];$a2=$_POST['a2'];
$a3=$_POST['a3'];$a4=$_POST['a4'];$a5=$_POST['a5'];$a6=$_POST['a6'];
$a7=$_POST['a7'];$a8=$_POST['a8'];$a9=$_POST['a9'];
$a10=$_POST['a10'];$a11=$_POST['a11'];
$a12=$_POST['a12'];$a13=$_POST['a14'];$a15=$_POST['a15'];
$a16=$_POST['a16'];$a17=$_POST['a17'];$a18=$_POST['a18'];
$a19=$_POST['a19'];$a20=$_POST['a20'];$a21=$_POST['a21'];$a22=$_POST['a22'];
$a23=$_POST['a23'];$a24=$_POST['a24'];$a25=$_POST['a25'];
$a26=$_POST['a26'];$a27=$_POST['a27'];$a28=$_POST['a28'];
$a29=$_POST['a29'];$a30=$_POST['a30'];$a31=$_POST['a31'];
$a32=$_POST['a32'];$a33=$_POST['a33'];$a34=$_POST['a34'];
$a35=$_POST['a35'];$a36=$_POST['a36'];$a37=$_POST['a37'];
$a38=$_POST['a38'];$a39=$_POST['a39'];$a40=$_POST['a40'];
$a41=$_POST['a41'];$a42=$_POST['a42'];$a43=$_POST['a43'];$a44=$_POST['a44'];
$a45=$_POST['a45'];$a46=$_POST['a46'];$a47=$_POST['a47'];
$a48=$_POST['a48'];$a49=$_POST['a49'];$a50=$_POST['a50'];$a51=$_POST['a51'];
$a52=$_POST['a52'];$a53=$_POST['a53'];$a54=$_POST['a54'];
$a55=$_POST['a55'];$a56=$_POST['a56'];
//$a57=$_POST['a57'];$a58=$_POST['a58'];$a59=$_POST['a59'];
//$a60=$_POST['a60'];$a61=$_POST['a61'];$a62=$_POST['a62'];
//$sub=$_POST['submit'];$val;
$lev=$a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10+$a11+$a12+$a13+$a15+$a16+$a17+$a18;
$lev2=$a19+$a20+$a21+$a22+$a23+$a24+$a25+$a26+$a27+$a28+$a29+$a30+$a31+$a32+$a33+$a34+$a35+$a36+$a37+$a38+$a39+$a40;
$//lev4=$a56+$a57+$a58+$a59+$a60+$a61+$a62;
$lev3=$a41+$a42+$a43+$a44+$a45+$a46+$a47+$a48+$a49+$a50+$a51+$a52+$a53+$a54+$a55+$a56;
$flev=$lev2+$lev+$lev3;//+$lev4;
//echo $flev;
//if (isset($sub)){	echo "your depression level is", $flev;} 
//266
$tot=ceil (($flev)/230*100);
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

$who="adult";
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

?>