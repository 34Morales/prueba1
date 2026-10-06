# ClinicWear interface

The interface retains the client's purple, lavender and black palette. Routes,
controllers, database models and existing form field names are unchanged.

## Shared design

- `public/css/design-system.css`: color, spacing and component tokens; account,
  authentication, forms, alerts, cards and modal styles.
- `public/css/store.css`: storefront, catalog and contact layouts.
- `public/js/ui.js`: error associations and duplicate submission feedback for
  existing POST forms; native submission and validation remain intact.
- `public/js/store.js`: local bag, theme, catalog controls and mobile navigation.
- `resources/views/components`: Blade buttons, fields, alerts, modals and icons.
- `resources/views/layouts`: store, account and authentication shells.

The dashboard uses actual account details. No sales, inventory or activity metrics
are invented. The project currently has no business data tables or chart modules.

## Icons

A local subset of [Lucide](https://github.com/lucide-icons/lucide) SVGs is vendored
in `resources/views/components/icons`, alongside its license. The shared
`x-icon` component renders these without a client-side dependency or network
request. To deliberately refresh the subset, run `python scripts/sync-icons.py`.
This development script requires network access; it is not part of page loading
or the production build.

## Existing storefront limitations

Product data is defined in Blade and images are local illustrations. The bag
is saved on the current device and has no checkout backend. The contact form
opens an email draft rather than sending mail from the server. Incomplete
catalog metadata is indicated explicitly instead of simulated availability.

## Validation

Run `php artisan test`, `php artisan view:cache` and the existing Vite build.
Check desktop and mobile navigation, keyboard focus, product filters, size
selection and bag actions in the browser. Respect reduced motion preferences.
