
<html>
<head>
	<title>Membuat Kalkulator Sederhana Dengan PHP |</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://code.responsivevoice.org/responsivevoice.js"></script> <script type="text/javascript">
  	
 	</script>
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$bil3 = $_POST['bil3'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2+$bil3;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2-$bil3;
			break;
			case 'kali':
				$hasil = $bil1*$bil2*$bil3;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2/$bil3;
			break;			
		}
	}
	?>
	<script type="text/javascript">
	function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
    return true;
	}
	</script>
		<?php 
 
	// FUNGSI TERBILANG OLEH : MALASNGODING.COM
	// WEBSITE : WWW.MALASNGODING.COM
	// AUTHOR : https://www.malasngoding.com/author/admin
 
 
	function penyebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = penyebut($nilai - 10). " belas";
		} else if ($nilai < 100) {
			$temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " seratus" . penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " seribu" . penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}
 
	function terbilang($nilai) {
		if($nilai<0) {
			$hasil = "minus ". trim(penyebut($nilai));
		} else {
			$hasil = trim(penyebut($nilai));
		}     		
		return $hasil;
	}
 
 
	?>
	<div class="kalkulator">
		<h1 class="judul">KALKULATOR</h1>
		<a class="brand" href=""></a>
		<form method="post" action="index.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama" onkeypress="return hanyaAngka(event)">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua" onkeypress="return hanyaAngka(event)">
			<input type="text" name="bil3" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Ketiga" onkeypress="return hanyaAngka(event)">
			<select class="opt" name="operasi">
				<option value="tambah">+ (Penjumlahan)</option>
				<option value="kurang">- (Pengurangan)</option>
				<option value="kali">x (Perkalian)</option>
				<option value="bagi">/(Pembagian)</option>
			</select></br>
			<input type="submit" name="hitung" value="Hitung" class="tombol">										
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">	
			<input type="text" value="<?php $angka = $hasil; echo terbilang($angka);?>" class="bil">
			<input type="submit" name="sound" value="Sound" class="tombol" onclick="play();">
			<script>
			function play (){
			   responsiveVoice.speak(

			    "<?php echo $hasil; ?>",
			    "Indonesian Female",
			    {
			     pitch: 1, 
			     rate: 1, 
			     volume: 1
			    }
			   );
			  }
			</script> 
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
			<input type="text" value="Terbilang" class="bil">
			<input type="submit" name="sound" value="Sound" class="tombol" onclick="play();">

			<script>
			function play (){
			   responsiveVoice.speak(
			    "<?php echo $hasil; ?>",
			    "Indonesian Female",
			    {
			     pitch: 1, 
			     rate: 1, 
			     volume: 1
			    }
			   );
			  }
			</script>
		<?php } ?>			
	</div>
</body>
</html>