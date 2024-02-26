
<style type="text/css">
	
	.table {
		text-align: center;
	}

</style>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<center><h1 class="h3 mb-0 text-gray-800">Peminjaman Buku</h1></center>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<a href="<?php echo base_url(); ?>home/tambah" class=" btn btn-outline-success shadow-sm mt-5"><i
			class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
		</div>

		<?php echo $this->session->flashdata('pesan'); ?>

		<!-- Content Row -->
		<div class="row">

	<div class="table table-sm table-responsive">
	<table class="table table-bordered table-hover">
		<thead class="thead-dark">
			<tr>
				<th scope="col">No</th>
				<th scope="col">ID Anggota</th>
				<th scope="col">Judul Buku</th>
				<th scope="col">Tgl Pinjam</th>
				<th scope="col">Tgl Kembali</th>
				<th scope="col">Jumlah Pinjam</th>	
				<th scope="col">Lama Pinjam</th>
				<th scope="col">Denda</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$nomor = 1;
			
			foreach ($peminjam as $pinjam):
				$tgl_pinjam = date('d/m/Y', strtotime($pinjam->tgl_pinjam));
				$tgl_kembali = date('d/m/Y', strtotime($pinjam->tgl_kembali));
				$lama_pinjam = floor((strtotime($pinjam->tgl_kembali) - strtotime($pinjam->tgl_pinjam)) / (60 * 60 * 24));
				$denda = ($lama_pinjam > 2) ? ($lama_pinjam - 2) * 5000 : 0;
				
				// Mengambil judul buku berdasarkan ID Buku
				
			?>
				<tr>
					<th scope="row"><?php echo $nomor; ?></th>
					<td><?php echo $pinjam->id_anggota ?></td>
					
					<td>
					<?php 
						$judul_buku = '';
						foreach ($buku as $bk) {
						if ($bk->id_buku == $pinjam->id_buku) {
							$judul_buku = $bk->judul_buku;
							break;
						}
						}
						echo $judul_buku;
					?>
					</td>

					
				
					<td><?php echo $tgl_pinjam ?></td>
					<td><?php echo $tgl_kembali ?></td>
					<td><?php echo $pinjam->jml_pinjam ?> Buku</td>
					<td><?php echo $lama_pinjam ?> hari</td>
					<td>Rp.<?php echo $denda ?></td>
					<td>
						<a href="<?php echo base_url(); ?>home/batal/<?php echo $pinjam->id_pinjam ?>" onclick="return confirm('Batalkan Peminjaman?');" type="button" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i> Batal</a>
					</td>
				</tr>
			<?php
				$nomor++;
			endforeach;
			?>
		</tbody>
	</table>
</div>



		</div>