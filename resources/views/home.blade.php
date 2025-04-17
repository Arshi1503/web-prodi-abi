@extends('layouts.app')


@section('title', 'About - Administrasi Bisnis')

@section('content')
        <!-- start cursor -->
        <div class="cursor-page-inner">
            <div class="circle-cursor circle-cursor-inner"></div>
            <div class="circle-cursor circle-cursor-outer"></div>
        </div>
        <!-- start page title -->
        <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/gambar/iwupaster.jpg)">
            <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <div class="d-flex flex-column small-screen">
                            <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Administarsi Bisnis</h1>
                            </div>
                            <!-- start breadcrumb -->
                            <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                                <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                    <li class="text-white">Beranda</li>
                                </ul>
                            </div>
                            <!-- end breadcrumb -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="border-bottom border-color-extra-medium-gray">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-5 col-lg-6 md-mb-9 sm-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <span class="fs-17 d-inline-block fw-500 text-uppercase text-base-color ls-1px mb-15px">Tentang</span>
                        <h1 class="alt-font fw-600 text-dark-gray ls-minus-2px mb-35px shadow-none" data-shadow-animation="true" data-animation-delay="700">Administarsi <span class="text-highlight">Bisnis<span class="bg-base-color h-10px sm-h-8px bottom-20px md-bottom-17px opacity-5 separator-animation"></span></span></h1>
                        <div class="row">
                            <div class="col-lg-12 mb-25px last-paragraph-no-margin">
                                <p class="w-85 md-w-95 sm-w-100">Administrasi bisnis adalah ilmu yang mempelajari pengelolaan berbagai aspek dalam perusahaan atau organisasi. Tujuannya adalah untuk menjaga kestabilan dan perkembangan perusahaan, serta memperoleh keuntungan. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6 position-relative md-mb-6 sm-mb-50px">
                        <div class="overflow-hidden text-end w-80 ms-auto animation-float" data-anime='{ "effect": "slide", "direction": "lr", "color": "#bc8947", "duration": 1000, "delay": 0 }'>
                            <img src="images/gambar/test.jpg" alt="" class="w-80 border-radius-5px">
                        </div>
                        <div class="position-absolute bottom-minus-50px w-60 atropos" data-atropos data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)" data-anime='{ "effect": "slide", "direction": "lr", "color": "#bc8947", "duration": 1000, "delay": 500 }'>
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner text-center">
                                        <img class="w-100 border-radius-5px" data-atropos-offset="3" src="images/gambar/dollar2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="p-0 bg-dark-gray">
            <div class="container-fluid p-0"> 
                <div class="row justify-content-center g-0">
                    <div class="col-lg-6 col-md-10 ps-10 pe-10 pt-7 pb-7 xxl-p-6" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <h1 class="alt-font fw-500 text-white ls-minus-2px">Visi, Misi, dan Tujuan</h1>
                        <div class="accordion accordion-style-02" id="accordion-style-02" data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">
                            <!-- start accordion item -->
                            <div class="accordion-item active-accordion">
                                <div class="accordion-header border-bottom border-color-transparent-white-light">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-white">
                                            <i class="fa-solid fa-angle-down icon-small"></i><span class="fw-400 alt-font fs-20">Visi</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-white-light text-medium-gray">
                                        <p>Menjadi Program Studi Administrasi Bisnis yang unggul dalam meningkatkan derajat kemanusiaan dan pemberdayaan perempuan melalui rekayasa hayati untuk menghasilkan lulusan yang profesional, berkarakter, dan berjiwa entrepreneur dalam pengembangan dan penerapan keilmuan Administrasi Bisnis yang mampu bersaing secara global di tahun 2035.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-transparent-white-light">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-white">
                                            <i class="fa-solid fa-angle-right icon-small"></i><span class="fw-400 alt-font fs-20">Misi</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-white-light text-medium-gray">
                                        <p>Menyelenggarakan pendidikan di bidang Ilmu Administrasi Bisnis yang berkualitas dan relevan dengan tuntutan pengguna lulusan dalam rangka mencapai pembangunan nasional dan baku internasional.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-transparent">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03" aria-expanded="false" data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-white">
                                            <i class="fa-solid fa-angle-right icon-small"></i><span class="fw-400 alt-font fs-20">Tujuan</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-02-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent text-medium-gray">
                                        <p>Menghasilkan lulusan di bidang Administrasi Bisnis yang berkualitas, berdedikasi dan memiliki komitmen terhadap pembangunan nasional. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                        </div>
                    </div>
                    <div class="col-lg-6 md-h-550px xs-h-400px" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <div class="h-100 cover-background" style="background-image: url(images/gambar/testrupia.jpg)"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <section class="border-bottom border-color-extra-medium-gray">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-5 col-lg-6 md-mb-9 sm-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <h1 class="alt-font fw-600 text-dark-gray ls-minus-2px mb-35px shadow-none" data-shadow-animation="true" data-animation-delay="700">Kata <span class="text-highlight">Sambutan <span class="bg-base-color h-10px sm-h-8px bottom-20px md-bottom-17px opacity-5 separator-animation"></span></span></h1>
                        <div class="row">
                            <div class="col-lg-12 mb-25px last-paragraph-no-margin">
                                <p class="w-85 md-w-95 sm-w-100">Administrasi bisnis adalah ilmu yang mempelajari pengelolaan berbagai aspek dalam perusahaan atau organisasi. Tujuannya adalah untuk menjaga kestabilan dan perkembangan perusahaan, serta memperoleh keuntungan. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6 position-relative md-mb-6 sm-mb-50px">
                        <div class="overflow-hidden text-end w-80 ms-auto animation-float" data-anime='{ "effect": "slide", "direction": "lr", "color": "#bc8947", "duration": 1000, "delay": 0 }'>
                            <img src="images/gambar/foto2.jpg" alt="" class="tw-w-96 border-radius-5px">
                        </div>
                        <div class="position-absolute bottom-minus-50px w-60 atropos" data-atropos data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)" data-anime='{ "effect": "slide", "direction": "lr", "color": "#bc8947", "duration": 1000, "delay": 500 }'>
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- start section -->
        <section class="bg-very-light-gray">
            <div class="container py-5">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-7 text-center">
                        <span class="fs-17 fw-500 text-uppercase text-base-color ls-1px">Berita Terbaru</span>
                        <h2 class="alt-font text-dark fw-600">Berita Tentang Prodi</h2> 
                    </div>
                </div>
            
                <!-- Semua item berita dimasukkan dalam satu row -->
                <div class="row row-cols-1 row-cols-lg-3 g-4">
                    
                    <!-- Berita 1 -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box bg-white h-100 justify-content-start p-4 box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-5px">
                            <div class="mb-3" style="height: 200px; overflow: hidden; width: 100%;">
                                <img src="images/gambar/iwupaster.jpg" alt="foto" class="img-fluid rounded" style="object-fit: cover; height: 100%; width: 100%;">
                            </div>
                            <div class="feature-box-content text-start px-3 py-2">
                                <span class="d-inline-block alt-font text-dark-gray fw-500 mb-2 fs-5">Pencapaian Mahasiswa Administarsi Bisnis di Kancah internasional</span>
                                <p class="mb-3">{!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic facere praesentium fugit ea delectus dicta non aliquid facilis eaque exercitationem distinctio mollitia quo quae quos blanditiis a iusto, libero aspernatur?", 100)!!}</p>
                                <span class="fs-6 lh-26 text-base-color text-uppercas fw-500">18 Maret 2021</span>
                            </div>
                            <div class="feature-box-overlay bg-white border-radius-6px"></div>
                        </div>  
                    </div>
            
                    <!-- Berita 2 -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box bg-white h-100 justify-content-start p-4 box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-5px">
                            <div class="mb-3" style="height: 200px; overflow: hidden; width: 100%;">
                                <img src="images/gambar/bandung.jpg" alt="foto" class="img-fluid rounded" style="object-fit: cover; height: 100%; width: 100%;">
                            </div>
                            <div class="feature-box-content text-start px-3 py-2">
                                <span class="d-inline-block alt-font text-dark-gray fw-500 mb-2 fs-5">Pencapaian Mahasiswa Administarsi Bisnis di Kancah internasional</span>
                                <p class="mb-3">{!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic facere praesentium fugit ea delectus dicta non aliquid facilis eaque exercitationem distinctio mollitia quo quae quos blanditiis a iusto, libero aspernatur?", 100)!!}</p>
                                <span class="fs-6 lh-26 text-base-color text-uppercas fw-500">18 Maret 2021</span>
                            </div>
                            <div class="feature-box-overlay bg-white border-radius-6px"></div>
                        </div>  
                    </div>
            
                    <!-- Berita 3 -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box bg-white h-100 justify-content-start p-4 box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-5px">
                            <div class="mb-3" style="height: 200px; overflow: hidden; width: 100%;">
                                <img src="images/gambar/bandung.jpg" alt="foto" class="img-fluid rounded" style="object-fit: cover; height: 100%; width: 100%;">
                            </div>
                            <div class="feature-box-content text-start px-3 py-2">
                                <span class="d-inline-block alt-font text-dark-gray fw-500 mb-2 fs-5">Pencapaian Mahasiswa Administarsi Bisnis di Kancah internasional</span>
                                <p class="mb-3">{!! Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic facere praesentium fugit ea delectus dicta non aliquid facilis eaque exercitationem distinctio mollitia quo quae quos blanditiis a iusto, libero aspernatur?", 100)!!}</p>
                                <span class="fs-6 lh-26 text-base-color text-uppercas fw-500">18 Maret 2021</span>
                            </div>
                            <div class="feature-box-overlay bg-white border-radius-6px"></div>
                        </div>  
                    </div>
            
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection