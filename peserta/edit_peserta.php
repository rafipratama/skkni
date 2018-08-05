<?php include 'header.php'; ?> 

   <?php
				include "koneksi.php";
				$nik = $_GET['nik'];
				$tampil=mysqli_query($koneksi,"SELECT * FROM data_peserta WHERE nik ='$nik'");
				while($s=mysqli_fetch_array($tampil)){
   ?>
<h2>Form Edit Data Peserta</h2>
<hr>
				   <div class="row">
				   <form action="proses.php?ambil=edit_peserta" method="POST">
					<div class="col-md-12">

					  <div class="form-group">
						<label>Nama Peserta</label>
						<input type="hidden" name="nik" value="<?php echo $s['nik']; ?>" >
						<input type="text" name="nama"  class="form-control" placeholder="Ketikkan Nama Peserta" value="<?php echo $s['nama'];?>" required />
					  </div>

					  <div class="form-group">
						<label>No HP</label> <br>
						<input type="text" name="hp" class="form-control" placeholder="Ketikkan No HP" value="<?php echo $s['hp']; ?>" />
					  </div>
					  
					  <div class="form-group">
						<label>Email</label>
						<input type="text" name="email"  class="form-control" placeholder="Ketikkan Tempat Lahir" value="<?php echo $s['email'];?>" required />
					  </div>
					  
					  <div class="form-group">
						<label>Skema Sertifikasi</label>
						<input type="text" name="skema_sertifikasi"  class="form-control" placeholder="Ketikkan Skema Sertifikasi" value="<?php echo $s['skema_sertifikasi'];?>" required />
					  </div>

					  <div class="form-group">
						<label>Tempat Uji Kompetensi</label> <br>
						<input type="text" name="tempat_uji_kompetensi" class="form-control" placeholder="Ketikkan Tempat Uji Kompetensi" value="<?php echo $s['tempat_uji_kompetensi']; ?>" />
					  </div>

					  <div class="form-group">
					  <label>Tanggal Terbit Sertifikat</label>
					  <div class='input-group date' >
						<input type="date" name="tanggal_terbit_sertikat" class="form-control" id='date'/>
						<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
						</span>
					  </div>
					  </div>
					  
					  <div class="form-group">
					  <label>Tanggal Lahir</label>
					  <div class='input-group date' >
						<input type="date" name="tanggal_lahir" class="form-control" id='date'/>
						<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
						</span>
					  </div>
					  </div>

					  <div class="form-group">
						<label>Organisasi</label> <br>
						<input type="text" name="organisasi" class="form-control" placeholder="Ketikkan Organisasi" value="<?php echo $s['organisasi']; ?>" />
					  </div>

					<?php } ?>
				  </div>
				  </div>

						<button class="btn btn-success" type="submit">Simpan</button>
						<a href="peserta.php" class="btn btn-danger">Batal</a>
			</form>
 <?php include 'footer.php'; ?> 