<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>simarwa</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords"
    content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/simarwahjquery.bxslider.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/simarwahfont-awesome.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/simarwahbootstrap.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/simarwahanimate.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/simarwahstyle.css')?>">
  <!-- =======================================================
    Theme Name: Baker
    Theme URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div class="loader"></div>
  <div id="myDiv">
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
              <li class=""><a href="<?php echo base_url().'c_home/index';?>">Tentang Kami</a></li>
              <li class="active"><a href="">ORMAWA</a></li>
              <li class=""><a href="<?php echo base_url().'c_home/semuaukm';?>">UKM&UKK</a></li>
              <li class=""><a href="#">Daftar Kegiatan</a></li>
              <li class=""><a href="#">Peminjaman Aula SC</a></li>
              <li class=""><a href="<?php echo base_url().'c_home/login';?>">LOGIN</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!--/ HEADER-->
    <!---->
    <section id="ormawa" class="section-padding wow fadeInUp delay-05s" style="background-color: #f3f3f3">

      <div class="container">
        <div class="row" style="margin-bottom: 30px;">
          <div class="col-md-12 text-center" style="margin-top: 50px;">
            <h2 class="service-title pad-bt15" style="font-family: fixed; font-size: 40px">Organisasi Mahasiswa</h2>
            <!-- <p class="sub-title pad-bt15"></p> -->
            <hr class="bottom-line">
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="kotakb" style="margin-left: 250px;">
              <div class="service-item">
                <a href="<?php echo base_url().'c_home/semaun';?>">
                  <img src="<?php echo base_url('assets/img/semau.jpg')?>" style="width:100px;height:100px; margin: 10px;">
                  <h3><span>S</span>EMA-U</h3>
                  <p>SEMA-U adalah Senat Mahasiswa Universitas</p>
                </a>
              </div>
            </div>
          </div>
          <br>
          <br>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="kotakb" style="margin-right: 250px;">
              <div class="service-item">
                <a href="<?php echo base_url().'c_home/demau';?>">
                  <img src="<?php echo base_url('assets/img/demau.jpg')?>" style="width:100px;height:100px; margin: 10px;">
                  <h3><span>D</span>EMA-U</h3>
                  <p>DEMA-U adalah Dewan Mahasiswa Universitas</p>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row" style="margin-bottom: 30px;">
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="service-item">
              <div class="kotak">
                <a href="<?php echo base_url().'c_home/fakultas';?>">
                  <h3><span>SAINTEK</span></h3>
                  <p>Fakultas Sains dan Teknologi</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="service-item">
              <div class="kotakb">
                <a href="">
                  <h3><span>SYARKUM</span></h3>
                  <p>Fakultas Syariah dan Hukum</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="service-item">
              <div class="kotak">
                <a href="">
                  <h3><span>FIDKOM</span></h3>
                  <p>Fakultas Ilmu Dakwah dan Komunikasi</p>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row" style="margin-bottom: 30px;">
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="service-item">
              <div class="kotakb">
                <a href="">
                  <h3><span>FISIP</span></h3>
                  <p>Fakultas Ilmu Sosial dan Ilmu Politik</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="service-item">
              <div class="kotak">
                <a href="">
                  <h3><span>ADHUM</span></h3>
                  <p>Fakultas Adab dan Humaniora</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="service-item">
              <div class="kotakb">
                <a href="">
                  <h3><span>FEBI</span></h3>
                  <p>Fakultas Ekonomi dan Bisnis</p>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row" style="margin-bottom: 30px;">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <div class="kotak">
                <a href="">
                  <h3><span>Tarbiyah</span></h3>
                  <p>Fakultas Tarbiyah dan Ilmu Keguruan</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <div class="kotakb">
                <a href="">
                  <h3><span>Ushuluddin</span></h3>
                  <p>Fakultas Ushuluddin</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <div class="kotak">
                <a href="">
                  <h3><span>Psikologi</span></h3>
                  <p>Fakultas Psikologi</p>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!---->
    <!---->
    <footer>
      <div class="footer" id="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <img src="<?php echo base_url('assets/img/uinn.png')?>" style="width:150px;height:150px; margin: 10px;">
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
                  <h5> <a href="<?php echo base_url().'c_home/index';?>">Tentang SIMARWA</a> </h5>
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
  </div>
  <script src="<?php echo base_url('assets/js/simarwahjquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/simarwahjquery.easing.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/simarwahbootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/simarwahwow.js')?>"></script>
  <script src="<?php echo base_url('assets/js/simarwah/jquery.bxslider.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/simarwahcustom.js')?>"></script>
  <script src="<?php echo base_url('contactform/contactform.js')?>"></script>

</body>

</html>