<script>
	$(document).ready(function() {
		$('#modal-detail-pegawai').on('show.bs.modal', function(e) {
			const RowID = $(e.relatedTarget).data('row-id');

			// data - row - id

			$('#d-name').val('');
			$('#d-nip').val('');
			$('#d-jabatan').val('');
			$('#d-tgl_masuk').val('');
			$('#d-foto').val('');

			$.ajax({
				type: 'POST',
				// url: 'cMhs/getItemPegawaiById',
				url: '<?= base_url('cMhs/getItemPegawaiById') ?>',
				dataType: 'JSON',
				data: {
					rowID: RowID
				},

				success: function(result) {
					$('#d-name').val(result._DataPegawai.name);
					$('#d-nip').val(result._DataPegawai.nip);
					$('#d-jabatan').val(result._DataPegawai.jabatan);
					$('#d-tgl_masuk').val(result._DataPegawai.tgl_masuk);
					$('#d-foto').val(result._DataPegawai.foto);
				},
				error: function(error) {
					console.log(error)
				}

			});
		});

		$('#modal-edit-pegawai').on('show.bs.modal', function(e) {
			const RowID = $(e.relatedTarget).data('row-id');
			console.log(RowID);

			$('#form-edit').removeAttr('action');
			$('#form-edit').attr('action', '<?= base_url('cMhs/getItemPegawaiById') ?>/editItem_Pegawai?rowID=' + RowID);
			$('#name').val('');
			$('#nip').val('');
			$('#jabatan').val('');
			$('#tgl_masuk').val('');
			$('#foto').val('');

			$.ajax({
				type: 'POST',
				// url: 'cMhs/getItemPegawaiById',
				url: '<?= base_url('cMhs/getItemPegawaiById') ?>',
				dataType: 'JSON',
				data: {
					rowID: RowID
				},

				success: function(result) {
					$('#name').val(result._DataPegawai.name);
					$('#nip').val(result._DataPegawai.nip);
					$('#jabatan').val(result._DataPegawai.jabatan);
					$('#tgl_masuk').val(result._DataPegawai.tgl_masuk);
					$('#foto').val(result._DataPegawai.foto);
				},
				error: function(error) {
					console.log(error);
				}

			});
		});

	});
</script>