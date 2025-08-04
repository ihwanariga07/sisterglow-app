@extends('layouts.app')

@section('title', 'Beranda | SisterGlow')

@section('content')
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    section {
        padding: 80px 0;
    }

    .hero {
        background: url('/images/hero.jpg') center/cover no-repeat;
        color: white;
        text-align: center;
        padding: 160px 20px;
        position: relative;
    }

    .hero::before {
        content: "";
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(255, 192, 203, 0.6); /* pink transparan */
        z-index: 0;
    }

    .hero .content {
        position: relative;
        z-index: 1;
    }

    .hero h1 {
        font-size: 48px;
        font-weight: bold;
    }

    .hero p {
        font-size: 20px;
    }

    .btn-pink {
        background-color: #FF6F91;
        border: none;
        padding: 10px 30px;
        color: white;
        font-weight: bold;
        border-radius: 30px;
    }

    .section-title {
        font-size: 32px;
        font-weight: 600;
        text-align: center;
        margin-bottom: 50px;
        color: #FF6F91;
    }

    .card-box {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        padding: 25px;
        margin-bottom: 30px;
        transition: 0.3s;
    }

    .card-box:hover {
        transform: translateY(-5px);
    }

    .img-feature {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 15px;
    }
</style>

<!-- HERO -->
<section class="hero">
    <div class="content">
        <h1>Selamat Datang di SisterGlow</h1>
        <p>Perawatan kulit & tubuh agar tampil lebih glowing dan percaya diri</p>
        <a href="#layanan" class="btn btn-pink mt-3">Lihat Layanan</a>
    </div>
</section>

<!-- TENTANG KAMI -->
<section id="tentang">
    <div class="container">
        <h2 class="section-title">Tentang Kami</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="/assets/images/home/tentang.jpg" alt="tentang" class="img-feature">
            </div>
            <div class="col-md-6">
                <p>
                    SisterGlow adalah klinik kecantikan yang menghadirkan perawatan modern dengan hasil nyata. 
                    Kami memberikan layanan terbaik dalam suasana nyaman dan bersih, serta ditangani oleh tenaga profesional.
                </p>
                <p>
                    Fokus kami adalah membantu Anda tampil lebih glowing, sehat, dan percaya diri!
                </p>
            </div>
        </div>
    </div>
</section>

<!-- LAYANAN -->
<section id="layanan" style="background-color: #363636ff;">
    <div class="container">
        <h2 class="section-title">Layanan Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card-box text-center">
                    <img src="/assets/images/home/layanan1.jpg" alt="Facial" class="img-feature">
                    <h5>Facial Treatment</h5>
                    <p>Membersihkan wajah secara mendalam, membuat kulit lebih cerah dan halus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box text-center">
                    <img src="/assets/images/home/layanan2.jpg" alt="Spa" class="img-feature">
                    <h5>Body Spa</h5>
                    <p>Relaksasi tubuh dengan pijatan aromaterapi, menghilangkan stres dan kelelahan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box text-center">
                    <img src="/assets/images/home/layanan3.jpg" alt="Laser" class="img-feature">
                    <h5>Laser Wajah</h5>
                    <p>Mengurangi flek hitam, jerawat, dan bekas luka dengan teknologi laser modern.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONI -->
<section id="testimoni">
    <div class="container">
        <h2 class="section-title">Apa Kata Mereka?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card-box">
                    <p>"Setelah facial di SisterGlow, kulitku lebih bersih dan cerah. Thank you!"</p>
                    <strong>- Dinda, 23 Tahun</strong>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <p>"Suka banget suasananya, nyaman dan staff-nya ramah semua. Recomended!"</p>
                    <strong>- Ayu, 27 Tahun</strong>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box">
                    <p>"Laser treatment-nya bikin kulitku glowing. Pasti balik lagi!"</p>
                    <strong>- Putri, 29 Tahun</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KONTAK -->
<section id="kontak" style="background-color: #4d4d4dff;">
    <div class="container">
        <h2 class="section-title">Hubungi Kami</h2>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email Anda" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Pesan Anda" required></textarea>
                    </div>
                    <button class="btn btn-pink">Kirim Pesan</button>
                </form>
            </div>
            <div class="col-md-6">
                <h5>Alamat:</h5>
                <p>Jl. Cantik No. 1, Banda Aceh</p>
                <p><strong>WhatsApp:</strong> 0812-3456-7890</p>
                <p><strong>Email:</strong> hello@sisterglow.com</p>
            </div>
        </div>
    </div>
</section>
@endsection
