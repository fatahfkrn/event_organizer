<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
            <div class="container-fluid">
                  <div class="row mb-2">
                        <div class="col-sm-6">
                              <h1>Kelola Kegiatan</h1>
                        </div>
                        <div class="col-sm-6">
                              <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Blank Page</li>
                              </ol>
                        </div>
                  </div>
            </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

            <!-- Default box -->
            <div class="card">
                  <div class="card-header">
                        <h3 class="card-title">
                              Data Kegiatan Event Organizer
                        </h3>
                        <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                              </button>
                        </div>
                  </div>
                  <div class="card-body">
                        <div class="col-md-12">
                              <h3 class="card-title"><a href="kegiatan/create" class="btn btn-primary">+ Tambah Kegiatan</a></h3>
                              <br><br><br>
                              <table class="table table-striped">
                                    <thead>
                                          <tr class="text-center">
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Kapasitas</th>
                                                <th>Harga Tiket</th>
                                                <th>Tanggal</th>
                                                <th>Tempat</th>
                                                <th>Narasumber</th>
                                                <th>Action</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          <?php
                                                $nomor = 1;
                                                foreach($list_kgtn as $row){
                                          ?>
                                          <tr>
                                                <td><?=$nomor?></td>
                                                <td><?=$row->judul?></td>
                                                <td><?=$row->kapasitas?></td>
                                                <td><?=$row->harga_tiket?></td>
                                                <td><?=$row->tanggal?></td>
                                                <td><?=$row->tempat?></td>
                                                <td><?=$row->narasumber?></td>
                                                <td class="d-flex">
                                                <a class=" btn-secondary btn-xs " href="kegiatan/view?id=<?= $row->id ?>" role="button">View</a>|
                                                <a class=" btn-primary btn-xs " href="kegiatan/edit?id=<?= $row->id ?>" role="button">Edit</a>|
                                                <a class=" btn-danger btn-xs " href="kegiatan/delete?id=<?= $row->id ?>" onclick="if(!confirm('Anda yakin akan menghapus Pendaftaran dengan ID <?= $row->id ?> ?')) {return false}" role="button">Delete</a>|
                                                </td>
                                          </tr>
                                          <?php
                                                $nomor++;
                                                }
                                          ?>
                                    </tbody>
                              </table>
                        </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                        Footer
                  </div>
                  <!-- /.card-footer-->
            </div>
            <!-- /.card -->

      </section>
      <!-- /.content -->
</div>
<!-- /.content-wrapper -->