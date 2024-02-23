<!doctype html>
<html lang="en">

<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Dark mode -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- Material Kit CSS -->

    @vite(['resources/css/material-kit.css', 'resources/js/material-kit.js'])
    @vite(['resources/css/misa-custom.css'])
    @vite(['resources/css/style.css'])
</head>

<body>
    <!-- Navbar -->
    <div class="position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                {{-- gedein navbar ubah angka py- --}}
                <nav
                    class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-5 py-1 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <img src="{{ asset('images/logo_1.png') }}" width="95px" height="65px"/>
                        <img src="{{ asset('images/logo_tulisan.png') }}" width="100px" height="70px"/>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-lg-12 ps-lg-5 w-100 d-flex justify-content-end ">
                                <li class="nav-item dropdown dropdown-hover mx-3">
                                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                                        Fitur
                                        <i class="fa fa-caret-down" style="font-size: 15px; padding: 8px"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                                        aria-labelledby="dropdownMenuDocs">
                                        <div class="d-none d-lg-block">
                                            <li class="nav-item ">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                                    <div class="d-flex">
                                                        <div class=" h-10 me-3 d-flex mt-1">
                                                            {{-- simpen gambar di folder public/images --}}
                                                            <img src="{{ asset('images/datamining.png') }}" width="30" height="30"/>
                                                        </div>
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Datamining</h6>
                                                            <span class="text-sm">All about overview, quick start,
                                                                license and contents</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <img src="{{ asset('images/NLP_API.png') }}" width="30" height="30"/>
                                                        </div>
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                NLP API</h6>
                                                            <span class="text-sm">See our colors, icons and
                                                                typography</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <img src="{{ asset('images/anti_hoax.png') }}" width="30" height="30"/>
                                                        </div>
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Anti Hoax</h6>
                                                            <span class="text-sm">Explore our collection of fully
                                                                designed components</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <img src="{{ asset('images/JB_insight.png') }}" width="30" height="30"/>
                                                        </div>
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                JB Insight</h6>
                                                            <span class="text-sm">Explore our collection of fully
                                                                designed components</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center"
                                        id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                                        Company
                                        <i class="fa fa-caret-down" style="font-size: 15px; padding: 8px"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                                        aria-labelledby="dropdownMenuDocs">
                                        <div class="d-none d-lg-block">
                                            <li class="nav-item ">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <img src="{{ asset('images/about_us.png') }}" width="30" height="30"/>
                                                        </div>
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                About Us</h6>
                                                            <span class="text-sm">All about overview, quick start,
                                                                license and contents</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <img src="{{ asset('images/careers.png') }}" width="30" height="30"/>
                                                        </div>
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                careers</h6>
                                                            <span class="text-sm">See our colors, icons and
                                                                typography</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <img src="{{ asset('images/parthners.png') }}" width="30" height="30"/>
                                                        </div>
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                parthners</h6>
                                                            <span class="text-sm">Explore our collection of fully
                                                                designed components</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </div>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link dropdown ps-2 d-flex  align-items-center" id="dropdownMenuDocs"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Learning Center
                                        <i class="fa fa-caret-down" style="font-size: 15px; padding: 8px"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                                        aria-labelledby="dropdownMenuDocs">
                                        <div class="d-none d-lg-block">
                                            <li class="nav-item ">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="javascript:;">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <img src="{{ asset('images/blog.png') }}" width="30" height="30"/>
                                                        </div>
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Blog</h6>
                                                            <span class="text-sm">All about overview, quick start,
                                                                license and contents</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="javascript:;">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <img src="{{ asset('images/News.png') }}" width="30" height="30"/>
                                                        </div>
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                News</h6>
                                                            <span class="text-sm">See our colors, icons and
                                                                typography</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="dropdown-item py-2 ps-3 border-radius-md"
                                                    href="javascript:;">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <img src="{{ asset('images/Publication.png') }}" width="30" height="30"/>
                                                        </div>
                                                        <div>
                                                            <h6
                                                                class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">
                                                                Publications</h6>
                                                            <span class="text-sm">Explore our collection of fully
                                                                designed components</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                    </ul>
                                </li>
                                {{-- yang teliti kalau ngding, jangan ketinggalan tutup tag nya --}}
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex cursor-pointer" id="dropdownMenuDocs"
                                        data-bs-toggle="dropdown">
                                        <img src="{{ asset('images/bendera_indonesia.png') }}" width="30" height="30"/>
                                        Indonesia
                                        <i class="fa fa-caret-down" style="font-size: 15px; padding: 8px"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg"
                                        aria-labelledby="dropdownMenuDocs">
                                        <div class="d-none d-lg-block">
                                            <li class="nav-item ">
                                                <a class="dropdown-item border-radius-md"
                                                    href="javascript:;">
                                                    <div class="d-flex">
                                                        <div class="icon h-10 me-3 d-flex mt-1">
                                                            <img src="langit.png">
                                                        </div>
                                                    </div>  
                                                </a>
                                            </li>
                                        </div>
                                    </ul>
                                </li>
                        </div>
                    </div>
                    {{-- tar tinggal bikin disini buat tombol switch dark mode --}}
                    <div class="dark-mode-switch">
                        <input type="checkbox" class="material-symbols-rounded" id="theme-toggle" />
                        <label for="theme-toggle">Dark mode</label>
                      </div>
                </nav>
                <!-- End Navbar -->
                <main>
                    <!-- Jangan di hapus, buat conn -->
                    <p type="button" class="hide" id="clearLocalStorage">
                  </main>
                  <!-- partial -->
                  <script  src="./script.js"></script>

            </div>
        </div>
    </div>
    <div>
        @yield('content')
    </div>
</body>

</html>
