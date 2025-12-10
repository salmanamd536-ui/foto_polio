<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Form Data Siswa</title>
<link rel="stylesheet" href="CSS/style3.css">

</head>
<body>

<h2>Form Input Data Siswa</h2>

<form action="proses_simpan.php" method="POST">
<label>NIS :</label><br>
<input type="text" name="nis" required><br><br>

<label>Nama Lengkap :</label><br>
<input type="text" name="nama" required><br><br>

<label>Kelas :</label><br>
<select name="kelas" required>
<option value="">-- Pilih Kelas --</option>
<option value="X">X</option>
<option value="XI">XI</option>
<option value="XII">XII</option>
</select><br><br>

<label>Jurusan :</label><br>
<input type="text" name="jurusan" required><br><br>

<button type="submit">Simpan Data</button>
</form>

</body>
</html>
