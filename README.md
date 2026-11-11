# Expense Tracker

An early **Laravel 11 / PHP 8.2+ prototype** for a personal finance application. The repository contains authentication, dashboard and wallet views, and initial wallet creation. It is a work in progress, not a completed expense-management product.

## Current implementation

- Registration, login, and logout handlers with session authentication.
- Authenticated dashboard, profile, and wallet routes.
- A wallet model and migration supporting cash, bank, and card types.
- An initial wallet-creation handler that associates a wallet with the signed-in user and stores bank details for bank-type wallets.
- Blade views and committed frontend assets under `public/assets`.

The dashboard and transaction displays currently contain sample content. Wallet detail, edit, update, and delete actions are placeholders; expense recording, category management, and reporting workflows are not implemented.

**Use fictional data for local exploration.** Wallet validation and authorization need further work, and the schema includes financial-detail fields that are not encrypted. This prototype is not ready for real bank or card information.

## Local setup

Requirements: PHP 8.2 or later with Laravel's required extensions and PDO MySQL, Composer, and a local MySQL database.

```sh
git clone https://github.com/muhammad-ibrahim-butt/expense-tracker.git
cd expense-tracker
composer install
php -r "copy('.env.example', '.env');"
php artisan key:generate
```

Create an empty MySQL database named `expense_tracker`. In `.env`, set `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` for that local database, and set `APP_URL=http://127.0.0.1:8000`.

```sh
php artisan migrate
php artisan serve
```

Open http://127.0.0.1:8000/register to create a local account. The dashboard at `/` requires authentication. The current Blade views load committed assets directly; a Vite build is not required for those views.

## Code map

| Area | Location |
| --- | --- |
| Routes and authentication middleware | [routes/web.php](routes/web.php), [bootstrap/app.php](bootstrap/app.php) |
| Authentication handlers | [AuthController.php](app/Http/Controllers/AuthController.php) |
| Initial wallet persistence and unfinished resource actions | [WalletController.php](app/Http/Controllers/WalletController.php) |
| Wallet model | [Wallet.php](app/Models/Wallet.php) |
| Database schema | [database/migrations](database/migrations) |
| Page templates | [resources/views](resources/views) |

## Development status

The tests under `tests/` are Laravel/Pest starter examples, not coverage of the finance workflows. The example feature test expects an unauthenticated visit to `/` to return HTTP 200, while the application routes require login; that assertion needs updating alongside meaningful application tests.

Next steps are validated wallet operations with ownership checks, replacing sample displays with persisted records, implementing expense/category workflows, and adding feature tests. This README describes the checked-in code; it does not claim production readiness.

[Author's portfolio](https://muhammad-ibrahim-butt.github.io/)
