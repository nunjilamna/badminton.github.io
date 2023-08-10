<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>

<div class="container">
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url() ?>">Home</a></li>
		<li><a href="#">Profil</a></li>
		<li class="active">Tentang Kami</li>
	</ol>

	<div class="row">
		<!-- ABOUT -->
		<section id="about" class="section-padding">
			<div class="container">

				<div class="row justify-content-between align-items-center">
					<div class="col-lg-6 text-center" data-aos="fade-down" data-aos-delay="50">
						<img src="<?php echo base_url() ?>assets/images/foto/about-1.jpg" alt="" style="max-height: 600px;">
					</div>
					<div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
						<div class="section-title text-center">
							<h1 class="display-4 fw-semibold">Tentang Kami</h1>
							<div class="line"></div>
							<p>Waktu Operasional Senin - Minggu, 06:00 - 00:00</p>
						</div>
						<div class="d-flex pt-4 mb-3">
							
							<div>
								<h5>Fasilitas yang disediakan :</h5>
								<p>Tersedia 6 buah lapangan</p>
								<p>Lokasi Strategis</p>
								<p>Halaman Parkir Luas</p>
								<p>Menjual aneka makanan ringan dan minuman segar</p>
								<p>Menjual Perlengkapan Bulutangkis</p>
								<p>Menyediakan Jasa ganti senar raket dan ganti grip</p>
								<p>Mushola</p>
								<p>Toilet</p>
							</div>
						</div>
						<!-- <div class="d-flex mb-3">
							
							<div>
								<h5>Strategic Location</h5>
								<p>Easily accessible with
									convenient access.</p>
							</div>
						</div>
						<div class="d-flex">
							
							<div>
								<h5>Cleanliness</h5>
								<p>
									We regularly maintain the cleanliness of the badminton courts.</p>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<?php $this->load->view('front/footer'); ?>