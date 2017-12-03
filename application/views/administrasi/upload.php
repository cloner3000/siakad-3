
<!DOCTYPE html>
<html>
<?php $this->load->view('administrasi/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('administrasi/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('administrasi/leftbar') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Verifikasi Berkas TA
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/c_admin/index'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
  <div class="container">

    <div class="section">
    <label>Judul</label>
    <select>
      <option value="" disabled selected>Silahkan pilih salah satu</option>
      <option value="1">Aplikasi Diagnosis Penyakit Utama Tanaman Kopi Dengan Metode Naive Bayes Berbasis Android</option>
      <option value="2">Aplikasi Manajemen Perkantoran Klinik Dokterku Taman Gading</option>
      <option value="3">Aplikasi Jasa Service Dan Penjualan Sparepart Berbasis Desktop</option>
      <option value="4">Aplikasi Media Pembelajaran Olaharaga Futsal Berbasis Android</option>
      <option value="5">Implementasi Web Service Restful Pada Website E-Commerce Distro Potlot 14 Jember</option>
      <option value="6">Aplikasi Pembanding Algoritma Shortest Path Berbasis Dekstop</option>
    </select>

      <table class="bordered highlight">
        <tbody>
          <tr>
            <td>1. File scan Berita Acara</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal1">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="1" checked="checked"/><label for="1">Verifikasi</label></td>
          </tr>
          <tr>
            <td>2. File Sampul</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal2">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="2" checked="checked"/><label for="2">Verifikasi</label></td>
          </tr>
          <tr>
            <td>3. File scan Pengesahan TA</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal3">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="3" checked="checked"/><label for="3">Verifikasi</label></td>
          </tr>
          <tr>
            <td>4. File Persembahan</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal4">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="4" checked="checked"/><label for="4">Verifikasi</label></td>
          </tr>
          <tr>
            <td>5. File Motto</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal5">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="5" checked="checked"/><label for="5">Verifikasi</label></td>
          </tr>
          <tr>
            <td>6. File scan Pernyataan TA</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal6">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="6" checked="checked"/><label for="6">Verifikasi</label></td>
          </tr>
          <tr>
            <td>7. File Abstrak</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal7">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="7" checked="checked"/><label for="7">Verifikasi</label></td>
          </tr>
          <tr>
            <td>8. File Ringkasan</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal8">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="8" checked="checked"/><label for="8">Verifikasi</label></td>
          </tr>
          <tr>
            <td>9. File Prakata</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal9">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="9" checked="checked"/><label for="9">Verifikasi</label></td>
          </tr>
          <tr>
            <td>10. File Daftar Isi</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal10">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="10" checked="checked"/><label for="10">Verifikasi</label></td>
          </tr>
          <tr>
            <td>11. File Daftar Tabel</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal11">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="11" checked="checked"/><label for="11">Verifikasi</label></td>
          </tr>
          <tr>
            <td>12. File Daftar Gambar</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal12">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="12" checked="checked"/><label for="12">Verifikasi</label></td>
          </tr>
          <tr>
            <td>13. File Daftar Lampiran</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal13">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="13" checked="checked"/><label for="13">Verifikasi</label></td>
          </tr>
          <tr>
            <td>14. File Bab 1</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal14">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="14" checked="checked"/><label for="14">Verifikasi</label></td>
          </tr>
          <tr>
            <td>15. File Bab 2</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal15">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="15" checked="checked"/><label for="15">Verifikasi</label></td>
          </tr>
          <tr>
            <td>16. File Bab 3</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal16">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="16" checked="checked"/><label for="16">Verifikasi</label></td>
          </tr>
          <tr>
            <td>17. File Bab 4</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal17">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="17" checked="checked"/><label for="17">Verifikasi</label></td>
          </tr>
          <tr>
            <td>18. File Bab 5</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal18">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="18" checked="checked"/><label for="18">Verifikasi</label></td>
          </tr>
          <tr>
            <td>19. File Daftar Pustaka</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal19">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="19" checked="checked"/><label for="19">Verifikasi</label></td>
          </tr>
          <tr>
            <td>20. File Lampiran</td>
            <td><a class="waves-effect waves-light blue darken-1 btn modal-trigger" data-target="modal20">Cek File</a></td>
            <td><input type="checkbox" class="filled-in" id="20" checked="checked"/><label for="20">Verifikasi</label></td>
          </tr>
        </tbody>
      </table>
      <br><br>

      <div class="row">
        <div class="col s3">*File berupa PDF</div>
        <div class="col s3"></div>
        <div class="col s3"></div>
        <div class="col s3"><a class="waves-effect waves-light indigo darken-4 btn">Verifikasi Berkas</a></div>
      </div>

    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('administrasi/footer') ?>
</body>
</html>
