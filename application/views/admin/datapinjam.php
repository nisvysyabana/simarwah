<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-user-plus"></i> Tambah</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel <?= $title; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ormawa</th>
                            <th>Nama Kegiatan</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Nama Aula</th>
                            <th>Tanggal Book</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Ormawa</th>
                            <th>Nama Kegiatan</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Nama Aula</th>
                            <th>Tanggal Book</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Himatif</td>
                            <td>Muskom Himatif</td>
                            <td>12 Juni 2020</td>
                            <td>13 Juni 2020</td>
                            <td>Aula A</td>
                            <td>20 Mei 2020</td>
                            <td class="text-center">
                                <a href="" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fa fa-trash"></i> Hapus</a>
                                <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-pen"></i> Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>