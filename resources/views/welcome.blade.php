@extends('layouts.app')

@section('content')
    <div class="min-vh-90 backgroundimage">
        <div class="vh-100 bg-gradient-dark opacity-6">
            <div class="container">
                <div class="row py-6">
                    <div class="col ">
                        <div class="py-9" style="margin-bottom: 1.7em;">
                            <h4 class="Heading-1" style="font-size: 2rem; color: rgb(255, 255, 255); width: 75%">Sebuah Mesin IT yang memiliki kemampuan teknologi
                                <span style="color: hsl(62, 80%, 46%)">Big Data</span>
                                yang proses analisis dan 
                                <span style="color: hsl(62, 80%, 46%)">pemetaan politik dari berbagai sumber data di internet.</span>
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
                <img src="{{ asset('images/logo_jayabaya.png') }}" width="90px" height="75px" />
            </a>
            <p class="text-center">© 2022</p>
        </div>
        <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>
        <div class="text-center p-4" style="background-color: rgba(146, 110, 110, 0.05);">
            © 2024 Copyright:
            <a class="text-reset fw-bold">Jayabaya Engine X</a>
          </div>
        </div>
    </footer>
@endsection
