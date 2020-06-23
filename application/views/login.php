<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>simarwa</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/simarwahjquery.bxslider.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/simarwahfont-awesome.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/simarwahbootstrap.min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/simarwahanimate.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/simarwahstyle.css') ?>">
  <!-- =======================================================
    Theme Name: Baker
    Theme URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <!--HEADER-->
  <div>
    <nav class="navbar navbar-defaulta navbar-fixed-top" style="margin: 10px;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">SI<span class="logo-dec">MARWA</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="<?php echo base_url() . 'c_home/index'; ?>">Tentang Kami</a></li>
            <li class=""><a href="<?php echo base_url() . 'c_home/ormawa'; ?>">ORMAWA</a></li>
            <li class=""><a href="<?php echo base_url() . 'c_home/semuaukm'; ?>">UKM&UKK</a></li>
            <li class=""><a href="#">Daftar Kegiatan</a></li>
            <li class=""><a href="#">Peminjaman Aula SC</a></li>
            <li class="active"><a href="">LOGIN</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!--/ HEADER-->
  <!---->
  <section id="service" class="section-padding wow fadeInUp delay-05s">

    <div class="container">
      <div class="row" style="margin: auto; margin-top: 30px; padding: 50px; width: 30%;">
        <div class="text-center">
          <h2 class="service-title pad-bt15">LOG IN</h2>
          <hr class="bottom-line">
          <?= $this->session->flashdata('massage'); ?>
        </div>

        <div class="row" style="margin-bottom: 40px; text-align: center;">
            <div class="contact-form">
              <form action="<?php echo base_url('data/aksi_login_user'); ?>" method="post" style="margin: auto;">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group po">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" />

                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                  <button type="submit" class="btn btn-primary btn-submit text-center">Sign in</button>
                </div>
              </form>

            </div>
        </div>
      </div>
    </div>

  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer" id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <img src="<?php echo base_url('assets/img/uinn.png') ?>" style="width:130px;height:130px; margin: auto;">
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <h3 style="font-size: 30px;">SI<span class="logo-dec">MARWA</span></h3>
            <ul>
              <li><a href="https://uinsgd.ac.id">UIN Sunan Gunung Djati</a></li>
              <li>
                <p>Bandung</p>
              </li>
              <li>
                <p>Jawa Barat</p>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 col-sm-4 col-xs-4">
            <ul>
              <li>
                <h5> <a href="index.html">Tentang SIMARWA</a> </h5>
              </li>
              <li>
                <h5><a href="#">Panduan</a> </h5>
              </li>
              <li>
                <h5><a href="#">Kontak</a> </h5>
              </li>
              <li>
                <h5><a href="#">Lokasi Kami</a> </h5>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!---->

  <script src="<?php echo base_url('assets/js/simarwahjquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/simarwahjquery.easing.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/simarwahbootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/simarwahwow.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/simarwah/jquery.bxslider.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/simarwahcustom.js') ?>"></script>
  <script src="<?php echo base_url('contactform/contactform.js') ?>"></script>

</body>

</html>