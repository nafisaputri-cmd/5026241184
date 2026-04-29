<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@simplyveewee | Linktree</title>
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html, body { height: 100%; }

        body {
            background-color: #c0bfbf;
            font-family: 'Playfair Display', serif;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 0;
        }

        .kartu {
            background: #ffffff;
            width: 100%;
            max-width: 370px;
            min-height: 100vh;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 0;
            box-shadow: none;
        }

        .barisatas {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 16px 8px;
        }

        .tombolikon {
            display: flex; align-items: center; justify-content: center;
            width: 32px; height: 32px;
            background: transparent; border: none; border-radius: 50%;
            cursor: pointer; color: #1a1a1a; padding: 0;
            transition: background 0.15s;
        }
        .tombolikon:hover { background: rgba(0,0,0,0.06); }

        a.topbar-btn {
            display: flex; align-items: center; justify-content: center;
            width: 32px; height: 32px;
            color: #000000; text-decoration: none;
        }

        .profilatas {
            display: flex; flex-direction: column; align-items: center;
            text-align: center; padding: 8px 24px 18px; width: 100%;
        }

        .fotoprofil {
            width: 68px; height: 68px;
            border-radius: 50%; overflow: hidden;
            border: 1.5px solid transparent;
            background: #f0ebe8; margin-bottom: 10px; flex-shrink: 0;
        }
        .fotoprofil img { width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 50%; }

        .namaakun {
            font-family: 'Playfair Display', serif;
            font-weight: 700; font-size: 0.95rem;
            color: #ab9282; text-align: center;
            line-height: 1.3; margin-bottom: 3px; letter-spacing: 0.01em;
        }

        .tagline {
            font-family: 'Playfair Display', serif;
            font-size: 0.78rem; font-weight: 700;
            color: #ab9282; text-align: center; letter-spacing: 0.04em;
        }

        .daftartombol {
            width: 100%; padding: 0 20px;
            display: flex; flex-direction: column; gap: 9px;
        }

        a.tombollink {
            display: flex; align-items: center; justify-content: center;
            width: 100%; padding: 13px 44px 13px 16px;
            background-color: #b16f6f; color: #ffffff;
            border: none; border-radius: 0;
            font-family: 'Playfair Display', serif;
            font-size: 0.70rem; font-weight: 500;
            letter-spacing: 0.10em; text-transform: uppercase;
            text-align: center; text-decoration: none;
            cursor: pointer; position: relative;
            transition: background-color 0.18s, transform 0.12s;
        }
        a.tombollink:hover { background-color: #9a5a5a; color: #ffffff; text-decoration: none; transform: translateY(-1px); }
        a.tombollink:active { transform: translateY(0); background-color: #7a4a45; }

        a.tombollink .titiktigavertikal {
            position: absolute; right: 14px; top: 50%; transform: translateY(-50%);
            display: flex; flex-direction: column; gap: 3px; pointer-events: none;
        }
        a.tombollink .titiktigavertikal span {
            display: block; width: 3px; height: 3px; border-radius: 50%;
            background: rgba(255,255,255,0.60);
        }

        .pendorongbawah { flex: 1; }

        .wadahtombolbergabung {
            width: 100%; display: flex; justify-content: center; padding: 30px 24px 10px;
        }

        a.tombolbergabung {
            display: inline-block; padding: 9px 20px;
            background: #fff; border: 1.5px solid #1a1a1a; border-radius: 999px;
            font-family: 'Playfair Display', serif;
            font-size: 0.75rem; font-weight: 700;
            color: #1a1a1a; text-decoration: none; text-align: center;
            white-space: nowrap; transition: background 0.2s, color 0.2s;
        }
        a.tombolbergabung:hover { background: #1a1a1a; color: #fff; text-decoration: none; }

        .footerhalaman { padding: 8px 16px 28px; text-align: center; width: 100%; }
        .footerhalaman a { font-family: 'Playfair Display', serif; font-size: 10px; color: #aaa; text-decoration: none; margin: 0 2px; }
        .footerhalaman a:hover { text-decoration: underline; color: #666; }
        .footerhalaman .pemisah { color: #ccc; font-size: 10px; margin: 0 1px; }

        .btn-back-simply {
            width: 100%;
            text-align: center;
            padding: 10px 0 0;
        }
        .btn-back-simply a {
            padding: 5px 14px;
            background: #f0e040;
            color: #000;
            font-weight: 700;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.78rem;
            font-family: 'Playfair Display', serif;
        }

        @media (max-width: 420px) { body { background: #ffffff; } .kartu { max-width: 100%; } }
        @media (min-width: 421px) {
            body { background-color: #c0bfbf; align-items: flex-start; }
            .kartu { box-shadow: -2px 0 20px rgba(0,0,0,.10), 2px 0 20px rgba(0,0,0,.10); }
        }
    </style>
</head>

<body>

    <div class="kartu">

        {{-- Tombol kembali ke menu --}}
        <div class="btn-back-simply">
            <a href="/">← Kembali ke Menu</a>
        </div>

        {{-- Baris atas --}}
        <div class="barisatas">
            <a href="#" class="topbar-btn" aria-label="Linktree">
                <svg fill="none" height="18px" width="18px" viewBox="0 0 28 28">
                    <path d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z" fill="currentColor"></path>
                </svg>
            </a>
            <button class="tombolikon" aria-label="Share">
                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/>
                    <polyline points="16 6 12 2 8 6"/>
                    <line x1="12" y1="2" x2="12" y2="15"/>
                </svg>
            </button>
        </div>

        {{-- Bagian profil --}}
        <div class="profilatas">
            <div class="fotoprofil">
                {{-- Foto profil lokal diganti placeholder --}}
                <img src="https://ui-avatars.com/api/?name=SVW&background=ab9282&color=fff&size=68" alt="SimplyVeeWee">
            </div>
            <p class="namaakun">@simplyveewee</p>
            <p class="tagline">Elegance in Simplycity</p>
        </div>

        {{-- Daftar tombol link --}}
        <div class="daftartombol">

            <a href="#" target="_blank" rel="noopener noreferrer" class="tombollink">
                KATALOG SVW Raya Collection Vol.1
                <div class="titiktigavertikal" aria-hidden="true">
                    <span></span><span></span><span></span>
                </div>
            </a>

            <a href="https://shopee.co.id/simplyveewee" target="_blank" rel="noopener noreferrer" class="tombollink">
                SHOPEE
                <div class="titiktigavertikal" aria-hidden="true">
                    <span></span><span></span><span></span>
                </div>
            </a>

            <a href="https://www.tokopedia.com/simplyveewee" target="_blank" rel="noopener noreferrer" class="tombollink">
                TOKOPEDIA
                <div class="titiktigavertikal" aria-hidden="true">
                    <span></span><span></span><span></span>
                </div>
            </a>

            <a href="https://www.tiktok.com/@simplyveewee" target="_blank" rel="noopener noreferrer" class="tombollink">
                SIMPLYVEEWEE OFFICIAL TIKTOK
                <div class="titiktigavertikal" aria-hidden="true">
                    <span></span><span></span><span></span>
                </div>
            </a>

            <a href="https://wa.me/628100000001" target="_blank" rel="noopener noreferrer" class="tombollink">
                ADMIN 1
                <div class="titiktigavertikal" aria-hidden="true">
                    <span></span><span></span><span></span>
                </div>
            </a>

            <a href="https://wa.me/628100000002" target="_blank" rel="noopener noreferrer" class="tombollink">
                ADMIN 2
                <div class="titiktigavertikal" aria-hidden="true">
                    <span></span><span></span><span></span>
                </div>
            </a>

        </div>

        <div class="pendorongbawah"></div>

        <div class="wadahtombolbergabung">
            <a href="https://linktr.ee/simplyveewee" target="_blank" rel="noopener noreferrer" class="tombolbergabung">
                Join simplyveewee on Linktree
            </a>
        </div>

        <div class="footerhalaman">
            <a href="#">Cookie Preferences</a>
            <span class="pemisah">·</span>
            <a href="#">Report</a>
            <span class="pemisah">·</span>
            <a href="#">Privacy</a>
            <span class="pemisah">·</span>
            <a href="#">Explore</a>
        </div>

    </div>

</body>

</html>
