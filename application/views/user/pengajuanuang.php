                <!-- Content -->
                <section>
                    <header class="main">
                        <!-- <h1>Pagu Keuangan</h1> -->
                    </header>

                    <div class="features">

                        <article>
                            <!-- <span class="icon fa-gem"></span> -->
                            <div class="content">
                                <img src="<?php echo base_url('assets/img/money.png')?>" class="img-fluid" alt="Responsive image" width="100%">
                            </div>
                        </article>
                        <article>
                            <div class="content">
                                <p class="customtext">Pagu Anggaran Keuangan yang Organisasi Anda Miliki sebesar
                                    <br>Rp. 13.000.000</br>
                            </div>
                        </article>
                    </div>

                    <!-- SYARAT CAIR UANG -->
                    <h2>Pengajuan Uang Untuk Kegiatan</h2>
                    <p>Silahkan melengkapi data dibawah ini untuk dapat melakukan pengajuan pencairan dana.</p>
                    <form action="post">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Dokumen</th>
                                    <th>Nama File</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Surat Pengajuan</td>
                                    <td>
                                        <div class="file-upload-custom">
                                            <input class="file-upload__input-custom" type="file" name="myFile[]"
                                                id="myFile" multiple>
                                            <button class="file-upload__button-custom" type="button">Choose A
                                                File</button>
                                            <span class="file-upload__label-custom"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Rincian Kegiatan</td>
                                    <td>
                                        <div class="file-upload-custom">
                                            <input class="file-upload__input-custom" type="file" name="myFile[]"
                                                id="rinciankegiatan" multiple>
                                            <button class="file-upload__button-custom" type="button">Choose A
                                                File</button>
                                            <span class="file-upload__label-custom"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>RKA-KL </td>
                                    <td>
                                        <div class="file-upload-custom">
                                            <input class="file-upload__input-custom" type="file" name="myFile[]"
                                                id="rka" multiple>
                                            <button class="file-upload__button-custom" type="button">Choose A
                                                File</button>
                                            <span class="file-upload__label-custom"></span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
                                <a href="<?php echo base_url().'c_user/Verifikasi_Data';?>">
                                    <p><button type="button" class="btn btn-primary" ">Kirim</button></p>
                                </a>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>