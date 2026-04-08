<?php
$products = cyberpunk_glasses_get_products();
$featured = $products[5];
get_header();
?>

<section id="home" class="hero" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero.png' ); ?>');">
	<div class="hero-orbit hero-orbit-left"></div>
	<div class="hero-orbit hero-orbit-right"></div>
	<div class="hero-content">
		<p class="eyebrow">Portfolio Storefront // WordPress Build</p>
		<div class="glitch-wrapper">
			<h1 class="hero-title">AUGMENT YOUR REALITY</h1>
		</div>
		<p class="hero-subtitle">A portfolio-grade storefront built in WordPress with a full product catalog, product pages, persistent cart, checkout flow, and stored orders inside the dashboard.</p>
		<div class="hero-actions">
			<a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'shop' ) ); ?>" class="btn-cyber">Enter Store</a>
			<a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'checkout' ) ); ?>" class="btn-cyber pink">See Checkout</a>
		</div>
		<div class="hero-metrics">
			<div class="metric-card">
				<span>Catalog pages</span>
				<strong>6 SKUs</strong>
			</div>
			<div class="metric-card">
				<span>Stored orders</span>
				<strong>Dashboard ready</strong>
			</div>
			<div class="metric-card">
				<span>Portfolio angle</span>
				<strong>Brand + Commerce</strong>
			</div>
		</div>
	</div>
</section>

<section class="ticker-band">
	<div class="ticker-track">
		<span>Separate shop page</span>
		<span>Product detail routes</span>
		<span>Persistent cart</span>
		<span>Checkout stored in WordPress</span>
		<span>Portfolio-ready case study</span>
		<span>Separate shop page</span>
	</div>
</section>

<section class="products">
	<h2 class="section-title">Featured <span class="accent-pink">Selection</span></h2>
	<div class="products-grid">
		<?php foreach ( array_slice( $products, 0, 3 ) as $product ) : ?>
			<?php cyberpunk_glasses_render_product_card( $product ); ?>
		<?php endforeach; ?>
	</div>
	<div class="section-cta">
		<a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'shop' ) ); ?>" class="btn-cyber">Browse Full Catalog</a>
	</div>
</section>

<section class="experience-grid">
	<div class="glass-panel featured-panel">
		<p class="eyebrow">Flagship Unit</p>
		<h2><?php echo esc_html( $featured['name'] ); ?></h2>
		<p class="feature-lead"><?php echo esc_html( $featured['long_copy'] ); ?></p>
		<div class="featured-price-row">
			<strong><?php echo esc_html( cyberpunk_glasses_format_price( $featured['price'], $featured['currency'] ) ); ?></strong>
			<span>Premium onboarding and concierge calibration included</span>
		</div>
		<div class="spec-grid">
			<?php foreach ( $featured['specs'] as $label => $value ) : ?>
				<div class="spec-card">
					<span><?php echo esc_html( $label ); ?></span>
					<strong><?php echo esc_html( $value ); ?></strong>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="glass-panel story-panel">
		<p class="eyebrow">Project Scope</p>
		<div class="story-stack">
			<div>
				<h3>Brand system</h3>
				<p>The storefront keeps a consistent cyberpunk visual language across landing, catalog, and conversion flow.</p>
			</div>
			<div>
				<h3>Commerce behavior</h3>
				<p>Products are addable to cart, quantities are adjustable, and the checkout stores orders in the WordPress admin.</p>
			</div>
			<div>
				<h3>Portfolio value</h3>
				<p>You can show not just design but user flow, data capture, and commerce structure inside one theme.</p>
			</div>
		</div>
	</div>
</section>

<section class="trust-grid">
	<div class="glass-panel reviews-panel">
		<p class="eyebrow">Reviews</p>
		<div class="review-list">
			<blockquote>
				<p>"This reads like a real branded store, not a static mock. The cart and checkout make the difference."</p>
				<cite>Retail Design Lead</cite>
			</blockquote>
			<blockquote>
				<p>"The mix of product storytelling and functional flows is exactly what recruiters want to see in a WP portfolio."</p>
				<cite>Frontend Hiring Manager</cite>
			</blockquote>
		</div>
	</div>
	<div class="glass-panel faq-panel">
		<p class="eyebrow">Quick Access</p>
		<div class="faq-list">
			<div>
				<h3>Store</h3>
				<p>Browse all products and product routes from the dedicated catalog page.</p>
			</div>
			<div>
				<h3>Checkout</h3>
				<p>Submit an order and inspect it later in the WordPress admin under Neuro Orders.</p>
			</div>
			<div>
				<h3>About</h3>
				<p>Use the about page as your portfolio case-study narrative for process, stack, and outcomes.</p>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
