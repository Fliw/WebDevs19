<!DOCTYPE html>
<html>
<head>
	<title>kalkulator tugas 3</title>
	<style type="text/css">

		#container {
			 color: white;
    		display: flex;
    		justify-content: center;
    		align-items: center;
    		padding-top: 70px;
    		margin: 50px auto;
		}

		body {
    		background: black;
		}

		.element-form span input[type="submit"]:hover{
    		background: #efeff5;
		}

		.element-form label {
    		display: flex;
    		font-weight: bold;
    		justify-content: center;
		}

		body {
    		font-family: arial;
		}

		.element-form{
			margin-bottom: 15px;
		}

		.element-form span input[type="text"] {
    		width: -webkit-fill-available;
    		padding: 5px;
		}

		.element-form span select {
    		width: -webkit-fill-available;
    		padding: 5px;
		}

		.element-form input[type="submit"] {
    		width: -webkit-fill-available;
    		padding: 5px;
    		background: #8585ad;
    		border: none;
    		border-radius: 3px;
    		cursor: pointer;
    		font-size: 20px;
		}

	</style>
</head>
<body>

	<div id=container>

	<div id="header"></div>	
	<form method="POST" action="proses.php">
		<div class="element-form">
			<label>Masukkan angka pertama</label>
			<span>
				<input type="text" name="bil1" value placeholder="masukkan angka 1" autocomplete="off">
			</span>			
		</div>

		<div class="element-form">
			<label>Masukkan angka kedua</label>
			<span>
				<input type="text" name="bil2" value placeholder="masukkan angka 2" autocomplete="off">
			</span>			
		</div>


		<div class="element-form">
		<label>Masukkan operasi yang diinginkan</label>
			<span>
				<select name="operasi">
					<option value="tambah">Plus (+)</option>
					<option value="kurang">Minus (-)</option>
					<option value="kali">Kali (*)</option>
					<option value="bagi">Bagi (/)</option>
				</select>
			</span>			
		</div>

		<div class="element-form">
			<span>
				<input type="submit" name="hitung" value="Hitung">
			</span>			
		</div>

		<div id="pesan">
		<span>
			<?php
			session_start();

			if(isset($_SESSION['pesan'])){
				echo $_SESSION['pesan'];		
			} 

			session_destroy(); 
			?>

		</span>			
	</div>
		
	</form>
	
	<div id="footer"></div>
	</div>
</body>
</html>
