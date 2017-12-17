<?php
            // untuk menampilkan Navigasi Menu Desktop
            ini_set("display_errors",0);
            $user = $_SESSION['nama'];
            ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pendaftaran Tracer Study</title>
	<script>
	$(document).ready(function() {
	$('select').material_select('destroy');
	});
  </script>
	  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.css">
	  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	
  <link href="<?php echo base_url() ?>asset/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
<body>
							
	<nav class="indigo darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Teknologi Informasi</a>
  <ul class="right hide-on-med-and-down">
    <li><a href="#" data-activates="slide-out" class="button-collapse" style="display: initial !important;"">Menu</a></li>
  </ul>

  <ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background">
        <img src="<?php echo base_url() ?>asset/img/bg.jpg">
      </div>
      <a href="#!user"><img class="circle" src="<?php echo base_url() ?>asset/img/logo.png"></a>
      <a href="#!name"><span class="white-text name">Polije | polije.ac.id</span></a>
      <a href="#!email"><span class="white-text email">Hey user, <?php echo $this->session->userdata("nama") ?>
		<a href="<?php echo base_url(); ?>index.php/modul5/login/logout">Log Out</a>
	  </span></a>
    </div></li>
    <li><div class="divider"></div></li>
    <li><a href="#!">Pengajuan Judul</a></li>
    <li><div class="divider"></div></li>
    <li><a href="#!">Pendaftaran Seminar Proposal</a></li>
    <li><div class="divider"></div></li>
    <li><a href="#!">Pendaftaran Sidang TA</a></li>
    <li><div class="divider"></div></li>
    <li><a href="#">Upload Berkas TA</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="#!">Pendaftaran Wisuda</a></li>
    <li><div class="divider"></div></li>
    <li><a href="<?php echo base_url(); ?>index.php/modul5/admin/getstudytracer">Pendaftaran Tracer Study</a></li>
    <li><div class="divider"></div></li>
    <li><a href="<?php echo base_url(); ?>index.php/modul5/yudisium/daftar_yudisium">Pendaftaran Yudisium</a></li>
    <li><div class="divider"></div></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

    </div>
  </nav>
<section class="courses section">
      <div class="container">
        <div class="row">
      <h3 class="header center">Perubahan Akses Mahasiswa menjadi Alumni</h3>
           		<?php echo $error;?>
    			<?php echo form_open_multipart('modul5/Tracer/proses_daftar_tracer');?>
                <br><br><b>Untuk melakukan perubahan akses mahasiswa menjadi alumni, mahasiswa harap mengupload scan berupa :</b><br>
                1. Bukti telah mengikuti Yudisium atau
                <br>2. Bukti telah mengikuti Wisuda
                <hr><b>Upload berkas untuk perubahan hak akses :</b>
                <table border="1" width="1000px">
                    <tr>
                    <td>Upload Gambar</td>
                    <td>
                        <?php 
                        if ($data_tracer->Status_bukti_alumni=="MENUNGGU KONFIRMASI" || $data_tracer->STATUS_KHS1==""){
                            echo "<input type='file' name='file_validasialumni'>";  
                        }elseif ($data_tracer->Status_bukti_alumni=="TERVERIFIKASI"){
                            echo "<input type='file' name='file_validasialumni' value='' style='display:none'>";   
                            echo "<input type='file' name='file_validasialumni' disabled=''>";
                        }?>
                    </td>
                    <td>Status : <br>
                        <?php if($data_tracer->Status_bukti_alumni=="MENUNGGU KONFIRMASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/salah.png')."'>";
                            echo " $data_tracer->Status_bukti_alumni";
                        }elseif ($data_tracer->Status_bukti_alumni=="TERVERIFIKASI"){
                            echo "<img width='20px' height='20px' src='".base_url('assets/img/icon/benar.png')."'>";
                            echo " $data_tracer->Status_bukti_alumni";
                        }elseif ($data_tracer->Status_bukti_alumni==""){
                            echo " BELUM MENGUPLOAD";
                        } 
                        ?>
                    </td>
                    <td><b>
                        <?php if(!$data_tracer->File_bukti_alumni==""){
                        echo "<a href='".base_url('assets/img/yudisium/').$data_tracer->File_bukti_alumni."'>Lihat File</a>";
                        }
                        ?>
                        </b>
                    </td>
                    </tr>
                </table>
                
				 <?php 
                if($data_tracer->Status_bukti_alumni=="MENUNGGU KONFIRMASI" || $data_tracer->Status_bukti_alumni==""){
                    echo "<br><br>
					<div class='col s4'></div>
					<div class='col s3'></div>
					<div class='col s3'></div>
					<input type='submit' class='btn btn-success' value='Simpan' />";
                }else if($data_tracer->Status_bukti_alumni=="TERVERIFIKASI"){
					
                    echo "<br><br>
					<center>
					Status anda telah menjadi Alumni, silakan lakukan pengisian studytracer. Terima Kasih";
                };
                ?>
                
            </center>
        </div>
      </div>
</section>
<!-- End Content Section  -->
  <section id="footer" class="section footer">
    <div class="container">
      <div class="row align-center copyright">
        <div class="col-sm-12">
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Amoeba
            -->
            <a href="">Copyright &copy; 2017 DEVteam_Modul5_PSI</a><a href="https://bootstrapmade.com/">     | Bootstrap Themes</a> <a href="https://bootstrapmade.com/">  by BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="<?php echo base_url() ?>asset/js/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url() ?>asset/js/materialize.min.js"></script>
  <script>
  	(function($){
  		$(function(){
    		$('.button-collapse').sideNav();
  		});
	})(jQuery);
  </script>
  <script>
  	$(document).ready(function() {
    	Materialize.updateTextFields();
  	});
  </script>
  
 
</body>
</html>