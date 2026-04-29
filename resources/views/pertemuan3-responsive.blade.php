<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan Responsive Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <style>
        .open-sans-judul {
            font-family: "Open Sans", sans-serif;
            font-weight: 300;
            font-style: light;
            font-size: 30px;
            font-variation-settings: "wdth" 100;
        }
    </style>
</head>

<body>

    <div class="container">

        {{-- Tombol kembali ke menu --}}
        <a href="/" style="display:inline-block; margin:16px 0; padding:6px 16px; background:#f0e040; color:#000; font-weight:700; border-radius:6px; text-decoration:none;">
            ← Kembali ke Menu
        </a>

        <div class="jumbotron text-center">
            <h1 class="display-3">Selamat Datang</h1>
            <p class="lead">di Pemrograman Web</p>
            <hr class="my-2">
            <p>More info</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Klik Disini</a>
            </p>
        </div>

        {{-- Latihan Grid 1 --}}
        <div class="row">
            <div class="col bg-success">
                <p>row 1 col 1</p>
            </div>
            <div class="col bg-primary">
                <p>row 1 col 2</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p>row 2 col 1</p>
            </div>
            <div class="col">
                <p>row 2 col 2</p>
            </div>
        </div>

        {{-- Latihan Grid 2 --}}
        <div class="row">
            <div class="col-3 border">
                <p>row 1 col 1</p>
            </div>
            <div class="col-9 border">
                <p>row 1 col 2</p>
                <div class="row">
                    <div class="col-7 border">
                        <p>grid di cel 2 , row 1 col 1</p>
                    </div>
                    <div class="col-5 border">
                        <p>grid di cel 2 , row 2 col 2</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p>row 2 col 1</p>
            </div>
            <div class="col">
                <p>row 2 col 2</p>
            </div>
        </div>

        {{-- Tentang Danantara --}}
        <div class="row">
            <div class="col">
                <p>Tentang Kami</p>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <p class="open-sans-judul"><b>Danantara Indonesia</b> is an investment management agency that oversees,
                    optimizes, and grows Indonesia's strategic assets, in line with the country's long-term agenda for
                    economic transformation.</p>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <img src="https://www.danantaraindonesia.co.id/_next/image?url=https%3A%2F%2Fd19ypesdspgr78.cloudfront.net%2F490%2FHome_Intro_Small_Image.webp&w=1920&q=75"
                            class="img-fluid">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p> </p>
                        <p>As a sovereign investment agency, we provide a trusted platform for global investors to
                            unlock Indonesia's vast economic potential and generate sustainable long-term value.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p><a href="#">Pelajari Lebih Lanjut</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
