<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Kepegawaian</title>
</head>

<body>
	<main class="content">
		<section class="Welcome">
			<div>
				<h2>Kepegawaian</a></h2>
				<h3>Tambah Data Pegawai</h3>
				
				<a href="/pegawai"> Kembali</a>
				<br/>
				
				<form action="/pegawai/store" method="post">
					{{ csrf_field() }}
					Nama    : <input type="text" name="nama"> <br/>
					Jabatan : <input type="text" name="jabatan"> <br/>
					Umur    : <input type="number" name="umur"> <br/>
					Alamat  : <textarea name="alamat"></textarea> <br/>
					<input type="submit" value="Simpan Data">
				</form>
			</div>
		</section>
	</main>
</body>
</html>