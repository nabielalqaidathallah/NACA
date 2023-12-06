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
        <link rel="stylesheet" href="reservasi.css">

        <title>NACA Tour & Travel - Solusi Wisata dan Travel Anda</title>
        </head>
                <body>
                    <header class="header" id="header">
                        <nav class="nav container">
                            <a href="index.php" class="nav__logo">NACA TOUR & TRAVEL</a>

                            <div class="nav__menu" id="nav-menu">
                                <ul class="nav__list">
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
                <img src="assets/img/TEST.png" alt="#" class="home__img">

                <div class="home__container container grid">
                </div>
            </section>

            <!-- Tambahkan ini setelah bagian </section> dari home -->
            <section class="reservation section" id="reservation">
    <div class="reservation__container container grid">
        <form action="proses_reservasi.php" method="post" class="reservation__form grid">
            <h2 class="reservation__title">Reservasi Tour Wisata NACA TOUR & TRAVEL</h2>

            <!-- Nama -->
            <div class="reservation__field">
                <label for="nama" class="reservation__label">Nama Lengkap :</label>
                <input type="text" id="nama" name="nama" class="reservation__input" required>
            </div>

            <!-- Nama -->
            <div class="reservation__field">
                <label for="nama" class="reservation__label">Nama Lengkap :</label>
                <input type="text" id="nama" name="nama" class="reservation__input" required>
            </div>

            <!-- Nama -->
            <div class="reservation__field">
                <label for="nama" class="reservation__label">Nama Lengkap :</label>
                <input type="text" id="nama" name="nama" class="reservation__input" required>
            </div>

            <!-- Alamat -->
            <div class="reservation__field">
                <label for="nama" class="reservation__label">Alamat Lengkap :</label>
                <input type="text" id="nama" name="nama" class="reservation__input" required>
            </div>

            <!-- Email -->
            <div class="reservation__field">
                <label for="email" class="reservation__label">Alamat Email :</label>
                <input type="email" id="email" name="email" class="reservation__input" required>
            </div>

            <!-- Nomor Telepon -->
            <div class="reservation__field">
                <label for="telepon" class="reservation__label">Nomor Telepon :</label>
                <input type="tel" id="telepon" name="telepon" class="reservation__input" required>
            </div>

            <!-- Tujuan Wisata 
            <div class="reservation__field">
                <label for="tujuan" class="reservation__label">Pilih Daerah Wisata :</label>
                <select id="tujuan" name="tujuan" class="reservation__select" onchange="populateDestinations()" required>
                    <option value="" disabled selected>Pilih Daerah Wisata</option>
                    <option value="sabang">Sabang</option>
                    <option value="banda-aceh">Banda Aceh</option>
                    <option value="aceh-besar">Aceh Besar</option>
    
                </select>
            </div>-->

            <!-- Tujuan Wisata -->
            <div class="reservation__field">
                <label for="nama" class="reservation__label">Daerah Wisata Tujuan :</label>
                <input type="text" id="nama" name="nama" class="reservation__input" required>
            </div>

            <!-- Tujuan Wisata -->
            <div class="reservation__field">
                <label for="nama" class="reservation__label">Tempat Wisata Tujuan :</label>
                <input type="text" id="nama" name="nama" class="reservation__input" required>
            </div>

            <!-- Tanggal Reservasi -->
            <div class="reservation__field">
                <label for="tanggal" class="reservation__label">Pilih Tanggal Reservasi :</label>
                <input type="date" id="tanggal" name="tanggal" class="reservation__input" required>
            </div>

            <!-- Jumlah Peserta -->
            <div class="reservation__field">
                <label for="jumlah" class="reservation__label">Pilih Jumlah Peserta :</label>
                <input type="number" id="jumlah" name="jumlah" class="reservation__input" required>
            </div>

            <!-- Opsi Tambahan -->
            <div class="reservation__field">
                <label class="reservation__label">Pilih Opsi Tambahan :</label>
                <div class="reservation__options">
                    <input type="checkbox" id="opsi1" name="opsi1">
                    <label for="opsi1">Penyewaan Peralatan Tambahan</label>

                    <input type="checkbox" id="opsi2" name="opsi2">
                    <label for="opsi2">Asuransi Perjalanan</label>

                    <!-- Tambahkan opsi tambahan lainnya sesuai kebutuhan -->
                </div>
            </div>

            <!-- Pertanyaan Khusus -->
            <div class="reservation__field">
                <label for="pertanyaan" class="reservation__label">Pertanyaan Khusus :</label>
                <textarea id="pertanyaan" name="pertanyaan" rows="4" class="reservation__textarea"></textarea>
            </div>

            <!-- Metode Pembayaran -->
            <div class="reservation__field">
                <label for="metodePembayaran" class="reservation__label">Pilih Metode Pembayaran :</label>
                <select id="metodePembayaran" name="metodePembayaran" class="reservation__select" required>
                    <option value="" disabled selected>Pilih Metode Pembayaran</option>
                    <option value="kartuKredit">Kartu Kredit</option>
                    <option value="transferBank">Transfer Bank</option>
                    <!-- Tambahkan opsi metode pembayaran lainnya sesuai kebutuhan -->
                </select>
            </div>

            <!-- Catatan Tambahan -->
            <div class="reservation__field">
                <label for="catatan" class="reservation__label">Catatan Tambahan :</label>
                <textarea id="catatan" name="catatan" rows="4" class="reservation__textarea"></textarea>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="reservation__button" onclick="openWhatsApp()">Reservasi Sekarang</button>

<script>
function openWhatsApp() {
    var phoneNumber = '6282160917717'; // Ganti dengan nomor telepon yang diinginkan
    var message = 'Halo Admin, Saya ingin melakukan pembayaran atas Reservasi saya.'; // Ganti dengan pesan yang diinginkan

    // Encode pesan untuk digunakan dalam URL
    var encodedMessage = encodeURIComponent(message);

    var whatsappURL = 'https://wa.me/' + phoneNumber + '?text=' + encodedMessage;

    // Buka halaman WhatsApp di jendela baru
    window.open(whatsappURL, '_blank');
}
</script>

        </form>
    </div>
</section>
    </article>
  </main>


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
