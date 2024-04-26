<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create</title>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <h3 class="text-2xl font-semibold mb-4">Tambah Data</h3>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
            <p class="text-success">{{ session('success') }}</p>
        @endif
        <form action="{{ route('bookphone.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="no_hp" class="form-label">No HP :</label>
                <input type="text" name="no_hp" class="form-control" required>
            </div>
            <div class="mb-4">
                <label for="alamat" class="form-label">Alamat :</label>
                <input type="text" name="alamat" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('bookphone') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>
