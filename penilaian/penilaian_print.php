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
	$pk = "";
	$field = "id_pengguna";
	$TB = $tbpenilaian;
	$item = "Penilaian";


	$sql = "select * from `$TB` order by `$field` asc";
	if (isset($_GET["pk"])) {
		$pk = $_GET["pk"];
		$sql = "select * from `$TB` where `$field`='$pk' order by `$field` asc";
	}

	echo "<h3><center>Laporan Data $item ".getPengguna($conn,$pk)."</h3>";
	?>

	<table width="98%" border="0">
		<tr>
			<th width="3%">No</td>
<th width="70%">Nama Penilaian</td>
<th width="20%">Keterangan</td>
		</tr>
		<?php
		$jum = getJum($conn, $sql);
		$no = 0;
		if ($jum > 0) {
			$arr = getData($conn, $sql);
			foreach ($arr as $d) {
				$no++;
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
				</tr>";
			}
		} //if
		else {
			echo "<tr><td colspan='7'><blink>Maaf, Data $item belum tersedia...</blink></td></tr>";
		}

		echo "</table>";
		?>