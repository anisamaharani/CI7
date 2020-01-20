<!-- MODAL DETAIL  -->
<div class="modal fade" id="modal-detail-pegawai" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">DETAIL</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="form-row">
					<div class="col-8">
						<div class="form-group">
							<label for="d-name">NAMA</label>
							<input type="text" id="d-name" name="d-name" class="form-control" readonly />
						</div>
					</div>
					<div class="col-4">
						<div class="form-group">
							<label for="d-nip">NIP</label>
							<input type="number" id="d-nip" name="d-nip" class="form-control" readonly />
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-5">
						<div class="form-group">
							<label for="d-jabatan">JABATAN</label>
							<input type="text" id="d-jabatan" name="d-jabatan" class="form-control" readonly />
						</div>
					</div>
					<div class="col-5">
						<div class="form-group">
							<label for="d-prodi">TANGGAL MASUK</label>
							<input type="date" id="d-tgl_masuk" name="d-tgl_masuk" class="form-control" readonly />
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
							<label for="d-foto">FOTO</label>
							<input type="file" id="d-foto" name="d-foto" class="form-control" readonly>
						</div>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
			</div>

		</div>
	</div>
</div>

<!-- MODAL ADD -->
<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">TAMBAH DATA</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<form action="<?= base_url() . 'cMhs/addItem_Pegawai' ?>" method="POST">
				<div class="modal-body">
					<div class="form-row">
						<div class="col-8">
							<div class="form-group">
								<label for="name">NAMA</label>
								<input type="text" name="name" class="form-control" />
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="nip">NIP</label>
								<input type="number" name="nip" class="form-control" />
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-5">
							<div class="form-group">
								<label for="jabatan">JABATAN</label>
								<input type="text" name="jabatan" class="form-control" />
							</div>
						</div>
						<div class="col-5">
							<div class="form-group">
								<label for="tgl_masuk">TANGGAL MASUK</label>
								<input type="date" name="tgl_masuk" class="form-control" />
							</div>
						</div>
						<div class="col-2">
							<div class="form-group">
								<label for="foto">FOTO</label>
								<input type="file" name="foto" class="form-control" />
							</div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
					<input type="submit" name="" value="ADD" class='btn btn-success' />
				</div>
			</form>

		</div>
	</div>
</div>

<!-- MODAL EDIT  -->
<<div class="modal fade" id="modal-edit-pegawai" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">EDIT DATA</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<form action="<?= base_url() . 'cMhs/editItem_pegawai' ?>" method="POST">
				<div class="modal-body">
					<div class="form-row">
						<div class="col-8">
							<div class="form-group">
								<label for="name">NAMA</label>
								<input type="text" id="name" name="name" class="form-control" />
							</div>
						</div>
						<div class="col-4">
							<div class="form-group">
								<label for="nip">NIP</label>
								<input type="number" id="nip" name="nip" class="form-control" />
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-5">
							<div class="form-group">
								<label for="jabatan">JABATAN</label>
								<input type="text" id="jabatan" name="jabatan" class="form-control" />
							</div>
						</div>
						<div class="col-5">
							<div class="form-group">
								<label for="tgl_masuk">TANGGAL MASUK</label>
								<input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control" />
							</div>
						</div>
						<div class="col-2">
							<div class="form-group">
								<label for="foto">FOTO</label>
								<input type="file" id="foto" name="foto" class="form-control" />
							</div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
					<input type="submit" name="EDIT" value="EDIT" class='btn btn-success' />
				</div>
			</form>

		</div>
	</div>
	</div>