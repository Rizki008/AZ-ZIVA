<!-- Header Start -->
<div class="container-fluid header bg-primary p-0 mb-5">
	<div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
		<div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
			<h1 class="display-4 text-white mb-5">SELAMAT DATANG DI WEBSITE KLINIK AZ-ZIVA</h1>
			<div class="row g-4">
				<div class="col-sm-4">
					<div class="border-start border-light ps-4">
						<h2 class="text-white mb-1" data-toggle="counter-up">4</h2>
						<p class="text-light mb-0">Dokter Ahli</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="border-start border-light ps-4">
						<h2 class="text-white mb-1" data-toggle="counter-up">12</h2>
						<p class="text-light mb-0">Barang Medis</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="border-start border-light ps-4">
						<h2 class="text-white mb-1" data-toggle="counter-up"><?= $total_daftar ?></h2>
						<p class="text-light mb-0">Jumlah Pasien Daftar Berobat</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
			<div class="owl-carousel header-carousel">
				<div class="owl-carousel-item position-relative">
					<img class="img-fluid" src="<?= base_url() ?>template1/img/IMG1.jpg" alt="">
					<div class="owl-carousel-text">
						<h1 class="display-1 text-white mb-0"></h1>
					</div>
				</div>
				<div class="owl-carousel-item position-relative">
					<img class="img-fluid" src="<?= base_url() ?>template1/img/IMG2.jpg" alt="">
					<div class="owl-carousel-text">
						<h1 class="display-1 text-white mb-0">PAGI : 07.00 - 10.00</h1>
					</div>
				</div>
				<div class="owl-carousel-item position-relative">
					<img class="img-fluid" src="<?= base_url() ?>template1/img/IMG3.jpg" alt="">
					<div class="owl-carousel-text">
						<h1 class="display-1 text-white mb-0">SORE : 15.30 - 19.00</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="row g-5">
			<div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
				<div class="d-flex flex-column">
					<img class="img-fluid rounded w-75 align-self-end" src="<?= base_url() ?>template1/img/abaout.jpg" alt="">
					<img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="<?= base_url() ?>template1/img/abaot.jpg" alt="" style="margin-top: -25%;">
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
				<p class="d-inline-block border rounded-pill py-1 px-4">Tentang Az-Ziva</p>
				<h1 class="mb-4">Deskripsi</h1>
				<p>Klinik Az - Ziva merupakan sebuah klinik dokter keluarga yang memiliki slogan "Amanah Dalam Melayani Dan Mengabdi”</p>
				<p class="mb-4">Tujuan : Memberikan perlindungan dan pemeliharaan untuk meningkatkan kesejahteraan dalam bentuk Program Pemeliharaan Kesehatan umumnya masyarakat secara keseluruhan, baik menengah ke bawah maupun menengah ke atas</p>
				<p><i class="far fa-check-circle text-primary me-3"></i><center><b>INFORMASI AZ - ZIVA</center></b></p>
				<p><i class="far fa-check-circle text-primary me-3"></i>Jam Oprasional Klinik : Senin – Sabtu</p>
				<p><i class="far fa-check-circle text-primary me-3"></i>Pagi : 07.00 - 10.00</p>
				<p><i class="far fa-check-circle text-primary me-3"></i>Sore : 15.30 – 19.00</p>
			</div>
		</div>
	</div>
</div>
<!-- About End -->




<!-- Team Start -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
			<p class="d-inline-block border rounded-pill py-1 px-4">Dokter</p>
			<h1>Dokter Klinik Az - Ziva</h1>
		</div>
		<div class="row g-4">
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
				<div class="team-item position-relative rounded overflow-hidden">
					<div class="overflow-hidden">
						<img class="img-fluid" src="<?= base_url() ?>template1/img/team-1.jpg" alt="">
					</div>
					<div class="team-text bg-light text-center p-4">
						<h5>Dr Yolan Sriwidiastuti</h5>
						<p class="text-primary">Sabtu</p>
						<div class="team-social text-center">
							<a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
							<a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
				<div class="team-item position-relative rounded overflow-hidden">
					<div class="overflow-hidden">
						<img class="img-fluid" src="<?= base_url() ?>template1/img/team-2.jpg" alt="">
					</div>
					<div class="team-text bg-light text-center p-4">
						<h5>Dr E.R Permana, MMRS, SpDLP</h5>
						<p class="text-primary">Senin - Jumat</p>
						<div class="team-social text-center">
							<a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
							<a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
				<div class="team-item position-relative rounded overflow-hidden">
					<div class="overflow-hidden">
						<img class="img-fluid" src="<?= base_url() ?>template1/img/team-3.jpg" alt="">
					</div>
					<div class="team-text bg-light text-center p-4">
						<h5>Drg Hilman Rifki Mulyawan</h5>
						<p class="text-primary">Senin - Jumat</p>
						<div class="team-social text-center">
							<a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
							<a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
				<div class="team-item position-relative rounded overflow-hidden">
					<div class="overflow-hidden">
						<img class="img-fluid" src="<?= base_url() ?>template1/img/team-4.jpg" alt="">
					</div>
					<div class="team-text bg-light text-center p-4">
						<h5>Dr. Ihsan Harismunandar</h5>
						<p class="text-primary">Rabu & Sabtu</p>
						<div class="team-social text-center">
							<a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
							<a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
							<a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Team End -->
