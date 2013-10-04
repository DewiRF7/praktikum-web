<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> Greeting | Ucapan </title>
</head> 
<body>
<?php
$jam = 7;

if ($jam >=3 and $jam<=10 )
{
	echo "pukul" .$jam . "WIB";
	echo "<br/>";
	echo "Selamat Pagi, Semoga pagi anda penuh berkah";
}
elseif ($jam >10 and $jam<=18 ) 
{
	echo "pukul" .$jam . "WIB";
	echo "<br/>";
	echo "Selamat Siang, semoga tetap dalam perlindungan-Nya";
}
elseif ($jam >18 and $jam<=24 ) 
{
	echo "pukul" .$jam . "WIB";
	echo "<br/>";
	echo "Selamat Malam, Barakallah";
} 
?>
</body>
</html>

