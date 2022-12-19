<?php
$pro = "simpan";
$status = "Aktif";

$id_kelurahan = "";
$nama_kelurahan = "";
$deskripsi = "";
?>

<link type="text/css" href="<?php echo "$PATH/base/"; ?>ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo "$PATH/"; ?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/i18n/ui.datepicker-id.js"></script>

<script type="text/javascript">
	function PRINT(pk) {
		win = window.open('kelurahan/kelurahan_print.php', 'win', 'width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0');
	}
</script>

<script language="JavaScript">
	function buka(url) {
		window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');
	}
</script>

<?php
$sql = "select `id_kelurahan` from `$tbkelurahan` order by `id_kelurahan` desc";
$jum = getJum($conn, $sql);
$kd = "KLR";
if ($jum > 0) {
	$d = getField($conn, $sql);
	$idmax = $d['id_kelurahan'];
	$urut = substr($idmax, 3, 2) + 1; //01
	if ($urut < 10) {
		$idmax = "$kd" . "0" . $urut;
	} else {
		$idmax = "$kd" . $urut;
	}
} else {
	$idmax = "$kd" . "01";
}
$id_kelurahan = $idmax;
?>
<?php
if (isset($_GET["pro"]) && $_GET["pro"] == "ubah") {
	$id_kelurahan = $_GET["kode"];
	$sql = "select * from `$tbkelurahan` where `id_kelurahan`='$id_kelurahan'";
	$d = getField($conn, $sql);
	$id_kelurahan = $d["id_kelurahan"];
	$id_kelurahan0 = $d["id_kelurahan"];
	$nama_kelurahan = $d["nama_kelurahan"];
	$deskripsi = $d["deskripsi"];
	$pro = "ubah";
}
?>
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


<div id="accordion">
	<h3>Tambah Data Kelurahan</h3>
	<div>

		<form action="" method="post" enctype="multipart/form-data">
			<table class="table">
				<tr>
					<th width="20%"><label for="id_kelurahan">ID Kelurahan</label>
					<th width="1%">:
					<th colspan="2"><b><?php echo $id_kelurahan; ?></b>
				</tr>

				<tr>
					<td><label for="nama_kelurahan">Nama Kelurahan</label>
					<td>:
					<td width="213"><input class="form-control" required style="width: 450px;" name="nama_kelurahan" type="text" id="nama_kelurahan" value="<?php echo $nama_kelurahan; ?>" size="25" />
					</td>
				</tr>

				<tr>
					<td height="24"><label for="deskripsi">Deskripsi</label>
					<td>:
					<td><textarea class="form-control" name="deskripsi" cols="55" rows="2"><?php echo $deskripsi; ?></textarea></td>
				</tr>

				<tr>
					<td>
					<td>
					<td colspan="2"><input class="btn btn-success" name="Simpan" type="submit" id="Simpan" value="Simpan" />
						<input name="pro" type="hidden" id="pro" value="<?php echo $pro; ?>" />
						<input name="id_kelurahan" type="hidden" id="id_kelurahan" value="<?php echo $id_kelurahan; ?>" />
						<input name="id_kelurahan0" type="hidden" id="id_kelurahan0" value="<?php echo $id_kelurahan0; ?>" />
						<a href="?mnu=skelurahan"><input class="btn btn-warning" name="Batal" type="button" id="Batal" value="Batal" /></a>
					</td>
				</tr>
			</table>
		</form>

	</div>

	<h3>Data Kelurahan :</h3>
	<div>

		Cetak | <img src='ypathicon/print.png' title='PRINT' OnClick="PRINT()"> |
		<table class="table table-bordered">
			<tr bgcolor="#cccccc">
				<th width="3%">No</td>
				<th width="50%">Deskripsi</td>
				<th width="5%">
					<center>Menu</td>
			</tr>
			<?php
			$sql = "select * from `$tbkelurahan`  order by `id_kelurahan` asc";
			$jum = getJum($conn, $sql);
			if ($jum > 0) {
				//--------------------------------------------------------------------------------------------
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
				//--------------------------------------------------------------------------------------------									
				$arr = getData($conn, $sql2);
				foreach ($arr as $d) {
					$id_kelurahan = $d["id_kelurahan"];
					$nama_kelurahan = strtoupper($d["nama_kelurahan"]);
					$deskripsi = $d["deskripsi"];
					$color = "";
					if ($no % 2 == 0) {
						$color = "";
					}
					echo "<tr bgcolor='$color'>
				<td>$no</td>
				<td><b>$nama_kelurahan</b><br><small>$deskripsi</small></td>
				<td><div align='center'>
<a href='?mnu=skelurahan&pro=ubah&kode=$id_kelurahan'><img src='ypathicon/ub.png' title='ubah'></a>
<a href='?mnu=skelurahan&pro=hapus&kode=$id_kelurahan&nama_kelurahan=$nama_kelurahan'><img src='ypathicon/ha.png' title='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $nama_kelurahan pada data kelurahan ?..\")'></a></div></td>
				</tr>";
					$no++;
				} //for dalam
			} //if
			else {
				echo "<tr><td colspan='6'><blink>Maaf, Data kelurahan belum tersedia...</blink></td></tr>";
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
				echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=skelurahan'>« Prev</a></span> ";
			} else {
				echo "<span class=disabled>« Prev</span> ";
			}

			for ($i = 1; $i <= $jmlhal; $i++)
				if ($i != $page) {
					echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=skelurahan'>$i</a> ";
				} else {
					echo " <span class=current>$i</span> ";
				}

			if ($page < $jmlhal) {
				$next = $page + 1;
				echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=skelurahan'>Next »</a></span>";
			} else {
				echo "<span class=disabled>Next »</span>";
			}
			echo "</div>";
		} //if jmldata

		$jmldata = $jum;
		echo "<p align=center>Total data <b>$jmldata</b> item</p>";

		echo "</div>";
		?>
	</div>

	<?php
	if (isset($_POST["Simpan"])) {
		$pro = strip_tags($_POST["pro"]);
		$id_kelurahan = strip_tags($_POST["id_kelurahan"]);
		$id_kelurahan0 = strip_tags($_POST["id_kelurahan0"]);
		$nama_kelurahan = strip_tags($_POST["nama_kelurahan"]);
		$deskripsi = strip_tags($_POST["deskripsi"]);

		if ($pro == "simpan") {
			$sql = " INSERT INTO `$tbkelurahan` (
`id_kelurahan` ,
`nama_kelurahan` ,
`deskripsi`
) VALUES (
'$id_kelurahan', 
'$nama_kelurahan',
'$deskripsi'
)";

			$simpan = process($conn, $sql);
			if ($simpan) {
				echo "<script>alert('Data $nama_kelurahan berhasil disimpan !');document.location.href='?mnu=skelurahan';</script>";
			} else {
				echo "<script>alert('Data $nama_kelurahan gagal disimpan...');document.location.href='?mnu=skelurahan';</script>";
			}
		} else {
			$sql = "UPDATE `$tbkelurahan` SET 
	`id_kelurahan`='$id_kelurahan',
	`nama_kelurahan`='$nama_kelurahan',
	`deskripsi`='$deskripsi'
	 WHERE `id_kelurahan`='$id_kelurahan0'";
			$ubah = process($conn, $sql);
			if ($ubah) {
				echo "<script>alert('Data $nama_kelurahan berhasil diubah !');document.location.href='?mnu=skelurahan';</script>";
			} else {
				echo "<script>alert('Data $nama_kelurahan gagal diubah...');document.location.href='?mnu=skelurahan';</script>";
			}
		} //else simpan
	}
	?>

	<?php
	if (isset($_GET["pro"]) && $_GET["pro"] == "hapus") {
		$id_kelurahan = $_GET["kode"];
		$nama_kelurahan = $_GET["nama_kelurahan"];
		$sql = "DELETE FROM `$tbkelurahan` WHERE `id_kelurahan`='$id_kelurahan'";
		$hapus = process($conn, $sql);
		if ($hapus) {
			echo "<script>alert('Data $nama_kelurahan berhasil dihapus !');document.location.href='?mnu=skelurahan';</script>";
		} else {
			echo "<script>alert('Data $nama_kelurahan gagal dihapus...');document.location.href='?mnu=skelurahan';</script>";
		}
	}
	?>