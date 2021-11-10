<?php
$t1=$_POST['t1'];$t2=$_POST['t2'];$t3=$_POST['t3'];
$t4=$_POST['t4'];$t5=$_POST['t5'];
$t6=$_POST['t6'];$t7=$_POST['t7'];$t8=$_POST['t8'];
$t9=$_POST['t9'];$t10=$_POST['t10'];
$t11=$_POST['t11'];$t12=$_POST['t12'];$t13=$_POST['t13'];
$t14=$_POST['t14'];$t15=$_POST['t15'];
$t16=$_POST['t16'];$t17=$_POST['t17'];$t18=$_POST['t18'];
$t19=$_POST['t19'];$t20=$_POST['t20'];
$t20=$_POST['t20'];$t21=$_POST['t21'];
$t22=$_POST['t22'];$t23=$_POST['t23'];$t24=$_POST['t24'];
$t25=$_POST['t25'];$t26=$_POST['t26'];$t27=$_POST['t27'];
$t28=$_POST['t28'];$t29=$_POST['t29'];$t30=$_POST['t30'];
$t31=$_POST['t31'];$t32=$_POST['t32'];
$tot1=$t1+$t2+$t3+$t4+$t5+$t6+$t7+$t8+$t9+$t10+$t11+$t12+$t13+$t14+$t15;
$tot2=$t16+$t17+$t18+$t19+$t20+$t21+$t22+$t23+$t24+$t25+$t26+$t27+$t28+$t29+$t30+$t31+$t32;
$tot=ceil (($tot1+$tot2)/142*100);
if ($tot<=25) 
{
	
	$tt=$tot;
	$n="this is normal.";
	$ma="";



	# code...
}
elseif ($tot>25 && $tot<49) 
{
	$tt=$tot;
	$ma="CONSULT A DOCTOR AS SOON AS POSSIBLE";
	$n="your level is moderate";

	# code...
}
elseif ($tot>=50) 
{
	# code...
	$tt=$tot ;
	$n="THIS IS A VERY HIGH LEVEL!!";
	$ma="CONSULT A DOCTOR IMMEDIATELY!!!!";
}


//echo "depression level is",ceil($tot) ;

?>
<html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">
	div  {text-align: center; font-family: times; margin-left: 75px; 
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
	<h3>The child's depression level is <button><?php echo ($tt) ; ?></button>
	</h3>
	<h1><?php echo $n; ?></h1>
	
	<marquee direction="up"><h2><?php echo $ma; ?></h2></marquee>




</div>
</body>
</html>
</html>