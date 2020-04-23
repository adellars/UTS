<form action="" method="post">
<label><font face='times new roman' size=5>MASUKAN DATA COVID-19</font></label>
<hr><br>
<div class="row">
    <label>Nama Wilayah &emsp;&emsp;&emsp;&nbsp;: &emsp;</label>
    <select name="area">
      <?php $options = array('Pilih Kota', 'DKI Jakarta', 'Jawa Barat', 'Banten', 'Jawa Tengah');
      foreach ($options as $area) {
        $selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
        echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
      }?>
    </select>
	<br>
	<br>
<div class="row">
	<label>Jumlah Positif &emsp;&emsp;&emsp;&nbsp;&nbsp;: &emsp;</label>
    <input type="text" name="jp" value="<?=isset($_POST['jp']) ? $_POST['jp'] : ''?>"/>
</div>
<br>
<div class="row">
    <label>Jumlah Dirawat &emsp;&emsp;&emsp;: &emsp;</label>
    <input type="text" name="jr" value="<?=isset($_POST['jr']) ? $_POST['jr'] : ''?>"/>
</div>
<br>
<div class="row">
    <label>Jumlah Sembuh &emsp;&emsp;&emsp;: &emsp;</label>
    <input type="text" name="js" value="<?=isset($_POST['js']) ? $_POST['js'] : ''?>"/>
</div>
<br>
<div class="row">
    <label>Jumlah Meninggal &emsp;&emsp;: &emsp;</label>
    <input type="text" name="jm" value="<?=isset($_POST['jm']) ? $_POST['jm'] : ''?>"/>
</div>
<br>
<div class="row">
    <label>Nama Operator &emsp;&emsp;&emsp;&nbsp;: &emsp;</label>
    <input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
</div>
<br>
<div class="row">
    <label>NIM &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: &emsp;</label>
    <input type="text" name="nim" value="<?=isset($_POST['nim']) ? $_POST['nim'] : ''?>"/>
</div>
<br>
<div class="row">
    <input type="submit" name="submit" value="Simpan"/>
</div>
<br>
<hr>
<br>
</form>
<?php
if (isset($_POST['submit'])) {
	echo "<br><br>";
    echo "<p align=center><font face='times new roman' size=5>Data Pemantauan Covid-19 Wilayah </font>";
    echo "<td> <font face='times new roman' size=5> ".@$_POST['area']."</td>";
    function tgl($tanggal){
        $bulan = array (
            1 =>
			'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $ke = explode('-', $tanggal);     
        return $ke[2] . ' ' . $bulan[ (int)$ke[1] ] . ' ' . $ke[0];
    }

date_default_timezone_set('Asia/Jakarta');
echo "<p align=center><font face='times new roman' size=5>Per " . tgl(date('Y-m-d')) . " - " . date('h:i:sa');
echo "<td><p align=center><font face='times new roman' size=5> " . @$_POST['nama'] . " / " . @$_POST['nim'] . "</td>";
echo "<br>";
echo "<br>";
echo "<table width ='1000' border='1'>";
echo "<tr>
		<td><p align=center>POSITIF</td>
		<td><p align=center>DIRAWAT</td>
		<td><p align=center>SEMBUH</td>
		<td><p align=center>MENINGGAL</td>
	  </tr>";
echo "<tr>";
echo "<td>".$_POST['js']."</td>";
echo "<td>".$_POST['jr']."</td>";
echo "<td>".$_POST['js']."</td>";
echo "<td>".$_POST['jm']."</td>";
echo"</tr>";
echo"</table>";
}?>