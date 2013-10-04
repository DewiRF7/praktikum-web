<?php
function table ($baris, $kolom) { ?>
		<table border = 1>
<?php
$a = 1;
		while ($a <= $baris)
{ ?>
	<tr>
<?php
		$b = 0;
		while ($b < $kolom) {
		if ($ <= $baris) 
{ ?>
<td width =  "50px" height = "50px"> <?php echo $a; ?> </td>
<?php
	$a++;)
	$b++;)
?>
	</tr>
<?php
} ?>
	</table>
<?php
} ?>
<html>
<head>
<title> Tugas Praktikum 2 </title>
</head>
<body>
<?php
echo 'mengenerate sel tabel secara flexibel';
echo '<br/><br/>';
echo tabel (15,7); 
?>
</body>
</html>
