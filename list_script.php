<script>
	$(document).ready(function() {
		// ALERT - ANIMATION
		$('.mhs_alert').fadeTo(500, 500).slideUp(500, function() {
			$('.mhs_alert').slideUp(500);
		});

		$.fn.dataTableExt.oStdClasses.sPageButton = "A B";
		$('#table-mhs').DataTable({
			"targets": "no sort",
			"order": [],

			"lengthMenu": [
				[5, 10, 15, 20, -1],
				[5, 10, 15, 20, "All"]
			],
			"pagingType": "full_numbers",
			"oLanguage": {
				"sLengthMenu": "_MENU_",
				// "sSearch": "",
				"sZeroRecords": "Data Tidak Ditemukan !!",
				"sInfo": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
				"sInfoFiltered": " ( Hasil Pencarian dari _MAX_ data )",
				"oPaginate": {
					"sFirst": "<<",
					"sPrevious": "<",
					"sNext": ">",
					"sLast": ">>"
				},
				"sSearch": "_INPUT_",
				"sSearchPlaceholder": "Search"
			}
		});
	});
</script>