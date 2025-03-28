<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>

<body>

    <div class="container-fluid g-0">
        <div class="row g-0">

            <div class="col-md-8">
                <div id="background-login"></div>
            </div>

            <div class="col-md-4">
                <div id="content-login">
                    <h1>Selamat Datang</h1>
                    <p class="deskripsi">Silahkan melakukan login untuk masuk kedalam sistem</p>

                    <form action="">
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email"
                                placeholder="Masukan Alamat Email">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" placeholder="Masukan Kata Sandi">
                        </div>

                        <button class="btn btn-primary w-100">Masuk</button>
                        <p>Belum punya akun ? 
                          <a href="{{ route('register') }}">Daftar disini</a>
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
