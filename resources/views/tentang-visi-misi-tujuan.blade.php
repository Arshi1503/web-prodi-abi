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
            <div class="tw-w-full tw-max-w-7xl tw-mx-auto tw-p-6 tw-bg-gray-100 tw-shadow-lg tw-rounded-xl">
                <h3 class="tw-mb-4 tw-text-center tw-text-black">Visi, Misi, Tujuan</h3>
                <div class="tw-flex tw-border-b">
                  <button class="tab-button tw-px-4 tw-py-2 tw-text-[#BC8947] hover:tw-text-[#c9a06b] tw-font-semibold tw-border-b-2 tw-border-[#BC8947]" data-tab="visi">
                    Visi
                  </button>
                  <button class="tab-button tw-px-4 tw-py-2 tw-text-gray-600 hover:tw-text-[#c9a06b]" data-tab="misi">
                    Misi
                  </button>
                  <button class="tab-button tw-px-4 tw-py-2 tw-text-gray-600 hover:tw-text-[#c9a06b]" data-tab="tujuan">
                    Tujuan
                  </button>
                </div>
              
                <div class="tab-content tw-p-4 tw-min-h-[400px]" data-anime="{ &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 400, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }" id="visi">
                    <div class="tw-overflow-x-auto">
                        <table class="tw-w-full tw-text-lg tw-text-left tw-text-gray-900 tw-min-h-[400px]">
                          <thead class="tw-text-lg tw-text-[#BC8947] tw-uppercase tw-bg-slate-200">
                            <tr>
                              <th scope="col" class="tw-pl-6 tw-py-3">No</th>
                              <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center">Visi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="tw-bg-white tw-border-b tw-border-gray-400">
                              <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                              <td class="tw-px-6 tw-py-4">	
                                Menjadi Program Studi Teknik Informatika yang unggul dalam meningkatkan derajat kemanusiaan dan pemberdayaan perempuan melalui rekayasa hayati untuk menghasilkan lulusan yang profesional, berkarakter, dan berjiwa entrepreneur dalam pengembangan dan penerapan keilmuan Teknik Informatika yang mampu bersaing secara global di tahun 2035.</td>
                            </tr>
                            <tr class="tw-bg-white tw-border-b tw-border-gray-400 last:tw-border-0">
                              <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">2</td>
                              <td class="tw-px-6 tw-py-4">Menjadi program studi unggulan dalam bidang informatika yang inovatif, berdaya saing global, serta berkontribusi dalam pengembangan ilmu pengetahuan dan teknologi untuk kemajuan masyarakat. </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>    
                </div>
              
                <div class="tab-content tw-p-4 tw-hidden" id="misi">
                    <div class="tw-overflow-x-auto">
                        <table class="tw-w-full tw-text-lg tw-text-left tw-text-gray-900 tw-min-h-[400px]">
                          <thead class="tw-text-lg tw-text-[#BC8947] tw-uppercase tw-bg-slate-200">
                            <tr>
                              <th scope="col" class="tw-pl-6 tw-py-3">No</th>
                              <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center">Misi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="tw-bg-white tw-border-b tw-border-gray-400">
                              <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                              <td class="tw-px-6 tw-py-4">	
                                Menyelenggarakan pendidikan di bidang Ilmu Teknik Informatika yang berkualitas dan relevan dengan tuntutan pengguna lulusan dalam rangka mencapai pembangunan nasional dan baku internasional.
                            </tr>
                            <tr class="tw-bg-white tw-border-b tw-border-gray-400 last:tw-border-0">
                              <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">2</td>
                              <td class="tw-px-6 tw-py-4">Menyelenggarakan pendidikan berkualitas di bidang informatika yang berorientasi pada perkembangan teknologi terkini dan kebutuhan industri.</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                </div>
              
                <div class="tab-content tw-p-4 tw-hidden" id="tujuan">
                    <div class="tw-overflow-x-auto">
                        <table class="tw-w-full tw-text-lg tw-text-left tw-text-gray-900 tw-min-h-[400px]">
                          <thead class="tw-text-lg tw-text-[#BC8947] tw-uppercase tw-bg-slate-200">
                            <tr>
                              <th scope="col" class="tw-pl-6 tw-py-3">No</th>
                              <th scope="col" class="tw-pr-6 tw-py-3 tw-text-center">Tujuan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="tw-bg-white tw-border-b tw-border-gray-400">
                              <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">1</td>
                              <td class="tw-px-6 tw-py-4">	
                                Menghasilkan lulusan di bidang Teknik Informatika yang berkualitas, berdedikasi dan memiliki komitmen terhadap pembangunan nasional.</td>
                            </tr>
                            <tr class="tw-bg-white tw-border-b tw-border-gray-400 last:tw-border-0">
                              <td class="tw-px-6 tw-py-4 tw-font-medium tw-text-gray-900">2</td>
                              <td class="tw-px-6 tw-py-4">Menghasilkan lulusan yang kompeten di bidang informatika, kreatif, inovatif, dan mampu bersaing di tingkat nasional maupun internasional. 
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
              </div>
              
        </section>
{{-- end card --}}
@endsection