# Scholar

Laravel + Vue 3 + Inertia base project for converting an HTML/CSS/JS web template into a full-stack app.

## Stack

- Laravel 13
- Vue 3 (Composition API / `<script setup>`)
- Inertia.js
- Vite
- SQLite (local)

## Quick start

```bash
cd scholar
composer install
cp .env.example .env   # skip if .env already exists
php artisan key:generate
touch database/database.sqlite   # Windows: New-Item database/database.sqlite -ItemType File
php artisan migrate
php artisan db:seed
npm install
```

`migrate` creates the tables. `db:seed` inserts sample landing-page rows. The SQLite file is gitignored, so every machine needs both commands.

Run both dev servers:

```bash
php artisan serve
npm run dev
```

Visit http://127.0.0.1:8000

## After every `git pull`

Landing-page data lives in the database, not in Git. After pulling, run:

```bash
php artisan migrate
php artisan db:seed
```

Then refresh the browser (restart servers only if they were not already running).

If a section heading shows but cards/slides are missing, the tables exist and the seed was skipped.

## Routes (section ownership)

| Route | Page | Vue file | Owner section |
|-------|------|----------|---------------|
| `/` | Home (landing) | `resources/js/Pages/Home.vue` | Public / index.html |
| `/dashboard` | Dashboard | `resources/js/Pages/Dashboard/Index.vue` | dashboard.html |
| `/profile` | Profile | `resources/js/Pages/Profile.vue` | profile.html |

Home data comes from `HomeController` querying:

- Banner slides → `banner_slides`
- Services → `services`
- About accordion → `about_faqs`
- Courses → `courses`
- Fun facts → `fun_facts`
- Team → `team_members`
- Testimonials → `testimonials`
- Events → `events`

Register Now is `RegisterSection.vue` (form posts to `/register-lead`). Footer is `AppFooter.vue`.

## Project structure

```
scholar/
├── app/Http/Controllers/     # Per-page backend logic + Inertia::render()
├── app/Models/               # Eloquent models for landing-page sections
├── database/migrations/      # Table definitions
├── database/seeders/         # Sample rows (not the SQLite file itself)
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
- Backend data for each page lives in the matching controller method (loaded from the database).
- Use `@/` import alias for `resources/js/` (e.g. `@/Layouts/DashboardLayout.vue`).

## Team workflow

1. Pull latest `main` branch.
2. Run `php artisan migrate` then `php artisan db:seed`.
3. Work only on your assigned page/components.
4. Do not commit `.env`, `vendor/`, `node_modules/`, or `database/*.sqlite`.
5. Test with `php artisan serve` + `npm run dev` before pushing.
