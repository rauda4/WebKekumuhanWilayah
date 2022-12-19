
<?php
//error_reporting(0);
$tanggal=WKT(date("Y-m-d"));
?> 
<style>
#table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#table td, #table th {
    border: 1px solid #ddd;
    padding: 8px;
}

#table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}

#table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #808080;
    color: white;
}
</style>    

<script type="text/javascript"> 
function PRINT(){ 
win=window.open('detail/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0'); } 
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>




<link rel="stylesheet" href="js/jquery-ui.css">
  <link rel="stylesheet" href="resources/demos/style.css">
<script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
  </script>
  
<?php
$id_penilaian="";
$sql = "select * from `$tbpenilaian` order by `id_penilaian` desc";
if(isset($_GET["id"])){
$id_penilaian=$_GET["id"]; 
$sql = "select * from `$tbpenilaian` where `id_penilaian`='$id_penilaian'";
}
$d = getField($conn, $sql);
$id_penilaian = $d["id_penilaian"];
	$nama_penilaian = $d["nama_penilaian"];
	$NP=$nama_penilaian;
	$periode = $d["periode"];
	$id_pengguna = $d["id_pengguna"];
	$tanggal = WKT($d["tanggal"]);
	$jam = $d["jam"];
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
 
<div align="right">
	<h2>
		<a href="?mnu=saw&id=<?php echo $id_penilaian;?>">SAW</a> |
		<a href="?mnu=smart&id=<?php echo $id_penilaian;?>">SMART</a> |
	</h2>
</div> 
 
<?php

	$b1=$bobot1;
	$b2=$bobot2;
	$b3=$bobot3;
	$b4=$bobot4;
	$b5=$bobot5;
	$b6=$bobot6;
	$b7=$bobot7;
	$b8=$bobot8;
	$b9=$bobot9;
	$b10=$bobot10;
	$b11=$bobot11;
	$b12=$bobot12;
	$b13=$bobot13;
	$b14=$bobot14;
	$b15=$bobot15;
	$b16=$bobot16;
	$b17=$bobot17;
	$b18=$bobot18;
	$b19=$bobot19;
	
				
				
?>

  <div id="accordion">
 <h4>Data Penilaian</h4>
  <div> 

<table id="table">

<tr>
<th width="20%"><label for="id_penilaian">ID Penilaian</label>
<th width="9"><div align="center">:
</div>
<th colspan="2"><b><?php echo $id_penilaian;?></b>
</tr>

<tr>
<td align="left"><label for="periode">Nama Penilaian</label>
<td><div align="center">:
</div>
<td colspan="2" align="left"><?php echo $nama_penilaian;?> #<?php echo $id_penilaian;?></td>
</tr>

<tr>
<td align="left"><label for="nama">Periode Nilai</label>
<td><div align="center">:
</div>
<td colspan="2" align="left"><?php echo $periode;?> </td>
</tr>  

<tr>
<td align="left" ><label for="periode">Keterangan</label>
<td><div align="center">:
</div>
<td  align="left" colspan="2"><?php echo "$status $keterangan";?></td>
</tr>



</table>
<hr>
Data Penilaian Objek: 
<br>
 <table class="table table-bordered">
<?php
$head="<tr bgcolor='#cccccc'><th>No<th>Kelurahan";
$head.= "<th><label title='$m1 :$kr11 $bobot1 %'><small>$lb11</label></th>";
$head.= "<th><label title='$m1 :$kr12 $bobot2 %'><small>$lb12</label></th>";
$head.= "<th><label title='$m1 :$kr13 $bobot3 %'><small>$lb13</label></th>";
$head.= "<th><label title='$m2 :$kr21 $bobot4 %'><small>$lb21</label></th>";
$head.= "<th><label title='$m2 :$kr22 $bobot5 %'><small>$lb22</label></th>";
$head.= "<th><label title='$m3 :$kr31 $bobot6 %'><small>$lb31</label></th>";
$head.= "<th><label title='$m3 :$kr32 $bobot7 %'><small>$lb32</label></th>";
$head.= "<th><label title='$m4 :$kr41 $bobot8 %'><small>$lb41</label></th>";
$head.= "<th><label title='$m4 :$kr42 $bobot9 %'><small>$lb42</label></th>";
$head.= "<th><label title='$m4 :$kr43 $bobot10 %'><small>$lb43</label></th>";
$head.= "<th><label title='$m4 :$kr44 $bobot11 %'><small>$lb44</label></th>";
$head.= "<th><label title='$m4 :$kr45 $bobot12 %'><small>$lb45</label></th>";
$head.= "<th><label title='$m5 :$kr51 $bobot13 %'><small>$lb51</label></th>";
$head.= "<th><label title='$m5 :$kr52 $bobot14 %'><small>$lb52</label></th>";
$head.= "<th><label title='$m6 :$kr61 $bobot15 %'><small>$lb61</label></th>";
$head.= "<th><label title='$m6 :$kr62 $bobot16 %'><small>$lb62</label></th>";
$head.= "<th><label title='$m6 :$kr63 $bobot17 %'><small>$lb63</label></th>";
$head.= "<th><label title='$m7 :$kr71 $bobot18 %'><small>$lb71</label></th>";
$head.= "<th><label title='$m7 :$kr72 $bobot19 %'><small>$lb72</label></th>";
$head.= "<th><label'>Catatan</label></th>
<th><label'>Menu</label></th></tr>";
echo $head;
?>

<?php
$arM=array();
$arI=array();

$arN1=array();
$arN2=array();
$arN3=array();
$arN4=array();
$arN5=array();
$arN6=array();
$arN7=array();
$arN8=array();
$arN9=array();
$arN10=array();
$arN11=array();
$arN12=array();
$arN13=array();
$arN14=array();
$arN15=array();
$arN16=array();
$arN17=array();
$arN18=array();
$arN19=array();
$arN20=array();

$arID=array();
$arKet=array();

  $sql = "select * from `$tbdetail` where  `id_penilaian`='$id_penilaian' order by `id_detail` asc";
$jum = getJum($conn, $sql);
if ($jum > 0) { 			
$no=1;					
$arr = getData($conn, $sql);
foreach ($arr as $d) {
	$id_detail = $d["id_detail"];
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
	
	 $sqlp = "select `nama_kelurahan`,`deskripsi` from `$tbkelurahan` where `id_kelurahan`='$id_kelurahan'";
	$dp = getField($conn, $sqlp);
		$nama_kelurahan = $dp["nama_kelurahan"];
		$deskripsi = $dp["deskripsi"]; 
		
	$color = "";
	if ($no % 2 == 0) {$color = "";}
	$i=$no-1;
	$arM[$i]=$nama_kelurahan;
	$arI[$i]=$id_kelurahan;
	$arID[$i]=$id_detail;
	
	$arN1[$i]=($nilai1);
	$arN2[$i]=($nilai2);
	$arN3[$i]=($nilai3);
	$arN4[$i]=($nilai4);
	$arN5[$i]=($nilai5);
	$arN6[$i]=($nilai6);
	$arN7[$i]=($nilai7);
	$arN8[$i]=($nilai8);
	$arN9[$i]=($nilai9);
	$arN10[$i]=($nilai10);
	$arN11[$i]=($nilai11);
	$arN12[$i]=($nilai12);
	$arN13[$i]=($nilai13);
	$arN14[$i]=($nilai14);
	$arN15[$i]=($nilai15);
	$arN16[$i]=($nilai16);
	$arN17[$i]=($nilai17);
	$arN18[$i]=($nilai18);
	$arN19[$i]=($nilai19);
	$arKet[$i]=$catatan;
	
		echo "<tr bgcolor='$color'>
		<td>$no</td>
		<td>$nama_kelurahan | $id_kelurahan</td>
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
		<a href='?mnu=detail&pro=hapus&kode=$id_detail&id=$id_penilaian'><img src='ypathicon/ha.png' title='hapus' 
		onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $nama_kelurahan pada data penilaian $NP ?..\")'></a></div></td>
		</tr>";
		$no++;
} //for dalam

echo "</table>";
} //if
else {
echo "<blink><h1>Silakan Pilih kelurahan Isikan Kembali nilai Anda </h1></blink>";
	echo "<script>alert('Silakan Pilih kelurahan Isikan Kembali nilai Anda !');document.location.href='?mnu=detail&id=$id_penilaian';</script>";
}
?>
</div>


<?php
$jump=$i;
$nMax1=max($arN1);
$nMax2=max($arN2);
$nMax3=max($arN3);
$nMax4=max($arN4);
$nMax5=max($arN5);
$nMax6=max($arN6);
$nMax7=max($arN7);
$nMax8=max($arN8);
$nMax9=max($arN9);
$nMax10=max($arN10);
$nMax11=max($arN11);
$nMax12=max($arN12);
$nMax13=max($arN13);
$nMax14=max($arN14);
$nMax15=max($arN15);
$nMax16=max($arN16);
$nMax17=max($arN17);
$nMax18=max($arN18);
$nMax19=max($arN19);

$nMin1=min($arN1);
$nMin2=min($arN2);
$nMin3=min($arN3);
$nMin4=min($arN4);
$nMin5=min($arN5);
$nMin6=min($arN6);
$nMin7=min($arN7);
$nMin8=min($arN8);
$nMin9=min($arN9);
$nMin10=min($arN10);
$nMin11=min($arN11);
$nMin12=min($arN12);
$nMin13=min($arN13);
$nMin14=min($arN14);
$nMin15=min($arN15);
$nMin16=min($arN16);
$nMin17=min($arN17);
$nMin18=min($arN18);
$nMin19=min($arN19);
 
for($i=0;$i<=$jump;$i++){
	//$arM6[$i]=round($nMin6/$arN6[$i],2);//cost
	//$arM7[$i]=round($nMin7/$arN7[$i],2);//cost
	
	$arM1[$i]=round($arN1[$i]/$nMax1,2);
	$arM2[$i]=round($arN2[$i]/$nMax2,2);
	$arM3[$i]=round($arN3[$i]/$nMax3,2);
	$arM4[$i]=round($arN4[$i]/$nMax4,2);
	$arM5[$i]=round($arN5[$i]/$nMax5,2);
	$arM6[$i]=round($arN6[$i]/$nMax6,2);
	$arM7[$i]=round($arN7[$i]/$nMax7,2);
	$arM8[$i]=round($arN8[$i]/$nMax8,2);
	$arM9[$i]=round($arN9[$i]/$nMax9,2);
	$arM10[$i]=round($arN10[$i]/$nMax10,2);
	$arM11[$i]=round($arN11[$i]/$nMax11,2);
	$arM12[$i]=round($arN12[$i]/$nMax12,2);
	$arM13[$i]=round($arN13[$i]/$nMax13,2);
	$arM14[$i]=round($arN14[$i]/$nMax14,2);
	$arM15[$i]=round($arN15[$i]/$nMax15,2);
	$arM16[$i]=round($arN16[$i]/$nMax16,2);
	$arM17[$i]=round($arN17[$i]/$nMax17,2);
	$arM18[$i]=round($arN18[$i]/$nMax18,2);
	$arM19[$i]=round($arN19[$i]/$nMax19,2);
	
	$arM1S[$i]="$arN1[$i]/$nMax1";
	$arM2S[$i]="$arN2[$i]/$nMax2";
	$arM3S[$i]="$arN3[$i]/$nMax3";
	$arM4S[$i]="$arN4[$i]/$nMax4";
	$arM5S[$i]="$arN5[$i]/$nMax5"; 
	$arM6S[$i]="$arN6[$i]/$nMax6";
	$arM7S[$i]="$arN7[$i]/$nMax7";
	$arM8S[$i]="$arN8[$i]/$nMax8";
	$arM9S[$i]="$arN9[$i]/$nMax9";
	$arM10S[$i]="$arN10[$i]/$nMax10"; 
	$arM11S[$i]="$arN11[$i]/$nMax11";
	$arM12S[$i]="$arN12[$i]/$nMax12";
	$arM13S[$i]="$arN13[$i]/$nMax13";
	$arM14S[$i]="$arN14[$i]/$nMax14";
	$arM15S[$i]="$arN15[$i]/$nMax15"; 
	$arM16S[$i]="$arN16[$i]/$nMax16";
	$arM17S[$i]="$arN17[$i]/$nMax17";
	$arM18S[$i]="$arN18[$i]/$nMax18";
	$arM19S[$i]="$arN19[$i]/$nMax19";
	
	$arB1[$i]=$arM1[$i] * $b1/100;
	$arB2[$i]=$arM2[$i] * $b2/100;
	$arB3[$i]=$arM3[$i] * $b3/100;
	$arB4[$i]=$arM4[$i] * $b4/100;
	$arB5[$i]=$arM5[$i] * $b5/100;
	$arB6[$i]=$arM6[$i] * $b6/100;
	$arB7[$i]=$arM7[$i] * $b7/100;
	$arB8[$i]=$arM8[$i] * $b8/100;
	$arB9[$i]=$arM9[$i] * $b9/100;
	$arB10[$i]=$arM10[$i] * $b10/100;	
	$arB11[$i]=$arM11[$i] * $b11/100;
	$arB12[$i]=$arM12[$i] * $b12/100;
	$arB13[$i]=$arM13[$i] * $b13/100;
	$arB14[$i]=$arM14[$i] * $b14/100;
	$arB15[$i]=$arM15[$i] * $b15/100;
	$arB16[$i]=$arM16[$i] * $b16/100;
	$arB17[$i]=$arM17[$i] * $b17/100;
	$arB18[$i]=$arM18[$i] * $b18/100;
	$arB19[$i]=$arM19[$i] * $b19/100;
	
	$SF[$i]="(($arN1[$i]/$nMax1) x $b1/100) 
	+ (($arN2[$i]/$nMax2) x $b2/100) 
	+ (($arN3[$i]/$nMax3) x $b3/100) 
	+ (($arN4[$i]/$nMax4) x $b4/100) 
	+ (($arN5[$i]/$nMax5) x $b5/100) 
	+ (($arN6[$i]/$nMax6) x $b6/100) 
	+ (($arN7[$i]/$nMax7) x $b7/100) 
	+ (($arN8[$i]/$nMax8) x $b8/100) 
	+ (($arN9[$i]/$nMax9) x $b9/100) 
	+ (($arN10[$i]/$nMax10) x $b10/100)
	+ (($arN11[$i]/$nMax11) x $b11/100) 
	+ (($arN12[$i]/$nMax12) x $b12/100) 
	+ (($arN13[$i]/$nMax13) x $b13/100) 
	+ (($arN14[$i]/$nMax14) x $b14/100) 
	+ (($arN15[$i]/$nMax15) x $b15/100) 
	+ (($arN16[$i]/$nMax16) x $b16/100) 
	+ (($arN17[$i]/$nMax17) x $b17/100) 
	+ (($arN18[$i]/$nMax18) x $b18/100) 
	+ (($arN19[$i]/$nMax19) x $b19/100) ;";
	
	$VF[$i]=
	(($arN1[$i]/$nMax1) * $b1/100) 
	+ (($arN2[$i]/$nMax2) * $b2/100) 
	+ (($arN3[$i]/$nMax3) * $b3/100) 
	+ (($arN4[$i]/$nMax4) * $b4/100) 
	+ (($arN5[$i]/$nMax5) * $b5/100) 
	+ (($arN6[$i]/$nMax6) * $b6/100) 
	+ (($arN7[$i]/$nMax7) * $b7/100) 
	+ (($arN8[$i]/$nMax8) * $b8/100) 
	+ (($arN9[$i]/$nMax9) * $b9/100) 
	+ (($arN10[$i]/$nMax10) * $b10/100)
	+ (($arN11[$i]/$nMax11) * $b11/100) 
	+ (($arN12[$i]/$nMax12) * $b12/100) 
	+ (($arN13[$i]/$nMax13) * $b13/100) 
	+ (($arN14[$i]/$nMax14) * $b14/100) 
	+ (($arN15[$i]/$nMax15) * $b15/100) 
	+ (($arN16[$i]/$nMax16) * $b16/100) 
	+ (($arN17[$i]/$nMax17) * $b17/100) 
	+ (($arN18[$i]/$nMax18) * $b18/100) 
	+ (($arN19[$i]/$nMax19) * $b19/100) ;
	$VF[$i]=round($VF[$i],2);
	$arRekap[$i]=$SF[$i]."=".$VF[$i]; 
}

//================================================

$gdata="<table id='table'><tr bgcolor='#cccccc'><th>No<th>Kelurahan";
$gdata.= "<th><label title='$m1 :$kr11 $bobot1 %'><small>$lb11</label></th>";
$gdata.= "<th><label title='$m1 :$kr12 $bobot2 %'><small>$lb12</label></th>";
$gdata.= "<th><label title='$m1 :$kr13 $bobot3 %'><small>$lb13</label></th>";
$gdata.= "<th><label title='$m2 :$kr21 $bobot4 %'><small>$lb21</label></th>";
$gdata.= "<th><label title='$m2 :$kr22 $bobot5 %'><small>$lb22</label></th>";
$gdata.= "<th><label title='$m3 :$kr31 $bobot6 %'><small>$lb31</label></th>";
$gdata.= "<th><label title='$m3 :$kr32 $bobot7 %'><small>$lb32</label></th>";
$gdata.= "<th><label title='$m4 :$kr41 $bobot8 %'><small>$lb41</label></th>";
$gdata.= "<th><label title='$m4 :$kr42 $bobot9 %'><small>$lb42</label></th>";
$gdata.= "<th><label title='$m4 :$kr43 $bobot10 %'><small>$lb43</label></th>";
$gdata.= "<th><label title='$m4 :$kr44 $bobot11 %'><small>$lb44</label></th>";
$gdata.= "<th><label title='$m4 :$kr45 $bobot12 %'><small>$lb45</label></th>";
$gdata.= "<th><label title='$m5 :$kr51 $bobot13 %'><small>$lb51</label></th>";
$gdata.= "<th><label title='$m5 :$kr52 $bobot14 %'><small>$lb52</label></th>";
$gdata.= "<th><label title='$m6 :$kr61 $bobot15 %'><small>$lb61</label></th>";
$gdata.= "<th><label title='$m6 :$kr62 $bobot16 %'><small>$lb62</label></th>";
$gdata.= "<th><label title='$m6 :$kr63 $bobot17 %'><small>$lb63</label></th>";
$gdata.= "<th><label title='$m7 :$kr71 $bobot18 %'><small>$lb71</label></th>";
$gdata.= "<th><label title='$m7 :$kr72 $bobot19 %'><small>$lb72</label></th><tr>";

for($i=0;$i<=$jump;$i++){
	$no=$i+1;
	$gdata.="<tr>
	<td>$no<td>$arM[$i] ($arI[$i])
	<td>$arN1[$i]
	<td>$arN2[$i]
	<td>$arN3[$i]
	<td>$arN4[$i]
	<td>$arN5[$i]
	<td>$arN6[$i]
	<td>$arN7[$i]
	<td>$arN8[$i]
	<td>$arN9[$i]
	<td>$arN10[$i]
	<td>$arN11[$i]
	<td>$arN12[$i]
	<td>$arN13[$i]
	<td>$arN14[$i]
	<td>$arN15[$i]
	<td>$arN16[$i]
	<td>$arN17[$i]
	<td>$arN18[$i]
	<td>$arN19[$i]
	</tr>";
}
$gdata.="<tr bgcolor='#036'>
    <th colspan='2' width='3%' align='left'>Max</th>
    <th width='5%'>$nMax1</th>
	<th width='5%'>$nMax2</th>
	<th width='5%'>$nMax3</th>
	<th width='5%'>$nMax4</th>
	<th width='5%'>$nMax5</th>
	<th width='5%'>$nMax6</th>
	<th width='5%'>$nMax7</th>
	<th width='5%'>$nMax8</th>
	<th width='5%'>$nMax9</th>
	<th width='5%'>$nMax10</th>
	<th width='5%'>$nMax11</th>
	<th width='5%'>$nMax12</th>
	<th width='5%'>$nMax13</th>
	<th width='5%'>$nMax14</th>
	<th width='5%'>$nMax15</th>
	<th width='5%'>$nMax16</th>
	<th width='5%'>$nMax17</th>
	<th width='5%'>$nMax18</th>
	<th width='5%'>$nMax19</th>
  </tr>";
  
$gdata.="<tr bgcolor='#036'>
    <th colspan='2' width='3%' align='left'>Min</th>
	<th width='5%'>$nMin1</th>
	<th width='5%'>$nMin2</th>
	<th width='5%'>$nMin3</th>
	<th width='5%'>$nMin4</th>
	<th width='5%'>$nMin5</th>
	<th width='5%'>$nMin6</th>
	<th width='5%'>$nMin7</th>
	<th width='5%'>$nMin8</th>
	<th width='5%'>$nMin9</th>
	<th width='5%'>$nMin10</th>
	<th width='5%'>$nMin11</th>
	<th width='5%'>$nMin12</th>
	<th width='5%'>$nMin13</th>
	<th width='5%'>$nMin14</th>
	<th width='5%'>$nMin15</th>
	<th width='5%'>$nMin16</th>
	<th width='5%'>$nMin17</th>
	<th width='5%'>$nMin18</th>
	<th width='5%'>$nMin19</th>
  </tr>";
  
$gdata.="</table><br><h4>Rumus Perhitungan Normalisasi</h4></br>";
$gambar="<img src='ypathfile/saw2.png' width='350' height='250'><br>Pembentukan Matrik Normalisasi";
$gab="<h4>Penentuan Batas Min Max </h4><div> $gdata <br>$gambar</div>";
echo $gab;
//================================================
$gdata="<table id='table'><tr bgcolor='#cccccc'><th>No<th>Kelurahan";
$gdata.= "<th><label title='$m1 :$kr11 $bobot1 %'><small>$lb11</label></th>";
$gdata.= "<th><label title='$m1 :$kr12 $bobot2 %'><small>$lb12</label></th>";
$gdata.= "<th><label title='$m1 :$kr13 $bobot3 %'><small>$lb13</label></th>";
$gdata.= "<th><label title='$m2 :$kr21 $bobot4 %'><small>$lb21</label></th>";
$gdata.= "<th><label title='$m2 :$kr22 $bobot5 %'><small>$lb22</label></th>";
$gdata.= "<th><label title='$m3 :$kr31 $bobot6 %'><small>$lb31</label></th>";
$gdata.= "<th><label title='$m3 :$kr32 $bobot7 %'><small>$lb32</label></th>";
$gdata.= "<th><label title='$m4 :$kr41 $bobot8 %'><small>$lb41</label></th>";
$gdata.= "<th><label title='$m4 :$kr42 $bobot9 %'><small>$lb42</label></th>";
$gdata.= "<th><label title='$m4 :$kr43 $bobot10 %'><small>$lb43</label></th>";
$gdata.= "<th><label title='$m4 :$kr44 $bobot11 %'><small>$lb44</label></th>";
$gdata.= "<th><label title='$m4 :$kr45 $bobot12 %'><small>$lb45</label></th>";
$gdata.= "<th><label title='$m5 :$kr51 $bobot13 %'><small>$lb51</label></th>";
$gdata.= "<th><label title='$m5 :$kr52 $bobot14 %'><small>$lb52</label></th>";
$gdata.= "<th><label title='$m6 :$kr61 $bobot15 %'><small>$lb61</label></th>";
$gdata.= "<th><label title='$m6 :$kr62 $bobot16 %'><small>$lb62</label></th>";
$gdata.= "<th><label title='$m6 :$kr63 $bobot17 %'><small>$lb63</label></th>";
$gdata.= "<th><label title='$m7 :$kr71 $bobot18 %'><small>$lb71</label></th>";
$gdata.= "<th><label title='$m7 :$kr72 $bobot19 %'><small>$lb72</label></th><tr>";
for($i=0;$i<=$jump;$i++){
	$no=$i+1;
	$gdata.="<tr>
	<td>$no<td>$arM[$i] ($arI[$i])
	<td>$arM1S[$i]
	<td>$arM2S[$i]
	<td>$arM3S[$i]
	<td>$arM4S[$i]
	<td>$arM5S[$i]
	<td>$arM6S[$i]
	<td>$arM7S[$i]
	<td>$arM8S[$i]
	<td>$arM9S[$i]
	<td>$arM10S[$i]
	<td>$arM11S[$i]
	<td>$arM12S[$i]
	<td>$arM13S[$i]
	<td>$arM14S[$i]
	<td>$arM15S[$i]
	<td>$arM16S[$i]
	<td>$arM17S[$i]
	<td>$arM18S[$i]
	<td>$arM19S[$i]
	</tr>";
} 
$gdata.="</table>";
$gab="<h4>Proses Penentuan Normalisasi</h4><div> $gdata</div>";
echo $gab;


//============================================
$gdata="<table id='table'><tr bgcolor='#cccccc'><th>No<th>Kelurahan";
$gdata.= "<th><label title='$m1 :$kr11 $bobot1 %'><small>$lb11</label></th>";
$gdata.= "<th><label title='$m1 :$kr12 $bobot2 %'><small>$lb12</label></th>";
$gdata.= "<th><label title='$m1 :$kr13 $bobot3 %'><small>$lb13</label></th>";
$gdata.= "<th><label title='$m2 :$kr21 $bobot4 %'><small>$lb21</label></th>";
$gdata.= "<th><label title='$m2 :$kr22 $bobot5 %'><small>$lb22</label></th>";
$gdata.= "<th><label title='$m3 :$kr31 $bobot6 %'><small>$lb31</label></th>";
$gdata.= "<th><label title='$m3 :$kr32 $bobot7 %'><small>$lb32</label></th>";
$gdata.= "<th><label title='$m4 :$kr41 $bobot8 %'><small>$lb41</label></th>";
$gdata.= "<th><label title='$m4 :$kr42 $bobot9 %'><small>$lb42</label></th>";
$gdata.= "<th><label title='$m4 :$kr43 $bobot10 %'><small>$lb43</label></th>";
$gdata.= "<th><label title='$m4 :$kr44 $bobot11 %'><small>$lb44</label></th>";
$gdata.= "<th><label title='$m4 :$kr45 $bobot12 %'><small>$lb45</label></th>";
$gdata.= "<th><label title='$m5 :$kr51 $bobot13 %'><small>$lb51</label></th>";
$gdata.= "<th><label title='$m5 :$kr52 $bobot14 %'><small>$lb52</label></th>";
$gdata.= "<th><label title='$m6 :$kr61 $bobot15 %'><small>$lb61</label></th>";
$gdata.= "<th><label title='$m6 :$kr62 $bobot16 %'><small>$lb62</label></th>";
$gdata.= "<th><label title='$m6 :$kr63 $bobot17 %'><small>$lb63</label></th>";
$gdata.= "<th><label title='$m7 :$kr71 $bobot18 %'><small>$lb71</label></th>";
$gdata.= "<th><label title='$m7 :$kr72 $bobot19 %'><small>$lb72</label></th><tr>";

for($i=0;$i<=$jump;$i++){
	$no=$i+1;
	$gdata.="<tr><td>$no<td>$arM[$i] ($arI[$i])
	<td>$arM1[$i]
	<td>$arM2[$i]
	<td>$arM3[$i]
	<td>$arM4[$i]
	<td>$arM5[$i]
	<td>$arM6[$i]
	<td>$arM7[$i]
	<td>$arM8[$i]
	<td>$arM9[$i]
	<td>$arM10[$i]
	<td>$arM11[$i]
	<td>$arM12[$i]
	<td>$arM13[$i]
	<td>$arM14[$i]
	<td>$arM15[$i]
	<td>$arM16[$i]
	<td>$arM17[$i]
	<td>$arM18[$i]
	<td>$arM19[$i]
	</tr>";
}  
$gdata.="</table>";
$gab="<br><h4>Normalisasi Data penilaian</h4></br><div> $gdata

</div>";
echo $gab;

//============================================
 
$gambar="<img src='ypathfile/saw3.png' width='500' height='200'><br>Pembentukan Matrik Perhitungan SAW + Bobot";
$gab="<h4>Perhitungan Nilai Akhir</h4><div>
$gambar
</div>";
echo $gab; 

//==================================
$gdata="<table id='table'>
  <tr bgcolor='#036'>
    <th width='3%'><center>No</th>
    <th width='20%'><center>Kelurahan</th>
    <th width='65%'><center>Formula Max-Min</th>
	<th width='5%'><center>Bobot</th>
  </tr>";

for($i=0;$i<=$jump;$i++){
	$no=$i+1;
	$gdata.="<tr>
	<td>$no
	<td>$arM[$i] ($arI[$i])
	<td>$SF[$i]
	<td>$VF[$i]
	</tr>";
}  
$gdata.="</table>";

$gab="<h4> Menghitung Nilai <b>Bobot<sub>SAW</sub></b></h4><div> $gdata 

</div>";
echo $gab;


  $array_count = $jump+1;
        for($x = 0; $x < $array_count; $x++){
            for($a = 0 ;  $a < $array_count - 1 ; $a++){
                if($a < $array_count ){
                    if($VF[$a] < $VF[$a + 1] ){
						 swap($arID, $a, $a+1);
                            swap($VF, $a, $a+1);
							swap($arM, $a, $a+1);
							swap($arI, $a, $a+1);
							swap($arRekap, $a, $a+1);
							swap($arKet, $a, $a+1);
                    }
                }
            }
        }
		
	//==================================

$gdata="
Hasil Nilai Akhir dan Rangking.
<br>
Sehingga dapat diambil kesimpulan Data Pretasi kelurahan Secara terurut adalah :
<table id='table'>
  <tr bgcolor='#036'>
    <th width='3%'><center>No</th>
    <th width='60%'><center>Kelurahan</th>
	<th width='5%'><center>Nilai Akhir</th>
	<th width='5%'><center>Ranking</th>
	<th width='15%'><center>Keterangan</th>
	
  </tr>";
$sql="delete from `$tbhasil` where `id_penilaian`='$id_penilaian'";
$hapus=process($conn,$sql);

$gabGR="";
for($i=0;$i<=$jump;$i++){
	$no=$i+1;
	
	$id=$arID[$i];
	$id_kelurahan=$arI[$i];
	$rekapitulasi=$arRekap[$i];
	$catatan=$arKet[$i];
	
	$sql = "select * from `$tbkelurahan` where `id_kelurahan`='$id_kelurahan'";
	$d = getField($conn, $sql);
		$nama_kelurahan = ucwords($d["nama_kelurahan"]);
		$deskripsi = $d["deskripsi"];
	
	$gabGR.="['$nama_kelurahan',$VF[$i]],";
 $sql = " INSERT INTO `tb_hasil` (`id_penilaian`, `id_kelurahan`, `rekapitulasi_1`,`bobot_1`, `rangking_1`,`rekapitulasi_2`,`bobot_2`, `rangking_2`, `catatan`) VALUES (
'$id_penilaian', '$id_kelurahan', '$rekapitulasi','$VF[$i]', '$no', '', '0', '0', '$catatan')";
$simpan=process($conn,$sql);

	$gdata.="<tr><td>$no
<td valign='top'  align='left'>
<b><small><a href='#'>$nama_kelurahan</a></b> ($id_kelurahan) <br> 
<i>$deskripsi</i></small></td>

<td  align='left'>$VF[$i]<td>$no<td><small><i>$catatan</small></i></tr>";
}  
$gdata.="</table>";

$gab="<h4> Sorting Descending /Bubblesort</h4><div> $gdata

</div>";
echo $gab;	
$gabGR=substr($gabGR,0,strlen($gabGR)-1);

?>

</div>


<?php
if(isset($_GET["pro"]) && $_GET["pro"]=="hapus"){
$id=$_GET["kode"];
$id_penilaian=$_GET["id"];
$sql="delete from `tb_hasil`  where `id_hasil`='$id'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data penilaian_detail $id berhasil dihapus !');document.location.href='?mnu=saw&id=$id_penilaian';</script>";}
else{echo"<script>alert('Data penilaian_detail $id gagal dihapus...');document.location.href='?mnu=saw&id=$id_penilaian';</script>";}
}


 function swap(&$arr, $a, $b) {
        $tmp = $arr[$a];
        $arr[$a] = $arr[$b];
        $arr[$b] = $tmp;
    }
	
?>





<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 
  <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Kelurahan', 'Bobot'],<?php echo $gabGR;?>
        ]);

        var options = {
          title: 'SAW',
          legend: 'none',
          pieSliceText: 'label',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script> 
    <div id="piechart" style="width: 1200px; height: 800px;"></div>
	
