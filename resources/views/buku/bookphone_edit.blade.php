<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Edit</title>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg rounded-3">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Edit Data Buku</h5>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('bookphone.update', $bookphone->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama:</label>
                                <input type="text" name="nama" class="form-control" value="{{ $bookphone->nama }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="no_hp" class="form-label">No hp:</label>
                                <input type="text" name="no_hp" class="form-control"
                                    value="{{ $bookphone->no_hp }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat:</label>
                                <input type="text" name="alamat" class="form-control"
                                    value="{{ $bookphone->alamat }}" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
