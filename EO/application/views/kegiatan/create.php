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
                        <h3 class="card-title">Form Kelola Kegiatan</h3>
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
                        
                        <form action="<?php echo base_url('index.php/kegiatan/save')?>" method="POST" enctype="multipart/form-data">
                              <div class="form-group row">
                                    <label for="judul" class="col-4 col-form-label">Judul Seminar</label>
                                    <div class="col-8">
                                          <input id="judul" name="judul" type="text" class="form-control">
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="kapasitas" class="col-4 col-form-label">Kapasitas Maksimal</label>
                                    <div class="col-8">
                                          <input id="kapasitas" name="kapasitas" type="text" class="form-control">
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="harga" class="col-4 col-form-label">Harga Tiket</label>
                                    <div class="col-8">
                                          <input id="harga" name="harga" type="text" class="form-control">
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="tgl" class="col-4 col-form-label">Tanggal</label>
                                    <div class="col-8">
                                          <input id="tgl" name="tgl" type="date" class="form-control">
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="narsum" class="col-4 col-form-label">Narasumber</label>
                                    <div class="col-8">
                                          <input id="narsum" name="narsum" type="text" class="form-control">
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="tmp" class="col-4 col-form-label">Tempat</label>
                                    <div class="col-8">
                                          <input id="tmp" name="tmp" type="text" class="form-control">
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="pic" class="col-4 col-form-label">Penanggung Jawab</label>
                                    <div class="col-8">
                                          <input id="pic" name="pic" type="text" class="form-control">
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="upload" class="col-4 col-form-label">Upload Poster</label>
                                    <div class="col-8">
                                          <input id="upload" name="upload" type="file">
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="jenis_kegiatan" class="col-4 col-form-label">Jenis Kegiatan</label>
                                    <div class="col-8">
                                          <select id="jenis_id" name="jenis_id" class="custom-select">
                                                <option value="1">Seminar</option>
                                                <option value="2">Workshop</option>
                                                <option value="3">Event Olahraga</option>
                                                <option value="4">Bazaar</option>
                                                <option value="5">Pelatihan</option>
                                          </select>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <div class="offset-4 col-8">
                                          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                              </div>
                        </form>
                  </div>