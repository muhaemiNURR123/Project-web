@extends('layouts.app')

@section('content')
    <div class="min-vh-90 backgroundimage">
        <div class="vh-100 bg-gradient-dark opacity-6">
            <div class="container">
                <div class="row py-6">
                    <div class="col ">
                        <div class="py-9" style="margin-bottom: 1.7em;">
                            <h4 class="Heading-1" style="font-size: 3rem; color: rgb(255, 255, 255); width: 85%">Sebuah Mesin IT yang memiliki kemampuan teknologi
                                <span style="color: rgba(248, 211, 37, 1)">Big Data</span>
                                yang proses analisis dan 
                                <span style="color: rgba(248, 211, 37, 1)">pemetaan politik dari berbagai sumber data di internet.</span>
                                <img src="{{ asset('images/Line1.png') }}" width="85%" height="10px" />
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="section text-center">
                <h2 class="title">Your main section here</h2>
            </div>
        </div>
    </div>
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                </svg>
                <img src="{{ asset('images/logo_jayabaya.png') }}" width="150px" height="50px" />
            </a>
            <div class="img" style="margin-top: 30px; margin-left: 40px">
                <img src="{{ asset('images/location.png') }}" width= "30px"; height="25px"/>
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
