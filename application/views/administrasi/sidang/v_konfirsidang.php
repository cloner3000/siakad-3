<!DOCTYPE html>
<html>
<?php $this->load->view('administrasi/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('administrasi/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('administrasi/leftbar') ?>
<!-- Content Header (Page header) -->
<div class="content-wrapper">
<section class="content-header">
     <h1>
        Konfirmasi Pendaftaran Tugas Akhir
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('#'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
      <div class="container">
          <div class="section">
            <div class="col-md-12">
                <div class="form-group">
                              <label>NIM</label>
                              <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_mhs->NIM; ?>">
                </div>
                <div class="form-group">
                              <label>Nama Mahasiswa</label>
                              <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_mhs->nama_mahasiswa; ?>">
                </div>
                <div class="form-group">
                              <label>Judul Tugas Akhir</label>
                              <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_mhs->judul_TA; ?>">
                </div>
                <div class="form-group">
                              <label>Dosen Pembimbing 1</label>
                              <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php echo $detail_mhs->nm_dosen; ?>">
                </div>
                <div class="form-group">
                              <label>Kartu Hasil Studi (1-5)</label>
                              <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php 
                              if (empty($detail_mhs->khs_semester_1) || empty($detail_mhs->khs_semester_2) || empty($detail_mhs->khs_semester_3) || empty($detail_mhs->khs_semester_4) || empty($detail_mhs->khs_semester_5)) {

                                echo "Berkas Tidak Lengkap";
                                }else{
                                  echo "Berkas Lengkap";
                                  }

                                  ?>">
                </div>
                <div class="form-group">
                              <label>Dokumen Proposal</label>
                              <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php 
                              if (empty($detail_mhs->laporan_proposal)) {

                                echo "Berkas Tidak Lengkap";
                                }else{
                                  echo "Berkas lengkap";
                                  }

                                  ?>">
                </div>
                <div class="form-group">
                              <label>Bukti SPP Terakhir</label>
                              <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php 
                              if (empty($detail_mhs->berkas_spp)) {

                              echo "Berkas Tidak Lengkap";
                              }else{
                                echo "Berkas Lengkap";
                                }
                                ?>">
                </div>
                <div class="form-group">
                              <label>Kartu Kendali</label>
                              <input type="text" class="form-control border-input" disabled placeholder="Judul" value="<?php 
                              if (empty($detail_mhs->lembar_revisi)) {

                              echo "Berkas Tidak Lengkap";
                              }else{
                                echo "Berkas Lengkap";
                                }
                                ?>">
                </div>
                
                    
                <div class="form-group">
                    <div class="col-md-7 col-md-offset-5">
                        <a href="<?php echo site_url("admin/sidang/c_versidang/sidang_acc/".$detail_mhs->NIM); ?> " class="btn btn-success">Konfirmasi</a>
                            <button type="button" class="btn btn-alert" data-toggle="modal" data-target="#tolak">Tolak</button>
                               
                    </div>
                </div>
                    
                </div>
            </div>
          </div>
</section>


<!-- /.content -->
<!-- modal -->
    <div id="tolak" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- konten modal-->
          <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
              
              <h4 class="modal-title">Pesan Peringatan</h4>
            </div>
            <form method="post" enctype="multipart/form-data" action="<?= base_url()?>index.php/admin/sidang/C_versidang/simpan_notifikasi">
            <!-- body modal -->
            <div class="modal-body">
                <div class ="form-group">
                <input type="text" class="form-control" name="isi" required>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                  <input type="submit" class="btn btn-success" name="tolak" Value="Selesai"></input>
                </div>
            </div>
            </form>
        </div>
      </div>
    </div>
<!-- modal ends here -->
<!-- /.content -->
</div>
<!--?php 
//$this->load->view('administrasi/js');
?-->
<!--tambahkan custom js disini-->

<?php $this->load->view('administrasi/footer') ?>
</body>
</html>