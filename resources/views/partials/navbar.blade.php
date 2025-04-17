<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg bg-transparent disable-fixed" data-header-hover="light"> 
        <div class="container-fluid"> 
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="https://www.iwu.ac.id/">
                    <img src="images/gambar/logoiwu.png" alt="" class=" default-logo img-fluid" style="height: 100px;">
                    <img src="images/gambar/logoiwu.png" alt="" class="alt-logo">
                    <img src="images/gambar/logoiwu.png" alt="" class="mobile-logo">
                </a>
            </div>
            <div class="col-auto col-lg-8 menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav alt-font">
                        <li class="nav-item"><a href="demo-finance-about.html" class="nav-link">Beranda</a></li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="demo-finance-expertise.html" class="nav-link">Tentang Kami</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink_1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                <li><a href="demo-finance-expertise-details.html">Tentang Administrasi Bisnis</a></li>
                                <li><a href="demo-finance-expertise-details.html">Visi, Misi, dan Tujuan</a></li>
                                <li><a href="demo-finance-expertise-details.html">Struktur Organisasi</a></li>
                                <li><a href="demo-finance-expertise-details.html">Fasilitas</a></li>
                                <li><a href="demo-finance-expertise-details.html">Dosen</a></li>
                                <li><a href="demo-finance-expertise-details.html">Akreditas</a></li>
                                <li><a href="demo-finance-expertise-details.html">Karir</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="demo-finance-team.html" class="nav-link">Akademik</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink_1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                <li><a href="demo-finance-team.html">Kurikulum</a></li>
                                <li><a href="demo-finance-team.html">Profil Lulusan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="demo-finance-pricing.html" class="nav-link">Publikasi</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink_1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                <li><a href="demo-finance-pricing.html">Artikel</a></li>
                                <li><a href="demo-finance-pricing.html">Berita</a></li>
                                <li><a href="demo-finance-pricing.html">Kegiatan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="demo-finance-contact.html" class="nav-link">Daftar Sekarang!</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink_1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a href="demo-finance-contact.html">Pendaftaran</a></li>
                                <li><a href="demo-finance-contact.html">Jadwal Penerimaan</a></li>
                                <li><a href="demo-finance-contact.html">Persyaratan Masuk</a></li>
                            </ul>   
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-2 text-end d-none d-sm-flex"> 
                <div class="header-icon">
                    <li class="dropdwon simple-dropdown">
                        <div class="header-button"><a href="#contact-form" class="btn btn-very-small btn-white btn-box-shadow btn-round-edge left-icon text-transform-none popup-with-form"><i class="feather icon-feather-mail"></i>Menu</a></div>
                        <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink_1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a href="demo-finance-contact.html">LMS IWU</a></li>
                        </ul>
                    </li>
                </div>
                {{-- <!-- start contact form -->
                <div id="contact-form" class="container p-0 contact-form-style-01 position-relative text-center mfp-hide">
                    <div class="row g-0">
                        <div class="col-lg-5 cover-background md-h-600px xs-h-400px" style="background-image:url('https://via.placeholder.com/1082x1082');"></div>
                        <div class="col-lg-7">
                            <div class="p-15 lg-p-10 bg-white">
                                <span class="mb-10px">Looking for a finance agent?</span>
                                <h3 class="d-inline-block alt-font fw-600 text-dark-gray mb-10 ls-minus-1px">How we can help you?</h3>
                                <form action="email-templates/contact-form.php" method="post">
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                        <input type="text" name="name" class="form-control required" placeholder="Enter your name*" />
                                    </div>
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                        <input type="email" name="email" class="form-control required" placeholder="Enter your email*" />
                                    </div>
                                    <div class="position-relative form-group mb-20px">
                                        <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                                        <input type="tel" name="phone" class="form-control" placeholder="Enter your phone" />
                                    </div>
                                    <div class="position-relative form-group form-textarea">
                                        <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                        <textarea placeholder="Your message" name="comment" class="form-control" rows="3"></textarea>
                                        <input type="hidden" name="redirect" value="">
                                        <button class="btn btn-medium btn-base-color btn-box-shadow btn-round-edge w-100 mt-20px submit" type="submit">Send message</button>
                                        <div class="form-results mt-20px d-none"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end contact form --> --}}
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>