<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hitung Rata Rata</title>
	</head>
	<body>
		<form method="POST" action="result.php">
			<table style="border: 1px solid transparent; border-collapse: collapse;">
				<thead style="text-align: left; background-color: orange;">
					<th style="width: 150px"><b>Daftar Nilai</b></th>
					<th style="width: 10px"></th>
					<th style="width: 240px"></th>
				</thead>
				<tbody style="background-color: cyan;">
					<tr>
						<td>
							<label for="label_matematika">Matematika</label>
						</td>
						<td>:</td>
						<td><input type="number" name="matematika" id="label_matematika" required></td>
					</tr>
					<tr>
						<td>
							<label for="label_biologi">Biologi</label>
						</td>
						<td>:</td>
						<td><input type="number" name="biologi" id="label_biologi" required></td>
					</tr>
					<tr>
						<td>
							<label for="label_fisika">Fisika</label>
						</td>
						<td>:</td>
						<td><input type="number" name="fisika" id="label_fisika" required></td>
					</tr>
					<tr>
						<td>
							<label for="label_kimia">Kimia</label>
						</td>
						<td>:</td>
						<td><input type="number" name="kimia" id="label_kimia" required></td>
					</tr>
					<tr>
						<td>
							<label for="label_bindo">Bahasa Indonesia</label>
						</td>
						<td>:</td>
						<td><input type="number" name="bindo" id="label_bindo" required></td>
					</tr>
					<tr>
						<td>
							<label for="label_bing">Bahasa Inggris</label>
						</td>
						<td>:</td>
						<td><input type="number" name="bing" id="label_bing" required></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><button type="submit">Hitung</button> <input type="reset"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>

<!-- 2502004405 - Dimas Syauqi Syafa -->
