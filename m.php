<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<pre>





<?php
$q1=$_POST['1'];
$q2=$_POST['2'];
$q3=$_POST['3'];
$q4=$_POST['4'];
$sub=$_POST['submit2'];
if (isset($sub)) 
{
if(isset($q1))
{
echo "You have selected :".$q1;  //  Displaying Selected Value
}
if(isset($q2))
{
echo "You have selected :".$q2;  //  Displaying Selected Value
}
if(isset($q3))
{
echo "You have selected :".$q3;  //  Displaying Selected Value
}
}
$lev=$q1+$q2+$q3;
echo "$lev";
echo "$q4";
?>
</body>
</html>