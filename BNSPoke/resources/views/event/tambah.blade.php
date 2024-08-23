<!DOCTYPE html>
<html>

<head>
    <title>Memasukkan Event</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body style="background-color: #f5f5f5;">

    <div class="container">
        <h2 class="text-center my-3"><a href="#">Gass</a></h2>
        <h3 class="text-center my-3">Data Event</h3>

        <a href="/admin" class="btn btn-secondary my-3">Kembali</a>

        <br />
        <br />

        <form action="/event/tambah" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" required="required" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" required="required" class="form-control" id="tanggal">
            </div>
            <div class="form-group">
                <label for="informasi">Informasi</label>
                <input type="text" name="informasi" required="required" class="form-control" id="informasi">
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>

    </div>

</body>

</html>
