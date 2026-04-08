import fs from 'node:fs/promises';
import path from 'node:path';

const root = process.cwd();
const dist = path.join(root, 'dist');

const products = [
  {
    id: 'ar-visor-mk1',
    name: 'AR Visor Mk-I',
    price: 299.99,
    currency: 'CR',
    image: '/assets/images/p1.png',
    tag: 'Best Seller',
    category: 'Street AR',
    description: 'Minimal heads-up visor for navigation, alerts, and media overlays in dense city routes.',
    longCopy: 'AR Visor Mk-I is the entry point for buyers who want a strong visual identity and practical daily utility. It combines route overlays, glare control, and adaptive dimming for commuting, events, and creator workflows.',
    features: ['HUD 8K', 'Night Sync', '12h Battery'],
    specs: {
      'Lens Engine': 'HUD Crystal 8K',
      Connectivity: '5G / WiFi 7 / NFC',
      Battery: '12h active',
      'Frame Weight': '148g'
    },
    rating: '4.9',
    stock: 18,
    secondaryCopy: 'Built for daily commuters who want product-market fit between fashion and utility.'
  },
  {
    id: 'synthwave-frame',
    name: 'Synthwave Frame',
    price: 149.0,
    currency: 'CR',
    image: '/assets/images/p2.png',
    tag: 'Style Drop',
    category: 'Lifestyle',
    description: 'Lightweight smart frame with directional audio, polarized lenses, and creator presets.',
    longCopy: 'Synthwave Frame is tailored for social creators and lifestyle buyers. It prioritizes comfort, aesthetic presence, and fast switching between live capture, city mode, and night mode.',
    features: ['Audio Beam', 'Polarized', 'RGB Lens FX'],
    specs: {
      'Lens Engine': 'Polarized Prism',
      Connectivity: 'Bluetooth LE / NFC',
      Battery: '16h mixed use',
      'Frame Weight': '102g'
    },
    rating: '4.7',
    stock: 26,
    secondaryCopy: 'The easiest product in the line to market through visual content and influencer collabs.'
  },
  {
    id: 'stealth-tactical',
    name: 'Stealth Tactical',
    price: 450.0,
    currency: 'CR',
    image: '/assets/images/p3.png',
    tag: 'Elite',
    category: 'Tactical',
    description: 'Protective frame with motion telemetry and enhanced contrast modes for field operations.',
    longCopy: 'Stealth Tactical is designed as a premium operations unit with reinforced construction, motion tracing, and high-contrast viewing. In portfolio terms, it gives the storefront a real high-ticket anchor product.',
    features: ['Ballistic Shield', 'Motion Trace', 'Thermal Assist'],
    specs: {
      'Lens Engine': 'Thermal Contrast Pro',
      Connectivity: '5G / Mesh Sync',
      Battery: '14h tactical mode',
      'Frame Weight': '182g'
    },
    rating: '5.0',
    stock: 7,
    secondaryCopy: 'The premium hero SKU that lifts average order value and strengthens the product ladder.'
  },
  {
    id: 'neon-commuter',
    name: 'Neon Commuter',
    price: 189.5,
    currency: 'CR',
    image: '/assets/images/p4.png',
    tag: 'Daily Wear',
    category: 'Urban',
    description: 'Traffic-aware frame for daily commutes with calendar sync and anti-reflection tuning.',
    longCopy: 'Neon Commuter is built around practical buyer needs: transport, agenda, glare, and light comfort. It works well as the mid-tier conversion product in a modern catalog.',
    features: ['Traffic Pulse', 'Calendar Sync', 'Feather Frame'],
    specs: {
      'Lens Engine': 'Traffic Pulse View',
      Connectivity: 'LTE / Bluetooth',
      Battery: '18h commute mode',
      'Frame Weight': '110g'
    },
    rating: '4.8',
    stock: 31,
    secondaryCopy: 'Strong for a portfolio because it gives you a clear mainstream buyer persona.'
  },
  {
    id: 'ghost-runner',
    name: 'Ghost Runner',
    price: 349.0,
    currency: 'CR',
    image: '/assets/images/p5.png',
    tag: 'Performance',
    category: 'Sport',
    description: 'Sport model with biometric tracking, anti-fog optics, and live pace overlays.',
    longCopy: 'Ghost Runner opens up a sport and wellness segment in the store. It brings performance storytelling, biometrics, and a different conversion angle than urban or fashion products.',
    features: ['Bio Metrics', 'Anti Fog', 'Sprint Overlay'],
    specs: {
      'Lens Engine': 'Sprint Overlay OS',
      Connectivity: 'Bluetooth / ANT+',
      Battery: '20h endurance mode',
      'Frame Weight': '94g'
    },
    rating: '4.9',
    stock: 12,
    secondaryCopy: 'Useful for showing category expansion and segment-specific landing copy.'
  },
  {
    id: 'oracle-signature',
    name: 'Oracle Signature',
    price: 599.0,
    currency: 'CR',
    image: '/assets/images/p6.png',
    tag: 'Luxury',
    category: 'Executive',
    description: 'Premium titanium frame with contextual AI, gesture controls, and executive finish.',
    longCopy: 'Oracle Signature is the top-tier flagship. It lets the brand present luxury positioning, concierge support, and advanced service add-ons like calibration and fleet onboarding.',
    features: ['Titanium Body', 'Context AI', 'Gesture UI'],
    specs: {
      'Lens Engine': 'Oracle Context Suite',
      Connectivity: '5G / WiFi 7 / eSIM',
      Battery: '22h executive mode',
      'Frame Weight': '126g'
    },
    rating: '5.0',
    stock: 5,
    secondaryCopy: 'A high-end SKU is essential if you want this to read like a serious ecommerce portfolio.'
  }
];

const featured = products[5];

const formatPrice = (price, currency = 'CR') => `${price.toFixed(2)} ${currency}`;

const layout = ({ title, body }) => `<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>${title}</title>
  <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
  <div class="scanlines"></div>
  <header class="site-header">
    <div class="nav-container">
      <a class="brand" href="/">NEURO<span class="brand-accent">OPTICS</span></a>
      <nav class="nav-menu" aria-label="Primary navigation">
        <ul>
          <li><a href="/shop/">Shop</a></li>
          <li><a href="/about/">About</a></li>
          <li><a href="/faq/">FAQ</a></li>
          <li><a href="/checkout/">Checkout</a></li>
        </ul>
      </nav>
      <div class="header-actions">
        <a class="mini-link" href="/cart/">Cart Page</a>
        <button class="cart-toggle" type="button" data-cart-toggle aria-controls="cart-panel" aria-expanded="false">
          <span>Cart</span>
          <strong data-cart-count>0</strong>
        </button>
      </div>
    </div>
  </header>
  <main id="primary" class="site-main">
    ${body}
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
        <a href="/cart/" class="btn-cyber">View Cart</a>
        <a href="/checkout/" class="btn-cyber pink" data-cart-checkout>Checkout</a>
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
        <a href="/shop/">Shop</a>
        <a href="/cart/">Cart</a>
        <a href="/checkout/">Checkout</a>
      </div>
      <div class="footer-status">
        <span>Ops status</span>
        <strong>Madrid node online / Warehouse sync green</strong>
      </div>
    </div>
  </footer>
  <script src="/assets/js/store-data.js"></script>
  <script src="/assets/js/theme.js"></script>
</body>
</html>`;

const card = (product) => `
  <article class="product-card" data-product-card>
    <div class="product-badge">${product.tag}</div>
    <a class="product-img-wrapper" href="/product/${product.id}/">
      <img src="${product.image}" alt="${product.name}">
    </a>
    <div class="product-info">
      <p class="product-category">${product.category}</p>
      <h3 class="product-title">${product.name}</h3>
      <p class="product-copy">${product.description}</p>
      <ul class="product-feature-list">
        ${product.features.map((feature) => `<li>${feature}</li>`).join('')}
      </ul>
      <div class="product-meta">
        <p class="product-price">${formatPrice(product.price, product.currency)}</p>
        <p class="product-rating">Rating ${product.rating}/5</p>
      </div>
      <div class="product-actions">
        <button class="btn-cyber pink" type="button" data-add-to-cart data-product-id="${product.id}">Add to Cart</button>
        <a href="/product/${product.id}/" class="text-link">View Product</a>
      </div>
    </div>
  </article>
`;

const home = layout({
  title: 'Cyberpunk Glasses Portfolio',
  body: `
    <section id="home" class="hero" style="background-image:url('/assets/images/hero.png');">
      <div class="hero-orbit hero-orbit-left"></div>
      <div class="hero-orbit hero-orbit-right"></div>
      <div class="hero-content">
        <p class="eyebrow">Portfolio Storefront // WordPress Build</p>
        <div class="glitch-wrapper"><h1 class="hero-title">AUGMENT YOUR REALITY</h1></div>
        <p class="hero-subtitle">A portfolio-grade storefront built in WordPress with a full product catalog, product pages, persistent cart, and a checkout flow adapted for static hosting.</p>
        <div class="hero-actions">
          <a href="/shop/" class="btn-cyber">Enter Store</a>
          <a href="/checkout/" class="btn-cyber pink">See Checkout</a>
        </div>
        <div class="hero-metrics">
          <div class="metric-card"><span>Catalog pages</span><strong>6 SKUs</strong></div>
          <div class="metric-card"><span>Portfolio model</span><strong>WP Theme + Vercel</strong></div>
          <div class="metric-card"><span>Delivery</span><strong>Static showcase</strong></div>
        </div>
      </div>
    </section>
    <section class="ticker-band">
      <div class="ticker-track">
        <span>Separate shop page</span><span>Product detail routes</span><span>Persistent cart</span><span>Static checkout demo</span><span>Portfolio-ready case study</span><span>Separate shop page</span>
      </div>
    </section>
    <section class="products">
      <h2 class="section-title">Featured <span class="accent-pink">Selection</span></h2>
      <div class="products-grid">${products.slice(0, 3).map(card).join('')}</div>
      <div class="section-cta"><a href="/shop/" class="btn-cyber">Browse Full Catalog</a></div>
    </section>
    <section class="experience-grid">
      <div class="glass-panel featured-panel">
        <p class="eyebrow">Flagship Unit</p>
        <h2>${featured.name}</h2>
        <p class="feature-lead">${featured.longCopy}</p>
        <div class="featured-price-row"><strong>${formatPrice(featured.price, featured.currency)}</strong><span>Premium onboarding and concierge calibration included</span></div>
        <div class="spec-grid">${Object.entries(featured.specs).map(([k,v]) => `<div class="spec-card"><span>${k}</span><strong>${v}</strong></div>`).join('')}</div>
      </div>
      <div class="glass-panel story-panel">
        <p class="eyebrow">Project Scope</p>
        <div class="story-stack">
          <div><h3>Brand system</h3><p>The storefront keeps a consistent cyberpunk visual language across landing, catalog, and conversion flow.</p></div>
          <div><h3>Commerce behavior</h3><p>Products are addable to cart, quantities are adjustable, and checkout simulates a complete purchase flow.</p></div>
          <div><h3>Portfolio value</h3><p>You can show not just design but user flow, information architecture, and frontend commerce behavior.</p></div>
        </div>
      </div>
    </section>
  `
});

const shop = layout({
  title: 'Shop - Cyberpunk Glasses Portfolio',
  body: `
    <section class="content-shell page-shell"><div class="page-hero glass-panel"><p class="eyebrow">Shop</p><h1>Hardware Catalog</h1><p>A full catalog page with pricing, product cards, and links to individual product detail pages.</p></div></section>
    <section class="products">
      <div class="catalog-toolbar glass-panel">
        <div><span class="toolbar-label">Catalog focus</span><strong>Urban, performance, tactical, and luxury segments</strong></div>
        <div class="toolbar-pills"><span>Urban</span><span>Lifestyle</span><span>Tactical</span><span>Executive</span></div>
      </div>
      <div class="products-grid">${products.map(card).join('')}</div>
    </section>
  `
});

const cart = layout({
  title: 'Cart - Cyberpunk Glasses Portfolio',
  body: `
    <section class="content-shell page-shell"><div class="page-hero glass-panel"><p class="eyebrow">Cart</p><h1>Review Cart</h1><p>Dedicated cart page for portfolio presentation, quantity updates, and buyer summary.</p></div></section>
    <section class="checkout-section">
      <div class="checkout-grid">
        <div class="glass-panel checkout-form-panel"><p class="eyebrow">Cart Items</p><div class="cart-page-items" data-cart-page-items></div></div>
        <div class="glass-panel checkout-summary-panel">
          <p class="eyebrow">Cart Summary</p>
          <div class="summary-stat"><span>Subtotal</span><strong data-cart-page-total>0.00 CR</strong></div>
          <div class="summary-stat"><span>Shipping</span><strong>Free over 300.00 CR</strong></div>
          <div class="summary-stat"><span>Returns</span><strong>30 day recalibration</strong></div>
          <div class="hero-actions">
            <a href="/shop/" class="btn-cyber">Continue Shopping</a>
            <a href="/checkout/" class="btn-cyber pink">Go to Checkout</a>
          </div>
        </div>
      </div>
    </section>
  `
});

const checkout = layout({
  title: 'Checkout - Cyberpunk Glasses Portfolio',
  body: `
    <section class="content-shell page-shell"><div class="page-hero glass-panel"><p class="eyebrow">Checkout</p><h1>Transmit Order Packet</h1><p>This static deployment simulates checkout in the browser while preserving the original WordPress storefront structure.</p></div></section>
    <section class="checkout-section">
      <div class="checkout-grid">
        <div class="glass-panel checkout-form-panel">
          <p class="eyebrow">Buyer Info</p>
          <form class="checkout-form" data-checkout-form>
            <label><span>Full name</span><input type="text" name="customer_name" placeholder="Aiko Mercer" required></label>
            <label><span>Email</span><input type="email" name="customer_email" placeholder="aiko@neurogrid.io" required></label>
            <label><span>Delivery district</span><input type="text" name="customer_city" placeholder="Neo Madrid / Sector 7" required></label>
            <label><span>Payment rail</span><select name="payment_method"><option>Crypto card</option><option>Split pay</option><option>Corporate invoice</option></select></label>
            <label><span>Mission notes</span><textarea name="customer_notes" rows="4" placeholder="Tint, frame finish, delivery note..."></textarea></label>
            <button class="btn-cyber pink" type="submit">Simulate Purchase</button>
            <p class="checkout-feedback" data-checkout-feedback></p>
          </form>
        </div>
        <div class="glass-panel checkout-summary-panel">
          <p class="eyebrow">Order Summary</p>
          <div class="checkout-order-items" data-checkout-order-items></div>
          <div class="summary-stat"><span>Total</span><strong data-checkout-total>0.00 CR</strong></div>
          <div class="summary-box"><p>Portfolio note</p><h3>Static deployment on Vercel</h3><span>The live site simulates checkout locally in the browser.</span></div>
        </div>
      </div>
    </section>
  `
});

const about = layout({
  title: 'About - Cyberpunk Glasses Portfolio',
  body: `
    <section class="content-shell page-shell"><div class="page-hero glass-panel"><p class="eyebrow">About</p><h1>Portfolio Case Study</h1><p>This project is presented as a portfolio storefront that is already structured to migrate later into a production-ready WordPress ecommerce stack.</p></div></section>
    <section class="experience-grid">
      <div class="glass-panel featured-panel">
        <p class="eyebrow">Portfolio Ready For Migration</p>
        <div class="story-stack">
          <div><h3>Structure already defined</h3><p>The project already has the core pages a real store needs: homepage, shop, product detail, cart, checkout, about, and FAQ.</p></div>
          <div><h3>Commerce flow already designed</h3><p>Catalog browsing, product detail, cart logic, and checkout behavior are already solved as a user experience and can be transferred into a production WordPress build.</p></div>
          <div><h3>Brand layer already consistent</h3><p>The visual identity, tone, layout system, and conversion blocks already work as a coherent brand, which makes the migration step mostly technical rather than conceptual.</p></div>
        </div>
      </div>
      <div class="glass-panel story-panel">
        <p class="eyebrow">What Migration Would Mean</p>
        <div class="faq-list">
          <div><h3>What is already finished</h3><p>The information architecture, storefront design, category logic, product storytelling, and buyer journey are already finished enough to present to clients or recruiters.</p></div>
          <div><h3>What would be added in production</h3><p>A production migration would mainly add MySQL or MariaDB, WooCommerce, payment gateways, shipping rules, user accounts, and real order management.</p></div>
          <div><h3>Why this works as a portfolio</h3><p>It shows that the hard parts are already thought through: layout, navigation, conversion intent, product hierarchy, and frontend interaction. The next step is integration, not reinvention.</p></div>
        </div>
      </div>
    </section>
  `
});

const faq = layout({
  title: 'FAQ - Cyberpunk Glasses Portfolio',
  body: `
    <section class="content-shell page-shell"><div class="page-hero glass-panel"><p class="eyebrow">FAQ</p><h1>Store Questions</h1><p>A dedicated support page makes the storefront feel more complete and more believable to reviewers.</p></div></section>
    <section class="content-shell">
      <div class="glass-panel text-page-panel">
        <div class="faq-list">
          <div><h3>Is this a live WordPress site on Vercel?</h3><p>No. The deployed site is a static portfolio export of the original WordPress build.</p></div>
          <div><h3>Does the cart work?</h3><p>Yes. Cart state is stored in the browser with localStorage.</p></div>
          <div><h3>Does checkout create real orders on Vercel?</h3><p>No. Checkout is simulated on the public deployment and stores no server-side data.</p></div>
          <div><h3>Can the original project evolve into a real store?</h3><p>Yes. The WordPress source can be moved later to a PHP host with MySQL and WooCommerce if needed.</p></div>
        </div>
      </div>
    </section>
  `
});

const productPage = (product) => layout({
  title: `${product.name} - Cyberpunk Glasses Portfolio`,
  body: `
    <section class="product-detail-grid">
      <div class="glass-panel product-gallery-panel">
        <p class="eyebrow">${product.category}</p>
        <img class="product-detail-image" src="${product.image}" alt="${product.name}">
      </div>
      <div class="glass-panel product-detail-panel">
        <p class="eyebrow">${product.tag}</p>
        <h1>${product.name}</h1>
        <p class="feature-lead">${product.longCopy}</p>
        <div class="featured-price-row"><strong>${formatPrice(product.price, product.currency)}</strong><span>${product.stock} units in stock</span></div>
        <p class="product-secondary-copy">${product.secondaryCopy}</p>
        <ul class="product-feature-list detail-feature-list">${product.features.map((feature) => `<li>${feature}</li>`).join('')}</ul>
        <div class="detail-actions">
          <button class="btn-cyber pink" type="button" data-add-to-cart data-product-id="${product.id}">Add to Cart</button>
          <a href="/checkout/" class="btn-cyber">Buy Now</a>
        </div>
      </div>
    </section>
    <section class="experience-grid">
      <div class="glass-panel featured-panel">
        <p class="eyebrow">Specs</p>
        <div class="spec-grid">${Object.entries(product.specs).map(([k,v]) => `<div class="spec-card"><span>${k}</span><strong>${v}</strong></div>`).join('')}</div>
      </div>
      <div class="glass-panel story-panel">
        <p class="eyebrow">Conversion Notes</p>
        <div class="story-stack">
          <div><h3>Price anchor</h3><p>This detail page reinforces the value proposition with premium framing and product specs.</p></div>
          <div><h3>Category logic</h3><p>The product is placed inside a clear segment so the catalog feels curated, not random.</p></div>
          <div><h3>Flow</h3><p>From this page the buyer can continue to cart or jump directly to checkout.</p></div>
        </div>
      </div>
    </section>
  `
});

const storeData = `window.cyberpunkStore = ${JSON.stringify({
  products,
  strings: {
    empty: 'No products in cart yet.',
    currency: 'CR',
    checkoutDone: 'Order simulated locally.',
    checkoutEmpty: 'Add at least one product before sending the order.',
    checkoutError: 'The order could not be simulated. Try again.',
    checkoutSuccess: 'Order simulated successfully.'
  },
  ajaxUrl: '',
  nonce: '',
  urls: {
    home: '/',
    shop: '/shop/',
    cart: '/cart/',
    checkout: '/checkout/'
  }
}, null, 2)};`;

await fs.rm(dist, { recursive: true, force: true });
await fs.mkdir(path.join(dist, 'assets', 'images'), { recursive: true });
await fs.mkdir(path.join(dist, 'assets', 'js'), { recursive: true });
await fs.mkdir(path.join(dist, 'shop'), { recursive: true });
await fs.mkdir(path.join(dist, 'cart'), { recursive: true });
await fs.mkdir(path.join(dist, 'checkout'), { recursive: true });
await fs.mkdir(path.join(dist, 'about'), { recursive: true });
await fs.mkdir(path.join(dist, 'faq'), { recursive: true });
await fs.mkdir(path.join(dist, 'product'), { recursive: true });

await fs.writeFile(path.join(dist, 'index.html'), home);
await fs.writeFile(path.join(dist, 'shop', 'index.html'), shop);
await fs.writeFile(path.join(dist, 'cart', 'index.html'), cart);
await fs.writeFile(path.join(dist, 'checkout', 'index.html'), checkout);
await fs.writeFile(path.join(dist, 'about', 'index.html'), about);
await fs.writeFile(path.join(dist, 'faq', 'index.html'), faq);
for (const product of products) {
  const dir = path.join(dist, 'product', product.id);
  await fs.mkdir(dir, { recursive: true });
  await fs.writeFile(path.join(dir, 'index.html'), productPage(product));
}
await fs.writeFile(path.join(dist, 'assets', 'js', 'store-data.js'), storeData);
