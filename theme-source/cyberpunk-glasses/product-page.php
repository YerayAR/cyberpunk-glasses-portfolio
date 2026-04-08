<?php
$product = cyberpunk_glasses_get_product( get_query_var( 'cg_product' ) );
if ( ! $product ) {
	wp_safe_redirect( cyberpunk_glasses_nav_url( 'shop' ) );
	exit;
}
get_header();
?>

<section class="content-shell product-shell">
	<div class="product-detail-grid">
		<div class="glass-panel product-gallery-panel">
			<p class="eyebrow"><?php echo esc_html( $product['category'] ); ?></p>
			<img class="product-detail-image" src="<?php echo esc_url( $product['image'] ); ?>" alt="<?php echo esc_attr( $product['name'] ); ?>">
		</div>
		<div class="glass-panel product-detail-panel">
			<p class="eyebrow"><?php echo esc_html( $product['tag'] ); ?></p>
			<h1><?php echo esc_html( $product['name'] ); ?></h1>
			<p class="feature-lead"><?php echo esc_html( $product['long_copy'] ); ?></p>
			<div class="featured-price-row">
				<strong><?php echo esc_html( cyberpunk_glasses_format_price( $product['price'], $product['currency'] ) ); ?></strong>
				<span><?php echo esc_html( $product['stock'] ); ?> units in stock</span>
			</div>
			<p class="product-secondary-copy"><?php echo esc_html( $product['secondary_copy'] ); ?></p>
			<ul class="product-feature-list detail-feature-list">
				<?php foreach ( $product['features'] as $feature ) : ?>
					<li><?php echo esc_html( $feature ); ?></li>
				<?php endforeach; ?>
			</ul>
			<div class="detail-actions">
				<button class="btn-cyber pink" type="button" data-add-to-cart data-product-id="<?php echo esc_attr( $product['id'] ); ?>">Add to Cart</button>
				<a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'checkout' ) ); ?>" class="btn-cyber">Buy Now</a>
			</div>
		</div>
	</div>
</section>

<section class="experience-grid">
	<div class="glass-panel featured-panel">
		<p class="eyebrow">Specs</p>
		<div class="spec-grid">
			<?php foreach ( $product['specs'] as $label => $value ) : ?>
				<div class="spec-card">
					<span><?php echo esc_html( $label ); ?></span>
					<strong><?php echo esc_html( $value ); ?></strong>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="glass-panel story-panel">
		<p class="eyebrow">Conversion Notes</p>
		<div class="story-stack">
			<div>
				<h3>Price anchor</h3>
				<p>This detail page reinforces the value proposition with premium framing and product specs.</p>
			</div>
			<div>
				<h3>Category logic</h3>
				<p>The product is placed inside a clear segment so the catalog feels curated, not random.</p>
			</div>
			<div>
				<h3>Flow</h3>
				<p>From this page the buyer can continue to cart or jump directly to checkout.</p>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
