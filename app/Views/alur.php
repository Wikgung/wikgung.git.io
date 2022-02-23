<?php include "_head.php"; ?>

<body>

	<!-- ======= Header ======= -->
	<?php include "_header.php"; ?>
	<!-- End Header -->

	<!--=========== Alur Persembahyangan ==========-->
	<section class="card d-flex mt-5">
		<div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page">
						<h1>Alur Persembahyangan </h1>
					</li>
				</ol>
			</nav>

			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
					<li class="breadcrumb-item" ">Informasi </li>
					<li class=" breadcrumb-item active" aria-current="page">Alur Persembahyangan </li>
				</ol>
			</nav>

		</div>
	</section> <!-- End Kontak -->
	<div class=" container justify-content-center 	">
		<i class="fa fa-align-center" aria-hidden="true"><img src=" <?= base_url('assets/img/alur.jpeg'); ?>" class=" align-content-center justify-content-end" width="100%"></i>
	</div>
	<section>
		<div class="container ">
			<div class="row">
				<div class="col-md-3">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								<small class="text-muted">PURA SEGARA </small>
							</h5>
							<img src="<?= base_url('assets/img/segara.png'); ?>" class="card-img-top" alt="...">

						</div>
						<div class="card-footer ">
							<div class=" d-flex justify-content-end">
								<button class=" btn-success ">
									<a href="#" data-bs-toggle="modal" data-bs-target="#mymodal" class=" btn-sm text-light"> Read More </a>
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3">

					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								<small class="text-muted">PURA TAMAN</small>

							</h5>
							<img src="<?= base_url('assets/img/pura taman.jpeg'); ?>" class="card-img-top" alt="...">
						</div>
						<div class="card-footer">
							<div class=" d-flex justify-content-end">
								<button class=" btn-success">
									<a href="#" data-bs-toggle="modal" data-bs-target="#mymodal2" class=" btn-sm text-light"> Read More </a>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">

					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								<small class="text-muted">PURA RATU GEDE</small>
							</h5>
							<img src="<?= base_url('assets/img/Ratu Gede.png'); ?>" class="card-img-top" alt="...">

						</div>

						<div class="card-footer">
							<div class=" d-flex justify-content-end">
								<button class=" btn-success">
									<a href="#" data-bs-toggle="modal" data-bs-target="#mymodal3" class=" btn-sm text-light"> Read More </a>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">

					<div class="card">
						<div class="card-body">
							<h5 class="card-title">
								<small class="text-muted">PURA PENATARAN AGUNG</small>
							</h5>
							<img src="<?= base_url('assets/img/Penataran ped.png'); ?>" class="card-img-top" alt="...">
						</div>
						<div class="card-footer">
							<div class=" d-flex justify-content-end">
								<button class=" btn-success">
									<a href="#" data-bs-toggle="modal" data-bs-target="#mymodal4" class=" btn-sm text-light "> Read More </a>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<div id="mymodal" class="modal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">PURA SEGARA</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<img src="<?= base_url('assets/img/Segara.png'); ?>" class="card-img-top" alt="...">
				</div>
				<div class=" container text-justify">
					<p class="card-text"> &nbsp;&nbsp;&nbsp;&nbsp;Persebahnyangan pertama adalah di Pura Segara. Begitu memasuki pekaran Pura Ped dari barat (parkir), terlebih dahulu akan menjumpai dua buah wantilan. Dari wantilan tersebut menuju ke utara akan melihat Papan Tata Urutan Persembahyangan.
						Disana bisa dilihat persembahyangan pertama adalah di Pura Segara, maka pemedek harus menuju ke utara. Pura ini berlokasi paling dekat dengan laut. Sebelum memasuki Pura Segara terlebih dahulu pemedek melukat dengan Tirta yang sudah disediakan.
					</p>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div id="mymodal2" class="modal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">PURA TAMAN</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<img src="<?= base_url('assets/img/pura taman.jpeg'); ?>" class="card-img-top" alt="...">
				</div>
				<div class=" container text-justify">
					<p class="card-text"> &nbsp;&nbsp;&nbsp;&nbsp;Untuk persembahyangan kedua, dari Pura Segara pemedek menuju ke arah selatan untuk menuju ke Pura Taman. Pura ini berlokasi disebelah timur atau sebelah kanan dari Pura Penataran Agung. Pura ini dikelilingi oleh kolam yang dibuat cukup dalam. Kolam di sekeliling pura penuh dengan tanaman teratai (tunjung) putih, merah, dan biru yang indah.
					</p>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div id="mymodal3" class="modal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">PURA RATU GEDE</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<img src="<?= base_url('assets/img/Ratu Gede.png'); ?>" class="card-img-top" alt="...">
				</div>
				<div class="container text-justify">

					<p class="card-text"> &nbsp;&nbsp;&nbsp;&nbsp;Persembahyangan ketiga, pemedek dari Pura Taman menuju ke arah barat. Pura Ratu Gede berada di sebelah kiri dari Pura Penataran Agung dan berdekatan dengan Wantilan. Selesai sembayang di sini, pemedek bisa minta (nunas) benang tridatu (yang sudah dipasupati) untuk dikenakan pada pergelangan tangan kanan.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div id="mymodal4" class="modal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">PURA PENATARAN AGUNG</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<img src="<?= base_url('assets/img/Penataran ped.png'); ?>" class="card-img-top" alt="...">
				</div>
				<div class=" container text-justify ">
					<p class="card-text"> &nbsp;&nbsp;&nbsp;&nbsp;Persembahyangan Keempat (terkhir) di Pura Penataran Agung. Pura ini berada tepat disebelah kanannya Pura Ratu Gede. Pura ini terdapat banyak pelinggih berjajar pada sisi sebelah timur dan sebelah utara. Pelinggih sebelah utara yang palingging tinggi merupakan pelinggih penyimpenan. Di tengah-tengah berdiri sebuah pelinggih bale pelik. Di sebelah timur laut menghadap ke barat daya terdapat Padmasana/Surya.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>





	<!-- ======= Footer ======= -->
	<?php include "_footer.php" ?>
	<!-- End Footer -->