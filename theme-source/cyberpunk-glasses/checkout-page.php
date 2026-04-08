<?php
get_header();
?>

<section class="content-shell page-shell">
	<div class="page-hero glass-panel">
		<p class="eyebrow">Checkout</p>
		<h1>Transmit Order Packet</h1>
		<p>This flow stores the order inside WordPress so the project behaves like a real ecommerce prototype.</p>
	</div>
</section>

<section class="checkout-section">
	<div class="checkout-grid">
		<div class="glass-panel checkout-form-panel">
			<p class="eyebrow">Buyer Info</p>
			<form class="checkout-form" data-checkout-form>
				<label>
					<span>Full name</span>
					<input type="text" name="customer_name" placeholder="Aiko Mercer" required>
				</label>
				<label>
					<span>Email</span>
					<input type="email" name="customer_email" placeholder="aiko@neurogrid.io" required>
				</label>
				<label>
					<span>Delivery district</span>
					<input type="text" name="customer_city" placeholder="Neo Madrid / Sector 7" required>
				</label>
				<label>
					<span>Payment rail</span>
					<select name="payment_method">
						<option>Crypto card</option>
						<option>Split pay</option>
						<option>Corporate invoice</option>
					</select>
				</label>
				<label>
					<span>Mission notes</span>
					<textarea name="customer_notes" rows="4" placeholder="Tint, frame finish, delivery note..."></textarea>
				</label>
				<button class="btn-cyber pink" type="submit">Simulate Purchase</button>
				<p class="checkout-feedback" data-checkout-feedback></p>
			</form>
		</div>
		<div class="glass-panel checkout-summary-panel">
			<p class="eyebrow">Order Summary</p>
			<div class="checkout-order-items" data-checkout-order-items></div>
			<div class="summary-stat">
				<span>Total</span>
				<strong data-checkout-total>0.00 CR</strong>
			</div>
			<div class="summary-box">
				<p>Dashboard note</p>
				<h3>Orders are saved in admin</h3>
				<span>Open WordPress admin and check Neuro Orders after submitting.</span>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
