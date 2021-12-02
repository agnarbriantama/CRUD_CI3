<div class="container">
	<h1 class="text-center"> Edit Data </h1>
	<form method="post" action="<?= base_url('home/edit_data/' . $item->id_mahasiswa) ?>" enctype="multipart/form-data" autocomplete="off">

		<div class="form-group">
			<label>Nama Mahasiswa</label>
			<input type="text" name="nama_mahasiswa" class="form-control" placeholder="Nama Mahasiswa" value="<?= $item->nama_mahasiswa ?>">
		</div>
		<div class="form-group">
			<label>NIM</label>
			<input type="text" name="nim" class="form-control" placeholder=" NIM" value="<?= $item->nim ?>">
		</div>
		<div class="form-group">
			<label>Prodi</label><br>
			<select value="<?= $item->prodi ?>" name="prodi" class="form-control">
				<option value="Teknik Informatika" <?php if ($item->{'prodi'} == 'Teknik Informatika') echo 'selected' ?>>Teknik Informatika</option>
				<option value="Akuntansi" <?php if ($item->{'prodi'} == 'Akuntansi') echo 'selected' ?>>Akuntansi</option>
				<option value="Teknologi Hasil Pertanian" <?php if ($item->{'prodi'} == 'Teknologi Hasil Pertanian') echo 'selected' ?>>Teknologi Hasil Pertanian</option>
			</select>
		</div>

		<div class="form-group">
			<label>Jumlah SKS</label><br>
			<input type="checkbox" name="sks[]"  value="20" <?php if($item->{'sks'} == '20'){echo 'checked';} ?>>
			<label>20</label>
			<input type="checkbox" name="sks[]"  value="22" <?php if($item->{'sks'} == '22'){echo 'checked';} ?>>
			<label>22</label>
			<input type="checkbox" name="sks[]"  value="24" <?php if($item->{'sks'} == '24'){echo 'checked';} ?>>
			<label>24</label>
		</div>
		<div class="form-group">
			<label>E-mail</label>
			<input type="email" name="email" class="form-control" placeholder="Email" value="<?= $item->email ?>">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Password" value="<?= $item->password ?>">
		</div>
		<div class="form-group">
			<label>Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir" class="form-control" value="<?= $item->tanggal_lahir ?>">
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label><br>
			<input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php if ($item->{'jenis_kelamin'} == 'Laki-Laki') echo 'checked' ?>>Laki-Laki &emsp;
			<input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($item->{'jenis_kelamin'} == 'Perempuan') echo 'checked' ?>>Perempuan
		</div>


		<div class="form-group">
			<?php
			if ($item->gambar == '') { ?>
				<label>Belum Ada Gambar</label><br>
			<?php } else { ?>
				<img src="<?php echo base_url('uploads/' . $item->gambar) ?>" width="80px"><br>
			<?php } ?>
			<label>Foto</label>
			<input type="file" name="gambar" class="form-control">

		</div>

		<div class="form-group">
			<label>Catatan</label>
			<textarea id="deskripsi" name="deskripsi"><?= $item->deskripsi ?></textarea><br>
			<script src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>
			<script>
				CKEDITOR.replace('deskripsi');
			</script>
			<button type="submit" class="btn btn-primary">Update</button>
		</div>

	</form>
</div>