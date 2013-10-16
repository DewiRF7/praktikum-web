<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kalkulator Canggih</title>
</head>

<body background="images.jpg">
	<p>
 </p>
<form name="fform" method ="post" action = "ifelse.php">
<tr>
        	<font color="#FF1493">
            <blink>	<h1>
<center>
<p>
KALKULATOR</p>
</center>
</h1>
</blink>
            </font>
            	
            <center>
              <table width="259" border="1" bgcolor="#FF1493">
<tr>
                  <td colspan="5"><center>
<table width="253" border=3 bgcolor="#FFB6C1">
<tr>
                      <td>Bilangan Pertama:</td>
                      <td><input size="16" name="bil1" type="text" /></td>
                    </tr>
<tr>
                      <td>Bilangan Kedua:</td>
                      <td><input size="16" name="bil2" type="text" /></td>
                    </tr>
<tr>
                      <td>Hasil :</td>
                      <td><input size="16" name="bil3" type="text" value="<?php if (isset($_GET['bil3'])) echo $_GET['bil3']?>" /></td>
                    </tr>
</table>
</center>
</td>
                </tr>
<center>
<tr>
                  <td width="31"><input value="+"  type="submit" name ="tambah" /></td>
                  <td width="27"><input value="-"  type="submit" name = "kurang" /></td>
                  <td width="31"><input value="*"  type="submit" name = "kali" /></td>
                  <td width="27"><input value="/"  type="submit" name = "bagi" /></td>
                  <td width="94"><input value="Bersihkan" type="submit" name = "masukan angka" /></td>
                </tr>
</center>
</table>
</center>
</form>
</body>
</html>
