<?php
$w1=$_POST['w1'];$w2=$_POST['w2'];$w3=$_POST['w3'];
$w4=$_POST['w4'];$w5=$_POST['w5'];
$w6=$_POST['w6'];$w7=$_POST['w7'];$w8=$_POST['w8'];
$w9=$_POST['w9'];$w10=$_POST['w10'];
$w11=$_POST['w11'];$w12=$_POST['w12'];$w13=$_POST['w13'];
$w14=$_POST['w14'];$w15=$_POST['w15'];
$w16=$_POST['w16'];$w17=$_POST['w17'];$w18=$_POST['w18'];
$w19=$_POST['w19'];$w20=$_POST['w20'];
$w20=$_POST['w20'];$w21=$_POST['w21'];
$w22=$_POST['w22'];$w23=$_POST['w23'];$w24=$_POST['w24'];
$w25=$_POST['w25'];$w26=$_POST['w26'];$w27=$_POST['w27'];
$w28=$_POST['w28'];$w29=$_POST['w29'];$w30=$_POST['w30'];
$w31=$_POST['w31'];$w32=$_POST['w32'];
$w33=$_POST['w33'];$w34=$_POST['w34'];
$w35=$_POST['w35'];$w36=$_POST['w36'];
$wow1=$w1+$w2+$w3+$w4+$w5+$w6+$w7+$w8+$w9+$w10+$w11+$w12+$w13+$w14+$w15;
$wow2=$w16+$w17+$w18+$w19+$w20+$w21+$w22+$w23+$w24+$w25+$w26+$w27+$w28+$w29+$w30+$w31+$w32+$w33+$w34+$w35+$w36;
$wow=$wow1+$wow2;
//166
//echo "depression level is", $wow;
$tot=ceil (($wow)/150*100);
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

$who="teenager";
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
	<h3>The teenager's depression level is <button><?php echo ($tt) ; ?></button>.
	</h3>
	<h1><?php echo $n; ?></h1>
	
	<marquee direction="up"><h2><?php echo $ma; ?></h2></marquee>




</div>
</body>
</html>
</html>

?>






?>