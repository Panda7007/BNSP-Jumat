<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand">Tiketing Broo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="btn btn-warning text-white" href="/login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Tiketing Broo</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Event Konser</p>
                </div>
            </div>
        </header>
        <div class="container px-4 py-5" id="featured-3">
            <h2 class="pb-2 border-bottom">Event yang akan datang</h2>
            <style>
                .event {
                    cursor: pointer;
                }

                .event .informasi {
                    display: none;
                }

                .event:hover .informasi {
                    display: block;
                    position: absolute;
                    background-color: #f1f1f1;
                    border: 1px solid #ddd;
                    padding: 8px;
                    border-radius: 5px;
                    z-index: 1;
                }
            </style>

            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                @foreach ($event as $p)
                    <div class="event col"
                        style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                        <img src="https://picsum.photos/200/300?random={{ $loop->index }}" class="img-thumbnail"
                            style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="nama"
                            style="font-weight: bold; background-color: rgba(0,0,0,0.5); color: white; padding: 10px;">
                            {{ $p->nama }}</div>
                        <div class="tanggal" style="background-color: rgba(0,0,0,0.5); color: white; padding: 10px;">
                            {{ $p->tanggal }}</div>
                        <div class="informasi" style="background-color: rgba(0,0,0,0.5); color: white; padding: 10px;">
                            <p>{{ $p->informasi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container px-4 py-5" id="featured-3">
            <div class="row">
                <h4> Form Pendaftaran Event</h4>
                <div class="col-5">
                    <form action="/pendaftar/tambah" method="post" class="form-horizontal"
                        style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); padding: 20px;">
                        {{ csrf_field() }}
                        <div class="form-group my-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" required="required" name="nama" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="tanggal" class="form-label">Tangga Lahir</label>
                            <input type="date" required="required" name="tanggal" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="informasi" class="form-label">Email</label>
                            <input type="email" required="required" name="email" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="informasi" class="form-label">Alamat</label>
                            <input type="text" required="required" name="alamat" class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label for="event" class="form-label">Event:</label>
                            <select id="eventapa" name="event" class="form-select">
                                @foreach ($event as $p)
                                    <option value="{{ $p->nama }}">{{ $p->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group my-3">
                            <div class="col-md-10">
                                <input type="submit" value="Simpan Data" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-5">
                    <h3 class="text-center">Motivation</h3>
                    <p class="text-center">"Believe you can and you're halfway there."</p>
                </div>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
