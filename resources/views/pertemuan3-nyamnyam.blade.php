<!DOCTYPE html>
<html lang="id">

<head>
    <title>Resto NyamNyam - Order Makanan Via Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand">🛍️ Resto NyamNyam</span>
        {{-- Tombol kembali ke menu --}}
        <a href="/" style="padding:6px 14px; background:#f0e040; color:#000; font-weight:700; border-radius:6px; text-decoration:none; font-size:0.85rem;">
            ← Menu
        </a>
    </nav>

    <div class="container mt-4">

        <h3>Selamat Datang di Resto NyamNyam!</h3>
        <p>Temukan makanan yummy di sini! Pilih kategori di bawah ini.</p>
        <hr>

        <ul class="nav nav-tabs" id="tokoTab">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#makanan">🍕 Makanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#minuman">🧃 Minuman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#snack">🍪 Snack</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#promo">🔥 Promo</a>
            </li>
        </ul>

        <div class="tab-content mt-3">

            {{-- Tab Makanan --}}
            <div class="tab-pane fade show active" id="makanan">
                <h5>Kategori Makanan</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://au.ooni.com/cdn/shop/articles/20220211142645-margherita-9920.jpg?v=1737368217&width=1080"
                                class="card-img-top" alt="Pizza">
                            <div class="card-body">
                                <h6 class="card-title">Pizza Margherita</h6>
                                <p class="card-text text-muted">Pizza klasik dengan topping keju dan tomat segar.</p>
                                <p><b>Rp 45.000</b></p>
                                <a href="#" class="btn btn-primary btn-sm">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://feelgoodfoodie.net/wp-content/uploads/2023/04/Pasta-Bolognese-TIMG.jpg"
                                class="card-img-top" alt="Pasta">
                            <div class="card-body">
                                <h6 class="card-title">Pasta Bolognese</h6>
                                <p class="card-text text-muted">Pasta dengan saus daging sapi dan tomat pilihan.</p>
                                <p><b>Rp 38.000</b></p>
                                <a href="#" class="btn btn-primary btn-sm">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://tse2.mm.bing.net/th/id/OIP.WWrEwq7-WknaLPD0HTevmAAAAA?pid=Api&h=220&P=0"
                                class="card-img-top" alt="Burger">
                            <div class="card-body">
                                <h6 class="card-title">Burger Spesial</h6>
                                <p class="card-text text-muted">Burger juicy dengan double patty dan keju leleh.</p>
                                <p><b>Rp 42.000</b></p>
                                <a href="#" class="btn btn-primary btn-sm">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tab Minuman --}}
            <div class="tab-pane fade" id="minuman">
                <h5>Kategori Minuman</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/A_small_cup_of_coffee.JPG"
                                class="card-img-top" alt="Kopi">
                            <div class="card-body">
                                <h6 class="card-title">Kopi Hitam</h6>
                                <p class="card-text text-muted">Kopi arabika pilihan, diseduh panas atau dingin.</p>
                                <p><b>Rp 18.000</b></p>
                                <a href="#" class="btn btn-primary btn-sm">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://teacultureoftheworld.com/cdn/shop/articles/taiwan-milk-tea-with-boba-bubble-pearl-on-plastic-2024-02-05-02-27-11-utc_2100x.jpg?v=1714023533"
                                class="card-img-top" alt="Boba">
                            <div class="card-body">
                                <h6 class="card-title">Boba Milk Tea</h6>
                                <p class="card-text text-muted">Milk tea segar dengan boba kenyal di dalamnya.</p>
                                <p><b>Rp 22.000</b></p>
                                <a href="#" class="btn btn-primary btn-sm">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://www.acouplecooks.com/wp-content/uploads/2021/02/Sparkling-Lemonade-004.jpg"
                                class="card-img-top" alt="Lemonade">
                            <div class="card-body">
                                <h6 class="card-title">Lemonade Segar</h6>
                                <p class="card-text text-muted">Minuman lemon segar cocok untuk cuaca panas.</p>
                                <p><b>Rp 15.000</b></p>
                                <a href="#" class="btn btn-primary btn-sm">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tab Snack --}}
            <div class="tab-pane fade" id="snack">
                <h5>Kategori Snack</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://cdn.idntimes.com/content-images/community/2023/02/14705152-360242844311159-2703445513537060864-n-1570fe3ad08971f1b7dbda6d08d1966c_600x400.jpg"
                                class="card-img-top" alt="Donut">
                            <div class="card-body">
                                <h6 class="card-title">Donat Coklat</h6>
                                <p class="card-text text-muted">Donat lembut dengan topping coklat dan meses.</p>
                                <p><b>Rp 8.000</b></p>
                                <a href="#" class="btn btn-primary btn-sm">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://blog.tokowahab.com/wp-content/uploads/2018/08/cookies-coklat.jpg"
                                class="card-img-top" alt="Cookies">
                            <div class="card-body">
                                <h6 class="card-title">Cookies Coklat</h6>
                                <p class="card-text text-muted">Cookies renyah dengan potongan coklat chip.</p>
                                <p><b>Rp 12.000</b></p>
                                <a href="#" class="btn btn-primary btn-sm">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="https://i0.wp.com/i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/1c4aea1c-b40e-4f31-a1c2-ad8120274093_Go-Biz_20211214_200102.jpeg?resize=728%2C500"
                                class="card-img-top" alt="Keripik">
                            <div class="card-body">
                                <h6 class="card-title">Keripik Kentang</h6>
                                <p class="card-text text-muted">Keripik kentang renyah dengan berbagai rasa.</p>
                                <p><b>Rp 10.000</b></p>
                                <a href="#" class="btn btn-primary btn-sm">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tab Promo --}}
            <div class="tab-pane fade" id="promo">
                <h5>🔥 Promo Hari Ini!</h5>
                <div class="alert alert-warning">
                    <b>Diskon spesial hari ini!</b> Dapatkan potongan harga hingga 30% untuk produk pilihan.
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card border-danger">
                            <div class="card-header bg-danger text-white">Diskon 30%!</div>
                            <div class="card-body">
                                <h6 class="card-title">Pizza Margherita</h6>
                                <p class="card-text text-muted"><s>Rp 45.000</s></p>
                                <p><b class="text-danger">Rp 31.500</b></p>
                                <a href="#" class="btn btn-danger btn-sm">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card border-danger">
                            <div class="card-header bg-danger text-white">Diskon 20%!</div>
                            <div class="card-body">
                                <h6 class="card-title">Boba Milk Tea</h6>
                                <p class="card-text text-muted"><s>Rp 22.000</s></p>
                                <p><b class="text-danger">Rp 17.600</b></p>
                                <a href="#" class="btn btn-danger btn-sm">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Footer --}}
    <div class="bg-dark text-white text-center p-3 mt-4">
        <p class="mb-0">Temukan Kebahagiaan Dalam Setiap Suapan
            <br>Salam Hangat "Resto NyamNyam"
        </p>
    </div>

</body>

</html>
