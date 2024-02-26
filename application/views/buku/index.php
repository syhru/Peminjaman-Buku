
<style type="text/css">
	
	.table {
		text-align: center;
	}

</style>

<!-- Begin Page Content -->
<div class="container-fluid">
		<center><h1 class="h3 mb-0 text-gray-800">Tabel Buku</h1></center>


	<?php echo $this->session->flashdata('pesan'); ?>

	<div class="row mt-5">
		<div class="table table-sm table-responsive">
			<table class="table table-bordered table-hover">
				<thead class="thead-dark">
					<tr>
						<th scope="col">No</th>
						<th scope="col">ID Buku</th>
						<th scope="col">Judul Buku</th>
						<th scope="col">Pengarang</th>
						<th scope="col">Penerbit</th>
					</tr>
				</thead>
				<tbody>
				<?php $nomor = 1; ?>
                    <?php foreach ($buku as $bk) : ?>
                        <tr>
                            <th scope="row"><?php echo $nomor; ?></th>
                            <td><?php echo $bk->id_buku ?></td>
                            <td><?php echo $bk->judul_buku ?></td>
                            <td><?php echo $bk->pengarang_buku ?></td>
                            <td><?php echo $bk->penerbit_buku ?></td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

		