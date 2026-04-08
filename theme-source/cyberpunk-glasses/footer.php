</main>

<aside id="cart-panel" class="cart-panel" aria-hidden="true">
	<div class="cart-panel-header">
		<div>
			<p class="eyebrow">Live Cart</p>
			<h2>Selected Hardware</h2>
		</div>
		<button type="button" class="cart-close" data-cart-close aria-label="Close cart">×</button>
	</div>
	<div class="cart-panel-body">
		<div class="cart-items" data-cart-items></div>
	</div>
	<div class="cart-panel-footer">
		<div class="cart-total-row">
			<span>Subtotal</span>
			<strong data-cart-total>0.00 CR</strong>
		</div>
		<div class="cart-footer-actions">
			<a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'cart' ) ); ?>" class="btn-cyber">View Cart</a>
			<a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'checkout' ) ); ?>" class="btn-cyber pink" data-cart-checkout>Checkout</a>
		</div>
	</div>
</aside>

<footer class="site-footer">
	<div class="nav-container footer-grid">
		<div>
			<h2 class="brand footer-brand">NEURO<span class="brand-accent">OPTICS</span></h2>
			<p class="footer-text">Cyber eyewear storefront concept built as a WordPress portfolio piece with real pages, cart state, and order capture.</p>
		</div>
		<div class="footer-links">
			<a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'shop' ) ); ?>">Shop</a>
			<a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'cart' ) ); ?>">Cart</a>
			<a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'checkout' ) ); ?>">Checkout</a>
		</div>
		<div class="footer-status">
			<span>Ops status</span>
			<strong>Madrid node online / Warehouse sync green</strong>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
