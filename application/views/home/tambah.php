<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Peminjaman Buku</h1>
		<a href="<?php echo base_url(); ?>home/index" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
			class="fas fa-plus fa-sm text-white-50"></i> Kembali</a>
		</div>


		<div class="form">
			<!-- form -->
			<form action="<?php echo base_url(); ?>home/upload" method="post">

				<div class="form-group">
					<label for="id_anggota">ID Anggota</label>
					<input type="text" class="form-control" id="id_anggota" name="id_anggota" placeholder="Id Anggota" required>
				</div>

				<div class="form-group">
					<label for="id_buku">ID Buku</label>
					<input type="text" class="form-control" id="id_buku" name="id_buku" placeholder="Id Buku" required>
				</div>

				<div class="form-group">
					<label for="jml_pinjam">Jumlah Pinjam</label>
					<input type="text" class="form-control" id="jml_pinjam" name="jml_pinjam" placeholder="Masukkan Jumlah Buku" required>
				</div>

				<div class="form-group">
					<label for="tgl_pinjam">Tanggal Pinjam</label>
					<input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
				</div>

				<div class="form-group">
					<label for="tgl_kembali">Tanggal kembali</label>
					<input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">
				</div>

				

				<hr>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>

			</form>
			<!-- end of form -->
		</div>


	</div>