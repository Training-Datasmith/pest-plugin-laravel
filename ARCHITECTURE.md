# Architecture: pest-plugin-laravel

## Purpose

A Pest plugin that provides Laravel-specific test helpers. Adds higher-order `actingAs()`, `get()`, `post()`, artisan command assertions, database helpers, and Laravel-specific custom expectations to Pest tests.

## Directory Structure

```
src/
  Plugin.php               — Pest plugin entry point: registers the plugin with Pest kernel
  Pest_Service_Provider.php — Laravel service provider: registers the plugin in the app container
  Autoload.php             — Registers higher-order helpers on the test instance via Pest's API
  Http.php                 — HTTP-related helpers: get(), post(), put(), delete(), actingAs(), etc.
  Authentication.php       — Authentication helpers: actingAs(), be(), withoutMiddleware()
  Database.php             — Database helpers: assertDatabaseHas(), refreshDatabase(), etc.
  Console.php              — Artisan command helpers: artisan(), withoutDebugging()
  Container.php            — Container binding helpers: mock(), spy(), instance()
  Session.php              — Session helpers: withSession(), flushSession()
  Time.php                 — Time freezing: travelTo(), travelBack(), freeze()
  Exception_Handling.php   — Exception handling: withoutExceptionHandling(), throws()
  Expectations.php         — Laravel-specific custom Pest expectations
```

## Key Design Decisions

- **Mixin approach**: Each concern (Http, Database, etc.) is a separate class whose methods are mixed into the Pest test instance via `uses()`
- **Delegates to Laravel's TestCase**: Under the hood, methods call the equivalent Laravel `Illuminate\Testing` methods; this plugin is a thin adapter
- **Service provider + plugin**: Works both as a Laravel service provider (for app-level registration) and as a Pest plugin (for test runner registration)

## Extension Points

- Add `use PestPluginLaravel\Http;` in `tests/Pest.php` to apply HTTP helpers to all tests in a directory
- Add custom Laravel expectations in your project's `tests/Expectations.php`

## Dependency Flow

```
Pest test closure
  → uses(Http::class, Database::class, ...)
  → Pest_Service_Provider (boots Laravel app in test mode)
  → Plugin::bootIfNotBooted()
  → Illuminate\Foundation\Testing\TestCase methods
```
