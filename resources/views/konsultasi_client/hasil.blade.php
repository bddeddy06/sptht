
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header">
				HASIL KONSULTASI 
			</div>
			<div class="card-body">
				<?php
				$connect = mysqli_connect("localhost", "root", "", "db_tht");
				$querydata = mysqli_query($connect, "SELECT * FROM pasien ORDER BY id DESC LIMIT 1"); 
				$pasiendisplay = mysqli_fetch_array($querydata);
				?>
				<table class="table">
					<tr>
						<td>Nama Dokter</td>
						<td width="10">:</td>
						<td>dr. Hamsu Kadriyan, M.Kes, Sp.THT-KL</td>
					</tr>
					<tr>
						<td>Nama</td>
						<td width="10">:</td>
						<td><?= $pasiendisplay ['nama'] ?></td>
					</tr>
					<tr>
						<td>Umur</td>
						<td width="10">:</td>
						<td><?= $pasiendisplay ['umur'] ?></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td width="10">:</td>
						<td><?= $pasiendisplay ['jenis_kelamin'] ?></td>
					</tr>
					<tr>
						<td>Pekerjaan</td>
						<td width="10">:</td>
						<td><?= $pasiendisplay ['pekerjaan'] ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td width="10">:</td>
						<td><?= $pasiendisplay ['alamat'] ?></td>
					</tr>
				</table>

				<table class="table table-striped">
					<thead>
						<th>No</th>
						<th>Pertanyaan</th>
						<th>Jawaban</th>
					</thead>
					<tbody>
						
						@foreach($datasoal as $key=>$soal )

						@if ($data[$soal->id] == "YA")

						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $soal->soal }}</td>
							<td><?= $data[$soal->id]; ?></td>
						</tr>

							<?php
							$idgejala [$key] =$soal->id;
							// print_r($idgejala);
							

							?>
						@endif

						@endforeach

						<?php
						$id_gejala = implode("','",$idgejala);
						
						

                        $con = mysqli_connect('localhost','root','','db_tht');
						echo "";
						$hasil = "";  
						?>

					</tbody>
				</table>
                <?php
					// $nilaicf = [[]];
					$nilaicfP1=[];
					$nilaicfP2=[];
					$nilaicfP3=[];
					$nilaicfP4=[];
					$nilaicfP5=[];
					$mb1=0;
					$md1=0;
					$temp1=0;
					$temp2=0;
					$tmp = 0;
					$tmp2 = 0;
					$a = 0;
					$b = 0;
					$c = 0;
					$d = 0;
					$e = 0;
					$cf1 = [];
					$cf2 = [];
					$cf3 = [];
					$cf4 = [];
					$cf5 = [];
					
                // $query2 = mysqli_query($con,"SELECT gejala_id, penyakit_id, mb, md FROM diagnosa WHERE gejala_id IN ("."'$id_gejala'".")");
                // while($data2 = mysqli_fetch_array($query2)){
                //     $nilaicf[$a][0] = $data2['mb'];
                //     $nilaicf[$a][1] = $data2['md'];
                //     $nilaicf[$a][2] = $data2['gejala_id'];
				// 	$nilaicf[$a][3]	= $data2['penyakit_id'];
                //     $a++;
				// }
				$query2 = mysqli_query($con,"SELECT gejala_id, penyakit_id, mb, md FROM diagnosa WHERE penyakit_id ='P001' AND gejala_id IN ("."'$id_gejala'".")");
                while($data2 = mysqli_fetch_array($query2)){
                    $nilaicfP1[$a][0] = $data2['mb'];
                    $nilaicfP1[$a][1] = $data2['md'];
                    $nilaicfP1[$a][2] = $data2['gejala_id'];
					$nilaicfP1[$a][3]	= $data2['penyakit_id'];
					$a++;
				}
					

				$query3 = mysqli_query($con,"SELECT gejala_id, penyakit_id, mb, md FROM diagnosa WHERE penyakit_id ='P002' AND gejala_id IN ("."'$id_gejala'".")");
                while($data2 = mysqli_fetch_array($query3)){
                    $nilaicfP2[$b][0] = $data2['mb'];
                    $nilaicfP2[$b][1] = $data2['md'];
                    $nilaicfP2[$b][2] = $data2['gejala_id'];
					$nilaicfP2[$b][3]	= $data2['penyakit_id'];
					$b++;
				}


				$query4 = mysqli_query($con,"SELECT gejala_id, penyakit_id, mb, md FROM diagnosa WHERE penyakit_id ='P003' AND gejala_id IN ("."'$id_gejala'".")");
                while($data2 = mysqli_fetch_array($query4)){
                    $nilaicfP3[$c][0] = $data2['mb'];
                    $nilaicfP3[$c][1] = $data2['md'];
                    $nilaicfP3[$c][2] = $data2['gejala_id'];
					$nilaicfP3[$c][3]	= $data2['penyakit_id'];
                    $c++;
				}

				$query5 = mysqli_query($con,"SELECT gejala_id, penyakit_id, mb, md FROM diagnosa WHERE penyakit_id ='P004' AND gejala_id IN ("."'$id_gejala'".")");
				
				while($data2 = mysqli_fetch_array($query5)){
                    $nilaicfP4[$d][0] = $data2['mb'];
                    $nilaicfP4[$d][1] = $data2['md'];
                    $nilaicfP4[$d][2] = $data2['gejala_id'];
					$nilaicfP4[$d][3]	= $data2['penyakit_id'];
                    $d++;
				}
				$query6 = mysqli_query($con,"SELECT gejala_id, penyakit_id, mb, md FROM diagnosa WHERE penyakit_id ='P005' AND gejala_id IN ("."'$id_gejala'".")");
                while($data2 = mysqli_fetch_array($query6)){
                    $nilaicfP5[$e][0] = $data2['mb'];
                    $nilaicfP5[$e][1] = $data2['md'];
                    $nilaicfP5[$e][2] = $data2['gejala_id'];
					$nilaicfP5[$e][3]	= $data2['penyakit_id'];
                    $e++;
				}
				if (!empty($nilaicfP1)) {
				foreach ($nilaicfP1 as $value){
					if ($data['G002'] == 'YA' AND $data['G003'] == 'YA'  AND $data['G004'] == 'YA' AND $data['G005'] == 'YA' AND $data['G006'] == 'YA' AND $data['G007'] == 'YA' AND $data['G010'] == 'YA' AND $data['G015'] == 'YA' AND $data['G016'] == 'YA' AND $data['G017'] == 'YA' AND $data['G018'] == 'YA' AND $data['G019'] == 'YA' AND $data['G022'] == 'YA' ) {
						$cf1 = 1;
					}else{

					$tmp = $tmp + $value[0] * (1-$tmp);
					$mb1 = $tmp;
					$tmp2 = $tmp2 + $value[1] * (1-$tmp2);
					$md1 = $tmp2;
					$cf1 = $mb1 - $md1;
					}
				}
				}else {
					$cf1=0;
				}

				$tmp3 = 0;
				$tmp4 = 0;
				$mb2 = 0;
				$md2 = 0;
				if (!empty($nilaicfP2)) {
				foreach ($nilaicfP2 as $value2){
					if ($data['G002'] == 'YA' AND $data['G003'] == 'YA'  AND $data['G004'] == 'YA' AND $data['G006'] == 'YA' AND $data['G010'] == 'YA' AND $data['G015'] == 'YA' AND $data['G016'] == 'YA' AND $data['G017'] == 'YA' AND $data['G018'] == 'YA' AND $data['G019'] == 'YA' AND $data['G020'] == 'YA' AND $data['G022'] == 'YA' ) {
						$cf2 = 1;
					}else{
					$tmp3 = $tmp3 + $value2[0] * (1-$tmp3);
					$mb2 = $tmp3;
					$tmp4 = $tmp4 + $value2[1] * (1-$tmp4);
					$md2 = $tmp4;
					$cf2 = $mb2 - $md2;
					}
				}
				}else {
					$cf2=0;
				}

				$tmp5 = 0;
				$tmp6 = 0;
				$mb3 = 0;
				$md3 = 0;
				if (!empty($nilaicfP3)) {
				foreach ($nilaicfP3 as $value3){
					if ($data['G001'] == 'YA' AND $data['G002'] == 'YA'  AND $data['G004'] == 'YA' AND $data['G007'] == 'YA' AND $data['G010'] == 'YA' AND $data['G011'] == 'YA' AND $data['G012'] == 'YA' AND $data['G013'] == 'YA' AND $data['G017'] == 'YA' AND $data['G019'] == 'YA' AND $data['G020'] == 'YA' AND $data['G021'] == 'YA' ) {
						$cf3 = 1;
					}else{
					$tmp5 = $tmp5 + $value3[0] * (1-$tmp5);
					$mb3 = $tmp5;
					$tmp6 = $tmp6 + $value3[1] * (1-$tmp6);
					$md3 = $tmp2;
					$cf3 = $mb3 - $md3;
					}
				}
				}else {
					$cf3=0;
				}

				$tmp7 = 0;
				$tmp8 = 0;
				$mb4 = 0;
				$md4 = 0;

				if (!empty($nilaicfP4)) {
					foreach ($nilaicfP4 as $value4){
						if ($data['G001'] == 'YA' AND $data['G007'] == 'YA'  AND $data['G008'] == 'YA' AND $data['G010'] == 'YA' AND $data['G011'] == 'YA' AND $data['G012'] == 'YA' AND $data['G013'] == 'YA' AND $data['G014'] == 'YA' AND $data['G019'] == 'YA' AND $data['G020'] == 'YA' AND $data['G021'] == 'YA' ) {
						$cf4 = 1;
					}else{
					$tmp7 = $tmp7 + $value4[0] * (1-$tmp7);
					$mb4 = $tmp7;
					$tmp8 = $tmp8 + $value4[1] * (1-$tmp8);
					$md4 = $tmp8;
					$cf4 = $mb4 - $md4;
					}
				}
				}else {
					$cf4=0;
				}

				$tmp9 = 0;
				$tmp10 = 0;
				$mb5 = 0;
				$md5 = 0;
				if (!empty($nilaicfP5)) {
				foreach ($nilaicfP5 as $value5){
					if ($data['G003'] == 'YA' AND $data['G004'] == 'YA'  AND $data['G005'] == 'YA' AND $data['G006'] == 'YA' AND $data['G009'] == 'YA' AND $data['G010'] == 'YA' AND $data['G011'] == 'YA' AND $data['G012'] == 'YA' AND $data['G015'] == 'YA' AND $data['G016'] == 'YA' AND $data['G017'] == 'YA' AND $data['G019'] == 'YA' AND $data['G020'] == 'YA' AND $data['G022'] == 'YA' ) {
						$cf5 = 1;
					}else{
					$tmp9 = $tmp9 + $value5[0] * (1-$tmp9);
					$mb5 = $tmp9;
					$tmp10 = $tmp10 + $value5[1] * (1-$tmp10);
					$md5 = $tmp10;
					$cf5 = $mb5 - $md5;
					}
				}
				}else {
					$cf5=0;
				}

				// echo("P1"."<br>");
				// print_r($nilaicfP1);
				// echo "<br>".$mb1."<br>";
				// echo $md1."<br>";
				// echo $cf1."<br>";
				// echo("<hr>"."P2"."<br>");
				// print_r($nilaicfP2);
				// echo "<br>".$mb2."<br>";
				// echo $md2."<br>";
				// echo $cf2."<br>";
				// echo("<hr>"."P3"."<br>");
				// print_r($nilaicfP3);
				// echo "<br>".$mb3."<br>";
				// echo $md3."<br>";
				// echo $cf3."<br>";
				// echo("<hr>"."P4"."<br>");
				// print_r($nilaicfP4);
				// echo "<br>".$mb4."<br>";
				// echo $md4."<br>";
				// echo $cf4."<br>";
				// echo("<hr>"."P5"."<br>");
				// print_r($nilaicfP5);
				// echo "<br>".$mb5."<br>";
				// echo $md5."<br>";
				// echo $cf5."<br>";

				$cfsemua = [];
				$cfsemua[0] = $cf1;
				$cfsemua[1] = $cf2;
				$cfsemua[2] = $cf3;
				$cfsemua[3] = $cf4;
				$cfsemua[4] = $cf5;
				
                ?>
				
				<?php 
					if (max($cfsemua) == $cfsemua[0]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P001'");

							$data = mysqli_fetch_array($query);
							$hasil = $data['nama'];
							$idpenyakit=$data['id'];
							$deskripsi = $data['deskripsi'];
					}elseif (max($cfsemua) == $cfsemua[1]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P002'");

							$data = mysqli_fetch_array($query);
							$hasil = $data['nama'];
							$idpenyakit=$data['id'];
							$deskripsi = $data['deskripsi'];
					}elseif (max($cfsemua) == $cfsemua[2]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P003'");

							$data = mysqli_fetch_array($query);
							$hasil = $data['nama'];
							$idpenyakit=$data['id'];
							$deskripsi = $data['deskripsi'];
					}elseif (max($cfsemua) == $cfsemua[3]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P004'");

							$data = mysqli_fetch_array($query);
							$hasil = $data['nama'];
							$idpenyakit=$data['id'];
							$deskripsi = $data['deskripsi'];
					}elseif (max($cfsemua) == $cfsemua[4]) {
						$query = mysqli_query($con,"SELECT * FROM penyakit WHERE id = 'P005'");

							$data = mysqli_fetch_array($query);
							$hasil = $data['nama'];
							$idpenyakit=$data['id'];
							$deskripsi = $data['deskripsi'];
					}

					$persentase = max($cfsemua) * 100;
					$persentasep1 = $cf1 * 100;
					$persentasep2 = $cf2 * 100;
					$persentasep3 = $cf3 * 100;
					$persentasep4 = $cf4 * 100;
					$persentasep5 = $cf5 * 100;

					$solusi = "";
					if ($hasil == 'Otitis Media Serosa') {
						$solusi = "Sebagian besar kasus otitis media tidak memerlukan pengobatan khusus dan akan sembuh dengan sendirinya dalam beberapa hari. Namun pada beberapa kasus, dokter akan memberikan obat pereda nyeri dan antibiotik, 
						bila otitis media sudah berlangsung dalam waktu lama dan sering kambuh, dokter akan mengeluarkan cairan dari dalam telinga melalui prosedur bedah.";
					}elseif ($hasil == 'Polip Hidung') {
						$solusi = "Kortikosteroid dapat dapat mengurangi ukuran bahkan menghilangkan Tergantung keparahannya, dokter dapat memberikan obat kortikosteroid jenis semprot hidung, tablet, suntik, ataupun kombinasi. Contoh obat kortikosteroid antara lain fluticasone, budesonide, mometason, atau prednisone";
					}elseif ($hasil == 'Faringtis Akut') {
						$solusi = "Bila penanganan faringitis secara mandiri tidak membuat kondisi membaik dalam beberapa hari, maksimal 1 minggu, pemeriksaan ke dokter diperlukan. Dokter meresepkan beberapa jenis obat, seperti Antibiotik, Benzocaine, Paracetamol / Ibuprofen, ";
					}elseif ($hasil == 'Abses Retrofaring') {
						$solusi = "Karena adanya nyeri dan sulit menelan, penderita akan diberikan cairan dan nutrisi melalui infus. Dokter juga akan memberikan obat penghilang rasa sakit dan antibiotik untuk mengatasi infeksi bakteri yang terjadi. Anda diwajibkan untuk menghabiskan antibiotik sesuai dosis yang dianjurkan dokter. Karena jika tidak dikonsumsi sampai habis, dikhawatirkan infeksi bisa saja muncul kembali dan menimbulkan resistensi bakteri.";
					}elseif ($hasil == 'Karsinoma Nafosaring') {
						$solusi = "Pengobatan kanker nasofaring dapat berbeda-beda, disesuaikan dengan riwayat penyakit, stadium kanker, letak kanker, dan kondisi pasien secara umum, namun disarankan untuk langsung menghubungi dokter yang bersangkutan";
					}

				?>

				<h4>Anda Kemungkinan terkena penyakit : <?= $hasil ?></h4>
				<h4>Dengan kepastian :<?= $persentase."%" ?> </h4>
				<br>
				<h5>Persentase Keseluruhannya adalah</h5>
				<h5>Otitis Media Serosa : <?= $persentasep1 ?> %</h5>
				<h5>Polip Hidung : <?= $persentasep2 ?> %</h5>
				<h5>Faringtis Akut : <?= $persentasep3 ?> %</h5>
				<h5>Abses Retrofring : <?= $persentasep4 ?> %</h5>
				<h5>Karsinoma Nafosaring : <?= $persentasep5 ?> %</h5>
				<br>
				<p>Penjelasan : </p>
				
				<p><?= $deskripsi ?></p>
				<p>Solusi</p>
				<p><?= $solusi ?></p>
				<a href="/" class="btn btn-primary"> Kembali</a>

				
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
