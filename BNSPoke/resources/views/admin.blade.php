<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Akses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Selamat Datang Admin!</h1>
        <a href="/logoutaksi" class="btn btn-primary mb-4 text-left">Keluar</a>

        <a href="/event/tambah" class="btn btn-primary mb-4">+ Tambah Event</a>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Urutan</th>
                    <th scope="col">Event</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Informasi</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($event as $p)
                    <tr>
                        <td>{{ $p->idevent }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->tanggal }}</td>
                        <td>{{ $p->informasi }}</td>
                        <td>
                            <a href="/event/edit/{{ $p->idevent }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="/event/hapus/{{ $p->idevent }}" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3>Kolom Pendaftar Event</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Urutan</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Event</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendaftar as $p)
                    <tr>
                        <td>{{ $p->idpendaftar }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->ttl }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->eventapa }}</td>
                        <td>
                            <a href="/pendaftar/edit/{{ $p->idpendaftar }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="/pendaftar/hapus/{{ $p->idpendaftar }}" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
