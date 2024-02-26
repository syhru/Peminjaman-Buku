
<style type="text/css">
	
	.table {
		text-align: center;
	}

</style>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Anggota</h1>
		<!-- <a href="<?php echo base_url(); ?>home/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
			class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a> -->
		</div>

		<?php echo $this->session->flashdata('pesan'); ?>

		<!-- Content Row -->
		<div class="row">

			<div class="table table-sm table-responsive">
				<!-- table -->
				<table class="table table-bordered table-hover">
					<thead class="thead-dark">
						<tr>
							<th scope="col">No</th>
							<th scope="col">ID Anggota</th>
							<th scope="col">Nama Anggota</th>
							<th scope="col">Prodi</th>
							<th scope="col">No Hp</th>
						</tr>
			

					<?php $nomor=1; ?>
					<?php foreach( $buku as $bk ): ?>

					<tbody>
						<tr>
							<th scope="row"><?php echo $nomor; ?></th>
							<td><?php echo $bk->id_buku ?></td>
							<td><?php echo $bk->judul_buku ?></td>
							<td><?php echo $bk->pengarang_buku ?></td>
							<td><?php echo $bk->penerbit_buku ?></td>
						</tr>
					</tbody>

					<?php $nomor++; ?>
					<?php endforeach; ?>

				</table>
				<!-- end of table -->

			</div>

		</div>

		