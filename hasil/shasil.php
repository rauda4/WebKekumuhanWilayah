<?php
$pro = "simpan";

$id_hasil = "";
$id_penilaian = "";
$id_kelurahan = "";
$rekapitulasi_1 = "";
$hasil_1 = "";
$bobot_1 = "";
$rangking_1 = "";
$hasil_2 = "";
$bobot_2 = "";
$rangking_2 = "";
$catatan = "";
?>

<link type="text/css" href="<?php echo "$PATH/base/"; ?>ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo "$PATH/"; ?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/i18n/ui.datepicker-id.js"></script>

<script type="text/javascript">
	function PRINT(pk) {
		win = window.open('hasil/hasil_print.php?pk=' + pk, 'win', 'width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, rangking_2=0');
	}
</script>

<script language="JavaScript">
	function buka(url) {
		window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');
	}
</script>


<link rel="stylesheet" href="jsacordeon/jquery-ui.css">
<link rel="stylesheet" href="resources/demos/style.css">
<script src="jsacordeon/jquery-1.12.4.js"></script>
<script src="jsacordeon/jquery-ui.js"></script>
<script>
	$(function() {
		$("#accordion").accordion({
			collapsible: true
		});
	});
</script>

<?php
if (isset($_GET["pro"]) && $_GET["pro"] == "ubah") {
	$id_hasil = $_GET["kode"];
	$sql = "select * from `$tbhasil` where `id_hasil`='$id_hasil'";
	$d = getField($conn, $sql);
	$id_hasil = $d["id_hasil"];
	$id_hasil0 = $d["id_hasil"];
	$hasil_2 = $d["hasil_2"];
	$id_penilaian = $d["id_penilaian"];
	$id_kelurahan = getKelurahan($conn,$d["id_kelurahan"])." (".$d["id_kelurahan"].")";
	$rekapitulasi_1 = $d["rekapitulasi_1"];
	$rekapitulasi_2 = $d["rekapitulasi_2"];
	$hasil_1 = $d["hasil_1"];
	$rangking_1 = $d["rangking_1"];
	$rangking_2 = $d["rangking_2"];
	$hasil_1 = $d["hasil_1"];
	$hasil_2 = $d["hasil_2"];
	$keterangan_1= $d["keterangan_1"];
	$keterangan_2= $d["keterangan_2"];
	$catatan= $d["catatan"];
	$pro = "ubah";
}
?>

<div id="accordion">

<?php
if (isset($_GET["pro"]) && $_GET["pro"] == "ubah") {?>
	<h4>Update Data Hasil</h4>
	<div>

		<div class="row g-4">
			<div class="col-sm-12 col-xl-12">
				<div class="bg-light rounded h-100 p-4">
					<form action="" method="post" enctype="multipart/form-data">
<table class="table">
<tr>
	<td height="24"><label for="id_kelurahan">Nama Kelurahan</label>
	<td>:
	<td><b><?php echo $id_kelurahan;?></b></td>
</tr>

<tr>
	<td height="24"><label for="rekapitulasi_1">Rekapitulasi SAW</label>
	<td>:
	<td><?php echo $rekapitulasi_1; ?></td>
</tr>
<tr>
	<td height="24"><label for="hasil_1">Bobot SAW</label>
	<td>:
	<td><?php echo $bobot_1; ?>
	</td>
</tr>

<tr>
	<td height="24"><label for="hasil_1">Hasil SAW</label>
	<td>:
	<td><?php echo $hasil_1; ?>
	</td>
</tr>

<tr>
	<td height="24"><label for="rangking_1">rangking SAW</label>
	<td>:
	<td><?php echo $rangking_1; ?>
	</td>
</tr>

<tr>
	<td height="24"><label for="catatan">Catatan SAW</label>
	<td>:
	<td>
		<textarea class="form-control" name="keterangan_1" cols="55" rows="2"><?php echo $keterangan_1; ?></textarea>
	</td>
</tr>


<tr>
	<td height="24"><label for="rekapitulasi_2">Rekapitulasi SMART</label>
	<td>:
	<td><?php echo $rekapitulasi_2; ?></td>
</tr>
<tr>
	<td height="24"><label for="hasil_2">Bobot SMART</label>
	<td>:
	<td><?php echo $bobot_2; ?>
	</td>
</tr>
<tr>
	<td height="24"><label for="hasil_1">Hasil SMART</label>
	<td>:
	<td><?php echo $hasil_2; ?>
	</td>
</tr>

<tr>
	<td height="24"><label for="rangking_2">rangking SMART</label>
	<td>:
	<td><?php echo $rangking_2; ?>
	</td>
</tr>
<tr>
	<td height="24"><label for="catatan">Catatan SMART</label>
	<td>:
	<td>
		<textarea class="form-control" name="keterangan_2" cols="55" rows="2"><?php echo $keterangan_2; ?></textarea>
	</td>
</tr>
<tr>
	<td height="24"><label for="catatan">Catatan Admin/Pengguna</label>
	<td>:
	<td>
		<textarea class="form-control" name="catatan" cols="55" rows="2"><?php echo $catatan; ?></textarea>
	</td>
</tr>

<tr>
<td>
<td>
<td colspan="2"><input class="btn btn-success" name="Simpan" type="submit" id="Simpan" value="Simpan" />
<input name="pro" type="hidden" id="pro" value="<?php echo $pro; ?>" />
<input name="nama_kelurahan" type="hidden" id="nama_kelurahan" value="<?php echo $nama_kelurahan; ?>" />
<input name="id_hasil" type="hidden" id="id_hasil" value="<?php echo $id_hasil; ?>" />
<a href="?mnu=hasil"><input class="btn btn-warning" name="Batal" type="button" id="Batal" value="Batal" /></a>
</td>
</tr>
</table>
					</form>
				</div>
			</div>
		</div>

	</div>
<?php
}

$sqlc = "select * from `$tbpenilaian` order by `id_penilaian` asc";
$jumc = getJum($conn, $sqlc);
if ($jumc < 1) {
	echo "<h4>Maaf data hasils belum tersedia</h4>";
}
$arrc = getData($conn, $sqlc);
foreach ($arrc as $dc) {
		$id_penilaian = $dc["id_penilaian"];
		$id_penilaian0 = $dc["id_penilaian"];
		$nama_penilaian = $dc["nama_penilaian"];
		$periode = $dc["periode"];
		$id_pengguna = $dc["id_pengguna"];
		$nama_pengguna =getPengguna($conn,$id_pengguna);
		$bobot1 = $dc["bobot1"];
		$bobot2 = $dc["bobot2"];
		$bobot3 = $dc["bobot3"];
		$bobot4 = $dc["bobot4"];
		$bobot5 = $dc["bobot5"];
		$bobot6 = $dc["bobot6"];
		$bobot7 = $dc["bobot7"];
		$bobot8 = $dc["bobot8"];
		$bobot9 = $dc["bobot9"];
		$bobot10 = $dc["bobot10"];
		$bobot11 = $dc["bobot11"];
		$bobot12 = $dc["bobot12"];
		$bobot13 = $dc["bobot13"];
		$bobot14 = $dc["bobot14"];
		$bobot15 = $dc["bobot15"];
		$bobot16 = $dc["bobot16"];
		$bobot17 = $dc["bobot17"];
		$bobot18 = $dc["bobot18"];
		$bobot19 = $dc["bobot19"];
		$status = $dc["status"];
		$keterangan = $dc["keterangan"];
		$tanggal= WKT($dc["tanggal"]);
		$jam = $dc["jam"];

	?>
<h3>Data Hasil <?php echo $nama_penilaian ?>:</h3>
<div> Cetak | <img src='ypathicon/print.png' title='PRINT' OnClick="PRINT('<?php echo $id_penilaian; ?>')"> |

<table width="100%" class="table  table-responsive">
<tr>
<td width="30%"><label for="nama_penilaian">Nama penilaian</label>
<td width="10">:
<td width="264" colspan="2"><b><?php echo "$nama_penilaian"; ?> | <?php echo "$id_penilaian"; ?></b>
</tr>
<tr>
<td><label for="deskripsi">Periode </label>
<td>:
<td><?php echo $periode; ?></td>
</tr>
	 
<tr>
<td><label for="tanggal">Nama Pengguna </label>
<td>:
<td><?php echo "$nama_pengguna ($id_pengguna)"; ?></td>
</tr>
<tr>
<td><label for="tanggal">Waktu </label>
<td>:
<td><?php echo $tanggal; ?> - <?php echo $jam; ?> Wib</td>
</tr>
</table>
	<hr>

<table class="table table-bordered">
	<tr bgcolor="#cccccc">
		<th width="3%">No</td> 
		<th width="80%">Kelurahan Dan Hasil Analisa Penilaian</td>
		<th width="5%">SAW</td>
		<th width="5%">SMART</td>
		<th width="13%">Menu</td>
	</tr>
	<?php
	$sql = "select * from `$tbhasil` where  `id_penilaian`='$id_penilaian' order by `rangking_1` asc";
	$jum = getJum($conn, $sql);
	$no=0;
	if ($jum > 0) {	
		$arr = getData($conn, $sql);
		foreach ($arr as $d) {
			$no++;
			$id_hasil = $d["id_hasil"];
			$id_penilaian = $d["id_penilaian"];
			$id_kelurahan = $d["id_kelurahan"];
		
			$rekapitulasi_1 = $d["rekapitulasi_1"];
			$rangking_1 = $d["rangking_1"];
			$bobot_1 = $d["bobot_1"];
			$keterangan_1 = $d["keterangan_1"];
			
			$rangking_2 = $d["rangking_2"];
			$rekapitulasi_2 = $d["rekapitulasi_2"];
			$bobot_1 = $d["bobot_1"];
			$keterangan_1 = $d["keterangan_1"];
			$catatan = $d["catatan"];
			
	$sqld = "select `nama_kelurahan`,`deskripsi` from `$tbkelurahan` where `id_kelurahan`='$id_kelurahan'";
		$dd = getField($conn, $sqld);
		$nama_kelurahan = $dd["nama_kelurahan"];
		$deskripsi = $dd["deskripsi"];
			$color = "";
			if ($no % 2 == 0) {
				$color = "";
			}
echo "<tr bgcolor='$color'>
	<td>$no</td>
	<td><b>$nama_kelurahan | $id_kelurahan</b>
	<br>
	<small><b>SAW:</b><i>$rekapitulasi_1</i></small>
	<br><small><b>SMART :</b>:<i>$rekapitulasi_2</i></small>
	<br><small><u>$catatan</u></small></td>
	<td>$rangking_1</td>
	<td>$rangking_2</td>
	<td><div align='center'>
<a href='?mnu=hasil&pro=ubah&kode=$id_hasil'><img src='ypathicon/ub.png' title='ubah'></a>
<a href='?mnu=hasil&pro=hapus&kode=$id_hasil'><img src='ypathicon/ha.png' title='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $id_penilaian pada data hasil ?..\")'></a></div></td>
	</tr>";
			$no++;
		} //for dalam
	} //if
	else {
		echo "<tr><td colspan='6'><blink>Maaf, Data Hasil belum tersedia...</blink></td></tr>";
	}
	?>
</table>
<?php
echo "</div>";
} //for atas
?>
</div>
<?php
if (isset($_POST["Simpan"])) {
$id_hasil = strip_tags($_POST["id_hasil"]);
$keterangan_1 = strip_tags($_POST["keterangan_1"]);
$keterangan_2 = strip_tags($_POST["keterangan_2"]);
$catatan= strip_tags($_POST["catatan"]);
$nama_kelurahan = strip_tags($_POST["nama_kelurahan"]);

$sql = "UPDATE `$tbhasil` SET `keterangan_1`='$keterangan_1',`keterangan_2`='$keterangan_2',`catatan`='$catatan' WHERE `id_hasil`='$id_hasil'";
	$ubah = process($conn, $sql);
	if ($ubah) {
		echo "<script>alert('Data \"Penilaian $nama_kelurahan\" berhasil diubah !');document.location.href='?mnu=hasil';</script>";
	} else {
		echo "<script>alert('Data \"Penilaian $nama_kelurahan\"  gagal diubah...');document.location.href='?mnu=hasil';</script>";
	}
}
?>

<?php
if (isset($_GET["pro"]) && $_GET["pro"] == "hapus") {
$id_hasil = $_GET["kode"];
$sql = "DELETE FROM `$tbhasil` WHERE `id_hasil`='$id_hasil'";
$hapus = process($conn, $sql);
if ($hapus) {
	echo "<script>alert('Data $id_hasil berhasil dihapus !');document.location.href='?mnu=hasil';</script>";
} else {
	echo "<script>alert('Data $id_hasil gagal dihapus...');document.location.href='?mnu=hasil';</script>";
}
}
?>