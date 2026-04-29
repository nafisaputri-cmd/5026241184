    <!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Utama - Tugas Pemrograman Web</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg: #0d0d0d;
            --card: #161616;
            --border: #2a2a2a;
            --accent: #f0e040;
            --accent2: #40e0c8;
            --text: #f0ede8;
            --muted: #888;
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
            min-height: 100vh;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.5rem 3rem;
            border-bottom: 1px solid var(--border);
        }

        nav .logo {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 1.2rem;
            letter-spacing: 0.08em;
            color: var(--accent);
            text-decoration: none;
        }

        nav .tag {
            font-size: 0.78rem;
            color: var(--muted);
            border: 1px solid var(--border);
            padding: 0.3rem 0.8rem;
            border-radius: 999px;
        }

        .hero {
            padding: 5rem 3rem 3rem;
            max-width: 1100px;
            margin: 0 auto;
        }

        .hero-label {
            font-size: 0.78rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--accent2);
            margin-bottom: 1rem;
        }

        .hero h1 {
            font-family: 'Syne', sans-serif;
            font-size: clamp(2.4rem, 5vw, 4.2rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.2rem;
        }

        .hero h1 span { color: var(--accent); }

        .hero p {
            color: var(--muted);
            font-size: 1rem;
            max-width: 500px;
            line-height: 1.7;
        }

        .grid-section {
            max-width: 1100px;
            margin: 0 auto;
            padding: 2rem 3rem 5rem;
        }

        .pertemuan-label {
            font-size: 0.75rem;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--muted);
            margin: 2rem 0 1rem;
            padding-bottom: 0.75rem;
            border-bottom: 1px solid var(--border);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1px;
            background: var(--border);
            border: 1px solid var(--border);
        }

        .card {
            background: var(--card);
            padding: 2rem;
            text-decoration: none;
            color: var(--text);
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            transition: background 0.2s;
            position: relative;
            overflow: hidden;
        }

        .card::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0;
            width: 0; height: 2px;
            background: var(--accent);
            transition: width 0.3s ease;
        }

        .card:hover { background: #1d1d1d; }
        .card:hover::after { width: 100%; }

        .card-number {
            font-family: 'Syne', sans-serif;
            font-size: 0.72rem;
            letter-spacing: 0.1em;
            color: var(--accent);
            font-weight: 600;
        }

        .card-title {
            font-family: 'Syne', sans-serif;
            font-size: 1.1rem;
            font-weight: 700;
            line-height: 1.3;
        }

        .card-desc {
            font-size: 0.85rem;
            color: var(--muted);
            line-height: 1.6;
            flex: 1;
        }

        .card-arrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.8rem;
            color: var(--accent2);
            font-weight: 500;
            margin-top: 0.5rem;
            transition: gap 0.2s;
        }

        .card:hover .card-arrow { gap: 0.8rem; }

        footer {
            text-align: center;
            padding: 2rem;
            font-size: 0.8rem;
            color: var(--muted);
            border-top: 1px solid var(--border);
        }

        @media (max-width: 640px) {
            nav, .hero, .grid-section { padding-left: 1.5rem; padding-right: 1.5rem; }
            .grid { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>

    <nav>
        <a href="/" class="logo">PEMWEB</a>
        <span class="tag">Nafisa Putri Az Zahroh</span>
    </nav>

    <div class="hero">
        <p class="hero-label">Tugas Pemrograman Web</p>
        <h1>Kumpulan <span>Materi</span><br>Route &amp; View</h1>
        <p>Pilih pertemuan di bawah ini untuk membuka halaman yang sesuai. Setiap halaman dibuat menggunakan Laravel Blade.</p>
    </div>

    <div class="grid-section">

        {{-- Pertemuan 1 --}}
        <p class="pertemuan-label">Pertemuan 1</p>
        <div class="grid">
            <a href="/pertemuan1-intro" class="card">
                <span class="card-number">MEET 01</span>
                <p class="card-title">Pengenalan HTML</p>
                <p class="card-desc">Halaman intro dasar HTML. Menampilkan heading, paragraf, dan gambar dari ITS.</p>
                <span class="card-arrow">Buka halaman →</span>
            </a>
        </div>

        {{-- Pertemuan 2 --}}
        <p class="pertemuan-label">Pertemuan 2</p>
        <div class="grid">
            <a href="/pertemuan2-news" class="card">
                <span class="card-number">MEET 02</span>
                <p class="card-title">Berita ITS - RoboDog</p>
                <p class="card-desc">Halaman artikel berita tentang inovasi RoboDog ITS bersama Indosat, Nokia, dan NVIDIA.</p>
                <span class="card-arrow">Buka halaman →</span>
            </a>
        </div>

        {{-- Pertemuan 3 --}}
        <p class="pertemuan-label">Pertemuan 3</p>
        <div class="grid">
            <a href="/pertemuan3-responsive" class="card">
                <span class="card-number">MEET 03 — A</span>
                <p class="card-title">Responsive Web & Danantara</p>
                <p class="card-desc">Latihan Bootstrap grid responsif dengan konten tentang Danantara Indonesia.</p>
                <span class="card-arrow">Buka halaman →</span>
            </a>
            <a href="/pertemuan3-nyamnyam" class="card">
                <span class="card-number">MEET 03 — B</span>
                <p class="card-title">Resto NyamNyam</p>
                <p class="card-desc">Halaman order makanan online dengan tab menu: Makanan, Minuman, Snack, dan Promo.</p>
                <span class="card-arrow">Buka halaman →</span>
            </a>
        </div>

        {{-- Pertemuan 4 --}}
        <p class="pertemuan-label">Pertemuan 4</p>
        <div class="grid">
            <a href="/pertemuan4-5026241184" class="card">
                <span class="card-number">MEET 04</span>
                <p class="card-title">Spotify - Select a Plan</p>
                <p class="card-desc">Halaman pemilihan paket berlangganan Spotify dengan tiga pilihan plan.</p>
                <span class="card-arrow">Buka halaman →</span>
            </a>
        </div>

        {{-- Pertemuan 5 --}}
        <p class="pertemuan-label">Pertemuan 5</p>
        <div class="grid">
            <a href="/pertemuan5-dell" class="card">
                <span class="card-number">MEET 05 — A</span>
                <p class="card-title">DELL Technologies</p>
                <p class="card-desc">Landing page produk DELL. Menampilkan hero section, about us, dan fitur unggulan XPS.</p>
                <span class="card-arrow">Buka halaman →</span>
            </a>
            <a href="/pertemuan5-simply" class="card">
                <span class="card-number">MEET 05 — B</span>
                <p class="card-title">Linktree - @simplyveewee</p>
                <p class="card-desc">Halaman Linktree untuk akun @simplyveewee dengan daftar link ke toko dan media sosial.</p>
                <span class="card-arrow">Buka halaman →</span>
            </a>
        </div>

    </div>

    <footer>
        Tugas Pemrograman Web &mdash; Route &amp; View &mdash; Nafisa Putri Az Zahroh
    </footer>

</body>

</html>
