<?php
defined('ABSPATH') || exit;
global $product;
do_action('woocommerce_before_single_product');

$product_id = $product->get_id();
$title = $product->get_name();
$price_html = $product->get_price_html();
$images = $product->get_gallery_image_ids();
$main_img = wp_get_attachment_image_url($product->get_image_id(), size: 'large');
$main_image_id = $product->get_image_id();
$gallery_ids = $product->get_gallery_image_ids();
$all_image_ids = array_merge([$main_image_id], $gallery_ids);
$regular_price = $product->get_regular_price();
$sale_price = $product->get_sale_price();
$current_price = $product->get_price();
?>
<script src="/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js"></script>

<div class="container product-details-container">
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
		<div class="row">
			<div class="container py-5" style="max-width: 1400px;">
				<div class="row g-4">
					<div class="col-md-6">
						<div class="product-gallery d-flex justify-content-center align-items-center">
							<div class="zoom-container text-center">
								<button class="arrow left-arrow position-absolute top-50 start-0 translate-middle-y
								border-0 rounded-circle ps-5 rounded-end">
								</button>
								<img src="<?php echo esc_url(wp_get_attachment_image_url($main_image_id, 'large')); ?>"
									class="zoom-image img-fluid" alt="Product" id="mainImage">
							</div>
							<button class="arrow right-arrow position-absolute top-50 end-0 translate-middle-y 
								border-0 rounded-circle pe-5 rounded-start">
							</button>

						</div>
						<div class="thumbs d-flex gap-4 mt-3">
							<?php foreach ($all_image_ids as $index => $image_id): ?>
								<img src="<?php echo esc_url(wp_get_attachment_image_url($image_id, 'thumbnail')); ?>"
									data-index="<?php echo esc_attr($index); ?>"
									data-large="<?php echo esc_url(wp_get_attachment_image_url($image_id, 'large')); ?>"
									class="img-thumbnail thumb-img gallery-img" />
							<?php endforeach; ?>
						</div>
					</div>
					<div class="product-info-block col-md-6  ps-5">
						<h4 class="product-title"><strong><?= $title ?></strong></h4>
						<ul class="list-unstyled text-muted mb-3">
							<li>
								<i class="fas fa-certificate text-secondary" style="font-size: 24px;"></i>
								<i class="fas fa-check text-white position-absolute"></i>
								<span class="font16 features">DeepRelief™ tech for deep massage</span>
							</li>
							<li>
								<i class="fas fa-certificate text-secondary" style="font-size: 24px;"></i>
								<i class="fas fa-check text-white position-absolute"></i>
								<span class="font16 features">Soothing heat to relax muscles</span>
							</li>
							<li>
								<i class="fas fa-certificate text-secondary" style="font-size: 24px;"></i>
								<i class="fas fa-check text-white position-absolute"></i>
								<span class="font16 features">Premium design, anywhere use</span>
							</li>
						</ul>
						<div class="price mb-3">
							<del>$<?= $regular_price ?></del> <span class="ps-2">$<?= $current_price ?></span>
						</div>

						<div class="row g-2 mb-3 product-swatch">
							<div class="col col-md-6">
								<select class="form-select bg-theme-color4 p-3">
									<option>Select Size</option>
									<option>UK Version</option>
									<option>US Version</option>
								</select>
							</div>
							<div class="col col-md-6">
								<select class="form-select bg-theme-color4 p-3">
									<option>Features & Functions</option>
								</select>
							</div>
						</div>
						<div class="col-md-9 mt-5 qty-box bg-theme-color3">
							<div class="variation-box mb-3">
								<select class="form-select bg-theme-color4 p-3">
									<option>UK Version</option>
								</select>


								<div class="qty-box mb-3 mt-4">
									<form id="ajaxAddToCartForm" class="w-100">
										<div class="row">
											<input type="hidden" name="product_id"
												value="<?php echo $product->get_id(); ?>" />
											<div class="col-md-5">
												<div class="d-inline-flex align-items-center border rounded px-2 py-1 
													bg-transparent border-secondary w-100">
													<button
														class="btn btn-sm px-2 p-3 py-0 text-dark bg-transparent border-0 qty-minus"
														type="button">−</button>

													<input type="text" id="quantity"
														class="form-control p-2 text-center border-0 bg-transparent p-0 mx-2"
														value="1" readonly>

													<button
														class="btn p-2 btn-sm px-2 py-0 text-dark bg-transparent border-0 qty-plus"
														type="button">+</button>
												</div>
											</div>
											<div class="col-md-5">
												<button type="submit"
													class="btn checkout-btn w-100  btn-style1 text-white rounded-pill px-4">Checkout</button>
											</div>
										</div>
									</form>

								</div>

								<div class="text-muted mt-2" style="font-size: 13px;">
									30-day money back guarantee / warranty (if this add-on is purchased)
								</div>
							</div>

						</div>

						<div class="payment-group col-md-9 mt-5">
							<div class="top-row">
								<button class="payment-btn apple-pay">
									Buy with <i class="fab fa-apple fa-lg"></i> Pay
								</button>
								<button class="payment-btn google-pay">
									<i class="fab fa-google-pay fa-lg"></i>
									Pay
									<img class="visa-card"
										src="https://static-00.iconduck.com/assets.00/visa-icon-256x164-2h8ja9is.png"
										alt="Visa" /> ....0592
								</button>
							</div>
							<div class="bottom-row">
								<button class="payment-btn link-pay">
									Pay with <i class="fas fa-circle-chevron-right text-white"></i> link
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>



<?php do_action('woocommerce_after_single_product'); ?>