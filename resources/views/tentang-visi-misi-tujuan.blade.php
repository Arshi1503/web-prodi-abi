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
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Visi, Misi, Tujuan</h1>
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
{{-- start card --}}
        <section>
            <div class="tw-w-full tw-max-w-xl tw-mx-auto tw-p-4 tw-bg-white tw-shadow-lg tw-rounded-xl">
                <h3 class="tw-mb-4 tw-text-center tw-text-black">Visi, Misi, Tujuan</h3>
                <div class="tw-flex tw-border-b">
                  <button class="tab-button tw-px-4 tw-py-2 tw-text-[#BC8947] hover:tw-text-[#c9a06b] tw-font-semibold tw-border-b-2 tw-border-[#BC8947]" data-tab="visi">
                    About
                  </button>
                  <button class="tab-button tw-px-4 tw-py-2 tw-text-gray-600 hover:tw-text-[#c9a06b]" data-tab="misi">
                    Services
                  </button>
                  <button class="tab-button tw-px-4 tw-py-2 tw-text-gray-600 hover:tw-text-[#c9a06b]" data-tab="tujuan">
                    Contact
                  </button>
                </div>
              
                <div class="tab-content tw-p-4" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="visi">
                  <h2 class="tw-text-3xl tw-text-[#BC8947] tw-mb-2 tw-font-medium">Visi</h2>
                  <p class="tw-text-gray-600">Menjadi Program Studi Administrasi Bisnis yang unggul dalam meningkatkan derajat kemanusiaan dan pemberdayaan perempuan melalui rekayasa hayati untuk menghasilkan lulusan yang profesional, berkarakter, dan berjiwa entrepreneur dalam pengembangan dan penerapan keilmuan Administrasi Bisnis yang mampu bersaing secara global di tahun 2035.</p>
                </div>
              
                <div class="tab-content tw-p-4 tw-hidden" id="misi">
                  <h2 class="tw-text-3xl tw-text-[#BC8947] tw-mb-2 tw-font-medium">Misi</h2>
                  <p class="tw-text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, ducimus nobis nihil minima reiciendis adipisci magnam eum laudantium pariatur cupiditate doloremque fugiat quae ab aliquam molestiae, sequi dolorum autem voluptates!</p>
                </div>
              
                <div class="tab-content tw-p-4 tw-hidden" id="tujuan">
                  <h2 class="tw-text-3xl tw-text-[#BC8947] tw-mb-2 tw-font-medium">Tujuan</h2>
                  <p class="tw-text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente rerum nihil reiciendis id quisquam corporis quae consequatur, expedita quas unde ut repudiandae dignissimos assumenda architecto asperiores, quam, blanditiis maiores maxime?</p>
                </div>
              </div>
              
        </section>
{{-- end card --}}
@endsection