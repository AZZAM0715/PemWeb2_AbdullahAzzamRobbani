<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pemrograman Web 2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">PRAKTIKUM 2</h3>

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
                Pilih Tugas Praktikum
              </div>
            <div class="list-group">
              <a href="P2_form_belanja.php" class="list-group-item list-group-item-action">1. Form Belanja</a>
              <a href="P2_form_nilai.php" class="list-group-item list-group-item-action">2. Form Nilai</a>
              <a href="P2_nilai_siswa.php" class="list-group-item list-group-item-action">3. Nilai Siawa</a>
            </div> 
              <!-- /.card-body -->
              <div class="card-footer">
                Pemograman Web Lanjutan
                <br>
                Dosen : Sirojul Munir S.Si,M.Kom
                <br>
                by : Abdullah Azzam Robbani
                <br>
                <br>
                <a class="btn btn-primary" href="index.php" role="button">Back</a>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php
include_once 'footer.php';
?>