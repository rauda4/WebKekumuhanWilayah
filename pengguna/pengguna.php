<?php
$pro = "simpan";
$status = "Aktif";

$id_pengguna = "";
$nama_pengguna = "";
$username = "";
$password = "";
$telepon = "";
$email = "";
$level = "";
$status = "";
$keterangan = "";
?>

<link type="text/css" href="<?php echo "$PATH/base/"; ?>ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo "$PATH/"; ?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/i18n/ui.datepicker-id.js"></script>

<script type="text/javascript">
	function PRINT(pk) {
		win = window.open('pengguna/pengguna_print.php?pk=' + pk, 'win', 'width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0');
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
$sql = "select `id_pengguna` from `$tbpengguna` order by `id_pengguna` desc";
$jum = getJum($conn, $sql);
$kd = "PGN";
if ($jum > 0) {
	$d = getField($conn, $sql);
	$idmax = $d['id_pengguna'];
	$urut = substr($idmax, 3, 2) + 1; //01
	if ($urut < 10) {
		$idmax = "$kd" . "0" . $urut;
	} else {
		$idmax = "$kd" . $urut;
	}
} else {
	$idmax = "$kd" . "01";
}
$id_pengguna = $idmax;
?>
<?php
if (isset($_GET["pro"]) && $_GET["pro"] == "ubah") {
	$id_pengguna = $_GET["kode"];
	$sql = "select * from `$tbpengguna` where `id_pengguna`='$id_pengguna'";
	$d = getField($conn, $sql);
	$id_pengguna = $d["id_pengguna"];
	$id_pengguna0 = $d["id_pengguna"];
	$level = $d["level"];
	$nama_pengguna = $d["nama_pengguna"];
	$username = $d["username"];
	$password = $d["password"];
	$telepon = $d["telepon"];
	$email = $d["email"];
	$status = $d["status"];
	$keterangan = $d["keterangan"];
	$pro = "ubah";
}
?>

<div id="accordion">
	<h4>Tambah Data Pengguna</h4>
	<div>

		<div class="container-fluid pt-4 px-4">
			<div class="row g-4">
				<div class="col-sm-12 col-xl-12">
					<div class="bg-light rounded h-100 p-4">
						<form action="" method="post" enctype="multipart/form-data">
							<table class="table">
								<tr>
									<th width="20%"><label for="id_pengguna">ID Pengguna</label>
									<th width="1%">:
									<th colspan="2"><b><?php echo $id_pengguna; ?></b>
								</tr>
								<tr>
									<td><label for="nama_pengguna">Nama Pengguna</label>
									<td>:
									<td width="213"><input class="form-control" required style="width: 350px;" name="nama_pengguna" type="text" id="nama_pengguna" value="<?php echo $nama_pengguna; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td><label for="level">Level</label>
									<td>:
									<td colspan="2">
										<input type="radio" name="level" id="level" checked="checked" value="Administrator" <?php if ($level == "Administrator") {
																																echo "checked";
																															} ?> />Administrator
										<input type="radio" name="level" id="level" value="Staff Kecamatan" <?php if ($level == "Staff Kecamatan") {
																												echo "checked";
																											} ?> />Staff Kecamatan
									</td>
								</tr>

								<tr>
									<td height="24"><label for="telepon">Telepon</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="telepon" type="number" id="telepon" value="<?php echo $telepon; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="email">Email</label>
									<td>:
									<td><input required style="width: 450px;" class="form-control" name="email" type="email" id="email" value="<?php echo $email; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="username">Username</label>
									<td>:
									<td><input required class="form-control" style="width: 150px;" name="username" type="username" id="username" value="<?php echo $username; ?>" size="25" /></td>
								</tr>

								<tr>
									<td height="24"><label for="password">Password</label>
									<td>:
									<td><input required class="form-control" style="width: 150px;" name="password" type="password" id="password" value="<?php echo $password; ?>" size="25" /></td>
								</tr>

								<tr>
									<td><label for="status">Status</label>
									<td>:
									<td colspan="2">
										<input type="radio" name="status" id="status" checked="checked" value="Aktif" <?php if ($status == "Aktif") {
																															echo "checked";
																														} ?> />Aktif
										<input type="radio" name="status" id="status" value="Tidak Aktif" <?php if ($status == "Tidak Aktif") {
																												echo "checked";
																											} ?> />Tidak Aktif
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
									<td colspan="2"><input class="btn btn-success" name="Simpan" type="submit" id="Simpan" value="Simpan" />
										<input name="pro" type="hidden" id="pro" value="<?php echo $pro; ?>" />
										<input name="id_pengguna" type="hidden" id="id_pengguna" value="<?php echo $id_pengguna; ?>" />
										<input name="id_pengguna0" type="hidden" id="id_pengguna0" value="<?php echo $id_pengguna0; ?>" />
										<a href="?mnu=pengguna"><input class="btn btn-warning" name="Batal" type="button" id="Batal" value="Batal" /></a>
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
	$sqlc = "select distinct(`status`) from `$tbpengguna` order by `status` asc";
	$jumc = getJum($conn, $sqlc);
	if ($jumc < 1) {
		echo "<h4>Maaf data penggunas belum tersedia</h4>";
	}
	$arrc = getData($conn, $sqlc);
	foreach ($arrc as $dc) {
		$status = $dc["status"];
	?>
		<h3>Data Pengguna <?php echo $status ?>:</h3>
		<div>

			Cetak | <img src='ypathicon/print.png' title='PRINT' OnClick="PRINT('<?php echo $status; ?>')"> |
			<table class="table table-bordered">
				<tr bgcolor="#cccccc">
					<th width="3%">No</td>
					<th width="10%">IDPengguna</td>
					<th width="20%">Nama Pengguna</td>
					<th width="10%">Telepon</td>
					<th width="10%">Level</td>
					<th width="20%">Keterangan</td>
					<th width="5%">Menu</td>
				</tr>
				<?php
				$sql = "select * from `$tbpengguna` where  `status`='$status' order by `id_pengguna` desc";
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
						$id_pengguna = $d["id_pengguna"];
						$nama_pengguna = strtoupper($d["nama_pengguna"]);
						$username = $d["username"];
						$password = $d["password"];
						$telepon = $d["telepon"];
						$email = $d["email"];
						$level = $d["level"];
						$status = $d["status"];
						$keterangan = $d["keterangan"];

						$color = "";
						if ($no % 2 == 0) {
							$color = "";
						}
						echo "<tr bgcolor='$color'>
				<td>$no</td>
				<td>$id_pengguna</td>
				<td><a href='mailto:$email'>$nama_pengguna</a></td>
				<td>$telepon</td>
				<td>$level</td>
				<td>$keterangan</td>
				<td><div align='center'>
<a href='?mnu=pengguna&pro=ubah&kode=$id_pengguna'><img src='ypathicon/ub.png' title='ubah'></a>
<a href='?mnu=pengguna&pro=hapus&kode=$id_pengguna'><img src='ypathicon/ha.png' title='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $nama_pengguna pada data pengguna ?..\")'></a></div></td>
				</tr>";
						$no++;
					} //for dalam
				} //if
				else {
					echo "<tr><td colspan='6'><blink>Maaf, Data pengguna belum tersedia...</blink></td></tr>";
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
				echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=pengguna'>« Prev</a></span> ";
			} else {
				echo "<span class=disabled>« Prev</span> ";
			}

			for ($i = 1; $i <= $jmlhal; $i++)
				if ($i != $page) {
					echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=pengguna'>$i</a> ";
				} else {
					echo " <span class=current>$i</span> ";
				}

			if ($page < $jmlhal) {
				$next = $page + 1;
				echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=pengguna'>Next »</a></span>";
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
			$id_pengguna = strip_tags($_POST["id_pengguna"]);
			$id_pengguna0 = strip_tags($_POST["id_pengguna0"]);
			$username = strip_tags($_POST["username"]);
			$nama_pengguna = strip_tags($_POST["nama_pengguna"]);
			$password = strip_tags($_POST["password"]);
			$telepon = strip_tags($_POST["telepon"]);
			$email = strip_tags($_POST["email"]);
			$level = strip_tags($_POST["level"]);
			$status = strip_tags($_POST["status"]);
			$keterangan = strip_tags($_POST["keterangan"]);


			if ($pro == "simpan") {
				$sql = " INSERT INTO `$tbpengguna` (
						`id_pengguna` ,
						`nama_pengguna` ,
						`username` ,
						`password` ,
						`telepon` ,
						`email` ,
						`keterangan`, 
						`level` ,
						`status` 
						) VALUES (
						'$id_pengguna', 
						'$nama_pengguna',
						'$username',
						'$password', 
						'$telepon',
						'$email',
						'$keterangan',
						'$level',
						'$status'
						)";

				$simpan = process($conn, $sql);
				if ($simpan) {
					echo "<script>alert('Data $nama_pengguna berhasil disimpan !');document.location.href='?mnu=pengguna';</script>";
				} else {
					echo "<script>alert('Data $nama_pengguna gagal disimpan...');document.location.href='?mnu=pengguna';</script>";
				}
			} else {
				$sql = "UPDATE `$tbpengguna` SET 
	`nama_pengguna`='$nama_pengguna',
	`username`='$username',
	`password`='$password',
	`telepon`='$telepon' ,
	`email`='$email',
	`level`='$level',
	`status`='$status',
	`keterangan`='$keterangan'
	 WHERE `id_pengguna`='$id_pengguna0'";
				$ubah = process($conn, $sql);
				if ($ubah) {
					echo "<script>alert('Data $nama_pengguna berhasil diubah !');document.location.href='?mnu=pengguna';</script>";
				} else {
					echo "<script>alert('Data $nama_pengguna gagal diubah...');document.location.href='?mnu=pengguna';</script>";
				}
			} //else simpan
		}
		?>

		<?php
		if (isset($_GET["pro"]) && $_GET["pro"] == "hapus") {
			$id_pengguna = $_GET["kode"];
			$sql = "DELETE FROM `$tbpengguna` WHERE `id_pengguna`='$id_pengguna'";
			$hapus = process($conn, $sql);
			if ($hapus) {
				echo "<script>alert('Data $id_pengguna berhasil dihapus !');document.location.href='?mnu=pengguna';</script>";
			} else {
				echo "<script>alert('Data $id_pengguna gagal dihapus...');document.location.href='?mnu=pengguna';</script>";
			}
		}
		?>