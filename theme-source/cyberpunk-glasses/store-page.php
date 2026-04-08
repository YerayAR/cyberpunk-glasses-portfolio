<?php
$products = cyberpunk_glasses_get_products();
get_header();
?>

<section class="content-shell page-shell">
	<div class="page-hero glass-panel">
		<p class="eyebrow">Shop</p>
		<h1>Hardware Catalog</h1>
		<p>A full catalog page with pricing, product cards, and links to individual product detail pages.</p>
	</div>
</section>

<section class="products">
	<div class="catalog-toolbar glass-panel">
		<div>
			<span class="toolbar-label">Catalog focus</span>
			<strong>Urban, performance, tactical, and luxury segments</strong>
		</div>
		<div class="toolbar-pills">
			<span>Urban</span>
			<span>Lifestyle</span>
			<span>Tactical</span>
			<span>Executive</span>
		</div>
	</div>
	<div class="products-grid">
		<?php foreach ( $products as $product ) : ?>
			<?php cyberpunk_glasses_render_product_card( $product ); ?>
		<?php endforeach; ?>
	</div>
</section>

<?php
get_footer();
