<?php
date_default_timezone_set('Asia/Jakarta');

// include('koneksi.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('assets/vendor/phpmailer/phpmailer/src/Exception.php');
include('assets/vendor/phpmailer/phpmailer/src/PHPMailer.php');
include('assets/vendor/phpmailer/phpmailer/src/SMTP.php');

if (isset($_POST['kirim'])) {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $subject = $_POST['subject'];
    $pesan = $_POST['pesan'];

    $mail = new PHPMailer;
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'owlcarousel0@gmail.com';
    $mail->Password = '_owlnibos1';
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';

    $mail->setFrom($email, $email);
    $mail->addAddress('owlcarousel0@gmail.com', 'Admin');
    // $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $pesan;

    if (!$mail->send()) {
        echo "<script>alert('kirim pesan gagal', $mail->ErrorInfo);window.location='home.php';</script>";
    } else {
        echo "<script>alert('pesan berhasil terkirim!');window.location='artikeldetail.php';</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lonely Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i&subset=cyrillic" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Vendor CSS Files -->
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/imggaleri.css" rel="stylesheet">

  

 <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js">

  <!-- =======================================================
  * Template Name: Lonely - v4.5.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-lonely/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <div class="p-2 text-white" style="background-color: #005691;">
        <h1>Demo LSP</h1>
    </div>
  <!-- ======= Hero Section ======= -->
 <!--  <section id="hero" class="d-flex flex-column align-items-center justify-content-center">
    <h1>Hi, I'm Alice!</h1>
    <h2>I am a graphic designer</h2>
    <a href="#about" class="btn-get-started scrollto"><i class="bi bi-chevron-double-down"></i></a>
  </section> -->
  <!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">LSP New</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <div class="menu">
        <ul>
          <li><a class="klik_menu"  href="indextes.php" id="indextes.php">Home</a></li>
          <li class="dropdown"><a><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="klik_menu" id="profil">Profil LSP</a></li>
              <li><a class="klik_menu" id="tentang">Tentang</a></li>
            </ul>
          </li>
          <li class="dropdown"><a><span>Sertifikasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="klik_menu" id="skema">Skema LSP</a></li>
              <li><a class="klik_menu" id="jadwal">Jadwal Ujikom</a></li>
              <li><a class="klik_menu" id="asesor">Asesor Kompetensi</a></li>
              <li><a class="klik_menu" id="tempat">Tempat Uji Kompetensi</a></li>
            </ul>
          </li>
          <!-- <li><a class="klik_menu" id="skema">Skema</a></li> -->
          <li><a class="klik_menu" id="galeri">Galeri</a></li>
          <li><a class="klik_menu" id="berita">Berita</a></li>
          <li class="dropdown"><a><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="klik_menu" id="faq">Faq</a></li>
              <li><a class="klik_menu" id="visi">Visi Misi</a></li>
            </ul>
          </li>
          <li class="dropdown"><a><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="klik_menu" id="login" href="LSP/login2.php">Login LSP</a></li>
              <li><a class="klik_menu" id="login" href="lsp/register.php">Register</a></li>
            </ul>
          </li>
        </ul>
      </div>  
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
<div class="container" id="konten">
    <div class="row">
        <div class="col-sm-8">
            <div class="thumbnail">
                </nav>
                <img src="assets/img/profil3.png" width="100%" alt="Cinque Terre">
                <div class="caption">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris</p>
                    <hr>
                </div>
                <form enctype="multipart/form-data" method="POST" action="">
                <div class="comment">
                    <label><h2>Leave a coment</h2></label>
                    
                      <div class="form-group">
                        <label>Subject:</label>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="masukkan subject">
                    </div>
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="masukkan nama anda">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="masukkan email yang valid">
                    </div>

                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea name="pesan" class="ckeditor" id="ckedtor"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="kirim" class="btn btn-primary">Submit</button>
                    </div>

                </div>
                </form>

            </div>
        </div>

        <div class="col-sm-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="caption">
                        <h4>Web Programming</h4>
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="assets/img/profil3.png" width="100%" alt="Cinque Terre">
                            </div>
                            <div class="col-sm-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisgna aliqua. adipisgna aliqua</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="caption">
                        <h4>Belajar HTML & CSS</h4>
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="assets/img/profil3.png" width="100%" alt="Cinque Terre">
                            </div>
                            <div class="col-sm-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisgna aliqua. adipisgna aliqua</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="caption">
                        <h4>Desain UI & UX</h4>
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="assets/img/profil3.png" width="100%" alt="Cinque Terre">
                            </div>
                            <div class="col-sm-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisgna aliqua. adipisgna aliqua</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="caption">
                        <h4>Belajar Python</h4>
                        <div class="row">
                            <div class="col-xl-3">
                                <img src="assets/img/profil3.png" width="100%"alt="Cinque Terre">
                            </div>
                            <div class="col-sm-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisgna aliqua. adipisgna aliqua</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <img src="https://i1.wp.com/balubu.com/wp-content/uploads/2018/02/jenis-contoh-iklan.jpg?fit=900%2C433&ssl=1" width="100%"alt="Cinque Terre">
                </div>
            </div>

        </div>
        </div>
    </div>
</div>
       </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= --> <footer id="footer">
        <div class="container">
          <div class="row">
            <div class="footer-ribbon">
              <span>LSP P1 Trisakti</span>
            </div>
            <div class="col-md-3">
              <div class="newsletter">
                <h4>Berita Terkini</h4>
            <ul class="widget-2">
                                    <li>
                        <a class="ee" href="profile/index/45">JADWAL UJI KOMPETENSI PERHOTELAN ANGKATAN 2017 (WUXI, GTU, CHINA) TAHUN 2021</a>
                    </li>
                                    <li>
                        <a href="profile/index/43">JADWAL PELAKSANAAN UJI KOMPETENSI PERHOTELAN ANGKATAN 2017 (WUXI, GTU, CHINA) TAHUN 2021</a>
                    </li>
                                    <li>
                        <a href="profile/index/36">DAFTAR PRA UJIKOM </a>
                    </li>
                                    <li>
                        <a href="profile/index/27">LSP-P1 Sekolah Tinggi Pariwisata Trisakti selenggarakan Pelatihan Calon Asesor Kompetensi dan RCC Ge</a>
                    </li>
                
            </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="contact-details">
                <h4>Link Terkait</h4>
                <ul class="contact">
                  <li><a href="#">BNP</a></li>
                  <li><a href="#">WEB</a></li>
                  <li><a href="#">SITE</a></li>
                  <li><a href="#">ADMIN</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="contact-details">
                <h4>Contact Us</h4>
                <ul class="contact">
                  <li><p><i class="bi-marker"></i> <strong>Alamat:</strong> Jl. lorem epsum xxxx 123 eprona epsium epsum</p></li>
                  <li><p><i class="bi-phone"></i> <strong>Phone: 021-*****</strong></p></li>
                  <li><p><i class="bi-mailbox"></i> Fax: 02*-******</p></li>
                  <li><p><i class="bi-envelope"></i> <strong>Email:</strong> <a href="gmail.com">lsp****@gmail.com</a></p></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <h4>Statistik Pengunjung</h4>

              <p style="font-size: 18px;">Hari ini : 322</p>
              <p style="font-size: 18px;">Total : 222837</p>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <p>© Copyright 2020. Develoved by Mitra Buana Solusindo</p>
              </div>
              <div class="col-md-4">
                <nav id="sub-menu">
                  <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="album_galeri/galeri_album">Galeri</a></li>
                    <li><a href="faq/view">FAQ's</a></li>
                    <li><a href="kontak/view">Kontak</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  
  <!-- Template Main JS File -->

  <script src="assets/js/main.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
    $('.klik_menu').click(function(){
      var menu = $(this).attr('id');
      if(menu == "home"){
        $('#konten').load('indextes.php');           
      }else if(menu == "tentang"){
        $('#konten').load('page/tentang.php');            
      }else if(menu == "skema"){
        $('#konten').load('page/skema.php');           
      }else if(menu == "galeri"){
        $('#konten').load('page/galeri.php');           
      }else if(menu == "berita"){
        $('#konten').load('page/berita.php');           
      }else if(menu == "faq"){
        $('#konten').load('page/faq.php');           
      }else if(menu == "tentang"){
        $('#konten').load('page/tentang.php');           
      }else if(menu == "visi"){
        $('#konten').load('page/visimisi.php');           
      }else if(menu == "profil"){
        $('#konten').load('page/profil.php');           
      }else if(menu == "artikel"){
        $('#konten').load('page/artikeldetail.php');           
      }else if(menu == "tempat"){
        $('#konten').load('page/tempat.php');           
      }else if(menu == "jadwal"){
        $('#konten').load('page/jadwal.php');           
      }else if(menu == "asesor"){
        $('#konten').load('page/asesor.php');           
      }

    });
 
 
    // halaman yang di load default pertama kali
    $('#badan').load('indextes.php');           
 
  });
</script>

<script type="text/javascript">
  $(document).ready( function () {
    $('.data').DataTable();
} );
</script>
</body>

</html>