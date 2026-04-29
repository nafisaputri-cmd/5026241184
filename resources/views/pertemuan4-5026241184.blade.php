<!DOCTYPE html>
<html lang="id">

<head>
    <title>Spotify - Select a Plan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1920">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background-color: #e8e8e8;
            font-family: 'Open Sans', sans-serif;
            width: 1920px;
            min-height: 1080px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #plan-section {
            background-color: white;
            width: 1100px;
            min-height: 600px;
            padding: 50px 80px;
            border-radius: 0px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        #logo-wrapper {
            text-align: center;
            margin-bottom: 20px;
        }

        #judul-utama {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 28px;
            letter-spacing: 2px;
            color: #1a1a1a;
            text-align: center;
            margin-bottom: 12px;
        }

        #sub-judul {
            text-align: center;
            color: #999999;
            font-size: 16px;
            margin-bottom: 60px;
        }

        .row-kartu { display: flex; align-items: stretch; }

        .kolom-kartu {
            display: flex;
            flex-direction: column;
            padding: 0 16px;
        }

        .plan-card {
            border: 1px solid #e0e0e0;
            border-radius: 0px;
            padding: 28px 24px;
            text-align: center;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .plan-nama {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 17px;
            letter-spacing: 2px;
            color: #1a1a1a;
            margin-bottom: 6px;
            min-height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .plan-harga { font-size: 15px; color: #999999; margin-bottom: 24px; }

        .plan-tombol {
            display: block;
            width: auto;
            padding: 10px 40px;
            font-size: 13px;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 1px;
            border-radius: 0px;
            margin: 0 auto 32px auto;
            border: none;
            cursor: pointer;
        }

        .tombol-current { background-color: #cccccc; color: #888888; }
        .tombol-upgrade { background-color: #1DB954; color: white; }
        .tombol-upgrade:hover { background-color: #17a34a; }

        .plan-divider { border-top: 1px solid #eeeeee; margin: 0 0 28px 0; }

        .plan-fitur {
            list-style: none;
            padding: 0; margin: 0;
            text-align: center;
            font-size: 15px;
            color: #666666;
            line-height: 1.8;
            flex-grow: 1;
        }

        .plan-fitur li { margin-bottom: 12px; }
        .fitur-bold { font-weight: 700; color: #1a1a1a; }

        .btn-back {
            display: block;
            text-align: center;
            margin-bottom: 24px;
        }

        .btn-back a {
            padding: 6px 16px;
            background: #f0e040;
            color: #000;
            font-weight: 700;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.85rem;
        }
    </style>
</head>

<body>

    <div id="plan-section">

        {{-- Tombol kembali ke menu --}}
        <div class="btn-back">
            <a href="/">← Kembali ke Menu</a>
        </div>

        {{-- Logo Spotify --}}
        <div id="logo-wrapper">
            <img src="https://tse4.mm.bing.net/th/id/OIP.Lrxsd7qE1xlNSo9qczRXHgHaHa?pid=Api&h=220&P=0"
                width="120px" alt="Spotify Logo">
        </div>

        {{-- Judul & Subjudul --}}
        <p id="judul-utama">SELECT A PLAN</p>
        <p id="sub-judul">Ada paket yang cocok untuk setiap orang. Ayo bergabung!</p>

        {{-- Grid 3 Kartu Plan --}}
        <div class="row row-kartu">

            {{-- Kartu PERSONAL --}}
            <div class="col-4 kolom-kartu">
                <div class="plan-card">
                    <p class="plan-nama">PERSONAL</p>
                    <p class="plan-harga">Rp 59.900/bulan</p>
                    <button class="plan-tombol tombol-current">YOUR PLAN</button>
                    <hr class="plan-divider">
                    <ul class="plan-fitur">
                        <li><span class="fitur-bold">1</span> akun Lite aktif</li>
                        <li><span class="fitur-bold">Kualitas audio tinggi</span> hingga ~160 kbps</li>
                        <li><span class="fitur-bold">Unlimited</span> skip lagu</li>
                        <li><span class="fitur-bold">Tanpa</span> iklan saat streaming</li>
                        <li><span class="fitur-bold">Pembatalan</span> kapan saja</li>
                    </ul>
                </div>
            </div>

            {{-- Kartu PROFESSIONAL --}}
            <div class="col-4 kolom-kartu">
                <div class="plan-card">
                    <p class="plan-nama">PROFESSIONAL</p>
                    <p class="plan-harga">Rp 79.900/bulan</p>
                    <button class="plan-tombol tombol-upgrade">UPGRADE</button>
                    <hr class="plan-divider">
                    <ul class="plan-fitur">
                        <li><span class="fitur-bold">1</span> akun Standard aktif</li>
                        <li><span class="fitur-bold">Kualitas audio sangat tinggi</span> hingga ~320 kbps</li>
                        <li><span class="fitur-bold">Download</span> untuk mendengarkan offline</li>
                        <li><span class="fitur-bold">Unlimited</span> skip lagu</li>
                        <li><span class="fitur-bold">Pembatalan</span> kapan saja</li>
                    </ul>
                </div>
            </div>

            {{-- Kartu BUSINESS --}}
            <div class="col-4 kolom-kartu">
                <div class="plan-card">
                    <p class="plan-nama">BUSINESS</p>
                    <p class="plan-harga">Rp 119.900/bulan</p>
                    <button class="plan-tombol tombol-upgrade">UPGRADE</button>
                    <hr class="plan-divider">
                    <ul class="plan-fitur">
                        <li><span class="fitur-bold">Hingga 3</span> akun Platinum aktif</li>
                        <li><span class="fitur-bold">Kualitas audio lossless</span> hingga ~24-bit/44,1 kHz</li>
                        <li><span class="fitur-bold">Download</span> untuk mendengarkan offline</li>
                        <li><span class="fitur-bold">AI DJ</span> pribadi &amp; pembuatan playlist AI</li>
                        <li><span class="fitur-bold">Pembatalan</span> kapan saja</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
