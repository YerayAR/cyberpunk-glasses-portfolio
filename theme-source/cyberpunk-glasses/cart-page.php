<?php
get_header();
?>

<section class="content-shell page-shell">
	<div class="page-hero glass-panel">
		<p class="eyebrow">Cart</p>
		<h1>Review Cart</h1>
		<p>Dedicated cart page for portfolio presentation, quantity updates, and buyer summary.</p>
	</div>
</section>

<section class="checkout-section">
	<div class="checkout-grid">
		<div class="glass-panel checkout-form-panel">
			<p class="eyebrow">Cart Items</p>
			<div class="cart-page-items" data-cart-page-items></div>
		</div>
		<div class="glass-panel checkout-summary-panel">
			<p class="eyebrow">Cart Summary</p>
			<div class="summary-stat">
				<span>Subtotal</span>
				<strong data-cart-page-total>0.00 CR</strong>
			</div>
			<div class="summary-stat">
				<span>Shipping</span>
				<strong>Free over 300.00 CR</strong>
			</div>
			<div class="summary-stat">
				<span>Returns</span>
				<strong>30 day recalibration</strong>
			</div>
			<div class="hero-actions">
				<a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'shop' ) ); ?>" class="btn-cyber">Continue Shopping</a>
				<a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'checkout' ) ); ?>" class="btn-cyber pink">Go to Checkout</a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
