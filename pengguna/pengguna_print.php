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
	$field = "status";
	$TB = $tbpengguna;
	$item = "Pengguna";



	$sql = "select * from `$TB` order by `$field` asc";
	if (isset($_GET["pk"])) {
		$pk = $_GET["pk"];
		$sql = "select * from `$TB` where `$field`='$pk' order by `$field` asc";
	}

	echo "<h3><center>Laporan Data $item $pk</h3>";
	?>


	<table width="98%" border="0">
		<tr>
			<th width="3%">No</td>
			<th width="10%">IDPengguna</td>
			<th width="20%">Nama Pengguna</td>
			<th width="10%">Telepon</td>
			<th width="10%">Level</td>
			<th width="20%">Keterangan</td>
		</tr>
		<?php
		$jum = getJum($conn, $sql);
		$no = 0;
		if ($jum > 0) {
			$arr = getData($conn, $sql);
			foreach ($arr as $d) {
				$no++;
				$id_pengguna = $d["id_pengguna"];
				$nama_pengguna = strtoupper($d["nama_pengguna"]);
				$username = $d["username"];
				$password = $d["password"];
				$telepon = $d["telepon"];
				$email = $d["email"];
				$level = $d["level"];
				$status = $d["status"];
				$keterangan = $d["keterangan"];


				$color = "#dddddd";
				if ($no % 2 == 0) {
					$color = "#eeeeee";
				}
				echo "<tr bgcolor='$color'>
				<td>$no</td>
				<td>$id_pengguna</td>
				<td><a href='mailto:$email'>$nama_pengguna</a></td>
				<td>$telepon</td>
				<td>$level</td>
				<td>$keterangan</td>
				</tr>";
			}
		} //if
		else {
			echo "<tr><td colspan='7'><blink>Maaf, Data $item belum tersedia...</blink></td></tr>";
		}

		echo "</table>";
		?>