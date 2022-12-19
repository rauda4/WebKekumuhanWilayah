<?php
$pro = "simpan";
$status = "Aktif";

$id_hasil = "";
$id_penilaian = "";
$id_kelurahan = "";
$bobot_1 = "";
$hasil_1 = "";
$rangking_1 = "";
$rekapitulasi_1 = "";
$keterangan_1 = "";
$bobot_2 = "";
$hasil_2 = "";
$rangking_2 = "";
$rekapitulasi_2 = "";
$keterangan_2 = "";
$catatan = "";
?>

<link type="text/css" href="<?php echo "$PATH/base/"; ?>ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo "$PATH/"; ?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/i18n/ui.datepicker-id.js"></script>

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
	$id_penilaian = $d["id_penilaian"];
	$id_kelurahan = $d["id_kelurahan"];
	$bobot_1 = $d["bobot_1"];
	$hasil_1 = $d["hasil_1"];
	$rangking_1 = $d["rangking_1"];
	$rekapitulasi_1 = $d["rekapitulasi_1"];
	$keterangan_1 = $d["keterangan_1"];
	$bobot_2 = $d["bobot_2"];
	$hasil_2 = $d["hasil_2"];
	$rangking_2 = $d["rangking_2"];
	$rekapitulasi_2 = $d["rekapitulasi_2"];
	$keterangan_2 = $d["keterangan_2"];
	$catatan = $d["catatan"];
	$pro = "ubah";
}
?>

<div id="accordion">
	<h4>Tambah Data Hasil</h4>
	<div>

		<div class="container-fluid pt-4 px-4">
			<div class="row g-4">
				<div class="col-sm-12 col-xl-12">
					<div class="bg-light rounded h-100 p-4">
						<form action="" method="post" enctype="multipart/form-data">
							<table class="table">
								<tr>
									<th width="20%"><label for="id_penilaian">Pilih Penilaian</label>
									<th width="1%">:
									<th colspan="2"><select class="form-control" name="id_penilaian" style="width: 350px;">
											<?php
											$sql = "select * from `$tbpenilaian`";
											$arr = getData($conn, $sql);
											foreach ($arr as $d) {
												$id_penilaian0 = $d["id_penilaian"];
												$nama_penilaian = strtoupper($d["nama_penilaian"]);
												echo "<option value='$id_penilaian0'";
												if ($id_penilaian0 == $id_penilaian) {
													echo "selected";
												}
												echo ">$nama_penilaian ($id_penilaian0)</option>";
											}
											?>
										</select>
								</tr>

								<tr>
									<td height="24"><label for="bobot_1">Pilih Kelurahan</label>
									<td>:
									<td><select class="form-control" name="id_kelurahan" style="width: 350px;">
											<?php
											$sql = "select * from `$tbkelurahan`";
											$arr = getData($conn, $sql);
											foreach ($arr as $d) {
												$id_kelurahan0 = $d["id_kelurahan"];
												$nama_kelurahan = strtoupper($d["nama_kelurahan"]);
												echo "<option value='$id_kelurahan0'";
												if ($id_kelurahan0 == $id_kelurahan) {
													echo "selected";
												}
												echo ">$nama_kelurahan ($id_kelurahan0)</option>";
											}
											?>
										</select></td>
								</tr>

								<tr>
									<td height="24"><label for="bobot_1">Bobot 1</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="bobot_1" type="text" id="bobot_1" value="<?php echo $bobot_1; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="hasil_1">Hasil 1</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="hasil_1" type="text" id="hasil_1" value="<?php echo $hasil_1; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="rangking_1">Rangking 1</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="rangking_1" type="text" id="rangking_1" value="<?php echo $rangking_1; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="rekapitulasi_1">Rekapitulasi 1</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="rekapitulasi_1" type="text" id="rekapitulasi_1" value="<?php echo $rekapitulasi_1; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="keterangan_1">Keterangan 1</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="keterangan_1" type="text" id="keterangan_1" value="<?php echo $keterangan_1; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="bobot_2">Bobot 2</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="bobot_2" type="text" id="bobot_2" value="<?php echo $bobot_2; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="Hasil 2">Hasil 2</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="hasil_2" type="text" id="hasil_2" value="<?php echo $hasil_2; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="rangking_2">Rangking 2</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="rangking_2" type="text" id="rangking_2" value="<?php echo $rangking_2; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="Rekapitulasi 2">Rekapitulasi 2</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="rekapitulasi_2" type="text" id="rekapitulasi_2" value="<?php echo $rekapitulasi_2; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="keterangan 2">Keterangan 2</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="keterangan_2" type="text" id="keterangan_2" value="<?php echo $keterangan_2; ?>" size="25" />
									</td>
								</tr>


								<tr>
									<td height="24"><label for="catatan">Catatan</label>
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
										<input name="id_hasil0" type="hidden" id="id_hasil0" value="<?php echo $id_hasil0; ?>" />
										<a href="?mnu=hasil"><input class="btn btn-warning" name="Batal" type="button" id="Batal" value="Batal" /></a>
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
	$sqlc = "select distinct(`id_kelurahan`) from `$tbhasil` order by `id_kelurahan` asc";
	$jumc = getJum($conn, $sqlc);
	if ($jumc < 1) {
		echo "<h4>Maaf data penilaian belum tersedia</h4>";
	}
	$arrc = getData($conn, $sqlc);
	foreach ($arrc as $dc) {
		$id_kelurahan = $dc["id_kelurahan"];
	?>
		<h3>Data Hasil <?php echo getKelurahan($conn, $id_kelurahan) ?>:</h3>
		<div>

			Cetak | <img src='ypathicon/print.png' title='PRINT' OnClick="PRINT('<?php echo $id_kelurahan; ?>')"> |
			<table class="table table-bordered">
				<tr bgcolor="#cccccc">
					<th width="3%">No</td>
					<th width="10%">Penilaian</td>
					<th width="50%">Detail</td>
					<th width="5%">Menu</td>
				</tr>
				<?php
				$sql = "select * from `$tbhasil` where  `id_kelurahan`='$id_kelurahan' order by `id_hasil` desc";
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
						$id_hasil = $d["id_hasil"];
						$id_penilaian = $d["id_penilaian"];
						$penilaian = getPenilaian($conn, $d["id_penilaian"]);
						$id_kelurahan = $d["id_kelurahan"];
						$kelurahan = getKelurahan($conn, $d["id_kelurahan"]);
						$bobot_1 = $d["bobot_1"];
						$hasil_1 = $d["hasil_1"];
						$rangking_1 = $d["rangking_1"];
						$rekapitulasi_1 = $d["rekapitulasi_1"];
						$keterangan_1 = $d["keterangan_1"];
						$bobot_2 = $d["bobot_2"];
						$hasil_2 = $d["hasil_2"];
						$rangking_2 = $d["rangking_2"];
						$rekapitulasi_2 = $d["rekapitulasi_2"];
						$keterangan_2 = $d["keterangan_2"];
						$catatan = $d["catatan"];

						$color = "";
						if ($no % 2 == 0) {
							$color = "";
						}
						echo "<tr bgcolor='$color'>
				<td>$no</td>
				<td>$penilaian</td>
				<td><b>$kelurahan</b><br>
				    $bobot_1, $hasil_1, $rangking_1, $rekapitulasi_1, $keterangan_1, $bobot_2, $hasil_2, $rangking_2,
					$rekapitulasi_2,$keterangan_2,<br>
				Catatan: $catatan</td>
				<td><div align='center'>
<a href='?mnu=hasil&pro=ubah&kode=$id_hasil'><img src='ypathicon/ub.png' title='ubah'></a>
<a href='?mnu=hasil&pro=hapus&kode=$id_hasil'><img src='ypathicon/ha.png' title='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $id_penilaian pada data penilaian ?..\")'></a></div></td>
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
				echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=hasil'>« Prev</a></span> ";
			} else {
				echo "<span class=disabled>« Prev</span> ";
			}

			for ($i = 1; $i <= $jmlhal; $i++)
				if ($i != $page) {
					echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=hasil'>$i</a> ";
				} else {
					echo " <span class=current>$i</span> ";
				}

			if ($page < $jmlhal) {
				$next = $page + 1;
				echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=hasil'>Next »</a></span>";
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
			$id_hasil = strip_tags($_POST["id_hasil"]);
			$id_hasil0 = strip_tags($_POST["id_hasil0"]);
			$id_kelurahan = strip_tags($_POST["id_kelurahan"]);
			$id_penilaian = strip_tags($_POST["id_penilaian"]);
			$bobot_1 = strip_tags($_POST["bobot_1"]);
			$hasil_1 = strip_tags($_POST["hasil_1"]);
			$rangking_1 = strip_tags($_POST["rangking_1"]);
			$rekapitulasi_1 = strip_tags($_POST["rekapitulasi_1"]);
			$keterangan_1 = strip_tags($_POST["keterangan_1"]);
			$bobot_2 = strip_tags($_POST["bobot_2"]);
			$hasil_2 = strip_tags($_POST["hasil_2"]);
			$rangking_2 = strip_tags($_POST["rangking_2"]);
			$rekapitulasi_2 = strip_tags($_POST["rekapitulasi_2"]);
			$keterangan_2 = strip_tags($_POST["keterangan_2"]);
			$catatan = strip_tags($_POST["catatan"]);

			if ($pro == "simpan") {
				$sql = " INSERT INTO `$tbhasil` (
`id_hasil` ,
`id_penilaian` ,
`id_kelurahan` ,
`bobot_1` ,
`hasil_1` ,
`rangking_1` ,
`rekapitulasi_1` ,
`keterangan_1` ,
`bobot_2` ,
`hasil_2` ,
`rangking_2` ,
`rekapitulasi_2` ,
`keterangan_2` ,
`catatan`
) VALUES (
'$id_hasil', 
'$id_penilaian',
'$id_kelurahan',
'$bobot_1',
'$hasil_1',
'$rangking_1',
'$rekapitulasi_1',
'$keterangan_1',
'$bobot_2',
'$hasil_2',
'$rangking_2',
'$rekapitulasi_2',
'$keterangan_2',
'$catatan'
)";

				$simpan = process($conn, $sql);
				if ($simpan) {
					echo "<script>alert('Data $id_penilaian berhasil disimpan !');document.location.href='?mnu=hasil';</script>";
				} else {
					echo "<script>alert('Data $id_penilaian gagal disimpan...');document.location.href='?mnu=hasil';</script>";
				}
			} else {
				$sql = "UPDATE `$tbhasil` SET 
	`id_penilaian`='$id_penilaian',
	`id_kelurahan`='$id_kelurahan',
	`bobot_1`='$bobot_1',
	`hasil_1`='$hasil_1',
	`rangking_1`='$rangking_1',
	`rekapitulasi_1`='$rekapitulasi_1',
	`keterangan_1`='$keterangan_1',
	`bobot_2`='$bobot_2',
	`hasil_2`='$hasil_2',
	`rangking_2`='$rangking_2',
	`rekapitulasi_2`='$rekapitulasi_2',
	`keterangan_2`='$keterangan_2',
	`catatan`='$catatan'
	 WHERE `id_hasil`='$id_hasil0'";
				$ubah = process($conn, $sql);
				if ($ubah) {
					echo "<script>alert('Data $id_penilaian berhasil diubah !');document.location.href='?mnu=hasil';</script>";
				} else {
					echo "<script>alert('Data $id_penilaian gagal diubah...');document.location.href='?mnu=hasil';</script>";
				}
			} //else simpan
		}
		?>

		<?php
		if (isset($_GET["pro"]) && $_GET["pro"] == "hapus") {
			$id_hasil = $_GET["kode"];
			$sql = "DELETE FROM `$tbpenilaian` WHERE `id_hasil`='$id_hasil'";
			$hapus = process($conn, $sql);
			if ($hapus) {
				echo "<script>alert('Data $id_hasil berhasil dihapus !');document.location.href='?mnu=hasil';</script>";
			} else {
				echo "<script>alert('Data $id_hasil gagal dihapus...');document.location.href='?mnu=hasil';</script>";
			}
		}
		?>