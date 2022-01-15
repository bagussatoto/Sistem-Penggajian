<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
	<style type="text/css">
		body{
			font-family: Arial;
			color: black;
		}
	</style>
</head>
<body>
	<center>
		<h1>PT. BAGUS BERJAYA</h1>
		<h2>Daftar Gaji Pegawai</h2>
	</center>

	<?php
	if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		}
	?>
	<table>
		<tr>
			<td>Bulan</td>
			<td>:</td>
			<td><?php echo $bulan?></td>
		</tr>
		<tr>
			<td>Tahunn</td>
			<td>:</td>
			<td><?php echo $tahun?></td>
		</tr>
	</table>
	<table class="table table-bordered table-triped">
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">NIK</th>
				<th class="text-center">Nama Pegawai</th>
				<th class="text-center">Jenis Kelamin</th>
				<th class="text-center">Jabatan</th>
				<th class="text-center">GajI Pokok</th>
				<th class="text-center">Tj. Transport</th>
				<th class="text-center">Uang Makan</th>
				<th class="text-center">Potongan</th>
				<th class="text-center">Total Gaji</th>
			</tr>
			<?php foreach($potongan as $p) : {
				$alpha = $p->jml_potongan;
			} ?>
			<?php $no=1; foreach($cetak_gaji as $g) : ?>
			<?php $potongan = $g->alpha * $alpha ?>
			<tr>
				<td class="text-center"><?php echo $no++ ?></td>
				<td class="text-center"><?php echo $g->nik ?></td>
				<td class="text-center"><?php echo $g->nama_pegawai ?></td>
				<td class="text-center"><?php echo $g->jenis_kelamin ?></td>
				<td class="text-center"><?php echo $g->nama_jabatan ?></td>
				<td class="text-center">Rp. <?php echo number_format($g->gaji_pokok,0,',','.') ?></td>
				<td class="text-center">Rp. <?php echo number_format($g->tj_transport,0,',','.') ?></td>
				<td class="text-center">Rp. <?php echo number_format($g->uang_makan,0,',','.') ?></td>
				<td class="text-center">Rp. <?php echo number_format($potongan,0, ',','.') ?></td>
				<td class="text-center">Rp. <?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $potongan,0,',','.') ?></td>
			</tr>
			<?php endforeach ;?>
			<?php endforeach ;?>
		</table>

		<table width="100%">
			<tr>
				<td></td>
				<td width="200px">
					<p>Tegal, <?php echo date("d M Y") ?> <br> Finance</p>
					<br>
					<br>
					<p>_____________________</p>
				</td>
			</tr>
		</table>
</body>
</html>

<script type="text/javascript">
	window.print();
</script>