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
                        <h3 class="card-title">Rincian Kegiatan</h3>
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
                        <div class="row mb-2">
                              <div class="col-sm-4">
                                    <img src="<?php echo base_url('foto/'.$kgtn->foto_flyer)?>" alt="">
                              </div>
                              <div class="col-sm-8">
                                    <table class="table table-striped">
                                          <tbody>
                                                <tr><td>Judul</td><td><?=$kgtn->judul?></td></tr>
                                                <tr><td>Kapasitas</td><td><?=$kgtn->kapasitas?></td></tr>
                                                <tr><td>Harga</td><td><?=$kgtn->harga_tiket?></td></tr>
                                                <tr><td>Tanggal</td><td><?=$kgtn->tanggal?></td></tr>
                                                <tr><td>Tempat</td><td><?=$kgtn->tempat?></td></tr>
                                                <tr><td>Narasumber</td><td><?=$kgtn->narasumber?></td></tr>
                                                <tr><td>Penanggung Jawab</td><td><?=$kgtn->pic?></td></tr>
                                                <tr><td>Kegiatan</td><td><?=$kgtn->jenis_id?></td></tr>
                                          </tbody>
                                    </table>
                              </div>
                        </div>