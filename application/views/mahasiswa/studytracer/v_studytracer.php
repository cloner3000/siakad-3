	<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h3 class="header center">Pendaftaran Tracer Study</h3>

      <div class="row center">
        <h6 class="header col s12 light">Form ini digunakan untuk mendaftar Tracer Study bagi para alumni Teknologi Informasi</h6>
      </div>
      <br><br>

    </div>
  </div>
  
  <div class="container">
    <div class="section">
	<form action="<?php echo base_url().'index.php/studytracer/insert';?>" method="post" id="form_studytracer">
      <div class="row">
		
        <div class="input-field col s12">
          <input value="<?php 
			  echo date('d-m-Y h:i:s');
			  ?>" id="timestamp" name="timestamp" type="text" class="validate" readonly>
          <label class="active" for="timestamp">Timestamp</label>
		</div>
	  
        <div class="input-field col s12">
          <input value="<?php 
			  foreach($mahasiswa->result() as $m)
			  {
			  echo $m->nama_mahasiswa;
			  }
			  ?>" id="nm_mhs" name="nm_mhs" type="text" class="validate" readonly>
          <label class="active" for="nm_mhs">Nama</label>
		</div>
		
		<div class="input-field col s12">
		  <input value="<?php echo $this->session->userdata("nama");?>" id="nim" name="mahasiswa_NIM" type="text" class="validate" readonly="readonly">
          <label class="active" for="nim">NIM</label>
		  
        </div>
		
		<div class="input-field col s12">
          <input value="<?php 
			  foreach($mahasiswa->result() as $m)
			  {
			  echo $m->program_studi;
			  }
			  ?>" id="prodi" name="prodi" type="text" class="validate" disabled>
          <label class="active" for="Judul">Program Studi</label>
		</div>
      </div>
		<label class="active" for="jk">Jenis Kelamin</label>
		<select class="browser-default" name="jk" id="jk" required="required">
			<option value="" disabled selected>Jenis Kelamin</option>
			<option value="Laki-laki">Laki-Laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>
		<br>
		<div class="row">
			<div class="input-field col s12">
			<input value="" id="angkatan" name="angkatan" type="text" class="validate" required="required">
				<label class="active" for="angkatan">Angkatan</label>
			</div>
			
			<div class="input-field col s12">
			<input value="" id="alamat" name="alamat" type="text" class="validate" required="required">
				<label class="active" for="alamat">Alamat</label>
			</div>
			
			<div class="input-field col s12">
			<input value="" id="notelp" name="notelp" type="text" class="validate" required="required">
				<label class="active" for="notelp">No. Telp</label>
			</div>
		</div>
		<label class="active" for="bk">Kesesuaian Bidang Kompetensi</label>
		<select class="browser-default" name="bk" id="bk" required="required">
			<option value="" disabled selected>Kesesuaian</option>
			<option value="Sesuai">Sesuai</option>
			<option value="Tidak Sesuai">Tidak Sesuai</option>
		</select>
		<br>
		<label class="active" for="status_alumni">Status Alumni</label>
		<select class="browser-default" name="status_alumni" id="status_alumni" required="required">
			<option value="" disabled selected>Pilih Status Alumni</option>
			<option value="Melanjutkan Study">Melanjutkan Study</option>
			<option value="Bekerja">Bekerja</option>
			<option value="Tidak bekerja maupun lanjut study">Tidak Bekerja dan Tidak Melanjutkan Study</option>
		</select>
		
		<br>
		<div class="row">
			<div class="input-field col s12">
			<input value="" id="masa_tunggu" name="masa_tunggu" type="text" class="validate" required="required">
				<label class="active" for="masa_tunggu">Masa Tunggu</label>
			</div>
			
			<div class="input-field col s12">
			<input value="" id="tingkat_studi" name="tingkat_studi" type="text" class="validate">
				<label class="active" for="tingkat_studi">Tingkat Studi</label>
			</div>
		</div>
		<label class="active" for="j_usaha">Jenis Usaha</label>
		<select class="browser-default" name="j_usaha" id="j_usaha" class="form">
			<option value="" disabled selected>Jenis Usaha</option>
			<option value="PNS">PNS</option>
			<option value="BUMN">BUMN</option>
			<option value="Swasta">Swasta</option>
			<option value="Wiraswasta">Wiraswasta</option>
			<option value="Lainnya">Lainnya</option>
		</select>
		
		<br>
		<div class="row">
			<div class="input-field col s12">
			<input value="" id="jabatan" name="jabatan" type="text" class="validate">
				<label class="active" for="jabatan">Jabatan</label>
			</div>
			
			<div class="input-field col s12">
			<input value="" id="instansi" name="instansi" type="text" class="validate">
				<label class="active" for="instansi">Perusahaan atau Instansi</label>
			</div>
			
			<div class="input-field col s12">
			<input value="" id="gaji" name="gaji" type="text" class="validate">
				<label class="active" for="gaji">Gaji</label>
			</div>
			
			<div class="input-field col s12">
			<textarea name="message" id="message" class="materialize-textarea"></textarea>
			<label class="active" for="message">Saran dan Masukan</label>
			</div>
		</div>
		
		<div class="row">
      	<div class="col s3">*Kosongi yang tidak perlu</div>
      	<div class="col s3"></div>
      	<div class="col s3"></div>
      	<div class="col s3"><button type="submit" class="btn btn-success">Daftar Tracer Study</button></div>
      </div>
	  
	  </form>
	  </div>
	</div>