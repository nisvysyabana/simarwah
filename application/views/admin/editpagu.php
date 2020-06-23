<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Content Row -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style='text-transform:capitalize'>Tabel <?=  $title; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Fakultas</>
                            <th>Nama Ormawa</th>
                            <th>Tahun Ajaran</th>
                            <th>Pagu Anggaran</th>
                            <th>Aksi</th>
                            <th>Sisa Dana Pagu Anggaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Saintek</td>
                            <td>Teknik Informatika</td>
                            <td>2019/2020</td>
                            <td>Rp. 13.000.000</td>
                            <td class="align-self-auto">
                                <!-- Button trigger modal -->
                                <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-light shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pen"></i>
                                Edit Anggaran
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">FORM INPUT ANGGARAN</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="" action="">
                                            <div class="form-group " >
                                            <label">
                                                Fakultas </t></label>
                                                </t><input type="text" name="fakultas" readonly class="form-control" value="Saintek">
                                            </div> 
                                            <div class="form-group " >
                                            <label">
                                                Nama Ormawa </t></label>
                                                </t><input type="text" name="fakultas" readonly class="form-control" value="Himatif">
                                            </div> 
                                            <div class="form-group " >
                                            <label">
                                                Tahun Ajaran </t></label>
                                                </t><input type="text" name="fakultas" readonly class="form-control" value="2019/2020">
                                            </div>  
                                            <div class="form-group">
                                            <label">
                                                Pagu Anggaran<input type="text" name="dana_pagu"class="form-control">
                                            </label>
                                            </div> 
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                            <td>Rp. 12.000.000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Saintek</td>
                            <td>Biologi</td>
                            <td>2019/2020</td>
                            <td>Rp. 15.000.000</td>
                            <td class="align-self-auto">
                                <!-- Button trigger modal -->
                                <button type="button" class=" d-none d-sm-inline-block btn btn-sm btn-light shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pen"></i>
                                Edit Anggaran
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel">FORM INPUT ANGGARAN</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="" action="">
                                            <div class="form-group" >
                                            <label">
                                                Fakultas
                                                <input type="text" name="fakultas" class="form-control">
                                            </label>
                                            </div> 

                                            <div class="form-group">
                                            <label">
                                                Nama Ormawa
                                                <input type="text" name="username" class="form-control">
                                            </label>
                                            </div> 

                                            <div class="form-group">
                                            <label">
                                                Tahun Ajaran
                                                <input type="text" name="thn_aktif"class="form-control">
                                            </label>
                                            </div> 
                                            <div class="form-group">
                                            <label">
                                                Pagu Anggaran<input type="text" name="dana_pagu"class="form-control">
                                            </label>
                                            </div> 
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                            <td>Rp. 11.000.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>