<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Warung Nenek Yunina</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    scroll-behavior:smooth;
}

.pesan-btn{
    width:100%;
    margin-top:15px;
    padding:12px;
    border:none;
    border-radius:15px;
    background:#1F4D36;
    color:white;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.pesan-btn:hover{
    background:#D4A373;
    transform:scale(1.03);
}

body{
    font-family:'Poppins',sans-serif;
    background:#f7f1e8;
    color:#2d2d2d;
}

/* NAVBAR */

nav{
    width:100%;
    position:fixed;
    top:0;
    left:0;
    z-index:1000;
    padding:20px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:rgba(0,0,0,0.3);
    backdrop-filter:blur(10px);
}

nav h2{
    color:#f5d28c;
}

nav ul{
    display:flex;
    list-style:none;
    gap:30px;
}

nav ul li a{
    color:white;
    text-decoration:none;
    font-weight:500;
    transition:0.3s;
}

nav ul li a:hover{
    color:#f5d28c;
}

/* HERO */

.hero{
    min-height:100vh;
    background:
    linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.6)),
    url('https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=1200');
    background-size:cover;
    background-position:center;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
    padding:40px;
    color:white;
}

.hero h1{
    font-size:75px;
    color:#f5d28c;
    margin-bottom:20px;
}

.hero h3{
    font-size:30px;
    margin-bottom:20px;
}

.hero p{
    font-size:22px;
    max-width:800px;
    line-height:1.8;
    margin-bottom:35px;
}

.hero-btn{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
    justify-content:center;
}

.btn{
    padding:15px 35px;
    border:none;
    border-radius:40px;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
    font-weight:bold;
}

.btn1{
    background:#f5d28c;
    color:#1F4D36;
}

.btn2{
    background:transparent;
    border:2px solid white;
    color:white;
}

.btn:hover{
    transform:translateY(-5px);
}

/* SECTION TITLE */

.title{
    text-align:center;
    margin-bottom:50px;
}

.title h2{
    font-size:45px;
    color:#1F4D36;
    margin-bottom:15px;
}

.title p{
    color:#666;
}

/* GRID */

.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:30px;
    padding:60px;
}

/* CARD */

.card{
    background:white;
    border-radius:25px;
    padding:30px;
    box-shadow:0 10px 30px rgba(0,0,0,0.1);
    transition:0.3s;
    overflow:hidden;
    position:relative;

    display:flex;
    flex-direction:column;
    justify-content:space-between;

    min-height:760px;
}

.card a{
    margin-top:auto;
}

.card:hover{
    transform:translateY(-10px);
}

.card::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:7px;
    background:linear-gradient(to right,#1F4D36,#D4A373);
}

.emoji{
    text-align:center;
    margin-bottom:15px;
}

.emoji img{
    width:100%;
    height:220px;
    object-fit:cover;
    border-radius:20px;
}

.card h2{
    color:#1F4D36;
    margin-bottom:10px;
}

small{
    color:#888;
    display:block;
    margin-bottom:15px;
}

.card p{
    margin-bottom:10px;
    line-height:1.7;
}

/* STORY */

.story{
    padding:80px 60px;
    background:#fff;
    text-align:center;
}

.story-box{
    max-width:900px;
    margin:auto;
}

.story h2{
    font-size:45px;
    color:#1F4D36;
    margin-bottom:30px;
}

.story p{
    line-height:2;
    font-size:18px;
    color:#555;
}

/* ARTICLE */

.article{
    padding:80px 60px;
}

.article-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:30px;
    align-items:stretch;
}

.article-card{
    background:white;
    padding:30px;
    border-radius:25px;
    box-shadow:0 10px 30px rgba(0,0,0,0.1);
    transition:0.3s;

    display:flex;
    flex-direction:column;
    justify-content:flex-start;

    min-height:320px;
}

.article-card:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 35px rgba(0,0,0,0.15);
}

.article-card h3{
    color:#1F4D36;
    margin-bottom:15px;
}

.article-card p{
    line-height:1.9;
    color:#555;
    margin-top:10px;
}

.article-card img{
    width:100%;
    height:220px;
    object-fit:cover;
    border-radius:20px;
    margin-bottom:20px;
}

/* TESTIMONI */

.testimoni{
    padding:80px 60px;
    background:#fff;
}

.testi-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:30px;
}

.testi{
    background:#f7f1e8;
    padding:30px;
    border-radius:25px;
}

/* FOOTER */

footer{
    background:#1F4D36;
    color:white;
    padding:60px 30px 30px;
}

.footer-container{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:40px;
    flex-wrap:wrap;
    max-width:1200px;
    margin:auto;
}

.footer-box{
    flex:1;
    min-width:250px;
}

.footer-box h2{
    color:#f5d28c;
    margin-bottom:15px;
}

.footer-box h3{
    color:#f5d28c;
    margin-bottom:15px;
}

.footer-box p{
    margin-bottom:10px;
    line-height:1.8;
}

.footer-desc{
    max-width:400px;
}

.copyright{
    margin-top:40px;
    border-top:1px solid rgba(255,255,255,0.2);
    padding-top:20px;
    font-size:14px;
    color:#ddd;
}

/* RESPONSIVE */

@media(max-width:768px){

nav{
    padding:20px;
}

nav ul{
    gap:15px;
    font-size:14px;
}

.hero h1{
    font-size:45px;
}

.hero h3{
    font-size:22px;
}

.hero p{
    font-size:18px;
}

.grid,
.article,
.story,
.testimoni{
    padding:20px;
}

.title h2{
    font-size:35px;
}

}

</style>
</head>

<body>

<!-- NAVBAR -->

<nav>

<h2>🌿 Nenek Yunina</h2>

<ul>
<li><a href="#home">Home</a></li>
<li><a href="#rempah">Rempah</a></li>
<li><a href="#produk">Produk</a></li>
<li><a href="#artikel">Artikel</a></li>
<li><a href="#kontak">Kontak</a></li>
</ul>

</nav>

<!-- HERO -->

<div class="hero" id="home">

<h3>Rahasia Rempah Nusantara ✨</h3>

<h1>Warung Nenek Yunina</h1>

<p>
Temukan rempah pilihan, resep tradisional, dan aroma khas
yang diwariskan turun-temurun oleh Nenek Yunina.
</p>

<div class="hero-btn">

<a href="#rempah">
<button class="btn btn1">
Jelajahi Rempah
</button>
</a>

<a href="#produk">
<button class="btn btn2">
Lihat Produk
</button>
</a>

</div>

</div>

<!-- TITLE -->

<div class="title" id="rempah" style="margin-top:70px;">
<h2>Explore Rempah 🌿</h2>
<p>Aroma tradisional dengan sentuhan modern</p>
</div>

<!-- GRID REMPAH -->

<div class="grid">

@if($rempahs->count())

@foreach($rempahs as $r)

<div class="card">

<div class="emoji">
    <img src="{{ asset('images/' . $r->gambar) }}" width="120">
</div>

<h2>{{ $r->nama }}</h2>

<small>{{ $r->latin }}</small>

<p>{{ $r->deskripsi }}</p>

<p><b>Asal:</b> {{ $r->asal }}</p>

<p><b>Rasa:</b> {{ $r->rasa }}</p>

<p><b>Manfaat:</b> {{ $r->manfaat }}</p>

<p><b>Harga:</b> Rp. {{ number_format($r->harga, 0, ',', '.') }}</p>
<a href="https://wa.me/6282179485885?text=Saya%20ingin%20memesan%20{{ $r->nama }}"
target="_blank">

<button class="pesan-btn">
Pesan Sekarang
</button>

</a>

</div>

@endforeach

@else

<p style="text-align:center;">
Belum ada data rempah.
</p>

@endif

</div>

<!-- PRODUK -->

<div class="article" id="produk">

<div class="title">
<h2>Produk Premium 🛍️</h2>
<p>Produk herbal pilihan khas Warung Nenek Yunina</p>
</div>

<div class="article-grid">

<div class="article-card">

<img src="{{ asset('images/wedang jahe.webp') }}" alt="Wedang Jahe">

<h3>Wedang Jahe</h3>

<p>
Minuman herbal hangat dengan jahe pilihan Nusantara.
</p>
<a href="https://wa.me/6282179485885?text=Saya%20ingin%20memesan%20Wedang%20Jahe"
target="_blank">

<button class="pesan-btn">
Pesan Produk
</button>

</a>

</div>

<div class="article-card">

<img src="{{ asset('images/' . ($r->gambar ?? 'default.jpg')) }}" width="120">

<h3>Teh Rempah</h3>

<p>
Perpaduan kayu manis, cengkeh, dan serai yang menenangkan.
</p>
<a href="https://wa.me/6282179485885?text=Saya%20ingin%20memesan%20Wedang%20Jahe"
target="_blank">

<button class="pesan-btn">
Pesan Produk
</button>

</a>

</div>

<div class="article-card">

<img src="{{ asset('images/paket jamu tradisional.webp') }}" alt="Jamu">

<h3>Paket Jamu Tradisional</h3>

<p>
Racikan tradisional untuk menjaga kesehatan tubuh.
</p>
<a href="https://wa.me/6282179485885?text=Saya%20ingin%20memesan%20Paket%20Jamu%20Tradisional"
target="_blank">

<button class="pesan-btn">
Pesan Produk
</button>

</a>

</div>

</div>

<!-- STORY -->

<div class="story">

<div class="story-box">

<h2>Cerita Nenek Yunina ❤️</h2>

<p>
Nenek Yunina berjualan rempah-rempah sejak tahun 2004
sudah 22 tahun lamanya yang dia jual di pasar tradisional. 
Berawal dari dapur kecil dan aroma jahe hangat,
Nenek Yunina percaya bahwa rempah bukan sekadar bumbu,
tetapi warisan kesehatan keluarga yang harus dijaga.
Dengan sentuhan modern dan resep tradisional,
kami menghadirkan pengalaman rempah Nusantara
yang hangat, alami, dan penuh cerita.
</p>

</div>

</div>

<!-- ARTICLE -->

<div class="article" id="artikel">

<div class="title">
<h2>Artikel Menarik ✨</h2>
<p>Fakta unik dan cerita rempah Nusantara</p>
</div>

<div class="article-grid">

<div class="article-card">
<h3>Kenapa Orang Tua Dulu Jarang Sakit?</h3>
<p>
Rahasia kesehatan tradisional ternyata berasal dari rempah yang sering digunakan setiap hari.
</p>
</div>

<div class="article-card">
<h3>Rahasia Wedang Tradisional</h3>
<p>
Minuman hangat tradisional dipercaya membantu menjaga daya tahan tubuh.
</p>
</div>

<div class="article-card">
<h3>Khasiat Kunyit untuk Kesehatan</h3>
<p>
Kunyit dikenal sebagai rempah kaya antioksidan dan dipercaya membantu menjaga daya tahan tubuh serta kesehatan pencernaan. Selain dijadikan bumbu masakan, kunyit juga sering diolah menjadi jamu tradisional.
</p>
</div>

<div class="article-card">
<h3>3 Rempah Saat Musim Hujan</h3>
<p>
Jahe, kunyit, dan kayu manis menjadi pilihan favorit untuk menghangatkan tubuh.
</p>
</div>

<div class="article-card">
<h3>Serai, Rahasia Aroma Masakan Nusantara</h3>
<p>
Serai memiliki aroma segar yang khas dan sering digunakan dalam berbagai masakan Indonesia. Selain menambah cita rasa, serai juga dipercaya membantu tubuh menjadi lebih rileks.
</p>
</div>

<div class="article-card">
<h3>Jahe Merah dan Manfaatnya Saat Cuaca Dingin</h3>
<p>
Jahe merah terkenal karena sensasi hangatnya yang kuat. Banyak masyarakat menggunakan jahe merah sebagai minuman herbal untuk membantu menghangatkan tubuh ketika musim hujan.
</p>
</div>

<div class="article-card">
<h3>Daun Jeruk Bikin Masakan Lebih Wangi</h3>
<p>
Daun jeruk sering digunakan dalam sambal, gulai, dan berbagai makanan berkuah. Aroma segarnya mampu membuat masakan terasa lebih nikmat dan menggugah selera.
</p>
</div>

<div class="article-card">
<h3>Kencur, Bumbu Tradisional yang Kaya Manfaat</h3>
<p>
Kencur tidak hanya digunakan untuk bumbu dapur, tetapi juga menjadi bahan utama jamu beras kencur. Rempah ini dikenal memiliki aroma khas dan membantu menyegarkan tubuh.
</p>
</div>

<div class="article-card">
<h3>Lengkuas dalam Masakan Tradisional Indonesia</h3>
<p>
Lengkuas atau laos sering dipakai dalam rendang, opor, dan sayur lodeh. Rasanya yang khas membuat masakan Nusantara semakin kaya rasa dan lezat.
</p>
</div>

<div class="article-card">
<h3>Daun Salam, Pelengkap Masakan Rumahan</h3>
<p>
Daun salam menjadi salah satu rempah wajib di dapur Indonesia. Aromanya yang lembut membuat masakan seperti semur dan nasi uduk terasa lebih nikmat.
</p>
</div>

<div class="article-card">
<h3>Rempah Nusantara Mendunia</h3>
<p>
Indonesia dikenal sebagai salah satu negara penghasil rempah terbesar sejak zaman dahulu. Kekayaan rempah Nusantara bahkan pernah menarik perhatian bangsa-bangsa Eropa untuk datang berdagang ke Indonesia.
</p>
</div>

<div class="article-card">
<h3>Kenapa Rempah Indonesia Sangat Terkenal? 🌿</h3>
<p>
Rempah-rempah Indonesia terkenal karena memiliki aroma yang kuat, rasa yang khas, dan manfaat yang beragam bagi kesehatan. Faktor iklim tropis dan tanah yang subur membuat tanaman rempah tumbuh dengan kualitas terbaik. 
</p>
</div>

</div>

</div>

<!-- TESTIMONI -->

<div class="testimoni">

<div class="title">
<h2>Testimoni Pelanggan 💬</h2>
<p>Hangatnya tradisi dalam setiap aroma</p>
</div>

<div class="testi-grid">

<div class="testi">
<p>
“Website-nya aesthetic banget dan bikin penasaran mencoba semua produknya.”
</p>
<br>
<b>- Rina</b>
</div>

<div class="testi">
<p>
“Rempahnya terasa premium dan tampilannya modern banget.”
</p>
<br>
<b>- Aldi</b>
</div>

</div>

</div>

<!-- FOOTER -->

<footer id="kontak">

<div class="footer-container">

    <div class="footer-box">
        <h2>Warung Nenek Yunina 🌿</h2>
        <p class="footer-desc">
            Hangatnya Tradisi Dalam Setiap Aroma.
        </p>
    </div>

    <div class="footer-box">
        <h3>Kontak</h3>

        <p>📍 Jln Sudirman, Pasar Tradisional Modern Kota Prabumulih, Sumatera Selatan</p>

        <p>📞 0821-7948-5885</p>

        <p>📧 yuninayun@gmail.com</p>
    </div>

</div>

<div class="copyright">
    © 2026 Warung Nenek Yunina - All Rights Reserved
</div>

</footer>

</body>
</html>