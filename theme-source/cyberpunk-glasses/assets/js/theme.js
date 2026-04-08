(function () {
	const store = window.cyberpunkStore || {};
	const products = Array.isArray(store.products) ? store.products : [];
	const strings = store.strings || {};
	const urls = store.urls || {};
	const ajaxUrl = store.ajaxUrl || '';
	const nonce = store.nonce || '';
	const storageKey = 'cyberpunk-cart';
	const byId = new Map(products.map((product) => [product.id, product]));

	const cartPanel = document.querySelector('[id="cart-panel"]');
	const cartItems = document.querySelector('[data-cart-items]');
	const cartTotal = document.querySelector('[data-cart-total]');
	const cartCount = document.querySelector('[data-cart-count]');
	const cartToggle = document.querySelector('[data-cart-toggle]');
	const checkoutForm = document.querySelector('[data-checkout-form]');
	const checkoutFeedback = document.querySelector('[data-checkout-feedback]');
	const cartPageItems = document.querySelector('[data-cart-page-items]');
	const cartPageTotal = document.querySelector('[data-cart-page-total]');
	const checkoutOrderItems = document.querySelector('[data-checkout-order-items]');
	const checkoutTotal = document.querySelector('[data-checkout-total]');

	const readCart = () => {
		try {
			return JSON.parse(localStorage.getItem(storageKey)) || {};
		} catch (error) {
			return {};
		}
	};

	const saveCart = (cart) => {
		localStorage.setItem(storageKey, JSON.stringify(cart));
	};

	const formatPrice = (amount) => `${Number(amount).toFixed(2)} ${strings.currency || 'CR'}`;

	const cartEntries = () =>
		Object.entries(readCart())
			.map(([id, qty]) => {
				const product = byId.get(id);
				if (!product || qty <= 0) {
					return null;
				}
				return { product, qty };
			})
			.filter(Boolean);

	const cartStats = () => {
		let total = 0;
		let units = 0;
		cartEntries().forEach(({ product, qty }) => {
			total += product.price * qty;
			units += qty;
		});
		return { total, units };
	};

	const setPanelState = (open) => {
		if (!cartPanel || !cartToggle) {
			return;
		}
		cartPanel.classList.toggle('is-open', open);
		cartPanel.setAttribute('aria-hidden', open ? 'false' : 'true');
		cartToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
	};

	const renderMiniCart = () => {
		if (!cartItems || !cartTotal || !cartCount) {
			return;
		}

		const entries = cartEntries();
		const { total, units } = cartStats();

		if (!entries.length) {
			cartItems.innerHTML = `<p class="cart-empty">${strings.empty || 'Cart empty'}</p>`;
		} else {
			cartItems.innerHTML = entries
				.map(
					({ product, qty }) => `
						<article class="cart-item">
							<img src="${product.image}" alt="${product.name}">
							<div class="cart-item-copy">
								<h3>${product.name}</h3>
								<p>${formatPrice(product.price)}</p>
								<div class="cart-qty">
									<button type="button" data-cart-adjust="${product.id}" data-direction="-1">-</button>
									<span>${qty}</span>
									<button type="button" data-cart-adjust="${product.id}" data-direction="1">+</button>
								</div>
							</div>
							<strong>${formatPrice(product.price * qty)}</strong>
						</article>
					`
				)
				.join('');
		}

		cartCount.textContent = String(units);
		cartTotal.textContent = formatPrice(total);
	};

	const renderCartPage = () => {
		if (!cartPageItems || !cartPageTotal) {
			return;
		}

		const entries = cartEntries();
		const { total } = cartStats();

		if (!entries.length) {
			cartPageItems.innerHTML = `<p class="cart-empty">${strings.empty || 'Cart empty'}</p>`;
			cartPageTotal.textContent = formatPrice(0);
			return;
		}

		cartPageItems.innerHTML = entries
			.map(
				({ product, qty }) => `
					<article class="cart-page-item">
						<img src="${product.image}" alt="${product.name}">
						<div class="cart-page-item-copy">
							<h3>${product.name}</h3>
							<p>${product.description}</p>
							<div class="cart-qty">
								<button type="button" data-cart-adjust="${product.id}" data-direction="-1">-</button>
								<span>${qty}</span>
								<button type="button" data-cart-adjust="${product.id}" data-direction="1">+</button>
							</div>
						</div>
						<strong>${formatPrice(product.price * qty)}</strong>
					</article>
				`
			)
			.join('');

		cartPageTotal.textContent = formatPrice(total);
	};

	const renderCheckoutSummary = () => {
		if (!checkoutOrderItems || !checkoutTotal) {
			return;
		}

		const entries = cartEntries();
		const { total } = cartStats();

		if (!entries.length) {
			checkoutOrderItems.innerHTML = `<p class="cart-empty">${strings.empty || 'Cart empty'}</p>`;
			checkoutTotal.textContent = formatPrice(0);
			return;
		}

		checkoutOrderItems.innerHTML = entries
			.map(
				({ product, qty }) => `
					<div class="checkout-order-row">
						<span>${product.name} x ${qty}</span>
						<strong>${formatPrice(product.price * qty)}</strong>
					</div>
				`
			)
			.join('');

		checkoutTotal.textContent = formatPrice(total);
	};

	const renderAll = () => {
		renderMiniCart();
		renderCartPage();
		renderCheckoutSummary();
	};

	document.addEventListener('click', (event) => {
		const addButton = event.target.closest('[data-add-to-cart]');
		if (addButton) {
			const productId = addButton.getAttribute('data-product-id');
			const cart = readCart();
			cart[productId] = (cart[productId] || 0) + 1;
			saveCart(cart);
			renderAll();
			setPanelState(true);
			return;
		}

		const adjustButton = event.target.closest('[data-cart-adjust]');
		if (adjustButton) {
			const productId = adjustButton.getAttribute('data-cart-adjust');
			const direction = Number(adjustButton.getAttribute('data-direction') || 0);
			const cart = readCart();
			const nextQty = (cart[productId] || 0) + direction;
			if (nextQty <= 0) {
				delete cart[productId];
			} else {
				cart[productId] = nextQty;
			}
			saveCart(cart);
			renderAll();
			return;
		}

		if (event.target.closest('[data-cart-toggle]')) {
			setPanelState(!cartPanel.classList.contains('is-open'));
			return;
		}

		if (event.target.closest('[data-cart-close]')) {
			setPanelState(false);
		}
	});

	if (checkoutForm) {
		checkoutForm.addEventListener('submit', async (event) => {
			event.preventDefault();

			const entries = cartEntries();
			if (!entries.length) {
				checkoutFeedback.textContent = strings.checkoutEmpty || 'Cart is empty.';
				return;
			}

			const formData = new FormData(checkoutForm);
			const payload = {
				customer_name: formData.get('customer_name'),
				customer_email: formData.get('customer_email'),
				customer_city: formData.get('customer_city'),
				payment_method: formData.get('payment_method'),
				customer_notes: formData.get('customer_notes'),
				items: entries.map(({ product, qty }) => ({ id: product.id, qty })),
			};

			try {
				if (!ajaxUrl || !nonce) {
					checkoutFeedback.textContent = `Order simulated locally. Total ${formatPrice(cartStats().total)}.`;
					checkoutForm.reset();
					saveCart({});
					renderAll();
					return;
				}

				const response = await fetch(ajaxUrl, {
					method: 'POST',
					headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' },
					body: new URLSearchParams({
						action: 'cyberpunk_checkout',
						nonce,
						payload: JSON.stringify(payload),
					}),
				});

				const result = await response.json();
				if (!response.ok || !result.success) {
					throw new Error(result?.data?.message || strings.checkoutError || 'Checkout failed.');
				}

				checkoutFeedback.textContent = `Order #${result.data.order_id} saved. Total ${result.data.order_total}.`;
				checkoutForm.reset();
				saveCart({});
				renderAll();
			} catch (error) {
				checkoutFeedback.textContent = error.message || strings.checkoutError || 'Checkout failed.';
			}
		});
	}

	renderAll();
})();
