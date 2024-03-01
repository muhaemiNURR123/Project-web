@extends('layouts.app')

@section('content')
<style>
    .content-marker {
    width: 1rem!important;
    height: 80px;
    background: rgba(248, 211, 37, 1);
    border-radius: 0 10px 10px 0;
    z-index: 10;
    position: absolute;
}

.btn-animate{
    margin-left: 80px;
}
    .btn:link,
.btn:visited {
    text-transform: uppercase;
    text-decoration: none;
    display: inline-block;
    border-radius: 100px;
    transition: all .2s;
    position: absolute;
}
.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px #ffffff;
}

.btn:active {
    transform: translateY(-1px);
    box-shadow: 0 5px 10px #ffffff;
}

.btn::after {
    content: "";
    display: inline-block;
    height: 100%;
    width: 100%;
    border-radius: 100px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all .4s;
}

.btn:hover::after {
    transform: scaleX(1.4) scaleY(1.6);
    opacity: 0;
}

@keyframes moveInBottom {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }

    100% {
        opacity: 1;
        transform: translateY(0px);
    }
}
</style>
    <div class="min-vh-90 backgroundimage">
        <div class="vh-100 bg-gradient-dark opacity-6">
            <div class="container">
                <div class="row py-6">
                    <div class="col ">
                        <div class="py-9" style="margin-bottom: 1.7em;">
                            <h4 class="Heading-1" style="font-size: 3rem; color: rgb(255, 255, 255); width: 85%">Sebuah Mesin
                                IT yang memiliki kemampuan teknologi
                                <span style="color: rgba(248, 211, 37, 1)">Big Data</span>
                                yang proses analisis dan
                                <span style="color: rgba(248, 211, 37, 1)">pemetaan politik dari berbagai sumber data di
                                    internet.</span>
                                <img src="{{ asset('images/Line1.png') }}" width="85%" height="10px" />
                            </h4>
                            <button class="btn" style="background-color: rgba(25, 131, 197, 1); color: white; ">Hubungi
                                Kami</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-marker" style="margin-top: -40px"></div>
    <div class="container">
        <div class="section text-center" style="margin-left: 30%; width: 50%">
            <h2 class="title"><i style="color: rgba(25, 131, 197, 1)">Fitur</i>
               <p style="color:rgba(0, 0, 0, 0.7)"><b>Buat Keputusan Lebih Baik Dengan Bantuan Data</b></p>
                <p style="color:rgba(0, 0, 0, 0.7); margin-top: -20px">Manfaatkan kekuatan big data dengan bantuan kecerdasan buatan untuk membuat keputusan organisasi yang optimal
                </p>
            </h2>
        </div>
        <div>
            <div style="position: relative; height: fit-content;">
                <div class="row" style="row-gap: 30px; margin-left: 10%; margin-top: -10%;">
                    <div class="col-4 sc-dnqmqq cybPjs" style="height: 30rem; margin-top: 20%; margin-left: 100px">
                        <div class="d-flex justify-content-center align-items-center"
                            style="height: 20%; background-position: center center; background-repeat: no-repeat; background-size: cover; border-radius: 10px 10px 0px 0px;">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/DM.jpg') }}" alt="logo-0"
                                    style="position: relative; width: 110%; height: 110%; border-radius: 1rem">
                            </div>
                        </div>
                        <div
                            style="position: relative; padding: 2rem; color: rgb(255, 255, 255); background: rgba(25, 131, 197, 1); height: 50%; width: 110%; border-radius: 1rem;">
                            <p class="Text-Body-3-4"
                                style="font-family: &quot;Titillium Web&quot;; font-size: 18px; font-weight: 700;">
                                <img src="{{ asset('images/datamining.png') }}" width="30" height="30" />
                               Datamining
                            </p>
                            <span>Memproses Data data Politik dan Sosial Media yang masuk</span>
                            <div>
                                <a href="#" class="btn btn-animate"
                                style="background-color: rgba(248, 211, 37, 1); color: rgb(1, 1, 1); font-size: 10px; border-radius: 5px; margin-top: 55px; ">PELAJARI
                                SELENGKAPNYA</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-4 sc-dnqmqq cybPjs" style="height: 30rem; margin-top: 20%; margin-left: 100px">
                        <div class="d-flex justify-content-center align-items-center"
                            style="height: 20%; background-position: center center; background-repeat: no-repeat; background-size: cover; border-radius: 10px 10px 0px 0px;">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/foto_npm_api.jpg') }}" alt="logo-0"
                                    style="position: relative; width: 110%; height: 110%; border-radius: 1rem">
                            </div>
                        </div>
                        <div
                            style="position: relative; padding: 2rem; color: rgb(255, 255, 255); background: rgba(25, 131, 197, 1); height: 50%; width: 110%; border-radius: 1rem;">
                            <p class="Text-Body-3-4"
                                style="font-family: &quot;Titillium Web&quot;; font-size: 18px; font-weight: 700;">
                                <img src="{{ asset('images/NLP_API.png') }}" width="30" height="30" />
                                NLP API
                            </p>
                            <span>Menjadikan aplikasi Anda memiliki kemampuan untuk melakukan pemrosesan data teks Bahasa Indonesia dalam skala besar</span>
                            <div>
                                <a href="#" class="btn btn-animate"
                                    style="background-color: rgba(248, 211, 37, 1); color: rgb(1, 1, 1); font-size: 10px; border-radius: 5px; margin-top: 30px;">PELAJARI
                                    SELENGKAPNYA</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-4 sc-dnqmqq cybPjs" style="height: 30rem; margin-left: 100px">
                        <div class="d-flex justify-content-center align-items-center"
                            style="height: 20%; background-position: center center; background-repeat: no-repeat; background-size: cover; border-radius: 10px 10px 0px 0px;">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/AH.jpg') }}" alt="logo-0"
                                style="position: relative; width: 110%; height: 110%; border-radius: 1rem">
                            </div>
                        </div>
                        <div
                            style="position: relative; padding: 2rem; color: rgb(255, 255, 255); background: rgba(25, 131, 197, 1); height: 50%; width: 110%; border-radius: 1rem;">
                            <p class="Text-Body-3-4"
                                style="font-family: &quot;Titillium Web&quot;; font-size: 18px; font-weight: 700;">
                                <img src="{{ asset('images/anti_hoax.png') }}" width="30" height="30" />
                                Anti Hoax
                            </p>
                            <span>Flatform identifikasi dan pelaporan informasi hoax secra cepat dan akurat</span>
                            <div>
                                <a href="#" class="btn btn-animate"
                                style="background-color: rgba(248, 211, 37, 1); color: rgb(1, 1, 1); font-size: 10px; border-radius: 5px; margin-top: 55px;">PELAJARI
                                SELENGKAPNYA</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 sc-dnqmqq cybPjs" style="height: 30rem; margin-left: 100px">
                        <div class="d-flex justify-content-center align-items-center"
                            style="height: 20%; background-position: center center; background-repeat: no-repeat; background-size: cover; border-radius: 10px 10px 0px 0px;">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/jb.jpg') }}" alt="logo-0"
                                    style="position: relative; width: 110%; height:110%; border-radius: 1rem">
                            </div>
                        </div>
                        <div
                            style="position: relative; padding: 2rem; color: rgb(255, 255, 255); background: rgba(25, 131, 197, 1); height: 50%; width: 110%; border-radius: 1rem;">
                            <p class="Text-Body-3-4"
                                style="font-family: &quot;Titillium Web&quot;; font-size: 18px; font-weight: 700;">
                                <img src="{{ asset('images/JB_insight.png') }}" width="30" height="30" />
                                JB Insight
                            </p>
                            <span>JB insight adalah aplikasi untuk menganalisa komentar-komentar pada sosmed Facebook, YouTube, Instagram, TikTok, Twitter.</span>
                            <div>
                                <a href="#" class="btn btn-animate"
                                    style="background-color: rgba(248, 211, 37, 1); color: rgb(1, 1, 1); font-size: 10px; border-radius: 5px; margin-top: 30px; ">PELAJARI
                                    SELENGKAPNYA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-marker"
    style="margin-top: -40rem; ">
    </div>
    <div style="width: 100%; height: 9px; background-color: rgba(25, 131, 197, 1);"></div>
    <footer class="row row-cols- row-cols-sm-2 row-cols-md-5 py-1 my-5">
        <div class="col mb-3">
            <a class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" >
                </svg>
                <img src="{{ asset('images/logo_jayabaya.png') }}" width="150px" height="50px" />
            </a>
            <div class="img" style="margin-top: 30px; margin-left: 40px">
                <img src="{{ asset('images/location.png') }}" width= "30px"; height="25px" />
            </div>
            <div class="img" style="margin-left: 40px">
                <img src="{{ asset('images/email.png') }}" width= "30px"; height="25px" />
            </div>
        </div>
        <div class="col mb-3" style="margin-left: 10%">
            <h5>Fitur</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Datamining</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">NLP API</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Anti Hoax</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">JB Insight</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Perusahaan</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tentang Kami</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Karrier</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Mitra</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Pusat Pembelajaran</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Blog</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Berita</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Publikasi</a></li>
            </ul>
        </div>
        <div class="text-center p-4" style="background-color: rgba(146, 110, 110, 0.05); margin-top: 20px">
            © 2024 Copyright:
            <a class="text-reset fw-bold">Jayabaya Engine X</a>
        </div>
        </div>
    </footer>
@endsection
