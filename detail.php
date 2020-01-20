<div class="container">

	<h3><?= $_PageTitle ?></h3>

	<?php foreach ($_DataPegawai as $_DataRow) : ?>
		<div class="form-row">
			<div class="col-8">
				<div class="form-group">
					<label>NAME</label>
					<input type="text" name="name" class="form-control" readonly value="<?= $_DataRow->name ?>" />
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label>NIP</label>
					<input type="number" name="nip" class="form-control" readonly value="<?= $_DataRow->nip ?>" />
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="col-5">
				<div class="form-group">
					<label>JABATAN</label>
					<input type="text" name="jabatan" class="form-control" readonly value="<?= $_DataRow->jabatan ?>" />
				</div>
			</div>
			<div class="col-5">
				<div class="form-group">
					<label>TANGGAL MASUK</label>
					<input type="date" name="tgl_masuk" class="form-control" readonly value="<?= $_DataRow->tgl_masuk ?>" />
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label>FOTO</label>
					<input type="file" name="foto" class="form-control" readonly value="<?= $_DataRow->foto ?>" />
				</div>
			</div>
		</div>

		<div class="form-row float-right">
			<a title="BACK" class="btn btn-secondary" href="<?= base_url('cMhs/pegawai') ?>">BACK</a>
		</div>
	<?php endforeach; ?>

</div>