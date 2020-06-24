
                <!-- Banner -->
                <section id="banner">
                    <div class="content">
                        <header>
                            <h1>HI, ADMIN ! </h1>
                            <p>Anda diharuskan Update Profile terlebih dahulu agar dapat melakukan akses ke menu
                                lainnya.</p>
                        </header>

                    </div>
                    <span class="image object">
                        <img src="<?php echo base_url('assets/img/profile.png')?>" alt="" />
                    </span>
                </section>
                <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>" type="text/javascript"></script>
                <!-- Section -->
                <section>
                    <!-- <form action="<?php echo base_url(). 'data/tambahdata_ormawa'; ?>" method="post"> -->
                    <form method="post" action="<?php echo base_url("c_user/save_multiple_ormawa"); ?>">
                    <header class="major">
                        <h2>Informasi Umum</h2>
                    </header>
                    <div class="features">
                        <article>

                            <div class="content">
                                <h3>Nama Organisasi :</h3>
                                <div class="input">
                                    <input type="text" name="nm_himp" placeholder="Isikan nama lengkap Organisasi"
                                        maxlength="100" autofocus style="width: 400px;height: 50px;">
                                </div>
                            </div>

                        </article>
                        <article>
                            <div class="content">
                                <h3>Tentang Organisasi :</h3>
                                <div class="input">
                                    <input type="text" name="tentang_himp" placeholder="Isikan informasi lengkap Organisasi"
                                        maxlength="300" autofocus style="width: 400px;height: 100px;">
                                </div>
                            </div>

                        </article>
                        <article>
                            <div class="content">
                                <h3>Visi :</h3>
                                <div class="input">
                                    <input type="text" name="visi_himp" placeholder="Isikan visi Organisasi" maxlength="200"
                                        autofocus style="width: 400px;height: 100px;">
                                </div>
                            </div>

                        </article>
                        <article>
                            <div class="content">
                                <h3>Misi :</h3>
                                <div class="input">
                                    <input type="text" name="misi_himp" placeholder="Isikan misi Organisasi" maxlength="400"
                                        autofocus style="width: 400px;height: 100px;">
                                </div>
                            </div>
                        </article>
                    </div>

                    <header class="major">
                        <h2>Struktur Organisasi</h2>
                    </header>
                    <article>
                            <div class="content">
                                <h3>Tingkat I (Ketua Organisasi)</h3>
                                <div class="input">
                                    <input type="text" name="ketua_himp" placeholder="Nama Ketua Organisasi" maxlength="400"
                                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;">
                                </div>
                            </div>
                    </article>

                    <article>
                            <div class="content">
                                <h3>Tingkat II (Wakil Ketua Organisasi)</h3>
                                <div class="input">
                                    <input type="text" name="wakil_himp" placeholder="Nama Wakil Ketua Organisasi" maxlength="400"
                                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;">
                                </div>
                            </div>
                    </article>
                    <article>
                            <div class="content">
                                <h3>Tingkat III (Bendahara/Sekertaris Organisasi)</h3>

                                <div class="input">
                                    <input type="text" name="sekretaris_himp" placeholder="Nama Sekertaris Organisasi" maxlength="400"
                                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;">
                                        <input type="text" name="bendahara_himp" placeholder="Nama Bendahara Organisasi" maxlength="400"
                                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;">
                                </div>
                            </div>
                    </article>
                    <div class="col-sm-12 col-md-12 col-lg-12">   
                            <!-- <div class="content"> -->
                                <h3>Tingkat IV (Nama Bidang Organisasi)</h3>
                                <button type="button" id="btn-tambah-form" style="margin-bottom: 30px;">Tambah Bidang</button>
                                <button type="button" id="btn-reset-form" style="margin-bottom: 30px;">Hapus Bidang</button>

                                <br>
                                <div class="input">
                                    <input type="text" name="nm_bidang[]" placeholder="Nama Bidang" maxlength="400"
                                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;">
                                </div>
                                <div class="input">
                                    <input type="text" name="ketua_bidang[]" placeholder="Ketua" maxlength="400"
                                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;">
                                </div>
                                <div class="input">
                                    <input type="text" name="nm_anggota[]" placeholder="Anggota" maxlength="400"
                                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;">
                                </div>
                                <div id="add-anggota" class="input">
                                <input type="hidden" id="jumlah-anggota" value="1">
                                </div>
                                <button type="button" id="btn-tambah-anggota" style="margin-bottom: 30px;">Tambah Anggota</button>
                                <button type="button" id="btn-reset-anggota" style="margin-bottom: 30px;">Hapus Anggota</button>
                            <!-- </div> -->
                </div>
                <div id="insert-form" class="col-sm-12 col-md-12 col-lg-12">
                <input type="hidden" id="jumlah-form" value="1">
                </div>

                    <div class="row gtr-200">
                        <div class="col-2 col-12-medium">
                                <p><button type="submit" class="btn btn-primary">Update</button></p>
                        </div>
                    </div>
                </form>
                </section>
<script>
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    $("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
      
      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form
      $("#insert-form").append(
        "<p>" + "Form Bidang Ke : "+nextform+ "</p>" +
        "<br>" + 
        "<div class=input>"+
            "<input type=text name=nm_bidang[] placeholder=Nama Bidang Organisasi maxlength=400 autofocus style=width:400px;height: 50px; margin-bottom: 30px;>" + 
        "</div>" +
        "<br>" + 
         "<div class=input>"+
            "<input type=text name=ketua_bidang[] placeholder= Ketua maxlength=400 autofocus style=width:400px;height: 50px; margin-bottom: 30px;>" + 
        "</div>" +
        "<br>" + 
         "<div class=input>"+
            "<input type=text name=anggota_bidang[] placeholder= Anggota maxlength=400 autofocus style=width:400px;height: 50px; margin-bottom: 30px;>" + 
        "</div>" +
        "<br>" +
        "<button type=button id=btn-tambah-anggota style=margin-bottom: 30px;>Tambah Anggota</button>" + 
        "<button type=button id=btn-reset-anggota style=margin-bottom: 30px;>Hapus Anggota</button>" +
        "<br>"
        );
      
      $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });
    
    // Buat fungsi untuk mereset form ke semula
    $("#btn-reset-form").click(function(){
      $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
      $("#jumlah-form").val("1");// Ubah kembali value jumlah form menjadi 1
    });
  });
  </script>
  <script>
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    $("#btn-tambah-anggota").click(function(){ // Ketika tombol Tambah Data Form di klik
      var jumlah_anggota = parseInt($("#jumlah-anggota").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform_anggota = jumlah_anggota + 1; // Tambah 1 untuk jumlah form nya
      
      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form
      $("#add-anggota").append(
         "<div class=input>"+
            "<input type=text name=anggota_bidang[] placeholder= Anggota maxlength=400 autofocus style=width:400px;height: 50px; margin-bottom: 30px;>" + 
        "</div>" + 
        "<br>"
        );
      
      $("#jumlah-anggota").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });
    
    // Buat fungsi untuk mereset form ke semula
    $("#btn-reset-anggota").click(function(){
      $("#add-anggota").html(""); // Kita kosongkan isi dari div insert-form
      $("#jumlah-anggota").val("1");// Ubah kembali value jumlah form menjadi 1
    });
  });
  </script>

                <!-- Section -->
                <section>
                    <header class="major">
                        <h2>Ipsum sed dolor</h2>
                    </header>
                    <div class="posts">
                        <article>
                            <form>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3">
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    First radio
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Second radio
                                                </label>
                                            </div>
                                            <div class="form-check disabled">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios3" value="option3" disabled>
                                                <label class="form-check-label" for="gridRadios3">
                                                    Third disabled radio
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <div class="col-sm-2">Checkbox</div>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label" for="gridCheck1">
                                                Example checkbox
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </article>
                    </div>
                </section>

            </div>
        </div>