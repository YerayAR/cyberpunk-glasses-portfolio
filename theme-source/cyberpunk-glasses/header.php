<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="scanlines"></div>

<header class="site-header">
	<div class="nav-container">
		<a class="brand" href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'home' ) ); ?>">NEURO<span class="brand-accent">OPTICS</span></a>
		<nav class="nav-menu" aria-label="Primary navigation">
			<ul>
				<li><a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'shop' ) ); ?>">Shop</a></li>
				<li><a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'about' ) ); ?>">About</a></li>
				<li><a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'faq' ) ); ?>">FAQ</a></li>
				<li><a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'checkout' ) ); ?>">Checkout</a></li>
			</ul>
		</nav>
		<div class="header-actions">
			<a class="mini-link" href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'cart' ) ); ?>">Cart Page</a>
			<button class="cart-toggle" type="button" data-cart-toggle aria-controls="cart-panel" aria-expanded="false">
				<span>Cart</span>
				<strong data-cart-count>0</strong>
			</button>
		</div>
	</div>
</header>

<main id="primary" class="site-main">
