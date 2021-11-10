<?php
$q1=$_POST['1'];$q2=$_POST['2'];
$q3=$_POST['3'];$q4=$_POST['4'];$q5=$_POST['5'];$q6=$_POST['6'];
$q7=$_POST['7'];$q8=$_POST['8'];
$q9=$_POST['9'];$q10=$_POST['10'];$q11=$_POST['11'];
$q12=$_POST['12'];$q13=$_POST['14'];$q15=$_POST['15'];
$q16=$_POST['16'];$q17=$_POST['17'];$q18=$_POST['18'];
$q19=$_POST['19'];$q20=$_POST['20'];$q21=$_POST['21'];$q22=$_POST['22'];
$q23=$_POST['23'];$q24=$_POST['24'];$q25=$_POST['25'];
$q26=$_POST['26'];$q27=$_POST['27'];$q28=$_POST['28'];
$q29=$_POST['29'];$q30=$_POST['30'];$q31=$_POST['31'];
$q32=$_POST['32'];$q33=$_POST['33'];$q34=$_POST['34'];
$q35=$_POST['35'];$q36=$_POST['36'];$q37=$_POST['37'];
$q38=$_POST['38'];$q39=$_POST['39'];$q40=$_POST['40'];
$q41=$_POST['41'];$q42=$_POST['42'];$q43=$_POST['43'];$q44=$_POST['44'];
$q45=$_POST['45'];$q46=$_POST['46'];$q47=$_POST['47'];
$q48=$_POST['48'];$q49=$_POST['49'];$q50=$_POST['50'];$q51=$_POST['51'];
$q52=$_POST['52'];$q53=$_POST['53'];$q54=$_POST['54'];
$q55=$_POST['55'];
$q56=$_POST['56'];$q57=$_POST['57'];$q58=$_POST['58'];$q59=$_POST['59'];
$q60=$_POST['60'];$q61=$_POST['61'];

$lev=$q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10+$q11+$q12+$q13+$q15+$q16+$q17+$q18;
$lev2=$q19+$q20+$q21+$q22+$q23+$q24+$q25+$q26+$q27+$q28+$q29+$q30+$q31+$q32+$q33+$q34+$q35+$q36+$q37+$q38+$q39+$q40;
$lev4=$q56+$q57+$q58+$q59+$q60+$q61;
$lev3=$q41+$q42+$q43+$q44+$q45+$q46+$q47+$q48+$q49+$q50+$q51+$q52+$q53+$q54+$q55;
$flev=$lev2+$lev+$lev3+$lev4;
//268
//if (isset($sub)){	echo "your depression level is", $flev;} 
$tot=ceil (($flev)/250*100);
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

$who="self";
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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<nav><a href="start.html">HOME</a><a href="who.html">DEPRESSION_TEST</a><a href="about.html">ABOUT DEPRESSION</a><a href="help.html">HELP</a>
</nav>
<pre>




<div>
	<h3>Your depression level is <button><?php echo ($tt) ; ?></button>
	</h3>
	<h1><?php echo $n; ?></h1>
	
	<marquee direction="up"><h2><?php echo $ma; ?></h2></marquee>




</div>
</body>
</html>
</html>

?>