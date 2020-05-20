<?php
	if (isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];

		$hasil = $bil1 * $bil2;
		
		if ($bil1 <= 10 && $bil2 <= 10){
			for($i=0; $i<$hasil; $i++){
				echo "looping ke-".($i+1)."<br>";
			}
		}else{
			echo "hasil perkalian $bil1 dan $bil2 = $hasil<br>";
			echo "Maaf nomor anda terlalu banyak.";

		}


	}
?>