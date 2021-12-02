<div class="container">
	<h1 class="text-center"> Masukkan Data </h1>


	<form method="post"  action="<?= base_url('home/upload') ?>" enctype="multipart/form-data" autocomplete="off">

		<div class="form-group">
			<label>Nama Mahasiswa</label>
			<input type="text" name="nama_mahasiswa" class="form-control" placeholder="Nama Mahasiswa">
		</div>
		<div class="form-group">
			<label>NIM</label>
			<input type="text" name="nim" class="form-control" placeholder=" NIM">
		</div>
		<div class="form-group">
			<label>Prodi</label><br>
		 <select name="prodi" class="form-control" >
		 	<option selected="true" disabled="disabled">----------------- Masukkan Prodi -----------------</option>
          <option value="Teknik Informatika">Teknik Informatika</option>
          <option value="Akuntansi">Akuntansi</option>
          <option value="Teknologi Hasil Pertanian">Teknologi Hasil Pertanian</option>
        </select>
    </div>
  	  <div class="form-group">
  	  	<label>Jumlah SKS</label><br>
			<input type="checkbox" name="sks[]" value="20" >
			<label>20</label>
			<input type="checkbox" name="sks[]" value="22" >
			<label>22</label>
			<input type="checkbox" name="sks[]" value="24" >
			<label>24</label>
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" placeholder="Email" required="">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password" required="">
		</div>
		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir" class="form-control" required="">
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label><br>
			<input type="radio"  name="jenis_kelamin" value="Laki-Laki">Laki-Laki &emsp;
        	<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
		</div>
			<div class="form-group">
			<label>Foto</label>
			<input type="file" name="gambar" class="form-control" placeholder="Email" required="">
		</div>
		<div class="form-group">
			<label>Catatan</label>
			<textarea id="deskripsi" name="deskripsi"></textarea><br>
			<script src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>
			<script >
				CKEDITOR.replace('deskripsi');
			</script>
			
			<button type="submit" class="btn btn-primary">Submit </button>
		</div>
		
		
	</form>
</div>
