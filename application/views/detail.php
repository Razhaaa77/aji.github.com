<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title><?= $judul; ?></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/front/')?>css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/')?>vendors/linericon/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/')?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/')?>vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/')?>vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/')?>vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/')?>vendors/animate-css/animate.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/')?>vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="<?= base_url('assets/front/')?>css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/front/')?>css/responsive.css">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a href="" class="navbar-brand font-weight-bold text secondary" style="font-size: 25px">
						<span class="text-dark"><?= $konfig->judul_website;?></span>
					</a>
					<ul class="nav navbar-nav ml-auto search">
						<li class="nav-item d-flex align-items-center mr-10">
							<div class="menu-form">
								<form>
									<div class="form-group" style="width:70%;">
										<input type="text" class="form-control" placeholder="Search here">
									</div>
								</form>
							</div>
							<button type="submit" class="search-icon" style="border:none;background-color:white;">
								<i class="lnr lnr-magnifier"></i>
							</button>
						</li>
					</ul>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center mx-auto">
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url('home')?>">Home</a>
							</li>
							<li class="nav-item">
								<?php foreach ($kategori as $kate) { ?>
							<li class="nav-item">
								<a class="nav-link"
									href="<?= base_url('home/kategori/' . $kate['id_kategori'] . '/index.html') ?>">
									<?= $kate['nama_kategori'] ?>
								</a>
							</li>
							<?php } ?>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ Header Menu Area =================-->

	<!--================ Banner Area =================-->
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner" style="height:350px;">
			<div class="carousel-item active">
				<img src="<?= base_url('assets/front/img/jarot.jpg') ?>" class="d-block w-100" alt="Carousel Image">
				<div class="carousel-caption d-none d-md-block" style="top:40%;">
					<h1 class="mb-5 display-1 text-white">POST DETAIL</h1>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

	<style>
		.carousel-caption {
			position: absolute;
			top: 50%;
			/* Center vertically */
			left: 50%;
			/* Center horizontally */
			transform: translate(-50%, -50%);
			/* Adjust for the size of the buttons */
			z-index: 10;
			/* Ensure buttons are above the image */
		}

	</style>
	<!--================ End Banner Area =================-->

	<!--================Blog Area =================-->
	<section class="blog_area section-gap single-post-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="main_blog_details">
						<img class="img-fluid" src="<?= base_url('assets/upload/konten/' . $konten->foto) ?>"
							alt="<?= htmlspecialchars($konten->judul) ?>">
						<a href="<?= base_url('assets/front/')?>#">
							<h4><?= $konten->judul;?></h4>
						</a>
						<div class="user_details">
							<div class="float-left">
								<a href="<?= base_url('assets/front/')?>#"><?= $konten->nama_kategori;?></a>
							</div>
							<div class="float-right">
								<div class="media">
									<div class="media-body">
										<h8><?= $konten->nama;?></h8>
										<br>
										<h8><?= $konten->tanggal;?></h8>
									</div>
								</div>
							</div>
						</div>
						<?php
                            $keterangan = htmlspecialchars($konten->keterangan);
                            $keterangan = str_replace("\n", "</p><p>", $keterangan);
                        ?>
						<p><?= $keterangan; ?></p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog_right_sidebar">
						<aside class="single_sidebar_widget search_widget">
							<div class="input-group">
							</div><!-- /input-group -->
						</aside>
						<aside class="single_sidebar_widget post_category_widget">
							<h4 class="widget_title">Post Categories</h4>
							<ul class="list cat-list">
								<?php foreach ($kategori as $kate) { ?>
								<li>
									<a href="<?= base_url('home/kategori/' . $kate['id_kategori'] . '/index.html') ?>"
										class="d-flex justify-content-between">
										<?= $kate['nama_kategori'] ?>
									</a>
								</li>
								<?php } ?>
							</ul>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================Blog Area =================-->

	<!--================ start footer Area  =================-->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="single-footer-widget footer_middle">
				<a href="" class="navbar-brand font-weight-bold text secondary" style="font-size: 25px">
					<span class="text-dark"><?= $konfig->judul_website;?></span>
				</a>
				<p class="mt-50"><?= $konfig->profil_website;?></p>
				<div id="mc_embed_signup">
					<form target="_blank"
						action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
						method="get" class="subscribe_form relative">
						<div class="input-group d-flex flex-row">
							<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Enter Email '" required="" type="email">
							<button class="btn sub-btn">
								<span class="lnr lnr-arrow-right"></span>
							</button>
						</div>
						<div class="mt-10 info"></div>
					</form>
				</div>
			</div>
			<div class="footer-bottom footer_copy">
				<div class="footer-social">
					<a href="https://<?= $konfig->facebook;?>#">
						<i class="fa fa-facebook"></i>
					</a>
				</div>

			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#">
			<i class="fa fa-angle-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?= base_url('assets/front/')?>js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url('assets/front/')?>js/popper.js"></script>
	<script src="<?= base_url('assets/front/')?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/front/')?>js/stellar.js"></script>
	<script src="<?= base_url('assets/front/')?>vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="<?= base_url('assets/front/')?>vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="<?= base_url('assets/front/')?>vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="<?= base_url('assets/front/')?>vendors/isotope/isotope-min.js"></script>
	<script src="<?= base_url('assets/front/')?>vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/front/')?>vendors/jquery-ui/jquery-ui.js"></script>
	<script src="<?= base_url('assets/front/')?>js/jquery.ajaxchimp.min.js"></script>
	<script src="<?= base_url('assets/front/')?>js/mail-script.js"></script>
	<script src="<?= base_url('assets/front/')?>js/wow.min.js"></script>
	<script
		src="<?= base_url('assets/front/')?>https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA">
	</script>
	<script src="<?= base_url('assets/front/')?>js/theme.js"></script>
</body>

</html>
