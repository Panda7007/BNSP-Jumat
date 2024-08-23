<!DOCTYPE html>
<html>

<head>
    <title>Memasukkan Event</title>
</head>

<body>

    <h2><a href="#">Gass</a></h2>
    <h3>Data Event</h3>

    <a href="/admin"> Kembali</a>

    <br />
    <br />

    <form action="/event/tambah" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required="required"> <br />
        Tanggal <input type="date" name="tanggal" required="required"> <br />
        Informasi <input type="text" name="informasi" required="required"> <br />
        <input type="submit" value="Simpan Data">
    </form>

</body>

</html>
