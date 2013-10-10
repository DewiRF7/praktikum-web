<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Studi Kasus 2</title>
</head>
<style type="text/css">
#bigbody{
	margin:  20px auto;
	width: 50%;
	height: auto;
	padding: 10px;
	border: 1px solid red
}
body {
    background-color: #55ffCC;
}
</style>
<body>
<div id="bigbody">
	<h1><center>Rumah makan khas suroboyoan</center></h1>
	<div id='info'>makanan khas jawa </div>
	<em>Pilih menu yang akan dipesan</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="checkbox" name="menu[]" value="Soto Lamongan" 
		<?php if (isset($_POST['menu'])) {

			foreach ($_POST['menu'] as $key => $value) {
				if ($value=='Soto Lamongan') {
					echo "checked";
				}
		}
			
		} ?>
		>Rawon Daging Khas Surabaya <br>
		<input type="checkbox" name="menu[]" value="Lontong Balap 
		<?php if (isset($_POST['menu'])) {

			foreach ($_POST['menu'] as $key => $value) {
				if ($value=='Lontong Balap') {
					echo "checked";
				}
		}
			
		} ?>
		>Rendang Daging<br>
		<input type="checkbox" name="menu[]" value="Bandeng Presto"
		<?php if (isset($_POST['menu'])) {

			foreach ($_POST['menu'] as $key => $value) {
				if ($value=='Bandeng Presto') {
					echo "checked";
				}
		}
			
		} ?>
		>Soto Ayam Lamongan<br>
		<input type="checkbox" name="menu[]" value="Nasi Krawu"
		<?php if (isset($_POST['menu'])) {

			foreach ($_POST['menu'] as $key => $value) {
				if ($value=='Nasi Krawu') {
					echo "checked";
				}
		}
			
		} ?>
		>Sop Buntut Makassar<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['menu'])) {
		echo "<div id='pilihan'>Anda memesan makanan khas Gresik Surabaya Lamongan sebagai berikut ini : </div><br/>";
		echo "<ul>";
		foreach ($_POST['menu'] as $key => $value) {
			echo "
			<li>".$value."</li>
			";
		}

		echo "</ul>";
	}
	 ?>
</div>
</body>
</html>