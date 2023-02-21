<?php

	$matematika = $_POST['matematika'];
	$biologi    = $_POST['biologi'];
	$fisika     = $_POST['fisika'];
	$kimia      = $_POST['kimia'];
	$bindo      = $_POST['bindo'];
	$bing       = $_POST['bing'];

	if(!is_numeric($matematika) || !is_numeric($biologi) || !is_numeric($fisika) || !is_numeric($kimia) || !is_numeric($bindo) || !is_numeric($bing)){
		header("Location:index.php");
	}

	$getAverage = ($matematika + $biologi + $fisika + $kimia + $bindo + $bing) / 6;

	function getGrade($nilai){
		if ($nilai >= 85) {
			return "A";
		} else if ($nilai >= 75){
			return "B";
		} else if ($nilai >= 65){
			return "C";
		} else if ($nilai >= 50){
			return "D";
		} else {
			return "E";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hitung Rata Rata</title>
</head>
<body>
	<table style="border: 1px solid transparent; border-collapse: collapse;">
		<thead style="text-align: left">
			<th style="width: 150px">Mata Pelajaran</th>
			<th style="width: 10px"></th>
			<th style="width: 150px">Angka</th>
			<th style="width: 150px">Huruf</th>
		</thead>
		<tbody>
			<tr>
				<td>Matematika</td>
				<td>:</td>
				<td><?= $matematika; ?></td>
				<td><?= getGrade($matematika); ?></td>
			</tr>
			<tr>
				<td>Biologi</td>
				<td>:</td>
				<td><?= $biologi; ?></td>
				<td><?= getGrade($biologi); ?></td>
			</tr>
			<tr>
				<td>Fisika</td>
				<td>:</td>
				<td><?= $fisika; ?></td>
				<td><?= getGrade($fisika); ?></td>
			</tr>
			<tr>
				<td>Kimia</td>
				<td>:</td>
				<td><?= $kimia; ?></td>
				<td><?= getGrade($kimia); ?></td>
			</tr>
			<tr>
				<td>Bhs.Indonesia</td>
				<td>:</td>
				<td><?= $bindo; ?></td>
				<td><?= getGrade($bindo); ?></td>
			</tr>
			<tr>
				<td>Bhs.Inggris</td>
				<td>:</td>
				<td><?= $bing; ?></td>
				<td><?= getGrade($bing); ?></td>
			</tr>
			<tr>
				<td>Nilai Rata-Rata</td>
				<td>:</td>
				<td><?= number_format($getAverage, 2, '.', ''); ?></td>
				<td><?= getGrade($getAverage); ?></td>
			</tr>
		</tbody>
	</table>
	<br>
	<a href="index.php">Kembali ke halaman utama</a>
</body>
</html>

<!-- 2502004405 - Dimas Syauqi Syafa -->
