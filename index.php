<?php
session_start();
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/img/NACA LOGO.jpg" type="image/png">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>NACA Tour & Travel - Solusi Wisata dan Travel Anda</title>
        
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">NACA TOUR & TRAVEL</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#discover" class="nav__link">Discover</a>
                        </li>
                        <li class="nav__item">
                            <a href="#place" class="nav__link">Places</a>
                        </li>
                        <li class="nav__item">
                            <a href="reservasi.php" class="nav__link">Reservation</a>
                        </li>
                        <?php if(!isset($_SESSION["username"])) { ?>
                        <li class="nav__item">
                            <a href="login.php" class="nav__link">Login</a>
                        </li>
                        <?php } ?>
                        <li class="nav__item"> <a href="reservasi.html" class="nav__link"><?php if(!empty($_SESSION["username"])) echo $_SESSION["username"];?></a>
                        <?php if(!empty($_SESSION["username"])) { ?>
                        <form action="proses_logout.php" method="post">
                        <button type="submit"><i class="ri-logout-box-line"></i></button>
                        </form>
                        <?php } ?>
                        </li>
                    </ul>

                    <div class="nav__dark">
                        <!-- Theme change button -->
                        <span class="change-theme-name">Dark mode</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                    </div>

                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="assets/img/home1.jpg" alt="#" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__data-subtitle">A Wonderful of Aceh</span>
                        <h2 class="home__data-title">Temukan Tempat <br> Wisata Terbaik <b>Dari Daerah <br> Sabang, Banda Aceh dan Aceh Besar</b></h1>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">Informasi Lebih Lanjut Tentang Tempat Wisata Terbaik Yang Ada Pada Daerah Sabang, Banda Aceh dan Aceh Besar</h2>
                        <p class="about__description">Anda Dapat Menemukan Tempat Terindah dan Menyenangkan Dengan Harga Terbaik Dengan Diskon Khusus, Klik Dibawah Ini Untuk Memilih Tempat Yang Akan Kami Bantu Untuk Memandu Anda Sepanjang Perjalanan, Dapatkan Tempat Wisata Terbaik Pilihan Anda Sekarang.</p>
                        <a href="#place" class="button">Cari Wisata Daerah Sabang, Banda Aceh dan Aceh Besar Disini !</a>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="assets/img/about1.jpg" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="assets/img/about2.jpg" alt="" class="about__img-two">
                        </div>
                        
                        <div class="about__img-overlay">
                            <img src="assets/img/about1.jpg" alt="" class="about__img-one">
                        </div>
                    </div>
                </div>
            </section>
            
            <!--==================== DISCOVER ====================-->
            <section class="discover section" id="discover">
                <h2 class="section__title">TEMUKAN TEMPAT WISATA <br> YANG MENARIK DAN MENYENANGKAN</h2>
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== DISCOVER 1 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/discover1.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Sabang</h2>
                                <span class="discover__description">Lebih Dari 10+ Tempat Wisata Yang Tersedia.</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 2 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/discover2.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Banda Aceh</h2>
                                <span class="discover__description">Lebih Dari 10+ Tempat Wisata Yang Tersedia.</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 3 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="assets/img/discover3.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Aceh Besar</h2>
                                <span class="discover__description">Lebih Dari 10+ Tempat Wisata Yang Tersedia.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== EXPERIENCE ====================-->
            <section class="experience section">
                <h2 class="section__title">DENGAN PENGALAMAN DARI KAMI <br> AKAN MELAYANI ANDA DENGAN SEPENUH HATI</h2>

                <div class="experience__container container grid">
                    <div class="experience__content grid">
                        <div class="experience__data">
                            <h2 class="experience__number">Lebih Dari 1 Tahun</h2>
                            <span class="experience__description">Pengalaman Pada Bidang Jasa Kami.</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">Lebih Dari 100+ Wisatawan</h2>
                            <span class="experience__description">Lebih Dari 100+ Wisatawan Yang Telah Mempercayai Jasa Kami.</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">Lebih Dari 30+ Tempat</h2>
                            <span class="experience__description">Tujuan Wisata Terbaik.</span>
                        </div>
                    </div>

                    <div class="experience__img grid">
                        <div class="experience__overlay">
                            <img src="assets/img/experience1.jpg" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="assets/img/experience2.jpg" alt="" class="experience__img-two">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== VIDEO ====================-->
            <section class="video section">
                <h2 class="section__title">VIDEO TOUR</h2>

                <div class="video__container container">
                    <p class="video__description">Cari Tahu Lebih Lanjut Dengan Vidio Tour Kami Wisata Yang Ada Pada Daerah Sabang, Banda Aceh dan Aceh Besar Yang Terindah dan Tempat Yang Menyenangkan Untuk Anda, Teman Anda dan Keluarga Anda.
                    </p>

                    <div class="video__content">
                        <video id="video-file">
                            <source src="assets/video/video.mp4" type="video/mp4">
                        </video>

                        <button class="button button--flex video__button" id="video-button">
                            <i class="ri-play-line video__button-icon" id="video-icon"></i>
                        </button>
                    </div>
                </div>
            </section>

            <!--==================== PLACES SABANG ====================-->
            <section class="place section" id="place">
                <h2 class="section__title">PILIH TEMPAT WISATA YANG INGIN ANDA KUNJUNGI PADA DAERAH SABANG</h2>
                    <p class="video__description">Pilih 10 Tempat Wisata Terbaik Yang Sering Dikunjungi Pada Daerah Sabang.
                    </p>
                <div class="place__container container grid">
                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0059.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Pulau Rubiah</h3>
                                <span class="place__subtitle">Sabang</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0066.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Ujung Kareng</h3>
                                <span class="place__subtitle">Sabang</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0039.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Gua Sarang</h3>
                                <span class="place__subtitle">Sabang</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0037.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Air Terjun Pria Laot</h3>
                                <span class="place__subtitle">Sabang</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0038.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Benteng Jepang</h3>
                                <span class="place__subtitle">Sabang</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0045.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Kilometer Nol</h3>
                                <span class="place__subtitle">Sabang</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0061.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Pulau Klah</h3>
                                <span class="place__subtitle">Sabang</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0043.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Danau Aneuk Laot</h3>
                                <span class="place__subtitle">Sabang</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0054.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Pantai Kasih</h3>
                                <span class="place__subtitle">Sabang</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0062.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Pantai Jaboi</h3>
                                <span class="place__subtitle">Sabang</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>
                </div>
            </section>

            <!--==================== PLACES BANDA ACEH ====================-->
            <section class="place section" id="place">
                <h2 class="section__title">PILIH TEMPAT WISATA YANG INGIN ANDA KUNJUNGI PADA DAERAH BANDA ACEH</h2>
                    <p class="video__description">Pilih 10 Tempat Wisata Terbaik Yang Sering Dikunjungi Pada Daerah Banda Aceh.
                    </p>
                <div class="place__container container grid">
                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0053.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Mesjid Raya</h3>
                                <span class="place__subtitle">Banda Aceh</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0058.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Meseum Tsunami</h3>
                                <span class="place__subtitle">Banda Aceh</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0047.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Meseum Aceh</h3>
                                <span class="place__subtitle">Banda Aceh</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0044.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Kapal Apung</h3>
                                <span class="place__subtitle">Banda Aceh</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0051.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Gunongan</h3>
                                <span class="place__subtitle">Banda Aceh</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0036.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Bustanussalatin</h3>
                                <span class="place__subtitle">Banda Aceh</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0065.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Monumen Pesawat RI-001</h3>
                                <span class="place__subtitle">Banda Aceh</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0064.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Taman Sulthan Safiatuddin</h3>
                                <span class="place__subtitle">Banda Aceh</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0067.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Taman Putroe Phang</h3>
                                <span class="place__subtitle">Banda Aceh</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0055.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Mesjid Keuchik Leumik</h3>
                                <span class="place__subtitle">Banda Aceh</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>
                </div>
            </section>

            <!--==================== PLACES ACEH BESAR ====================-->
            <section class="place section" id="place">
                <h2 class="section__title">PILIH TEMPAT WISATA YANG INGIN ANDA KUNJUNGI PADA DAERAH ACEH BESAR</h2>
                    <p class="video__description">Pilih 10 Tempat Wisata Terbaik Yang Sering Dikunjungi Pada Daerah Aceh Besar.
                    </p>
                <div class="place__container container grid">
                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0060.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Pantai Lampuuk</h3>
                                <span class="place__subtitle">Aceh Besar</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0056.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Pulo Aceh</h3>
                                <span class="place__subtitle">Aceh Besar</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0040.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Air Terjun Suhom</h3>
                                <span class="place__subtitle">Aceh Besar</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0046.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Ie Suum</h3>
                                <span class="place__subtitle">Aceh Besar</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0050.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Mon Ceunong</h3>
                                <span class="place__subtitle">Aceh Besar</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0063.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Sungai Brayeun</h3>
                                <span class="place__subtitle">Aceh Besar</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0049.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Air Terjun Kuta Malaka</h3>
                                <span class="place__subtitle">Aceh Besar</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0048.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Lhok Mata Ie</h3>
                                <span class="place__subtitle">Aceh Besar</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0068.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Water Boom Mata Ie</h3>
                                <span class="place__subtitle">Aceh Besar</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/IMG-20231207-WA0041.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5/5</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Benteng Indra patra</h3>
                                <span class="place__subtitle">Aceh Besar</span>
<span class="place__price">Mulai Dari <br>Rp 9.999-99.999 <br>Per Orang</span>
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>
                </div>
            </section>

            <!--==================== RESERVASI ====================-->
            <section class="subscribe section">
                <div class="subscribe__bg">
                    <div class="subscribe__container container">
                    <h2 class="section__title">Reservasi Sekarang</h2>
                    <p class="video__description">Apabila Tertarik Memakai Jasa Kami Untuk Tour Wisata Bisa Dengan Cara Klik Pada Tombol Reservasi Dibawah Ini.
                    </p>
                        <button class="button2" onclick="redirectToReservationPage()">
                            Reservasi Sekarang
                        </button>
                        
                        <script>
                            function redirectToReservationPage() {
                                window.location.href = 'reservasi.php'; // Ganti 'halaman_reservasi.html' dengan URL halaman yang diinginkan
                            }
                        </script>                        
                        </form>
                    </div>
                </div>
            </section>
            
            <!--==================== SPONSORS ====================-->
            <!--====================<section class="sponsor section">
                <div class="sponsor__container container grid">
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors3.png" alt="" class="sponsor__img">
                    </div>
                </div>
            </section>
        </main> ====================-->

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__subtitle">NACA Tour & Travel</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Solusi Wisata dan Travel Anda. </a>
                                <p class="footer__description"><br> Pilih Tempat Wisata Tujuan Perjalanan Anda, Kami menawarkan anda berbagai pengalaman yang terbaik.
                                </p>
                                <div>
                                    <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                        <i class="ri-facebook-box-fill"></i>
                                    </a>
                                    <a href="https://www.instagram.com/nabielalqaidathallah" target="_blank" class="footer__social">
                                        <i class="ri-instagram-fill"></i>
                                    </a>
                                    <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                                        <i class="ri-youtube-fill"></i>
                                    </a>
                                    <a href="https://www.tiktok.com/@nabiel.live" target="_blank" class="footer__social">
                                        <i class="ri-tiktok-fill"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">About</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Tentang Kami </a>
                                <p class="footer__description"><br> PT. NACA EMPAT BERSAUDARA <br> Gampoeng Lamme Garoet, Kecamatan Montasik, Kabupaten Aceh Besar, Aceh 23362.
                                </p>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Company</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Ingin Bergabung Bagian Team ? <br>Paket dan Harga ? <br>Ingin Menjadi Anggota ? <br>Ingin Bekerja Sama ?</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Support</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">FAQs</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Pusat Pelayanan</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Hubungi Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2023 NACA Tour & Travel Group. All rigths reserved.</p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terms & Agreements</a>
                        <a href="#" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

         <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>

        <!--=============== SCRIPT JS ===============-->
        <script src="assets/js/script.js"></script>
    </body>
</html>
