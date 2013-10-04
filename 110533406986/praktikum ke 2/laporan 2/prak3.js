
<script language="JavaScript" type="text/javascript">
<!--
function getmax() {
    var R = parseInt(document.getElementById('JumlahRow').value);
    var C = parseInt(document.getElementById('JumlahColum').value);
    var X = parseInt(document.getElementById('JumlahCell').value);
    var cellmax = document.getElementById('maxcells');
    var total = 'N/A';
    total = R * C;    
    cellmax.value = new String(total);
    if (X > total)
    {
        alert('Cell Total Yang Anda Masukkan Terlalu Besar, Nilai Maksimum Cells = ' + total);
        document.getElementById('CellsTotal').value = new String();
    }
}
//-->
</script>