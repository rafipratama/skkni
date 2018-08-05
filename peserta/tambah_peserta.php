<?php include 'header.php'; ?>

<h2>Form Tambah Data Peserta</h2> <br />
<form action="proses.php?ambil=tambah_peserta" id="myform1" method="POST" onSubmit="return validasi()">
					   <div class="row">
						<script type="text/javascript">
						  function validasi() 
						  {
							  var nama=document.forms["myform"]["nama"].value;
						  if (nama==null || nama=="")
							{
							alert("Nama tidak boleh kosong !");
							return false;
							};

							 var nik=document.forms["myform"]["nik"].value;
						  if (nik==null || nik=="")
							{
							alert("Nik tidak boleh kosong !");
							return false;
							};

							 var hp=document.forms["myform"]["hp"].value;
						  if (hp==null || hp=="")
							{
							alert("No HP tidak boleh kosong !");
							return false;
							};


							 var email=document.forms["myform"]["email"].value;
						  if (email==null || email=="")
							{
							alert("Email tidak boleh kosong !");
							return false;
							};


							 var skema_sertifikasi=document.forms["myform"]["skema_sertifikasi"].value;
						  if (skema_sertifikasi==null || skema_sertifikasi=="")
							{
							alert("Skema Sertifikasi tidak boleh kosong !");
							return false;
							};


							 var tempat_uji_kompetensi=document.forms["myform"]["tempat_uji_kompetensi"].value;
						  if (tempat_uji_kompetensi==null || tempat_uji_kompetensi=="")
							{
							alert("Tempat Uji Sertifikasi tidak boleh kosong !");
							return false;
							};


							 var rekomendasi=document.forms["myform"]["rekomendasi"].value;
						  if (rekomendasi==null || rekomendasi=="")
							{
							alert("Rekomendasi tidak boleh kosong !");
							return false;
							};


							 var tanggal_terbit_sertifikat=document.forms["myform"]["tanggal_terbit_sertifikat"].value;
						  if (tanggal_terbit_sertifikat==null || tanggal_terbit_sertifikat=="")
							{
							alert("Tanggal Terbit Sertifikat tidak boleh kosong !");
							return false;
							};


							 var tanggal_lahir=document.forms["myform"]["tanggal_lahir"].value;
						  if (tanggal_lahir==null || tanggal_lahir=="")
							{
							alert("Tanggal Lahir tidak boleh kosong !");
							return false;
							};


							 var organisasi=document.forms["myform"]["organisasi"].value;
						  if (organisasi==null || organisasi=="")
							{
							alert("organisasi tidak boleh kosong !");
							return false;
							};
						   }
						  </script>
				 <div class="col-md-6">

						<div class="form-group">
							<label>Nama Peserta</label> <br>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Peserta" required=""/>
						</div>
						<div class="form-group">
							<label>Nik</label> <br>
							<input type="text" name="nik" id="nik" class="form-control" placeholder="Nik Peserta" required=""/>
						</div>
						<div class="form-group">
							<label>NO HP</label> <br>
							<input type="text" name="hp" id="hp" class="form-control" placeholder="No HP" required=""/>
						</div>
						<div class="form-group">
							<label>Email</label> <br>
							<input type="text" name="email" id="email" class="form-control" placeholder="Email Peserta" required=""/>
						</div>
						<div class="form-group">
							<label>Skema Sertifikasi</label> <br>
							<input type="text" name="skema_sertifikasi" id="skema_sertifikasi" class="form-control" placeholder="Skema Sertifikasi" required=""/>
						</div>
						<div class="form-group">
							<label>Tempat Uji Kompetensi</label> <br>
							<input type="text" name="tempat_uji_kompetensi" id="tempat_uji_kompetensi" class="form-control" placeholder="Tempat Uji Peserta" required=""/>
						</div>
						<div class="form-group">
							<label>Rekomendasi</label> <br>
							<input type="text" name="rekomendasi" id="rekomendasi" class="form-control" placeholder="Rekomendasi" required=""/>
						</div>


				  </div> <!-- col -->

				  <div class="col-md-6">

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
							<input type="text" name="organisasi" id="organisasi" class="form-control" placeholder="Organisasi" required=""/>
						</div>

				  </div> <!-- col -->  
				  </div> <!-- end row -->


							 <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok">&nbsp;Simpan</i></button>
							 <a href="peserta.php" class="btn btn-danger"><i class="glyphicon glyphicon-remove">&nbsp;Batal</i></a>


						  </form>



<?php include 'footer.php'; ?>