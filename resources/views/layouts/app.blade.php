<!doctype html>
<html lang="en">

<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta  name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Dark mode -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- Material Kit CSS -->
    <!-- dropdown translate -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/material-kit.css', 'resources/js/material-kit.js'])
    @vite(['resources/css/misa-custom.css', 'resources/js/custom.js'])
    @vite(['resources/css/style.css'])
    <style>
        a.biru: {
            color: rgba(25, 131, 197, 1);
            cursor: pointer;
        }

        li.translate: {
            background-color: #ffffff;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="position-sticky z-index-sticky to">
        {{-- <div class="row">
            <div class="col-12">
                
                <!-- End Navbar -->
                <main>
                    <!-- Jangan di hapus, buat conn -->
                    <p type="button" class="hide" id="clearLocalStorage">
                </main>
                <!-- partial -->
                <script src="./script.js"></script>

            </div>
        </div> --}}
        {{-- gedein navbar ubah angka py- --}}
        <nav
            class="navbar navbar-expand-lg  blur border-radius-xl to z-index-fixed shadow position-absolute my-5 py-1 start-0 end-0 mx-4">
            <div class="container-fluid navbar-toggle">
                <img src="{{ asset('images/logo_jayabaya.png') }}" width="150px" height="50px" margin-left="-30px"/>
                <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0" id="navigation">
                    <ul class="navbar-links navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100 d-flex justify-content-end">
                        <li class="nav-item dropdown dropdown-hover mx-3">
                            <a class="nav-link ps-2 d-flex cursor-pointer align-items-center biru" id="dropdownMenuDocs"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Fitur
                                <i class="fa fa-caret-down" style="font-size: 15px; padding: 8px"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                                aria-labelledby="dropdownMenuDocs dropdown-modif"
                                style="width: 2080%; margin-left: -950px;  top: 20px;">
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col">
                                            <div
                                                style="background: linear-gradient(rgba(26, 131, 197, 1),rgba(7, 64, 94, 0.83)); padding: 1.5rem; height: 210px; width: 120%; border-radius: 5px; margin-left: -5%">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-none d-lg-block">
                                                        <li class="nav-item ">
                                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                                href="javascript:;">
                                                                <div class="d-flex">
                                                                    <div class=" h-10 me-3 d-flex mt-1">
                                                                        {{-- simpen gambar di folder public/images --}}
                                                                        <img src="{{ asset('images/datamining.png') }}"
                                                                            width="40" height="40" />
                                                                    </div>
                                                                    <div>
                                                                        <h6
                                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center">
                                                                            Datamining</h6>
                                                                        <span class="text-sm">Memproses Data data
                                                                            Politik dan Sosial Media yang masuk</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                                href="javascript:;">
                                                                <div class="d-flex">
                                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                                        <img src="{{ asset('images/NLP_API.png') }}"
                                                                            width="40" height="40" />
                                                                    </div>
                                                                    <div>
                                                                        <h6
                                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center ">
                                                                            NLP API</h6>
                                                                        <span class="text-sm">See our colors, icons and
                                                                            typography</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div
                                                style="background: linear-gradient(rgba(26, 131, 197, 1),rgba(7, 64, 94, 0.83)); padding: 1.5rem; height: 210px; width: 100%; border-radius: 5px; margin-left: 15%">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-none d-lg-block">
                                                        <li class="nav-item ">
                                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                                href="javascript:;">
                                                                <div class="d-flex">
                                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                                        <img src="{{ asset('images/anti_hoax.png') }}"
                                                                            width="40" height="40" />
                                                                    </div>
                                                                    <div>
                                                                        <h6
                                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center ">
                                                                            Anti Hoax</h6>
                                                                        <span class="text-sm">flatform identifikasi dan
                                                                            pelaporan informasi hoax secra cepat dan
                                                                            akurat</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                                href="javascript:;">
                                                                <div class="d-flex">
                                                                    <div class="icon h-10 me-3 d-flex mt-1">
                                                                        <img src="{{ asset('images/JB_insight.png') }}"
                                                                            width="40" height="40" />
                                                                    </div>
                                                                    <div>
                                                                        <h6
                                                                            class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center ">
                                                                            JB Insight</h6>
                                                                        <span class="text-sm">JB insight adalah aplikasi
                                                                            untuk menganalisa komentar-komentar pada
                                                                            sosial media</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-hover mx-2">
                            <a class="nav-link ps-2 d-flex cursor-pointer align-items-center biru" id="dropdownMenuDocs"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Company
                                <i class="fa fa-caret-down" style="font-size: 15px; padding: 8px"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                                aria-labelledby="dropdownMenuDocs dropdown-modif"
                                style="width: 1433%; margin-left: -1043px; top: 20px;">
                                <div class="row"
                                    style="width: 100%; height: 50px; margin: 0rem; padding: 1rem 10vw; background:  linear-gradient(rgba(26, 131, 197, 1),rgba(7, 64, 94, 0.83)); border-radius: 5px;">
                                    <div class="col-4 d-flex justify-content-center">
                                        <a
                                            class="d-flex align-items-center justify-content-start p-3 nav-menu"
                                            target="" href="/company" style="margin-top:-25px; margin-left: -30rem">
                                            <img src="{{ asset('images/about_us.png') }}" alt=""
                                            width="40" height="40">
                                            <h6 class="Heading-6"
                                                style="color: rgb(255, 255, 255); margin: 0px 0px 0px 1rem; font-size: 1.02rem;">
                                                Tentang Kami
                                            </h6>
                                        </a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <a
                                            class="d-flex align-items-center justify-content-start p-3 nav-menu"
                                            target="" href="/career" style="margin-top:-25px; ">
                                            <img src="{{ asset('images/careers.png') }}" alt=""
                                            width="40"height="40;">
                                            <h6 class="Heading-6"
                                                style="color: rgb(255, 255, 255); margin: 0px 0px 0px 1rem; font-size: 1.02rem;">
                                                Karrier
                                            </h6> 
                                        </a>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <a
                                            class="d-flex align-items-center justify-content-start p-3 nav-menu"
                                            target="" href="/partner" style="margin-top:-25px; margin-left: 30rem">
                                            <img src="{{ asset('images/parthners.png') }}" alt=""
                                                width="40"height="40;">
                                            <h6 class="Heading-6"
                                                style="color: rgb(255, 255, 255); margin: 0px 0px 0px 1rem; font-size: 1.02rem;">
                                                Mitra
                                            </h6>
                                        </a>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-hover mx-2">
                            <a class="nav-link dropdown ps-2 d-flex  align-items-center biru" id="dropdownMenuDocs"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Learning Center
                                <i class="fa fa-caret-down" style="font-size: 15px; padding: 8px"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                                aria-labelledby="dropdownMenuDocs dropdown-modif"
                                style="width: 1030%; margin-left: -1159px; top: 20px;">
                                <div class="row"
                                style="width: 100%; height: 50px; margin: 0rem; padding: 1rem 10vw; background:  linear-gradient(rgba(26, 131, 197, 1),rgba(7, 64, 94, 0.83)); border-radius: 5px;">
                                <div class="col-4 d-flex justify-content-center">
                                    <a
                                        class="d-flex align-items-center justify-content-start p-3 nav-menu"
                                        target="" href="/company" style="margin-top:-25px; margin-left: -30rem">
                                        <img src="{{ asset('images/blog.png') }}" alt=""
                                        width="40" height="40">
                                        <h6 class="Heading-6"
                                            style="color: rgb(255, 255, 255); margin: 0px 0px 0px 1rem; font-size: 1.02rem;">
                                            Blog
                                        </h6>
                                    </a>
                                </div>
                                <div class="col-4 d-flex justify-content-center">
                                    <a
                                        class="d-flex align-items-center justify-content-start p-3 nav-menu"
                                        target="" href="/career" style="margin-top:-25px; ">
                                        <img src="{{ asset('images/News.png') }}" alt=""
                                        width="40"height="40;">
                                        <h6 class="Heading-6"
                                            style="color: rgb(255, 255, 255); margin: 0px 0px 0px 1rem; font-size: 1.02rem;">
                                           Berita
                                        </h6> 
                                    </a>
                                </div>
                                <div class="col-4 d-flex justify-content-center">
                                    <a
                                        class="d-flex align-items-center justify-content-start p-3 nav-menu"
                                        target="" href="/partner" style="margin-top:-25px; margin-left: 30rem">
                                        <img src="{{ asset('images/Publication.png') }}" alt=""
                                            width="40"height="40;">
                                        <h6 class="Heading-6"
                                            style="color: rgb(255, 255, 255); margin: 0px 0px 0px 1rem; font-size: 1.02rem;">
                                            Publikasi
                                        </h6>
                                    </a>
                                </div>
                            </div>
                            </ul>
                        </li>
                        {{-- yang teliti kalau ngding, jangan ketinggalan tutup tag nya --}}
                        <li class="dropdown dropdown-hover mx-2 translate">
                            <a class="nav-link dropdown ps-2 d-flex  align-items-center" id="dropdownMenuDocs"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/bendera_indonesia.png') }}" width="30"
                                    height="30" />
                                <i class="fa fa-caret-down" style="font-size: 15px; padding: 8px"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-animation mt-0 mt-lg-3 p-3 border-radius-lg"
                                aria-labelledby="dropdownMenuDocs dropdown-modif"
                                style="width: 250%; top: 20px; background-color:rgb(255, 255, 255); margin-left: -50px">
                                <div class="d-none d-lg-block">
                                    <li class="nav-item " style="top: -10px">
                                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                            <div class="d-flex">
                                                <div class="icon h-10 me-3 d-flex mt-1">
                                                    <img src="{{ asset('images/bendera_indonesia.png') }}"
                                                        width="30" height="30" border-radius=" 10rem;" />
                                                    <h6 class="dropdown-header font-weight-center d-flex justify-content-cente align-items-center "
                                                        style="color: black">
                                                        Indonesia</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                            <div class="d-flex">
                                                <div class="icon h-10 me-3 d-flex mt-1">
                                                    <img src="{{ asset('images/bendera_english.png') }}"
                                                        width="30" height="30" />
                                                    <h6 class="dropdown-header font-weight- d-flex justify-content-cente align-items-center "
                                                        style="color: black">
                                                        Inggris</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- tar tinggal bikin disini buat tombol switch dark mode --}}
            <div class="dark-mode-switch" style="margin-right: 10px">
                <input type="checkbox" class="material-symbols-rounded" id="theme-toggle" />
                <label for="theme-toggle">Dark mode</label>
            </div>
        </nav>
    </div>
    <div class="rectangle"></div>
    <div>
        @yield('content')
    </div>
</body>

</html>
