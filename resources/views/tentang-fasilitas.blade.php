@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')

<!-- start page title -->
        <section class="page-title-parallax-background half-section bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(images/gambar/iwupaster.jpg)">
            <div class="opacity-extra-medium bg-gradient-dark-gray-brown"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center position-relative page-title-extra-large">
                        <div class="d-flex flex-column small-screen">
                            <div class="mt-auto" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Fasilitas</h1>
                            </div>
                            <!-- start breadcrumb -->
                            <div class="mt-auto justify-content-center breadcrumb breadcrumb-style-01 alt-font text-white">
                                <ul data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                    <li class="text-white">Tentang Kami</li>
                                </ul>
                            </div>
                            <!-- end breadcrumb -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- end page title -->
{{-- start daftar kampus --}}
<div class="tw-space-y-6 p-6">
    <div class="tw-w-full tw-max-w-7xl tw-mx-auto tw-p-6 lg:tw-px-10 tw-bg-gray-200 tw-shadow-lg tw-rounded-lg">
        <h3 class="tw-mb-4 tw-text-center tw-text-black">Kampus 1</h3>
        <div class="tw-mt-6 tw-mb-6 tw-w-full tw-flex tw-flex-col md:tw-flex-row md:tw-items-center tw-gap-4">
            
            <!-- Gambar -->
            <img 
            class="tw-w-full md:tw-w-1/2 tw-object-cover tw-aspect-video tw-rounded-xl" 
            src="images/gambar/bandung.jpg" 
            loading="lazy" 
            alt="Kampus 1">
            
            <!-- Informasi -->
            <div class="tw-text-black tw-text-justify tw-py-4 md:tw-py-0">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, natus.</span>
                <span class="tw-block tw-mt-2"><b>Alamat: </b>Jl. Pasir Kaliki No.179, Pamoyanan, Kec. Cicendo, Kota Bandung, Jawa Barat 40173</span>
                <span class="tw-block"><b>Kontak: </b>081723214</span>
            </div>               
        </div>
    </div>

    <div class="tw-w-full tw-max-w-7xl tw-mx-auto tw-p-6 lg:tw-px-10 tw-bg-gray-200 tw-shadow-lg tw-rounded-lg">
        <h3 class="tw-mb-4 tw-text-center tw-text-black">Kampus 2</h3>
        <div class="tw-mt-6 tw-mb-6 tw-w-full tw-flex tw-flex-col md:tw-flex-row md:tw-items-center tw-gap-4">
            
            <!-- Gambar -->
            <img 
            class="tw-w-full md:tw-w-1/2 tw-object-cover tw-aspect-video tw-rounded-xl" 
            src="images/gambar/bandung.jpg" 
            loading="lazy" 
            alt="Kampus 1">
            
            <!-- Informasi -->
            <div class="tw-text-black tw-text-justify tw-py-4 md:tw-py-0">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, natus.</span>
                <span class="tw-block tw-mt-2"><b>Alamat: </b>Jl. Pasir Kaliki No.179, Pamoyanan, Kec. Cicendo, Kota Bandung, Jawa Barat 40173</span>
                <span class="tw-block"><b>Kontak: </b>081723214</span>
            </div>               
        </div>
    </div>

    <div class="tw-w-full tw-max-w-7xl tw-mx-auto tw-p-6 lg:tw-px-10 tw-bg-gray-200 tw-shadow-lg tw-rounded-lg">
        <h3 class="tw-mb-4 tw-text-center tw-text-black">Kampus 3</h3>
        <div class="tw-mt-6 tw-mb-6 tw-w-full tw-flex tw-flex-col md:tw-flex-row md:tw-items-center tw-gap-4">
            
            <!-- Gambar -->
            <img 
            class="tw-w-full md:tw-w-1/2 tw-object-cover tw-aspect-video tw-rounded-xl" 
            src="images/gambar/bandung.jpg" 
            loading="lazy" 
            alt="Kampus 1">
            
            <!-- Informasi -->
            <div class="tw-text-black tw-text-justify tw-py-4 md:tw-py-0">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, natus.</span>
                <span class="tw-block tw-mt-2"><b>Alamat: </b>Jl. Pasir Kaliki No.179, Pamoyanan, Kec. Cicendo, Kota Bandung, Jawa Barat 40173</span>
                <span class="tw-block"><b>Kontak: </b>081723214</span>
            </div>               
        </div>
    </div>

    <div class="tw-w-full tw-max-w-7xl tw-mx-auto tw-p-6 lg:tw-px-10 tw-bg-gray-200 tw-shadow-lg tw-rounded-lg">
        <h3 class="tw-mb-4 tw-text-center tw-text-black">Kampus 4</h3>
        <div class="tw-mt-6 tw-mb-6 tw-w-full tw-flex tw-flex-col md:tw-flex-row md:tw-items-center tw-gap-4">
            
            <!-- Gambar -->
            <img 
            class="tw-w-full md:tw-w-1/2 tw-object-cover tw-aspect-video tw-rounded-xl" 
            src="images/gambar/bandung.jpg" 
            loading="lazy" 
            alt="Kampus 1">
            
            <!-- Informasi -->
            <div class="tw-text-black tw-text-justify tw-py-4 md:tw-py-0">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, natus.</span>
                <span class="tw-block tw-mt-2"><b>Alamat: </b>Jl. Pasir Kaliki No.179, Pamoyanan, Kec. Cicendo, Kota Bandung, Jawa Barat 40173</span>
                <span class="tw-block"><b>Kontak: </b>081723214</span>
            </div>               
        </div>
    </div>

    <div class="tw-w-full tw-max-w-7xl tw-mx-auto tw-p-6 lg:tw-px-10 tw-bg-gray-200 tw-shadow-lg tw-rounded-lg">
        <h3 class="tw-mb-4 tw-text-center tw-text-black">Kampus 5</h3>
        <div class="tw-mt-6 tw-mb-6 tw-w-full tw-flex tw-flex-col md:tw-flex-row md:tw-items-center tw-gap-4">
            
            <!-- Gambar -->
            <img 
            class="tw-w-full md:tw-w-1/2 tw-object-cover tw-aspect-video tw-rounded-xl" 
            src="images/gambar/bandung.jpg" 
            loading="lazy" 
            alt="Kampus 1">
            
            <!-- Informasi -->
            <div class="tw-text-black tw-text-justify tw-py-4 md:tw-py-0">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, natus.</span>
                <span class="tw-block tw-mt-2"><b>Alamat: </b>Jl. Pasir Kaliki No.179, Pamoyanan, Kec. Cicendo, Kota Bandung, Jawa Barat 40173</span>
                <span class="tw-block"><b>Kontak: </b>081723214</span>
            </div>               
        </div>
    </div>
</div>
{{-- end daftar kampus --}}
@endsection