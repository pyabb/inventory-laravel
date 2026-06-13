# Changelog

All notable changes to this project will be documented in this file.

## Laravel 10.x - 2026-06-13

### Changed

-   Updated `composer.json` to Laravel 10 dependencies: `laravel/framework ^10.10`, PHP `^8.1`, `laravel/sanctum ^3.3`, `laravel/tinker ^2.8`
-   Updated dev dependencies: `laravel/sail ^1.18`, `nunomaduro/collision ^7.0`, `phpunit/phpunit ^10.1`, `spatie/laravel-ignition ^2.0`
-   Added `php-http/discovery` to `allow-plugins` in `composer.json`
-   Renamed `$routeMiddleware` to `$middlewareAliases` in `app/Http/Kernel.php`

### Removed

-   Removed `$this->registerPolicies()` call from `AuthServiceProvider::boot()` (now handled automatically by the framework)

### Fixed

-   Addressed upgrade notes from Laravel 9→10 shift guide

## Laravel 9.x - 2025-07-18

### Added

-   Laravel Sail for a consistent Docker-based development environment
-   Database migrations and seeders for both development and production environments
-   Development and Production seeder classes

### Changed

-   Updated minimum PHP requirement to 8.0 (project uses PHP 8.2)
-   Migrated from Vue 2 to Vue 3 (breaking changes in Vue API)
-   Replaced Webpack with Vite for faster and more efficient asset building
-   Switched from `{{ csrf_field() }}` to `@csrf` directive
-   Restructured model factories to use the new class-based approach
-   Updated routing syntax to use `::class` notation for controller references
-   Moved models to `App\Models` directory
-   Removed unnecessary JavaScript files to optimize the codebase

### Fixed

-   Adjusted deprecated functions and dependencies
-   Removed `str_slug()` usage (replaced with `Str::slug()`)
-   Replaced `swiftmailer/swiftmailer` with `symfony/mailer`
-   Replaced `symfony/debug` with `symfony/error-handler`

## Laravel 8.x - 2025-06-29

### Added

-   Model factory classes with class-based implementation
-   Migration squashing support
-   Rate limiting improvements
-   New maintenance mode experience with pre-rendered views

### Changed

-   Minimum PHP requirement raised to 7.3
-   Models placed in `App\Models` directory by default
-   Route definitions updated to use `::class` syntax

## Laravel 7.x - 2025-02-08

### Added

-   Laravel Airlock (now Sanctum) for API token authentication
-   Blade component tags
-   Fluent string operations

### Changed

-   Improved routing speed

## Laravel 6.x (LTS) - 2025-02-06

### Added

-   Improved job middleware

### Changed

-   Transitioned to LTS (Long-Term Support)
-   Replaced `str_slug()` helper with `Str::slug()` facade method
-   Replaced `swiftmailer/swiftmailer` with `symfony/mailer`
-   Replaced `symfony/debug` with `symfony/error-handler`

## Laravel 5.8 - 2025-02-05

### Changed

-   Improved email validation
-   Automatic policy discovery
-   Performance optimizations

## Laravel 5.7 - 2025-02-03

### Added

-   New middleware features

### Changed

-   Improvements in error handling

## Laravel 5.6 - 2025-02-03

### Changed

-   Minor updates and security fixes

## Laravel 5.5 - 2024-02-29

### Added

-   Initial project setup
