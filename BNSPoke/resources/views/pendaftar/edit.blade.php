<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> <!-- Ini merupakan untuk menghubungkan css online-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><a href="#">Edit Event</a></h2>
                <h3>Edit Pegawai</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="/admin" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
        <br />
        @foreach ($pendaftar as $p)
            <div class="row">
                <div class="col-md-6 col-md-offset-3"
                    style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 10px; background-color: #f9f9f9;">
                    <form action="/pendaftar/update" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $p->idpendaftar }}">
                        <div class="form-group">
                            <label for="nama" class="col-md-2 control-label" style="bo">Nama</label>
                            <div class="col-md-10">
                                <input type="text" required="required" name="nama" value="{{ $p->nama }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="col-md-2 control-label">email</label>
                            <div class="col-md-10">
                                <input type="email" required="required" name="email" value="{{ $p->email }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="informasi" class="col-md-2 control-label">Tanggal Lahir</label>
                            <div class="col-md-10">
                                <textarea required="required" name="tanggal" class="form-control">{{ $p->ttl }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="col-md-2 control-label">Alamat</label>
                            <div class="col-md-10">
                                <input type="text" required="required" name="alamat" value="{{ $p->alamat }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Event" class="col-md-2 control-label">Event</label>
                            <div class="col-md-10">
                                <input type="text" required="required" name="event" value="{{ $p->eventapa }}"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-2">
                                <input type="submit" value="Simpan Data" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
