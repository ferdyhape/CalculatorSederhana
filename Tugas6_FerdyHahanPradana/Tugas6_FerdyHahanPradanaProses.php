<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/StyleTugas6.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Kalkulator</title>
</head>
<body>
	<!-- Nama: Ferdy Hahan Pradana -->
	<?php 
	$bil_1 = $_POST['bil1'];
	$bil_2 = $_POST['bil2'];

	function penjumlahan($angk_1, $angk_2){
		$hasil = $angk_1 + $angk_2;
		return $hasil;
	}
	function pengurangan($angk_1, $angk_2){
		$hasil = $angk_1 - $angk_2;
		return $hasil;
	}
	function perkalian($angk_1, $angk_2){
		$hasil = $angk_1 * $angk_2;
		return $hasil;
	}
	function pembagian($angk_1, $angk_2){
		$hasil = $angk_1 / $angk_2;
		return $hasil;
	}
	?>
	<div class="container-luar">
		<div class="container-dalam">
			<div class="container-fix">
				<form action="Tugas6_FerdyHahanPradana.html" method="post">
					<p>Bilangan Pertama</p>
					<input type="number" readonly value="<?php echo "$bil_1" ?>">
					<p>Bilangan Pertama</p>
					<input type="number" readonly value="<?php echo "$bil_2" ?>">
					<p>Hasil</p>
					<div class="container" style="border: 0px solid; border-radius: 5px;height: 197px; background-color: white; padding-top: 10px;">
						<?php
							echo "$bil_1 x $bil_2 = ".perkalian($bil_1, $bil_2)."<br>";
							echo "$bil_1 / $bil_2 = ".pembagian($bil_1, $bil_2)."<br>";
							echo "$bil_1 + $bil_2 = ".penjumlahan($bil_1, $bil_2)."<br>";
							echo "$bil_1 - $bil_2 = ".pengurangan($bil_1, $bil_2)."<br>";
						?>
					</div>
					<button type="submit" class="btn btn-primary" style="padding: 5px 10px;margin: 10px 13%; position: relative;">Kembali Menghitung</button>
				</form>
			</div>
		</div>
	</div>
	<footer style="text-align: center;">
	<div class="copyright">
		<small>Copryright © 2021 All Right Reserved - Ferdy Hahan Pradana</small>
	</div>
	</footer>
</body>
</html>