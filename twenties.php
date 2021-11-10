<?php
$r1=$_POST['r1'];$r2=$_POST['r2'];
$r3=$_POST['r3'];$r4=$_POST['r4'];$r5=$_POST['r5'];$r6=$_POST['r6'];
$r7=$_POST['r7'];$r8=$_POST['r8'];
$r9=$_POST['r9'];$r10=$_POST['r10'];$r11=$_POST['r11'];
$r12=$_POST['r12'];$r13=$_POST['r14'];$r15=$_POST['r15'];
$r16=$_POST['r16'];$r17=$_POST['r17'];$r18=$_POST['r18'];
$r19=$_POST['r19'];$r20=$_POST['r20'];$r21=$_POST['r21'];$r22=$_POST['r22'];
$r23=$_POST['r23'];$r24=$_POST['r24'];$r25=$_POST['r25'];
$r26=$_POST['r26'];$r27=$_POST['r27'];$r28=$_POST['r28'];
$r29=$_POST['r29'];$r30=$_POST['r30'];$r31=$_POST['r31'];
$r32=$_POST['r32'];$r33=$_POST['r33'];$r34=$_POST['r34'];
$r35=$_POST['r35'];$r36=$_POST['r36'];$r37=$_POST['r37'];
$r38=$_POST['r38'];$r39=$_POST['r39'];$r40=$_POST['r40'];
$r41=$_POST['r41'];$r42=$_POST['r42'];$r43=$_POST['r43'];$r44=$_POST['r44'];
$r45=$_POST['r45'];//$r46=$_POST['r46'];
/*$r47=$_POST['47'];
$r48=$_POST['48'];$r49=$_POST['49'];$r50=$_POST['50'];$r51=$_POST['51'];
$r52=$_POST['52'];$r53=$_POST['53'];$r54=$_POST['54'];
$r55=$_POST['55'];
$r56=$_POST['56'];$r57=$_POST['57'];$r58=$_POST['58'];$r59=$_POST['59'];
$r60=$_POST['60'];$r61=$_POST['61'];*/

$lev=$r1+$r2+$r3+$r4+$r5+$r6+$r7+$r8+$r9+$r10+$r11+$r12+$r13+$r15+$r16+$r17+$r18;
$lev2=$r19+$r20+$r21+$r22+$r23+$r24+$r25+$r26+$r27+$r28+$r29+$r30+$r31+$r32+$r33+$r34+$r35+$r36+$r37+$r38+$r39+$r40;
//$lev4=$r56+$r57+$r58+$r59+$r60+$r61;
$lev3=$r41+$r42+$r43+$r44+$r45;//+$r46;
//+$r47+$r48+$r49+$r50+$r51+$r52+$r53+$r54+$r55;
$fev=$lev2+$lev+$lev3;
//echo $fev;
//if (isset($sub)){	echo "your depression level is", $flev;} 
//202
$tot=ceil (($fev)/202*100);
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

$who="twenties";
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
	div  {text-align: center; font-family: 
		arial; margin-left: 75px; 
		text-indent: 10%; 
		background-color: lavender;
		max-width: 80%; }
	h1 {color:maroon;}
	h3 {color:black; max-width: 70%; }
	h2{color: red; font-size: 40px;}
	
	nav {background-color: teal; height: 10%; 
	}
	a {display:inline-block; font-size: 150%;
		width:25%; color: white; height: 30px;}
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
	<h3>The depression level is <button><?php echo $tt; ?></button>.
	</h3>
	<h1><?php echo $n; ?></h1>
	
	<marquee direction="up"><h2><?php echo $ma; ?></h2></marquee>




</div>
</body>
</html>
</html>
?>
