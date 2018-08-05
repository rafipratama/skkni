<?php include 'header.php';?>

<h2>Data Peserta</h2>
<hr>


		<a href="tambah_peserta.php" class="btn btn-success"><span class="glyphicon glyphicon-save "></span> Tambah Data</a>
		<a href="backupdb.php" class="btn btn-success"><span class="glyphicon glyphicon-save "></span> Backup DataBase</a>
		<br><br>
			  <?php 
			  if(isset($_GET['ms'])) 
			  {
				if($_GET['ms']==1) echo "<div class=\"alert alert-success\" role=\"alert\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
				  Data Berhasil Disimpan
				</div>";
				if($_GET['ms']==2) echo "<div class=\"alert alert-info\" role=\"alert\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
				  Data Berhasil Dirubah
				</div>";
				if($_GET['ms']==3) echo "<div class=\"alert alert-danger\" role=\"alert\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
				  Data Berhasil Dihapus
				</div>";

			  }

			?>

			<table class="table table-hover table-bordered display compact" id="dttb">
			<thead  class="btn-primary">
				<th align="center">No</th>
				<th align="center">Nama</th>
				<th align="center">Nik</th>
				<th align="center">HP</th>
				<th align="center">Email</th>
				<th align="center">Skema Sertifikasi</th>
				<th align="center">Tempat Uji Kompetensi</th>
				<th align="center">Rekomendasi</th>
				<th align="center">Tanggal Terbit Sertifikat</th>
				<th align="center">Tanggal Lahir</th>
				<th align="center">Organisasi</th>
				<th align="center">Alamat</th>
				<th align="center">Aksi</th>
			</thead>
			 <tbody>
			<?php 
				include ('koneksi.php');

				$tampil = mysqli_query($koneksi,"SELECT * FROM data_peserta");
				$no = 1;
				while ($d = mysqli_fetch_array($tampil))
				{
			?>

				<tr>
						<td><?php echo $no; ?></td>
						<td><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;<?php echo $d['nama']; ?></td>
						<td><?php echo $d['nik']; ?></td>
						<td><?php echo $d['hp']; ?></td>
						<td><?php echo $d['email']; ?></td>
						<td><?php echo $d['skema_sertifikasi']; ?></td>
						<td><?php echo $d['tempat_uji_kompetensi']; ?></td>
						<td><?php echo $d['rekomendasi']; ?></td>
						<td><?php echo $d['tanggal_terbit_sertifikat']; ?></td>
						<td><?php echo $d['tanggal_lahir']; ?></td>
						<td><?php echo $d['organisasi']; ?></td>
						<td><?php echo $d['alamat']; ?></td>
						<td>
						 <a href="edit_peserta.php?nik=<?php echo $d['nik'];?>" class="btn btn-warning"> <span class="glyphicon glyphicon-pencil"></span></a>

						 <a href="proses.php?ambil=hapus_peserta&nik=<?php echo $d['nik'];?>" class="btn btn-danger" onclick="return confirm('Yakin akan Menghapus ?')"><span class="glyphicon glyphicon-trash"></span> </a>	
						</td>
				</tr>
				<?php 
					$no++;
				}
				?>
				</tbody>
			</table>


<?php include 'footer.php';?>