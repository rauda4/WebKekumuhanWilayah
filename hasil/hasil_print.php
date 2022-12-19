<style type="text/css">
	body {
		width: 100%;
	}
</style>

<body OnLoad="window.print()" OnFocus="window.close()">
	<?php
	include "../konmysqli.php";
	echo "<link href='../ypathcss/$css' rel='stylesheet' type='text/css' />";
  
		$id_penilaian = $_GET["pk"]; 
$sqlc = "select * from `$tbpenilaian` where `id_penilaian`='$id_penilaian' order by `id_penilaian` asc";

$dc = getField($conn, $sqlc);
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
<table width="70%" class="table  table-responsive">
<tr>
<th width="30%"><label for="nama_penilaian">Nama penilaian</label>
<th width="10">:
<th width="264" colspan="2"><b><?php echo "$nama_penilaian"; ?> | <?php echo "$id_penilaian"; ?></b>
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

<table width="98%" class="table table-bordered">
	<tr bgcolor="#cccccc">
		<th width="3%">No</td> 
		<th width="80%">Kelurahan Dan Hasil Analisa Penilaian</td>
		<th width="5%">SAW</td>
		<th width="5%">SMART</td>
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
	
	</tr>";
			$no++;
		} //for dalam
	} //if
	else {
		echo "<tr><td colspan='6'><blink>Maaf, Data Hasil belum tersedia...</blink></td></tr>";
	}
	?>
</table>
