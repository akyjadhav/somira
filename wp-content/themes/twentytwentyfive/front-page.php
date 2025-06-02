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
       <link href="<?= get_template_directory_uri() . '/styles/' ?>responsive.css" rel="stylesheet">
</head>

<body>

	<!-- Fixed Navbar -->
	<nav class="navbar fixed-top">
		<div class="container d-flex justify-content-between align-items-center px-3">
			<span class="navbar-brand">SOMIRA</span>

			<!-- Mobile Menu Trigger -->
			<div class="d-lg-none d-flex align-items-center gap-2">
				<div class="cart-icon rounded-circle p-2">
					<i class="fas fa-bag-shopping"></i>
				</div>
				<button class="navbar-toggler border-0 bg-dark rounded-circle p-2" type="button" id="menuToggle">
					<i class="fas fa-bars text-white"></i>
				</button>
			</div>

			<!-- Desktop Menu -->
			<div class="collapse navbar-collapse d-lg-flex justify-content-between align-items-center"
				id="navbarContent">
				<div class="d-flex align-items-center gap-4">
					<div class="divider d-none d-lg-block"></div>
					<a class="nav-link active" href="#">Home</a>
					<a class="nav-link" href="#">Somira DeepRelief™</a>
					<a class="nav-link" href="#">Contact</a>
				</div>
				<div class="d-flex align-items-center gap-3">
					<select class="form-select form-select-sm w-auto">
						<option>EUR €</option>
						<option>USD $</option>
					</select>
					<button class="btn btn-buy btn-style1 text-white rounded-pill px-4">Buy Now</button>
					<div class="cart-icon rounded-circle p-2 d-none d-lg-block">
						<i class="fas fa-bag-shopping"></i>
					</div>
				</div>
			</div>
		</div>

		<!-- Mobile Slide-out Menu -->
		<div id="mobileMenu" class="d-lg-none position-fixed top-0 end-0 bg-white vh-100 w-100 shadow p-4"
			style="transform: translateX(100%); transition: transform 0.3s ease;">
			<button id="menuClose" class="float-end">X</button>
			<div class="d-flex flex-column gap-4 mt-5">
				<a href="#" class="fs-4 fw-bold text-dark pb-3">Home</a>
				<a href="#" class="fs-4 fw-bold text-dark pb-3">Somira DeepRelief™</a>
				<a href="#" class="fs-4 fw-bold text-dark pb-3">Contact</a>
			</div>
			<div class="d-flex flex-column gap-4 mt-5 menu-bottom">
				<select class="form-select form-select-lg">
					<option>EUR €</option>
					<option>USD $</option>
				</select>
				<button class="btn btn-dark btn-lg rounded-pill">Buy Now</button>
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
				<source src="<?= get_template_directory_uri() . '/styles/' ?>MassagerReveal.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		</div>

		<div class="container h-100">
			<div class="row h-100">
				<div class="col-lg-7 d-flex align-items-end">
					<div class="hero-content p-4 p-md-5 rounded-4 mb-5">
						<h1 class="fw-bold mb-3">The Somira DeepRelief™<br> Massager Deluxe</h1>
						<p class="mb-4 text-light small">
							Experience deep-tissue massage with soothing heat, premium materials, <br>
							and advanced DeepRelief™ technology — anytime, anywhere.
						</p>
						<a href="#" class="btn px-5 py-2 bg-white mt-4
 rounded-pill fw-medium btn-style1 text-black">Buy Now</a>
					</div>
				</div>
			</div>

		</div>
	</section>
	<section class="py-4 bg-white">
		<div class="container text-center">
			<div class="row justify-content-center align-items-center g-4">
				<div class="col-12 col-sm-12 col-md-2 text-center">
					<span class="mb-4 text-style1" style="letter-spacing: 1px;">
						FEATURED IN »
					</span>
				</div>
				<div class="col-3 col-sm-3 col-md-2 text-center">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>healthcare.png" alt="Healthline" class="img-fluid" style="max-height: 28px;">
				</div>
				<div class="col-3 col-sm-3 col-md-2 text-center">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>cbs1.png" alt="CBS" class="img-fluid" style="max-height: 28px;">
				</div>
				<div class="col-3 col-sm-3 col-md-2 text-center">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>gq12.png" alt="GQ" class="img-fluid" style="max-height: 28px;">
				</div>
				<div class="col-3 col-sm-3 col-md-2 text-center">
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
				<div class="col-sm-6 mt-4 mb-4 mx-auto">
					<div class="mt-5 bg-theme-color2 rounded-4">
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

	<section class="key-features bg-theme-color3">
		<div class="container">
			<h2 class="section-title">Key Features <span class="breakline"><span class="color1">&</span>
					Functions</span></h2>

			<div class="mobile feature-scroll-container d-md-none">
				<div class="col-md-4 feature-card">
					<div class="feature-box bg-theme-color2">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>p1.png" alt="Heat Therapy">
					</div>
					<div class="feature-title pt-2">Massage</div>
					<div class="feature-desc pb-4">
						Enjoy relaxing massage with auto-rotation, enhanced by DeepRelief™ technology for targeted
						relief.
					</div>
				</div>
				<div class="col-md-4 feature-card">
					<div class="feature-box bg-theme-color2">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>p2.webp" alt="Heat Therapy">
					</div>
					<div class="feature-title pt-2">Optional Heat Therapy</div>
					<div class="feature-desc pb-4">Delivers gentle warmth that complements the massage experience.
						Engineered with built-in overheat protection.</div>
				</div>

				<div class="col-md-4 feature-card">
					<div class="feature-box bg-theme-color2">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>p3.webp" alt="Red Light Therapy">
					</div>
					<div class="feature-title pt-2">Red Light Therapy</div>
					<div class="feature-desc pb-4">Feel the low-level red light technology designed to support health
						and
						wellness.</div>
				</div>

				<div class="col-md-4 feature-card">
					<div class="feature-box bg-theme-color2">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>p4.png" alt="Smart Controls">
					</div>
					<div class="feature-title pt-2">Smart Controls</div>
					<div class="feature-desc pb-4">Simple, intuitive buttons for your own personalization.</div>
				</div>


				<div class="col-md-4 feature-card">
					<div class="feature-box bg-theme-color2">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>p5.png" alt="High Quality Material">
					</div>
					<div class="feature-title pt-2">High Quality Material</div>
					<div class="feature-desc pb-4">Delivers gentle warmth that complements the massage experience.
						Engineered with built-in overheat protection.</div>
				</div>

				<div class="col-md-4 feature-card">
					<div class="feature-box bg-theme-color2">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>p6.png" alt="Extended Arm Rest Design">
					</div>
					<div class="feature-title pt-2">Extended Arm Rest Design</div>
					<div class="feature-desc pb-4">Delivers gentle warmth that complements the massage experience.
						Engineered with built-in overheat protection.</div>
				</div>


			</div>

			<div class="desktop row g-4 d-none d-md-block">
				<div class="col-md-4">
					<div class="feature-box bg-theme-color2">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>p1.png" alt="Heat Therapy">
					</div>
					<div class="feature-title pt-2">Massage</div>
					<div class="feature-desc pb-4">
						Enjoy relaxing massage with auto-rotation, enhanced by DeepRelief™ technology for targeted
						relief.
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature-box bg-theme-color2">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>p2.webp" alt="Heat Therapy">
					</div>
					<div class="feature-title pt-2">Optional Heat Therapy</div>
					<div class="feature-desc pb-4">Delivers gentle warmth that complements the massage experience.
						Engineered with built-in overheat protection.</div>
				</div>


				<div class="col-md-4">
					<div class="feature-box bg-theme-color2">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>p3.webp" alt="Red Light Therapy">
					</div>
					<div class="feature-title pt-2">Red Light Therapy</div>
					<div class="feature-desc pb-4">Feel the low-level red light technology designed to support health
						and
						wellness.</div>
				</div>

				<div class="col-md-4">
					<div class="feature-box bg-theme-color2">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>p4.png" alt="Smart Controls">
					</div>
					<div class="feature-title pt-2">Smart Controls</div>
					<div class="feature-desc pb-4">Simple, intuitive buttons for your own personalization.</div>
				</div>
				<div class="col-md-4">
					<div class="feature-box bg-theme-color2">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>p5.png" alt="High Quality Material">
					</div>
					<div class="feature-title pt-2">High Quality Material</div>
					<div class="feature-desc pb-4">Delivers gentle warmth that complements the massage experience.
						Engineered with built-in overheat protection.</div>
				</div>
				<div class="col-md-4">
					<div class="feature-box bg-theme-color2">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>p6.png" alt="Extended Arm Rest Design">
					</div>
					<div class="feature-title pt-2">Extended Arm Rest Design</div>
					<div class="feature-desc pb-4">Delivers gentle warmth that complements the massage experience.
						Engineered with built-in overheat protection.</div>
				</div>
			</div>
		</div>
	</section>

	<section class="complex-problems bg-theme-color1">
		<div class="container">
			<h2 class="section-title">Complex Problems.<span class="breakline"><span
						class="color1">Simple,</span><strong>Smart Solutions.</strong></span></h2>

			<div class="mobile complex-problems-scroll-container d-md-none">
				<div class="col-md-4 solution-card">
					<div class="solution-icon"><img src="<?= get_template_directory_uri() . '/styles/' ?>s1.png"></div>
					<div class="solution-content">
						<div class="solution-title">Relieves Neck & Shoulder Pain</div>
						<div class="solution-desc pt-2">Targets tension and stiffness to restore comfort and
							mobility.</div>
					</div>
				</div>

				<div class="col-md-4 solution-card">
					<div class="solution-icon"><img src="<?= get_template_directory_uri() . '/styles/' ?>s2.png"></div>
					<div class="solution-content">
						<div class="solution-title">Stress Relief</div>
						<div class="solution-desc pt-2">Promotes relaxation and helps calm the mind and body after a
							stressful day.</div>
					</div>
				</div>

				<div class="col-md-4 solution-card">
					<div class="solution-icon"><img src="<?= get_template_directory_uri() . '/styles/' ?>s3.png"></div>
					<div class="solution-content">
						<div class="solution-title">On-Demand Health & Wellness</div>
						<div class="solution-desc pt-2">Anytime, anywhere. Feel your best, wherever you are.</div>
					</div>
				</div>


				<div class="col-md-4 solution-card">
					<div class="solution-icon"><img src="<?= get_template_directory_uri() . '/styles/' ?>s4.png"></div>
					<div class="solution-content">
						<div class="solution-title">Enables Muscle Recovery</div>
						<div class="solution-desc pt-2">Loosens tight muscles and releases tension for enhanced
							recovery.
						</div>
					</div>
				</div>

				<div class="col-md-4 solution-card">
					<div class="solution-icon"><img src="<?= get_template_directory_uri() . '/styles/' ?>s5.png"></div>
					<div class="solution-content">
						<div class="solution-title">Boosts Blood Circulation</div>
						<div class="solution-desc pt-2">Stimulates healthy flow to energize the body and reduce
							physical
							fatigue.</div>
					</div>
				</div>

				<div class="col-md-4 solution-card">
					<div class="solution-icon"><img src="<?= get_template_directory_uri() . '/styles/' ?>s6.png"></div>
					<div class="solution-content">
						<div class="solution-title">Prolonged Sitting Solution</div>
						<div class="solution-desc pt-2">Optimized for home, office, or commuting to ease any issues
							caused by
							sitting for long hours.</div>
					</div>
				</div>


			</div>

			<div class="desktop row g-4  d-none d-md-block">
				<div class="col-md-4">
					<div class="solution-card">
						<div class="solution-icon"><img src="<?= get_template_directory_uri() . '/styles/' ?>s1.png"></div>
						<div class="solution-content">
							<div class="solution-title">Relieves Neck & Shoulder Pain</div>
							<div class="solution-desc pt-2">Targets tension and stiffness to restore comfort and
								mobility.</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="solution-card">
						<div class="solution-icon"><img src="<?= get_template_directory_uri() . '/styles/' ?>s2.png"></div>
						<div class="solution-content">
							<div class="solution-title">Stress Relief</div>
							<div class="solution-desc pt-2">Promotes relaxation and helps calm the mind and body after a
								stressful day.</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="solution-card">
						<div class="solution-icon"><img src="<?= get_template_directory_uri() . '/styles/' ?>s3.png"></div>
						<div class="solution-content">
							<div class="solution-title">On-Demand Health & Wellness</div>
							<div class="solution-desc pt-2">Anytime, anywhere. Feel your best, wherever you are.</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="solution-card">
						<div class="solution-icon"><img src="<?= get_template_directory_uri() . '/styles/' ?>s4.png"></div>
						<div class="solution-content">
							<div class="solution-title">Enables Muscle Recovery</div>
							<div class="solution-desc pt-2">Loosens tight muscles and releases tension for enhanced
								recovery.
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="solution-card">
						<div class="solution-icon"><img src="<?= get_template_directory_uri() . '/styles/' ?>s5.png"></div>
						<div class="solution-content">
							<div class="solution-title">Boosts Blood Circulation</div>
							<div class="solution-desc pt-2">Stimulates healthy flow to energize the body and reduce
								physical
								fatigue.</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="solution-card">
						<div class="solution-icon"><img src="<?= get_template_directory_uri() . '/styles/' ?>s6.png"></div>
						<div class="solution-content">
							<div class="solution-title">Prolonged Sitting Solution</div>
							<div class="solution-desc pt-2">Optimized for home, office, or commuting to ease any issues
								caused by
								sitting for long hours.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="product-section bg-theme-color3">
		<div class="container py-5 ">
			<div class="row align-items-center">
				<div class="col-md-6 bg-theme-color2 product-carousel">
					<div id="productCarousel" class="carousel slide " data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= get_template_directory_uri() . '/styles/' ?>product.png" class="d-block w-100" alt="Massager Image 1">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
						</button>
					</div>
				</div>

				<div class="col-md-6 product-info ps-5">
					<h2 class="fw-bold section-title text-start">The Somira DeepRelief™<br>Massager Deluxe</h2>
					<div class="d-flex align-items-center price-info">
						<span class="price">$79.99</span>
						<span class="price-sale">$49.99</span>
					</div>
					<button class="checkout-btn mt-3 btn btn-style1 text-white">Proceed to Checkout</button>
					<p class="mt-3 font16 text-start checkout-info">
						*Express shipping available | Certified secure checkout through Stripe® | Apple Pay, Visa,
						Mastercard, American Express, Debit & Credit Cards
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="market-research">
		<div class="container">
			<div class="text-center mb-5">
				<h2 class="section-title">
					Strategic Industry<br>
					<span class="color1">and</span> Market Research
				</h2>
			</div>

			<div class="mobile market-research-scroll-container d-md-none">
				<div class="col-md-4 market-card">
					<div class="p-4 rounded-4 h-100 bg-theme-color3 market-content">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>penn.png" alt="Penn Logo" class="mb-3">
						<h6 class="fw-bold mb-2 font18">Massage</h6>
						<p class="mb-0 text-muted font18 pt-2 pb-3">
							We leveraged research on neuromuscular stimulation to guide our recovery-focused design.
						</p>
					</div>
				</div>
				<div class="col-md-4 market-card">
					<div class="p-4 rounded-4 h-100 bg-theme-color3 market-content">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>cambridge.png" alt="Cambridge Logo" class="mb-3">
						<h6 class="fw-bold mb-2 font18">Optional Heat Therapy</h6>
						<p class="mb-0 text-muted font18 pt-2 pb-3">
							Faculty insights shaped our approach to heat application and tension relief.
						</p>
					</div>
				</div>
				<div class="col-md-4 market-card">
					<div class="p-4 rounded-4 h-100 bg-theme-color3 market-content">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>penn.png" alt="UGA Logo" class="mb-3">
						<h6 class="fw-bold mb-2 font18">Red Light Therapy</h6>
						<p class="mb-0 text-muted font18 pt-2 pb-3">
							Scientific findings informed our engineering around circulation and postural support.
						</p>
					</div>
				</div>
			</div>

			<div class="desktop row g-4 d-none d-md-block">
				<div class="col-md-4">
					<div class="p-4 rounded-4 h-100 bg-theme-color3">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>penn.png" alt="Penn Logo" class="mb-3">
						<h6 class="fw-bold mb-2 font18">Massage</h6>
						<p class="mb-0 text-muted font18 pt-2 pb-3">
							We leveraged research on neuromuscular stimulation to guide our recovery-focused design.
						</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="p-4 rounded-4 h-100 bg-theme-color3">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>cambridge.png" alt="Cambridge Logo" class="mb-3">
						<h6 class="fw-bold mb-2 font18">Optional Heat Therapy</h6>
						<p class="mb-0 text-muted font18 pt-2 pb-3">
							Faculty insights shaped our approach to heat application and tension relief.
						</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="p-4 rounded-4 h-100 bg-theme-color3">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>penn.png" alt="UGA Logo" class="mb-3">
						<h6 class="fw-bold mb-2 font18">Red Light Therapy</h6>
						<p class="mb-0 text-muted font18 pt-2 pb-3">
							Scientific findings informed our engineering around circulation and postural support.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="testimonials">
		<div class="container">
			<div class="text-center mb-5 section-title">
				<h2 class="section-title">Testimonials</h2>
				<p class="sub-title font16 text-muted mb-0">Trusted by people like you</p>
			</div>

			<div class="mobile testimonials-scroll-container d-md-none">
				<div class="col-md-4 testimonials-card">
					<div class="p-4 rounded-4 position-relative h-100 bg-theme-color3">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>t1.jpg" alt="Alyssa" class="rounded-circle mb-3">
						<div class="position-absolute top-0 end-0 m-3">
							<i class="quote fas fa-quote-right position-absolute top-0 end-0 m-3 color2"></i>
						</div>
						<div class="d-flex align-items-center gap-2 mb-1 mt-1">
							<i class="fas fa-star text-warning"></i>
							<span class="fw-semibold">5.0</span>
						</div>
						<div class="testimonials-content">
							<p class="fw-bold mb-1 font18 mt-4">Alyssa Novak</p>
							<p class="text-muted mb-0 font14 mt-3 pb-4">
								After long work days at my desk, the Somira massager is my go-to for instant relief.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 testimonials-card">
					<div class="p-4 rounded-4 position-relative h-100 bg-theme-color3 ">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>t2.jpg" alt="George" class="rounded-circle mb-3">
						<div class="position-absolute top-0 end-0 m-3">
							<i class="quote fas fa-quote-right position-absolute top-0 end-0 m-3 color2"></i>
						</div>
						<div class="d-flex align-items-center gap-2 mb-1  mt-1">
							<i class="fas fa-star text-warning"></i>
							<span class="fw-semibold">5.0</span>
						</div>
						<div class="testimonials-content">
							<p class="fw-bold mb-1 font18 mt-4">Dr. George Romero</p>
							<p class="text-muted mb-0 font14 mt-3 pb-4">
								As a physiotherapist I am proud to have ordered 10 pieces. I hand them out to my
								patients
								for releasing muscle tension and I also personally like to use the product.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 testimonials-card">
					<div class="p-4 rounded-4 position-relative h-100 bg-theme-color3 ">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>t3.jpg" alt="Hannah" class="rounded-circle mb-3 mt-1">
						<div class="position-absolute top-0 end-0 m-3">
							<i class="quote fas fa-quote-right position-absolute top-0 end-0 m-3 color2"></i>
						</div>
						<div class="d-flex align-items-center gap-2 mb-1">
							<i class="fas fa-star text-warning"></i>
							<span class="fw-semibold">5.0</span>
						</div>
						<div class="testimonials-content">
							<p class="fw-bold mb-1 font18 mt-4">Hannah</p>
							<p class="text-muted mb-0 font14 mt-3 pb-4">
								It’s excellent, just wish the heat got a little bit hotter. Still use it every day
								though.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="desktop row g-4 d-none d-md-block mb-4">
				<!-- Card 1 -->
				<div class="col-md-4">
					<div class="p-4 rounded-4 position-relative h-100 bg-theme-color3">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>t1.jpg" alt="Alyssa" class="rounded-circle mb-3">
						<div class="position-absolute top-0 end-0 m-3">
							<i class="quote fas fa-quote-right position-absolute top-0 end-0 m-3 color2"></i>
						</div>
						<div class="d-flex align-items-center gap-2 mb-1 mt-1">
							<i class="fas fa-star text-warning"></i>
							<span class="fw-semibold">5.0</span>
						</div>
						<p class="fw-bold mb-1 font18 mt-4">Alyssa Novak</p>
						<p class="text-muted mb-0 font14 mt-3 pb-4">
							After long work days at my desk, the Somira massager is my go-to for instant relief.
						</p>
					</div>
				</div>

				<!-- Card 2 -->
				<div class="col-md-4">
					<div class="p-4 rounded-4 position-relative h-100 bg-theme-color3 ">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>t2.jpg" alt="George" class="rounded-circle mb-3">
						<div class="position-absolute top-0 end-0 m-3">
							<i class="quote fas fa-quote-right position-absolute top-0 end-0 m-3 color2"></i>
						</div>
						<div class="d-flex align-items-center gap-2 mb-1  mt-1">
							<i class="fas fa-star text-warning"></i>
							<span class="fw-semibold">5.0</span>
						</div>
						<p class="fw-bold mb-1 font18 mt-4">Dr. George Romero</p>
						<p class="text-muted mb-0 font14 mt-3 pb-4">
							As a physiotherapist I am proud to have ordered 10 pieces. I hand them out to my patients
							for releasing muscle tension and I also personally like to use the product.
						</p>
					</div>
				</div>

				<!-- Card 3 -->
				<div class="col-md-4">
					<div class="p-4 rounded-4 position-relative h-100 bg-theme-color3 ">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>t3.jpg" alt="Hannah" class="rounded-circle mb-3 mt-1">
						<div class="position-absolute top-0 end-0 m-3">
							<i class="quote fas fa-quote-right position-absolute top-0 end-0 m-3 color2"></i>
						</div>
						<div class="d-flex align-items-center gap-2 mb-1">
							<i class="fas fa-star text-warning"></i>
							<span class="fw-semibold">5.0</span>
						</div>
						<p class="fw-bold mb-1 font18 mt-4">Hannah</p>
						<p class="text-muted mb-0 font14 mt-3 pb-4">
							It’s excellent, just wish the heat got a little bit hotter. Still use it every day though.
						</p>
					</div>
				</div>
			</div>

			<div class="text-center">
				<button class="btn px-4 py-2 rounded-pill fw-semibold btn-style1 text-white">View all</button>
			</div>
		</div>

	</section>

	<section class="comparison bg-theme-color3">
		<div class="container text-center">
			<h2 class="section-title">Comparison <span class="breakline"><span class="color3">Why</span><strong> Somira
						Wins </strong></span></h2>

			<div class="comparison-table table-responsive mt-5 mobile comparison-scroll-container">
				<table class="table mb-0 font16">
					<thead>
						<tr>
							<th></th>
							<th class="header-highlight text-white">
								<span>Somira</span>
								<span>Massager</span>
							</th>
							<th>Bulky Massage Chair</th>
							<th>One Spa Session</th>
							<th>Cheap Copycat Massagers</th>
							<th>Manual Massage Tools</th>
							<th>Single-Function Massagers</th>
							<th>Others</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Price*</td>
							<td>$49.99</td>
							<td>~$2500</td>
							<td>~$200</td>
							<td>~$15</td>
							<td>~10</td>
							<td>~$200</td>
							<td><span class="icon-circle no-icon">✕</span></td>
						</tr>
						<tr>
							<td>Premium Build Quality</td>
							<td><span class="icon-circle yes-icon">✓</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
						</tr>
						<tr>
							<td>No Setup, No Hassle</td>
							<td><span class="icon-circle yes-icon">✓</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
						</tr>
						<tr>
							<td>Niche Edit Backlinks (DF)</td>
							<td><span class="icon-circle yes-icon">✓</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
						</tr>
						<tr>
							<td>Niche Relevant</td>
							<td><span class="icon-circle yes-icon">✓</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
						</tr>
						<tr>
							<td>Link Juice</td>
							<td><span class="icon-circle yes-icon">✓</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
						</tr>
						<tr>
							<td>Free Link Traking</td>
							<td><span class="icon-circle yes-icon">✓</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
						</tr>
						<tr>
							<td>Link Juice</td>
							<td><span class="icon-circle yes-icon">✓</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
						</tr>
						<tr>
							<td>Fast Indexing</td>
							<td><span class="icon-circle yes-icon">✓</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
						</tr>
						<tr>
							<td>Content Included 100% Genuine</td>
							<td><span class="icon-circle yes-icon">✓</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
						</tr>
						<tr>
							<td>Outreach</td>
							<td><span class="icon-circle yes-icon">✓</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
							<td><span class="icon-circle no-icon">✕</span></td>
						</tr>
					</tbody>
				</table>

			</div>
			<p class="font16 bg-theme-color3 mb-0 pt-5">
				*The Somira DeepRelief™ Massager has a collectible premium value of $1500 — offered for just $49.99.
			</p>
		</div>
	</section>
	<section class="explore bg-theme-color1">
		<div class="container">
			<h2 class="section-title">Explore Real-Life <span class="breakline"><span class="color3">Use</span><strong>
						Scenarios </strong></span></h2>
			<div class="custom-image-grid mobile comparison-scroll-container d-md-none">
				<img src="<?= get_template_directory_uri() . '/styles/' ?>use5.jpg" alt="Foot massage">
				<img src="<?= get_template_directory_uri() . '/styles/' ?>use1.jpg" alt="Top view of product">
				<img src="<?= get_template_directory_uri() . '/styles/' ?>use7.jpg" alt="Red light therapy">
				<img src="<?= get_template_directory_uri() . '/styles/' ?>use2.jpg" alt="Back massage">
				<img src="<?= get_template_directory_uri() . '/styles/' ?>use3.jpg" alt="Car usage">
				<img src="<?= get_template_directory_uri() . '/styles/' ?>use6.jpg" alt="Neck massage">
			</div>

			<div class="row desktop  d-none d-md-block">
				<div class="col-lg-5 col-md-12 mb-5 mb-lg-0">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>use5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

					<img src="<?= get_template_directory_uri() . '/styles/' ?>use2.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
				</div>
				<div class="col-lg-3 col-md-12 mb-3 mb-lg-0">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>use1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

					<img src="<?= get_template_directory_uri() . '/styles/' ?>use3.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
				</div>
				<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>use7.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

					<img src="<?= get_template_directory_uri() . '/styles/' ?>use6.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
				</div>
			</div>


	</section>
	<section class="about-us bg-theme-color3">
		<div class="container accordion-container">
			<div class="row">

				<div class="col-md-5 img-box pt-5 bg-theme-color2 d-flex align-items-end justify-content-center">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>about.png" alt="Founders" class="img-fluid align-self-end pt-4"
						style="max-height: 500px;">
				</div>
				<div class="col-md-7 about-content">
					<div class="about-box bg-theme-color3">
						<h4 class="pb-4 title font28 fw-bold">About us</h4>
						<div class="accordion" id="aboutAccordion">
							<div class="accordion-item first">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Founders
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show"
									aria-labelledby="headingOne" data-bs-parent="#aboutAccordion">
									<div class="accordion-body">
										The founders built Somira out of a passion for wellness, a commitment to
										precision, and a purpose to help people feel their best every day.
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Our Mission
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
									data-bs-parent="#aboutAccordion">
									<div class="accordion-body">
										Our mission is to provide high-quality wellness products that improve everyday
										life.
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseThree" aria-expanded="false"
										aria-controls="collapseThree">
										Our Vision
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse"
									aria-labelledby="headingThree" data-bs-parent="#aboutAccordion">
									<div class="accordion-body">
										To be the leading name in smart wellness innovation.
									</div>
								</div>
							</div>
							<div class="accordion-item last">
								<h2 class="accordion-header" id="headingFour">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#collapseFour" aria-expanded="false"
										aria-controls="collapseFour">
										Our History
									</button>
								</h2>
								<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
									data-bs-parent="#aboutAccordion">
									<div class="accordion-body">
										Somira started with a small team and grew to a global wellness brand through
										innovation and trust.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="insights">
		<div class="container">
			<div class="section-title">Latest Insights</div>

			<div class="mobile insights-scroll-container d-md-none">
				<div class="insight-card">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>insights1.png" alt="Insight 1">
					<div class="insight-content">
						<div class="insight-date">30 May, 2025</div>
						<div class="insight-title">5 Everyday Habits That Are Secretly Hurting Your Neck</div>
					</div>
				</div>
				<div class="insight-card">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>insights2.png" alt="Insight 2">
					<div class="insight-content">
						<div class="insight-date">30 May, 2025</div>
						<div class="insight-title">How to Use a Neck Massager Properly</div>
					</div>
				</div>
				<div class="insight-card">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>insights3.png" alt="Insight 3">
					<div class="insight-content">
						<div class="insight-date">30 May, 2025</div>
						<div class="insight-title">Tips for a Healthier Posture While Working</div>
					</div>
				</div>
			</div>


			<div class="insights-row desktop d-none d-md-block">

				<div class="insight-card">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>insights1.png" alt="Insight 1">
					<div class="insight-content">
						<div class="insight-date">30 May, 2025</div>
						<div class="insight-title">5 Everyday Habits That Are Secretly Hurting Your Neck</div>
					</div>
				</div>
				<div class="insight-card">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>insights2.png" alt="Insight 2">
					<div class="insight-content">
						<div class="insight-date">30 May, 2025</div>
						<div class="insight-title">How to Use a Neck Massager Properly</div>
					</div>
				</div>
				<div class="insight-card">
					<img src="<?= get_template_directory_uri() . '/styles/' ?>insights3.png" alt="Insight 3">
					<div class="insight-content">
						<div class="insight-date">30 May, 2025</div>
						<div class="insight-title">Tips for a Healthier Posture While Working</div>
					</div>
				</div>
			</div>

			<div class="view-all-btn">
				<button class="btn px-4 py-2 rounded-pill fw-semibold btn-style1 text-white">View all</button>
			</div>
		</div>
	</section>

	<section class="faq bg-theme-color1">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9">
					<h2 class="section-title">Frequently Asked <span class="breakline">Questions</span></h2>
					<div class="accordion" id="faqAccordion">
						<div class="accordion-item">
							<h2 class="accordion-header" id="heading1">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
									How does the Somira DeepRelief™ Massager work?
								</button>
							</h2>
							<div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
								data-bs-parent="#faqAccordion">
								<div class="accordion-body">
									The exceptional massager uses rotating massage nodes, optional heat therapy, and
									DeepRelief™
									technology to target tension, stiffness, and muscle fatigue for fast, effective
									relief.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="heading2">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
									Can I use the massager on other parts of my body?
								</button>
							</h2>
							<div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
								data-bs-parent="#faqAccordion">
								<div class="accordion-body">
									Yes, the massager is designed for multiple areas such as neck, back, and shoulders.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="heading2">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
									Is it safe to use daily?
								</button>
							</h2>
							<div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading2"
								data-bs-parent="#faqAccordion">
								<div class="accordion-body">
									Yes, it's designed for daily use with recommended session times.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="heading2">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
									Yes, we offer a 1-year warranty.
								</button>
							</h2>
							<div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading2"
								data-bs-parent="#faqAccordion">
								<div class="accordion-body">
									Yes, it's designed for daily use with recommended session times.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="heading2">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
									How long does shipping take?
								</button>
							</h2>
							<div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading2"
								data-bs-parent="#faqAccordion">
								<div class="accordion-body">
									Shipping typically takes 5–7 business days.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="heading2">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
									Does it come with a warranty?
								</button>
							</h2>
							<div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading2"
								data-bs-parent="#faqAccordion">
								<div class="accordion-body">
									Yes, warranty details are included in the product box.
								</div>
							</div>
						</div>
						<!-- Add more FAQ items similarly -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="contact bg-theme-color1">
		<div class="container">
			<h2 class="section-title">Contact US</h2>
			<div class="row justify-content-center">
				<div class="col-md-8">
					<form class="contact-form">
						<div class="mb-3">
							<input type="text" class="form-control bg-theme-color1" placeholder="Enter name" required>
						</div>
						<div class="mb-3">
							<input type="email" class="form-control bg-theme-color1" placeholder="Enter email" required>
						</div>
						<div class="mb-3">
							<textarea class="form-control bg-theme-color1" placeholder="Enter message"
								required></textarea>
						</div>
						<div class="text-center">
							<button type="submit"
								class="contact-btn align-items-center btn px-4 py-2 rounded-pill fw-semibold btn-style1 text-white">Contact
								us</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container container">
			<h2 class="section-title">Share with Friends</h2>
			<div class="social-icons">
				<a href="#"><i class="fab fa-x-twitter"></i></a>
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-pinterest-p"></i></a>
				<a href="#"><i class="fab fa-whatsapp"></i></a>
			</div>

			<div class="row footer-links-box">
				<div class="col-md-3 footer-links">
					<h5 class="logo">SOMIRA</h5>
					<select class="language-select">
						<option>International (English)</option>
					</select>
				</div>
				<div class="col-md-3 footer-links quick-links">
					<h5>QUICK LINKS</h5>
					<ul>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Feedback</a></li>
						<li><a href="#">Warranty</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-links support-links">
					<h5>SUPPORT</h5>
					<ul>
						<li><a href="#">Sitemap</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Service</a></li>
						<li><a href="#">Shipping & Refunds</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-links newsletter-box">
					<h5>SUBSCRIBE NEWSLETTER</h5>
					<form class="newsletter">
						<input type="email" placeholder="user@website.com">
						<button type="submit">Subscribe</button>
					</form>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-6">
					<div class="footer-bottom text-start">&copy; 2025 SOMIRA. All rights reserved.</div>
				</div>
				<div class="col-md-6">
					<div class="payments text-end">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>visa.png" alt="Visa">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>master.png" alt="Mastercard">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>amex.png" alt="Visa">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>paypal.png" alt="PayPal">
						<img src="<?= get_template_directory_uri() . '/styles/' ?>apple.png" alt="Visa">
					</div>
				</div>
			</div>
			<div class="footer-bg-text mt-5">SOMIRA</div>
		</div>
	</footer>



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
		$('#aboutAccordion .accordion-collapse').on('hide.bs.collapse', function (e) {
			// Check if it's the only one currently open
			if ($('#aboutAccordion .accordion-collapse.show').length === 0) {
				e.preventDefault(); // Stop it from collapsing
			}
		});
		$(window).scroll(function () {
			if ($(this).scrollTop() > 50) { // adjust the threshold
				$('nav').addClass('scrolled');
			} else {
				$('nav').removeClass('scrolled');
			}
		});
		$("#menuToggle").on("click touchstart", function () {
			$("#mobileMenu").css("transform", "translateX(0)");
		});
		$("#menuClose").on("click touchstart", function () {
			$("#mobileMenu").css("transform", "translateX(100%)");
		});

	});
</script>

</html>
