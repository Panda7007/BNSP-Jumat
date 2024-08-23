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
        @foreach ($event as $p)
            <div class="row">
                <div class="col-md-6 col-md-offset-3"
                    style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 10px; background-color: #f9f9f9;">
                    <form action="/event/update" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $p->idevent }}">
                        <div class="form-group">
                            <label for="nama" class="col-md-2 control-label" style="bo">Event</label>
                            <div class="col-md-10">
                                <input type="text" required="required" name="nama" value="{{ $p->nama }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jabatan" class="col-md-2 control-label">Tanggal</label>
                            <div class="col-md-10">
                                <input type="date" required="required" name="tanggal" value="{{ $p->tanggal }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="informasi" class="col-md-2 control-label">Informasi</label>
                            <div class="col-md-10">
                                <textarea required="required" name="informasi" class="form-control" style="resize: none;" rows="5">{{ $p->informasi }}</textarea>
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
