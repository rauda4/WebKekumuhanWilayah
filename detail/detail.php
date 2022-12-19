<?php
$pro = "simpan";
$status = "Proses";

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

$nilai1 = rand(1,10);
$nilai2 = rand(1,10);
$nilai3 = rand(1,10);
$nilai4 = rand(1,10);
$nilai5 = rand(1,10);
$nilai6 = rand(1,10);
$nilai7 = rand(1,10);
$nilai8 = rand(1,10);
$nilai9 = rand(1,10);
$nilai10 = rand(1,10);
$nilai11 = rand(1,10);
$nilai12 = rand(1,10);
$nilai13 = rand(1,10);
$nilai14 = rand(1,10);
$nilai15 = rand(1,10);
$nilai16 = rand(1,10);
$nilai17 = rand(1,10);
$nilai18 = rand(1,10);
$nilai19 = rand(1,10);

$catatan = "";
?>

<link type="text/css" href="<?php echo "$PATH/base/"; ?>ui.all.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo "$PATH/"; ?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/"; ?>ui/i18n/ui.datepicker-id.js"></script>

<script type="text/javascript">
function PRINT(pk) {
	win = window.open('detail/detail_print.php?pk=' + pk, 'win', 'width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0');
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
	<h4>Penilaian Perbandingan</h4>
	<div>

<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-12">
<div class="bg-light rounded h-100 p-4">
<?php
$id_penilaian = $_GET["id"];
$sql = "select * from `$tbpenilaian` where `id_penilaian`='$id_penilaian'";
	$d = getField($conn, $sql);
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
<td height="24"><label for="tanggal">Periode Nilai</label>
<td>:
<td><?php echo $periode; ?></td>
</tr>

<tr>
<td height="24"><label for="tanggal">Nama Pengguna</label>
<td>:
<td><?php echo getPengguna($conn,$id_pengguna)."| $id_pengguna"; ?></td>
</tr>


</table>
<hr>


<form action="" method="post" enctype="multipart/form-data">
<table class="table">
<tr>
<th width="20<?php echo"<label title='$bobot1 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>"><label for="id_detail">Pilih Kelurahan</label>
<th width="1<?php echo"<label title='$bobot1 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>">:
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
<td><label for="nilai1"><?php echo $m1;?></label>
<td>:
<td>
	<table>
		<tr>
		<td height="24"><label for="nilai1"><?php echo $kr11;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai1" type="text" id="nilai1" value="<?php echo $nilai1; ?>" size="25" /><td><?php echo"<label title='$bobot1 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		
		</td>
		</tr>

		<tr>
		<td height="24"><label for="nilai2"><?php echo $kr12;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai2" type="text" id="nilai2" value="<?php echo $nilai2; ?>" size="25" /><td><?php echo"<label title='$bobot2 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</td>
		</tr>

		<tr>
		<td height="24"><label for="nilai3"><?php echo $kr13;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai3" type="text" id="nilai3" value="<?php echo $nilai3; ?>" size="25" /><td><?php echo"<label title='$bobot3 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</td>
		</tr>
	</table>
</td>
</tr>



<tr>
<td><label for="nilai1"><?php echo $m2;?></label>
<td>:
<td>
	<table>
		<tr>
		<td height="24"><label for="nilai1"><?php echo $kr21;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai4" type="text" id="nilai4" value="<?php echo $nilai4; ?>" size="25" /><td><?php echo"<label title='$bobot4 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</td>
		</tr>

		<tr>
		<td height="24"><label for="nilai2"><?php echo $kr22;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai5" type="text" id="nilai5" value="<?php echo $nilai5; ?>" size="25" /><td><?php echo"<label title='$bobot5 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</td>
		</tr>

	</table>
</td>
</tr> 
<tr>
<td><label for="nilai1"><?php echo $m3;?></label>
<td>:
<td>
	<table>
		<tr>
		<td height="24"><label for="nilai1"><?php echo $kr31;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai6" type="text" id="nilai6" value="<?php echo $nilai6; ?>" size="25" />
		</td><td><?php echo"<label title='$bobot1 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</tr>

		<tr>
		<td height="24"><label for="nilai2"><?php echo $kr32;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai7" type="text" id="nilai7" value="<?php echo $nilai7; ?>" size="25" />
		</td><td><?php echo"<label title='$bobot7 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</tr>
 
	</table>
</td>
</tr>


<tr>
<td><label for="nilai1"><?php echo $m4;?></label>
<td>:
<td>
	<table>
		<tr>
		<td height="24"><label for="nilai1"><?php echo $kr41;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai8" type="text" id="nilai8" value="<?php echo $nilai8; ?>" size="25" />
		</td><td><?php echo"<label title='$bobot8 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</tr>

		<tr>
		<td height="24"><label for="nilai2"><?php echo $kr42;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai9" type="text" id="nilai9" value="<?php echo $nilai9; ?>" size="25" />
		</td><td><?php echo"<label title='$bobot9 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</tr>
 
 		<tr>
		<td height="24"><label for="nilai2"><?php echo $kr43;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai10" type="text" id="nilai10" value="<?php echo $nilai10; ?>" size="25" />
		</td><td><?php echo"<label title='$bobot10 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</tr>
		
		<tr>
		<td height="24"><label for="nilai2"><?php echo $kr44;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai11" type="text" id="nilai11" value="<?php echo $nilai11; ?>" size="25" />
		</td><td><?php echo"<label title='$bobot11 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</tr>
		
		<tr>
		<td height="24"><label for="nilai2"><?php echo $kr45;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai12" type="text" id="nilai12" value="<?php echo $nilai12; ?>" size="25" />
		</td><td><?php echo"<label title='$bobot12 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</tr>
	</table>
</td>
</tr>


<tr>
<td><label for="nilai1"><?php echo $m5;?></label>
<td>:
<td>
	<table>
		<tr>
		<td height="24"><label for="nilai1"><?php echo $kr51;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai13" type="text" id="nilai13" value="<?php echo $nilai13; ?>" size="25" />
		</td><td><?php echo"<label title='$bobot13 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</tr>

		<tr>
		<td height="24"><label for="nilai2"><?php echo $kr52;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai14" type="text" id="nilai14" value="<?php echo $nilai14; ?>" size="25" />
		</td><td><?php echo"<label title='$bobot14 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</tr>
 
	</table>
</td>
</tr>



<tr>
<td><label for="nilai1"><?php echo $m6;?></label>
<td>:
<td>
	<table>
		<tr>
		<td height="24"><label for="nilai1"><?php echo $kr61;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai15" type="text" id="nilai15" value="<?php echo $nilai15; ?>" size="25" />
		</td><td><?php echo"<label title='$bobot15 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</tr>

		<tr>
		<td height="24"><label for="nilai2"><?php echo $kr62;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai16" type="text" id="nilai16" value="<?php echo $nilai16; ?>" size="25" />
		</td><td><?php echo"<label title='$bobot16 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</tr>
		
		<tr>
		<td height="24"><label for="nilai2"><?php echo $kr63;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai17" type="text" id="nilai17" value="<?php echo $nilai17; ?>" size="25" />
		</td><td><?php echo"<label title='$bobot17 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</tr>
	</table>
</td>
</tr>




<tr>
<td><label for="nilai1"><?php echo $m7;?></label>
<td>:
<td>
	<table>
		<tr>
		<td height="24"><label for="nilai18"><?php echo $kr71;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai18" type="text" id="nilai18" value="<?php echo $nilai18; ?>" size="25" />
		</td><td><?php echo"<label title='$bobot18 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</tr>

		<tr>
		<td height="24"><label for="nilai19"><?php echo $kr72;?></label>
		<td>:
		<td><input required style="width: 55px;" class="form-control" name="nilai19" type="text" id="nilai19" value="<?php echo $nilai19; ?>" size="25" />
		</td><td><?php echo"<label title='$bobot19 %'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>";?>
		</tr>
 
	</table>
</td>
</tr>
 

<tr>
<td height="24"><label for="catatan">Catatan</label>
<td>:
<td><textarea class="form-control" name="catatan" cols="55" rows="2"><?php echo $catatan; ?></textarea>
</td>
</tr>

<tr>
<td>
<td>
<td colspan="2"><input class="btn btn-success" name="Simpan" type="submit" id="Simpan" value="Simpan" />
	<input name="pro" type="hidden" id="pro" value="<?php echo $pro; ?>" />
	<input name="id_penilaian" type="hidden" id="id_penilaian" value="<?php echo $id_penilaian; ?>" />
	<input name="id_detail0" type="hidden" id="id_detail0" value="<?php echo $id_detail0; ?>" />
	<a href="?mnu=detail&id=<?php echo $id_penilaian; ?>"><input class="btn btn-warning" name="Batal" type="button" id="Batal" value="Batal" /></a>
</td>
</tr>
</table>
</form>
</div>
</div>
			</div>
		</div>

<hr>
Cetak | <img src='ypathicon/print.png' title='PRINT' OnClick="PRINT('<?php echo $id_penilaian; ?>')"> |

<table class="table table-bordered">

<?php 

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

echo"<tr bgcolor='#cccccc'><th>No<th>Kelurahan";
echo "<th><label title='$m1 :$kr11 $bobot1 %'><small>$lb11</label></th>";
echo "<th><label title='$m1 :$kr12 $bobot2 %'><small>$lb12</label></th>";
echo "<th><label title='$m1 :$kr13 $bobot3 %'><small>$lb13</label></th>";
echo "<th><label title='$m2 :$kr21 $bobot4 %'><small>$lb21</label></th>";
echo "<th><label title='$m2 :$kr22 $bobot5 %'><small>$lb22</label></th>";
echo "<th><label title='$m3 :$kr31 $bobot6 %'><small>$lb31</label></th>";
echo "<th><label title='$m3 :$kr32 $bobot7 %'><small>$lb32</label></th>";
echo "<th><label title='$m4 :$kr41 $bobot8 %'><small>$lb41</label></th>";
echo "<th><label title='$m4 :$kr42 $bobot9 %'><small>$lb42</label></th>";
echo "<th><label title='$m4 :$kr43 $bobot10 %'><small>$lb43</label></th>";
echo "<th><label title='$m4 :$kr44 $bobot11 %'><small>$lb44</label></th>";
echo "<th><label title='$m4 :$kr45 $bobot12 %'><small>$lb45</label></th>";
echo "<th><label title='$m5 :$kr51 $bobot13 %'><small>$lb51</label></th>";
echo "<th><label title='$m5 :$kr52 $bobot14 %'><small>$lb52</label></th>";
echo "<th><label title='$m6 :$kr61 $bobot15 %'><small>$lb61</label></th>";
echo "<th><label title='$m6 :$kr62 $bobot16 %'><small>$lb62</label></th>";
echo "<th><label title='$m6 :$kr63 $bobot17 %'><small>$lb63</label></th>";
echo "<th><label title='$m7 :$kr71 $bobot18 %'><small>$lb71</label></th>";
echo "<th><label title='$m7 :$kr72 $bobot19 %'><small>$lb72</label></th>";
echo "<th><label'>Catatan</label></th>
<th><label'>Menu</label></th>
";
?>
</tr>
<?php
$sql = "select * from `$tbdetail` where  `id_penilaian`='$id_penilaian' order by `id_detail` asc";
$jum = getJum($conn, $sql);
if ($jum > 0) {
$no=1;								
$arr = getData($conn, $sql);
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
	$catatan = $d["catatan"];

$color = "";
if ($no % 2 == 0) {$color = "";}
echo "<tr bgcolor='$color'>
	<td><small>$no</td>
	<td><small>$kelurahan | $id_kelurahan</td>
	<td><small>$nilai1</td>
	<td><small>$nilai2</td>
	<td><small>$nilai3</td>
	<td><small>$nilai4</td>
	<td><small>$nilai5</td>
	<td><small>$nilai6</td>
	<td><small>$nilai7</td>
	<td><small>$nilai8</td>
	<td><small>$nilai9</td>
	<td><small>$nilai10</td>
	<td><small>$nilai11</td>
	<td><small>$nilai12</td>
	<td><small>$nilai13</td>
	<td><small>$nilai14</td>
	<td><small>$nilai15</td>
	<td><small>$nilai16</td>
	<td><small>$nilai17</td>
	<td><small>$nilai18</td>
	<td><small>$nilai19</td>
	<td><small><i>$catatan</small></i></td>
<td><div align='center'>
<a href='?mnu=detail&pro=ubah&kode=$id_detail&id=$id_penilaian'><img src='ypathicon/ub.png' title='Ubah Data Kriteria $nama_kelurahan'></a>
<a href='?mnu=detail&pro=hapus&kode=$id_detail&id=$id_penilaian&nama_penilaian=$nama_penilaian'><img src='ypathicon/ha.png' title='Hapus Data $kelurahan dari Penilaian $nama_penilaian' 
onClick='return confirm(\"Apakah Anda benar-benar akan mengHapus Data $kelurahan dari Penilaian $nama_penilaian?..\")'></a></div></td>
</tr>";
		$no++;
	} //for dalam
} //if
else {
	echo "<tr><td colspan='22'><blink>Maaf, Data Penilaian $nama_penilaian belum tersedia...</blink></td></tr>";
}
?>
</table>
 
 <?php
 echo"<div align='right'>
	<a href='?mnu=saw&id=$id_penilaian'>
	<img src='ypathfile/proses.jpg' width='100' height='80'
	title='Proses Analisa Perbandingan $nama_penilaian'>
	</a>
 </div>";
 
 ?>
</div>
</div>

<?php
if (isset($_POST["Simpan"])) {
	$pro = strip_tags($_POST["pro"]);
	$id_kelurahan = strip_tags($_POST["id_kelurahan"]);
	$id_penilaian = strip_tags($_POST["id_penilaian"]);
	$kelurahan=getKelurahan($conn,$id_kelurahan); 
	
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
	
	$sqls = "select `id_kelurahan` from `$tbdetail` where  `id_penilaian`='$id_penilaian'  and `id_kelurahan`='$id_kelurahan'";
$jum = getJum($conn, $sqls);
if ($jum > 0) {
echo "<script>alert('Data Penilaian \"$nama_penilaian Untuk $nama_kelurahan\"  gagal disimpan...DUPLIKAT DATA');document.location.href='?mnu=detail&id=$id_penilaian';</script>";
}
else{	

$sql = " INSERT INTO `$tbdetail` (
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
echo "<script>alert('DataPenilaian \"$nama_penilaian Untuk $nama_kelurahan\" berhasil disimpan !');document.location.href='?mnu=detail&id=$id_penilaian';</script>";
} else {
echo "<script>alert('Data Penilaian \"$nama_penilaian Untuk $nama_kelurahan\"  gagal disimpan...');document.location.href='?mnu=detail&id=$id_penilaian';</script>";
}
}//jum<0
} //simpan
else {
	$id_detail = strip_tags($_POST["id_detail"]);
	$id_detail0 = strip_tags($_POST["id_detail0"]);

$sql = "UPDATE `$tbdetail` SET 
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
echo "<script>alert('Data Penilaian \"$nama_penilaian Untuk $nama_kelurahan\" berhasil diubah !');document.location.href='?mnu=detail&id=$id_penilaian';</script>";
} else {
echo "<script>alert('Data Penilaian \"$nama_penilaian Untuk $nama_kelurahan\"  gagal diubah...');document.location.href='?mnu=detail&id=$id_penilaian';</script>";
}
} //else simpan
}
?>

<?php
if (isset($_GET["pro"]) && $_GET["pro"] == "hapus") {
$id_detail = $_GET["kode"];
$id_penilaian = $_GET["id"];
$nama_penilaian = $_GET["nama_penilaian"];
$sql = "DELETE FROM `$tbdetail` WHERE `id_detail`='$id_detail'";
$hapus = process($conn, $sql);
if ($hapus) {
echo "<script>alert('Data Penilaian \"$nama_penilaian Untuk $nama_kelurahan\" Berhail dihapus !');document.location.href='?mnu=detail&id=$id_penilaian';</script>";
} else {
echo "<script>alert('Data Penilaian \"$nama_penilaian Untuk $nama_kelurahan\" Gagal dihapus...');document.location.href='?mnu=detail&id=$id_penilaian';</script>";
}
}
?>