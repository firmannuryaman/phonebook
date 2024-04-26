<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="card-header">

        <nav class="navbar navbar-light bg-light justify-content-between">
            <a href="{{ route('bookphone.create') }}" class="btn btn-primary">
                + Tambah Data
            </a>
            <form action="{{ route('bookphone.search') }}" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </nav>


    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead class="bg-secondary" style="color: white">
                <tr>
                    <th class="text-center text-uppercase px-4 py-2">Nama
                    <th class="text-center text-uppercase px-4 py-2">No HP
                    <th class="text-center text-uppercase px-4 py-2">Alamat
                    <th class="text-center text-uppercase col-2 px-2 py-2">AKSI
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bookphone as $b)
                    <tr>
                        <td class="px-4 py-2">{{ $b->nama }}</td>
                        <td class="px-4 py-2">{{ $b->no_hp }}</td>
                        <td class="px-4 py-2">{{ $b->alamat }}</td>
                        <td>
                            <form action="{{ route('bookphone.delete', $b->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a class="btn btn-primary" href="{{ route('bookphone.edit', $b->id) }}">
                                    <i class="fa fa-pen-to-square"></i> </a>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-2 text-center">Tidak ada
                            data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
