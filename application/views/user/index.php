
<!-- Banner -->
<section id="banner">
    <div class="content">
        <header>
            <h1>HI, <?php echo strtoupper($this->session->userdata('username')) ?> ! </h1>
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

    <?php if($this->session->userdata('data_himpunan') == "true")
    {?>
        <?php foreach($himpunan as $himp){ ?>
            <form action="<?php echo base_url(). 'c_user/update_ormawa'; ?>" method="post">
                <div class="features">
                    <article>
                      <div class="content">
                        <h3>Nama Organisasi :</h3>
                        <div class="input">
                            <input type="text" name="nm_himp" placeholder="Isikan nama lengkap Organisasi" readonly 
                            maxlength="100" autofocus style="width: 400px;height: 50px;" value="<?php echo $himp->nm_himp?>" text-transform:uppercase>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="content">
                        <h3>Tentang Organisasi :</h3>
                        <div class="input">
                            <input type="text" name="tentang_himp" placeholder="Isikan informasi lengkap Organisasi"
                            maxlength="300" autofocus style="width: 400px;height: 100px;" value="<?php echo $himp->tentang_himp?>">
                        </div>
                    </div>

                </article>
                <article>
                    <div class="content">
                        <h3>Visi :</h3>
                        <div class="input">
                            <input type="text" name="visi_himp" placeholder="Isikan visi Organisasi" maxlength="200"
                            autofocus style="width: 400px;height: 100px;" value="<?php echo $himp->visi_himp?>">
                        </div>
                    </div>

                </article>
                <article>
                    <div class="content">
                        <h3>Misi :</h3>
                        <div class="input">
                            <input type="text" name="misi_himp" placeholder="Isikan misi Organisasi" maxlength="400"
                            autofocus style="width: 400px;height: 100px;" value="<?php echo $himp->misi_himp?>">
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
                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;" value="<?php echo $himp->ketua_himp?>">
                    </div>
                </div>
            </article>

            <article>
                <div class="content">
                    <h3>Tingkat II (Wakil Ketua Organisasi)</h3>
                    <div class="input">
                        <input type="text" name="wakil_himp" placeholder="Nama Wakil Ketua Organisasi" maxlength="400"
                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;" value="<?php echo $himp->wakil_himp?>">
                    </div>
                </div>
            </article>
            <article>
                <div class="content">
                    <h3>Tingkat III (Bendahara/Sekertaris Organisasi)</h3>

                    <div class="input">
                        <input type="text" name="sekretaris_himp" placeholder="Nama Sekertaris Organisasi" maxlength="400"
                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;" value="<?php echo $himp->sekretaris_himp?>">
                        <input type="text" name="bendahara_himp" placeholder="Nama Bendahara Organisasi" maxlength="400"
                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;" value="<?php echo $himp->bendahara_himp?>">
                    </div>
                </div>
            </article>
            <div class="row gtr-200">
    <div class="col-2 col-12-medium">
         <p><button type="submit" class="btn btn-primary">Update</button></p>
    </div>
    </div>
        </form>
    <?php } ?>
<?php } else {?>
   <form action="<?php echo base_url(). 'c_user/tambahdata_ormawa'; ?>" method="post">
      <header class="major">
        <h2>Informasi Umum</h2>
    </header>
    <div class="features">
        <article>
            <div class="content">
                <h3>Nama Organisasi :</h3>
                <div class="input">
                    <input type="text" name="nm_himp" placeholder="Isikan nama lengkap Organisasi"
                    maxlength="100" autofocus style="width: 400px;height: 50px;" value="" text-transform:uppercase>
                </div>
            </div>
        </article>
        <article>
            <div class="content">
                <h3>Tentang Organisasi :</h3>
                <div class="input">
                    <input type="text" name="tentang_himp" placeholder="Isikan informasi lengkap Organisasi"
                    maxlength="300" autofocus style="width: 400px;height: 100px;" value="">
                </div>
            </div>

        </article>
        <article>
            <div class="content">
                <h3>Visi :</h3>
                <div class="input">
                    <input type="text" name="visi_himp" placeholder="Isikan visi Organisasi" maxlength="200"
                    autofocus style="width: 400px;height: 100px;" value="">
                </div>
            </div>

        </article>
        <article>
            <div class="content">
                <h3>Misi :</h3>
                <div class="input">
                    <input type="text" name="misi_himp" placeholder="Isikan misi Organisasi" maxlength="400"
                    autofocus style="width: 400px;height: 100px;" value="">
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
                autofocus style="width: 400px;height: 50px; margin-bottom: 30px;" value="">
            </div>
        </div>
    </article>

    <article>
        <div class="content">
            <h3>Tingkat II (Wakil Ketua Organisasi)</h3>
            <div class="input">
                <input type="text" name="wakil_himp" placeholder="Nama Wakil Ketua Organisasi" maxlength="400"
                autofocus style="width: 400px;height: 50px; margin-bottom: 30px;" value="">
            </div>
        </div>
    </article>
    <article>
        <div class="content">
            <h3>Tingkat III (Bendahara/Sekertaris Organisasi)</h3>

            <div class="input">
                <input type="text" name="sekretaris_himp" placeholder="Nama Sekertaris Organisasi" maxlength="400"
                autofocus style="width: 400px;height: 50px; margin-bottom: 30px;" value="">
                <input type="text" name="bendahara_himp" placeholder="Nama Bendahara Organisasi" maxlength="400"
                autofocus style="width: 400px;height: 50px; margin-bottom: 30px;" value="">
            </div>
        </div>
    </article>
    <div class="row gtr-200">
    <div class="col-2 col-12-medium">
         <p><button type="submit" class="btn btn-primary">Simpan</button></p>
    </div>
    </div>
</form>
<?php } ?>
<form method="post" action="<?php echo base_url("c_user/save_bidang_anggota"); ?>">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <h3>Tingkat IV (Nama Bidang Organisasi)</h3>
        <section id="feature" class="parallax-section col-md-12">
            <br>
            <div class="scrolltable col-md-12">
              <div><h5>Bidang</h5></div>
              <hr>
              <table class="table table-dark">
                <thead>
                    <tr>
                      <th><center>No</center></th>
                      <th>Nama Ketua</th>
                      <!-- <th>Himpunan</th> -->
                      <th>Bidang</th>
                      <!-- <th>Alamat</th> -->
                      <th><center>Aksi</center></th>
                  </tr>
              </thead>
              <?php $id=1; foreach($bidang as $kabid){ ?>
                <tbody>
                    <tr>
                      <td><center><?php echo $id++ ?></center></td>
                      <td><?php echo $kabid->ketua_bidang?></td>
                      <td><?php echo $kabid->kode_bidang ?></td>
                      <td><center>
                        <a class="btn btn-warning" href="<?php echo base_url('c_user/edit_bidang/'.$kabid->id_bidang); ?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url('c_user/hapusbidang/'.$kabid->id_bidang); ?>">Delete</a></center>
                    </td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
    <div><h5>Anggota Bidang</h5></div>
    <hr>
    <table class="table table-dark">
        <thead>
            <tr>
              <th><center>No</center></th>
              <th>Nama</th>
              <th>Himpunan</th>
              <th>Bidang</th>
              <!-- <th>Alamat</th> -->
              <th><center>Aksi</center></th>
          </tr>
      </thead>
      <?php $id=1; foreach($anggota as $agt){ ?>
        <tbody>
            <tr>
              <td><center><?php echo $id++ ?></center></td>
              <td><?php echo $agt->nm_anggota ?></td>
              <td><?php echo $agt->kode_himp ?></td>
              <td><?php echo $agt->kode_bidang ?></td>
              <td><center>
                <a class="btn btn-warning" href="<?php echo base_url('c_user/editadmin/'.$agt->id_anggota); ?>">Edit</a>
                <a class="btn btn-danger" href="<?php echo base_url('c_user/hapusadmin/'.$agt->id_anggota); ?>">Delete</a>
            </center>
        </td>
    </tr>
</tbody>
<?php } ?>
</table>  </div>
<br>
<!-- u/ field bidang dinamis -->
<!-- <div id="insert-form" class="col-sm-12 col-md-12 col-lg-12">
    <input type="hidden" id="jumlah-form" value="1">
</div> -->
<!-- <button type="button" id="btn-tambah-form" style="margin-bottom: 30px;">Tambah Bidang</button> -->
<!-- akhir field bidang dinamis -->

<div class="input"><input type="text" name="nm_bidang[]" placeholder="Nama Bidang" maxlength="400"autofocus style="width: 400px;height: 50px; margin-bottom: 30px;text-transform:uppercase"></div>
<div class="input"><input type="text" name="ketua_bidang[]" placeholder="Ketua" maxlength="400"autofocus style="width: 400px;height: 50px; margin-bottom: 30px;"></div>
<button type="button" name="addanggota" id="addanggota" class="btn btn-success">Tambah Anggota</button>
<div id="dynamic_field" class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 30">
    <br>
    <input type="hidden" id="jumlah-form" value="1">
</div>
<hr>
<div class="row gtr-200">
    <div class="col-2 col-12-medium">
        <p><button type="submit" class="btn btn-primary">Simpan Bidang</button></p>
    </div>
</div>
</form>
</section>
</div>
</section>

<!-- Script u/ field bidang dan anggota dinamis -->
<script>
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    var i=0;
    var z=i;
    var j=0;
    $("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
        i++;
        $("#insert-form").append(
            '<div id="formbidang'+i+'"" class="col-md-12"><div class="col-md-4"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Remove Field</button></div><br><div class="input"><input type="text" name="nm_bidang[]" placeholder="Nama Bidang" maxlength="400"autofocus style="width: 400px;height: 50px; margin-bottom: 30px;text-transform:uppercase"></div><div class="input"><input type="text" name="ketua_bidang[]" placeholder="Ketua" maxlength="400"autofocus style="width: 400px;height: 50px; margin-bottom: 30px;"></div><button class="add" type="button" id="'+i+'" style="margin-bottom: 30px;">Tambah Anggota</button><div id="addanggota'+i+'" class="input" style="margin-bottom: 30px"></div><input type="hidden" id="jumlah-anggota" value="1"><hr></div>'
            );
    });
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#formbidang'+button_id+'').remove();});

    $(document).on('click', '.btn_remove_anggota', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();});

    $(document).on('click', '.add', function(){
        var button_id_anggota = $(this).attr("id"); 
        // $('#formbidang'+button_id+'').remove();
        z++;
        $('#addanggota'+button_id_anggota+'').append('<tr id="row'+z+'"><td><input type="text" name="nm_anggota[]" placeholder="Nama Anggota" class="input" style="width:400px";"height: 50px"; "margin-bottom: 30px"; /></td><td><button type="button" name="remove" id="'+z+'" class="btn btn-danger btn_remove_anggota">X</button></td><br></tr>');
    });
});
</script>
<!-- Akhir script field bidang dan anggota dinamis -->

<!-- awal script anggota dinamis -->
<script>
    $(document).ready(function(){
        var i=1;
        $('#addanggota').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="nm_anggota[]" placeholder="Nama Anggota" class="input" style="width:400px";"height: 50px"; "margin-bottom: 30px"; /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_anggota">X</button></td><br></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id"); 
            $('#row'+button_id+'').remove();
        });
    });
</script>

<!-- akhir script anggota dinamis -->

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