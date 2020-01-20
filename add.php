<div class="container">

	<h3><?= $_PageTitle ?></h3>

	<form action="<?= base_url() . 'cMhs/addItem_Pegawai' ?>" method="POST">
		<div class="form-row">
			<div class="col-8">
				<div class="form-group">
					<label>NAMA</label>
					<input type="text" name="nama" class="form-control" required />
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label>NIP</label>
					<input type="number" name="nip" class="form-control" required />
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="col-5">
				<div class="form-group">
					<label>JABATAN</label>
					<input type="text" name="jabatan" class="form-control" required />
				</div>
			</div>
			<div class="col-5">
				<div class="form-group">
					<label>TANGGAL MASUK</label>
					<input type="text" name="tgl_masuk" class="form-control" required>
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label>FOTO</label>
					<input type="file" name="foto" class="form-control" required>
				</div>
			</div>
		</div>

		<div class="form-row float-right">
			<input type="submit" name="" value="ADD" class='btn btn-success' />
		</div>
	</form>

</div>