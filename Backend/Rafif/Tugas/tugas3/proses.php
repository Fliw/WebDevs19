	<?php
	session_start();

	function calc( $x, $y, $z){
		if($z == 'tambah'){
			$hasil = $x + $y;

		}elseif ($z == 'kurang') {
			$hasil = $x - $y;

		}elseif ($z == 'kali') {
			$hasil = $x * $y;

		}elseif ($z == 'bagi') {
			$hasil = $x / $y;
		}

		return $hasil;
	}

	function operasi($x){
		if($x == "tambah"){
			return "+";

		}elseif ($x == "kurang"){
			return "-";

		}elseif ($x == "kali"){
			return "x";

		}elseif($x == "bagi"){
			return ":";					
		}
	}	

	if ( isset($_POST['hitung']) ){
		$num['bil1'] = $_POST['bil1'];
		$num['bil2']= $_POST['bil2'];
		$num['operasi'] = $_POST['operasi'];

		//echo  "<b>hasilnya adalah ".calc($num['bil1'],$num['bil2'],$num['operasi'])."<b>";


			if(empty($_POST['bil1']) || empty($_POST['bil2'])){
				$_SESSION['pesan'] = "Isi yang lengkap bro :)";
				header("Location: index.php");
			}elseif(!is_numeric($_POST['bil1']) || !is_numeric($_POST['bil2'])){
				$_SESSION['pesan'] = "Isinya tuh angka syg :)";
				header("Location: index.php");				
			}else{

				$_SESSION['pesan'] = "Hasil dari {$num['bil1']} ".operasi($num['operasi'])." {$num['bil2']} = ".calc($num['bil1'],$num['bil2'],$num['operasi']);
				header("Location: index.php");

			}
		}


		//echo $_SESSION['hasil'];



	//echo '<br><a href="index.php">back to main</a>';


	?>