<style type="text/css">
	body {
		width: 100%;
	}
</style>

<body OnLoad="window.print()" OnFocus="window.close()">
<?php
include "../konmysqli.php";
echo "<link href='../ypathcss/$css' rel='stylesheet' type='text/css' />";
$YPATH = "../ypathfile/";
	$id_penilaian = $_GET["pk"];
 
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
<table width="70%" class="table  table-responsive">
<tr>
<th><label for="id_admin">ID Penilaian</label>
<t>:
<th colspan="2"><b><?php echo $id_penilaian; ?></b>
</tr>
<tr>
<td><label for="id_pelanggan">Nama Penilaian</label>
<td>:
<td colspan="2"><b><?php echo "$nama_penilaian"; ?></b>
</tr>

<tr>
<td><label for="tanggal">Periode Nilai</label>
<td>:
<td><?php echo $periode; ?></td>
</tr>

<tr>
<td><label for="tanggal">Nama Pengguna</label>
<td>:
<td><?php echo getPengguna($conn,$id_pengguna)."| $id_pengguna"; ?></td>
</tr>

</table>
<hr> 

<table class="table table-bordered" width="98%">
<tr bgcolor="#cccccc">
<th>No
<th>Kelurahan
<?php  
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
echo "<th><label'>Catatan</label></th>";
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
	<td>$catatan</small></td>
</tr>";
		$no++;
	} //for dalam
} //if
else {
	echo "<tr><td colspan='22'><blink>Maaf, Data Penilaian $nama_penilaian belum tersedia...</blink></td></tr>";
}
?>
</table>
 