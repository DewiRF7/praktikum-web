<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> Men-Generate Matriks Sel </title>
</head> 

<body>
<p> Mengenerate Tabel<br/> <br/><p/>
<table border = 1>
<?php
$baris = 5; $kolom = 7; $lebar = 1;

for ($a = 0; $a <= $baris; $a++) {
?>
<tr>
		<?php
		for ($b = 1; $b <= $kolom; $b++) {
		?>
			<td width = "50px" height = "50px" align = "center">
				<?php
				echo $lebar++;
				?>
			</td>
			<?php
			}
			?>
<tr>
<?php
}
?>
</table>
</body>
</html>



