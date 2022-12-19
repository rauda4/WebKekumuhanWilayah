<?php
$pro = "simpan";
$status = "Aktif";

$nama_penilaian = "";
$id_pengguna = $_SESSION["cid"];
$status = "Proses";
$keterangan = "";

$judul_bln = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	
$bulan=date("m");
$periode = "Penilaian ".$judul_bln[(int)$bulan]." ".date("Y");	
?> 

<script type="text/javascript">
	function PRINT(pk) {
		win = window.open('penilaian/penilaian_print.php?pk=' + pk, 'win', 'width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0');
	}
</script>

<script language="JavaScript">
	function buka(url) {
		window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');
	}
</script>


<?php
$sql = "select `id_penilaian` from `$tbpenilaian` order by `id_penilaian` desc";
$q = mysqli_query($conn, $sql);
$jum = mysqli_num_rows($q);
$th = date("y");
$bl = date("m") + 0;
if ($bl < 10) {
	$bl = "0" . $bl;
}

$kd = "PNL" . $th . $bl; //KEG1610001
if ($jum > 0) {
	$d = mysqli_fetch_array($q);
	$idmax = $d["id_penilaian"];

	$bul = substr($idmax, 5, 2);
	$tah = substr($idmax, 3, 2);
	if ($bul == $bl && $tah == $th) {
		$urut = substr($idmax, 7, 3) + 1;
		if ($urut < 10) {
			$idmax = "$kd" . "00" . $urut;
		} else if ($urut < 100) {
			$idmax = "$kd" . "0" . $urut;
		} else {
			$idmax = "$kd" . $urut;
		}
	} //==
	else {
		$idmax = "$kd" . "001";
	}
} //jum>0
else {
	$idmax = "$kd" . "001";
}
$id_penilaian = $idmax;
?>

<?php
if (isset($_GET["pro"]) && $_GET["pro"] == "ubah") {
	$id_penilaian = $_GET["kode"];
	$sql = "select * from `$tbpenilaian` where `id_penilaian`='$id_penilaian'";
	$d = getField($conn, $sql);
		$id_penilaian = $d["id_penilaian"];
		$id_penilaian0 = $d["id_penilaian"];
		$nama_penilaian = $d["nama_penilaian"];
		$periode = $d["periode"];
		$id_pengguna = $d["id_pengguna"];
		$bobot1 = $d["bobot1"];
		$bobot2 = $d["bobot2"];
		$bobot3 = $d["bobot3"];
		$bobot4 = $d["bobot4"];
		$bobot5 = $d["bobot5"];
		$bobot6 = $d["bobot6"];
		$bobot7 = $d["bobot7"];
		$bobot8 = $d["bobot8"];
		$bobot9 = $d["bobot9"];
		$bobot10 = $d["bobot10"];
		$bobot11 = $d["bobot11"];
		$bobot12 = $d["bobot12"];
		$bobot13 = $d["bobot13"];
		$bobot14 = $d["bobot14"];
		$bobot15 = $d["bobot15"];
		$bobot16 = $d["bobot16"];
		$bobot17 = $d["bobot17"];
		$bobot18 = $d["bobot18"];
		$bobot19 = $d["bobot19"];
		$status = $d["status"];
		$keterangan = $d["keterangan"];
		$pro = "ubah";
}
?>

<div id="accordion">
<h4>Tambah Data Penilaian</h4>
<div>

<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-12">
<div class="bg-light rounded h-100 p-4">
<form action="" method="post" enctype="multipart/form-data">
<table class="table">
<tr>
<th width="20%"><label for="id_penilaian">ID Penilaian</label>
<th width="1%">:
<th colspan="2"><b><?php echo $id_penilaian; ?></b>
</tr>


<tr>
<td height="24"><label for="periode">Periode Nilai</label>
<td>:
<td><input required class="form-control" style="width: 350px;" name="periode" type="periode" id="periode" value="<?php echo $periode; ?>" size="25" /></td>
</tr>


<tr>
<td><label for="nama_penilaian">Nama Penilaian</label>
<td>:
<td width="213"><input class="form-control" required style="width: 550px;" name="nama_penilaian" type="text" id="nama_penilaian" value="<?php echo $nama_penilaian; ?>" size="25" />
</td>
</tr>


<tr>
<td height="24"><label for="id_pengguna">Pilih Pengguna</label>
<td>:
<td><select class="form-control" name="id_pengguna" style="width: 350px;">
		<?php
		$sql = "select * from `$tbpengguna`";
		$arr = getData($conn, $sql);
		foreach ($arr as $d) {
			$id_pengguna0 = $d["id_pengguna"];
			$nama_pengguna = strtoupper($d["nama_pengguna"]);
			echo "<option value='$id_pengguna0'";
			if ($id_pengguna0 == $id_pengguna) {
				echo "selected";
			}
			echo ">$nama_pengguna ($id_pengguna0)</option>";
		}

//3225232
//3:123
//2:45
//2:67
//5:89 10 11 12
//2:13 14
//3:15 16 17
//2:18 19
?>
</select></td>
</tr>

<tr>
<td><label for="bobot1"><?php echo $m1;?></label>
<td>:
<td>
	<table>
		<tr>
		<td height="24"><label for="bobot1"><?php echo $kr11;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot1" type="text" id="bobot1" value="<?php echo $bobot1; ?>" size="25" /><td>%
		</td>
		</tr>

		<tr>
		<td height="24"><label for="bobot2"><?php echo $kr12;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot2" type="text" id="bobot2" value="<?php echo $bobot2; ?>" size="25" /><td>%
		</td>
		</tr>

		<tr>
		<td height="24"><label for="bobot3"><?php echo $kr13;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot3" type="text" id="bobot3" value="<?php echo $bobot3; ?>" size="25" /><td>%
		</td>
		</tr>
	</table>
</td>
</tr>



<tr>
<td><label for="bobot1"><?php echo $m2;?></label>
<td>:
<td>
	<table>
		<tr>
		<td height="24"><label for="bobot1"><?php echo $kr21;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot4" type="text" id="bobot4" value="<?php echo $bobot4; ?>" size="25" /><td>%
		</td>
		</tr>

		<tr>
		<td height="24"><label for="bobot2"><?php echo $kr22;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot5" type="text" id="bobot5" value="<?php echo $bobot5; ?>" size="25" /><td>%
		</td>
		</tr>

	</table>
</td>
</tr>



<tr>
<td><label for="bobot1"><?php echo $m3;?></label>
<td>:
<td>
	<table>
		<tr>
		<td height="24"><label for="bobot1"><?php echo $kr31;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot6" type="text" id="bobot6" value="<?php echo $bobot6; ?>" size="25" />
		</td><td>%
		</tr>

		<tr>
		<td height="24"><label for="bobot2"><?php echo $kr32;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot7" type="text" id="bobot7" value="<?php echo $bobot7; ?>" size="25" />
		</td><td>%
		</tr>
 
	</table>
</td>
</tr>


<tr>
<td><label for="bobot1"><?php echo $m4;?></label>
<td>:
<td>
	<table>
		<tr>
		<td height="24"><label for="bobot1"><?php echo $kr41;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot8" type="text" id="bobot8" value="<?php echo $bobot8; ?>" size="25" />
		</td><td>%
		</tr>

		<tr>
		<td height="24"><label for="bobot2"><?php echo $kr42;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot9" type="text" id="bobot9" value="<?php echo $bobot9; ?>" size="25" />
		</td><td>%
		</tr>
 
 		<tr>
		<td height="24"><label for="bobot2"><?php echo $kr43;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot10" type="text" id="bobot10" value="<?php echo $bobot10; ?>" size="25" />
		</td><td>%
		</tr>
		
		<tr>
		<td height="24"><label for="bobot2"><?php echo $kr44;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot11" type="text" id="bobot11" value="<?php echo $bobot11; ?>" size="25" />
		</td><td>%
		</tr>
		
		<tr>
		<td height="24"><label for="bobot2"><?php echo $kr45;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot12" type="text" id="bobot12" value="<?php echo $bobot12; ?>" size="25" />
		</td><td>%
		</tr>
	</table>
</td>
</tr>


<tr>
<td><label for="bobot1"><?php echo $m5;?></label>
<td>:
<td>
	<table>
		<tr>
		<td height="24"><label for="bobot1"><?php echo $kr51;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot13" type="text" id="bobot13" value="<?php echo $bobot13; ?>" size="25" />
		</td><td>%
		</tr>

		<tr>
		<td height="24"><label for="bobot2"><?php echo $kr52;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot14" type="text" id="bobot14" value="<?php echo $bobot14; ?>" size="25" />
		</td><td>%
		</tr>
 
	</table>
</td>
</tr>



<tr>
<td><label for="bobot1"><?php echo $m6;?></label>
<td>:
<td>
	<table>
		<tr>
		<td height="24"><label for="bobot1"><?php echo $kr61;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot15" type="text" id="bobot15" value="<?php echo $bobot15; ?>" size="25" />
		</td><td>%
		</tr>

		<tr>
		<td height="24"><label for="bobot2"><?php echo $kr62;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot16" type="text" id="bobot16" value="<?php echo $bobot16; ?>" size="25" />
		</td><td>%
		</tr>
		
		<tr>
		<td height="24"><label for="bobot2"><?php echo $kr63;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot17" type="text" id="bobot17" value="<?php echo $bobot17; ?>" size="25" />
		</td><td>%
		</tr>
	</table>
</td>
</tr>




<tr>
<td><label for="bobot1"><?php echo $m7;?></label>
<td>:
<td>
	<table>
		<tr>
		<td height="24"><label for="bobot1"><?php echo $kr71;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot18" type="text" id="bobot18" value="<?php echo $bobot18; ?>" size="25" />
		</td><td>%
		</tr>

		<tr>
		<td height="24"><label for="bobot2"><?php echo $kr72;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="bobot19" type="text" id="bobot19" value="<?php echo $bobot19; ?>" size="25" />
		</td><td>%
		</tr>
 
	</table>
</td>
</tr>


<tr>
<td><label for="status">Status</label>
<td>:
<td colspan="2">
	<input type="radio" name="status" id="status" checked="checked" value="Proses" <?php if ($status == "Proses") {	echo "checked";} ?> />Proses
	<input type="radio" name="status" id="status" value="Selesai" <?php if ($status == "Selesai") {echo "checked";} ?> />Selesai
</td>
</tr>

<tr>
<td height="24"><label for="keterangan">Keterangan</label>
<td>:
<td>
	<textarea class="form-control" name="keterangan" cols="55" rows="2"><?php echo $keterangan; ?></textarea>
</td>
</tr>

<tr>
<td>
<td>
<td colspan="2">
	<input class="btn btn-success" name="Simpan" type="submit" id="Simpan" value="Simpan" />
	<input name="pro" type="hidden" id="pro" value="<?php echo $pro; ?>" />
	<input name="id_penilaian" type="hidden" id="id_penilaian" value="<?php echo $id_penilaian; ?>" />
	<input name="id_penilaian0" type="hidden" id="id_penilaian0" value="<?php echo $id_penilaian0; ?>" />
	<a href="?mnu=penilaian"><input class="btn btn-warning" name="Batal" type="button" id="Batal" value="Batal" /></a>
</td>
</tr>
</table>
</form>
</div>
</div>
</div>
</div>
</div>

<?php
$sqlc = "select distinct(`id_pengguna`) from `$tbpenilaian` order by `id_pengguna` asc";
$jumc = getJum($conn, $sqlc);
if ($jumc < 1) {
	echo "<h4>Maaf data penilaian belum tersedia</h4>";
}
$arrc = getData($conn, $sqlc);
foreach ($arrc as $dc) {
	$id_pengguna = $dc["id_pengguna"];
?>
<h3>Data Penilaian <?php echo getPengguna($conn,$id_pengguna)." |$id_pengguna"; ?>:</h3>
<div>

Cetak | <img src='ypathicon/print.png' title='PRINT' OnClick="PRINT('<?php echo $id_pengguna; ?>')"> |
<table class="table table-bordered">
<tr bgcolor="#cccccc">
<th width="3%">No</td>
<th width="70%">Nama Penilaian</td>
<th width="20%">Keterangan</td>
<th width="13%">Menu</td>
</tr>
<?php
$sql = "select * from `$tbpenilaian` where  `id_pengguna`='$id_pengguna' order by `id_penilaian` desc";
$jum = getJum($conn, $sql);
if ($jum > 0) {
//---------------------------- 
		$batas   = 10;
		$page = 1;
		if (isset($_GET['page'])) {
		$page = $_GET['page'];
		}
		if (empty($page)) {
		$posawal  = 0;
		$page = 1;
		} else {
		$posawal = ($page - 1) * $batas;
		}

$sql2 = $sql . " LIMIT $posawal,$batas";
$no = $posawal + 1;
//----------------------------- 							
$arr = getData($conn, $sql2);
foreach ($arr as $d) {
	$id_penilaian = $d["id_penilaian"];
	$nama_penilaian = ucwords($d["nama_penilaian"]);
	$periode = $d["periode"];
	$id_pengguna = $d["id_pengguna"];
	$bobot1 = $d["bobot1"];
	$bobot2 = $d["bobot2"];
	$bobot3 = $d["bobot3"];
	$bobot4 = $d["bobot4"];
	$bobot5 = $d["bobot5"];
	$bobot6 = $d["bobot6"];
	$bobot7 = $d["bobot7"];
	$bobot8 = $d["bobot8"];
	$bobot9 = $d["bobot9"];
	$bobot10 = $d["bobot10"];
	$bobot11 = $d["bobot11"];
	$bobot12 = $d["bobot12"];
	$bobot13 = $d["bobot13"];
	$bobot14 = $d["bobot14"];
	$bobot15 = $d["bobot15"];
	$bobot16 = $d["bobot16"];
	$bobot17 = $d["bobot17"];
	$bobot18 = $d["bobot18"];
	$bobot19 = $d["bobot19"];
	$status = $d["status"];
	$keterangan = $d["keterangan"];
	$tanggal= WKT($d["tanggal"]);
	$jam = $d["jam"];
	
	/*
3225232
1//3:123
2//2:45
3//2:67
4//5:89 10 11 12
5//2:13 14
6//3:15 16 17
7//2:18 19
*/

$gab="<label title='$kr11 $bobot1 %'>$bobot1 %</label>, ";
$gab.="<label title='$kr12 $bobot2 %'>$bobot2 %</label>, ";
$gab.="<label title='$kr13 $bobot3 %'>$bobot3 %</label>, ";
$gab.="<label title='$kr21 $bobot4 %'>$bobot4 %</label>, ";
$gab.="<label title='$kr22 $bobot5 %'>$bobot5 %</label>, ";
$gab.="<label title='$kr31 $bobot6 %'>$bobot6 %</label>, ";
$gab.="<label title='$kr32 $bobot7 %'>$bobot7 %</label>, ";
$gab.="<label title='$kr41 $bobot8 %'>$bobot8 %</label>, ";
$gab.="<label title='$kr42 $bobot9 %'>$bobot9 %</label>, ";
$gab.="<label title='$kr43 $bobot10 %'>$bobot10 %</label>, ";
$gab.="<label title='$kr44 $bobot11 %'>$bobot11 %</label>, ";
$gab.="<label title='$kr45 $bobot12 %'>$bobot12 %</label>, ";
$gab.="<label title='$kr51 $bobot13 %'>$bobot13 %</label>, ";
$gab.="<label title='$kr52 $bobot14 %'>$bobot14 %</label>, ";
$gab.="<label title='$kr61 $bobot15 %'>$bobot15 %</label>, ";
$gab.="<label title='$kr62 $bobot16 %'>$bobot16 %</label>, ";
$gab.="<label title='$kr63 $bobot17 %'>$bobot17 %</label>, ";
$gab.="<label title='$kr71 $bobot18 %'>$bobot18 %</label>, ";
$gab.="<label title='$kr72 $bobot19 %'>$bobot19 %</label>, ";
	
$color = "";
if ($no % 2 == 0) {
$color = "";
}
echo "<tr bgcolor='$color'>
<td><small>$no</td>
<td><small><b>$nama_penilaian</b><br>
$id_penilaian : $tanggal $jam Wib | $periode
</small>
<br><i><small>$gab</i></small></td>
<td><i><small>$keterangan</i></small></td>
<td><div align='center'>



<a href='?mnu=detail&id=$id_penilaian'>
<img src='ypathicon/11.png' title='Perbandingan Kriteria'></a>
<br>
<a href='?mnu=penilaian&pro=ubah&kode=$id_penilaian'><img src='ypathicon/ub.png' title='Ubah $nama_penilaian'></a>
<a href='?mnu=penilaian&pro=hapus&kode=$id_penilaian&nama_penilaian=$nama_penilaian'><img src='ypathicon/ha.png' title='Hapus $nama_penilaian' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus \'$nama_penilaian\' pada Data Penilaian ?..\")'></a></div></td>
</tr>";
$no++;
} //for dalam
} //if
else {
echo "<tr><td colspan='6'><blink>Maaf, Data penilaian belum tersedia...</blink></td></tr>";
}
?>
</table>

<?php
$jmldata = $jum;
if ($jmldata > 0) {
if ($batas < 1) {
$batas = 1;
}
$jmlhal  = ceil($jmldata / $batas);
echo "<div class=paging>";
if ($page > 1) {
$prev = $page - 1;
echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=penilaian'>« Prev</a></span> ";
} else {
echo "<span class=disabled>« Prev</span> ";
}

for ($i = 1; $i <= $jmlhal; $i++)
if ($i != $page) {
echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=penilaian'>$i</a> ";
} else {
echo " <span class=current>$i</span> ";
}

if ($page < $jmlhal) {
$next = $page + 1;
echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=penilaian'>Next »</a></span>";
} else {
echo "<span class=disabled>Next »</span>";
}
echo "</div>";
} //if jmldata

$jmldata = $jum;
echo "<p align=center>Total data <b>$jmldata</b> item</p>";

echo "</div>";
} //for atas
?>


</div>

<?php
if (isset($_POST["Simpan"])) {
	$pro = strip_tags($_POST["pro"]);
	$id_penilaian = strip_tags($_POST["id_penilaian"]);
	$id_penilaian0 = strip_tags($_POST["id_penilaian0"]);
	$periode = strip_tags($_POST["periode"]);
	$nama_penilaian = strip_tags($_POST["nama_penilaian"]);
	$id_pengguna = strip_tags($_POST["id_pengguna"]);

		$bobot1 = strip_tags($_POST["bobot1"]);
		$bobot2 = strip_tags($_POST["bobot2"]);
		$bobot3 = strip_tags($_POST["bobot3"]);
		$bobot4 = strip_tags($_POST["bobot4"]);
		$bobot5 = strip_tags($_POST["bobot5"]);
		$bobot6 = strip_tags($_POST["bobot6"]);
		$bobot7 = strip_tags($_POST["bobot7"]);
		$bobot8 = strip_tags($_POST["bobot8"]);
		$bobot9 = strip_tags($_POST["bobot9"]);
		$bobot10 = strip_tags($_POST["bobot10"]);
		$bobot11 = strip_tags($_POST["bobot11"]);
		$bobot12 = strip_tags($_POST["bobot12"]);
		$bobot13 = strip_tags($_POST["bobot13"]);
		$bobot14 = strip_tags($_POST["bobot14"]);
		$bobot15 = strip_tags($_POST["bobot15"]);
		$bobot16 = strip_tags($_POST["bobot16"]);
		$bobot17 = strip_tags($_POST["bobot17"]);
		$bobot18 = strip_tags($_POST["bobot18"]);
		$bobot19 = strip_tags($_POST["bobot19"]);
		$status = strip_tags($_POST["status"]);
		$keterangan = strip_tags($_POST["keterangan"]);
		
		$total=$bobot1+$bobot2+$bobot3+$bobot4+$bobot5+$bobot6+$bobot7+$bobot8+$bobot9+$bobot10+$bobot11+$bobot12+$bobot13+$bobot14+$bobot15+$bobot16+$bobot17+$bobot18+$bobot19;
if($total>100){
	echo "<script>alert('Data  \"$nama_penilaian\"  Lebih dari 100%...Saat ini $total % Gagal Proses (Over)');document.location.href='?mnu=penilaian';</script>";
}
else if($total<98){
	echo "<script>alert('Data  \"$nama_penilaian\"  Lebih dari 100%...Saat ini $total % Gagal Proses (Kurang)');document.location.href='?mnu=penilaian';</script>";
}

else{
if ($pro == "simpan") {
	$sql = " INSERT INTO `$tbpenilaian` (
`id_penilaian` ,
`nama_penilaian` ,
`periode` ,
`id_pengguna` ,
`bobot1` ,
`bobot2` ,
`bobot3` ,
`bobot4` ,
`bobot5` ,
`bobot6` ,
`bobot7` ,
`bobot8` ,
`bobot9` ,
`bobot10` ,
`bobot11` ,
`bobot12` ,
`bobot13` ,
`bobot14` ,
`bobot15` ,
`bobot16` ,
`bobot17` ,
`bobot18` ,
`bobot19` ,
`keterangan`, `tanggal`, `jam`, 
`status` 
) VALUES (
'$id_penilaian', 
'$nama_penilaian',
'$periode',
'$id_pengguna', 
'$bobot1',
'$bobot2',
'$bobot3',
'$bobot4',
'$bobot5',
'$bobot6',
'$bobot7',
'$bobot8',
'$bobot9',
'$bobot10',
'$bobot11',
'$bobot12',
'$bobot13',
'$bobot14',
'$bobot15',
'$bobot16',
'$bobot17',
'$bobot18',
'$bobot19',
'$keterangan','".date("Y-m-d")."','".date("H:i:s")."',
'$status'
)";

	$simpan = process($conn, $sql);
	if ($simpan) {
		echo "<script>alert('Data \"$nama_penilaian\" berhasil disimpan !');document.location.href='?mnu=penilaian';</script>";
	} else {
		echo "<script>alert('Data  \"$nama_penilaian\"  gagal disimpan...');document.location.href='?mnu=penilaian';</script>";
	}
} else {
	$sql = "UPDATE `$tbpenilaian` SET 
`nama_penilaian`='$nama_penilaian',
`periode`='$periode',
`id_pengguna`='$id_pengguna',
`bobot1`='$bobot1',
`bobot2`='$bobot2',
`bobot3`='$bobot3',
`bobot4`='$bobot4',
`bobot5`='$bobot5',
`bobot6`='$bobot6',
`bobot7`='$bobot7',
`bobot8`='$bobot8',
`bobot9`='$bobot9',
`bobot10`='$bobot10',
`bobot11`='$bobot11',
`bobot12`='$bobot12',
`bobot13`='$bobot13',
`bobot14`='$bobot14',
`bobot15`='$bobot15',
`bobot16`='$bobot16',
`bobot17`='$bobot17',
`bobot18`='$bobot18',
`bobot19`='$bobot19',
`status`='$status',
`keterangan`='$keterangan'
WHERE `id_penilaian`='$id_penilaian0'";
	$ubah = process($conn, $sql);
	if ($ubah) {
		echo "<script>alert('Data  \"$nama_penilaian\"  berhasil diubah !');document.location.href='?mnu=penilaian';</script>";
	} else {
		echo "<script>alert('Data  \"$nama_penilaian\"  gagal diubah...');document.location.href='?mnu=penilaian';</script>";
	}
} //else simpan
}
}
?>

<?php
if (isset($_GET["pro"]) && $_GET["pro"] == "hapus") {
$id_penilaian = $_GET["kode"];
$nama_penilaian = $_GET["nama_penilaian"];
$sql = "DELETE FROM `$tbpenilaian` WHERE `id_penilaian`='$id_penilaian'";
$hapus = process($conn, $sql);
if ($hapus) {
	echo "<script>alert('Data  \"$nama_penilaian\"  berhasil dihapus !');document.location.href='?mnu=penilaian';</script>";
} else {
	echo "<script>alert('Data  \"$nama_penilaian\"  gagal dihapus...');document.location.href='?mnu=penilaian';</script>";
}
}
?>