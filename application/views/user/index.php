
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

                <!-- Section -->
                <section>
                    <form action="<?php echo base_url(). 'data/tambahdata_ormawa'; ?>" method="post">
                    <header class="major">
                        <h2>Informasi Umum</h2>
                    </header>
                    <div class="features">
                        <article>

                            <div class="content">
                                <h3>Nama Organisasi :</h3>
                                <div class="input">
                                    <input type="text" name="nama" placeholder="Isikan nama lengkap Organisasi"
                                        maxlength="100" autofocus style="width: 400px;height: 50px;">
                                </div>
                            </div>

                        </article>
                        <article>
                            <div class="content">
                                <h3>Tentang Organisasi :</h3>
                                <div class="input">
                                    <input type="text" name="tentang" placeholder="Isikan informasi lengkap Organisasi"
                                        maxlength="300" autofocus style="width: 400px;height: 100px;">
                                </div>
                            </div>

                        </article>
                        <article>
                            <div class="content">
                                <h3>Visi :</h3>
                                <div class="input">
                                    <input type="text" name="visi" placeholder="Isikan visi Organisasi" maxlength="200"
                                        autofocus style="width: 400px;height: 100px;">
                                </div>
                            </div>

                        </article>
                        <article>
                            <div class="content">
                                <h3>Misi :</h3>
                                <div class="input">
                                    <input type="text" name="misi" placeholder="Isikan misi Organisasi" maxlength="400"
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
                                    <input type="text" name="misi" placeholder="Nama Ketua Organisasi" maxlength="400"
                                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;">
                                </div>
                            </div>
                    </article>

                    <article>
                            <div class="content">
                                <h3>Tingkat II (Wakil Ketua Organisasi)</h3>
                                <div class="input">
                                    <input type="text" name="misi" placeholder="Nama Wakil Ketua Organisasi" maxlength="400"
                                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;">
                                </div>
                            </div>
                    </article>
                    <article>
                            <div class="content">
                                <h3>Tingkat III (Bendahara/Sekertaris Organisasi)</h3>

                                <div class="input">
                                    <input type="text" name="misi" placeholder="Nama Anggota Organisasi" maxlength="400"
                                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;">
                                        <input type="text" name="misi" placeholder="Nama Anggota Organisasi" maxlength="400"
                                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;">
                                </div>
                            </div>
                    </article>
                    <div class="features">
                    <article>   
                            <div class="content">
                                <h3>Tingkat IV (Nama Bidang Organisasi)</h3>
                                <form method="post" action="<?php echo base_url("index.php/siswa/save"); ?>">
                                <button type="button" id="btn-tambah-form" style="margin-bottom: 30px;">Tambah Bidang</button>
                                <br>
                                <div class="input">
                                    <input type="text" name="namabidang" placeholder="Nama Bidang Organisasi" maxlength="400"
                                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;">
                                </div>
                                <div class="input">
                                    <input type="text" name="nama_ketuabidang" placeholder="Nama Ketua Bidang" maxlength="400"
                                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;">
                                </div>
                                <div class="input">
                                    <input type="text" name="nama_anggotabidang" placeholder="Anggota Bidang" maxlength="400"
                                        autofocus style="width: 400px;height: 50px; margin-bottom: 30px;">
                                </div>
                            </div>
                    </article>
                


                    </div>



                    <div class="row gtr-200">
                        <div class="col-2 col-12-medium">
                        </div>
                        <div class="col-2 col-12-medium">
                        </div>
                        <div class="col-2 col-12-medium">
                        </div>
                        <div class="col-2 col-12-medium">
                        </div>
                        <div class="col-2 col-12-medium">
                        </div>
                        <div class="col-2 col-12-medium">
                                <p><button type="button" class="btn btn-primary">Update</button></p>
                        </div>
                    </div>
                </form>
                </section>

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