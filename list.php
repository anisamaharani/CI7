<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img src="<?= base_url('assets') ?>/logo.png" height="50" width="50" alt="logo" />
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExample07">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">DATA MAHASISWA</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">

	<h3 class="text-center"><?= $_PageTitle ?></h3>

	<!-- <a title="ADD" class="btn btn-outline-primary mb-3" href="cMhs/showAddForm">
		<i class="fa fa-plus"></i> ADD
	</a> -->
	<a class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#modal-add">
		<i class="fa fa-plus"></i> ADD
	</a>

	<!-- <a class="btn btn-outline-warning mb-3" href="<?php echo base_url('$_DataPegawai/pdf') ?>">
		<i class="fas fa-print"></i> PRINT
	</a> -->

	<a class="btn btn-outline-warning mb-3" href="<?php echo base_url('cMhs/pdf_Pegawai') ?>">
		<i class="fas fa-print"></i> EXPORT PDF
	</a>

	<a class="btn btn-outline-danger mb-3" href="<?php echo base_url('cMhs/pdf_Pegawai') ?>">
		<i class="fas fa-print"></i> EXPORT EXCEL
	</a>

	<!-- <a class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#modal-export">
		<i class="fa fa-plus"></i> EXPORT
	</!-->

	<?= $this->session->flashdata('mhs_flash'); ?>

	<table id="table-pegawai" class="table table-striped table-bordered table-hover">
		<thead class="thead-dark">
			<tr class="text-center">
				<th scope="col">NAMA</th>
				<th scope="col">NIP</th>
				<th scope="col">ACTION</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($_DataPegawai as $_DataRow) : ?>
				<tr>
					<td><?= $_DataRow['name'] ?></td>
					<td><?= $_DataRow['nip'] ?></td>
					<td class="text-center">
						<!-- <a title="DETAIL" class="btn btn-warning btn-sm" href="cMhs/showDetail?rowID=<?= $_DataRow['id'] ?>">
							<i class="far fa-eye"></i>
						</a> -->
						<a title="DETAIL" class="btn btn-warning btn-sm" data-toggle="modal" href="#modal-detail-pegawai" data-row-id="<?= $_DataRow['id'] ?>">
							<i class="far fa-eye"></i>
						</a>

						<!-- <a title="EDIT" class="btn btn-success btn-sm" href="cMhs/showEditForm?rowID=<?= $_DataRow['id'] ?>">
							<i class="far fa-edit"></i>
						</a> -->
						<a title="EDIT" class="btn btn-success btn-sm" data-toggle="modal" href="#modal-edit-pegawai" data-row-id="<?= $_DataRow['id'] ?>">
							<i class="far fa-edit"></i>
						</a>

						<a title="DELETE" onclick="return confirm('anda yakin menghapus data ini')" class="btn btn-danger btn-sm" href="<?= base_url('cMhs') ?>/deleteItem_pegawai?rowID=<?= $_DataRow['id'] ?>">
							<i class="far fa-trash-alt"></i>
						</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

	<!-- Footer Elements -->
	<div class="container">

		<!-- Social buttons -->

		</a>

		<ul class="list-unstyled list-inline text-center">
			<li class="list-inline-item">
				<a class="btn-floating btn-fb mx-1" href="https://kemahasiswaan.polban.ac.id/">
					<i class="fab fa-google"></i>

				</a>

			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-tw mx-1" href="https://www.pendaftaranmahasiswa.web.id/2016/05/pendaftaran-online-mahasiswa-baru.html">
					<i class="fas fa-info"></i>
				</a>

			<li class="list-inline-item">
				<a class="btn-floating btn-dribbble mx-1" href="https://www.google.com/maps/place/Bandung+State+Polytechnic/@-6.8722074,107.5715838,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e420abc30acf:0x10569255865460a5!8m2!3d-6.8722074!4d107.5737725">
					<i class="fas fa-map-marker-alt"></i>
				</a>
			</li>

			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-tw mx-1" href="https://twitter.com/infopolban?lang=en">
					<i class="fab fa-twitter"> </i>
				</a>

			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-gplus mx-1" href="https://instagram.com/politekniknegeribandung?igshid=1mptwtiyfxqxf">
					<i class="fab fa-instagram"></i>
				</a>

			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-li mx-1" href="https://id-id.facebook.com/polban">
					<i class="fab fa-facebook-f"> </i>
				</a>

			</li>
			<li class="list-inline-item">
				<a class="btn-floating btn-dribbble mx-1" href="https://www.linkedin.com/school/polban/">
					<i class="fab fa-linkedin-in"></i>
				</a>
			</li>

			<li class="list-inline-item">
				<a class="btn-floating btn-dribbble mx-1" href="https://www.youtube.com/channel/UCdRxGHXVIJLCNXmxbeHWtUw">
					<i class="fab fa-youtube"></i>

				</a>
			</li>

		</ul>
		<!-- Social buttons -->

	</div>
	<!-- Footer Elements -->

	<Copyright>
		<div class="footer-copyright text-center py-3">© 2020 :
			<a href="https://www.polban.ac.id/en/home/"> polban.id
			</a>
		</div>
	</Copyright>