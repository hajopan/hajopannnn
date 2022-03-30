<?php 
	if(isset($_POST['submit'])){
		$nama_pengirim = $_POST['nama_pengirim'];
		$nim = $_POST['nim'];
		$kelas = $_POST['kelas'];
		$jk = $_POST['jk'];
		$nama_penerima = $_POST['nama_penerima'];
		$salam = $_POST['salam'];
		$tujuan = $_POST['tujuan'];
		$pertanyaan = $_POST['pertanyaan'];
		$terimakasih = $_POST['terimakasih'];
		$selamat =$_POST['selamat'];

		header("location:https://api.whatsapp.com/send?phone=&text=$salam,%20$selamat%20$jk%20maaf%20mengganggu%20waktunya%20perkenalkan%20nama%20saya%20$nama_pengirim%20$nim%20dari%20kelas%20$kelas%0D%20Saya%20ingin%20$tujuan,%20$pertanyaan%20$jk%20$terimakasih%20$jk");
			
		}else{
		echo "

		<script>
		window.location=history.go(-1);
		</script>

		";
	}

 ?>