<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
	<div class="sidebar">
            <nav>
                <ul>
                    <li>Framework CRUD</li>
					<li>Patricia Chandra</li>
                    <li>Informatika A 2020</li>
                </ul>
            </nav>
        </div>

		<main class="content">
			<section class="Welcome">
				<div>
					<h2>Kepegawaian</h2>
					<h3 class="title">CRUD Framework Data Pegawai</h3>
					<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
					
					<table border="1" class="table-danger">
						<tr>
							<th scope="col">Nama</th>
							<th scope="col">Jabatan</th>
							<th scope="col">Umur</th>
							<th scope="col">Alamat</th>
							<th scope="col">Opsi</th>
						</tr>
						
						@foreach($pegawai as $p)
						<tr>
							<td>{{ $p->pegawai_nama }}</td>
							<td>{{ $p->pegawai_jabatan }}</td>
							<td>{{ $p->pegawai_umur }}</td>
							<td>{{ $p->pegawai_alamat }}</td>
							<td>
								<a href="/pegawai/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
								<a href="/pegawai/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						
						@endforeach
					
					</table>
					
					@if($pegawai->hasPages())
					<div class="card-footer">
						{{ $pegawai->links() }}
					</div>
					
					@endif
					<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
				</div>
			</section>
		</main>
	</div>
</body>
</html>