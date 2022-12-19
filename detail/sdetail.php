<?php
$pro = "simpan";
$status = "Aktif";

$id_detail = "";
$id_penilaian = "";
$id_kelurahan = "";
$nilai1 = "";
$nilai2 = "";
$nilai3 = "";
$nilai4 = "";
$nilai5 = "";
$nilai6 = "";
$nilai7 = "";
$nilai8 = "";
$nilai9 = "";
$nilai10 = "";
$nilai11 = "";
$nilai12 = "";
$nilai13 = "";
$nilai14 = "";
$nilai15 = "";
$nilai16 = "";
$nilai17 = "";
$nilai18 = "";
$nilai19 = "";
$catatan = "";
?>

<link type="text/css" href="<?php echo "$PATH/base/"; ?>ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo "$PATH/"; ?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/i18n/ui.datepicker-id.js"></script>

<script type="text/javascript">
	function PRINT(pk) {
		win = window.open('hasil/hasil_print.php?pk=' + pk, 'win', 'width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0');
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
	$id_detail = $_GET["kode"];
	$sql = "select * from `$tbdetail` where `id_detail`='$id_detail'";
	$d = getField($conn, $sql);
	$id_detail = $d["id_detail"];
	$id_detail0 = $d["id_detail"];
	$id_penilaian = $d["id_penilaian"];
	$id_kelurahan = $d["id_kelurahan"];
	$nilai1 = $d["nilai1"];
	$nilai2 = $d["nilai2"];
	$nilai3 = $d["nilai3"];
	$nilai4 = $d["nilai4"];
	$nilai5 = $d["nilai5"];
	$nilai6 = $d["nilai6"];
	$nilai7 = $d["nilai7"];
	$nilai8 = $d["nilai8"];
	$nilai9 = $d["nilai9"];
	$nilai10 = $d["nilai10"];
	$nilai11 = $d["nilai11"];
	$nilai12 = $d["nilai12"];
	$nilai13 = $d["nilai13"];
	$nilai14 = $d["nilai14"];
	$nilai15 = $d["nilai15"];
	$nilai16 = $d["nilai16"];
	$nilai17 = $d["nilai17"];
	$nilai18 = $d["nilai18"];
	$nilai19 = $d["nilai19"];
	$catatan = $d["catatan"];
	$pro = "ubah";
}
?>

<div id="accordion">
	<h4>Tambah Data Detail</h4>
	<div>

		<div class="container-fluid pt-4 px-4">
			<div class="row g-4">
				<div class="col-sm-12 col-xl-12">
					<div class="bg-light rounded h-100 p-4">
						<?php
						$id_penilaian = $_GET["id"];
						$sql = "select * from `$tbpenilaian` where `id_penilaian`='$id_penilaian'";
						$d = getField($conn, $sql);
						$id_penilaian = $d["id_penilaian"];
						$nama_penilaian = $d["nama_penilaian"];
						$periode = $d["periode"];
						?>
						<h4>Data Penilaian</h4>
						<table width="500px" class="table  table-responsive">
							<tr>
								<td width="200"><label for="id_admin">ID Penilaian</label>
								<th width="9">:
								<th colspan="2"><b><?php echo $id_penilaian; ?></b>
							</tr>
							<tr>
								<td width="95"><label for="id_pelanggan">Nama Penilaian</label>
								<th width="10">:
								<th width="264" colspan="2"><b><?php echo "$nama_penilaian"; ?></b>
							</tr>

							<tr>
								<td height="24"><label for="tanggal">Periode </label>
								<td>:
								<td><?php echo $periode; ?></td>
							</tr>
						</table>
						<hr>


						<form action="" method="post" enctype="multipart/form-data">
							<table class="table">
								<tr>
									<th width="20%"><label for="id_detail">Pilih Kelurahan</label>
									<th width="1%">:
									<th colspan="2"><select class="form-control" name="id_kelurahan" style="width: 350px;">
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
										</select>
								</tr>

								<tr>
									<td height="24"><label for="nilai1">Nilai 1</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai1" type="text" id="nilai1" value="<?php echo $nilai1; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai2">Nilai 2</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai2" type="text" id="nilai2" value="<?php echo $nilai2; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai3">Nilai 3</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai3" type="text" id="nilai3" value="<?php echo $nilai3; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai4">Nilai 4</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai4" type="text" id="nilai4" value="<?php echo $nilai4; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai5">Nilai 5</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai5" type="text" id="bobonilai5t2" value="<?php echo $nilai5; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai6">Nilai 6</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai6" type="text" id="nilai6" value="<?php echo $nilai6; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai7">Nilai 7</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai7" type="text" id="nilai7" value="<?php echo $nilai7; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai8">Nilai 8</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai8" type="text" id="nilai8" value="<?php echo $nilai8; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai9">Nilai 9</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai9" type="text" id="nilai9" value="<?php echo $nilai9; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai10">Nilai 10</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai10" type="text" id="nilai10" value="<?php echo $nilai10; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai11">Nilai 11</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai11" type="text" id="nilai11" value="<?php echo $nilai11; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai12">Nilai 12</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai12" type="text" id="nilai12" value="<?php echo $nilai12; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai13">Nilai 13</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai13" type="text" id="nilai13" value="<?php echo $nilai13; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai14">Nilai 14</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai14" type="text" id="nilai14" value="<?php echo $nilai14; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai15">nilai 15</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai15" type="text" id="nilai15" value="<?php echo $nilai15; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai16">Nilai 16</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai16" type="text" id="nilai16" value="<?php echo $nilai16; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai17">Nilai 17</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai17" type="text" id="nilai17" value="<?php echo $nilai17; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td height="24"><label for="nilai18">Nilai 18</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai18" type="text" id="nilai18" value="<?php echo $nilai18; ?>" size="25" />
									</td>
								</tr>
								<tr>
									<td height="24"><label for="nilai19">Nilai 19</label>
									<td>:
									<td><input required style="width: 150px;" class="form-control" name="nilai19" type="text" id="nilai19" value="<?php echo $nilai19; ?>" size="25" />
									</td>
								</tr>

								<tr>
									<td><label for="status">Status</label>
									<td>:
									<td colspan="2">
										<input type="radio" name="status" id="status" checked="checked" value="Proses" <?php if ($status == "Proses") {
																															echo "checked";
																														} ?> />Proses
										<input type="radio" name="status" id="status" value="Selesai" <?php if ($status == "Selesai") {
																											echo "checked";
																										} ?> />Selesai
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
										<input name="id_penilaian" type="hidden" id="id_penilaian" value="<?php echo $id_penilaian; ?>" />
										<input name="id_detail0" type="hidden" id="id_detail0" value="<?php echo $id_detail0; ?>" />
										<a href="?mnu=sdetail&id=<?php echo $id_penilaian; ?>"><input class="btn btn-warning" name="Batal" type="button" id="Batal" value="Batal" /></a>
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
	$sqlc = "select distinct(`id_kelurahan`) from `$tbdetail` order by `id_kelurahan` asc";
	$jumc = getJum($conn, $sqlc);
	if ($jumc < 1) {
		echo "<h4>Maaf data penilaian belum tersedia</h4>";
	}
	$arrc = getData($conn, $sqlc);
	foreach ($arrc as $dc) {
		$id_kelurahan = $dc["id_kelurahan"];
	?>
		<h3>Data Penilaian <?php echo getKelurahan($conn, $id_kelurahan) ?>:</h3>
		<div>

			Cetak | <img src='ypathicon/print.png' title='PRINT' OnClick="PRINT('<?php echo $id_kelurahan; ?>')"> |
			<table class="table table-bordered">
				<tr bgcolor="#cccccc">
					<th width="3%">No</td>
					<th width="10%">Penilaian</td>
					<th width="20%">Kelurahan</td>
					<th width="50%">Nilai</td>
					<th width="5%">Menu</td>
				</tr>
				<?php
				$sql = "select * from `$tbdetail` where  `id_kelurahan`='$id_kelurahan' order by `id_detail` desc";
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
						$id_detail = $d["id_detail"];
						$id_penilaian = strtoupper($d["id_penilaian"]);
						$id_kelurahan = $d["id_kelurahan"];
						$kelurahan = getKelurahan($conn, $d["id_kelurahan"]);
						$nilai1 = $d["nilai1"];
						$nilai2 = $d["nilai2"];
						$nilai3 = $d["nilai3"];
						$nilai4 = $d["nilai4"];
						$nilai5 = $d["nilai5"];
						$nilai6 = $d["nilai6"];
						$nilai7 = $d["nilai7"];
						$nilai8 = $d["nilai8"];
						$nilai9 = $d["nilai9"];
						$nilai10 = $d["nilai10"];
						$nilai11 = $d["nilai11"];
						$nilai12 = $d["nilai12"];
						$nilai13 = $d["nilai13"];
						$nilai14 = $d["nilai14"];
						$nilai15 = $d["nilai15"];
						$nilai16 = $d["nilai16"];
						$nilai17 = $d["nilai17"];
						$nilai18 = $d["nilai18"];
						$nilai19 = $d["nilai19"];
						$status = $d["status"];
						$catatan = $d["catatan"];

						$color = "";
						if ($no % 2 == 0) {
							$color = "";
						}
						echo "<tr bgcolor='$color'>
				<td>$no</td>
				<td>$id_penilaian</td>
				<td>$kelurahan</td>
				<td>$nilai1, $nilai2, $nilai3, $nilai4, $nilai5, $nilai6, $nilai7, $nilai8
				<br>$catatan</td>
				<td><div align='center'>
<a href='?mnu=sdetail&pro=ubah&kode=$id_detail&id=$id_penilaian'><img src='ypathicon/ub.png' title='ubah'></a>
<a href='?mnu=sdetail&pro=hapus&kode=$id_detail&id=$id_penilaian'><img src='ypathicon/ha.png' title='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $id_penilaian pada data penilaian ?..\")'></a></div></td>
				</tr>";
						$no++;
					} //for dalam
				} //if
				else {
					echo "<tr><td colspan='6'><blink>Maaf, Data detail belum tersedia...</blink></td></tr>";
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
				echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=sdetail&id=<?php echo $id_penilaian; ?>'>« Prev</a></span> ";
			} else {
				echo "<span class=disabled>« Prev</span> ";
			}

			for ($i = 1; $i <= $jmlhal; $i++)
				if ($i != $page) {
					echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=sdetail&id=<?php echo $id_penilaian; ?>'>$i</a> ";
				} else {
					echo " <span class=current>$i</span> ";
				}

			if ($page < $jmlhal) {
				$next = $page + 1;
				echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=sdetail&id=<?php echo $id_penilaian; ?>'>Next »</a></span>";
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
			$id_detail = strip_tags($_POST["id_detail"]);
			$id_detail0 = strip_tags($_POST["id_detail0"]);
			$id_kelurahan = strip_tags($_POST["id_kelurahan"]);
			$id_penilaian = strip_tags($_POST["id_penilaian"]);
			$nilai1 = strip_tags($_POST["nilai1"]);
			$nilai2 = strip_tags($_POST["nilai2"]);
			$nilai3 = strip_tags($_POST["nilai3"]);
			$nilai4 = strip_tags($_POST["nilai4"]);
			$nilai5 = strip_tags($_POST["nilai5"]);
			$nilai6 = strip_tags($_POST["nilai6"]);
			$nilai7 = strip_tags($_POST["nilai7"]);
			$nilai8 = strip_tags($_POST["nilai8"]);
			$nilai9 = strip_tags($_POST["nilai9"]);
			$nilai10 = strip_tags($_POST["nilai10"]);
			$nilai11 = strip_tags($_POST["nilai11"]);
			$nilai12 = strip_tags($_POST["nilai12"]);
			$nilai13 = strip_tags($_POST["nilai13"]);
			$nilai14 = strip_tags($_POST["nilai14"]);
			$nilai15 = strip_tags($_POST["nilai15"]);
			$nilai16 = strip_tags($_POST["nilai16"]);
			$nilai17 = strip_tags($_POST["nilai17"]);
			$nilai18 = strip_tags($_POST["nilai18"]);
			$nilai19 = strip_tags($_POST["nilai19"]);
			$catatan = strip_tags($_POST["catatan"]);

			if ($pro == "simpan") {
				$sql = " INSERT INTO `$tbdetail` (
`id_detail` ,
`id_penilaian` ,
`id_kelurahan` ,
`nilai1` ,
`nilai2` ,
`nilai3` ,
`nilai4` ,
`nilai5` ,
`nilai6` ,
`nilai7` ,
`nilai8` ,
`nilai9` ,
`nilai10` ,
`nilai11` ,
`nilai12` ,
`nilai13` ,
`nilai14` ,
`nilai15` ,
`nilai16` ,
`nilai17` ,
`nilai18` ,
`nilai19` ,
`catatan`
) VALUES (
'$id_detail', 
'$id_penilaian',
'$id_kelurahan',
'$nilai1',
'$nilai2',
'$nilai3',
'$nilai4',
'$nilai5',
'$nilai6',
'$nilai7',
'$nilai8',
'$nilai9',
'$nilai10',
'$nilai11',
'$nilai12',
'$nilai13',
'$nilai14',
'$nilai15',
'$nilai16',
'$nilai17',
'$nilai18',
'$nilai19',
'$catatan'
)";

				$simpan = process($conn, $sql);
				if ($simpan) {
					echo "<script>alert('Data $id_penilaian berhasil disimpan !');document.location.href='?mnu=sdetail&id=$id_penilaian';</script>";
				} else {
					echo "<script>alert('Data $id_penilaian gagal disimpan...');document.location.href='?mnu=sdetail&id=$id_penilaian';</script>";
				}
			} else {
				$sql = "UPDATE `$tbdetail` SET 
	`id_penilaian`='$id_penilaian',
	`id_kelurahan`='$id_kelurahan',
	`nilai1`='$nilai1',
	`nilai2`='$nilai2',
	`nilai3`='$nilai3',
	`nilai4`='$nilai4',
	`nilai5`='$nilai5',
	`nilai6`='$nilai6',
	`nilai7`='$nilai7',
	`nilai8`='$nilai8',
	`nilai9`='$nilai9',
	`nilai10`='$nilai10',
	`nilai11`='$nilai11',
	`nilai12`='$nilai12',
	`nilai13`='$nilai13',
	`nilai14`='$nilai14',
	`nilai15`='$nilai15',
	`nilai16`='$nilai16',
	`nilai17`='$nilai17',
	`nilai18`='$nilai18',
	`nilai19`='$nilai19',
	`catatan`='$catatan'
	 WHERE `id_detail`='$id_detail0'";
				$ubah = process($conn, $sql);
				if ($ubah) {
					echo "<script>alert('Data $id_penilaian berhasil diubah !');document.location.href='?mnu=sdetail&id=$id_penilaian';</script>";
				} else {
					echo "<script>alert('Data $id_penilaian gagal diubah...');document.location.href='?mnu=sdetail&id=$id_penilaian';</script>";
				}
			} //else simpan
		}
		?>

		<?php
		if (isset($_GET["pro"]) && $_GET["pro"] == "hapus") {
			$id_detail = $_GET["kode"];
			$sql = "DELETE FROM `$tbdetail` WHERE `id_detail`='$id_detail'";
			$hapus = process($conn, $sql);
			if ($hapus) {
				echo "<script>alert('Data $id_detail berhasil dihapus !');document.location.href='?mnu=sdetail&id=$id_penilaian';</script>";
			} else {
				echo "<script>alert('Data $id_detail gagal dihapus...');document.location.href='?mnu=sdetail&id=$id_penilaian';</script>";
			}
		}
		?>