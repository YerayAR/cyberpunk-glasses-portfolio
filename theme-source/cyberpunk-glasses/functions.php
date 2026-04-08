<?php
/**
 * Theme functions and definitions
 */

function cyberpunk_glasses_get_products() {
	$template_uri = get_template_directory_uri();

	return array(
		array(
			'id'             => 'ar-visor-mk1',
			'name'           => 'AR Visor Mk-I',
			'price'          => 299.99,
			'currency'       => 'CR',
			'image'          => $template_uri . '/assets/images/p1.png',
			'tag'            => 'Best Seller',
			'category'       => 'Street AR',
			'description'    => 'Minimal heads-up visor for navigation, alerts, and media overlays in dense city routes.',
			'long_copy'      => 'AR Visor Mk-I is the entry point for buyers who want a strong visual identity and practical daily utility. It combines route overlays, glare control, and adaptive dimming for commuting, events, and creator workflows.',
			'features'       => array( 'HUD 8K', 'Night Sync', '12h Battery' ),
			'specs'          => array(
				'Lens Engine'   => 'HUD Crystal 8K',
				'Connectivity'  => '5G / WiFi 7 / NFC',
				'Battery'       => '12h active',
				'Frame Weight'  => '148g',
			),
			'rating'         => '4.9',
			'stock'          => 18,
			'secondary_copy' => 'Built for daily commuters who want product-market fit between fashion and utility.',
		),
		array(
			'id'             => 'synthwave-frame',
			'name'           => 'Synthwave Frame',
			'price'          => 149.00,
			'currency'       => 'CR',
			'image'          => $template_uri . '/assets/images/p2.png',
			'tag'            => 'Style Drop',
			'category'       => 'Lifestyle',
			'description'    => 'Lightweight smart frame with directional audio, polarized lenses, and creator presets.',
			'long_copy'      => 'Synthwave Frame is tailored for social creators and lifestyle buyers. It prioritizes comfort, aesthetic presence, and fast switching between live capture, city mode, and night mode.',
			'features'       => array( 'Audio Beam', 'Polarized', 'RGB Lens FX' ),
			'specs'          => array(
				'Lens Engine'   => 'Polarized Prism',
				'Connectivity'  => 'Bluetooth LE / NFC',
				'Battery'       => '16h mixed use',
				'Frame Weight'  => '102g',
			),
			'rating'         => '4.7',
			'stock'          => 26,
			'secondary_copy' => 'The easiest product in the line to market through visual content and influencer collabs.',
		),
		array(
			'id'             => 'stealth-tactical',
			'name'           => 'Stealth Tactical',
			'price'          => 450.00,
			'currency'       => 'CR',
			'image'          => $template_uri . '/assets/images/p3.png',
			'tag'            => 'Elite',
			'category'       => 'Tactical',
			'description'    => 'Protective frame with motion telemetry and enhanced contrast modes for field operations.',
			'long_copy'      => 'Stealth Tactical is designed as a premium operations unit with reinforced construction, motion tracing, and high-contrast viewing. In portfolio terms, it gives the storefront a real high-ticket anchor product.',
			'features'       => array( 'Ballistic Shield', 'Motion Trace', 'Thermal Assist' ),
			'specs'          => array(
				'Lens Engine'   => 'Thermal Contrast Pro',
				'Connectivity'  => '5G / Mesh Sync',
				'Battery'       => '14h tactical mode',
				'Frame Weight'  => '182g',
			),
			'rating'         => '5.0',
			'stock'          => 7,
			'secondary_copy' => 'The premium hero SKU that lifts average order value and strengthens the product ladder.',
		),
		array(
			'id'             => 'neon-commuter',
			'name'           => 'Neon Commuter',
			'price'          => 189.50,
			'currency'       => 'CR',
			'image'          => $template_uri . '/assets/images/p1.png',
			'tag'            => 'Daily Wear',
			'category'       => 'Urban',
			'description'    => 'Traffic-aware frame for daily commutes with calendar sync and anti-reflection tuning.',
			'long_copy'      => 'Neon Commuter is built around practical buyer needs: transport, agenda, glare, and light comfort. It works well as the mid-tier conversion product in a modern catalog.',
			'features'       => array( 'Traffic Pulse', 'Calendar Sync', 'Feather Frame' ),
			'specs'          => array(
				'Lens Engine'   => 'Traffic Pulse View',
				'Connectivity'  => 'LTE / Bluetooth',
				'Battery'       => '18h commute mode',
				'Frame Weight'  => '110g',
			),
			'rating'         => '4.8',
			'stock'          => 31,
			'secondary_copy' => 'Strong for a portfolio because it gives you a clear mainstream buyer persona.',
		),
		array(
			'id'             => 'ghost-runner',
			'name'           => 'Ghost Runner',
			'price'          => 349.00,
			'currency'       => 'CR',
			'image'          => $template_uri . '/assets/images/p2.png',
			'tag'            => 'Performance',
			'category'       => 'Sport',
			'description'    => 'Sport model with biometric tracking, anti-fog optics, and live pace overlays.',
			'long_copy'      => 'Ghost Runner opens up a sport and wellness segment in the store. It brings performance storytelling, biometrics, and a different conversion angle than urban or fashion products.',
			'features'       => array( 'Bio Metrics', 'Anti Fog', 'Sprint Overlay' ),
			'specs'          => array(
				'Lens Engine'   => 'Sprint Overlay OS',
				'Connectivity'  => 'Bluetooth / ANT+',
				'Battery'       => '20h endurance mode',
				'Frame Weight'  => '94g',
			),
			'rating'         => '4.9',
			'stock'          => 12,
			'secondary_copy' => 'Useful for showing category expansion and segment-specific landing copy.',
		),
		array(
			'id'             => 'oracle-signature',
			'name'           => 'Oracle Signature',
			'price'          => 599.00,
			'currency'       => 'CR',
			'image'          => $template_uri . '/assets/images/p3.png',
			'tag'            => 'Luxury',
			'category'       => 'Executive',
			'description'    => 'Premium titanium frame with contextual AI, gesture controls, and executive finish.',
			'long_copy'      => 'Oracle Signature is the top-tier flagship. It lets the brand present luxury positioning, concierge support, and advanced service add-ons like calibration and fleet onboarding.',
			'features'       => array( 'Titanium Body', 'Context AI', 'Gesture UI' ),
			'specs'          => array(
				'Lens Engine'   => 'Oracle Context Suite',
				'Connectivity'  => '5G / WiFi 7 / eSIM',
				'Battery'       => '22h executive mode',
				'Frame Weight'  => '126g',
			),
			'rating'         => '5.0',
			'stock'          => 5,
			'secondary_copy' => 'A high-end SKU is essential if you want this to read like a serious ecommerce portfolio.',
		),
	);
}

function cyberpunk_glasses_get_product( $product_id ) {
	foreach ( cyberpunk_glasses_get_products() as $product ) {
		if ( $product['id'] === $product_id ) {
			return $product;
		}
	}

	return null;
}

function cyberpunk_glasses_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'cyberpunk_glasses_setup' );

function cyberpunk_glasses_register_order_cpt() {
	register_post_type(
		'neuro_order',
		array(
			'labels' => array(
				'name'          => 'Neuro Orders',
				'singular_name' => 'Neuro Order',
			),
			'public'      => false,
			'show_ui'     => true,
			'show_in_menu'=> true,
			'supports'    => array( 'title' ),
			'menu_icon'   => 'dashicons-cart',
		)
	);
}
add_action( 'init', 'cyberpunk_glasses_register_order_cpt' );

function cyberpunk_glasses_register_routes() {
	add_rewrite_rule( '^shop/?$', 'index.php?cg_view=shop', 'top' );
	add_rewrite_rule( '^cart/?$', 'index.php?cg_view=cart', 'top' );
	add_rewrite_rule( '^checkout/?$', 'index.php?cg_view=checkout', 'top' );
	add_rewrite_rule( '^about/?$', 'index.php?cg_view=about', 'top' );
	add_rewrite_rule( '^faq/?$', 'index.php?cg_view=faq', 'top' );
	add_rewrite_rule( '^product/([^/]+)/?$', 'index.php?cg_view=product&cg_product=$matches[1]', 'top' );
}
add_action( 'init', 'cyberpunk_glasses_register_routes' );

function cyberpunk_glasses_register_query_vars( $vars ) {
	$vars[] = 'cg_view';
	$vars[] = 'cg_product';
	return $vars;
}
add_filter( 'query_vars', 'cyberpunk_glasses_register_query_vars' );

function cyberpunk_glasses_maybe_flush_rewrites() {
	$version = 'cg_routes_v2';
	if ( get_option( 'cyberpunk_glasses_route_version' ) !== $version ) {
		flush_rewrite_rules( false );
		update_option( 'cyberpunk_glasses_route_version', $version );
		update_option( 'permalink_structure', '/%postname%/' );
	}
}
add_action( 'init', 'cyberpunk_glasses_maybe_flush_rewrites', 99 );

function cyberpunk_glasses_template_include( $template ) {
	$view = get_query_var( 'cg_view' );
	if ( ! $view ) {
		return $template;
	}

	$map = array(
		'shop'     => 'store-page.php',
		'product'  => 'product-page.php',
		'cart'     => 'cart-page.php',
		'checkout' => 'checkout-page.php',
		'about'    => 'about-page.php',
		'faq'      => 'faq-page.php',
	);

	if ( isset( $map[ $view ] ) ) {
		$file = locate_template( $map[ $view ] );
		if ( $file ) {
			return $file;
		}
	}

	return $template;
}
add_filter( 'template_include', 'cyberpunk_glasses_template_include' );

function cyberpunk_glasses_enqueue_scripts() {
	wp_enqueue_style( 'cyberpunk-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script(
		'cyberpunk-theme',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_localize_script(
		'cyberpunk-theme',
		'cyberpunkStore',
		array(
			'products'  => array_values( cyberpunk_glasses_get_products() ),
			'strings'   => array(
				'empty'            => 'No products in cart yet.',
				'currency'         => 'CR',
				'checkoutDone'     => 'Order transmitted to Neuro Logistics.',
				'checkoutEmpty'    => 'Add at least one product before sending the order.',
				'checkoutError'    => 'The order could not be saved. Try again.',
				'checkoutSuccess'  => 'Order stored successfully.',
			),
			'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
			'nonce'     => wp_create_nonce( 'cyberpunk_checkout' ),
			'urls'      => array(
				'home'     => home_url( '/' ),
				'shop'     => home_url( '/shop/' ),
				'cart'     => home_url( '/cart/' ),
				'checkout' => home_url( '/checkout/' ),
			),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'cyberpunk_glasses_enqueue_scripts' );

function cyberpunk_glasses_format_price( $price, $currency = 'CR' ) {
	return number_format_i18n( (float) $price, 2 ) . ' ' . $currency;
}

function cyberpunk_glasses_get_page_title( $fallback = 'NeuroOptics' ) {
	$view = get_query_var( 'cg_view' );
	if ( 'shop' === $view ) {
		return 'Shop';
	}
	if ( 'product' === $view ) {
		$product = cyberpunk_glasses_get_product( get_query_var( 'cg_product' ) );
		return $product ? $product['name'] : 'Product';
	}
	if ( 'cart' === $view ) {
		return 'Cart';
	}
	if ( 'checkout' === $view ) {
		return 'Checkout';
	}
	if ( 'about' === $view ) {
		return 'About';
	}
	if ( 'faq' === $view ) {
		return 'FAQ';
	}

	return $fallback;
}

function cyberpunk_glasses_nav_url( $target ) {
	$map = array(
		'home'     => home_url( '/' ),
		'shop'     => home_url( '/shop/' ),
		'cart'     => home_url( '/cart/' ),
		'checkout' => home_url( '/checkout/' ),
		'about'    => home_url( '/about/' ),
		'faq'      => home_url( '/faq/' ),
	);

	return isset( $map[ $target ] ) ? $map[ $target ] : home_url( '/' );
}

function cyberpunk_glasses_render_product_card( $product ) {
	$product_url = home_url( '/product/' . $product['id'] . '/' );
	?>
	<article class="product-card" data-product-card>
		<div class="product-badge"><?php echo esc_html( $product['tag'] ); ?></div>
		<a class="product-img-wrapper" href="<?php echo esc_url( $product_url ); ?>">
			<img src="<?php echo esc_url( $product['image'] ); ?>" alt="<?php echo esc_attr( $product['name'] ); ?>">
		</a>
		<div class="product-info">
			<p class="product-category"><?php echo esc_html( $product['category'] ); ?></p>
			<h3 class="product-title"><?php echo esc_html( $product['name'] ); ?></h3>
			<p class="product-copy"><?php echo esc_html( $product['description'] ); ?></p>
			<ul class="product-feature-list">
				<?php foreach ( $product['features'] as $feature ) : ?>
					<li><?php echo esc_html( $feature ); ?></li>
				<?php endforeach; ?>
			</ul>
			<div class="product-meta">
				<p class="product-price"><?php echo esc_html( cyberpunk_glasses_format_price( $product['price'], $product['currency'] ) ); ?></p>
				<p class="product-rating">Rating <?php echo esc_html( $product['rating'] ); ?>/5</p>
			</div>
			<div class="product-actions">
				<button class="btn-cyber pink" type="button" data-add-to-cart data-product-id="<?php echo esc_attr( $product['id'] ); ?>">Add to Cart</button>
				<a href="<?php echo esc_url( $product_url ); ?>" class="text-link">View Product</a>
			</div>
		</div>
	</article>
	<?php
}

function cyberpunk_glasses_handle_checkout() {
	check_ajax_referer( 'cyberpunk_checkout', 'nonce' );

	$payload = isset( $_POST['payload'] ) ? wp_unslash( $_POST['payload'] ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Missing
	$data    = json_decode( $payload, true );

	if ( ! is_array( $data ) || empty( $data['items'] ) || empty( $data['customer_name'] ) || empty( $data['customer_email'] ) ) {
		wp_send_json_error( array( 'message' => 'Invalid checkout payload.' ), 400 );
	}

	$order_total = 0;
	$line_items  = array();

	foreach ( $data['items'] as $item ) {
		$product = cyberpunk_glasses_get_product( sanitize_text_field( $item['id'] ) );
		$qty     = max( 1, absint( $item['qty'] ) );

		if ( ! $product ) {
			continue;
		}

		$line_total   = (float) $product['price'] * $qty;
		$order_total += $line_total;
		$line_items[] = array(
			'id'         => $product['id'],
			'name'       => $product['name'],
			'qty'        => $qty,
			'unit_price' => $product['price'],
			'line_total' => $line_total,
		);
	}

	if ( empty( $line_items ) ) {
		wp_send_json_error( array( 'message' => 'Cart is empty.' ), 400 );
	}

	$order_id = wp_insert_post(
		array(
			'post_type'   => 'neuro_order',
			'post_status' => 'publish',
			'post_title'  => 'Order - ' . sanitize_text_field( $data['customer_name'] ) . ' - ' . wp_date( 'Y-m-d H:i:s' ),
		),
		true
	);

	if ( is_wp_error( $order_id ) ) {
		wp_send_json_error( array( 'message' => 'Could not save order.' ), 500 );
	}

	update_post_meta( $order_id, 'customer_name', sanitize_text_field( $data['customer_name'] ) );
	update_post_meta( $order_id, 'customer_email', sanitize_email( $data['customer_email'] ) );
	update_post_meta( $order_id, 'customer_city', sanitize_text_field( $data['customer_city'] ) );
	update_post_meta( $order_id, 'payment_method', sanitize_text_field( $data['payment_method'] ) );
	update_post_meta( $order_id, 'customer_notes', sanitize_textarea_field( $data['customer_notes'] ) );
	update_post_meta( $order_id, 'line_items', $line_items );
	update_post_meta( $order_id, 'order_total', $order_total );

	wp_send_json_success(
		array(
			'order_id'    => $order_id,
			'order_total' => cyberpunk_glasses_format_price( $order_total ),
			'message'     => 'Order stored successfully.',
		)
	);
}
add_action( 'wp_ajax_cyberpunk_checkout', 'cyberpunk_glasses_handle_checkout' );
add_action( 'wp_ajax_nopriv_cyberpunk_checkout', 'cyberpunk_glasses_handle_checkout' );
