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
                                <h1 class="text-white alt-font mb-0 text-shadow-extra-large fw-500 ls-minus-1px">Akreditasi</h1>
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
            <div class="tw-space-y-6">
                <div class="tw-card">
                    <div>
                        <h3 class="tw-card-title">Kurikulum Program Studi Teknik Informatika</h3>
                        <p class="tw-card-subtitle">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam reprehenderit explicabo quas, atque esse architecto eaque quis exercitationem dolore pariatur eveniet? Libero alias voluptates repellat cum neque possimus, repellendus vitae.
                        Optio magni accusantium eveniet eos nulla mollitia impedit culpa possimus sunt. Repellat eos nam delectus facilis, ab, incidunt reiciendis, quibusdam quod temporibus doloribus odit commodi! Rem dolor quisquam accusamus laboriosam.
                        Aperiam iure ullam cupiditate laboriosam nihil ut tempora quaerat explicabo quibusdam corporis natus minus illum itaque tenetur quas recusandae, nisi consequatur temporibus quos. Asperiores harum enim ratione totam molestiae inventore!</p>
                    </div>
                </div>
                <div class="tw-card">
                    <div>
                        <h3 class="tw-card-title">Struktur Kurikulum</h3>
                        <p class="tw-card-subtitle tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum ratione odio velit ea, recusandae sint obcaecati laborum porro sed deserunt! Veritatis perspiciatis repellendus sed id similique? Voluptate qui saepe nesciunt.
                        Id libero ea asperiores sequi repellendus obcaecati iste, blanditiis quia corrupti veniam rem beatae excepturi assumenda voluptatum nesciunt quos fugiat perspiciatis non nihil rerum eius consequuntur. Quasi reiciendis non cumque.
                        Iste laborum cum odio asperiores consequuntur sunt temporibus dolor ad, voluptatum quibusdam, dolorum ex quo fugiat, repellendus et voluptatem. Dolor consequatur quod mollitia ipsum culpa doloremque modi porro quos sunt.</p>
                        {{-- Start Table Nav --}}
                        <div class="tw-tab-nav tw-flex tw-flex-wrap tw-gap-2 tw-justify-center tw-p-2 tw-rounded-md">
                            <button class="tab-button tw-tab-nav-active" data-tab="semester-1"> Semester 1</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-2"> Semester 2</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-3"> Semester 3</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-4"> Semester 4</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-5"> Semester 5</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-6"> Semester 6</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-7"> Semester 7</button>
                            <button class="tab-button tw-tab-nav-deactive" data-tab="semester-8"> Semester 8</button>
                        </div>
                        {{-- End Table Nav --}}
                        {{-- Start Table --}}
                        <div class="tab-content tw-p-4" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-1">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}
                        {{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-2">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> C112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> B112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> D112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-3">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-4">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-5">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-6">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-7">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}{{-- Start Table --}}
                        <div class="tab-content tw-p-4 tw-hidden" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="semester-8">
                            <div class="tw-overflow-x-auto">
                                <table class="tw-table">
                                    <thead class="tw-table-head">
                                        <tr class="">
                                            <th class="tw-pl-3 tw-py-3 tw-w-1/6 tw-text-center tw-min-w-[100px]">Kode Mata Kuliah</th>
                                            <th class="tw-pl-3 tw-py-3 tw-text-center tw-w-1/2">Mata Kuliah</th>
                                            <th class="tw-pl-2 tw-py-3 tw-w- tw-w-1/12 tw-text-center">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                        <tr class="tw-table-row">
                                            <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900 tw-min-w-[100px] tw-text-center"> A112455</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center">Pengantar Teknologi Informasi</td>
                                            <td class="tw-px-6 tw-py-4 tw-text-center"> 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tw-card-subtitle tw-text-md tw-text-gray-600 tw-opacity-70 tw-text-justify tw-w-3/4 tw-mx-auto tw-mt-4"> Jumlah SKS Yang Ditawarkan : 9</p>
                            </div>
                        </div>
                        {{-- End Table --}}
                </div>
            </div>
        </section>
{{-- end card --}}
@endsection