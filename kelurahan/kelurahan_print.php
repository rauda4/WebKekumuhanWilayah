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
	$field = "id_kelurahan";
	$TB = $tbkelurahan;
	$item = "Kelurahan";



	$sql = "select * from `$TB` order by `$field` asc";
	if (isset($_GET["pk"])) {
		$pk = $_GET["pk"];
		$sql = "select * from `$TB` where `$field`='$pk' order by `$field` asc";
	}

	echo "<h3><center>Laporan Data $item </h3>";
	?>

	<table width="98%" border="0">
		<tr>
			<th width="3%">No</td>
			<th width="50%">Deskripsi</td>
		</tr>
		<?php
		$jum = getJum($conn, $sql);
		$no = 0;
		if ($jum > 0) {
			$arr = getData($conn, $sql);
			foreach ($arr as $d) {
				$no++;
				$id_kelurahan = $d["id_kelurahan"];
				$nama_kelurahan = strtoupper($d["nama_kelurahan"]);
				$deskripsi = $d["deskripsi"];

				$color = "#dddddd";
				if ($no % 2 == 0) {
					$color = "#eeeeee";
				}
				echo "<tr bgcolor='$color'>
				<td>$no</td>
				<td><b>$nama_kelurahan</b><br><small>$deskripsi</small></td>
				</tr>";
			}
		} //if
		else {
			echo "<tr><td colspan='7'><blink>Maaf, Data $item belum tersedia...</blink></td></tr>";
		}

		echo "</table>";
		?>