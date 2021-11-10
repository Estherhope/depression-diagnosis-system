
<?php
$host="localhost";
$dbuser="root";
$pass="";
$dbname="depression";
 $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
 
    if(mysqli_connect_errno())
    {
	die("connection failed". mysqli_connect_error());
    }
$s1=mysqli_query($conn, "SELECT * FROM depress where comment ='normal'");
$s2=mysqli_query($conn, "SELECT * FROM depress where comment='moderate'");
$s3=mysqli_query($conn, "SELECT* FROM depress where comment='high'");
$s4=mysqli_query($conn, "SELECT comment FROM depress");
$s5 = mysqli_num_rows($s4);
$a = mysqli_fetch_array($s1,MYSQLI_NUM);
$a2=mysqli_fetch_array($s2,MYSQLI_NUM);
$a3=mysqli_fetch_array($s3,MYSQLI_NUM);
//echo($s5);
$r1=sizeof($a);
$r2=sizeof($a2);
$r3=sizeof($a3);
$r4=$r1+$r2+$r3;

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>age</title>
</head>
<body>
<style type="text/css">
	div  {text-align: left; font-family: arial; margin-left: 75px; text-indent: 10%; background-color: lavender; max-width: 70%}
	h1 {color:maroon; font-size: 300%;}
	h3 {color:black; max-width: 70%; font-size: 200%;}
	
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
<DIV>
	<pre>
		<h3>
	normal = <?php //echo $r1; ?>

	moderate= <?php //echo $r2; ?>

	high = <?php //echo $r3; ?>

	total= <?php echo $s5; ?>
		</h3>
	</pre>
</DIV>
</body>
</html>