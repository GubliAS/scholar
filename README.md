# Scholar

Laravel + Vue 3 + Inertia base project for converting an HTML/CSS/JS web template into a full-stack app.

## Stack

- Laravel 13
- Vue 3 (Composition API / `<script setup>`)
- Inertia.js
- Vite

## Quick start

```bash
cd scholar
composer install
cp .env.example .env   # skip if .env already exists
php artisan key:generate
touch database/database.sqlite   # Windows: New-Item database/database.sqlite -ItemType File
php artisan migrate
npm install
```

Run both dev servers:

```bash
php artisan serve
npm run dev
```

Visit http://127.0.0.1:8000

## Routes (section ownership)

| Route | Page | Vue file | Owner section |
|-------|------|----------|---------------|
| `/` | Home (landing) | `resources/js/Pages/Home.vue` | Public / index.html |
| `/dashboard` | Dashboard | `resources/js/Pages/Dashboard/Index.vue` | dashboard.html |
| `/profile` | Profile | `resources/js/Pages/Profile.vue` | profile.html |

## Project structure

```
scholar/
├── app/Http/Controllers/     # Per-page backend logic + Inertia::render()
├── public/assets/            # Template static files (css, js, img, fonts)
├── resources/js/
│   ├── Pages/                # Inertia pages (one per route)
│   ├── Layouts/              # DashboardLayout.vue
│   └── Components/           # Reusable + Partials (header, sidebar, footer)
├── resources/views/app.blade.php
└── routes/web.php
```

## Template asset migration (Part 5)

1. Copy template folders into `public/assets/`:
   - `css/` → `public/assets/css/`
   - `js/` → `public/assets/js/`
   - `img/` → `public/assets/img/`
   - `fonts/` → `public/assets/fonts/`
2. Uncomment the asset `<link>` / `<script>` tags in `resources/views/app.blade.php`.
3. Convert HTML sections into Vue components (keep Bootstrap/classes from the template).
4. Replace jQuery toggles with Vue reactive state where possible.
5. Use Inertia `<Link>` for internal navigation.

## Conventions

- Follow `.cursor/rules/` (Npontu internship standards).
- Pages in `resources/js/Pages/`, shared UI in `resources/js/Components/`.
- Backend data for each page lives in the matching controller method.
- Use `@/` import alias for `resources/js/` (e.g. `@/Layouts/DashboardLayout.vue`).

## Team workflow

1. Pull latest `scholar` branch.
2. Work only on your assigned page/components.
3. Do not commit `.env`, `vendor/`, or `node_modules/`.
4. Test with `php artisan serve` + `npm run dev` before pushing.
