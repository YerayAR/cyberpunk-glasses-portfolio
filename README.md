# Cyberpunk Glasses Portfolio

Public portfolio deployment of a custom WordPress storefront project.

Live site:
- `https://portfolio-site-alpha-tawny.vercel.app`

GitHub repository:
- `https://github.com/YerayAR/cyberpunk-glasses-portfolio`

## Project Summary

This project started as a custom WordPress theme focused on a branded ecommerce experience for a fictional cyberpunk eyewear company. The goal was to demonstrate:

- custom WordPress theming
- multi-page storefront architecture
- product detail flows
- cart and checkout interaction
- a portfolio structure that can later migrate to a production WordPress stack

## Why This Version Is On Vercel

Vercel is used here as the public portfolio host for a static export of the project. That makes the site easy to share with recruiters and clients without deploying full PHP hosting.

The original project remains WordPress-first. This repository includes both:

- `theme-source/`: the WordPress theme source
- `dist/`: the generated static portfolio build used for deployment

## What Is Functional In The Portfolio

- homepage with branded positioning
- shop page with catalog cards
- individual product pages
- cart state stored in the browser
- checkout simulation for the public demo
- about page explaining migration readiness
- FAQ page explaining the deployment model

## What Would Be Added For Production

If this project were migrated into a production-ready WordPress ecommerce build, the next step would be:

- `MySQL` or `MariaDB`
- `WooCommerce`
- real checkout and payment gateways
- shipping rules and taxes
- customer accounts
- order management and admin workflows

The point of this portfolio is that the information architecture, brand system, and buyer journey are already solved. Production work would mainly be backend integration.

## Local Development

```bash
npm install
npm run build
```

## Files

- [build-static.mjs](./build-static.mjs): static export generator
- [vercel.json](./vercel.json): Vercel build/output config
- [theme-source/cyberpunk-glasses](./theme-source/cyberpunk-glasses): original WordPress theme source
