<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Keefe</title>
    <!--
Comila Template
http://www.templatemo.com/tm-490-comila
-->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- stylesheets css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <link rel="stylesheet" href="css/et-line-font.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/vegas.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>



</head>

<body>

    <!-- preloader section -->
    <section class="preloader">
        <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>
    </section>

    <!-- home section -->
    <section id="home">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="home-thumb">
                        <h1 class="wow fadeInUp" data-wow-delay="0.4s">Selamat Datang</h1>
                        <h3 class="wow fadeInUp" data-wow-delay="0.6s">di <strong>Buku Tamu</strong> SMK Negeri<strong>
                                6
                                Padang</strong></h3>
                        <a href="#about" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs"
                            data-wow-delay="0.8s">Isi buku tamu</a>
                        <a href="#kontak" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs"
                            data-wow-delay="0.8s">Kontak</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- about section -->
    <section id="about">
        <div id="about" class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="container">
                <div class="section-title text-center">
                    <h1 class="wow fadeIn" data-wow-delay="0.2s">Buku Tamu</h1>
                    <h3 class="wow fadeInUp" data-wow-delay="0.4s">Silakan Isi Data Anda</h3>
                </div>
                <form id="guestForm">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="name" placeholder="Masukkan Nama Anda"
                            required>
                    </div>

                    <div id="input_instansi" class="form-group">
                        <label for="instansi">Instansi/Pribadi:</label>
                        <select class="form-control" id="instansi" required>
                            <option value="" disabled selected>Pilih</option>
                            <option value="Instansi">Instansi</option>
                            <option value="Pribadi">Pribadi</option>
                        </select>
                    </div>

                    <div class="form-group" id="namaInstansiDiv" style="display: none;">
                        <label for="namaInstansi">Nama Instansi:</label>
                        <input type="text" class="form-control" id="namaInstansi" name="instansi_name"
                            placeholder="Masukkan Nama Instansi">
                    </div>

                    <div class="form-group">
                        <label for="jumlahTamu">Jumlah Tamu:</label>
                        <input type="number" class="form-control" id="jumlahTamu" name="qty"
                            placeholder="Masukkan Jumlah Tamu" required>
                    </div>

                    <div class="form-group">
                        <label for="maksudKunjungan">Maksud Kunjungan:</label>
                        <textarea class="form-control" id="maksudKunjungan" name="reason"
                            placeholder="Masukkan Maksud Kunjungan" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Kirim</button>

                    <div id="successBox"
                        style="display: none; background-color: #4CAF50; color: white; padding: 15px; margin-top: 10px;">
                        Berhasil tersimpan!
                    </div>

                </form>
            </div>
        </div>

    </section>


    <!-- feature section -->
    <section id="kontak">
        <div class="container">
            <div class="row">
                <svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
                    <path d="M0 0 L50 100 L100 0 Z"></path>
                </svg>


            </div>
        </div>
    </section>

    <!-- contact section -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="section-title">
                        <h1 class="wow fadeInUp" data-wow-delay="0.3s">Kontak Kami</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">Jangan ragu untuk menghubungi kami untuk
                            pertanyaan atau
                            dukungan. Kami siap membantu!</p>
                    </div>
                    <div class="contact-info wow fadeInUp" data-wow-delay="1.0s">
                        <div class="col-md-4 col-sm-12">
                            <div class="media">
                                <div class="media-object media-left">
                                    <i class="icon icon-location-pin"></i>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading fas fa-map-marker-alt">Alamat</h3>
                                    <p>Jl. Suliki No.1, Jati Baru, Padang Timur</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="media">
                                <div class="media-object media-left">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading  fas fa-phone-alt">Telp</h3>
                                    <p>0751 21907</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="media">
                                <div class="media-object media-left">
                                    <!-- <i class="icon icon-envelope"></i> -->
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading fas fa-envelope">Email</h3>
                                    <p>smksixpdg@gmail.com</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- footer section -->
    <footer>
        <div class="container">
            <div class="row">

                <svg class="svgcolor-light" preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%"
                    version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0 L50 100 L100 0 Z"></path>
                </svg>

                <div class="google-maps wow fadeInUp" data-wow-delay="1.2s">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2846024163714!2d100.36239161475362!3d-0.937177399316345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b924c3105a9b%3A0x6b4ee16db9f728e!2sSMK+Negeri+6+Padang!5e0!3m2!1sen!2sid!4v1545725633651"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
                <p style="text-align: center;">Copyright &copy; 2024 SMK N 6 Padang<br>
                    Designed by <a rel="nofollow" href="alwan.tjtk1smk6padang.my.id" target="_parent">KeefeSR</a>
                </p>

            </div>
        </div>
    </footer>

    <!-- modal -->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-popup">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title">Our Newsletter</h2>
                </div>
                <form action="#" method="post">
                    <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Full Name">
                    <input name="email" type="text" class="form-control" id="email" placeholder="Email Address">
                    <input name="submit" type="submit" class="form-control" id="submit" value="Subscribe Now">
                </form>
                <p>Thank you for your visiting!</p>
            </div>
        </div>
    </div>


    <!-- Back top -->
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

    <!-- javscript js -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/vegas.min.js"></script>

    <script src="js/wow.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/script.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var instansiSelect = document.getElementById("instansi");
            var namaInstansiDiv = document.getElementById("namaInstansiDiv");

            // Fungsi untuk mengatur tampilan input nama instansi
            function toggleNamaInstansi() {
                if (instansiSelect.value === "Instansi") {
                    namaInstansiDiv.style.display = "block";
                } else {
                    namaInstansiDiv.style.display = "none";
                }
            }

            // Menambahkan event listener untuk perubahan pada dropdown
            instansiSelect.addEventListener("change", toggleNamaInstansi);

            // Memanggil fungsi saat halaman pertama kali dimuat
            toggleNamaInstansi();
        });
    </script>

    <script>
        $('a.smoothScroll').on('click', function (event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {
                    window.location.hash = hash;
                });
            }
        });
    </script>


</body>

</html>