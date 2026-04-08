<?php
get_header();
?>

<section class="content-shell page-shell">
	<div class="glass-panel text-page-panel">
		<p class="eyebrow">Fallback View</p>
		<h1><?php echo esc_html( cyberpunk_glasses_get_page_title( get_bloginfo( 'name' ) ) ); ?></h1>
		<p>This theme is optimized around the storefront routes. Start at the homepage or open the shop directly.</p>
		<div class="hero-actions">
			<a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'home' ) ); ?>" class="btn-cyber">Homepage</a>
			<a href="<?php echo esc_url( cyberpunk_glasses_nav_url( 'shop' ) ); ?>" class="btn-cyber pink">Shop</a>
		</div>
	</div>
</section>

<?php
get_footer();
