<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Somira DeepRelief</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link href="<?= get_template_directory_uri() . '/styles/' ?>main.css" rel="stylesheet">

</head>

<body>

	<!-- Fixed Navbar -->
	<nav class="navbar fixed-top">
		<div class="container px-4 d-flex align-items-center justify-content-between">

			<!-- Left Section: Logo + Divider + Nav -->
			<div class="d-flex align-items-center">
				<span class="navbar-brand">SOMIRA</span>
				<div class="divider"></div>
				<div class="d-flex gap-4 align-items-center">
					<a class="nav-link active" href="#">Home</a>
					<a class="nav-link" href="#">Somira DeepRelief™</a>
					<a class="nav-link" href="#">Contact</a>
				</div>
			</div>

			<!-- Right Section: Currency + Buy Now + Cart -->
			<div class="d-flex align-items-center gap-3">
				<select>
					<option>EUR €</option>
					<option>USD $</option>
				</select>
				<button class="btn btn-buy btn-style1 text-white">Buy Now</button>
				<div class="cart-icon">
					<i class="fas fa-bag-shopping"></i>
				</div>
			</div>

		</div>
	</nav>

	<!-- Hero Banner with Video -->
	<!-- <section class="position-relative text-white">
		<video autoplay muted loop class="video-bg">
			<source src="<?= get_template_directory_uri() . '/styles/' ?>vecteezy_geometric-animated-background-light-color_7420874.mov" type="video/mp4">
			Your browser does not support the video tag.
		</video>

		<div class="container banner px-4">
			<div class="col-md-5 p-4 overlay">
				<h1 class="fw-bold fs-2">The Somira DeepRelief™<br>Massager Deluxe</h1>
				<p class="mt-3">
					Experience deep-tissue massage with soothing heat, premium materials,<br />
					and advanced DeepRelief™ technology — anytime, anywhere.
				</p>
				<button class="btn btn-light buy-now-btn mt-4 px-4 py-2">Buy Now</button>
			</div>
		</div>
	</section> -->

	<!-- Banner Section -->
	<!-- Banner Section -->
	<section class="hero-section position-relative text-white">
		<!-- ✅ Only div has class 'video-bg' -->
		<div class="video-bg">
			<video autoplay muted loop playsinline>
				<source src="<?= get_template_directory_uri() . '/styles/' ?>vecteey.mov" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>

		<div class="container h-100">
			<div class="row h-100">
				<div class="col-lg-8 d-flex align-items-end">
					<div class="hero-content p-4 p-md-5 rounded-4 mb-5">
						<h1 class="fw-bold mb-3">The Somira DeepRelief™<br> Massager Deluxe</h1>
						<p class="mb-4 text-light small">
							Experience deep-tissue massage with soothing heat, premium materials, <br>
							and advanced DeepRelief™ technology — anytime, anywhere.
						</p>
						<a href="#" class="btn px-4 py-2 bg-white mt-4
 rounded-pill fw-medium btn-style1 text-black">Buy Now</a>
					</div>
				</div>
			</div>

		</div>
	</section>
	<section class="py-5 bg-white">
		<div class="container text-center">

			<div class="row justify-content-center align-items-center g-4">
				<div class="col-2 col-sm-2 text-center">
					<span class="mb-4 text-style1" style="letter-spacing: 1px;">
						FEATURED IN &raquo;
					</span>
				</div>
				<div class="col-2 col-sm-2 text-center">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>healthcare.png" alt="Healthline" class="img-fluid" style="max-height: 28px;">
				</div>
				<div class="col-2 col-sm-2 text-center">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>cbs1.png" alt="CBS" class="img-fluid" style="max-height: 28px;">
				</div>
				<div class="col-2 col-sm-2 text-center">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>gq12.png" alt="GQ" class="img-fluid" style="max-height: 28px;">
				</div>
				<div class="col-2 col-sm-2 text-center">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>forbes.png" alt="Forbes" class="img-fluid" style="max-height: 28px;">
				</div>
			</div>
		</div>
	</section>

	<!-- #1 Choice & Here's Why Section -->
	<section class="choice bg-theme-color1">

		<div class="container">
			<div class="row align-items-start">
				<!-- Left Image -->
				<div class="col-sm-6 mb-4 mb-sm-0 text-center">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>earth.png" alt="Globe" class="img-fluid rounded">
				</div>

				<!-- Right Accordion -->
				<div class="col-sm-6">
					<h2 class="fw-bold mb-5 heading-style1">The <span class="text-dark">#1 Choice</span> &<br>Here’s Why
					</h2>

					<div class="custom-accordion">
						<div class="accordion-item active">
							<div class="title">
								<div class="heading-text">
									<i class="fas fa-globe text-secondary feature-icon"></i>
									<span>10,000+ Sold Globally</span>
								</div>
								<span class="icon">−</span>
							</div>
							<div class="accordion-content" style="display: block;">
								Global users rely on Somira DeepRelief™ for unmatched comfort and muscle recovery.
							</div>
						</div>

						<div class="accordion-item">
							<div class="title">
								<div class="heading-text">
									<i class="fas fa-medal text-secondary feature-icon"></i>
									<span>Top Rated</span>
								</div>
								<span class="icon">+</span>
							</div>
							<div class="accordion-content">
								Highly reviewed by thousands of satisfied customers.
							</div>
						</div>

						<div class="accordion-item">
							<div class="title">
								<div class="heading-text">
									<i class="fas fa-flask text-secondary feature-icon"></i>
									<span>Data-Driven, Backed by Research</span>
								</div>
								<span class="icon">+</span>
							</div>
							<div class="accordion-content">
								Built on evidence and verified with clinical studies.
							</div>
						</div>

						<div class="accordion-item">
							<div class="title">
								<div class="heading-text">
									<i class="fas fa-trophy text-secondary feature-icon"></i>
									<span>Award-Winning</span>
								</div>
								<span class="icon">+</span>
							</div>
							<div class="accordion-content">
								Recognized across the wellness and tech industries.
							</div>
						</div>

						<div class="accordion-item">
							<div class="title">
								<div class="heading-text">
									<i class="fas fa-shield-alt text-secondary feature-icon"></i>
									<span>Certified Safety & Performance</span>
								</div>
								<span class="icon">+</span>
							</div>
							<div class="accordion-content">
								Lab-tested, certified for peace of mind and performance.
							</div>
						</div>

						<div class="accordion-item">
							<div class="title">
								<div class="heading-text">
									<i class="fas fa-leaf text-secondary feature-icon"></i>
									<span>Eco-Friendly, Premium Materials</span>
								</div>
								<span class="icon">+</span>
							</div>
							<div class="accordion-content">
								Made with sustainable, top-tier materials.
							</div>
						</div>
					</div>


				</div>
				<div class="col-sm-7 mx-auto">
					<div class="row mt-5 bg-theme-color2 rounded-4">
						<div class="col-lg-10 mx-auto">
							<div class="p-4 rounded-4 text-left quote-text">
								<span class="fw-bold">Our original creation. Engineered by experts, proven effective,
									and built to last.”</span>
								<br><span class="d-block mt-2 text-secondary">— The Somira Team</span>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>



	<script src="<?= get_template_directory_uri() . '/styles/' ?>https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script>
	$(document).ready(function () {
		$('.custom-accordion .accordion-item .title').on('click', function () {
			const parent = $(this).closest('.accordion-item');

			if (parent.hasClass('active')) {
				parent.removeClass('active');
				parent.find('.accordion-content').slideUp();
				parent.find('.icon').text('+');
			} else {
				$('.custom-accordion .accordion-item').removeClass('active');
				$('.custom-accordion .accordion-content').slideUp();
				$('.custom-accordion .icon').text('+');

				parent.addClass('active');
				parent.find('.accordion-content').slideDown();
				parent.find('.icon').text('−');
			}
		});
	});
</script>

</html>
