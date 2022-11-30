@extends('layout')

@section('content')
<div class="container-fluid hero-header bg-light py-5 mb-5" id="header">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 mb-3 animated slideInDown">TK Ilmu Al-Qur'an Jember</h1>
                <p class="animated slideInDown">Terwujudnya generasi Islam yang berakhlak mulia,mandiri,cerdas kreatif dan ceria serta mendorong pertumbuhannya yang baik,sehat dan bergembira melalui pendidikan yang bermutu.</p>
                <a href="#tentangkami" class="btn btn-primary py-3 px-4 animated slideInDown">Tentang Kami</a>
            </div>
            <div class="col-lg-6 animated fadeIn">
                <img class="img-fluid animated pulse infinite rounded-pill" style="animation-duration: 3s;" src="{{ asset('img/foto-header.jpg') }}"
                    alt="">
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Misi -->
<div class="container-xxl py-5" id="misi">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6">Misi Kami</h1>
            <p class="text-primary fs-5 mb-5">Mencetak generasi yang qur'ani</p>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex align-items-start">
                    <img class="img-fluid flex-shrink-0" src="img/icon-7.png" alt="">
                    <div class="ps-4">
                        <h5 class="mb-3">Membiasakan Diri</h5>
                        <span>Menumbuhkan kebiasaan membaca Al Qur'an sejak dini serta mengamalkan dalam kegiatan sehari-hari.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex align-items-start">
                    <img class="img-fluid flex-shrink-0" src="img/icon-6.png" alt="">
                    <div class="ps-4">
                        <h5 class="mb-3">Berakhlak Mulia</h5>
                        <span>Mewujudkan anak didik yang berakhlak mulia.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex align-items-start">
                    <img class="img-fluid flex-shrink-0" src="img/icon-5.png" alt="">
                    <div class="ps-4">
                        <h5 class="mb-3">Pembinaan Rohani</h5>
                        <span>Membina siswa untuk menjadi mutiara-mutiara Al Qur'an melalui pembiasaan Hafalan Al Qur'an setiap hari.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex align-items-start">
                    <img class="img-fluid flex-shrink-0" src="img/icon-4.png" alt="">
                    <div class="ps-4">
                        <h5 class="mb-3">Bimbingan Sosial</h5>
                        <span>Memberikan bimbingan Islam dalam bersikap,bersosial,dan berbuat baik dalam menjaga kelestarian lingkungan.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="d-flex align-items-start">
                    <img class="img-fluid flex-shrink-0" src="img/icon-8.png" alt="">
                    <div class="ps-4">
                        <h5 class="mb-3">&nbsp;</h5>
                        <span>&nbsp;</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex align-items-start">
                    <img class="img-fluid flex-shrink-0" src="img/icon-3.png" alt="">
                    <div class="ps-4">
                        <h5 class="mb-3">Kasih Sayang & Moral</h5>
                        <span>Memberikan pendidikan dengan penuh kasih sayang dan menanamkan etika moral dan intelektual sejak dini.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Misi End -->

<!-- Populasi -->
<div class="container-xxl bg-light py-5 my-5" id="populasi">
    <div class="container py-5">
        <div class="row g-5 text-center">
            <h1 class="display-6">Populasi TK Ilmu Al-Qur'an</h1>
            <div class="col-lg-6 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                <img class="img-fluid mb-4" src="img/icon-9.png" alt="">
                <h1 class="display-4" data-toggle="counter-up">6</h1>
                <p class="fs-5 text-primary mb-0">Tenaga Pengajar Profesional</p>
            </div>
            <div class="col-lg-6 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid mb-4" src="img/icon-10.png" alt="">
                <h1 class="display-4" data-toggle="counter-up">96</h1>
                <p class="fs-5 text-primary mb-0">Siswa Dalam Bimbingan</p>
            </div>
        </div>
    </div>
</div>
<!-- Populasi End -->

<!-- Unggulan -->
<div class="container-xxl py-5" id="unggulan">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6">Program Unggulan</h1>
            <p class="text-primary fs-5 mb-5">Program unggulan di TK Ilmu Al-Qur'an Jember</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                KEAGAMAAN
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <P>
                                    1.	Tahfidz <br />
                                    2.	TPQ <br />
                                    3.	Praktik Sholat <br />
                                    4.	Hafalan Surah-Surah Pendek <br />
                                    5.	Hafalan Doa Sehari-Hari <br />
                                    6.	Manasik Haji <br />
                                    7.	Hafalan Asmaul Husna
                                </P>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                EXTRA
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <P>
                                    1.	Menggambar Dan Mewarnai <br/>
                                    2.	Menyanyi <br/>
                                    3.	Menari <br/>
                                    4.	Pengenalan Bahasa Inggris <br/> 
                                    5.	Pengenalan Bahasa Arab
                                </P>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                OUTING CLASS
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <P>
                                    1.	Karya Wisata <br />
                                    2.	Out Bond <br />
                                    3.	Kunjungan Ke Instansi Dan Ke Tempat Umum <br />
                                    4.	Demonstrasi 
                                </P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tentang Kami Start -->
<div class="container-xxl bg-light py-5" id="tentangkami">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded-pill" src="{{ asset('img/foto-tentang-kami.jpg') }}" alt="">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h1 class="display-6">Tentang Kami</h1>
                    <p class="text-primary fs-5 mb-4">Mewujudkan generasi Islam yang Qur'ani</p>
                    <p>Tk Ilmu Al Qur'an merupakan salah satu sekolah taman kanak kanak swasta yang ada di kota Jember, yang berlokasi  di Jalan Bandeng No. 01 RT 001 Rw 003 Kelurahan Sempusari Kecamatan Kaliwates Kabupaten Jember.
                    </p>
                    <p class="mb-4">Didirikan pada tanggal 15 juli 2004 oleh Alm. Bapak KH.Sirul Bin Ahmad Khiron dalam naungan Yayasan Pondok Ilmu Al Qur'an Pesantren Internasional.</p>
                    <p class="mb-4">Pelaksanaan proses kegiatan belajar mengajar menggunakan kurikulum seiring dengan dinamika era global dan kemajuan ilmu pengetahuan berdasarkan Al Qur'an dan hadist, sehingga terwujudnya generasi islam yang berakhlak mulia, mandiri, cerdas, kreatif dan seria serta mendorong pertumbuuhannya yang baik, sehat dan bergembira melalui pendidikan yang bermutu.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tentang Kami End -->

@endsection